<?php namespace App;

class Comments {
    public $ref;
    public $mesage;
    public $param;
    public $data;
    public $auth;
    public $users;
    public $options = [];

    public function __construct() {
        $this->ref = '';
        $this->auth = $this->data = $this->param = $this->users = w();

        return;
    }

    public function reset() {
        self::__construct();
    }

    public function reset2() {
        $this->message = '';
        $this->options = w();
    }

    public function receive() {
        global $user;

        if (request_method() != 'post') {
            redirect();
        }

        // Init member
        $user->init();

        if (!$user->is('member')) {
            do_login();
        }

        $this->ref = request_var('ref', $user->d('session_page'), true);

        if (preg_match('#([0-9a-z\-]+)\.(.*?)\.([a-z]+){1,3}(/(.*?))?$#i', $this->ref, $part) && ($part[1] != 'www')) {
            $this->ref = '//' . $part[2] . '.' . $part[3] . '/a/' . $part[1] . $part[4];
        }

        $this->store();

        redirect($this->ref);
    }

    //
    // Store members comments for (all) comment systems
    //
    public function store() {
        global $user;

        $ref = $this->ref;
        if (strpos($ref, '//') !== false) {
            $ref = array_key(explode('//', $this->ref), 1);
        }

        $this->param = explode('/', $ref);
        $this->param = array_splice($this->param, 1, -1);

        $sql = '';
        $id = isset($this->param[3]) ? (int) $this->param[3] : 0;

        if (!isset($this->param[2])) {
            $this->param[2] = 0;
        }

        switch ($this->param[0]) {
            case 'a':
                if ($this->param[2] == 9) {
                    $sql = 'SELECT *
                        FROM _dl d, _artists a
                        WHERE d.id = ?
                            AND a.subdomain = ?
                            AND d.ub = a.ub';
                    $sql = sql_filter($sql, $id, $this->param[1]);

                    $this->data = [
                        'DATA_TABLE' => '_dl',
                        'POST_TABLE' => 'dl_posts',
                        'HISTORY'    => UH_M
                    ];
                } else {
                    $sql = 'SELECT *
                        FROM _artists
                        WHERE subdomain = ?';
                    $sql = sql_filter($sql, $this->param[1]);

                    $this->data = [
                        'DATA_TABLE' => '_artists',
                        'POST_TABLE' => 'artists_posts',
                        'HISTORY'    => UH_C
                    ];
                }
                break;
            case 'events':
                $event_field = (is_numb($this->param[1])) ? 'id' : 'event_alias';

                $sql = 'SELECT *
                    FROM _events
                    WHERE ?? = ?';
                $sql = sql_filter($sql, $event_field, $this->param[1]);

                $this->data = [
                    'DATA_TABLE' => '_events',
                    'POST_TABLE' => 'events_posts',
                    'HISTORY'    => UH_EP
                ];
                break;
            case 'news':
                $sql = 'SELECT *
                    FROM _news
                    WHERE news_alias = ?';
                $sql = sql_filter($sql, $this->param[1]);

                $this->data = [
                    'DATA_TABLE' => '_news',
                    'POST_TABLE' => 'news_posts',
                    'HISTORY'    => UH_NP
                ];
                break;
            case 'art':
                $sql = 'SELECT *
                    FROM _art
                    WHERE art_id = ?';
                $sql = sql_filter($sql, $this->param[1]);

                $this->data = [
                    'DATA_TABLE' => '_art',
                    'POST_TABLE' => 'art_posts',
                    'HISTORY'    => UH_W
                ];
                break;
            case 'm':
                $sql = 'SELECT *
                    FROM _members
                    WHERE username_base = ?';
                $sql = sql_filter($sql, $this->param[1]);

                $this->data = [
                    'DATA_TABLE' => '_members',
                    'POST_TABLE' => 'members_posts',
                    'HISTORY'    => UH_UPM
                ];
                break;
            default:
                fatal_error();
                break;
        }

        if (empty($sql)) {
            fatal_error();
        }

        if (!$post_data = sql_fieldrow($sql)) {
            fatal_error();
        }

        $post_reply   = 0;
        $error        = w();
        $update_sql   = '';
        $current_time = time();

        $this->auth['user'] = $user->is('member');
        $this->auth['adm']  = $user->is('founder');

        //
        // Flood control
        //
        // if (!$this->auth['adm'] && !$this->auth['mod']) {
        //     $where_sql = (!$this->auth['user']) ? "post_ip = '$user_ip'" : "poster_id = " . $userdata['user_id'];
        //     $sql = "SELECT MAX(post_time) AS last_datetime
        //         FROM " . $this->data['POST_TABLE'] . "
        //         WHERE $where_sql";
        //     if ($row = sql_fieldrow($sql)) {
        //         if ((intval($row['last_datetime']) > 0) && ($current_time - intval($row['last_datetime'])) < 10) {
        //             $error[] = 'CHAT_FLOOD_CONTROL';
        //         }
        //     }
        // }

        //
        // Check if message is empty
        //
        if (!count($error)) {
            $message = request_var('message', '', true);

            // Check message
            if (empty($message)) {
                $error[] = 'EMPTY_MESSAGE';
            }
        }

        //
        // Insert processed data
        //
        if (!count($error)) {
            $update_sql = '';
            $post_reply = (isset($this->param[4]) && $this->param[4] == 'reply') ? $id : 0;
            $message    = $this->prepare($message);

            if (strlen($message) > 65534) {
                create_ban_user();
                redirect();
            }

            $insert_data = [
                'post_reply'  => (int) $post_reply,
                'post_active' => 1,
                'poster_id'   => (int) $user->d('user_id'),
                'post_ip'     => (string) $user->ip,
                'post_time'   => (int) $current_time,
                'post_text'   => (string) $message
            ];

            if (!isset($this->param[2])) {
                $this->param[2] = 0;
            }

            switch ($this->param[0]) {
                case 'a':
                    switch ($this->param[2]) {
                        case 9:
                            $insert_data['download_id'] = (int) $post_data['id'];
                            $update_sql = sql_filter('posts = posts + 1 WHERE id = ?', $post_data['id']);

                            $this->data['HISTORY_EXTRA'] = $post_data['ub'];
                            break;
                        case 12:
                        default:
                            $insert_data['post_ub'] = (int) $post_data['ub'];
                            $update_sql = sql_filter('posts = posts + 1 WHERE ub = ?', $post_data['ub']);

                            $this->data['HISTORY_EXTRA'] = $post_data['ub'];
                            $this->data['REPLY_TO_SQL'] = sql_filter('SELECT p.poster_id, m.user_id
                                FROM _artists_posts p, _members m
                                WHERE p.post_id = ?
                                    AND p.poster_id = m.user_id
                                    AND m.user_type NOT IN (??)', $post_reply, USER_INACTIVE);
                            break;
                    }
                    break;
                case 'events':
                    $insert_data['event_id'] = (int) $post_data['id'];
                    $update_sql = sql_filter('posts = posts + 1 WHERE id = ?', $post_data['id']);
                    break;
                case 'news':
                    $insert_data['news_id'] = (int) $post_data['news_id'];
                    $update_sql = sql_filter(
                        'post_replies = post_replies + 1 WHERE news_id = ?',
                        $post_data['news_id']
                    );
                    break;
                case 'art':
                    $insert_data['art_id'] = (int) $post_data['art_id'];
                    $update_sql = sql_filter('posts = posts + 1 WHERE art_id = ?', $post_data['art_id']);
                    break;
                case 'm':
                    $insert_data['userpage_id'] = (int) $post_data['user_id'];
                    $update_sql = sql_filter(
                        'userpage_posts = userpage_posts + 1 WHERE user_id = ?',
                        $post_data['user_id']
                    );

                    $this->data['HISTORY_EXTRA'] = $post_data['user_id'];
                    break;
            }

            $post_id = sql_insert($this->data['POST_TABLE'], $insert_data);

            if ($update_sql != '') {
                $sql = 'UPDATE ' . $this->data['DATA_TABLE'] . ' SET ' . $update_sql;
                sql_query($sql);
            }

            $reply_to = 0;
            $history_extra = isset($this->data['HISTORY_EXTRA']) ? $this->data['HISTORY_EXTRA'] : 0;

            if ($post_reply && isset($this->data['REPLY_TO_SQL'])) {
                if ($reply_row = sql_fieldrow($this->data['REPLY_TO_SQL'])) {
                    $reply_to = ($reply_row['user_id'] != GUEST) ? $reply_row['user_id'] : 0;
                }

                $user->delete_unread($this->data['HISTORY'], $post_reply);
            }

            $notify = true;
            if ($this->param[0] == 'm' && $user->d('user_id') == $post_data['user_id']) {
                $notify = false;
            }

            if ($notify) {
                if ($this->param[0] == 'm') {
                    $emailer = new emailer();

                    $emailer->from('info');
                    $emailer->use_template('user_message');
                    $emailer->email_address($post_data['user_email']);
                    $emailer->set_subject($user->d('username') . ' te envio un mensaje en Rock Republik');

                    $emailer->assign_vars([
                        'USERNAME_TO'   => $post_data['username'],
                        'USERNAME_FROM' => $user->d('username'),
                        'USER_MESSAGE'  => entity_decode($message),
                        'U_PROFILE'     => s_link('@m', $user->d('username_base'))
                    ]);
                    $emailer->send();
                    $emailer->reset();

                    $user->save_unread($this->data['HISTORY'], $post_id, $history_extra, $post_data['user_id']);
                } else {
                    $user->save_unread($this->data['HISTORY'], $post_id, $history_extra, $reply_to, false);

                    // Points
                    //$user->points_add(1);
                }
            }

            // Userpage messages
            if ($this->param[0] == 'm') {
                $sql = 'SELECT post_id
                    FROM _members_posts p, _members_unread u
                        WHERE u.item = p.post_id
                            AND p.userpage_id = ?
                            AND p.poster_id = ?';
                $sql = sql_filter($sql, $user->d('user_id'), $post_data['user_id']);

                if ($rows = sql_rowset($sql, false, 'post_id')) {
                    $sql = 'DELETE FROM _members_unread
                        WHERE user_id = ?
                            AND element = ?
                            AND item IN (??)';
                    sql_query(sql_filter($sql, $user->d('user_id'), UH_UPM, implode(',', $rows)));
                }
            }
        } else {
            $user->setup();

            $format = '%s<br /><br /><br /><a href="%s">%s</a>';
            $message = sprintf($format, parse_error($error), $ref, lang('click_return_lastpage'));

            trigger_error($message);
        }

        return;
    }

    //
    // View comments
    //
    public function view(
        $start,
        $start_field,
        $total_items,
        $items_pp,
        $tpl_prefix        = '',
        $pag_prefix        = '',
        $pag_lang_prefix   = '',
        $simple_pagination = false
    ) {
        global $user;

        if ($tpl_prefix == '') {
            $tpl_prefix = 'posts';
        }

        $ref         = $this->ref;
        $this->ref   = preg_replace('#^/?(.*?)/?$#', '\1', $this->ref);
        $this->param = explode('/', $this->ref);
        $this->ref   = $ref;

        if (!isset($start)) {
            $start = request_var($start_field, 0);
        }

        if (!$result = sql_rowset($this->data['SQL'])) {
            return false;
        }

        if (!isset($this->data['A_LINKS_CLASS'])) {
            $this->data['A_LINKS_CLASS'] = '';
        }

        if (!isset($this->data['ARTISTS_NEWS'])) {
            $this->data['ARTISTS_NEWS'] = false;
        }

        if (!isset($this->data['CONTROL'])) {
            $this->data['CONTROL'] = w();
        }

        $sizeof_controls = sizeof($this->data['CONTROL']);
        _style($tpl_prefix);

        $controls_data = w();
        $user_profile  = w();

        foreach ($result as $row) {
            $uid = $row['user_id'];
            if (!isset($user_profile[$uid]) || ($uid == GUEST)) {
                $user_profile[$uid] = $this->user_profile($row);
            }

            $topic_title = (isset($row['topic_title']) && $row['topic_title'] != '') ? $row['topic_title'] : '';
            if ($topic_title == '') {
                $topic_title = (isset($row['post_subject']) && $row['post_subject'] != '') ? $row['post_subject'] : '';
            }

            if (!empty($topic_title)) {
                $prf = '#(.*?): (.*?)#';
                $topic_title = $this->data['ARTISTS_NEWS'] ? preg_replace($prf, '\\2', $topic_title) : $topic_title;
            }

            $data = [
                'POST_ID'  => $row['post_id'],
                'DATETIME' => $user->format_date($row['post_time']),
                'SUBJECT'  => $topic_title,
                'MESSAGE'  => $this->parse_message($row['post_text'], $this->data['A_LINKS_CLASS']),
                'REPLIES'  => ($this->data['ARTISTS_NEWS']) ? $row['topic_replies'] : 0,
                'S_DELETE' => false
            ];

            if (!isset($this->data['USER_ID_FIELD'])) {
                $this->data['USER_ID_FIELD'] = 'poster_id';
            }

            if (!isset($row[$this->data['USER_ID_FIELD']])) {
                $row[$this->data['USER_ID_FIELD']] = 0;
            }

            if (!isset($this->data['S_DELETE_URL'])) {
                $this->data['S_DELETE_URL'] = '';
            }

            $identical_user = $user->d('user_id') === $row[$this->data['USER_ID_FIELD']];

            if (isset($this->data['USER_ID_FIELD']) && ($user->is('founder') || $identical_user)) {
                $data['S_DELETE'] = sprintf($this->data['S_DELETE_URL'], $row['post_id']);
            }

            foreach ($user_profile[$uid] as $key => $value) {
                $data[strtoupper($key)] = $value;
            }

            _style($tpl_prefix . '.item', $data);
            _style($tpl_prefix . '.item.' . (($uid != GUEST) ? 'username' : 'guestuser'));

            if ($sizeof_controls) {
                _style($tpl_prefix . '.item.controls');

                foreach ($this->data['CONTROL'] as $block => $block_data) {
                    foreach ($block_data as $item => $item_data) {
                        $controls_data[$item_data['ID']][$item] = sprintf($item_data['URL'], $row[$item_data['ID']]);
                    }
                    _style($tpl_prefix . '.item.controls.' . $block, $controls_data[$item_data['ID']]);
                }
            }
        }

        $f_pagination = __NAMESPACE__;
        $f_pagination .= ($simple_pagination) ? '\\build_pagination' : '\\build_num_pagination';
        $f_pagination($ref . $start_field . '%d/', $total_items, $items_pp, $start, $pag_prefix, $pag_lang_prefix);

        return true;
    }

    //
    // Get formatted member profile fields
    //
    public function user_profile(&$row, $a_class = '', $unset_fields = false) {
        global $user;
        static $all_ranks;

        if (!isset($this->users[$row['user_id']]) || $row['user_id'] == GUEST) {
            $data = w();

            foreach ($row as $key => $value) {
                if (strpos($key, 'user') === false && $key != 'post_id') {
                    continue;
                }

                switch ($key) {
                    case 'username':
                        $row['post_username'] = isset($row['post_username']) ? $row['post_username'] : '';
                        $data['username'] = ($row['user_id'] != GUEST) ? $value : guestUsername($row['post_username']);
                        break;
                    case 'username_base':
                        $data['profile'] = ($row['user_id'] != GUEST) ? s_link('m', $value) : '';
                        break;
                    case 'user_sig':
                        $data[$key] = '';

                        if (!empty($value)) {
                            $format = '<div id="%s" class="lsig">%s</div>';
                            $sig_id = isset($row['post_id']) ? '_sig_' . $row['post_id'] : '';

                            $data[$key] = sprintf($format, $sig_id, $this->parse_message($value, $a_class));
                        }
                        break;
                    case 'user_avatar':
                        $data[$key] = get_user_avatar($value, $row['user_id']);
                        break;
                    case 'user_rank':
                        if (!isset($all_ranks)) {
                            $all_ranks = $user->init_ranks() ?: [];
                        }

                        if ($row['user_id'] == GUEST) {
                            $data[$key] = lang('guest');
                            break;
                        }

                        $value_rank = '';

                        if ($value) {
                            foreach ($all_ranks as $rank) {
                                if (($row['user_rank'] == $rank['rank_id']) && $rank['rank_special']) {
                                    $part       = explode('|', $rank['rank_title']);
                                    $gender     = $row['user_gender'];
                                    $value_rank = isset($part[$gender]) ? $part[$gender] : $part[0];

                                    break;
                                }
                            }
                        } elseif (isset($row['user_gender']) && isset($row['user_posts'])) {
                            foreach ($all_ranks as $rank) {
                                if (($row['user_posts'] >= $rank['rank_min']) && !$rank['rank_special']) {
                                    $part       = explode('|', $rank['rank_title']);
                                    $gender     = $row['user_gender'];
                                    $value_rank = isset($part[$gender]) ? $part[$gender] : $part[0];

                                    break;
                                }
                            }
                        }

                        $data[$key] = $value_rank;
                        break;
                    default:
                        if ($value != '') {
                            $data[$key] = $value;
                        }
                        break;
                }
            }

            if ($unset_fields !== false) {
                foreach ($unset_fields as $field) {
                    unset($data[$field]);
                }
            }

            $this->users[$row['user_id']] = $data;
        }

        return $this->users[$row['user_id']];
    }

    //
    // Comments system functions
    //

    //
    // This function will prepare a posted message for
    // entry into the database.
    //
    public function prepare($message) {
        global $user;

        // Do some general 'cleanup' first before processing message,
        // e.g. remove excessive newlines(?), smilies(?)
        // Transform \r\n and \r into \n
        $match   = [
            '#\r\n?#',
            '#sid=[a-z0-9]*?&amp;?#',
            "#([\n][\s]+){3,}#",
            "#(\.){3,}#",
            '#(script|about|applet|activex|chrome):#i'
        ];
        $replace = [nr(), '', nr(false, 2), '...', "\\1&#058;"];

        $message = preg_replace($match, $replace, trim($message));
        $message = preg_replace('/(.)\1{10,}/', "$1$1", $message);

        if ($user->is('founder') && preg_match('#\[chown\:([0-9a-z\_\-]+)\]#is', $message, $a_chown)) {
            $sql = 'SELECT *
                FROM _members
                WHERE username_base = ?';
            if ($row = sql_fieldrow(sql_filter($sql, $a_chown[1]))) {
                $sql = 'UPDATE _members SET user_lastvisit = ?
                    WHERE user_id = ?';
                sql_query(sql_filter($sql, time(), $row['user_id']));

                $user->d(false, $row);
            }

            $message = str_replace('[chown:' . $a_chown[1] . ']', '', $message);
        }

        $allowed_tags = w('br strong ul ol li em small');
        $is_mod = $user->is('mod');

        if ($is_mod) {
            $mod_tags     = w('blockquote object param a h1 h2 h3 div span img table tr td th');
            $allowed_tags = array_merge($allowed_tags, $mod_tags);
        }

        $ptags = str_replace('*', '.*?', implode('|', $allowed_tags));
        $message = preg_replace('#&lt;(\/?)(' . $ptags . ')&gt;#is', '<$1$2>', $message);

        if ($is_mod) {
            if (preg_match_all('#&lt;(' . $ptags . ') (.*?)&gt;#is', $message, $in_quotes)) {
                $repl = ['&lt;' => '<', '&gt;' => '>', '&quot;' => '"'];

                foreach ($in_quotes[0] as $item) {
                    $replace = str_replace(array_keys($repl), array_values($repl), $item);
                    $message = preg_replace('#' . preg_quote($item, '#') . '#is', $replacement, $message);
                }
            }
        }

        return $message;
    }

    public function remove_quotes($message) {
        if (strpos($message, '<blockquote>') !== false) {
            $mesage  = preg_replace("#<blockquote>.*?blockquote>(.*?)#is", '\\1', $message);
            $message = preg_replace('#^<br />#is', '', $message);
            $message = trim($message);
        }

        return $message;
    }

    //
    // Start Conversations System
    //

    //
    // Store new conversation
    //
    public function store_dc($mode, $to, $from, $subject, $message, $can_reply = true, $can_email = false) {
        global $user;

        if ($mode == 'reply') {
            $insert = [
                'parent_id'            => (int) $to['parent_id'],
                'privmsgs_type'        => PRIVMSGS_NEW_MAIL,
                'privmsgs_from_userid' => (int) $from['user_id'],
                'privmsgs_to_userid'   => (int) $to['user_id'],
            ];
        } else {
            $insert = [
                'privmsgs_type'        => PRIVMSGS_NEW_MAIL,
                'privmsgs_subject'     => $subject,
                'privmsgs_from_userid' => (int) $from['user_id'],
                'privmsgs_to_userid'   => (int) $to['user_id']
            ];
        }

        $insert += [
            'privmsgs_date' => time(),
            'msg_ip'        => $user->ip,
            'privmsgs_text' => $this->prepare($message),
            'msg_can_reply' => (int) $can_reply
        ];

        $dc_id = sql_insert('dc', $insert);

        if ($mode == 'reply') {
            $sql = 'UPDATE _dc SET root_conv = root_conv + 1, last_msg_id = ?
                WHERE msg_id = ?';
            sql_query(sql_filter($sql, $dc_id, $to['msg_id']));

            $sql = 'UPDATE _dc SET msg_deleted = 0
                WHERE parent_id = ?';
            sql_query(sql_filter($sql, $to['parent_id']));

            $user->delete_unread(UH_NOTE, $to['parent_id']);
        } else {
            $sql = 'UPDATE _dc SET parent_id = ?, last_msg_id = ?
                WHERE msg_id = ?';
            sql_query(sql_filter($sql, $dc_id, $dc_id, $dc_id));
        }

        $user->save_unread(UH_NOTE, (($mode == 'reply') ? $to['parent_id'] : $dc_id), 0, $to['user_id']);

        //
        // Notify via email if user requires it
        //
        if ($mode == 'start' && $can_email && $user->d('user_email_dc')) {
            $emailer = new emailer();

            $emailer->from('info');
            $emailer->set_subject('Rock Republik: ' . $from['username'] . ' te ha enviado un mensaje');
            $emailer->use_template('dc_email');
            $emailer->email_address($to['user_email']);

            $emailer->assign_vars([
                    'USERNAME' => $to['username'],
                    'SENT_BY'  => $from['username'],
                    'DC_URL'   => s_link('@my dc read', $dc_id)
            ]);
            $emailer->send();
            $emailer->reset();
        }

        return $dc_id;
    }

    //
    // Delete conversation/s
    //
    public function dc_delete($mark) {
        if (!is_array($mark) || !sizeof($mark)) {
            return;
        }

        global $user;

        $sql = '((privmsgs_to_userid = ?) OR (privmsgs_from_userid = ?))';
        $sql_member = sql_filter($sql, $user->d('user_id'), $user->d('user_id'));

        $sql = 'SELECT *
            FROM _dc
            WHERE parent_id IN (??)
                AND ' . $sql_member;
        if (!$result = sql_rowset(sql_filter($sql, implode(',', array_map('intval', $mark))))) {
            return false;
        }

        $update_a = $delete_a = w();

        foreach ($result as $row) {
            $var = ($row['msg_deleted'] && ($row['msg_deleted'] != $user->d('user_id'))) ? 'delete_a' : 'update_a';

            if (!isset(${$var}[$row['parent_id']])) {
                ${$var}[$row['parent_id']] = true;
            }
        }

        //
        if (sizeof($update_a)) {
            $sql = 'UPDATE _dc
                SET msg_deleted = ?
                WHERE parent_id IN (??)
                    AND ' . $sql_member;
            sql_query(sql_filter($sql, $user->d('user_id'), implode(',', array_map('intval', array_keys($update_a)))));

            $user->delete_unread(UH_NOTE, array_keys($update_a));
        }

        if (sizeof($delete_a)) {
            $sql = 'DELETE FROM _dc
                WHERE parent_id IN (??)
                    AND ' . $sql_member;
            sql_query(sql_filter($sql, implode(',', array_map('intval', array_keys($delete_a)))));

            $user->delete_unread(UH_NOTE, array_keys($delete_a));
        }

        return true;
    }

    //
    // Message parser methods
    //

    public function parse_message($message, $a_class = '') {
        $this->message = ' ' . $message . ' ';
        unset($message);

        // $this->parse_flash();
        $this->parse_youtube();
        $this->parse_images();
        $this->parse_url();
        $this->parse_bbcode();
        $this->parse_smilies();
        $this->a_links($a_class);
        $this->d_links();
        $this->members_profile();
        $this->members_icon();
        // $this->replace_blockquote();

        return str_replace(nr(), '<br />', substr($this->message, 1, -1));
    }

    public function replace_blockquote() {
        if (strstr($this->message, '<blockquote>')) {
            $orig   = ['<blockquote>', '</blockquote>'];
            $repl_1 = ['<div class="msg-bq pad4 sub-color box2">', '</div><br />'];
            $repl_2 = ['<blockquote>', '</blockquote>'];

            $this->message = str_replace($orig, $repl_1, $this->message);
            $this->message = str_replace($orig, $repl_2, $this->message);
        }
    }

    public function parse_html($message) {
        global $user, $cache;

        /*

        <img src="http://*" alt="*" />
        <img src="http://\1" alt="\2" />

        <a href="*">*</a>
        <a href="\1" target="_blank">\2</a>

        */

        $html = w();
        $exclude = w();
        if (!$user->is('founder')) {
            $sql = 'SELECT *
                FROM _html_exclude
                WHERE html_member = ?';
            if ($result = sql_rowset(sql_filter($sql, $user->d('user_id')))) {
                $delete_expired = w();
                $current_time = time();

                foreach ($result as $row) {
                    if ($row['exclude_until'] > $current_time) {
                        $exclude[] = $row_exclude['exclude_html'];
                    } else {
                        $delete_expired[] = $row_exclude['exclude_id'];
                    }
                }
            }
        }

        if (!$html = $cache->get('html')) {
            $sql = 'SELECT *
                FROM _html';
            if ($html = sql_rowset($sql, 'html_id')) {
                $cache->save('html', $html);
            }
        }

        if (sizeof($exclude)) {
            foreach ($exclude as $item) {
                unset($html[$item]);
            }
        }
    }

    public function parse_bbcode() {
        $orig = ['[sb]', '[/sb]'];
        $repl = ['<blockquote>', '</blockquote>'];

        $this->message = str_replace($orig, $repl, $this->message);
    }

    public function parse_youtube() {
        $format = '<iframe width="560" height="315" src="%s" frameborder="0" allowfullscreen></iframe>';
        $embed = 'https://www.youtube.com/embed/';

        $search = '/https?:\/\/(?:www\.)?youtu(?:\.be|be\.com)\/watch(?:\?(.*?)&|\?)v=([a-zA-Z0-9_\-]+)(\S*)/i';

        if (preg_match_all($search, $this->message, $match)) {
            foreach ($match[0] as $i => $row) {
                $replace = sprintf($format, $embed . $match[2][$i]);
                $this->message = str_replace($row, $replace, $this->message);
            }
        }

        if (preg_match_all('#(^|[\n ]|\()\[yt\:([0-9a-zA_Z\-\=\_\&]+)\]#i', $this->message, $match)) {
            $format = sprintf($format, $embed . '$2');

            $this->message = preg_replace('#(^|[\n ]|\()\[yt\:([0-9a-zA_Z\-\=\_\&]+)\]#i', $format, $this->message);
        }

        return;
    }

    public function parse_flash() {
        $p = '#(^|[\n ]|\()\[flash\:([\w]+?://.*?([^ \t\n\r<"\'\)]*)?)\:(\d+)\:(\d+)\]#ie';
        if (preg_match_all($p, $this->message, $match)) {
            $format  = '\'$1<div id="flash_"></div><script type="text/javascript">';
            $format .= 'swfobject.embedSWF("$2", "flash_", "$4", "$5", "8.0.0", "expressInstall.swf"); </script>\'';

            $this->message = preg_replace($p, $format, $this->message);
        }

        return;
    }

    public function parse_images() {
        $format = '#(^|[\n ]|\()(http|https|ftp)://([a-z0-9\-\.,\?!%\*_:;~\\&$@/=\+]+)(gif|jpg|jpeg|png)#i';

        if (preg_match_all($format, $this->message, $match)) {
            $orig = $repl = w();
            foreach ($match[0] as $item) {
                $item = trim($item);
                $orig[] = '#(^|[\n ]|\()(' . preg_quote($item) . ')#i';
                $repl[] = '\\1<img src="' . $item . '" border="0" alt="" />';
            }

            if (sizeof($orig)) {
                $this->message = preg_replace($orig, $repl, $this->message);
            }
        }

        return;
    }

    public function parse_url() {
        global $user;

        if (!isset($this->options['url'])) {
            $quote = preg_quote(get_protocol() . config('server_name'), '#');

            $this->options['url'] = [
                'orig' => [
                    '#(script|about|applet|activex|chrome):#is',
                    '#(^|[\n ]|\()(' . $quote . ')/(.*?([^ \t\n\r<"\'\)]*)?)#is',
                    '#(^|[\n ]|\()([\w]+?://.*?([^ \t\n\r<"\'\)]*)?)#i',
                    '#(^|[\n ]|\()(www\.[\w\-]+\.[\w\-.\~]+(?:/[^ \t\n\r<"\'\)]*)?)#i',
                    '#(^|[\n ]|\()([a-z0-9&\-_.]+?@[\w\-]+\.([\w\-\.]+\.)?[\w]+)#i'
                ],
                'repl' => [
                    '\\1&#058;',
                    '$1<a href="$2/$3">$2/$3</a>',
                    '$1<a href="$2" target="_blank">$2</a>',
                    '$1<a href="http://$2" target="_blank">$2</a>',
                    '$1<a href="mailto:$2">$2</a>'
                ]
            ];

            // if (!$user->is('member')) {
            //     $this->options['url']['orig'][4] = '#(^|[\n ]|\()(([a-z0-9&\-_.]+?@)([\w\-]+\.([\w\-\.]+\.)?[\w]+))#s';
            //     $this->options['url']['repl'][4] = "\$1<span class=\"red\">$3'.substr('$4', 0, 4).'...</span>";
            // }
        }

        $this->message = preg_replace($this->options['url']['orig'], $this->options['url']['repl'], $this->message);

        return;
    }

    public function parse_smilies() {
        if (!isset($this->options['smilies'])) {
            global $cache;

            if (!$smilies = $cache->get('smilies')) {
                $sql = 'SELECT *
                    FROM _smilies
                    ORDER BY LENGTH(code) DESC';
                if ($smilies = sql_rowset($sql)) {
                    $cache->save('smilies', $smilies);
                }
            }

            if (is_array($smilies)) {
                foreach ($smilies as $row) {
                    $format = ' <img src="%s" alt="%s" />';
                    $path   = config('assets_url') . '/emoticon/' . $row['smile_url'];

                    $this->options['smilies']['orig'][] = '#(^|[\n ]|\.|\()' . preg_quote($row['code'], '#') . '#';
                    $this->options['smilies']['repl'][] = sprintf($format, $path, $row['emoticon']);
                }
            }
        }

        if (count($this->options['smilies'])) {
            $this->message = preg_replace(
                $this->options['smilies']['orig'],
                $this->options['smilies']['repl'],
                $this->message
            );
        }

        return;
    }

    public function a_links($style = 'ub-url') {
        if (!isset($this->options['a'])) {
            global $cache;

            if (!$this->options['a']['match'] = $cache->get('ub_list')) {
                $sql = 'SELECT name
                    FROM _artists
                    ORDER BY name';
                $result = sql_rowset($sql);

                foreach ($result as $row) {
                    $this->options['a']['match'][] = $row['name'];
                }

                $cache->save('ub_list', $this->options['a']['match']);
            }
        }

        if (preg_match_all('#\b(' . implode('|', $this->options['a']['match']) . ')\b#i', $this->message, $match)) {
            foreach ($match[1] as $n) {
                $m = strtolower($n);
                $k = str_replace([' ', '_'], '', $m);

                if (!isset($this->options['a']['data'][$k])) {
                    $this->options['a']['data'][$k] = ucwords($m);
                }
            }

            $orig = $repl = w();
            foreach ($this->options['a']['data'] as $sub => $real) {
                $orig[] = '#(^|\s)(?<=.\W|\W.|^\W)\b(' . preg_quote($real, "#") . ')\b(?=.\W|\W.|\W$)#is';
                $repl[] = '\\1<a href="' . s_link('a', $sub) . '">' . $real . '</a>';
            }

            $this->message = preg_replace($orig, $repl, $this->message);
        }

        return;
    }

    public function d_links($style = '') {
        global $user;

        if (!isset($this->options['downloads'])) {
            global $cache;

            if (!$this->options['downloads']['list'] = $cache->get('downloads_list')) {
                $sql = 'SELECT a.name, a.subdomain, d.id, d.title
                    FROM _artists a, _dl d
                    WHERE a.ub = d.ub
                    ORDER BY d.id';
                $result = sql_rowset($sql);

                foreach ($result as $row) {
                    $this->options['downloads']['list'][$row['id']] = $row;
                }

                $cache->save('downloads_list', $this->options['downloads']['list']);
            }
        }

        if (preg_match_all('#\:d(\d+)(\*)?\:#', $this->message, $match)) {
            $orig = $repl = w();
            foreach ($match[1] as $i => $download) {
                if (isset($this->options['downloads']['list'][$download])) {
                    $format = '<a href="%s" title="%s - %s">%s</a>';

                    $show  = (isset($match[2][$i]) && $match[2][$i] != '');
                    $link  = s_link('a', $this->options['downloads']['list'][$download]['subdomain'], '9', $download);
                    $text  = $show ? $this->options['downloads']['list'][$download]['name'] . ' - ' : '';
                    $text .= $this->options['downloads']['list'][$download]['title'];

                    $orig[] = ':d' . $download . $match[2][$i] . ':';
                    $repl[] = sprintf(
                        $format,
                        $link,
                        $this->options['downloads']['list'][$download]['name'],
                        $this->options['downloads']['list'][$download]['title'],
                        $text
                    );
                }
            }

            if (count($orig)) {
                $this->message = str_replace($orig, $repl, $this->message);
            }
        }

        return;
    }

    public function members_profile() {
        if (preg_match_all('#\:m([0-9a-zA-Z\_\- ]+)\:#ii', $this->message, $match)) {
            $orig = $repl = w();
            foreach ($match[1] as $o_member) {
                $member = get_username_base($o_member);
                if (!isset($this->options['members'][$member])) {
                    $format = '<a href="%s">%s</a>';
                    $this->options['members'][$member] = sprintf($format, s_link('m', $member), $o_member);
                }

                $orig[] = ':m' . $o_member . ':';
                $repl[] = $this->options['members'][$member];
            }
            $this->message = str_replace($orig, $repl, $this->message);
        }

        return;
    }

    public function members_icon() {
        if (preg_match_all('#\:i([0-9a-zA-Z\_\- ]+)\:#si', $this->message, $match)) {
            $orig = $repl = w();
            $formats = w('.jpg .gif .png');

            $avatar_format = '<a href="%s" title="%s"><img src="%s" /></a>';

            foreach ($match[1] as $o_member) {
                $member = get_username_base($o_member);

                if (!isset($this->options['icons'][$member])) {
                    foreach ($formats as $format) {
                        $icon_file = get_user_avatar($member, 2, $format);
                        $abs_user_avatar = get_user_avatar($member, 2, $format, true);

                        if (@file_exists($abs_user_avatar)) {
                            $this->options['icons'][$member] = sprintf(
                                $avatar_format,
                                s_link('m', $member),
                                $o_member,
                                $icon_file
                            );

                            break;
                        }
                    }
                }

                $str_repl = isset($this->options['icons'][$member]) ? $this->options['icons'][$member] : 0;
                $str_repl = $str_repl ?: '<a href="' . s_link('m', get_username_base($o_member)) . '">' . $o_member . '</a>';

                $orig[] = ':i' . $o_member . ':';
                $repl[] = $str_repl;
            }

            $this->message = str_replace($orig, $repl, $this->message);
        }

        return;
    }
}
