
# Contao JWPlayer Bundle

## About
Use JWPlayer as Video-Player in Contao.
More to JWPlayer: https://www.jwplayer.com/

This bundle adds a JWPlayer element to Contao.
So i can add JWPlayer videos as controllable players or stretched/croped background videos.

## Installation
Install [composer](https://getcomposer.org) if you haven't already, then enter this command in the main directory of your Contao installation:
```sh
composer require mediamotionag/contao-jwplayer-bundle
```
## Usage
1. Create an account on https://www.jwplayer.com/
2. Create a "player" with your preferred design settings and copy the player-id
3. Upload a video and copy the video-id
4. Save the default video-id in the contao settings
5. Add a new element of typ "JWPlayer"
6. Save your video-id and optional options
7. Optional: for fullscreen videos, define the size by CSS and the "Anzeigemodus" as "Füllen (Proportional & Beschneiden)"

## Options
1. Anzeigemodus - mode the video is outputed in
    1.Füllen (Proportional & beschneiden) - to fill a container, without changing proportions, but cropping the video to make it fit
    2. Füllen (Verzerren & nicht beschneiden) - to fill a container, changing proportions, but not cropping the video
    3. Proportional (Schwarze Balken) - Video will be fit inside the container, the rest will be filled in black
    4. 1:1 output of video size and proportion
2. Autostart - because modern browsers restrict this option, it mostly only works, with muted videos
3. Stummschalten - mute video, mostly for autoplay videos (like background videos)
4. Wiederholen - loop the video infinite
5. Bedienelemente - show controls
6. Player-ID überschreiben - if you want to use multiple videp-players (from jwplayer.com), you can overwrite the default player with this option

## Screenshots (Backend)
Backend Options (Contao Element)
![enter image description here](https://raw.githubusercontent.com/mediamotionag/contao-jwplayer-bundle/master/Backend_1.png)

Backend Video-Size Options
![enter image description here](https://raw.githubusercontent.com/mediamotionag/contao-jwplayer-bundle/master/Backend_2.png)

Frontend Example
![enter image description here](https://raw.githubusercontent.com/mediamotionag/contao-jwplayer-bundle/master/Frontend.png)

All API Options:
https://developer.jwplayer.com/jw-player/docs/javascript-api-reference/

## Contribution
Bug reports and pull requests are welcome
