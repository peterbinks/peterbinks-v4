<?php
// img tag
kirbytext::$tags['img'] = array(
  'attr' => array(
    'width',
    'height',
    'alt',
    'text',
    'title',
    'class',
    'linkclass',
    'caption',
    'link',
    'target',
    'popup',
    'rel'
  ),
  'html' => function($tag) {

    $url     = $tag->attr('img');
    $alt     = $tag->attr('alt');
    $title   = $tag->attr('title');
    $link    = $tag->attr('link');
    $file    = $tag->file($url);

    // use the file url if available and otherwise the given url
    $url = $file ? $file->url() : url($url);

    // alt is just an alternative for text
    if($text = $tag->attr('text')) $alt = $text;

    // try to get the title from the image object and use it as alt text
    if($file) {

      if(empty($alt) and $file->alt() != '') {
        $alt = $file->alt();
      }

      if(empty($title) and $file->title() != '') {
        $title = $file->title();
      }

    }

    if(empty($alt)) $alt = pathinfo($url, PATHINFO_FILENAME);

    $image = html::img($url, array(
      'width'  => $tag->attr('width'),
      'height' => $tag->attr('height'),
      'class'  => $tag->attr('class'),
      'title'  => html($title),
      'alt'    => html($alt)
    ));

    if($tag->attr('link')) {

      // build the href for the link
      if($link == 'self') {
        $href = $url;
      } else if($file and $link == $file->filename()) {
        $href = $file->url();
      } else {
        $href = $link;
      }

      $image = html::a(url($href), $image, array(
        'rel'    => $tag->attr('rel'),
        'class'  => $tag->attr('linkclass'),
        'title'  => html($tag->attr('title')),
        'target' => $tag->target()
      ));

    }

    return $image;

  }
);
?>