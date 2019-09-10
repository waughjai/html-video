HTML Video
=========================

Simple class for automatically generating video HTML code.

## Use

This class's constructor takes 2 arguments: a list of hash maps of attributes for sources & a list of attributes for the video element itself.

For a source's type attribute, you can leave off the "video/" & the constructor will automatically add it.

## Example

    $video = new HTMLVideo
    (
        [ [ 'src' => 'video.mp4', 'type' => 'mp4', 'media' => '(max-width:480px)' ], [ 'src' => 'movie.webm', 'type' => 'webm' ] ],
        [ 'muted' => "true", 'controls' => "controls", 'preload' => "none", 'autoplay' => "autoplay", 'width' => "1200", 'height' => "674", 'class' => "center-img" ]
    );

will generate:

    <video muted="true" controls="controls" preload="none" autoplay="autoplay" width="1200" height="674" class="center-img">
        <source src="video.mp4" type="video/mp4" media="(max-width:480px)"></source>
        <source src="movie.webm" type="video/webm"></source>
    </video>

## Changelog

### 0.2.0
* Allow for more attributes to each source, including media attribute

### 0.1.0
* Initial Release
