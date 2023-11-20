<?php

function resolve_asset_url($subpath = '')
{
    return esc_url(add_anticache(rtrim(get_template_directory_uri(), '/').'/assets/'.ltrim($subpath, '/')));
}

function resolve_url($path = '')
{
    return esc_url(get_home_url(null, $path));
}

function resolve_archive_url($post_type)
{
    if (false === $url = get_post_type_archive_link($post_type)) {
        throw new BadMethodCallException("Unsupported/unarchivable post_type [$post_type]");
    }

    return $url;
}

function add_anticache($file)
{

    if ('' !== (string) ANTICACHE_HASH) {
        
        $parts = explode('#', $file);
        $fragment = '';
        
        if (false !== strpos($file, '#')) {
            $fragment = "#{$parts[1]}";
        }
        
        if (false === strpos($parts[0], '?')) {
            $delimeter = '?';
        } else {
            $delimeter = '&';
        }
        $file = "{$parts[0]}{$delimeter}_=".ANTICACHE_HASH.$fragment;
    }

    return $file;
}
