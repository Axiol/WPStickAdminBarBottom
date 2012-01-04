<?php

function adminBarBottom() {
    echo '<style type="text/css">
        body {
            margin-top: -28px;
        }
        #wpadminbar {
            top: auto !important;
            bottom: 0;
        }
        #wpadminbar .quicklinks .ab-sub-wrapper {
            bottom: 28px;
        }
        #wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input {
            border-width: 1px 1px 0 1px;
            -moz-box-shadow:0 -4px 4px rgba(0,0,0,0.2);
            -webkit-box-shadow:0 -4px 4px rgba(0,0,0,0.2);
            box-shadow:0 -4px 4px rgba(0,0,0,0.2);
        }
        #wpadminbar .quicklinks .menupop ul#wp-admin-bar-wp-logo-default {
            background-color: #eee;
        }
        #wpadminbar .quicklinks .menupop ul#wp-admin-bar-wp-logo-external {
            background-color: white;
        }
        body.wp-admin div#wpwrap div#footer {
            bottom: 28px !important;
        }
    </style>';
}

// Uncomment if you want it to be done in the Admin Section too

// if ( is_admin_bar_showing() ) {
//     add_action( 'admin_head', 'adminBarBottom' );
// }

if ( is_admin_bar_showing() ) {
    add_action( 'wp_head', 'adminBarBottom' );
}