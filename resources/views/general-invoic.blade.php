<!DOCTYPE html>
<html class="loading" lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <title>INV-{{ $order->order_number }}</title>
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
    rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
    alpha/css/bootstrap.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <style>
    /*!
 * Bootstrap v3.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
    /*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
    html {
      font-family: sans-serif;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%
    }

    body {
      margin: 0
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    menu,
    nav,
    section,
    summary {
      display: block
    }

    audio,
    canvas,
    progress,
    video {
      display: inline-block;
      vertical-align: baseline
    }

    audio:not([controls]) {
      display: none;
      height: 0
    }

    [hidden],
    template {
      display: none
    }

    a {
      background-color: transparent
    }

    a:active,
    a:hover {
      outline: 0
    }

    abbr[title] {
      border-bottom: none;
      text-decoration: underline;
      -webkit-text-decoration: underline dotted;
      -moz-text-decoration: underline dotted;
      text-decoration: underline dotted
    }

    b,
    strong {
      font-weight: 700
    }

    dfn {
      font-style: italic
    }

    h1 {
      font-size: 2em;
      margin: .67em 0
    }

    mark {
      background: #ff0;
      color: #000
    }

    small {
      font-size: 80%
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sup {
      top: -.5em
    }

    sub {
      bottom: -.25em
    }

    img {
      border: 0
    }

    svg:not(:root) {
      overflow: hidden
    }

    figure {
      margin: 1em 40px
    }

    hr {
      -webkit-box-sizing: content-box;
      -moz-box-sizing: content-box;
      box-sizing: content-box;
      height: 0
    }

    pre {
      overflow: auto
    }

    code,
    kbd,
    pre,
    samp {
      font-family: monospace, monospace;
      font-size: 1em
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      color: inherit;
      font: inherit;
      margin: 0
    }

    button {
      overflow: visible
    }

    button,
    select {
      text-transform: none
    }

    button,
    html input[type=button],
    input[type=reset],
    input[type=submit] {
      -webkit-appearance: button;
      cursor: pointer
    }

    button[disabled],
    html input[disabled] {
      cursor: default
    }

    button::-moz-focus-inner,
    input::-moz-focus-inner {
      border: 0;
      padding: 0
    }

    input {
      line-height: normal
    }

    input[type=checkbox],
    input[type=radio] {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      padding: 0
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
      height: auto
    }

    input[type=search] {
      -webkit-appearance: textfield;
      -webkit-box-sizing: content-box;
      -moz-box-sizing: content-box;
      box-sizing: content-box
    }

    input[type=search]::-webkit-search-cancel-button,
    input[type=search]::-webkit-search-decoration {
      -webkit-appearance: none
    }

    fieldset {
      border: 1px solid silver;
      margin: 0 2px;
      padding: .35em .625em .75em
    }

    legend {
      border: 0;
      padding: 0
    }

    textarea {
      overflow: auto
    }

    optgroup {
      font-weight: 700
    }

    table {
      border-collapse: collapse;
      border-spacing: 0
    }

    td,
    th {
      padding: 0
    }

    /*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
    @media print {

      *,
      :after,
      :before {
        color: #000 !important;
        text-shadow: none !important;
        background: 0 0 !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
      }

      a,
      a:visited {
        text-decoration: underline
      }

      a[href]:after {
        content: " ("attr(href) ")"
      }

      abbr[title]:after {
        content: " ("attr(title) ")"
      }

      a[href^="#"]:after,
      a[href^="javascript:"]:after {
        content: ""
      }

      blockquote,
      pre {
        border: 1px solid #999;
        page-break-inside: avoid
      }

      thead {
        display: table-header-group
      }

      img,
      tr {
        page-break-inside: avoid
      }

      img {
        max-width: 100% !important
      }

      h2,
      h3,
      p {
        orphans: 3;
        widows: 3
      }

      h2,
      h3 {
        page-break-after: avoid
      }

      .navbar {
        display: none
      }

      .btn>.caret,
      .dropup>.btn>.caret {
        border-top-color: #000 !important
      }

      .label {
        border: 1px solid #000
      }

      .table {
        border-collapse: collapse !important
      }

      .table td,
      .table th {
        background-color: #fff !important
      }

      .table-bordered td,
      .table-bordered th {
        border: 1px solid #ddd !important
      }
    }

    @font-face {
      font-family: "Glyphicons Halflings";
      src: url(../fonts/glyphicons-halflings-regular.eot);
      src: url(../fonts/glyphicons-halflings-regular.eot?#iefix) format("embedded-opentype"), url(../fonts/glyphicons-halflings-regular.woff2) format("woff2"), url(../fonts/glyphicons-halflings-regular.woff) format("woff"), url(../fonts/glyphicons-halflings-regular.ttf) format("truetype"), url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format("svg")
    }

    .glyphicon {
      position: relative;
      top: 1px;
      display: inline-block;
      font-family: "Glyphicons Halflings";
      font-style: normal;
      font-weight: 400;
      line-height: 1;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .glyphicon-asterisk:before {
      content: "\002a"
    }

    .glyphicon-plus:before {
      content: "\002b"
    }

    .glyphicon-eur:before,
    .glyphicon-euro:before {
      content: "\20ac"
    }

    .glyphicon-minus:before {
      content: "\2212"
    }

    .glyphicon-cloud:before {
      content: "\2601"
    }

    .glyphicon-envelope:before {
      content: "\2709"
    }

    .glyphicon-pencil:before {
      content: "\270f"
    }

    .glyphicon-glass:before {
      content: "\e001"
    }

    .glyphicon-music:before {
      content: "\e002"
    }

    .glyphicon-search:before {
      content: "\e003"
    }

    .glyphicon-heart:before {
      content: "\e005"
    }

    .glyphicon-star:before {
      content: "\e006"
    }

    .glyphicon-star-empty:before {
      content: "\e007"
    }

    .glyphicon-user:before {
      content: "\e008"
    }

    .glyphicon-film:before {
      content: "\e009"
    }

    .glyphicon-th-large:before {
      content: "\e010"
    }

    .glyphicon-th:before {
      content: "\e011"
    }

    .glyphicon-th-list:before {
      content: "\e012"
    }

    .glyphicon-ok:before {
      content: "\e013"
    }

    .glyphicon-remove:before {
      content: "\e014"
    }

    .glyphicon-zoom-in:before {
      content: "\e015"
    }

    .glyphicon-zoom-out:before {
      content: "\e016"
    }

    .glyphicon-off:before {
      content: "\e017"
    }

    .glyphicon-signal:before {
      content: "\e018"
    }

    .glyphicon-cog:before {
      content: "\e019"
    }

    .glyphicon-trash:before {
      content: "\e020"
    }

    .glyphicon-home:before {
      content: "\e021"
    }

    .glyphicon-file:before {
      content: "\e022"
    }

    .glyphicon-time:before {
      content: "\e023"
    }

    .glyphicon-road:before {
      content: "\e024"
    }

    .glyphicon-download-alt:before {
      content: "\e025"
    }

    .glyphicon-download:before {
      content: "\e026"
    }

    .glyphicon-upload:before {
      content: "\e027"
    }

    .glyphicon-inbox:before {
      content: "\e028"
    }

    .glyphicon-play-circle:before {
      content: "\e029"
    }

    .glyphicon-repeat:before {
      content: "\e030"
    }

    .glyphicon-refresh:before {
      content: "\e031"
    }

    .glyphicon-list-alt:before {
      content: "\e032"
    }

    .glyphicon-lock:before {
      content: "\e033"
    }

    .glyphicon-flag:before {
      content: "\e034"
    }

    .glyphicon-headphones:before {
      content: "\e035"
    }

    .glyphicon-volume-off:before {
      content: "\e036"
    }

    .glyphicon-volume-down:before {
      content: "\e037"
    }

    .glyphicon-volume-up:before {
      content: "\e038"
    }

    .glyphicon-qrcode:before {
      content: "\e039"
    }

    .glyphicon-barcode:before {
      content: "\e040"
    }

    .glyphicon-tag:before {
      content: "\e041"
    }

    .glyphicon-tags:before {
      content: "\e042"
    }

    .glyphicon-book:before {
      content: "\e043"
    }

    .glyphicon-bookmark:before {
      content: "\e044"
    }

    .glyphicon-print:before {
      content: "\e045"
    }

    .glyphicon-camera:before {
      content: "\e046"
    }

    .glyphicon-font:before {
      content: "\e047"
    }

    .glyphicon-bold:before {
      content: "\e048"
    }

    .glyphicon-italic:before {
      content: "\e049"
    }

    .glyphicon-text-height:before {
      content: "\e050"
    }

    .glyphicon-text-width:before {
      content: "\e051"
    }

    .glyphicon-align-left:before {
      content: "\e052"
    }

    .glyphicon-align-center:before {
      content: "\e053"
    }

    .glyphicon-align-right:before {
      content: "\e054"
    }

    .glyphicon-align-justify:before {
      content: "\e055"
    }

    .glyphicon-list:before {
      content: "\e056"
    }

    .glyphicon-indent-left:before {
      content: "\e057"
    }

    .glyphicon-indent-right:before {
      content: "\e058"
    }

    .glyphicon-facetime-video:before {
      content: "\e059"
    }

    .glyphicon-picture:before {
      content: "\e060"
    }

    .glyphicon-map-marker:before {
      content: "\e062"
    }

    .glyphicon-adjust:before {
      content: "\e063"
    }

    .glyphicon-tint:before {
      content: "\e064"
    }

    .glyphicon-edit:before {
      content: "\e065"
    }

    .glyphicon-share:before {
      content: "\e066"
    }

    .glyphicon-check:before {
      content: "\e067"
    }

    .glyphicon-move:before {
      content: "\e068"
    }

    .glyphicon-step-backward:before {
      content: "\e069"
    }

    .glyphicon-fast-backward:before {
      content: "\e070"
    }

    .glyphicon-backward:before {
      content: "\e071"
    }

    .glyphicon-play:before {
      content: "\e072"
    }

    .glyphicon-pause:before {
      content: "\e073"
    }

    .glyphicon-stop:before {
      content: "\e074"
    }

    .glyphicon-forward:before {
      content: "\e075"
    }

    .glyphicon-fast-forward:before {
      content: "\e076"
    }

    .glyphicon-step-forward:before {
      content: "\e077"
    }

    .glyphicon-eject:before {
      content: "\e078"
    }

    .glyphicon-chevron-left:before {
      content: "\e079"
    }

    .glyphicon-chevron-right:before {
      content: "\e080"
    }

    .glyphicon-plus-sign:before {
      content: "\e081"
    }

    .glyphicon-minus-sign:before {
      content: "\e082"
    }

    .glyphicon-remove-sign:before {
      content: "\e083"
    }

    .glyphicon-ok-sign:before {
      content: "\e084"
    }

    .glyphicon-question-sign:before {
      content: "\e085"
    }

    .glyphicon-info-sign:before {
      content: "\e086"
    }

    .glyphicon-screenshot:before {
      content: "\e087"
    }

    .glyphicon-remove-circle:before {
      content: "\e088"
    }

    .glyphicon-ok-circle:before {
      content: "\e089"
    }

    .glyphicon-ban-circle:before {
      content: "\e090"
    }

    .glyphicon-arrow-left:before {
      content: "\e091"
    }

    .glyphicon-arrow-right:before {
      content: "\e092"
    }

    .glyphicon-arrow-up:before {
      content: "\e093"
    }

    .glyphicon-arrow-down:before {
      content: "\e094"
    }

    .glyphicon-share-alt:before {
      content: "\e095"
    }

    .glyphicon-resize-full:before {
      content: "\e096"
    }

    .glyphicon-resize-small:before {
      content: "\e097"
    }

    .glyphicon-exclamation-sign:before {
      content: "\e101"
    }

    .glyphicon-gift:before {
      content: "\e102"
    }

    .glyphicon-leaf:before {
      content: "\e103"
    }

    .glyphicon-fire:before {
      content: "\e104"
    }

    .glyphicon-eye-open:before {
      content: "\e105"
    }

    .glyphicon-eye-close:before {
      content: "\e106"
    }

    .glyphicon-warning-sign:before {
      content: "\e107"
    }

    .glyphicon-plane:before {
      content: "\e108"
    }

    .glyphicon-calendar:before {
      content: "\e109"
    }

    .glyphicon-random:before {
      content: "\e110"
    }

    .glyphicon-comment:before {
      content: "\e111"
    }

    .glyphicon-magnet:before {
      content: "\e112"
    }

    .glyphicon-chevron-up:before {
      content: "\e113"
    }

    .glyphicon-chevron-down:before {
      content: "\e114"
    }

    .glyphicon-retweet:before {
      content: "\e115"
    }

    .glyphicon-shopping-cart:before {
      content: "\e116"
    }

    .glyphicon-folder-close:before {
      content: "\e117"
    }

    .glyphicon-folder-open:before {
      content: "\e118"
    }

    .glyphicon-resize-vertical:before {
      content: "\e119"
    }

    .glyphicon-resize-horizontal:before {
      content: "\e120"
    }

    .glyphicon-hdd:before {
      content: "\e121"
    }

    .glyphicon-bullhorn:before {
      content: "\e122"
    }

    .glyphicon-bell:before {
      content: "\e123"
    }

    .glyphicon-certificate:before {
      content: "\e124"
    }

    .glyphicon-thumbs-up:before {
      content: "\e125"
    }

    .glyphicon-thumbs-down:before {
      content: "\e126"
    }

    .glyphicon-hand-right:before {
      content: "\e127"
    }

    .glyphicon-hand-left:before {
      content: "\e128"
    }

    .glyphicon-hand-up:before {
      content: "\e129"
    }

    .glyphicon-hand-down:before {
      content: "\e130"
    }

    .glyphicon-circle-arrow-right:before {
      content: "\e131"
    }

    .glyphicon-circle-arrow-left:before {
      content: "\e132"
    }

    .glyphicon-circle-arrow-up:before {
      content: "\e133"
    }

    .glyphicon-circle-arrow-down:before {
      content: "\e134"
    }

    .glyphicon-globe:before {
      content: "\e135"
    }

    .glyphicon-wrench:before {
      content: "\e136"
    }

    .glyphicon-tasks:before {
      content: "\e137"
    }

    .glyphicon-filter:before {
      content: "\e138"
    }

    .glyphicon-briefcase:before {
      content: "\e139"
    }

    .glyphicon-fullscreen:before {
      content: "\e140"
    }

    .glyphicon-dashboard:before {
      content: "\e141"
    }

    .glyphicon-paperclip:before {
      content: "\e142"
    }

    .glyphicon-heart-empty:before {
      content: "\e143"
    }

    .glyphicon-link:before {
      content: "\e144"
    }

    .glyphicon-phone:before {
      content: "\e145"
    }

    .glyphicon-pushpin:before {
      content: "\e146"
    }

    .glyphicon-usd:before {
      content: "\e148"
    }

    .glyphicon-gbp:before {
      content: "\e149"
    }

    .glyphicon-sort:before {
      content: "\e150"
    }

    .glyphicon-sort-by-alphabet:before {
      content: "\e151"
    }

    .glyphicon-sort-by-alphabet-alt:before {
      content: "\e152"
    }

    .glyphicon-sort-by-order:before {
      content: "\e153"
    }

    .glyphicon-sort-by-order-alt:before {
      content: "\e154"
    }

    .glyphicon-sort-by-attributes:before {
      content: "\e155"
    }

    .glyphicon-sort-by-attributes-alt:before {
      content: "\e156"
    }

    .glyphicon-unchecked:before {
      content: "\e157"
    }

    .glyphicon-expand:before {
      content: "\e158"
    }

    .glyphicon-collapse-down:before {
      content: "\e159"
    }

    .glyphicon-collapse-up:before {
      content: "\e160"
    }

    .glyphicon-log-in:before {
      content: "\e161"
    }

    .glyphicon-flash:before {
      content: "\e162"
    }

    .glyphicon-log-out:before {
      content: "\e163"
    }

    .glyphicon-new-window:before {
      content: "\e164"
    }

    .glyphicon-record:before {
      content: "\e165"
    }

    .glyphicon-save:before {
      content: "\e166"
    }

    .glyphicon-open:before {
      content: "\e167"
    }

    .glyphicon-saved:before {
      content: "\e168"
    }

    .glyphicon-import:before {
      content: "\e169"
    }

    .glyphicon-export:before {
      content: "\e170"
    }

    .glyphicon-send:before {
      content: "\e171"
    }

    .glyphicon-floppy-disk:before {
      content: "\e172"
    }

    .glyphicon-floppy-saved:before {
      content: "\e173"
    }

    .glyphicon-floppy-remove:before {
      content: "\e174"
    }

    .glyphicon-floppy-save:before {
      content: "\e175"
    }

    .glyphicon-floppy-open:before {
      content: "\e176"
    }

    .glyphicon-credit-card:before {
      content: "\e177"
    }

    .glyphicon-transfer:before {
      content: "\e178"
    }

    .glyphicon-cutlery:before {
      content: "\e179"
    }

    .glyphicon-header:before {
      content: "\e180"
    }

    .glyphicon-compressed:before {
      content: "\e181"
    }

    .glyphicon-earphone:before {
      content: "\e182"
    }

    .glyphicon-phone-alt:before {
      content: "\e183"
    }

    .glyphicon-tower:before {
      content: "\e184"
    }

    .glyphicon-stats:before {
      content: "\e185"
    }

    .glyphicon-sd-video:before {
      content: "\e186"
    }

    .glyphicon-hd-video:before {
      content: "\e187"
    }

    .glyphicon-subtitles:before {
      content: "\e188"
    }

    .glyphicon-sound-stereo:before {
      content: "\e189"
    }

    .glyphicon-sound-dolby:before {
      content: "\e190"
    }

    .glyphicon-sound-5-1:before {
      content: "\e191"
    }

    .glyphicon-sound-6-1:before {
      content: "\e192"
    }

    .glyphicon-sound-7-1:before {
      content: "\e193"
    }

    .glyphicon-copyright-mark:before {
      content: "\e194"
    }

    .glyphicon-registration-mark:before {
      content: "\e195"
    }

    .glyphicon-cloud-download:before {
      content: "\e197"
    }

    .glyphicon-cloud-upload:before {
      content: "\e198"
    }

    .glyphicon-tree-conifer:before {
      content: "\e199"
    }

    .glyphicon-tree-deciduous:before {
      content: "\e200"
    }

    .glyphicon-cd:before {
      content: "\e201"
    }

    .glyphicon-save-file:before {
      content: "\e202"
    }

    .glyphicon-open-file:before {
      content: "\e203"
    }

    .glyphicon-level-up:before {
      content: "\e204"
    }

    .glyphicon-copy:before {
      content: "\e205"
    }

    .glyphicon-paste:before {
      content: "\e206"
    }

    .glyphicon-alert:before {
      content: "\e209"
    }

    .glyphicon-equalizer:before {
      content: "\e210"
    }

    .glyphicon-king:before {
      content: "\e211"
    }

    .glyphicon-queen:before {
      content: "\e212"
    }

    .glyphicon-pawn:before {
      content: "\e213"
    }

    .glyphicon-bishop:before {
      content: "\e214"
    }

    .glyphicon-knight:before {
      content: "\e215"
    }

    .glyphicon-baby-formula:before {
      content: "\e216"
    }

    .glyphicon-tent:before {
      content: "\26fa"
    }

    .glyphicon-blackboard:before {
      content: "\e218"
    }

    .glyphicon-bed:before {
      content: "\e219"
    }

    .glyphicon-apple:before {
      content: "\f8ff"
    }

    .glyphicon-erase:before {
      content: "\e221"
    }

    .glyphicon-hourglass:before {
      content: "\231b"
    }

    .glyphicon-lamp:before {
      content: "\e223"
    }

    .glyphicon-duplicate:before {
      content: "\e224"
    }

    .glyphicon-piggy-bank:before {
      content: "\e225"
    }

    .glyphicon-scissors:before {
      content: "\e226"
    }

    .glyphicon-bitcoin:before {
      content: "\e227"
    }

    .glyphicon-btc:before {
      content: "\e227"
    }

    .glyphicon-xbt:before {
      content: "\e227"
    }

    .glyphicon-yen:before {
      content: "\00a5"
    }

    .glyphicon-jpy:before {
      content: "\00a5"
    }

    .glyphicon-ruble:before {
      content: "\20bd"
    }

    .glyphicon-rub:before {
      content: "\20bd"
    }

    .glyphicon-scale:before {
      content: "\e230"
    }

    .glyphicon-ice-lolly:before {
      content: "\e231"
    }

    .glyphicon-ice-lolly-tasted:before {
      content: "\e232"
    }

    .glyphicon-education:before {
      content: "\e233"
    }

    .glyphicon-option-horizontal:before {
      content: "\e234"
    }

    .glyphicon-option-vertical:before {
      content: "\e235"
    }

    .glyphicon-menu-hamburger:before {
      content: "\e236"
    }

    .glyphicon-modal-window:before {
      content: "\e237"
    }

    .glyphicon-oil:before {
      content: "\e238"
    }

    .glyphicon-grain:before {
      content: "\e239"
    }

    .glyphicon-sunglasses:before {
      content: "\e240"
    }

    .glyphicon-text-size:before {
      content: "\e241"
    }

    .glyphicon-text-color:before {
      content: "\e242"
    }

    .glyphicon-text-background:before {
      content: "\e243"
    }

    .glyphicon-object-align-top:before {
      content: "\e244"
    }

    .glyphicon-object-align-bottom:before {
      content: "\e245"
    }

    .glyphicon-object-align-horizontal:before {
      content: "\e246"
    }

    .glyphicon-object-align-left:before {
      content: "\e247"
    }

    .glyphicon-object-align-vertical:before {
      content: "\e248"
    }

    .glyphicon-object-align-right:before {
      content: "\e249"
    }

    .glyphicon-triangle-right:before {
      content: "\e250"
    }

    .glyphicon-triangle-left:before {
      content: "\e251"
    }

    .glyphicon-triangle-bottom:before {
      content: "\e252"
    }

    .glyphicon-triangle-top:before {
      content: "\e253"
    }

    .glyphicon-console:before {
      content: "\e254"
    }

    .glyphicon-superscript:before {
      content: "\e255"
    }

    .glyphicon-subscript:before {
      content: "\e256"
    }

    .glyphicon-menu-left:before {
      content: "\e257"
    }

    .glyphicon-menu-right:before {
      content: "\e258"
    }

    .glyphicon-menu-down:before {
      content: "\e259"
    }

    .glyphicon-menu-up:before {
      content: "\e260"
    }

    * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
    }

    :after,
    :before {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
    }

    html {
      font-size: 10px;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    body {
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 14px;
      line-height: 1.42857143;
      color: #333;
      background-color: #fff
    }

    button,
    input,
    select,
    textarea {
      font-family: inherit;
      font-size: inherit;
      line-height: inherit
    }

    a {
      color: #337ab7;
      text-decoration: none
    }

    a:focus,
    a:hover {
      color: #23527c;
      text-decoration: underline
    }

    a:focus {
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px
    }

    figure {
      margin: 0
    }

    img {
      vertical-align: middle
    }

    .carousel-inner>.item>a>img,
    .carousel-inner>.item>img,
    .img-responsive,
    .thumbnail a>img,
    .thumbnail>img {
      display: block;
      max-width: 100%;
      height: auto
    }

    .img-rounded {
      border-radius: 6px
    }

    .img-thumbnail {
      padding: 4px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      -webkit-transition: all .2s ease-in-out;
      -o-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out;
      display: inline-block;
      max-width: 100%;
      height: auto
    }

    .img-circle {
      border-radius: 50%
    }

    hr {
      margin-top: 20px;
      margin-bottom: 20px;
      border: 0;
      border-top: 1px solid #eee
    }

    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      border: 0
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
      position: static;
      width: auto;
      height: auto;
      margin: 0;
      overflow: visible;
      clip: auto
    }

    [role=button] {
      cursor: pointer
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: inherit;
      font-weight: 500;
      line-height: 1.1;
      color: inherit
    }

    .h1 .small,
    .h1 small,
    .h2 .small,
    .h2 small,
    .h3 .small,
    .h3 small,
    .h4 .small,
    .h4 small,
    .h5 .small,
    .h5 small,
    .h6 .small,
    .h6 small,
    h1 .small,
    h1 small,
    h2 .small,
    h2 small,
    h3 .small,
    h3 small,
    h4 .small,
    h4 small,
    h5 .small,
    h5 small,
    h6 .small,
    h6 small {
      font-weight: 400;
      line-height: 1;
      color: #777
    }

    .h1,
    .h2,
    .h3,
    h1,
    h2,
    h3 {
      margin-top: 20px;
      margin-bottom: 10px
    }

    .h1 .small,
    .h1 small,
    .h2 .small,
    .h2 small,
    .h3 .small,
    .h3 small,
    h1 .small,
    h1 small,
    h2 .small,
    h2 small,
    h3 .small,
    h3 small {
      font-size: 65%
    }

    .h4,
    .h5,
    .h6,
    h4,
    h5,
    h6 {
      margin-top: 10px;
      margin-bottom: 10px
    }

    .h4 .small,
    .h4 small,
    .h5 .small,
    .h5 small,
    .h6 .small,
    .h6 small,
    h4 .small,
    h4 small,
    h5 .small,
    h5 small,
    h6 .small,
    h6 small {
      font-size: 75%
    }

    .h1,
    h1 {
      font-size: 36px
    }

    .h2,
    h2 {
      font-size: 30px
    }

    .h3,
    h3 {
      font-size: 24px
    }

    .h4,
    h4 {
      font-size: 18px
    }

    .h5,
    h5 {
      font-size: 14px
    }

    .h6,
    h6 {
      font-size: 12px
    }

    p {
      margin: 0 0 10px
    }

    .lead {
      margin-bottom: 20px;
      font-size: 16px;
      font-weight: 300;
      line-height: 1.4
    }

    @media (min-width:768px) {
      .lead {
        font-size: 21px
      }
    }

    .small,
    small {
      font-size: 85%
    }

    .mark,
    mark {
      padding: .2em;
      background-color: #fcf8e3
    }

    .text-left {
      text-align: left
    }

    .text-right {
      text-align: right
    }

    .text-center {
      text-align: center
    }

    .text-justify {
      text-align: justify
    }

    .text-nowrap {
      white-space: nowrap
    }

    .text-lowercase {
      text-transform: lowercase
    }

    .text-uppercase {
      text-transform: uppercase
    }

    .text-capitalize {
      text-transform: capitalize
    }

    .text-muted {
      color: #777
    }

    .text-primary {
      color: #337ab7
    }

    a.text-primary:focus,
    a.text-primary:hover {
      color: #286090
    }

    .text-success {
      color: #3c763d
    }

    a.text-success:focus,
    a.text-success:hover {
      color: #2b542c
    }

    .text-info {
      color: #31708f
    }

    a.text-info:focus,
    a.text-info:hover {
      color: #245269
    }

    .text-warning {
      color: #8a6d3b
    }

    a.text-warning:focus,
    a.text-warning:hover {
      color: #66512c
    }

    .text-danger {
      color: #a94442
    }

    a.text-danger:focus,
    a.text-danger:hover {
      color: #843534
    }

    .bg-primary {
      color: #fff;
      background-color: #337ab7
    }

    a.bg-primary:focus,
    a.bg-primary:hover {
      background-color: #286090
    }

    .bg-success {
      background-color: #dff0d8
    }

    a.bg-success:focus,
    a.bg-success:hover {
      background-color: #c1e2b3
    }

    .bg-info {
      background-color: #d9edf7
    }

    a.bg-info:focus,
    a.bg-info:hover {
      background-color: #afd9ee
    }

    .bg-warning {
      background-color: #fcf8e3
    }

    a.bg-warning:focus,
    a.bg-warning:hover {
      background-color: #f7ecb5
    }

    .bg-danger {
      background-color: #f2dede
    }

    a.bg-danger:focus,
    a.bg-danger:hover {
      background-color: #e4b9b9
    }

    .page-header {
      padding-bottom: 9px;
      margin: 40px 0 20px;
      border-bottom: 1px solid #eee
    }

    ol,
    ul {
      margin-top: 0;
      margin-bottom: 10px
    }

    ol ol,
    ol ul,
    ul ol,
    ul ul {
      margin-bottom: 0
    }

    .list-unstyled {
      padding-left: 0;
      list-style: none
    }

    .list-inline {
      padding-left: 0;
      list-style: none;
      margin-left: -5px
    }

    .list-inline>li {
      display: inline-block;
      padding-right: 5px;
      padding-left: 5px
    }

    dl {
      margin-top: 0;
      margin-bottom: 20px
    }

    dd,
    dt {
      line-height: 1.42857143
    }

    dt {
      font-weight: 700
    }

    dd {
      margin-left: 0
    }

    @media (min-width:768px) {
      .dl-horizontal dt {
        float: left;
        width: 160px;
        clear: left;
        text-align: right;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
      }

      .dl-horizontal dd {
        margin-left: 180px
      }
    }

    abbr[data-original-title],
    abbr[title] {
      cursor: help
    }

    .initialism {
      font-size: 90%;
      text-transform: uppercase
    }

    blockquote {
      padding: 10px 20px;
      margin: 0 0 20px;
      font-size: 17.5px;
      border-left: 5px solid #eee
    }

    blockquote ol:last-child,
    blockquote p:last-child,
    blockquote ul:last-child {
      margin-bottom: 0
    }

    blockquote .small,
    blockquote footer,
    blockquote small {
      display: block;
      font-size: 80%;
      line-height: 1.42857143;
      color: #777
    }

    blockquote .small:before,
    blockquote footer:before,
    blockquote small:before {
      content: "\2014 \00A0"
    }

    .blockquote-reverse,
    blockquote.pull-right {
      padding-right: 15px;
      padding-left: 0;
      text-align: right;
      border-right: 5px solid #eee;
      border-left: 0
    }

    .blockquote-reverse .small:before,
    .blockquote-reverse footer:before,
    .blockquote-reverse small:before,
    blockquote.pull-right .small:before,
    blockquote.pull-right footer:before,
    blockquote.pull-right small:before {
      content: ""
    }

    .blockquote-reverse .small:after,
    .blockquote-reverse footer:after,
    .blockquote-reverse small:after,
    blockquote.pull-right .small:after,
    blockquote.pull-right footer:after,
    blockquote.pull-right small:after {
      content: "\00A0 \2014"
    }

    address {
      margin-bottom: 20px;
      font-style: normal;
      line-height: 1.42857143
    }

    code,
    kbd,
    pre,
    samp {
      font-family: Menlo, Monaco, Consolas, "Courier New", monospace
    }

    code {
      padding: 2px 4px;
      font-size: 90%;
      color: #c7254e;
      background-color: #f9f2f4;
      border-radius: 4px
    }

    kbd {
      padding: 2px 4px;
      font-size: 90%;
      color: #fff;
      background-color: #333;
      border-radius: 3px;
      -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
      box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25)
    }

    kbd kbd {
      padding: 0;
      font-size: 100%;
      font-weight: 700;
      -webkit-box-shadow: none;
      box-shadow: none
    }

    pre {
      display: block;
      padding: 9.5px;
      margin: 0 0 10px;
      font-size: 13px;
      line-height: 1.42857143;
      color: #333;
      word-break: break-all;
      word-wrap: break-word;
      background-color: #f5f5f5;
      border: 1px solid #ccc;
      border-radius: 4px
    }

    pre code {
      padding: 0;
      font-size: inherit;
      color: inherit;
      white-space: pre-wrap;
      background-color: transparent;
      border-radius: 0
    }

    .pre-scrollable {
      max-height: 340px;
      overflow-y: scroll
    }

    .container {
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto
    }

    @media (min-width:768px) {
      .container {
        width: 750px
      }
    }

    @media (min-width:992px) {
      .container {
        width: 970px
      }
    }

    @media (min-width:1200px) {
      .container {
        width: 1170px
      }
    }

    .container-fluid {
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto
    }

    .row {
      margin-right: -15px;
      margin-left: -15px
    }

    .row-no-gutters {
      margin-right: 0;
      margin-left: 0
    }

    .row-no-gutters [class*=col-] {
      padding-right: 0;
      padding-left: 0
    }

    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-xs-1,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9 {
      position: relative;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px
    }

    .col-xs-1,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9 {
      float: left
    }

    .col-xs-12 {
      width: 100%
    }

    .col-xs-11 {
      width: 91.66666667%
    }

    .col-xs-10 {
      width: 83.33333333%
    }

    .col-xs-9 {
      width: 75%
    }

    .col-xs-8 {
      width: 66.66666667%
    }

    .col-xs-7 {
      width: 58.33333333%
    }

    .col-xs-6 {
      width: 50%
    }

    .col-xs-5 {
      width: 41.66666667%
    }

    .col-xs-4 {
      width: 33.33333333%
    }

    .col-xs-3 {
      width: 25%
    }

    .col-xs-2 {
      width: 16.66666667%
    }

    .col-xs-1 {
      width: 8.33333333%
    }

    .col-xs-pull-12 {
      right: 100%
    }

    .col-xs-pull-11 {
      right: 91.66666667%
    }

    .col-xs-pull-10 {
      right: 83.33333333%
    }

    .col-xs-pull-9 {
      right: 75%
    }

    .col-xs-pull-8 {
      right: 66.66666667%
    }

    .col-xs-pull-7 {
      right: 58.33333333%
    }

    .col-xs-pull-6 {
      right: 50%
    }

    .col-xs-pull-5 {
      right: 41.66666667%
    }

    .col-xs-pull-4 {
      right: 33.33333333%
    }

    .col-xs-pull-3 {
      right: 25%
    }

    .col-xs-pull-2 {
      right: 16.66666667%
    }

    .col-xs-pull-1 {
      right: 8.33333333%
    }

    .col-xs-pull-0 {
      right: auto
    }

    .col-xs-push-12 {
      left: 100%
    }

    .col-xs-push-11 {
      left: 91.66666667%
    }

    .col-xs-push-10 {
      left: 83.33333333%
    }

    .col-xs-push-9 {
      left: 75%
    }

    .col-xs-push-8 {
      left: 66.66666667%
    }

    .col-xs-push-7 {
      left: 58.33333333%
    }

    .col-xs-push-6 {
      left: 50%
    }

    .col-xs-push-5 {
      left: 41.66666667%
    }

    .col-xs-push-4 {
      left: 33.33333333%
    }

    .col-xs-push-3 {
      left: 25%
    }

    .col-xs-push-2 {
      left: 16.66666667%
    }

    .col-xs-push-1 {
      left: 8.33333333%
    }

    .col-xs-push-0 {
      left: auto
    }

    .col-xs-offset-12 {
      margin-left: 100%
    }

    .col-xs-offset-11 {
      margin-left: 91.66666667%
    }

    .col-xs-offset-10 {
      margin-left: 83.33333333%
    }

    .col-xs-offset-9 {
      margin-left: 75%
    }

    .col-xs-offset-8 {
      margin-left: 66.66666667%
    }

    .col-xs-offset-7 {
      margin-left: 58.33333333%
    }

    .col-xs-offset-6 {
      margin-left: 50%
    }

    .col-xs-offset-5 {
      margin-left: 41.66666667%
    }

    .col-xs-offset-4 {
      margin-left: 33.33333333%
    }

    .col-xs-offset-3 {
      margin-left: 25%
    }

    .col-xs-offset-2 {
      margin-left: 16.66666667%
    }

    .col-xs-offset-1 {
      margin-left: 8.33333333%
    }

    .col-xs-offset-0 {
      margin-left: 0
    }

    @media (min-width:768px) {

      .col-sm-1,
      .col-sm-10,
      .col-sm-11,
      .col-sm-12,
      .col-sm-2,
      .col-sm-3,
      .col-sm-4,
      .col-sm-5,
      .col-sm-6,
      .col-sm-7,
      .col-sm-8,
      .col-sm-9 {
        float: left
      }

      .col-sm-12 {
        width: 100%
      }

      .col-sm-11 {
        width: 91.66666667%
      }

      .col-sm-10 {
        width: 83.33333333%
      }

      .col-sm-9 {
        width: 75%
      }

      .col-sm-8 {
        width: 66.66666667%
      }

      .col-sm-7 {
        width: 58.33333333%
      }

      .col-sm-6 {
        width: 50%
      }

      .col-sm-5 {
        width: 41.66666667%
      }

      .col-sm-4 {
        width: 33.33333333%
      }

      .col-sm-3 {
        width: 25%
      }

      .col-sm-2 {
        width: 16.66666667%
      }

      .col-sm-1 {
        width: 8.33333333%
      }

      .col-sm-pull-12 {
        right: 100%
      }

      .col-sm-pull-11 {
        right: 91.66666667%
      }

      .col-sm-pull-10 {
        right: 83.33333333%
      }

      .col-sm-pull-9 {
        right: 75%
      }

      .col-sm-pull-8 {
        right: 66.66666667%
      }

      .col-sm-pull-7 {
        right: 58.33333333%
      }

      .col-sm-pull-6 {
        right: 50%
      }

      .col-sm-pull-5 {
        right: 41.66666667%
      }

      .col-sm-pull-4 {
        right: 33.33333333%
      }

      .col-sm-pull-3 {
        right: 25%
      }

      .col-sm-pull-2 {
        right: 16.66666667%
      }

      .col-sm-pull-1 {
        right: 8.33333333%
      }

      .col-sm-pull-0 {
        right: auto
      }

      .col-sm-push-12 {
        left: 100%
      }

      .col-sm-push-11 {
        left: 91.66666667%
      }

      .col-sm-push-10 {
        left: 83.33333333%
      }

      .col-sm-push-9 {
        left: 75%
      }

      .col-sm-push-8 {
        left: 66.66666667%
      }

      .col-sm-push-7 {
        left: 58.33333333%
      }

      .col-sm-push-6 {
        left: 50%
      }

      .col-sm-push-5 {
        left: 41.66666667%
      }

      .col-sm-push-4 {
        left: 33.33333333%
      }

      .col-sm-push-3 {
        left: 25%
      }

      .col-sm-push-2 {
        left: 16.66666667%
      }

      .col-sm-push-1 {
        left: 8.33333333%
      }

      .col-sm-push-0 {
        left: auto
      }

      .col-sm-offset-12 {
        margin-left: 100%
      }

      .col-sm-offset-11 {
        margin-left: 91.66666667%
      }

      .col-sm-offset-10 {
        margin-left: 83.33333333%
      }

      .col-sm-offset-9 {
        margin-left: 75%
      }

      .col-sm-offset-8 {
        margin-left: 66.66666667%
      }

      .col-sm-offset-7 {
        margin-left: 58.33333333%
      }

      .col-sm-offset-6 {
        margin-left: 50%
      }

      .col-sm-offset-5 {
        margin-left: 41.66666667%
      }

      .col-sm-offset-4 {
        margin-left: 33.33333333%
      }

      .col-sm-offset-3 {
        margin-left: 25%
      }

      .col-sm-offset-2 {
        margin-left: 16.66666667%
      }

      .col-sm-offset-1 {
        margin-left: 8.33333333%
      }

      .col-sm-offset-0 {
        margin-left: 0
      }
    }

    @media (min-width:992px) {

      .col-md-1,
      .col-md-10,
      .col-md-11,
      .col-md-12,
      .col-md-2,
      .col-md-3,
      .col-md-4,
      .col-md-5,
      .col-md-6,
      .col-md-7,
      .col-md-8,
      .col-md-9 {
        float: left
      }

      .col-md-12 {
        width: 100%
      }

      .col-md-11 {
        width: 91.66666667%
      }

      .col-md-10 {
        width: 83.33333333%
      }

      .col-md-9 {
        width: 75%
      }

      .col-md-8 {
        width: 66.66666667%
      }

      .col-md-7 {
        width: 58.33333333%
      }

      .col-md-6 {
        width: 50%
      }

      .col-md-5 {
        width: 41.66666667%
      }

      .col-md-4 {
        width: 33.33333333%
      }

      .col-md-3 {
        width: 25%
      }

      .col-md-2 {
        width: 16.66666667%
      }

      .col-md-1 {
        width: 8.33333333%
      }

      .col-md-pull-12 {
        right: 100%
      }

      .col-md-pull-11 {
        right: 91.66666667%
      }

      .col-md-pull-10 {
        right: 83.33333333%
      }

      .col-md-pull-9 {
        right: 75%
      }

      .col-md-pull-8 {
        right: 66.66666667%
      }

      .col-md-pull-7 {
        right: 58.33333333%
      }

      .col-md-pull-6 {
        right: 50%
      }

      .col-md-pull-5 {
        right: 41.66666667%
      }

      .col-md-pull-4 {
        right: 33.33333333%
      }

      .col-md-pull-3 {
        right: 25%
      }

      .col-md-pull-2 {
        right: 16.66666667%
      }

      .col-md-pull-1 {
        right: 8.33333333%
      }

      .col-md-pull-0 {
        right: auto
      }

      .col-md-push-12 {
        left: 100%
      }

      .col-md-push-11 {
        left: 91.66666667%
      }

      .col-md-push-10 {
        left: 83.33333333%
      }

      .col-md-push-9 {
        left: 75%
      }

      .col-md-push-8 {
        left: 66.66666667%
      }

      .col-md-push-7 {
        left: 58.33333333%
      }

      .col-md-push-6 {
        left: 50%
      }

      .col-md-push-5 {
        left: 41.66666667%
      }

      .col-md-push-4 {
        left: 33.33333333%
      }

      .col-md-push-3 {
        left: 25%
      }

      .col-md-push-2 {
        left: 16.66666667%
      }

      .col-md-push-1 {
        left: 8.33333333%
      }

      .col-md-push-0 {
        left: auto
      }

      .col-md-offset-12 {
        margin-left: 100%
      }

      .col-md-offset-11 {
        margin-left: 91.66666667%
      }

      .col-md-offset-10 {
        margin-left: 83.33333333%
      }

      .col-md-offset-9 {
        margin-left: 75%
      }

      .col-md-offset-8 {
        margin-left: 66.66666667%
      }

      .col-md-offset-7 {
        margin-left: 58.33333333%
      }

      .col-md-offset-6 {
        margin-left: 50%
      }

      .col-md-offset-5 {
        margin-left: 41.66666667%
      }

      .col-md-offset-4 {
        margin-left: 33.33333333%
      }

      .col-md-offset-3 {
        margin-left: 25%
      }

      .col-md-offset-2 {
        margin-left: 16.66666667%
      }

      .col-md-offset-1 {
        margin-left: 8.33333333%
      }

      .col-md-offset-0 {
        margin-left: 0
      }
    }

    @media (min-width:1200px) {

      .col-lg-1,
      .col-lg-10,
      .col-lg-11,
      .col-lg-12,
      .col-lg-2,
      .col-lg-3,
      .col-lg-4,
      .col-lg-5,
      .col-lg-6,
      .col-lg-7,
      .col-lg-8,
      .col-lg-9 {
        float: left
      }

      .col-lg-12 {
        width: 100%
      }

      .col-lg-11 {
        width: 91.66666667%
      }

      .col-lg-10 {
        width: 83.33333333%
      }

      .col-lg-9 {
        width: 75%
      }

      .col-lg-8 {
        width: 66.66666667%
      }

      .col-lg-7 {
        width: 58.33333333%
      }

      .col-lg-6 {
        width: 50%
      }

      .col-lg-5 {
        width: 41.66666667%
      }

      .col-lg-4 {
        width: 33.33333333%
      }

      .col-lg-3 {
        width: 25%
      }

      .col-lg-2 {
        width: 16.66666667%
      }

      .col-lg-1 {
        width: 8.33333333%
      }

      .col-lg-pull-12 {
        right: 100%
      }

      .col-lg-pull-11 {
        right: 91.66666667%
      }

      .col-lg-pull-10 {
        right: 83.33333333%
      }

      .col-lg-pull-9 {
        right: 75%
      }

      .col-lg-pull-8 {
        right: 66.66666667%
      }

      .col-lg-pull-7 {
        right: 58.33333333%
      }

      .col-lg-pull-6 {
        right: 50%
      }

      .col-lg-pull-5 {
        right: 41.66666667%
      }

      .col-lg-pull-4 {
        right: 33.33333333%
      }

      .col-lg-pull-3 {
        right: 25%
      }

      .col-lg-pull-2 {
        right: 16.66666667%
      }

      .col-lg-pull-1 {
        right: 8.33333333%
      }

      .col-lg-pull-0 {
        right: auto
      }

      .col-lg-push-12 {
        left: 100%
      }

      .col-lg-push-11 {
        left: 91.66666667%
      }

      .col-lg-push-10 {
        left: 83.33333333%
      }

      .col-lg-push-9 {
        left: 75%
      }

      .col-lg-push-8 {
        left: 66.66666667%
      }

      .col-lg-push-7 {
        left: 58.33333333%
      }

      .col-lg-push-6 {
        left: 50%
      }

      .col-lg-push-5 {
        left: 41.66666667%
      }

      .col-lg-push-4 {
        left: 33.33333333%
      }

      .col-lg-push-3 {
        left: 25%
      }

      .col-lg-push-2 {
        left: 16.66666667%
      }

      .col-lg-push-1 {
        left: 8.33333333%
      }

      .col-lg-push-0 {
        left: auto
      }

      .col-lg-offset-12 {
        margin-left: 100%
      }

      .col-lg-offset-11 {
        margin-left: 91.66666667%
      }

      .col-lg-offset-10 {
        margin-left: 83.33333333%
      }

      .col-lg-offset-9 {
        margin-left: 75%
      }

      .col-lg-offset-8 {
        margin-left: 66.66666667%
      }

      .col-lg-offset-7 {
        margin-left: 58.33333333%
      }

      .col-lg-offset-6 {
        margin-left: 50%
      }

      .col-lg-offset-5 {
        margin-left: 41.66666667%
      }

      .col-lg-offset-4 {
        margin-left: 33.33333333%
      }

      .col-lg-offset-3 {
        margin-left: 25%
      }

      .col-lg-offset-2 {
        margin-left: 16.66666667%
      }

      .col-lg-offset-1 {
        margin-left: 8.33333333%
      }

      .col-lg-offset-0 {
        margin-left: 0
      }
    }

    table {
      background-color: transparent
    }

    table col[class*=col-] {
      position: static;
      display: table-column;
      float: none
    }

    table td[class*=col-],
    table th[class*=col-] {
      position: static;
      display: table-cell;
      float: none
    }

    caption {
      padding-top: 8px;
      padding-bottom: 8px;
      color: #777;
      text-align: left
    }

    th {
      text-align: left
    }

    .table {
      width: 100%;
      max-width: 100%;
      margin-bottom: 20px
    }

    .table>tbody>tr>td,
    .table>tbody>tr>th,
    .table>tfoot>tr>td,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>thead>tr>th {
      padding: 8px;
      line-height: 1.42857143;
      vertical-align: top;
      border-top: 1px solid #ddd
    }

    .table>thead>tr>th {
      vertical-align: bottom;
      border-bottom: 2px solid #ddd
    }

    .table>caption+thead>tr:first-child>td,
    .table>caption+thead>tr:first-child>th,
    .table>colgroup+thead>tr:first-child>td,
    .table>colgroup+thead>tr:first-child>th,
    .table>thead:first-child>tr:first-child>td,
    .table>thead:first-child>tr:first-child>th {
      border-top: 0
    }

    .table>tbody+tbody {
      border-top: 2px solid #ddd
    }

    .table .table {
      background-color: #fff
    }

    .table-condensed>tbody>tr>td,
    .table-condensed>tbody>tr>th,
    .table-condensed>tfoot>tr>td,
    .table-condensed>tfoot>tr>th,
    .table-condensed>thead>tr>td,
    .table-condensed>thead>tr>th {
      padding: 5px
    }

    .table-bordered {
      border: 1px solid #ddd
    }

    .table-bordered>tbody>tr>td,
    .table-bordered>tbody>tr>th,
    .table-bordered>tfoot>tr>td,
    .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td,
    .table-bordered>thead>tr>th {
      border: 1px solid #ddd
    }

    .table-bordered>thead>tr>td,
    .table-bordered>thead>tr>th {
      border-bottom-width: 2px
    }

    .table-striped>tbody>tr:nth-of-type(odd) {
      background-color: #f9f9f9
    }

    .table-hover>tbody>tr:hover {
      background-color: #f5f5f5
    }

    .table>tbody>tr.active>td,
    .table>tbody>tr.active>th,
    .table>tbody>tr>td.active,
    .table>tbody>tr>th.active,
    .table>tfoot>tr.active>td,
    .table>tfoot>tr.active>th,
    .table>tfoot>tr>td.active,
    .table>tfoot>tr>th.active,
    .table>thead>tr.active>td,
    .table>thead>tr.active>th,
    .table>thead>tr>td.active,
    .table>thead>tr>th.active {
      background-color: #f5f5f5
    }

    .table-hover>tbody>tr.active:hover>td,
    .table-hover>tbody>tr.active:hover>th,
    .table-hover>tbody>tr:hover>.active,
    .table-hover>tbody>tr>td.active:hover,
    .table-hover>tbody>tr>th.active:hover {
      background-color: #e8e8e8
    }

    .table>tbody>tr.success>td,
    .table>tbody>tr.success>th,
    .table>tbody>tr>td.success,
    .table>tbody>tr>th.success,
    .table>tfoot>tr.success>td,
    .table>tfoot>tr.success>th,
    .table>tfoot>tr>td.success,
    .table>tfoot>tr>th.success,
    .table>thead>tr.success>td,
    .table>thead>tr.success>th,
    .table>thead>tr>td.success,
    .table>thead>tr>th.success {
      background-color: #dff0d8
    }

    .table-hover>tbody>tr.success:hover>td,
    .table-hover>tbody>tr.success:hover>th,
    .table-hover>tbody>tr:hover>.success,
    .table-hover>tbody>tr>td.success:hover,
    .table-hover>tbody>tr>th.success:hover {
      background-color: #d0e9c6
    }

    .table>tbody>tr.info>td,
    .table>tbody>tr.info>th,
    .table>tbody>tr>td.info,
    .table>tbody>tr>th.info,
    .table>tfoot>tr.info>td,
    .table>tfoot>tr.info>th,
    .table>tfoot>tr>td.info,
    .table>tfoot>tr>th.info,
    .table>thead>tr.info>td,
    .table>thead>tr.info>th,
    .table>thead>tr>td.info,
    .table>thead>tr>th.info {
      background-color: #d9edf7
    }

    .table-hover>tbody>tr.info:hover>td,
    .table-hover>tbody>tr.info:hover>th,
    .table-hover>tbody>tr:hover>.info,
    .table-hover>tbody>tr>td.info:hover,
    .table-hover>tbody>tr>th.info:hover {
      background-color: #c4e3f3
    }

    .table>tbody>tr.warning>td,
    .table>tbody>tr.warning>th,
    .table>tbody>tr>td.warning,
    .table>tbody>tr>th.warning,
    .table>tfoot>tr.warning>td,
    .table>tfoot>tr.warning>th,
    .table>tfoot>tr>td.warning,
    .table>tfoot>tr>th.warning,
    .table>thead>tr.warning>td,
    .table>thead>tr.warning>th,
    .table>thead>tr>td.warning,
    .table>thead>tr>th.warning {
      background-color: #fcf8e3
    }

    .table-hover>tbody>tr.warning:hover>td,
    .table-hover>tbody>tr.warning:hover>th,
    .table-hover>tbody>tr:hover>.warning,
    .table-hover>tbody>tr>td.warning:hover,
    .table-hover>tbody>tr>th.warning:hover {
      background-color: #faf2cc
    }

    .table>tbody>tr.danger>td,
    .table>tbody>tr.danger>th,
    .table>tbody>tr>td.danger,
    .table>tbody>tr>th.danger,
    .table>tfoot>tr.danger>td,
    .table>tfoot>tr.danger>th,
    .table>tfoot>tr>td.danger,
    .table>tfoot>tr>th.danger,
    .table>thead>tr.danger>td,
    .table>thead>tr.danger>th,
    .table>thead>tr>td.danger,
    .table>thead>tr>th.danger {
      background-color: #f2dede
    }

    .table-hover>tbody>tr.danger:hover>td,
    .table-hover>tbody>tr.danger:hover>th,
    .table-hover>tbody>tr:hover>.danger,
    .table-hover>tbody>tr>td.danger:hover,
    .table-hover>tbody>tr>th.danger:hover {
      background-color: #ebcccc
    }

    .table-responsive {
      min-height: .01%;
      overflow-x: auto
    }

    @media screen and (max-width:767px) {
      .table-responsive {
        width: 100%;
        margin-bottom: 15px;
        overflow-y: hidden;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        border: 1px solid #ddd
      }

      .table-responsive>.table {
        margin-bottom: 0
      }

      .table-responsive>.table>tbody>tr>td,
      .table-responsive>.table>tbody>tr>th,
      .table-responsive>.table>tfoot>tr>td,
      .table-responsive>.table>tfoot>tr>th,
      .table-responsive>.table>thead>tr>td,
      .table-responsive>.table>thead>tr>th {
        white-space: nowrap
      }

      .table-responsive>.table-bordered {
        border: 0
      }

      .table-responsive>.table-bordered>tbody>tr>td:first-child,
      .table-responsive>.table-bordered>tbody>tr>th:first-child,
      .table-responsive>.table-bordered>tfoot>tr>td:first-child,
      .table-responsive>.table-bordered>tfoot>tr>th:first-child,
      .table-responsive>.table-bordered>thead>tr>td:first-child,
      .table-responsive>.table-bordered>thead>tr>th:first-child {
        border-left: 0
      }

      .table-responsive>.table-bordered>tbody>tr>td:last-child,
      .table-responsive>.table-bordered>tbody>tr>th:last-child,
      .table-responsive>.table-bordered>tfoot>tr>td:last-child,
      .table-responsive>.table-bordered>tfoot>tr>th:last-child,
      .table-responsive>.table-bordered>thead>tr>td:last-child,
      .table-responsive>.table-bordered>thead>tr>th:last-child {
        border-right: 0
      }

      .table-responsive>.table-bordered>tbody>tr:last-child>td,
      .table-responsive>.table-bordered>tbody>tr:last-child>th,
      .table-responsive>.table-bordered>tfoot>tr:last-child>td,
      .table-responsive>.table-bordered>tfoot>tr:last-child>th {
        border-bottom: 0
      }
    }

    fieldset {
      min-width: 0;
      padding: 0;
      margin: 0;
      border: 0
    }

    legend {
      display: block;
      width: 100%;
      padding: 0;
      margin-bottom: 20px;
      font-size: 21px;
      line-height: inherit;
      color: #333;
      border: 0;
      border-bottom: 1px solid #e5e5e5
    }

    label {
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: 700
    }

    input[type=search] {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none
    }

    input[type=checkbox],
    input[type=radio] {
      margin: 4px 0 0;
      margin-top: 1px\9;
      line-height: normal
    }

    fieldset[disabled] input[type=checkbox],
    fieldset[disabled] input[type=radio],
    input[type=checkbox].disabled,
    input[type=checkbox][disabled],
    input[type=radio].disabled,
    input[type=radio][disabled] {
      cursor: not-allowed
    }

    input[type=file] {
      display: block
    }

    input[type=range] {
      display: block;
      width: 100%
    }

    select[multiple],
    select[size] {
      height: auto
    }

    input[type=checkbox]:focus,
    input[type=file]:focus,
    input[type=radio]:focus {
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px
    }

    output {
      display: block;
      padding-top: 7px;
      font-size: 14px;
      line-height: 1.42857143;
      color: #555
    }

    .form-control {
      display: block;
      width: 100%;
      height: 34px;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.42857143;
      color: #555;
      background-color: #fff;
      background-image: none;
      border: 1px solid #ccc;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
      transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
      transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s, -webkit-box-shadow ease-in-out .15s
    }

    .form-control:focus {
      border-color: #66afe9;
      outline: 0;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
    }

    .form-control::-moz-placeholder {
      color: #999;
      opacity: 1
    }

    .form-control:-ms-input-placeholder {
      color: #999
    }

    .form-control::-webkit-input-placeholder {
      color: #999
    }

    .form-control::-ms-expand {
      background-color: transparent;
      border: 0
    }

    .form-control[disabled],
    .form-control[readonly],
    fieldset[disabled] .form-control {
      background-color: #eee;
      opacity: 1
    }

    .form-control[disabled],
    fieldset[disabled] .form-control {
      cursor: not-allowed
    }

    textarea.form-control {
      height: auto
    }

    @media screen and (-webkit-min-device-pixel-ratio:0) {

      input[type=date].form-control,
      input[type=datetime-local].form-control,
      input[type=month].form-control,
      input[type=time].form-control {
        line-height: 34px
      }

      .input-group-sm input[type=date],
      .input-group-sm input[type=datetime-local],
      .input-group-sm input[type=month],
      .input-group-sm input[type=time],
      input[type=date].input-sm,
      input[type=datetime-local].input-sm,
      input[type=month].input-sm,
      input[type=time].input-sm {
        line-height: 30px
      }

      .input-group-lg input[type=date],
      .input-group-lg input[type=datetime-local],
      .input-group-lg input[type=month],
      .input-group-lg input[type=time],
      input[type=date].input-lg,
      input[type=datetime-local].input-lg,
      input[type=month].input-lg,
      input[type=time].input-lg {
        line-height: 46px
      }
    }

    .form-group {
      margin-bottom: 15px
    }

    .checkbox,
    .radio {
      position: relative;
      display: block;
      margin-top: 10px;
      margin-bottom: 10px
    }

    .checkbox.disabled label,
    .radio.disabled label,
    fieldset[disabled] .checkbox label,
    fieldset[disabled] .radio label {
      cursor: not-allowed
    }

    .checkbox label,
    .radio label {
      min-height: 20px;
      padding-left: 20px;
      margin-bottom: 0;
      font-weight: 400;
      cursor: pointer
    }

    .checkbox input[type=checkbox],
    .checkbox-inline input[type=checkbox],
    .radio input[type=radio],
    .radio-inline input[type=radio] {
      position: absolute;
      margin-top: 4px\9;
      margin-left: -20px
    }

    .checkbox+.checkbox,
    .radio+.radio {
      margin-top: -5px
    }

    .checkbox-inline,
    .radio-inline {
      position: relative;
      display: inline-block;
      padding-left: 20px;
      margin-bottom: 0;
      font-weight: 400;
      vertical-align: middle;
      cursor: pointer
    }

    .checkbox-inline.disabled,
    .radio-inline.disabled,
    fieldset[disabled] .checkbox-inline,
    fieldset[disabled] .radio-inline {
      cursor: not-allowed
    }

    .checkbox-inline+.checkbox-inline,
    .radio-inline+.radio-inline {
      margin-top: 0;
      margin-left: 10px
    }

    .form-control-static {
      min-height: 34px;
      padding-top: 7px;
      padding-bottom: 7px;
      margin-bottom: 0
    }

    .form-control-static.input-lg,
    .form-control-static.input-sm {
      padding-right: 0;
      padding-left: 0
    }

    .input-sm {
      height: 30px;
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
    }

    select.input-sm {
      height: 30px;
      line-height: 30px
    }

    select[multiple].input-sm,
    textarea.input-sm {
      height: auto
    }

    .form-group-sm .form-control {
      height: 30px;
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
    }

    .form-group-sm select.form-control {
      height: 30px;
      line-height: 30px
    }

    .form-group-sm select[multiple].form-control,
    .form-group-sm textarea.form-control {
      height: auto
    }

    .form-group-sm .form-control-static {
      height: 30px;
      min-height: 32px;
      padding: 6px 10px;
      font-size: 12px;
      line-height: 1.5
    }

    .input-lg {
      height: 46px;
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333;
      border-radius: 6px
    }

    select.input-lg {
      height: 46px;
      line-height: 46px
    }

    select[multiple].input-lg,
    textarea.input-lg {
      height: auto
    }

    .form-group-lg .form-control {
      height: 46px;
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333;
      border-radius: 6px
    }

    .form-group-lg select.form-control {
      height: 46px;
      line-height: 46px
    }

    .form-group-lg select[multiple].form-control,
    .form-group-lg textarea.form-control {
      height: auto
    }

    .form-group-lg .form-control-static {
      height: 46px;
      min-height: 38px;
      padding: 11px 16px;
      font-size: 18px;
      line-height: 1.3333333
    }

    .has-feedback {
      position: relative
    }

    .has-feedback .form-control {
      padding-right: 42.5px
    }

    .form-control-feedback {
      position: absolute;
      top: 0;
      right: 0;
      z-index: 2;
      display: block;
      width: 34px;
      height: 34px;
      line-height: 34px;
      text-align: center;
      pointer-events: none
    }

    .form-group-lg .form-control+.form-control-feedback,
    .input-group-lg+.form-control-feedback,
    .input-lg+.form-control-feedback {
      width: 46px;
      height: 46px;
      line-height: 46px
    }

    .form-group-sm .form-control+.form-control-feedback,
    .input-group-sm+.form-control-feedback,
    .input-sm+.form-control-feedback {
      width: 30px;
      height: 30px;
      line-height: 30px
    }

    .has-success .checkbox,
    .has-success .checkbox-inline,
    .has-success .control-label,
    .has-success .help-block,
    .has-success .radio,
    .has-success .radio-inline,
    .has-success.checkbox label,
    .has-success.checkbox-inline label,
    .has-success.radio label,
    .has-success.radio-inline label {
      color: #3c763d
    }

    .has-success .form-control {
      border-color: #3c763d;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-success .form-control:focus {
      border-color: #2b542c;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168
    }

    .has-success .input-group-addon {
      color: #3c763d;
      background-color: #dff0d8;
      border-color: #3c763d
    }

    .has-success .form-control-feedback {
      color: #3c763d
    }

    .has-warning .checkbox,
    .has-warning .checkbox-inline,
    .has-warning .control-label,
    .has-warning .help-block,
    .has-warning .radio,
    .has-warning .radio-inline,
    .has-warning.checkbox label,
    .has-warning.checkbox-inline label,
    .has-warning.radio label,
    .has-warning.radio-inline label {
      color: #8a6d3b
    }

    .has-warning .form-control {
      border-color: #8a6d3b;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-warning .form-control:focus {
      border-color: #66512c;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b
    }

    .has-warning .input-group-addon {
      color: #8a6d3b;
      background-color: #fcf8e3;
      border-color: #8a6d3b
    }

    .has-warning .form-control-feedback {
      color: #8a6d3b
    }

    .has-error .checkbox,
    .has-error .checkbox-inline,
    .has-error .control-label,
    .has-error .help-block,
    .has-error .radio,
    .has-error .radio-inline,
    .has-error.checkbox label,
    .has-error.checkbox-inline label,
    .has-error.radio label,
    .has-error.radio-inline label {
      color: #a94442
    }

    .has-error .form-control {
      border-color: #a94442;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-error .form-control:focus {
      border-color: #843534;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
    }

    .has-error .input-group-addon {
      color: #a94442;
      background-color: #f2dede;
      border-color: #a94442
    }

    .has-error .form-control-feedback {
      color: #a94442
    }

    .has-feedback label~.form-control-feedback {
      top: 25px
    }

    .has-feedback label.sr-only~.form-control-feedback {
      top: 0
    }

    .help-block {
      display: block;
      margin-top: 5px;
      margin-bottom: 10px;
      color: #737373
    }

    @media (min-width:768px) {
      .form-inline .form-group {
        display: inline-block;
        margin-bottom: 0;
        vertical-align: middle
      }

      .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
      }

      .form-inline .form-control-static {
        display: inline-block
      }

      .form-inline .input-group {
        display: inline-table;
        vertical-align: middle
      }

      .form-inline .input-group .form-control,
      .form-inline .input-group .input-group-addon,
      .form-inline .input-group .input-group-btn {
        width: auto
      }

      .form-inline .input-group>.form-control {
        width: 100%
      }

      .form-inline .control-label {
        margin-bottom: 0;
        vertical-align: middle
      }

      .form-inline .checkbox,
      .form-inline .radio {
        display: inline-block;
        margin-top: 0;
        margin-bottom: 0;
        vertical-align: middle
      }

      .form-inline .checkbox label,
      .form-inline .radio label {
        padding-left: 0
      }

      .form-inline .checkbox input[type=checkbox],
      .form-inline .radio input[type=radio] {
        position: relative;
        margin-left: 0
      }

      .form-inline .has-feedback .form-control-feedback {
        top: 0
      }
    }

    .form-horizontal .checkbox,
    .form-horizontal .checkbox-inline,
    .form-horizontal .radio,
    .form-horizontal .radio-inline {
      padding-top: 7px;
      margin-top: 0;
      margin-bottom: 0
    }

    .form-horizontal .checkbox,
    .form-horizontal .radio {
      min-height: 27px
    }

    .form-horizontal .form-group {
      margin-right: -15px;
      margin-left: -15px
    }

    @media (min-width:768px) {
      .form-horizontal .control-label {
        padding-top: 7px;
        margin-bottom: 0;
        text-align: right
      }
    }

    .form-horizontal .has-feedback .form-control-feedback {
      right: 15px
    }

    @media (min-width:768px) {
      .form-horizontal .form-group-lg .control-label {
        padding-top: 11px;
        font-size: 18px
      }
    }

    @media (min-width:768px) {
      .form-horizontal .form-group-sm .control-label {
        padding-top: 6px;
        font-size: 12px
      }
    }

    .btn {
      display: inline-block;
      margin-bottom: 0;
      font-weight: 400;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      background-image: none;
      border: 1px solid transparent;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.42857143;
      border-radius: 4px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    .btn.active.focus,
    .btn.active:focus,
    .btn.focus,
    .btn:active.focus,
    .btn:active:focus,
    .btn:focus {
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px
    }

    .btn.focus,
    .btn:focus,
    .btn:hover {
      color: #333;
      text-decoration: none
    }

    .btn.active,
    .btn:active {
      background-image: none;
      outline: 0;
      -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
      box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .btn.disabled,
    .btn[disabled],
    fieldset[disabled] .btn {
      cursor: not-allowed;
      filter: alpha(opacity=65);
      opacity: .65;
      -webkit-box-shadow: none;
      box-shadow: none
    }

    a.btn.disabled,
    fieldset[disabled] a.btn {
      pointer-events: none
    }

    .btn-default {
      color: #333;
      background-color: #fff;
      border-color: #ccc
    }

    .btn-default.focus,
    .btn-default:focus {
      color: #333;
      background-color: #e6e6e6;
      border-color: #8c8c8c
    }

    .btn-default:hover {
      color: #333;
      background-color: #e6e6e6;
      border-color: #adadad
    }

    .btn-default.active,
    .btn-default:active,
    .open>.dropdown-toggle.btn-default {
      color: #333;
      background-color: #e6e6e6;
      background-image: none;
      border-color: #adadad
    }

    .btn-default.active.focus,
    .btn-default.active:focus,
    .btn-default.active:hover,
    .btn-default:active.focus,
    .btn-default:active:focus,
    .btn-default:active:hover,
    .open>.dropdown-toggle.btn-default.focus,
    .open>.dropdown-toggle.btn-default:focus,
    .open>.dropdown-toggle.btn-default:hover {
      color: #333;
      background-color: #d4d4d4;
      border-color: #8c8c8c
    }

    .btn-default.disabled.focus,
    .btn-default.disabled:focus,
    .btn-default.disabled:hover,
    .btn-default[disabled].focus,
    .btn-default[disabled]:focus,
    .btn-default[disabled]:hover,
    fieldset[disabled] .btn-default.focus,
    fieldset[disabled] .btn-default:focus,
    fieldset[disabled] .btn-default:hover {
      background-color: #fff;
      border-color: #ccc
    }

    .btn-default .badge {
      color: #fff;
      background-color: #333
    }

    .btn-primary {
      color: #fff;
      background-color: #337ab7;
      border-color: #2e6da4
    }

    .btn-primary.focus,
    .btn-primary:focus {
      color: #fff;
      background-color: #286090;
      border-color: #122b40
    }

    .btn-primary:hover {
      color: #fff;
      background-color: #286090;
      border-color: #204d74
    }

    .btn-primary.active,
    .btn-primary:active,
    .open>.dropdown-toggle.btn-primary {
      color: #fff;
      background-color: #286090;
      background-image: none;
      border-color: #204d74
    }

    .btn-primary.active.focus,
    .btn-primary.active:focus,
    .btn-primary.active:hover,
    .btn-primary:active.focus,
    .btn-primary:active:focus,
    .btn-primary:active:hover,
    .open>.dropdown-toggle.btn-primary.focus,
    .open>.dropdown-toggle.btn-primary:focus,
    .open>.dropdown-toggle.btn-primary:hover {
      color: #fff;
      background-color: #204d74;
      border-color: #122b40
    }

    .btn-primary.disabled.focus,
    .btn-primary.disabled:focus,
    .btn-primary.disabled:hover,
    .btn-primary[disabled].focus,
    .btn-primary[disabled]:focus,
    .btn-primary[disabled]:hover,
    fieldset[disabled] .btn-primary.focus,
    fieldset[disabled] .btn-primary:focus,
    fieldset[disabled] .btn-primary:hover {
      background-color: #337ab7;
      border-color: #2e6da4
    }

    .btn-primary .badge {
      color: #337ab7;
      background-color: #fff
    }

    .btn-success {
      color: #fff;
      background-color: #5cb85c;
      border-color: #4cae4c
    }

    .btn-success.focus,
    .btn-success:focus {
      color: #fff;
      background-color: #449d44;
      border-color: #255625
    }

    .btn-success:hover {
      color: #fff;
      background-color: #449d44;
      border-color: #398439
    }

    .btn-success.active,
    .btn-success:active,
    .open>.dropdown-toggle.btn-success {
      color: #fff;
      background-color: #449d44;
      background-image: none;
      border-color: #398439
    }

    .btn-success.active.focus,
    .btn-success.active:focus,
    .btn-success.active:hover,
    .btn-success:active.focus,
    .btn-success:active:focus,
    .btn-success:active:hover,
    .open>.dropdown-toggle.btn-success.focus,
    .open>.dropdown-toggle.btn-success:focus,
    .open>.dropdown-toggle.btn-success:hover {
      color: #fff;
      background-color: #398439;
      border-color: #255625
    }

    .btn-success.disabled.focus,
    .btn-success.disabled:focus,
    .btn-success.disabled:hover,
    .btn-success[disabled].focus,
    .btn-success[disabled]:focus,
    .btn-success[disabled]:hover,
    fieldset[disabled] .btn-success.focus,
    fieldset[disabled] .btn-success:focus,
    fieldset[disabled] .btn-success:hover {
      background-color: #5cb85c;
      border-color: #4cae4c
    }

    .btn-success .badge {
      color: #5cb85c;
      background-color: #fff
    }

    .btn-info {
      color: #fff;
      background-color: #5bc0de;
      border-color: #46b8da
    }

    .btn-info.focus,
    .btn-info:focus {
      color: #fff;
      background-color: #31b0d5;
      border-color: #1b6d85
    }

    .btn-info:hover {
      color: #fff;
      background-color: #31b0d5;
      border-color: #269abc
    }

    .btn-info.active,
    .btn-info:active,
    .open>.dropdown-toggle.btn-info {
      color: #fff;
      background-color: #31b0d5;
      background-image: none;
      border-color: #269abc
    }

    .btn-info.active.focus,
    .btn-info.active:focus,
    .btn-info.active:hover,
    .btn-info:active.focus,
    .btn-info:active:focus,
    .btn-info:active:hover,
    .open>.dropdown-toggle.btn-info.focus,
    .open>.dropdown-toggle.btn-info:focus,
    .open>.dropdown-toggle.btn-info:hover {
      color: #fff;
      background-color: #269abc;
      border-color: #1b6d85
    }

    .btn-info.disabled.focus,
    .btn-info.disabled:focus,
    .btn-info.disabled:hover,
    .btn-info[disabled].focus,
    .btn-info[disabled]:focus,
    .btn-info[disabled]:hover,
    fieldset[disabled] .btn-info.focus,
    fieldset[disabled] .btn-info:focus,
    fieldset[disabled] .btn-info:hover {
      background-color: #5bc0de;
      border-color: #46b8da
    }

    .btn-info .badge {
      color: #5bc0de;
      background-color: #fff
    }

    .btn-warning {
      color: #fff;
      background-color: #f0ad4e;
      border-color: #eea236
    }

    .btn-warning.focus,
    .btn-warning:focus {
      color: #fff;
      background-color: #ec971f;
      border-color: #985f0d
    }

    .btn-warning:hover {
      color: #fff;
      background-color: #ec971f;
      border-color: #d58512
    }

    .btn-warning.active,
    .btn-warning:active,
    .open>.dropdown-toggle.btn-warning {
      color: #fff;
      background-color: #ec971f;
      background-image: none;
      border-color: #d58512
    }

    .btn-warning.active.focus,
    .btn-warning.active:focus,
    .btn-warning.active:hover,
    .btn-warning:active.focus,
    .btn-warning:active:focus,
    .btn-warning:active:hover,
    .open>.dropdown-toggle.btn-warning.focus,
    .open>.dropdown-toggle.btn-warning:focus,
    .open>.dropdown-toggle.btn-warning:hover {
      color: #fff;
      background-color: #d58512;
      border-color: #985f0d
    }

    .btn-warning.disabled.focus,
    .btn-warning.disabled:focus,
    .btn-warning.disabled:hover,
    .btn-warning[disabled].focus,
    .btn-warning[disabled]:focus,
    .btn-warning[disabled]:hover,
    fieldset[disabled] .btn-warning.focus,
    fieldset[disabled] .btn-warning:focus,
    fieldset[disabled] .btn-warning:hover {
      background-color: #f0ad4e;
      border-color: #eea236
    }

    .btn-warning .badge {
      color: #f0ad4e;
      background-color: #fff
    }

    .btn-danger {
      color: #fff;
      background-color: #d9534f;
      border-color: #d43f3a
    }

    .btn-danger.focus,
    .btn-danger:focus {
      color: #fff;
      background-color: #c9302c;
      border-color: #761c19
    }

    .btn-danger:hover {
      color: #fff;
      background-color: #c9302c;
      border-color: #ac2925
    }

    .btn-danger.active,
    .btn-danger:active,
    .open>.dropdown-toggle.btn-danger {
      color: #fff;
      background-color: #c9302c;
      background-image: none;
      border-color: #ac2925
    }

    .btn-danger.active.focus,
    .btn-danger.active:focus,
    .btn-danger.active:hover,
    .btn-danger:active.focus,
    .btn-danger:active:focus,
    .btn-danger:active:hover,
    .open>.dropdown-toggle.btn-danger.focus,
    .open>.dropdown-toggle.btn-danger:focus,
    .open>.dropdown-toggle.btn-danger:hover {
      color: #fff;
      background-color: #ac2925;
      border-color: #761c19
    }

    .btn-danger.disabled.focus,
    .btn-danger.disabled:focus,
    .btn-danger.disabled:hover,
    .btn-danger[disabled].focus,
    .btn-danger[disabled]:focus,
    .btn-danger[disabled]:hover,
    fieldset[disabled] .btn-danger.focus,
    fieldset[disabled] .btn-danger:focus,
    fieldset[disabled] .btn-danger:hover {
      background-color: #d9534f;
      border-color: #d43f3a
    }

    .btn-danger .badge {
      color: #d9534f;
      background-color: #fff
    }

    .btn-link {
      font-weight: 400;
      color: #337ab7;
      border-radius: 0
    }

    .btn-link,
    .btn-link.active,
    .btn-link:active,
    .btn-link[disabled],
    fieldset[disabled] .btn-link {
      background-color: transparent;
      -webkit-box-shadow: none;
      box-shadow: none
    }

    .btn-link,
    .btn-link:active,
    .btn-link:focus,
    .btn-link:hover {
      border-color: transparent
    }

    .btn-link:focus,
    .btn-link:hover {
      color: #23527c;
      text-decoration: underline;
      background-color: transparent
    }

    .btn-link[disabled]:focus,
    .btn-link[disabled]:hover,
    fieldset[disabled] .btn-link:focus,
    fieldset[disabled] .btn-link:hover {
      color: #777;
      text-decoration: none
    }

    .btn-group-lg>.btn,
    .btn-lg {
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333;
      border-radius: 6px
    }

    .btn-group-sm>.btn,
    .btn-sm {
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
    }

    .btn-group-xs>.btn,
    .btn-xs {
      padding: 1px 5px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
    }

    .btn-block {
      display: block;
      width: 100%
    }

    .btn-block+.btn-block {
      margin-top: 5px
    }

    input[type=button].btn-block,
    input[type=reset].btn-block,
    input[type=submit].btn-block {
      width: 100%
    }

    .fade {
      opacity: 0;
      -webkit-transition: opacity .15s linear;
      -o-transition: opacity .15s linear;
      transition: opacity .15s linear
    }

    .fade.in {
      opacity: 1
    }

    .collapse {
      display: none
    }

    .collapse.in {
      display: block
    }

    tr.collapse.in {
      display: table-row
    }

    tbody.collapse.in {
      display: table-row-group
    }

    .collapsing {
      position: relative;
      height: 0;
      overflow: hidden;
      -webkit-transition-property: height, visibility;
      -o-transition-property: height, visibility;
      transition-property: height, visibility;
      -webkit-transition-duration: .35s;
      -o-transition-duration: .35s;
      transition-duration: .35s;
      -webkit-transition-timing-function: ease;
      -o-transition-timing-function: ease;
      transition-timing-function: ease
    }

    .caret {
      display: inline-block;
      width: 0;
      height: 0;
      margin-left: 2px;
      vertical-align: middle;
      border-top: 4px dashed;
      border-top: 4px solid\9;
      border-right: 4px solid transparent;
      border-left: 4px solid transparent
    }

    .dropdown,
    .dropup {
      position: relative
    }

    .dropdown-toggle:focus {
      outline: 0
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1000;
      display: none;
      float: left;
      min-width: 160px;
      padding: 5px 0;
      margin: 2px 0 0;
      font-size: 14px;
      text-align: left;
      list-style: none;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ccc;
      border: 1px solid rgba(0, 0, 0, .15);
      border-radius: 4px;
      -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
      box-shadow: 0 6px 12px rgba(0, 0, 0, .175)
    }

    .dropdown-menu.pull-right {
      right: 0;
      left: auto
    }

    .dropdown-menu .divider {
      height: 1px;
      margin: 9px 0;
      overflow: hidden;
      background-color: #e5e5e5
    }

    .dropdown-menu>li>a {
      display: block;
      padding: 3px 20px;
      clear: both;
      font-weight: 400;
      line-height: 1.42857143;
      color: #333;
      white-space: nowrap
    }

    .dropdown-menu>li>a:focus,
    .dropdown-menu>li>a:hover {
      color: #262626;
      text-decoration: none;
      background-color: #f5f5f5
    }

    .dropdown-menu>.active>a,
    .dropdown-menu>.active>a:focus,
    .dropdown-menu>.active>a:hover {
      color: #fff;
      text-decoration: none;
      background-color: #337ab7;
      outline: 0
    }

    .dropdown-menu>.disabled>a,
    .dropdown-menu>.disabled>a:focus,
    .dropdown-menu>.disabled>a:hover {
      color: #777
    }

    .dropdown-menu>.disabled>a:focus,
    .dropdown-menu>.disabled>a:hover {
      text-decoration: none;
      cursor: not-allowed;
      background-color: transparent;
      background-image: none;
      filter: progid:DXImageTransform.Microsoft.gradient(enabled=false)
    }

    .open>.dropdown-menu {
      display: block
    }

    .open>a {
      outline: 0
    }

    .dropdown-menu-right {
      right: 0;
      left: auto
    }

    .dropdown-menu-left {
      right: auto;
      left: 0
    }

    .dropdown-header {
      display: block;
      padding: 3px 20px;
      font-size: 12px;
      line-height: 1.42857143;
      color: #777;
      white-space: nowrap
    }

    .dropdown-backdrop {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 990
    }

    .pull-right>.dropdown-menu {
      right: 0;
      left: auto
    }

    .dropup .caret,
    .navbar-fixed-bottom .dropdown .caret {
      content: "";
      border-top: 0;
      border-bottom: 4px dashed;
      border-bottom: 4px solid\9
    }

    .dropup .dropdown-menu,
    .navbar-fixed-bottom .dropdown .dropdown-menu {
      top: auto;
      bottom: 100%;
      margin-bottom: 2px
    }

    @media (min-width:768px) {
      .navbar-right .dropdown-menu {
        right: 0;
        left: auto
      }

      .navbar-right .dropdown-menu-left {
        right: auto;
        left: 0
      }
    }

    .btn-group,
    .btn-group-vertical {
      position: relative;
      display: inline-block;
      vertical-align: middle
    }

    .btn-group-vertical>.btn,
    .btn-group>.btn {
      position: relative;
      float: left
    }

    .btn-group-vertical>.btn.active,
    .btn-group-vertical>.btn:active,
    .btn-group-vertical>.btn:focus,
    .btn-group-vertical>.btn:hover,
    .btn-group>.btn.active,
    .btn-group>.btn:active,
    .btn-group>.btn:focus,
    .btn-group>.btn:hover {
      z-index: 2
    }

    .btn-group .btn+.btn,
    .btn-group .btn+.btn-group,
    .btn-group .btn-group+.btn,
    .btn-group .btn-group+.btn-group {
      margin-left: -1px
    }

    .btn-toolbar {
      margin-left: -5px
    }

    .btn-toolbar .btn,
    .btn-toolbar .btn-group,
    .btn-toolbar .input-group {
      float: left
    }

    .btn-toolbar>.btn,
    .btn-toolbar>.btn-group,
    .btn-toolbar>.input-group {
      margin-left: 5px
    }

    .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
      border-radius: 0
    }

    .btn-group>.btn:first-child {
      margin-left: 0
    }

    .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .btn-group>.btn:last-child:not(:first-child),
    .btn-group>.dropdown-toggle:not(:first-child) {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0
    }

    .btn-group>.btn-group {
      float: left
    }

    .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
      border-radius: 0
    }

    .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
    .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0
    }

    .btn-group .dropdown-toggle:active,
    .btn-group.open .dropdown-toggle {
      outline: 0
    }

    .btn-group>.btn+.dropdown-toggle {
      padding-right: 8px;
      padding-left: 8px
    }

    .btn-group>.btn-lg+.dropdown-toggle {
      padding-right: 12px;
      padding-left: 12px
    }

    .btn-group.open .dropdown-toggle {
      -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
      box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .btn-group.open .dropdown-toggle.btn-link {
      -webkit-box-shadow: none;
      box-shadow: none
    }

    .btn .caret {
      margin-left: 0
    }

    .btn-lg .caret {
      border-width: 5px 5px 0;
      border-bottom-width: 0
    }

    .dropup .btn-lg .caret {
      border-width: 0 5px 5px
    }

    .btn-group-vertical>.btn,
    .btn-group-vertical>.btn-group,
    .btn-group-vertical>.btn-group>.btn {
      display: block;
      float: none;
      width: 100%;
      max-width: 100%
    }

    .btn-group-vertical>.btn-group>.btn {
      float: none
    }

    .btn-group-vertical>.btn+.btn,
    .btn-group-vertical>.btn+.btn-group,
    .btn-group-vertical>.btn-group+.btn,
    .btn-group-vertical>.btn-group+.btn-group {
      margin-top: -1px;
      margin-left: 0
    }

    .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
      border-radius: 0
    }

    .btn-group-vertical>.btn:first-child:not(:last-child) {
      border-top-left-radius: 4px;
      border-top-right-radius: 4px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
    }

    .btn-group-vertical>.btn:last-child:not(:first-child) {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      border-bottom-right-radius: 4px;
      border-bottom-left-radius: 4px
    }

    .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
      border-radius: 0
    }

    .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
    .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
    }

    .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
      border-top-left-radius: 0;
      border-top-right-radius: 0
    }

    .btn-group-justified {
      display: table;
      width: 100%;
      table-layout: fixed;
      border-collapse: separate
    }

    .btn-group-justified>.btn,
    .btn-group-justified>.btn-group {
      display: table-cell;
      float: none;
      width: 1%
    }

    .btn-group-justified>.btn-group .btn {
      width: 100%
    }

    .btn-group-justified>.btn-group .dropdown-menu {
      left: auto
    }

    [data-toggle=buttons]>.btn input[type=checkbox],
    [data-toggle=buttons]>.btn input[type=radio],
    [data-toggle=buttons]>.btn-group>.btn input[type=checkbox],
    [data-toggle=buttons]>.btn-group>.btn input[type=radio] {
      position: absolute;
      clip: rect(0, 0, 0, 0);
      pointer-events: none
    }

    .input-group {
      position: relative;
      display: table;
      border-collapse: separate
    }

    .input-group[class*=col-] {
      float: none;
      padding-right: 0;
      padding-left: 0
    }

    .input-group .form-control {
      position: relative;
      z-index: 2;
      float: left;
      width: 100%;
      margin-bottom: 0
    }

    .input-group .form-control:focus {
      z-index: 3
    }

    .input-group-lg>.form-control,
    .input-group-lg>.input-group-addon,
    .input-group-lg>.input-group-btn>.btn {
      height: 46px;
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333;
      border-radius: 6px
    }

    select.input-group-lg>.form-control,
    select.input-group-lg>.input-group-addon,
    select.input-group-lg>.input-group-btn>.btn {
      height: 46px;
      line-height: 46px
    }

    select[multiple].input-group-lg>.form-control,
    select[multiple].input-group-lg>.input-group-addon,
    select[multiple].input-group-lg>.input-group-btn>.btn,
    textarea.input-group-lg>.form-control,
    textarea.input-group-lg>.input-group-addon,
    textarea.input-group-lg>.input-group-btn>.btn {
      height: auto
    }

    .input-group-sm>.form-control,
    .input-group-sm>.input-group-addon,
    .input-group-sm>.input-group-btn>.btn {
      height: 30px;
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
    }

    select.input-group-sm>.form-control,
    select.input-group-sm>.input-group-addon,
    select.input-group-sm>.input-group-btn>.btn {
      height: 30px;
      line-height: 30px
    }

    select[multiple].input-group-sm>.form-control,
    select[multiple].input-group-sm>.input-group-addon,
    select[multiple].input-group-sm>.input-group-btn>.btn,
    textarea.input-group-sm>.form-control,
    textarea.input-group-sm>.input-group-addon,
    textarea.input-group-sm>.input-group-btn>.btn {
      height: auto
    }

    .input-group .form-control,
    .input-group-addon,
    .input-group-btn {
      display: table-cell
    }

    .input-group .form-control:not(:first-child):not(:last-child),
    .input-group-addon:not(:first-child):not(:last-child),
    .input-group-btn:not(:first-child):not(:last-child) {
      border-radius: 0
    }

    .input-group-addon,
    .input-group-btn {
      width: 1%;
      white-space: nowrap;
      vertical-align: middle
    }

    .input-group-addon {
      padding: 6px 12px;
      font-size: 14px;
      font-weight: 400;
      line-height: 1;
      color: #555;
      text-align: center;
      background-color: #eee;
      border: 1px solid #ccc;
      border-radius: 4px
    }

    .input-group-addon.input-sm {
      padding: 5px 10px;
      font-size: 12px;
      border-radius: 3px
    }

    .input-group-addon.input-lg {
      padding: 10px 16px;
      font-size: 18px;
      border-radius: 6px
    }

    .input-group-addon input[type=checkbox],
    .input-group-addon input[type=radio] {
      margin-top: 0
    }

    .input-group .form-control:first-child,
    .input-group-addon:first-child,
    .input-group-btn:first-child>.btn,
    .input-group-btn:first-child>.btn-group>.btn,
    .input-group-btn:first-child>.dropdown-toggle,
    .input-group-btn:last-child>.btn-group:not(:last-child)>.btn,
    .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .input-group-addon:first-child {
      border-right: 0
    }

    .input-group .form-control:last-child,
    .input-group-addon:last-child,
    .input-group-btn:first-child>.btn-group:not(:first-child)>.btn,
    .input-group-btn:first-child>.btn:not(:first-child),
    .input-group-btn:last-child>.btn,
    .input-group-btn:last-child>.btn-group>.btn,
    .input-group-btn:last-child>.dropdown-toggle {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0
    }

    .input-group-addon:last-child {
      border-left: 0
    }

    .input-group-btn {
      position: relative;
      font-size: 0;
      white-space: nowrap
    }

    .input-group-btn>.btn {
      position: relative
    }

    .input-group-btn>.btn+.btn {
      margin-left: -1px
    }

    .input-group-btn>.btn:active,
    .input-group-btn>.btn:focus,
    .input-group-btn>.btn:hover {
      z-index: 2
    }

    .input-group-btn:first-child>.btn,
    .input-group-btn:first-child>.btn-group {
      margin-right: -1px
    }

    .input-group-btn:last-child>.btn,
    .input-group-btn:last-child>.btn-group {
      z-index: 2;
      margin-left: -1px
    }

    .nav {
      padding-left: 0;
      margin-bottom: 0;
      list-style: none
    }

    .nav>li {
      position: relative;
      display: block
    }

    .nav>li>a {
      position: relative;
      display: block;
      padding: 10px 15px
    }

    .nav>li>a:focus,
    .nav>li>a:hover {
      text-decoration: none;
      background-color: #eee
    }

    .nav>li.disabled>a {
      color: #777
    }

    .nav>li.disabled>a:focus,
    .nav>li.disabled>a:hover {
      color: #777;
      text-decoration: none;
      cursor: not-allowed;
      background-color: transparent
    }

    .nav .open>a,
    .nav .open>a:focus,
    .nav .open>a:hover {
      background-color: #eee;
      border-color: #337ab7
    }

    .nav .nav-divider {
      height: 1px;
      margin: 9px 0;
      overflow: hidden;
      background-color: #e5e5e5
    }

    .nav>li>a>img {
      max-width: none
    }

    .nav-tabs {
      border-bottom: 1px solid #ddd
    }

    .nav-tabs>li {
      float: left;
      margin-bottom: -1px
    }

    .nav-tabs>li>a {
      margin-right: 2px;
      line-height: 1.42857143;
      border: 1px solid transparent;
      border-radius: 4px 4px 0 0
    }

    .nav-tabs>li>a:hover {
      border-color: #eee #eee #ddd
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
      color: #555;
      cursor: default;
      background-color: #fff;
      border: 1px solid #ddd;
      border-bottom-color: transparent
    }

    .nav-tabs.nav-justified {
      width: 100%;
      border-bottom: 0
    }

    .nav-tabs.nav-justified>li {
      float: none
    }

    .nav-tabs.nav-justified>li>a {
      margin-bottom: 5px;
      text-align: center
    }

    .nav-tabs.nav-justified>.dropdown .dropdown-menu {
      top: auto;
      left: auto
    }

    @media (min-width:768px) {
      .nav-tabs.nav-justified>li {
        display: table-cell;
        width: 1%
      }

      .nav-tabs.nav-justified>li>a {
        margin-bottom: 0
      }
    }

    .nav-tabs.nav-justified>li>a {
      margin-right: 0;
      border-radius: 4px
    }

    .nav-tabs.nav-justified>.active>a,
    .nav-tabs.nav-justified>.active>a:focus,
    .nav-tabs.nav-justified>.active>a:hover {
      border: 1px solid #ddd
    }

    @media (min-width:768px) {
      .nav-tabs.nav-justified>li>a {
        border-bottom: 1px solid #ddd;
        border-radius: 4px 4px 0 0
      }

      .nav-tabs.nav-justified>.active>a,
      .nav-tabs.nav-justified>.active>a:focus,
      .nav-tabs.nav-justified>.active>a:hover {
        border-bottom-color: #fff
      }
    }

    .nav-pills>li {
      float: left
    }

    .nav-pills>li>a {
      border-radius: 4px
    }

    .nav-pills>li+li {
      margin-left: 2px
    }

    .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
      color: #fff;
      background-color: #337ab7
    }

    .nav-stacked>li {
      float: none
    }

    .nav-stacked>li+li {
      margin-top: 2px;
      margin-left: 0
    }

    .nav-justified {
      width: 100%
    }

    .nav-justified>li {
      float: none
    }

    .nav-justified>li>a {
      margin-bottom: 5px;
      text-align: center
    }

    .nav-justified>.dropdown .dropdown-menu {
      top: auto;
      left: auto
    }

    @media (min-width:768px) {
      .nav-justified>li {
        display: table-cell;
        width: 1%
      }

      .nav-justified>li>a {
        margin-bottom: 0
      }
    }

    .nav-tabs-justified {
      border-bottom: 0
    }

    .nav-tabs-justified>li>a {
      margin-right: 0;
      border-radius: 4px
    }

    .nav-tabs-justified>.active>a,
    .nav-tabs-justified>.active>a:focus,
    .nav-tabs-justified>.active>a:hover {
      border: 1px solid #ddd
    }

    @media (min-width:768px) {
      .nav-tabs-justified>li>a {
        border-bottom: 1px solid #ddd;
        border-radius: 4px 4px 0 0
      }

      .nav-tabs-justified>.active>a,
      .nav-tabs-justified>.active>a:focus,
      .nav-tabs-justified>.active>a:hover {
        border-bottom-color: #fff
      }
    }

    .tab-content>.tab-pane {
      display: none
    }

    .tab-content>.active {
      display: block
    }

    .nav-tabs .dropdown-menu {
      margin-top: -1px;
      border-top-left-radius: 0;
      border-top-right-radius: 0
    }

    .navbar {
      position: relative;
      min-height: 50px;
      margin-bottom: 20px;
      border: 1px solid transparent
    }

    @media (min-width:768px) {
      .navbar {
        border-radius: 4px
      }
    }

    @media (min-width:768px) {
      .navbar-header {
        float: left
      }
    }

    .navbar-collapse {
      padding-right: 15px;
      padding-left: 15px;
      overflow-x: visible;
      border-top: 1px solid transparent;
      -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
      -webkit-overflow-scrolling: touch
    }

    .navbar-collapse.in {
      overflow-y: auto
    }

    @media (min-width:768px) {
      .navbar-collapse {
        width: auto;
        border-top: 0;
        -webkit-box-shadow: none;
        box-shadow: none
      }

      .navbar-collapse.collapse {
        display: block !important;
        height: auto !important;
        padding-bottom: 0;
        overflow: visible !important
      }

      .navbar-collapse.in {
        overflow-y: visible
      }

      .navbar-fixed-bottom .navbar-collapse,
      .navbar-fixed-top .navbar-collapse,
      .navbar-static-top .navbar-collapse {
        padding-right: 0;
        padding-left: 0
      }
    }

    .navbar-fixed-bottom,
    .navbar-fixed-top {
      position: fixed;
      right: 0;
      left: 0;
      z-index: 1030
    }

    .navbar-fixed-bottom .navbar-collapse,
    .navbar-fixed-top .navbar-collapse {
      max-height: 340px
    }

    @media (max-device-width:480px) and (orientation:landscape) {

      .navbar-fixed-bottom .navbar-collapse,
      .navbar-fixed-top .navbar-collapse {
        max-height: 200px
      }
    }

    @media (min-width:768px) {

      .navbar-fixed-bottom,
      .navbar-fixed-top {
        border-radius: 0
      }
    }

    .navbar-fixed-top {
      top: 0;
      border-width: 0 0 1px
    }

    .navbar-fixed-bottom {
      bottom: 0;
      margin-bottom: 0;
      border-width: 1px 0 0
    }

    .container-fluid>.navbar-collapse,
    .container-fluid>.navbar-header,
    .container>.navbar-collapse,
    .container>.navbar-header {
      margin-right: -15px;
      margin-left: -15px
    }

    @media (min-width:768px) {

      .container-fluid>.navbar-collapse,
      .container-fluid>.navbar-header,
      .container>.navbar-collapse,
      .container>.navbar-header {
        margin-right: 0;
        margin-left: 0
      }
    }

    .navbar-static-top {
      z-index: 1000;
      border-width: 0 0 1px
    }

    @media (min-width:768px) {
      .navbar-static-top {
        border-radius: 0
      }
    }

    .navbar-brand {
      float: left;
      height: 50px;
      padding: 15px 15px;
      font-size: 18px;
      line-height: 20px
    }

    .navbar-brand:focus,
    .navbar-brand:hover {
      text-decoration: none
    }

    .navbar-brand>img {
      display: block
    }

    @media (min-width:768px) {

      .navbar>.container .navbar-brand,
      .navbar>.container-fluid .navbar-brand {
        margin-left: -15px
      }
    }

    .navbar-toggle {
      position: relative;
      float: right;
      padding: 9px 10px;
      margin-right: 15px;
      margin-top: 8px;
      margin-bottom: 8px;
      background-color: transparent;
      background-image: none;
      border: 1px solid transparent;
      border-radius: 4px
    }

    .navbar-toggle:focus {
      outline: 0
    }

    .navbar-toggle .icon-bar {
      display: block;
      width: 22px;
      height: 2px;
      border-radius: 1px
    }

    .navbar-toggle .icon-bar+.icon-bar {
      margin-top: 4px
    }

    @media (min-width:768px) {
      .navbar-toggle {
        display: none
      }
    }

    .navbar-nav {
      margin: 7.5px -15px
    }

    .navbar-nav>li>a {
      padding-top: 10px;
      padding-bottom: 10px;
      line-height: 20px
    }

    @media (max-width:767px) {
      .navbar-nav .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none
      }

      .navbar-nav .open .dropdown-menu .dropdown-header,
      .navbar-nav .open .dropdown-menu>li>a {
        padding: 5px 15px 5px 25px
      }

      .navbar-nav .open .dropdown-menu>li>a {
        line-height: 20px
      }

      .navbar-nav .open .dropdown-menu>li>a:focus,
      .navbar-nav .open .dropdown-menu>li>a:hover {
        background-image: none
      }
    }

    @media (min-width:768px) {
      .navbar-nav {
        float: left;
        margin: 0
      }

      .navbar-nav>li {
        float: left
      }

      .navbar-nav>li>a {
        padding-top: 15px;
        padding-bottom: 15px
      }
    }

    .navbar-form {
      padding: 10px 15px;
      margin-right: -15px;
      margin-left: -15px;
      border-top: 1px solid transparent;
      border-bottom: 1px solid transparent;
      -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
      margin-top: 8px;
      margin-bottom: 8px
    }

    @media (min-width:768px) {
      .navbar-form .form-group {
        display: inline-block;
        margin-bottom: 0;
        vertical-align: middle
      }

      .navbar-form .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
      }

      .navbar-form .form-control-static {
        display: inline-block
      }

      .navbar-form .input-group {
        display: inline-table;
        vertical-align: middle
      }

      .navbar-form .input-group .form-control,
      .navbar-form .input-group .input-group-addon,
      .navbar-form .input-group .input-group-btn {
        width: auto
      }

      .navbar-form .input-group>.form-control {
        width: 100%
      }

      .navbar-form .control-label {
        margin-bottom: 0;
        vertical-align: middle
      }

      .navbar-form .checkbox,
      .navbar-form .radio {
        display: inline-block;
        margin-top: 0;
        margin-bottom: 0;
        vertical-align: middle
      }

      .navbar-form .checkbox label,
      .navbar-form .radio label {
        padding-left: 0
      }

      .navbar-form .checkbox input[type=checkbox],
      .navbar-form .radio input[type=radio] {
        position: relative;
        margin-left: 0
      }

      .navbar-form .has-feedback .form-control-feedback {
        top: 0
      }
    }

    @media (max-width:767px) {
      .navbar-form .form-group {
        margin-bottom: 5px
      }

      .navbar-form .form-group:last-child {
        margin-bottom: 0
      }
    }

    @media (min-width:768px) {
      .navbar-form {
        width: auto;
        padding-top: 0;
        padding-bottom: 0;
        margin-right: 0;
        margin-left: 0;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none
      }
    }

    .navbar-nav>li>.dropdown-menu {
      margin-top: 0;
      border-top-left-radius: 0;
      border-top-right-radius: 0
    }

    .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
      margin-bottom: 0;
      border-top-left-radius: 4px;
      border-top-right-radius: 4px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
    }

    .navbar-btn {
      margin-top: 8px;
      margin-bottom: 8px
    }

    .navbar-btn.btn-sm {
      margin-top: 10px;
      margin-bottom: 10px
    }

    .navbar-btn.btn-xs {
      margin-top: 14px;
      margin-bottom: 14px
    }

    .navbar-text {
      margin-top: 15px;
      margin-bottom: 15px
    }

    @media (min-width:768px) {
      .navbar-text {
        float: left;
        margin-right: 15px;
        margin-left: 15px
      }
    }

    @media (min-width:768px) {
      .navbar-left {
        float: left !important
      }

      .navbar-right {
        float: right !important;
        margin-right: -15px
      }

      .navbar-right~.navbar-right {
        margin-right: 0
      }
    }

    .navbar-default {
      background-color: #f8f8f8;
      border-color: #e7e7e7
    }

    .navbar-default .navbar-brand {
      color: #777
    }

    .navbar-default .navbar-brand:focus,
    .navbar-default .navbar-brand:hover {
      color: #5e5e5e;
      background-color: transparent
    }

    .navbar-default .navbar-text {
      color: #777
    }

    .navbar-default .navbar-nav>li>a {
      color: #777
    }

    .navbar-default .navbar-nav>li>a:focus,
    .navbar-default .navbar-nav>li>a:hover {
      color: #333;
      background-color: transparent
    }

    .navbar-default .navbar-nav>.active>a,
    .navbar-default .navbar-nav>.active>a:focus,
    .navbar-default .navbar-nav>.active>a:hover {
      color: #555;
      background-color: #e7e7e7
    }

    .navbar-default .navbar-nav>.disabled>a,
    .navbar-default .navbar-nav>.disabled>a:focus,
    .navbar-default .navbar-nav>.disabled>a:hover {
      color: #ccc;
      background-color: transparent
    }

    .navbar-default .navbar-nav>.open>a,
    .navbar-default .navbar-nav>.open>a:focus,
    .navbar-default .navbar-nav>.open>a:hover {
      color: #555;
      background-color: #e7e7e7
    }

    @media (max-width:767px) {
      .navbar-default .navbar-nav .open .dropdown-menu>li>a {
        color: #777
      }

      .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,
      .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
        color: #333;
        background-color: transparent
      }

      .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
      .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,
      .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
        color: #555;
        background-color: #e7e7e7
      }

      .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
      .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,
      .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover {
        color: #ccc;
        background-color: transparent
      }
    }

    .navbar-default .navbar-toggle {
      border-color: #ddd
    }

    .navbar-default .navbar-toggle:focus,
    .navbar-default .navbar-toggle:hover {
      background-color: #ddd
    }

    .navbar-default .navbar-toggle .icon-bar {
      background-color: #888
    }

    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
      border-color: #e7e7e7
    }

    .navbar-default .navbar-link {
      color: #777
    }

    .navbar-default .navbar-link:hover {
      color: #333
    }

    .navbar-default .btn-link {
      color: #777
    }

    .navbar-default .btn-link:focus,
    .navbar-default .btn-link:hover {
      color: #333
    }

    .navbar-default .btn-link[disabled]:focus,
    .navbar-default .btn-link[disabled]:hover,
    fieldset[disabled] .navbar-default .btn-link:focus,
    fieldset[disabled] .navbar-default .btn-link:hover {
      color: #ccc
    }

    .navbar-inverse {
      background-color: #222;
      border-color: #080808
    }

    .navbar-inverse .navbar-brand {
      color: #9d9d9d
    }

    .navbar-inverse .navbar-brand:focus,
    .navbar-inverse .navbar-brand:hover {
      color: #fff;
      background-color: transparent
    }

    .navbar-inverse .navbar-text {
      color: #9d9d9d
    }

    .navbar-inverse .navbar-nav>li>a {
      color: #9d9d9d
    }

    .navbar-inverse .navbar-nav>li>a:focus,
    .navbar-inverse .navbar-nav>li>a:hover {
      color: #fff;
      background-color: transparent
    }

    .navbar-inverse .navbar-nav>.active>a,
    .navbar-inverse .navbar-nav>.active>a:focus,
    .navbar-inverse .navbar-nav>.active>a:hover {
      color: #fff;
      background-color: #080808
    }

    .navbar-inverse .navbar-nav>.disabled>a,
    .navbar-inverse .navbar-nav>.disabled>a:focus,
    .navbar-inverse .navbar-nav>.disabled>a:hover {
      color: #444;
      background-color: transparent
    }

    .navbar-inverse .navbar-nav>.open>a,
    .navbar-inverse .navbar-nav>.open>a:focus,
    .navbar-inverse .navbar-nav>.open>a:hover {
      color: #fff;
      background-color: #080808
    }

    @media (max-width:767px) {
      .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
        border-color: #080808
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
        background-color: #080808
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
        color: #9d9d9d
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,
      .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover {
        color: #fff;
        background-color: transparent
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
      .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,
      .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover {
        color: #fff;
        background-color: #080808
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
      .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,
      .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover {
        color: #444;
        background-color: transparent
      }
    }

    .navbar-inverse .navbar-toggle {
      border-color: #333
    }

    .navbar-inverse .navbar-toggle:focus,
    .navbar-inverse .navbar-toggle:hover {
      background-color: #333
    }

    .navbar-inverse .navbar-toggle .icon-bar {
      background-color: #fff
    }

    .navbar-inverse .navbar-collapse,
    .navbar-inverse .navbar-form {
      border-color: #101010
    }

    .navbar-inverse .navbar-link {
      color: #9d9d9d
    }

    .navbar-inverse .navbar-link:hover {
      color: #fff
    }

    .navbar-inverse .btn-link {
      color: #9d9d9d
    }

    .navbar-inverse .btn-link:focus,
    .navbar-inverse .btn-link:hover {
      color: #fff
    }

    .navbar-inverse .btn-link[disabled]:focus,
    .navbar-inverse .btn-link[disabled]:hover,
    fieldset[disabled] .navbar-inverse .btn-link:focus,
    fieldset[disabled] .navbar-inverse .btn-link:hover {
      color: #444
    }

    .breadcrumb {
      padding: 8px 15px;
      margin-bottom: 20px;
      list-style: none;
      background-color: #f5f5f5;
      border-radius: 4px
    }

    .breadcrumb>li {
      display: inline-block
    }

    .breadcrumb>li+li:before {
      padding: 0 5px;
      color: #ccc;
      content: "/\00a0"
    }

    .breadcrumb>.active {
      color: #777
    }

    .pagination {
      display: inline-block;
      padding-left: 0;
      margin: 20px 0;
      border-radius: 4px
    }

    .pagination>li {
      display: inline
    }

    .pagination>li>a,
    .pagination>li>span {
      position: relative;
      float: left;
      padding: 6px 12px;
      margin-left: -1px;
      line-height: 1.42857143;
      color: #337ab7;
      text-decoration: none;
      background-color: #fff;
      border: 1px solid #ddd
    }

    .pagination>li>a:focus,
    .pagination>li>a:hover,
    .pagination>li>span:focus,
    .pagination>li>span:hover {
      z-index: 2;
      color: #23527c;
      background-color: #eee;
      border-color: #ddd
    }

    .pagination>li:first-child>a,
    .pagination>li:first-child>span {
      margin-left: 0;
      border-top-left-radius: 4px;
      border-bottom-left-radius: 4px
    }

    .pagination>li:last-child>a,
    .pagination>li:last-child>span {
      border-top-right-radius: 4px;
      border-bottom-right-radius: 4px
    }

    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
      z-index: 3;
      color: #fff;
      cursor: default;
      background-color: #337ab7;
      border-color: #337ab7
    }

    .pagination>.disabled>a,
    .pagination>.disabled>a:focus,
    .pagination>.disabled>a:hover,
    .pagination>.disabled>span,
    .pagination>.disabled>span:focus,
    .pagination>.disabled>span:hover {
      color: #777;
      cursor: not-allowed;
      background-color: #fff;
      border-color: #ddd
    }

    .pagination-lg>li>a,
    .pagination-lg>li>span {
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333
    }

    .pagination-lg>li:first-child>a,
    .pagination-lg>li:first-child>span {
      border-top-left-radius: 6px;
      border-bottom-left-radius: 6px
    }

    .pagination-lg>li:last-child>a,
    .pagination-lg>li:last-child>span {
      border-top-right-radius: 6px;
      border-bottom-right-radius: 6px
    }

    .pagination-sm>li>a,
    .pagination-sm>li>span {
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5
    }

    .pagination-sm>li:first-child>a,
    .pagination-sm>li:first-child>span {
      border-top-left-radius: 3px;
      border-bottom-left-radius: 3px
    }

    .pagination-sm>li:last-child>a,
    .pagination-sm>li:last-child>span {
      border-top-right-radius: 3px;
      border-bottom-right-radius: 3px
    }

    .pager {
      padding-left: 0;
      margin: 20px 0;
      text-align: center;
      list-style: none
    }

    .pager li {
      display: inline
    }

    .pager li>a,
    .pager li>span {
      display: inline-block;
      padding: 5px 14px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 15px
    }

    .pager li>a:focus,
    .pager li>a:hover {
      text-decoration: none;
      background-color: #eee
    }

    .pager .next>a,
    .pager .next>span {
      float: right
    }

    .pager .previous>a,
    .pager .previous>span {
      float: left
    }

    .pager .disabled>a,
    .pager .disabled>a:focus,
    .pager .disabled>a:hover,
    .pager .disabled>span {
      color: #777;
      cursor: not-allowed;
      background-color: #fff
    }

    .label {
      display: inline;
      padding: .2em .6em .3em;
      font-size: 75%;
      font-weight: 700;
      line-height: 1;
      color: #fff;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: .25em
    }

    a.label:focus,
    a.label:hover {
      color: #fff;
      text-decoration: none;
      cursor: pointer
    }

    .label:empty {
      display: none
    }

    .btn .label {
      position: relative;
      top: -1px
    }

    .label-default {
      background-color: #777
    }

    .label-default[href]:focus,
    .label-default[href]:hover {
      background-color: #5e5e5e
    }

    .label-primary {
      background-color: #337ab7
    }

    .label-primary[href]:focus,
    .label-primary[href]:hover {
      background-color: #286090
    }

    .label-success {
      background-color: #5cb85c
    }

    .label-success[href]:focus,
    .label-success[href]:hover {
      background-color: #449d44
    }

    .label-info {
      background-color: #5bc0de
    }

    .label-info[href]:focus,
    .label-info[href]:hover {
      background-color: #31b0d5
    }

    .label-warning {
      background-color: #f0ad4e
    }

    .label-warning[href]:focus,
    .label-warning[href]:hover {
      background-color: #ec971f
    }

    .label-danger {
      background-color: #d9534f
    }

    .label-danger[href]:focus,
    .label-danger[href]:hover {
      background-color: #c9302c
    }

    .badge {
      display: inline-block;
      min-width: 10px;
      padding: 3px 7px;
      font-size: 12px;
      font-weight: 700;
      line-height: 1;
      color: #fff;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      background-color: #777;
      border-radius: 10px
    }

    .badge:empty {
      display: none
    }

    .btn .badge {
      position: relative;
      top: -1px
    }

    .btn-group-xs>.btn .badge,
    .btn-xs .badge {
      top: 0;
      padding: 1px 5px
    }

    a.badge:focus,
    a.badge:hover {
      color: #fff;
      text-decoration: none;
      cursor: pointer
    }

    .list-group-item.active>.badge,
    .nav-pills>.active>a>.badge {
      color: #337ab7;
      background-color: #fff
    }

    .list-group-item>.badge {
      float: right
    }

    .list-group-item>.badge+.badge {
      margin-right: 5px
    }

    .nav-pills>li>a>.badge {
      margin-left: 3px
    }

    .jumbotron {
      padding-top: 30px;
      padding-bottom: 30px;
      margin-bottom: 30px;
      color: inherit;
      background-color: #eee
    }

    .jumbotron .h1,
    .jumbotron h1 {
      color: inherit
    }

    .jumbotron p {
      margin-bottom: 15px;
      font-size: 21px;
      font-weight: 200
    }

    .jumbotron>hr {
      border-top-color: #d5d5d5
    }

    .container .jumbotron,
    .container-fluid .jumbotron {
      padding-right: 15px;
      padding-left: 15px;
      border-radius: 6px
    }

    .jumbotron .container {
      max-width: 100%
    }

    @media screen and (min-width:768px) {
      .jumbotron {
        padding-top: 48px;
        padding-bottom: 48px
      }

      .container .jumbotron,
      .container-fluid .jumbotron {
        padding-right: 60px;
        padding-left: 60px
      }

      .jumbotron .h1,
      .jumbotron h1 {
        font-size: 63px
      }
    }

    .thumbnail {
      display: block;
      padding: 4px;
      margin-bottom: 20px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      -webkit-transition: border .2s ease-in-out;
      -o-transition: border .2s ease-in-out;
      transition: border .2s ease-in-out
    }

    .thumbnail a>img,
    .thumbnail>img {
      margin-right: auto;
      margin-left: auto
    }

    a.thumbnail.active,
    a.thumbnail:focus,
    a.thumbnail:hover {
      border-color: #337ab7
    }

    .thumbnail .caption {
      padding: 9px;
      color: #333
    }

    .alert {
      padding: 15px;
      margin-bottom: 20px;
      border: 1px solid transparent;
      border-radius: 4px
    }

    .alert h4 {
      margin-top: 0;
      color: inherit
    }

    .alert .alert-link {
      font-weight: 700
    }

    .alert>p,
    .alert>ul {
      margin-bottom: 0
    }

    .alert>p+p {
      margin-top: 5px
    }

    .alert-dismissable,
    .alert-dismissible {
      padding-right: 35px
    }

    .alert-dismissable .close,
    .alert-dismissible .close {
      position: relative;
      top: -2px;
      right: -21px;
      color: inherit
    }

    .alert-success {
      color: #3c763d;
      background-color: #dff0d8;
      border-color: #d6e9c6
    }

    .alert-success hr {
      border-top-color: #c9e2b3
    }

    .alert-success .alert-link {
      color: #2b542c
    }

    .alert-info {
      color: #31708f;
      background-color: #d9edf7;
      border-color: #bce8f1
    }

    .alert-info hr {
      border-top-color: #a6e1ec
    }

    .alert-info .alert-link {
      color: #245269
    }

    .alert-warning {
      color: #8a6d3b;
      background-color: #fcf8e3;
      border-color: #faebcc
    }

    .alert-warning hr {
      border-top-color: #f7e1b5
    }

    .alert-warning .alert-link {
      color: #66512c
    }

    .alert-danger {
      color: #a94442;
      background-color: #f2dede;
      border-color: #ebccd1
    }

    .alert-danger hr {
      border-top-color: #e4b9c0
    }

    .alert-danger .alert-link {
      color: #843534
    }

    @-webkit-keyframes progress-bar-stripes {
      from {
        background-position: 40px 0
      }

      to {
        background-position: 0 0
      }
    }

    @-o-keyframes progress-bar-stripes {
      from {
        background-position: 40px 0
      }

      to {
        background-position: 0 0
      }
    }

    @keyframes progress-bar-stripes {
      from {
        background-position: 40px 0
      }

      to {
        background-position: 0 0
      }
    }

    .progress {
      height: 20px;
      margin-bottom: 20px;
      overflow: hidden;
      background-color: #f5f5f5;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
    }

    .progress-bar {
      float: left;
      width: 0%;
      height: 100%;
      font-size: 12px;
      line-height: 20px;
      color: #fff;
      text-align: center;
      background-color: #337ab7;
      -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
      box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
      -webkit-transition: width .6s ease;
      -o-transition: width .6s ease;
      transition: width .6s ease
    }

    .progress-bar-striped,
    .progress-striped .progress-bar {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      -webkit-background-size: 40px 40px;
      background-size: 40px 40px
    }

    .progress-bar.active,
    .progress.active .progress-bar {
      -webkit-animation: progress-bar-stripes 2s linear infinite;
      -o-animation: progress-bar-stripes 2s linear infinite;
      animation: progress-bar-stripes 2s linear infinite
    }

    .progress-bar-success {
      background-color: #5cb85c
    }

    .progress-striped .progress-bar-success {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-info {
      background-color: #5bc0de
    }

    .progress-striped .progress-bar-info {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-warning {
      background-color: #f0ad4e
    }

    .progress-striped .progress-bar-warning {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-danger {
      background-color: #d9534f
    }

    .progress-striped .progress-bar-danger {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .media {
      margin-top: 15px
    }

    .media:first-child {
      margin-top: 0
    }

    .media,
    .media-body {
      overflow: hidden;
      zoom: 1
    }

    .media-body {
      width: 10000px
    }

    .media-object {
      display: block
    }

    .media-object.img-thumbnail {
      max-width: none
    }

    .media-right,
    .media>.pull-right {
      padding-left: 10px
    }

    .media-left,
    .media>.pull-left {
      padding-right: 10px
    }

    .media-body,
    .media-left,
    .media-right {
      display: table-cell;
      vertical-align: top
    }

    .media-middle {
      vertical-align: middle
    }

    .media-bottom {
      vertical-align: bottom
    }

    .media-heading {
      margin-top: 0;
      margin-bottom: 5px
    }

    .media-list {
      padding-left: 0;
      list-style: none
    }

    .list-group {
      padding-left: 0;
      margin-bottom: 20px
    }

    .list-group-item {
      position: relative;
      display: block;
      padding: 10px 15px;
      margin-bottom: -1px;
      background-color: #fff;
      border: 1px solid #ddd
    }

    .list-group-item:first-child {
      border-top-left-radius: 4px;
      border-top-right-radius: 4px
    }

    .list-group-item:last-child {
      margin-bottom: 0;
      border-bottom-right-radius: 4px;
      border-bottom-left-radius: 4px
    }

    .list-group-item.disabled,
    .list-group-item.disabled:focus,
    .list-group-item.disabled:hover {
      color: #777;
      cursor: not-allowed;
      background-color: #eee
    }

    .list-group-item.disabled .list-group-item-heading,
    .list-group-item.disabled:focus .list-group-item-heading,
    .list-group-item.disabled:hover .list-group-item-heading {
      color: inherit
    }

    .list-group-item.disabled .list-group-item-text,
    .list-group-item.disabled:focus .list-group-item-text,
    .list-group-item.disabled:hover .list-group-item-text {
      color: #777
    }

    .list-group-item.active,
    .list-group-item.active:focus,
    .list-group-item.active:hover {
      z-index: 2;
      color: #fff;
      background-color: #337ab7;
      border-color: #337ab7
    }

    .list-group-item.active .list-group-item-heading,
    .list-group-item.active .list-group-item-heading>.small,
    .list-group-item.active .list-group-item-heading>small,
    .list-group-item.active:focus .list-group-item-heading,
    .list-group-item.active:focus .list-group-item-heading>.small,
    .list-group-item.active:focus .list-group-item-heading>small,
    .list-group-item.active:hover .list-group-item-heading,
    .list-group-item.active:hover .list-group-item-heading>.small,
    .list-group-item.active:hover .list-group-item-heading>small {
      color: inherit
    }

    .list-group-item.active .list-group-item-text,
    .list-group-item.active:focus .list-group-item-text,
    .list-group-item.active:hover .list-group-item-text {
      color: #c7ddef
    }

    a.list-group-item,
    button.list-group-item {
      color: #555
    }

    a.list-group-item .list-group-item-heading,
    button.list-group-item .list-group-item-heading {
      color: #333
    }

    a.list-group-item:focus,
    a.list-group-item:hover,
    button.list-group-item:focus,
    button.list-group-item:hover {
      color: #555;
      text-decoration: none;
      background-color: #f5f5f5
    }

    button.list-group-item {
      width: 100%;
      text-align: left
    }

    .list-group-item-success {
      color: #3c763d;
      background-color: #dff0d8
    }

    a.list-group-item-success,
    button.list-group-item-success {
      color: #3c763d
    }

    a.list-group-item-success .list-group-item-heading,
    button.list-group-item-success .list-group-item-heading {
      color: inherit
    }

    a.list-group-item-success:focus,
    a.list-group-item-success:hover,
    button.list-group-item-success:focus,
    button.list-group-item-success:hover {
      color: #3c763d;
      background-color: #d0e9c6
    }

    a.list-group-item-success.active,
    a.list-group-item-success.active:focus,
    a.list-group-item-success.active:hover,
    button.list-group-item-success.active,
    button.list-group-item-success.active:focus,
    button.list-group-item-success.active:hover {
      color: #fff;
      background-color: #3c763d;
      border-color: #3c763d
    }

    .list-group-item-info {
      color: #31708f;
      background-color: #d9edf7
    }

    a.list-group-item-info,
    button.list-group-item-info {
      color: #31708f
    }

    a.list-group-item-info .list-group-item-heading,
    button.list-group-item-info .list-group-item-heading {
      color: inherit
    }

    a.list-group-item-info:focus,
    a.list-group-item-info:hover,
    button.list-group-item-info:focus,
    button.list-group-item-info:hover {
      color: #31708f;
      background-color: #c4e3f3
    }

    a.list-group-item-info.active,
    a.list-group-item-info.active:focus,
    a.list-group-item-info.active:hover,
    button.list-group-item-info.active,
    button.list-group-item-info.active:focus,
    button.list-group-item-info.active:hover {
      color: #fff;
      background-color: #31708f;
      border-color: #31708f
    }

    .list-group-item-warning {
      color: #8a6d3b;
      background-color: #fcf8e3
    }

    a.list-group-item-warning,
    button.list-group-item-warning {
      color: #8a6d3b
    }

    a.list-group-item-warning .list-group-item-heading,
    button.list-group-item-warning .list-group-item-heading {
      color: inherit
    }

    a.list-group-item-warning:focus,
    a.list-group-item-warning:hover,
    button.list-group-item-warning:focus,
    button.list-group-item-warning:hover {
      color: #8a6d3b;
      background-color: #faf2cc
    }

    a.list-group-item-warning.active,
    a.list-group-item-warning.active:focus,
    a.list-group-item-warning.active:hover,
    button.list-group-item-warning.active,
    button.list-group-item-warning.active:focus,
    button.list-group-item-warning.active:hover {
      color: #fff;
      background-color: #8a6d3b;
      border-color: #8a6d3b
    }

    .list-group-item-danger {
      color: #a94442;
      background-color: #f2dede
    }

    a.list-group-item-danger,
    button.list-group-item-danger {
      color: #a94442
    }

    a.list-group-item-danger .list-group-item-heading,
    button.list-group-item-danger .list-group-item-heading {
      color: inherit
    }

    a.list-group-item-danger:focus,
    a.list-group-item-danger:hover,
    button.list-group-item-danger:focus,
    button.list-group-item-danger:hover {
      color: #a94442;
      background-color: #ebcccc
    }

    a.list-group-item-danger.active,
    a.list-group-item-danger.active:focus,
    a.list-group-item-danger.active:hover,
    button.list-group-item-danger.active,
    button.list-group-item-danger.active:focus,
    button.list-group-item-danger.active:hover {
      color: #fff;
      background-color: #a94442;
      border-color: #a94442
    }

    .list-group-item-heading {
      margin-top: 0;
      margin-bottom: 5px
    }

    .list-group-item-text {
      margin-bottom: 0;
      line-height: 1.3
    }

    .panel {
      margin-bottom: 20px;
      background-color: #fff;
      border: 1px solid transparent;
      border-radius: 4px;
      -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
      box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
    }

    .panel-body {
      padding: 15px
    }

    .panel-heading {
      padding: 10px 15px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 3px;
      border-top-right-radius: 3px
    }

    .panel-heading>.dropdown .dropdown-toggle {
      color: inherit
    }

    .panel-title {
      margin-top: 0;
      margin-bottom: 0;
      font-size: 16px;
      color: inherit
    }

    .panel-title>.small,
    .panel-title>.small>a,
    .panel-title>a,
    .panel-title>small,
    .panel-title>small>a {
      color: inherit
    }

    .panel-footer {
      padding: 10px 15px;
      background-color: #f5f5f5;
      border-top: 1px solid #ddd;
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px
    }

    .panel>.list-group,
    .panel>.panel-collapse>.list-group {
      margin-bottom: 0
    }

    .panel>.list-group .list-group-item,
    .panel>.panel-collapse>.list-group .list-group-item {
      border-width: 1px 0;
      border-radius: 0
    }

    .panel>.list-group:first-child .list-group-item:first-child,
    .panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
      border-top: 0;
      border-top-left-radius: 3px;
      border-top-right-radius: 3px
    }

    .panel>.list-group:last-child .list-group-item:last-child,
    .panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
      border-bottom: 0;
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px
    }

    .panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
      border-top-left-radius: 0;
      border-top-right-radius: 0
    }

    .panel-heading+.list-group .list-group-item:first-child {
      border-top-width: 0
    }

    .list-group+.panel-footer {
      border-top-width: 0
    }

    .panel>.panel-collapse>.table,
    .panel>.table,
    .panel>.table-responsive>.table {
      margin-bottom: 0
    }

    .panel>.panel-collapse>.table caption,
    .panel>.table caption,
    .panel>.table-responsive>.table caption {
      padding-right: 15px;
      padding-left: 15px
    }

    .panel>.table-responsive:first-child>.table:first-child,
    .panel>.table:first-child {
      border-top-left-radius: 3px;
      border-top-right-radius: 3px
    }

    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child {
      border-top-left-radius: 3px;
      border-top-right-radius: 3px
    }

    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:first-child {
      border-top-left-radius: 3px
    }

    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
    .panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:last-child {
      border-top-right-radius: 3px
    }

    .panel>.table-responsive:last-child>.table:last-child,
    .panel>.table:last-child {
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px
    }

    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child {
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px
    }

    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
      border-bottom-left-radius: 3px
    }

    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
      border-bottom-right-radius: 3px
    }

    .panel>.panel-body+.table,
    .panel>.panel-body+.table-responsive,
    .panel>.table+.panel-body,
    .panel>.table-responsive+.panel-body {
      border-top: 1px solid #ddd
    }

    .panel>.table>tbody:first-child>tr:first-child td,
    .panel>.table>tbody:first-child>tr:first-child th {
      border-top: 0
    }

    .panel>.table-bordered,
    .panel>.table-responsive>.table-bordered {
      border: 0
    }

    .panel>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-bordered>tfoot>tr>td:first-child,
    .panel>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-bordered>thead>tr>td:first-child,
    .panel>.table-bordered>thead>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:first-child {
      border-left: 0
    }

    .panel>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-bordered>tfoot>tr>td:last-child,
    .panel>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-bordered>thead>tr>td:last-child,
    .panel>.table-bordered>thead>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:last-child {
      border-right: 0
    }

    .panel>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-bordered>tbody>tr:first-child>th,
    .panel>.table-bordered>thead>tr:first-child>td,
    .panel>.table-bordered>thead>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>th {
      border-bottom: 0
    }

    .panel>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-bordered>tfoot>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
      border-bottom: 0
    }

    .panel>.table-responsive {
      margin-bottom: 0;
      border: 0
    }

    .panel-group {
      margin-bottom: 20px
    }

    .panel-group .panel {
      margin-bottom: 0;
      border-radius: 4px
    }

    .panel-group .panel+.panel {
      margin-top: 5px
    }

    .panel-group .panel-heading {
      border-bottom: 0
    }

    .panel-group .panel-heading+.panel-collapse>.list-group,
    .panel-group .panel-heading+.panel-collapse>.panel-body {
      border-top: 1px solid #ddd
    }

    .panel-group .panel-footer {
      border-top: 0
    }

    .panel-group .panel-footer+.panel-collapse .panel-body {
      border-bottom: 1px solid #ddd
    }

    .panel-default {
      border-color: #ddd
    }

    .panel-default>.panel-heading {
      color: #333;
      background-color: #f5f5f5;
      border-color: #ddd
    }

    .panel-default>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #ddd
    }

    .panel-default>.panel-heading .badge {
      color: #f5f5f5;
      background-color: #333
    }

    .panel-default>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #ddd
    }

    .panel-primary {
      border-color: #337ab7
    }

    .panel-primary>.panel-heading {
      color: #fff;
      background-color: #337ab7;
      border-color: #337ab7
    }

    .panel-primary>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #337ab7
    }

    .panel-primary>.panel-heading .badge {
      color: #337ab7;
      background-color: #fff
    }

    .panel-primary>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #337ab7
    }

    .panel-success {
      border-color: #d6e9c6
    }

    .panel-success>.panel-heading {
      color: #3c763d;
      background-color: #dff0d8;
      border-color: #d6e9c6
    }

    .panel-success>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #d6e9c6
    }

    .panel-success>.panel-heading .badge {
      color: #dff0d8;
      background-color: #3c763d
    }

    .panel-success>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #d6e9c6
    }

    .panel-info {
      border-color: #bce8f1
    }

    .panel-info>.panel-heading {
      color: #31708f;
      background-color: #d9edf7;
      border-color: #bce8f1
    }

    .panel-info>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #bce8f1
    }

    .panel-info>.panel-heading .badge {
      color: #d9edf7;
      background-color: #31708f
    }

    .panel-info>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #bce8f1
    }

    .panel-warning {
      border-color: #faebcc
    }

    .panel-warning>.panel-heading {
      color: #8a6d3b;
      background-color: #fcf8e3;
      border-color: #faebcc
    }

    .panel-warning>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #faebcc
    }

    .panel-warning>.panel-heading .badge {
      color: #fcf8e3;
      background-color: #8a6d3b
    }

    .panel-warning>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #faebcc
    }

    .panel-danger {
      border-color: #ebccd1
    }

    .panel-danger>.panel-heading {
      color: #a94442;
      background-color: #f2dede;
      border-color: #ebccd1
    }

    .panel-danger>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #ebccd1
    }

    .panel-danger>.panel-heading .badge {
      color: #f2dede;
      background-color: #a94442
    }

    .panel-danger>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #ebccd1
    }

    .embed-responsive {
      position: relative;
      display: block;
      height: 0;
      padding: 0;
      overflow: hidden
    }

    .embed-responsive .embed-responsive-item,
    .embed-responsive embed,
    .embed-responsive iframe,
    .embed-responsive object,
    .embed-responsive video {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0
    }

    .embed-responsive-16by9 {
      padding-bottom: 56.25%
    }

    .embed-responsive-4by3 {
      padding-bottom: 75%
    }

    .well {
      min-height: 20px;
      padding: 19px;
      margin-bottom: 20px;
      background-color: #f5f5f5;
      border: 1px solid #e3e3e3;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
    }

    .well blockquote {
      border-color: #ddd;
      border-color: rgba(0, 0, 0, .15)
    }

    .well-lg {
      padding: 24px;
      border-radius: 6px
    }

    .well-sm {
      padding: 9px;
      border-radius: 3px
    }

    .close {
      float: right;
      font-size: 21px;
      font-weight: 700;
      line-height: 1;
      color: #000;
      text-shadow: 0 1px 0 #fff;
      filter: alpha(opacity=20);
      opacity: .2
    }

    .close:focus,
    .close:hover {
      color: #000;
      text-decoration: none;
      cursor: pointer;
      filter: alpha(opacity=50);
      opacity: .5
    }

    button.close {
      padding: 0;
      cursor: pointer;
      background: 0 0;
      border: 0;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none
    }

    .modal-open {
      overflow: hidden
    }

    .modal {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1050;
      display: none;
      overflow: hidden;
      -webkit-overflow-scrolling: touch;
      outline: 0
    }

    .modal.fade .modal-dialog {
      -webkit-transform: translate(0, -25%);
      -ms-transform: translate(0, -25%);
      -o-transform: translate(0, -25%);
      transform: translate(0, -25%);
      -webkit-transition: -webkit-transform .3s ease-out;
      -o-transition: -o-transform .3s ease-out;
      transition: -webkit-transform .3s ease-out;
      transition: transform .3s ease-out;
      transition: transform .3s ease-out, -webkit-transform .3s ease-out, -o-transform .3s ease-out
    }

    .modal.in .modal-dialog {
      -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
      -o-transform: translate(0, 0);
      transform: translate(0, 0)
    }

    .modal-open .modal {
      overflow-x: hidden;
      overflow-y: auto
    }

    .modal-dialog {
      position: relative;
      width: auto;
      margin: 10px
    }

    .modal-content {
      position: relative;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #999;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: 6px;
      -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
      box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
      outline: 0
    }

    .modal-backdrop {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1040;
      background-color: #000
    }

    .modal-backdrop.fade {
      filter: alpha(opacity=0);
      opacity: 0
    }

    .modal-backdrop.in {
      filter: alpha(opacity=50);
      opacity: .5
    }

    .modal-header {
      padding: 15px;
      border-bottom: 1px solid #e5e5e5
    }

    .modal-header .close {
      margin-top: -2px
    }

    .modal-title {
      margin: 0;
      line-height: 1.42857143
    }

    .modal-body {
      position: relative;
      padding: 15px
    }

    .modal-footer {
      padding: 15px;
      text-align: right;
      border-top: 1px solid #e5e5e5
    }

    .modal-footer .btn+.btn {
      margin-bottom: 0;
      margin-left: 5px
    }

    .modal-footer .btn-group .btn+.btn {
      margin-left: -1px
    }

    .modal-footer .btn-block+.btn-block {
      margin-left: 0
    }

    .modal-scrollbar-measure {
      position: absolute;
      top: -9999px;
      width: 50px;
      height: 50px;
      overflow: scroll
    }

    @media (min-width:768px) {
      .modal-dialog {
        width: 600px;
        margin: 30px auto
      }

      .modal-content {
        -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
        box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
      }

      .modal-sm {
        width: 300px
      }
    }

    @media (min-width:992px) {
      .modal-lg {
        width: 900px
      }
    }

    .tooltip {
      position: absolute;
      z-index: 1070;
      display: block;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-style: normal;
      font-weight: 400;
      line-height: 1.42857143;
      line-break: auto;
      text-align: left;
      text-align: start;
      text-decoration: none;
      text-shadow: none;
      text-transform: none;
      letter-spacing: normal;
      word-break: normal;
      word-spacing: normal;
      word-wrap: normal;
      white-space: normal;
      font-size: 12px;
      filter: alpha(opacity=0);
      opacity: 0
    }

    .tooltip.in {
      filter: alpha(opacity=90);
      opacity: .9
    }

    .tooltip.top {
      padding: 5px 0;
      margin-top: -3px
    }

    .tooltip.right {
      padding: 0 5px;
      margin-left: 3px
    }

    .tooltip.bottom {
      padding: 5px 0;
      margin-top: 3px
    }

    .tooltip.left {
      padding: 0 5px;
      margin-left: -3px
    }

    .tooltip.top .tooltip-arrow {
      bottom: 0;
      left: 50%;
      margin-left: -5px;
      border-width: 5px 5px 0;
      border-top-color: #000
    }

    .tooltip.top-left .tooltip-arrow {
      right: 5px;
      bottom: 0;
      margin-bottom: -5px;
      border-width: 5px 5px 0;
      border-top-color: #000
    }

    .tooltip.top-right .tooltip-arrow {
      bottom: 0;
      left: 5px;
      margin-bottom: -5px;
      border-width: 5px 5px 0;
      border-top-color: #000
    }

    .tooltip.right .tooltip-arrow {
      top: 50%;
      left: 0;
      margin-top: -5px;
      border-width: 5px 5px 5px 0;
      border-right-color: #000
    }

    .tooltip.left .tooltip-arrow {
      top: 50%;
      right: 0;
      margin-top: -5px;
      border-width: 5px 0 5px 5px;
      border-left-color: #000
    }

    .tooltip.bottom .tooltip-arrow {
      top: 0;
      left: 50%;
      margin-left: -5px;
      border-width: 0 5px 5px;
      border-bottom-color: #000
    }

    .tooltip.bottom-left .tooltip-arrow {
      top: 0;
      right: 5px;
      margin-top: -5px;
      border-width: 0 5px 5px;
      border-bottom-color: #000
    }

    .tooltip.bottom-right .tooltip-arrow {
      top: 0;
      left: 5px;
      margin-top: -5px;
      border-width: 0 5px 5px;
      border-bottom-color: #000
    }

    .tooltip-inner {
      max-width: 200px;
      padding: 3px 8px;
      color: #fff;
      text-align: center;
      background-color: #000;
      border-radius: 4px
    }

    .tooltip-arrow {
      position: absolute;
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid
    }

    .popover {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1060;
      display: none;
      max-width: 276px;
      padding: 1px;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-style: normal;
      font-weight: 400;
      line-height: 1.42857143;
      line-break: auto;
      text-align: left;
      text-align: start;
      text-decoration: none;
      text-shadow: none;
      text-transform: none;
      letter-spacing: normal;
      word-break: normal;
      word-spacing: normal;
      word-wrap: normal;
      white-space: normal;
      font-size: 14px;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ccc;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: 6px;
      -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
      box-shadow: 0 5px 10px rgba(0, 0, 0, .2)
    }

    .popover.top {
      margin-top: -10px
    }

    .popover.right {
      margin-left: 10px
    }

    .popover.bottom {
      margin-top: 10px
    }

    .popover.left {
      margin-left: -10px
    }

    .popover>.arrow {
      border-width: 11px
    }

    .popover>.arrow,
    .popover>.arrow:after {
      position: absolute;
      display: block;
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid
    }

    .popover>.arrow:after {
      content: "";
      border-width: 10px
    }

    .popover.top>.arrow {
      bottom: -11px;
      left: 50%;
      margin-left: -11px;
      border-top-color: #999;
      border-top-color: rgba(0, 0, 0, .25);
      border-bottom-width: 0
    }

    .popover.top>.arrow:after {
      bottom: 1px;
      margin-left: -10px;
      content: " ";
      border-top-color: #fff;
      border-bottom-width: 0
    }

    .popover.right>.arrow {
      top: 50%;
      left: -11px;
      margin-top: -11px;
      border-right-color: #999;
      border-right-color: rgba(0, 0, 0, .25);
      border-left-width: 0
    }

    .popover.right>.arrow:after {
      bottom: -10px;
      left: 1px;
      content: " ";
      border-right-color: #fff;
      border-left-width: 0
    }

    .popover.bottom>.arrow {
      top: -11px;
      left: 50%;
      margin-left: -11px;
      border-top-width: 0;
      border-bottom-color: #999;
      border-bottom-color: rgba(0, 0, 0, .25)
    }

    .popover.bottom>.arrow:after {
      top: 1px;
      margin-left: -10px;
      content: " ";
      border-top-width: 0;
      border-bottom-color: #fff
    }

    .popover.left>.arrow {
      top: 50%;
      right: -11px;
      margin-top: -11px;
      border-right-width: 0;
      border-left-color: #999;
      border-left-color: rgba(0, 0, 0, .25)
    }

    .popover.left>.arrow:after {
      right: 1px;
      bottom: -10px;
      content: " ";
      border-right-width: 0;
      border-left-color: #fff
    }

    .popover-title {
      padding: 8px 14px;
      margin: 0;
      font-size: 14px;
      background-color: #f7f7f7;
      border-bottom: 1px solid #ebebeb;
      border-radius: 5px 5px 0 0
    }

    .popover-content {
      padding: 9px 14px
    }

    .carousel {
      position: relative
    }

    .carousel-inner {
      position: relative;
      width: 100%;
      overflow: hidden
    }

    .carousel-inner>.item {
      position: relative;
      display: none;
      -webkit-transition: .6s ease-in-out left;
      -o-transition: .6s ease-in-out left;
      transition: .6s ease-in-out left
    }

    .carousel-inner>.item>a>img,
    .carousel-inner>.item>img {
      line-height: 1
    }

    @media all and (transform-3d),
    (-webkit-transform-3d) {
      .carousel-inner>.item {
        -webkit-transition: -webkit-transform .6s ease-in-out;
        -o-transition: -o-transform .6s ease-in-out;
        transition: -webkit-transform .6s ease-in-out;
        transition: transform .6s ease-in-out;
        transition: transform .6s ease-in-out, -webkit-transform .6s ease-in-out, -o-transform .6s ease-in-out;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000px;
        perspective: 1000px
      }

      .carousel-inner>.item.active.right,
      .carousel-inner>.item.next {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        left: 0
      }

      .carousel-inner>.item.active.left,
      .carousel-inner>.item.prev {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
        left: 0
      }

      .carousel-inner>.item.active,
      .carousel-inner>.item.next.left,
      .carousel-inner>.item.prev.right {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        left: 0
      }
    }

    .carousel-inner>.active,
    .carousel-inner>.next,
    .carousel-inner>.prev {
      display: block
    }

    .carousel-inner>.active {
      left: 0
    }

    .carousel-inner>.next,
    .carousel-inner>.prev {
      position: absolute;
      top: 0;
      width: 100%
    }

    .carousel-inner>.next {
      left: 100%
    }

    .carousel-inner>.prev {
      left: -100%
    }

    .carousel-inner>.next.left,
    .carousel-inner>.prev.right {
      left: 0
    }

    .carousel-inner>.active.left {
      left: -100%
    }

    .carousel-inner>.active.right {
      left: 100%
    }

    .carousel-control {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 15%;
      font-size: 20px;
      color: #fff;
      text-align: center;
      text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
      background-color: rgba(0, 0, 0, 0);
      filter: alpha(opacity=50);
      opacity: .5
    }

    .carousel-control.left {
      background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
      background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
      background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
      background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
      background-repeat: repeat-x
    }

    .carousel-control.right {
      right: 0;
      left: auto;
      background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
      background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
      background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
      background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
      background-repeat: repeat-x
    }

    .carousel-control:focus,
    .carousel-control:hover {
      color: #fff;
      text-decoration: none;
      outline: 0;
      filter: alpha(opacity=90);
      opacity: .9
    }

    .carousel-control .glyphicon-chevron-left,
    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next,
    .carousel-control .icon-prev {
      position: absolute;
      top: 50%;
      z-index: 5;
      display: inline-block;
      margin-top: -10px
    }

    .carousel-control .glyphicon-chevron-left,
    .carousel-control .icon-prev {
      left: 50%;
      margin-left: -10px
    }

    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next {
      right: 50%;
      margin-right: -10px
    }

    .carousel-control .icon-next,
    .carousel-control .icon-prev {
      width: 20px;
      height: 20px;
      font-family: serif;
      line-height: 1
    }

    .carousel-control .icon-prev:before {
      content: "\2039"
    }

    .carousel-control .icon-next:before {
      content: "\203a"
    }

    .carousel-indicators {
      position: absolute;
      bottom: 10px;
      left: 50%;
      z-index: 15;
      width: 60%;
      padding-left: 0;
      margin-left: -30%;
      text-align: center;
      list-style: none
    }

    .carousel-indicators li {
      display: inline-block;
      width: 10px;
      height: 10px;
      margin: 1px;
      text-indent: -999px;
      cursor: pointer;
      background-color: #000\9;
      background-color: rgba(0, 0, 0, 0);
      border: 1px solid #fff;
      border-radius: 10px
    }

    .carousel-indicators .active {
      width: 12px;
      height: 12px;
      margin: 0;
      background-color: #fff
    }

    .carousel-caption {
      position: absolute;
      right: 15%;
      bottom: 20px;
      left: 15%;
      z-index: 10;
      padding-top: 20px;
      padding-bottom: 20px;
      color: #fff;
      text-align: center;
      text-shadow: 0 1px 2px rgba(0, 0, 0, .6)
    }

    .carousel-caption .btn {
      text-shadow: none
    }

    @media screen and (min-width:768px) {

      .carousel-control .glyphicon-chevron-left,
      .carousel-control .glyphicon-chevron-right,
      .carousel-control .icon-next,
      .carousel-control .icon-prev {
        width: 30px;
        height: 30px;
        margin-top: -10px;
        font-size: 30px
      }

      .carousel-control .glyphicon-chevron-left,
      .carousel-control .icon-prev {
        margin-left: -10px
      }

      .carousel-control .glyphicon-chevron-right,
      .carousel-control .icon-next {
        margin-right: -10px
      }

      .carousel-caption {
        right: 20%;
        left: 20%;
        padding-bottom: 30px
      }

      .carousel-indicators {
        bottom: 20px
      }
    }

    .btn-group-vertical>.btn-group:after,
    .btn-group-vertical>.btn-group:before,
    .btn-toolbar:after,
    .btn-toolbar:before,
    .clearfix:after,
    .clearfix:before,
    .container-fluid:after,
    .container-fluid:before,
    .container:after,
    .container:before,
    .dl-horizontal dd:after,
    .dl-horizontal dd:before,
    .form-horizontal .form-group:after,
    .form-horizontal .form-group:before,
    .modal-footer:after,
    .modal-footer:before,
    .modal-header:after,
    .modal-header:before,
    .nav:after,
    .nav:before,
    .navbar-collapse:after,
    .navbar-collapse:before,
    .navbar-header:after,
    .navbar-header:before,
    .navbar:after,
    .navbar:before,
    .pager:after,
    .pager:before,
    .panel-body:after,
    .panel-body:before,
    .row:after,
    .row:before {
      display: table;
      content: " "
    }

    .btn-group-vertical>.btn-group:after,
    .btn-toolbar:after,
    .clearfix:after,
    .container-fluid:after,
    .container:after,
    .dl-horizontal dd:after,
    .form-horizontal .form-group:after,
    .modal-footer:after,
    .modal-header:after,
    .nav:after,
    .navbar-collapse:after,
    .navbar-header:after,
    .navbar:after,
    .pager:after,
    .panel-body:after,
    .row:after {
      clear: both
    }

    .center-block {
      display: block;
      margin-right: auto;
      margin-left: auto
    }

    .pull-right {
      float: right !important
    }

    .pull-left {
      float: left !important
    }

    .hide {
      display: none !important
    }

    .show {
      display: block !important
    }

    .invisible {
      visibility: hidden
    }

    .text-hide {
      font: 0/0 a;
      color: transparent;
      text-shadow: none;
      background-color: transparent;
      border: 0
    }

    .hidden {
      display: none !important
    }

    .affix {
      position: fixed
    }

    @-ms-viewport {
      width: device-width
    }

    .visible-lg,
    .visible-md,
    .visible-sm,
    .visible-xs {
      display: none !important
    }

    .visible-lg-block,
    .visible-lg-inline,
    .visible-lg-inline-block,
    .visible-md-block,
    .visible-md-inline,
    .visible-md-inline-block,
    .visible-sm-block,
    .visible-sm-inline,
    .visible-sm-inline-block,
    .visible-xs-block,
    .visible-xs-inline,
    .visible-xs-inline-block {
      display: none !important
    }

    @media (max-width:767px) {
      .visible-xs {
        display: block !important
      }

      table.visible-xs {
        display: table !important
      }

      tr.visible-xs {
        display: table-row !important
      }

      td.visible-xs,
      th.visible-xs {
        display: table-cell !important
      }
    }

    @media (max-width:767px) {
      .visible-xs-block {
        display: block !important
      }
    }

    @media (max-width:767px) {
      .visible-xs-inline {
        display: inline !important
      }
    }

    @media (max-width:767px) {
      .visible-xs-inline-block {
        display: inline-block !important
      }
    }

    @media (min-width:768px) and (max-width:991px) {
      .visible-sm {
        display: block !important
      }

      table.visible-sm {
        display: table !important
      }

      tr.visible-sm {
        display: table-row !important
      }

      td.visible-sm,
      th.visible-sm {
        display: table-cell !important
      }
    }

    @media (min-width:768px) and (max-width:991px) {
      .visible-sm-block {
        display: block !important
      }
    }

    @media (min-width:768px) and (max-width:991px) {
      .visible-sm-inline {
        display: inline !important
      }
    }

    @media (min-width:768px) and (max-width:991px) {
      .visible-sm-inline-block {
        display: inline-block !important
      }
    }

    @media (min-width:992px) and (max-width:1199px) {
      .visible-md {
        display: block !important
      }

      table.visible-md {
        display: table !important
      }

      tr.visible-md {
        display: table-row !important
      }

      td.visible-md,
      th.visible-md {
        display: table-cell !important
      }
    }

    @media (min-width:992px) and (max-width:1199px) {
      .visible-md-block {
        display: block !important
      }
    }

    @media (min-width:992px) and (max-width:1199px) {
      .visible-md-inline {
        display: inline !important
      }
    }

    @media (min-width:992px) and (max-width:1199px) {
      .visible-md-inline-block {
        display: inline-block !important
      }
    }

    @media (min-width:1200px) {
      .visible-lg {
        display: block !important
      }

      table.visible-lg {
        display: table !important
      }

      tr.visible-lg {
        display: table-row !important
      }

      td.visible-lg,
      th.visible-lg {
        display: table-cell !important
      }
    }

    @media (min-width:1200px) {
      .visible-lg-block {
        display: block !important
      }
    }

    @media (min-width:1200px) {
      .visible-lg-inline {
        display: inline !important
      }
    }

    @media (min-width:1200px) {
      .visible-lg-inline-block {
        display: inline-block !important
      }
    }

    @media (max-width:767px) {
      .hidden-xs {
        display: none !important
      }
    }

    @media (min-width:768px) and (max-width:991px) {
      .hidden-sm {
        display: none !important
      }
    }

    @media (min-width:992px) and (max-width:1199px) {
      .hidden-md {
        display: none !important
      }
    }

    @media (min-width:1200px) {
      .hidden-lg {
        display: none !important
      }
    }

    .visible-print {
      display: none !important
    }

    @media print {
      .visible-print {
        display: block !important
      }

      table.visible-print {
        display: table !important
      }

      tr.visible-print {
        display: table-row !important
      }

      td.visible-print,
      th.visible-print {
        display: table-cell !important
      }
    }

    .visible-print-block {
      display: none !important
    }

    @media print {
      .visible-print-block {
        display: block !important
      }
    }

    .visible-print-inline {
      display: none !important
    }

    @media print {
      .visible-print-inline {
        display: inline !important
      }
    }

    .visible-print-inline-block {
      display: none !important
    }

    @media print {
      .visible-print-inline-block {
        display: inline-block !important
      }
    }

    @media print {
      .hidden-print {
        display: none !important
      }
    }

    /*# sourceMappingURL=bootstrap.min.css.map */
  </style>
</head>

<body class="en vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
  data-menu="vertical-menu-modern" data-col="2-columns">
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
        <section class="card">
          <div id="invoice-template" class="card-body">
            <!-- Invoice Company Details -->
            <div id="invoice-company-details" class="row">
              <div class="col-md-6 col-sm-12 text-center text-md-left">
                <div class="media">
                  <img src="{{ base_path().'front-style/assets/images/itajer_logo.png' }}" width="200px"
                    alt="company logo1" />
                </div>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right">
                <h2 style="color:red">INVOICE</h2>
                <p class="pb-3"># INV-{{ $order->order_number }}</p>
                <ul class="px-0 list-unstyled">
                  <li>Final Total</li>
                  <li class="lead text-bold-800">{{ $order->total }} AED</li>
                </ul>
              </div>
            </div>
            <!--/ Invoice Company Details -->
            <!-- Invoice Customer Details -->
            <div id="invoice-customer-details" class="row pt-2">
              <div class="col-sm-12 text-center text-md-left">
                <strong class="text-muted">Bill To</strong>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-left">
                <ul class="px-0 list-unstyled">
                  <li class="text-bold-800">{{ $order->full_name }}</li>
                  <li>{{ $order->address }},</li>
                  <li>{{ $order->city }},</li>
                  <li>{{ $order->country }}.</li>
                </ul>
                <strong class="text-muted">Shipping To</strong>
                <ul class="px-0 list-unstyled">
                  <li class="text-bold-800">{{ $order->sfull_name }}</li>
                  <li>{{ $order->saddress }},</li>
                  <li>{{ $order->scity }},</li>
                  <li>{{ $order->scountry }}.</li>
                </ul>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right">
                <p>
                  <span class="text-muted">Invoice Date :</span> 06/05/2017</p>
                <p>
                  <span class="text-muted">Terms :</span> Due on Receipt</p>
                <p>
                  <span class="text-muted">Due Date :</span> 10/05/2017</p>
              </div>
            </div>
            <!--/ Invoice Customer Details -->
            <!-- Invoice Items Details -->
            <div id="invoice-items-details" class="pt-2">
              <div class="row">
                <div class="table-responsive col-sm-12">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Order Items</th>
                        <th class="text-right">Customer Name</th>
                        <th class="text-right">Quantity</th>
                        <th class="text-right">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($order->product as $items)
                      <tr>
                        <th scope="row">1</th>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="{{  $items->image}}" alt="avatar">
                          </span>
                          <span>{{ $items->title }}</span>
                        </td>
                        <td class="text-right">{{ $order->full_name }}</td>
                        <td class="text-right">{{ $items->pivot->quantity }}</td>
                        <td class="text-right">{{ $order->total }}</td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 col-sm-12 text-center text-md-left">

                </div>
                <div class="col-md-5 col-sm-12">
                  <p class="lead">Total due</p>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Sub Total</td>
                          <td class="text-right">{{ $order->sub_total }} AED</td>
                        </tr>
                        <tr>
                          <td>Coupon</td>
                          <td class="text-right">{{ $order->coupon }} AED</td>
                        </tr>
                        <tr>
                          <td>Delivary Charge</td>
                          <td class="text-right">{{ $order->delivary_charge }} AED</td>
                        </tr>
                        <tr>
                          <td class="text-bold-800">Total</td>
                          <td class="text-bold-800 text-right"> {{ $order->total }} AED</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                  <div class="text-center">
                    <p>Authorized person</p>
                    <img src="../../../app-assets/images/pages/signature-scan.png" alt="signature" class="height-100" />
                    <h6>Amanda Orton</h6>
                    <p class="text-muted">Managing Director</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Invoice Footer -->
            <div id="invoice-footer">
              <div class="row">
                <div class="col-md-7 col-sm-12">
                  <h6>Terms & Condition</h6>
                  <p>You know, being a test pilot isn't always the healthiest business
                    in the world. We predict too much for the next year and yet far
                    too little for the next 10.</p>
                </div>
              </div>
            </div>
            <!--/ Invoice Footer -->
          </div>
        </section>
      </div>
    </div>
  </div>
  <script>
    /*! jQuery v3.6.0 | (c) OpenJS Foundation and other contributors | jquery.org/license */ ! function(e, t) {
      "use strict";
      "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) :
        function(e) {
          if (!e.document) throw new Error("jQuery requires a window with a document");
          return t(e)
        } : t(e)
    }("undefined" != typeof window ? window : this, function(C, e) {
      "use strict";
      var t = [],
        r = Object.getPrototypeOf,
        s = t.slice,
        g = t.flat ? function(e) {
          return t.flat.call(e)
        } : function(e) {
          return t.concat.apply([], e)
        },
        u = t.push,
        i = t.indexOf,
        n = {},
        o = n.toString,
        v = n.hasOwnProperty,
        a = v.toString,
        l = a.call(Object),
        y = {},
        m = function(e) {
          return "function" == typeof e && "number" != typeof e.nodeType && "function" != typeof e.item
        },
        x = function(e) {
          return null != e && e === e.window
        },
        E = C.document,
        c = {
          type: !0,
          src: !0,
          nonce: !0,
          noModule: !0
        };

      function b(e, t, n) {
        var r, i, o = (n = n || E).createElement("script");
        if (o.text = e, t)
          for (r in c)(i = t[r] || t.getAttribute && t.getAttribute(r)) && o.setAttribute(r, i);
        n.head.appendChild(o).parentNode.removeChild(o)
      }

      function w(e) {
        return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? n[o.call(e)] || "object" :
          typeof e
      }
      var f = "3.6.0",
        S = function(e, t) {
          return new S.fn.init(e, t)
        };

      function p(e) {
        var t = !!e && "length" in e && e.length,
          n = w(e);
        return !m(e) && !x(e) && ("array" === n || 0 === t || "number" == typeof t && 0 < t && t - 1 in e)
      }
      S.fn = S.prototype = {
        jquery: f,
        constructor: S,
        length: 0,
        toArray: function() {
          return s.call(this)
        },
        get: function(e) {
          return null == e ? s.call(this) : e < 0 ? this[e + this.length] : this[e]
        },
        pushStack: function(e) {
          var t = S.merge(this.constructor(), e);
          return t.prevObject = this, t
        },
        each: function(e) {
          return S.each(this, e)
        },
        map: function(n) {
          return this.pushStack(S.map(this, function(e, t) {
            return n.call(e, t, e)
          }))
        },
        slice: function() {
          return this.pushStack(s.apply(this, arguments))
        },
        first: function() {
          return this.eq(0)
        },
        last: function() {
          return this.eq(-1)
        },
        even: function() {
          return this.pushStack(S.grep(this, function(e, t) {
            return (t + 1) % 2
          }))
        },
        odd: function() {
          return this.pushStack(S.grep(this, function(e, t) {
            return t % 2
          }))
        },
        eq: function(e) {
          var t = this.length,
            n = +e + (e < 0 ? t : 0);
          return this.pushStack(0 <= n && n < t ? [this[n]] : [])
        },
        end: function() {
          return this.prevObject || this.constructor()
        },
        push: u,
        sort: t.sort,
        splice: t.splice
      }, S.extend = S.fn.extend = function() {
        var e, t, n, r, i, o, a = arguments[0] || {},
          s = 1,
          u = arguments.length,
          l = !1;
        for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || m(a) || (
          a = {}), s === u && (a = this, s--); s < u; s++)
          if (null != (e = arguments[s]))
            for (t in e) r = e[t], "__proto__" !== t && a !== r && (l && r && (S.isPlainObject(r) || (i = Array
              .isArray(r))) ? (n = a[t], o = i && !Array.isArray(n) ? [] : i || S.isPlainObject(n) ? n : {},
              i = !1, a[t] = S.extend(l, o, r)) : void 0 !== r && (a[t] = r));
        return a
      }, S.extend({
        expando: "jQuery" + (f + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function(e) {
          throw new Error(e)
        },
        noop: function() {},
        isPlainObject: function(e) {
          var t, n;
          return !(!e || "[object Object]" !== o.call(e)) && (!(t = r(e)) || "function" == typeof(n = v.call(t,
            "constructor") && t.constructor) && a.call(n) === l)
        },
        isEmptyObject: function(e) {
          var t;
          for (t in e) return !1;
          return !0
        },
        globalEval: function(e, t, n) {
          b(e, {
            nonce: t && t.nonce
          }, n)
        },
        each: function(e, t) {
          var n, r = 0;
          if (p(e)) {
            for (n = e.length; r < n; r++)
              if (!1 === t.call(e[r], r, e[r])) break
          } else
            for (r in e)
              if (!1 === t.call(e[r], r, e[r])) break;
          return e
        },
        makeArray: function(e, t) {
          var n = t || [];
          return null != e && (p(Object(e)) ? S.merge(n, "string" == typeof e ? [e] : e) : u.call(n, e)), n
        },
        inArray: function(e, t, n) {
          return null == t ? -1 : i.call(t, e, n)
        },
        merge: function(e, t) {
          for (var n = +t.length, r = 0, i = e.length; r < n; r++) e[i++] = t[r];
          return e.length = i, e
        },
        grep: function(e, t, n) {
          for (var r = [], i = 0, o = e.length, a = !n; i < o; i++) !t(e[i], i) !== a && r.push(e[i]);
          return r
        },
        map: function(e, t, n) {
          var r, i, o = 0,
            a = [];
          if (p(e))
            for (r = e.length; o < r; o++) null != (i = t(e[o], o, n)) && a.push(i);
          else
            for (o in e) null != (i = t(e[o], o, n)) && a.push(i);
          return g(a)
        },
        guid: 1,
        support: y
      }), "function" == typeof Symbol && (S.fn[Symbol.iterator] = t[Symbol.iterator]), S.each(
        "Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),
        function(e, t) {
          n["[object " + t + "]"] = t.toLowerCase()
        });
      var d = function(n) {
        var e, d, b, o, i, h, f, g, w, u, l, T, C, a, E, v, s, c, y, S = "sizzle" + 1 * new Date,
          p = n.document,
          k = 0,
          r = 0,
          m = ue(),
          x = ue(),
          A = ue(),
          N = ue(),
          j = function(e, t) {
            return e === t && (l = !0), 0
          },
          D = {}.hasOwnProperty,
          t = [],
          q = t.pop,
          L = t.push,
          H = t.push,
          O = t.slice,
          P = function(e, t) {
            for (var n = 0, r = e.length; n < r; n++)
              if (e[n] === t) return n;
            return -1
          },
          R =
          "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
          M = "[\\x20\\t\\r\\n\\f]",
          I = "(?:\\\\[\\da-fA-F]{1,6}" + M + "?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",
          W = "\\[" + M + "*(" + I + ")(?:" + M + "*([*^$|!~]?=)" + M +
          "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + I + "))|)" + M + "*\\]",
          F = ":(" + I + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" +
          W + ")*)|.*)\\)|)",
          B = new RegExp(M + "+", "g"),
          $ = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
          _ = new RegExp("^" + M + "*," + M + "*"),
          z = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
          U = new RegExp(M + "|>"),
          X = new RegExp(F),
          V = new RegExp("^" + I + "$"),
          G = {
            ID: new RegExp("^#(" + I + ")"),
            CLASS: new RegExp("^\\.(" + I + ")"),
            TAG: new RegExp("^(" + I + "|[*])"),
            ATTR: new RegExp("^" + W),
            PSEUDO: new RegExp("^" + F),
            CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M +
              "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"),
            bool: new RegExp("^(?:" + R + ")$", "i"),
            needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M +
              "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i")
          },
          Y = /HTML$/i,
          Q = /^(?:input|select|textarea|button)$/i,
          J = /^h\d$/i,
          K = /^[^{]+\{\s*\[native \w/,
          Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
          ee = /[+~]/,
          te = new RegExp("\\\\[\\da-fA-F]{1,6}" + M + "?|\\\\([^\\r\\n\\f])", "g"),
          ne = function(e, t) {
            var n = "0x" + e.slice(1) - 65536;
            return t || (n < 0 ? String.fromCharCode(n + 65536) : String.fromCharCode(n >> 10 | 55296, 1023 & n |
              56320))
          },
          re = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
          ie = function(e, t) {
            return t ? "\0" === e ? "\ufffd" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) +
              " " : "\\" + e
          },
          oe = function() {
            T()
          },
          ae = be(function(e) {
            return !0 === e.disabled && "fieldset" === e.nodeName.toLowerCase()
          }, {
            dir: "parentNode",
            next: "legend"
          });
        try {
          H.apply(t = O.call(p.childNodes), p.childNodes), t[p.childNodes.length].nodeType
        } catch (e) {
          H = {
            apply: t.length ? function(e, t) {
              L.apply(e, O.call(t))
            } : function(e, t) {
              var n = e.length,
                r = 0;
              while (e[n++] = t[r++]);
              e.length = n - 1
            }
          }
        }

        function se(t, e, n, r) {
          var i, o, a, s, u, l, c, f = e && e.ownerDocument,
            p = e ? e.nodeType : 9;
          if (n = n || [], "string" != typeof t || !t || 1 !== p && 9 !== p && 11 !== p) return n;
          if (!r && (T(e), e = e || C, E)) {
            if (11 !== p && (u = Z.exec(t)))
              if (i = u[1]) {
                if (9 === p) {
                  if (!(a = e.getElementById(i))) return n;
                  if (a.id === i) return n.push(a), n
                } else if (f && (a = f.getElementById(i)) && y(e, a) && a.id === i) return n.push(a), n
              } else {
                if (u[2]) return H.apply(n, e.getElementsByTagName(t)), n;
                if ((i = u[3]) && d.getElementsByClassName && e.getElementsByClassName) return H.apply(n, e
                  .getElementsByClassName(i)), n
              } if (d.qsa && !N[t + " "] && (!v || !v.test(t)) && (1 !== p || "object" !== e.nodeName
            .toLowerCase())) {
              if (c = t, f = e, 1 === p && (U.test(t) || z.test(t))) {
                (f = ee.test(t) && ye(e.parentNode) || e) === e && d.scope || ((s = e.getAttribute("id")) ? s = s
                  .replace(re, ie) : e.setAttribute("id", s = S)), o = (l = h(t)).length;
                while (o--) l[o] = (s ? "#" + s : ":scope") + " " + xe(l[o]);
                c = l.join(",")
              }
              try {
                return H.apply(n, f.querySelectorAll(c)), n
              } catch (e) {
                N(t, !0)
              } finally {
                s === S && e.removeAttribute("id")
              }
            }
          }
          return g(t.replace($, "$1"), e, n, r)
        }

        function ue() {
          var r = [];
          return function e(t, n) {
            return r.push(t + " ") > b.cacheLength && delete e[r.shift()], e[t + " "] = n
          }
        }

        function le(e) {
          return e[S] = !0, e
        }

        function ce(e) {
          var t = C.createElement("fieldset");
          try {
            return !!e(t)
          } catch (e) {
            return !1
          } finally {
            t.parentNode && t.parentNode.removeChild(t), t = null
          }
        }

        function fe(e, t) {
          var n = e.split("|"),
            r = n.length;
          while (r--) b.attrHandle[n[r]] = t
        }

        function pe(e, t) {
          var n = t && e,
            r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
          if (r) return r;
          if (n)
            while (n = n.nextSibling)
              if (n === t) return -1;
          return e ? 1 : -1
        }

        function de(t) {
          return function(e) {
            return "input" === e.nodeName.toLowerCase() && e.type === t
          }
        }

        function he(n) {
          return function(e) {
            var t = e.nodeName.toLowerCase();
            return ("input" === t || "button" === t) && e.type === n
          }
        }

        function ge(t) {
          return function(e) {
            return "form" in e ? e.parentNode && !1 === e.disabled ? "label" in e ? "label" in e.parentNode ? e
              .parentNode.disabled === t : e.disabled === t : e.isDisabled === t || e.isDisabled !== !t && ae(
              e) === t : e.disabled === t : "label" in e && e.disabled === t
          }
        }

        function ve(a) {
          return le(function(o) {
            return o = +o, le(function(e, t) {
              var n, r = a([], e.length, o),
                i = r.length;
              while (i--) e[n = r[i]] && (e[n] = !(t[n] = e[n]))
            })
          })
        }

        function ye(e) {
          return e && "undefined" != typeof e.getElementsByTagName && e
        }
        for (e in d = se.support = {}, i = se.isXML = function(e) {
            var t = e && e.namespaceURI,
              n = e && (e.ownerDocument || e).documentElement;
            return !Y.test(t || n && n.nodeName || "HTML")
          }, T = se.setDocument = function(e) {
            var t, n, r = e ? e.ownerDocument || e : p;
            return r != C && 9 === r.nodeType && r.documentElement && (a = (C = r).documentElement, E = !i(C), p !=
              C && (n = C.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", oe, !
                1) : n.attachEvent && n.attachEvent("onunload", oe)), d.scope = ce(function(e) {
                return a.appendChild(e).appendChild(C.createElement("div")), "undefined" != typeof e
                  .querySelectorAll && !e.querySelectorAll(":scope fieldset div").length
              }), d.attributes = ce(function(e) {
                return e.className = "i", !e.getAttribute("className")
              }), d.getElementsByTagName = ce(function(e) {
                return e.appendChild(C.createComment("")), !e.getElementsByTagName("*").length
              }), d.getElementsByClassName = K.test(C.getElementsByClassName), d.getById = ce(function(e) {
                return a.appendChild(e).id = S, !C.getElementsByName || !C.getElementsByName(S).length
              }), d.getById ? (b.filter.ID = function(e) {
                var t = e.replace(te, ne);
                return function(e) {
                  return e.getAttribute("id") === t
                }
              }, b.find.ID = function(e, t) {
                if ("undefined" != typeof t.getElementById && E) {
                  var n = t.getElementById(e);
                  return n ? [n] : []
                }
              }) : (b.filter.ID = function(e) {
                var n = e.replace(te, ne);
                return function(e) {
                  var t = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id");
                  return t && t.value === n
                }
              }, b.find.ID = function(e, t) {
                if ("undefined" != typeof t.getElementById && E) {
                  var n, r, i, o = t.getElementById(e);
                  if (o) {
                    if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
                    i = t.getElementsByName(e), r = 0;
                    while (o = i[r++])
                      if ((n = o.getAttributeNode("id")) && n.value === e) return [o]
                  }
                  return []
                }
              }), b.find.TAG = d.getElementsByTagName ? function(e, t) {
                return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : d.qsa ? t
                  .querySelectorAll(e) : void 0
              } : function(e, t) {
                var n, r = [],
                  i = 0,
                  o = t.getElementsByTagName(e);
                if ("*" === e) {
                  while (n = o[i++]) 1 === n.nodeType && r.push(n);
                  return r
                }
                return o
              }, b.find.CLASS = d.getElementsByClassName && function(e, t) {
                if ("undefined" != typeof t.getElementsByClassName && E) return t.getElementsByClassName(e)
              }, s = [], v = [], (d.qsa = K.test(C.querySelectorAll)) && (ce(function(e) {
                var t;
                a.appendChild(e).innerHTML = "<a id='" + S + "'></a><select id='" + S +
                  "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll(
                    "[msallowcapture^='']").length && v.push("[*^$]=" + M + "*(?:''|\"\")"), e
                  .querySelectorAll("[selected]").length || v.push("\\[" + M + "*(?:value|" + R + ")"), e
                  .querySelectorAll("[id~=" + S + "-]").length || v.push("~="), (t = C.createElement("input"))
                  .setAttribute("name", ""), e.appendChild(t), e.querySelectorAll("[name='']").length || v
                  .push("\\[" + M + "*name" + M + "*=" + M + "*(?:''|\"\")"), e.querySelectorAll(":checked")
                  .length || v.push(":checked"), e.querySelectorAll("a#" + S + "+*").length || v.push(
                    ".#.+[+~]"), e.querySelectorAll("\\\f"), v.push("[\\r\\n\\f]")
              }), ce(function(e) {
                e.innerHTML =
                  "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                var t = C.createElement("input");
                t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e
                  .querySelectorAll("[name=d]").length && v.push("name" + M + "*[*^$|!~]?="), 2 !== e
                  .querySelectorAll(":enabled").length && v.push(":enabled", ":disabled"), a.appendChild(e)
                  .disabled = !0, 2 !== e.querySelectorAll(":disabled").length && v.push(":enabled",
                    ":disabled"), e.querySelectorAll("*,:x"), v.push(",.*:")
              })), (d.matchesSelector = K.test(c = a.matches || a.webkitMatchesSelector || a.mozMatchesSelector ||
                a.oMatchesSelector || a.msMatchesSelector)) && ce(function(e) {
                d.disconnectedMatch = c.call(e, "*"), c.call(e, "[s!='']:x"), s.push("!=", F)
              }), v = v.length && new RegExp(v.join("|")), s = s.length && new RegExp(s.join("|")), t = K.test(a
                .compareDocumentPosition), y = t || K.test(a.contains) ? function(e, t) {
                var n = 9 === e.nodeType ? e.documentElement : e,
                  r = t && t.parentNode;
                return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e
                  .compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
              } : function(e, t) {
                if (t)
                  while (t = t.parentNode)
                    if (t === e) return !0;
                return !1
              }, j = t ? function(e, t) {
                if (e === t) return l = !0, 0;
                var n = !e.compareDocumentPosition - !t.compareDocumentPosition;
                return n || (1 & (n = (e.ownerDocument || e) == (t.ownerDocument || t) ? e
                    .compareDocumentPosition(t) : 1) || !d.sortDetached && t.compareDocumentPosition(e) === n ?
                  e == C || e.ownerDocument == p && y(p, e) ? -1 : t == C || t.ownerDocument == p && y(p, t) ?
                  1 : u ? P(u, e) - P(u, t) : 0 : 4 & n ? -1 : 1)
              } : function(e, t) {
                if (e === t) return l = !0, 0;
                var n, r = 0,
                  i = e.parentNode,
                  o = t.parentNode,
                  a = [e],
                  s = [t];
                if (!i || !o) return e == C ? -1 : t == C ? 1 : i ? -1 : o ? 1 : u ? P(u, e) - P(u, t) : 0;
                if (i === o) return pe(e, t);
                n = e;
                while (n = n.parentNode) a.unshift(n);
                n = t;
                while (n = n.parentNode) s.unshift(n);
                while (a[r] === s[r]) r++;
                return r ? pe(a[r], s[r]) : a[r] == p ? -1 : s[r] == p ? 1 : 0
              }), C
          }, se.matches = function(e, t) {
            return se(e, null, null, t)
          }, se.matchesSelector = function(e, t) {
            if (T(e), d.matchesSelector && E && !N[t + " "] && (!s || !s.test(t)) && (!v || !v.test(t))) try {
              var n = c.call(e, t);
              if (n || d.disconnectedMatch || e.document && 11 !== e.document.nodeType) return n
            } catch (e) {
              N(t, !0)
            }
            return 0 < se(t, C, null, [e]).length
          }, se.contains = function(e, t) {
            return (e.ownerDocument || e) != C && T(e), y(e, t)
          }, se.attr = function(e, t) {
            (e.ownerDocument || e) != C && T(e);
            var n = b.attrHandle[t.toLowerCase()],
              r = n && D.call(b.attrHandle, t.toLowerCase()) ? n(e, t, !E) : void 0;
            return void 0 !== r ? r : d.attributes || !E ? e.getAttribute(t) : (r = e.getAttributeNode(t)) && r
              .specified ? r.value : null
          }, se.escape = function(e) {
            return (e + "").replace(re, ie)
          }, se.error = function(e) {
            throw new Error("Syntax error, unrecognized expression: " + e)
          }, se.uniqueSort = function(e) {
            var t, n = [],
              r = 0,
              i = 0;
            if (l = !d.detectDuplicates, u = !d.sortStable && e.slice(0), e.sort(j), l) {
              while (t = e[i++]) t === e[i] && (r = n.push(i));
              while (r--) e.splice(n[r], 1)
            }
            return u = null, e
          }, o = se.getText = function(e) {
            var t, n = "",
              r = 0,
              i = e.nodeType;
            if (i) {
              if (1 === i || 9 === i || 11 === i) {
                if ("string" == typeof e.textContent) return e.textContent;
                for (e = e.firstChild; e; e = e.nextSibling) n += o(e)
              } else if (3 === i || 4 === i) return e.nodeValue
            } else
              while (t = e[r++]) n += o(t);
            return n
          }, (b = se.selectors = {
            cacheLength: 50,
            createPseudo: le,
            match: G,
            attrHandle: {},
            find: {},
            relative: {
              ">": {
                dir: "parentNode",
                first: !0
              },
              " ": {
                dir: "parentNode"
              },
              "+": {
                dir: "previousSibling",
                first: !0
              },
              "~": {
                dir: "previousSibling"
              }
            },
            preFilter: {
              ATTR: function(e) {
                return e[1] = e[1].replace(te, ne), e[3] = (e[3] || e[4] || e[5] || "").replace(te, ne),
                  "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
              },
              CHILD: function(e) {
                return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || se.error(e[0]), e[4] = +
                  (e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[
                    8] || "odd" === e[3])) : e[3] && se.error(e[0]), e
              },
              PSEUDO: function(e) {
                var t, n = !e[6] && e[2];
                return G.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = h(
                  n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[
                  2] = n.slice(0, t)), e.slice(0, 3))
              }
            },
            filter: {
              TAG: function(e) {
                var t = e.replace(te, ne).toLowerCase();
                return "*" === e ? function() {
                  return !0
                } : function(e) {
                  return e.nodeName && e.nodeName.toLowerCase() === t
                }
              },
              CLASS: function(e) {
                var t = m[e + " "];
                return t || (t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) && m(e, function(e) {
                  return t.test("string" == typeof e.className && e.className || "undefined" != typeof e
                    .getAttribute && e.getAttribute("class") || "")
                })
              },
              ATTR: function(n, r, i) {
                return function(e) {
                  var t = se.attr(e, n);
                  return null == t ? "!=" === r : !r || (t += "", "=" === r ? t === i : "!=" === r ? t !== i :
                    "^=" === r ? i && 0 === t.indexOf(i) : "*=" === r ? i && -1 < t.indexOf(i) : "$=" ===
                    r ? i && t.slice(-i.length) === i : "~=" === r ? -1 < (" " + t.replace(B, " ") + " ")
                    .indexOf(i) : "|=" === r && (t === i || t.slice(0, i.length + 1) === i + "-"))
                }
              },
              CHILD: function(h, e, t, g, v) {
                var y = "nth" !== h.slice(0, 3),
                  m = "last" !== h.slice(-4),
                  x = "of-type" === e;
                return 1 === g && 0 === v ? function(e) {
                  return !!e.parentNode
                } : function(e, t, n) {
                  var r, i, o, a, s, u, l = y !== m ? "nextSibling" : "previousSibling",
                    c = e.parentNode,
                    f = x && e.nodeName.toLowerCase(),
                    p = !n && !x,
                    d = !1;
                  if (c) {
                    if (y) {
                      while (l) {
                        a = e;
                        while (a = a[l])
                          if (x ? a.nodeName.toLowerCase() === f : 1 === a.nodeType) return !1;
                        u = l = "only" === h && !u && "nextSibling"
                      }
                      return !0
                    }
                    if (u = [m ? c.firstChild : c.lastChild], m && p) {
                      d = (s = (r = (i = (o = (a = c)[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[
                        h] || [])[0] === k && r[1]) && r[2], a = s && c.childNodes[s];
                      while (a = ++s && a && a[l] || (d = s = 0) || u.pop())
                        if (1 === a.nodeType && ++d && a === e) {
                          i[h] = [k, s, d];
                          break
                        }
                    } else if (p && (d = s = (r = (i = (o = (a = e)[S] || (a[S] = {}))[a.uniqueID] || (o[a
                        .uniqueID] = {}))[h] || [])[0] === k && r[1]), !1 === d)
                      while (a = ++s && a && a[l] || (d = s = 0) || u.pop())
                        if ((x ? a.nodeName.toLowerCase() === f : 1 === a.nodeType) && ++d && (p && ((i = (o =
                            a[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[h] = [k, d]), a === e))
                          break;
                    return (d -= v) === g || d % g == 0 && 0 <= d / g
                  }
                }
              },
              PSEUDO: function(e, o) {
                var t, a = b.pseudos[e] || b.setFilters[e.toLowerCase()] || se.error("unsupported pseudo: " +
                e);
                return a[S] ? a(o) : 1 < a.length ? (t = [e, e, "", o], b.setFilters.hasOwnProperty(e
                  .toLowerCase()) ? le(function(e, t) {
                  var n, r = a(e, o),
                    i = r.length;
                  while (i--) e[n = P(e, r[i])] = !(t[n] = r[i])
                }) : function(e) {
                  return a(e, 0, t)
                }) : a
              }
            },
            pseudos: {
              not: le(function(e) {
                var r = [],
                  i = [],
                  s = f(e.replace($, "$1"));
                return s[S] ? le(function(e, t, n, r) {
                  var i, o = s(e, null, r, []),
                    a = e.length;
                  while (a--)(i = o[a]) && (e[a] = !(t[a] = i))
                }) : function(e, t, n) {
                  return r[0] = e, s(r, null, n, i), r[0] = null, !i.pop()
                }
              }),
              has: le(function(t) {
                return function(e) {
                  return 0 < se(t, e).length
                }
              }),
              contains: le(function(t) {
                return t = t.replace(te, ne),
                  function(e) {
                    return -1 < (e.textContent || o(e)).indexOf(t)
                  }
              }),
              lang: le(function(n) {
                return V.test(n || "") || se.error("unsupported lang: " + n), n = n.replace(te, ne)
                  .toLowerCase(),
                  function(e) {
                    var t;
                    do {
                      if (t = E ? e.lang : e.getAttribute("xml:lang") || e.getAttribute("lang")) return (t = t
                        .toLowerCase()) === n || 0 === t.indexOf(n + "-")
                    } while ((e = e.parentNode) && 1 === e.nodeType);
                    return !1
                  }
              }),
              target: function(e) {
                var t = n.location && n.location.hash;
                return t && t.slice(1) === e.id
              },
              root: function(e) {
                return e === a
              },
              focus: function(e) {
                return e === C.activeElement && (!C.hasFocus || C.hasFocus()) && !!(e.type || e.href || ~e
                  .tabIndex)
              },
              enabled: ge(!1),
              disabled: ge(!0),
              checked: function(e) {
                var t = e.nodeName.toLowerCase();
                return "input" === t && !!e.checked || "option" === t && !!e.selected
              },
              selected: function(e) {
                return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
              },
              empty: function(e) {
                for (e = e.firstChild; e; e = e.nextSibling)
                  if (e.nodeType < 6) return !1;
                return !0
              },
              parent: function(e) {
                return !b.pseudos.empty(e)
              },
              header: function(e) {
                return J.test(e.nodeName)
              },
              input: function(e) {
                return Q.test(e.nodeName)
              },
              button: function(e) {
                var t = e.nodeName.toLowerCase();
                return "input" === t && "button" === e.type || "button" === t
              },
              text: function(e) {
                var t;
                return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e
                  .getAttribute("type")) || "text" === t.toLowerCase())
              },
              first: ve(function() {
                return [0]
              }),
              last: ve(function(e, t) {
                return [t - 1]
              }),
              eq: ve(function(e, t, n) {
                return [n < 0 ? n + t : n]
              }),
              even: ve(function(e, t) {
                for (var n = 0; n < t; n += 2) e.push(n);
                return e
              }),
              odd: ve(function(e, t) {
                for (var n = 1; n < t; n += 2) e.push(n);
                return e
              }),
              lt: ve(function(e, t, n) {
                for (var r = n < 0 ? n + t : t < n ? t : n; 0 <= --r;) e.push(r);
                return e
              }),
              gt: ve(function(e, t, n) {
                for (var r = n < 0 ? n + t : n; ++r < t;) e.push(r);
                return e
              })
            }
          }).pseudos.nth = b.pseudos.eq, {
            radio: !0,
            checkbox: !0,
            file: !0,
            password: !0,
            image: !0
          }) b.pseudos[e] = de(e);
        for (e in {
            submit: !0,
            reset: !0
          }) b.pseudos[e] = he(e);

        function me() {}

        function xe(e) {
          for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value;
          return r
        }

        function be(s, e, t) {
          var u = e.dir,
            l = e.next,
            c = l || u,
            f = t && "parentNode" === c,
            p = r++;
          return e.first ? function(e, t, n) {
            while (e = e[u])
              if (1 === e.nodeType || f) return s(e, t, n);
            return !1
          } : function(e, t, n) {
            var r, i, o, a = [k, p];
            if (n) {
              while (e = e[u])
                if ((1 === e.nodeType || f) && s(e, t, n)) return !0
            } else
              while (e = e[u])
                if (1 === e.nodeType || f)
                  if (i = (o = e[S] || (e[S] = {}))[e.uniqueID] || (o[e.uniqueID] = {}), l && l === e.nodeName
                    .toLowerCase()) e = e[u] || e;
                  else {
                    if ((r = i[c]) && r[0] === k && r[1] === p) return a[2] = r[2];
                    if ((i[c] = a)[2] = s(e, t, n)) return !0
                  } return !1
          }
        }

        function we(i) {
          return 1 < i.length ? function(e, t, n) {
            var r = i.length;
            while (r--)
              if (!i[r](e, t, n)) return !1;
            return !0
          } : i[0]
        }

        function Te(e, t, n, r, i) {
          for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++)(o = e[s]) && (n && !n(o, r, i) || (a
            .push(o), l && t.push(s)));
          return a
        }

        function Ce(d, h, g, v, y, e) {
          return v && !v[S] && (v = Ce(v)), y && !y[S] && (y = Ce(y, e)), le(function(e, t, n, r) {
            var i, o, a, s = [],
              u = [],
              l = t.length,
              c = e || function(e, t, n) {
                for (var r = 0, i = t.length; r < i; r++) se(e, t[r], n);
                return n
              }(h || "*", n.nodeType ? [n] : n, []),
              f = !d || !e && h ? c : Te(c, s, d, n, r),
              p = g ? y || (e ? d : l || v) ? [] : t : f;
            if (g && g(f, p, n, r), v) {
              i = Te(p, u), v(i, [], n, r), o = i.length;
              while (o--)(a = i[o]) && (p[u[o]] = !(f[u[o]] = a))
            }
            if (e) {
              if (y || d) {
                if (y) {
                  i = [], o = p.length;
                  while (o--)(a = p[o]) && i.push(f[o] = a);
                  y(null, p = [], i, r)
                }
                o = p.length;
                while (o--)(a = p[o]) && -1 < (i = y ? P(e, a) : s[o]) && (e[i] = !(t[i] = a))
              }
            } else p = Te(p === t ? p.splice(l, p.length) : p), y ? y(null, t, p, r) : H.apply(t, p)
          })
        }

        function Ee(e) {
          for (var i, t, n, r = e.length, o = b.relative[e[0].type], a = o || b.relative[" "], s = o ? 1 : 0, u =
              be(function(e) {
                return e === i
              }, a, !0), l = be(function(e) {
                return -1 < P(i, e)
              }, a, !0), c = [function(e, t, n) {
                var r = !o && (n || t !== w) || ((i = t).nodeType ? u(e, t, n) : l(e, t, n));
                return i = null, r
              }]; s < r; s++)
            if (t = b.relative[e[s].type]) c = [be(we(c), t)];
            else {
              if ((t = b.filter[e[s].type].apply(null, e[s].matches))[S]) {
                for (n = ++s; n < r; n++)
                  if (b.relative[e[n].type]) break;
                return Ce(1 < s && we(c), 1 < s && xe(e.slice(0, s - 1).concat({
                    value: " " === e[s - 2].type ? "*" : ""
                  })).replace($, "$1"), t, s < n && Ee(e.slice(s, n)), n < r && Ee(e = e.slice(n)), n < r && xe(
                  e))
              }
              c.push(t)
            } return we(c)
        }
        return me.prototype = b.filters = b.pseudos, b.setFilters = new me, h = se.tokenize = function(e, t) {
          var n, r, i, o, a, s, u, l = x[e + " "];
          if (l) return t ? 0 : l.slice(0);
          a = e, s = [], u = b.preFilter;
          while (a) {
            for (o in n && !(r = _.exec(a)) || (r && (a = a.slice(r[0].length) || a), s.push(i = [])), n = !1, (
                r = z.exec(a)) && (n = r.shift(), i.push({
                value: n,
                type: r[0].replace($, " ")
              }), a = a.slice(n.length)), b.filter) !(r = G[o].exec(a)) || u[o] && !(r = u[o](r)) || (n = r
            .shift(), i.push({
              value: n,
              type: o,
              matches: r
            }), a = a.slice(n.length));
            if (!n) break
          }
          return t ? a.length : a ? se.error(e) : x(e, s).slice(0)
        }, f = se.compile = function(e, t) {
          var n, v, y, m, x, r, i = [],
            o = [],
            a = A[e + " "];
          if (!a) {
            t || (t = h(e)), n = t.length;
            while (n--)(a = Ee(t[n]))[S] ? i.push(a) : o.push(a);
            (a = A(e, (v = o, m = 0 < (y = i).length, x = 0 < v.length, r = function(e, t, n, r, i) {
              var o, a, s, u = 0,
                l = "0",
                c = e && [],
                f = [],
                p = w,
                d = e || x && b.find.TAG("*", i),
                h = k += null == p ? 1 : Math.random() || .1,
                g = d.length;
              for (i && (w = t == C || t || i); l !== g && null != (o = d[l]); l++) {
                if (x && o) {
                  a = 0, t || o.ownerDocument == C || (T(o), n = !E);
                  while (s = v[a++])
                    if (s(o, t || C, n)) {
                      r.push(o);
                      break
                    } i && (k = h)
                }
                m && ((o = !s && o) && u--, e && c.push(o))
              }
              if (u += l, m && l !== u) {
                a = 0;
                while (s = y[a++]) s(c, f, t, n);
                if (e) {
                  if (0 < u)
                    while (l--) c[l] || f[l] || (f[l] = q.call(r));
                  f = Te(f)
                }
                H.apply(r, f), i && !e && 0 < f.length && 1 < u + y.length && se.uniqueSort(r)
              }
              return i && (k = h, w = p), c
            }, m ? le(r) : r))).selector = e
          }
          return a
        }, g = se.select = function(e, t, n, r) {
          var i, o, a, s, u, l = "function" == typeof e && e,
            c = !r && h(e = l.selector || e);
          if (n = n || [], 1 === c.length) {
            if (2 < (o = c[0] = c[0].slice(0)).length && "ID" === (a = o[0]).type && 9 === t.nodeType && E && b
              .relative[o[1].type]) {
              if (!(t = (b.find.ID(a.matches[0].replace(te, ne), t) || [])[0])) return n;
              l && (t = t.parentNode), e = e.slice(o.shift().value.length)
            }
            i = G.needsContext.test(e) ? 0 : o.length;
            while (i--) {
              if (a = o[i], b.relative[s = a.type]) break;
              if ((u = b.find[s]) && (r = u(a.matches[0].replace(te, ne), ee.test(o[0].type) && ye(t
                  .parentNode) || t))) {
                if (o.splice(i, 1), !(e = r.length && xe(o))) return H.apply(n, r), n;
                break
              }
            }
          }
          return (l || f(e, c))(r, t, !E, n, !t || ee.test(e) && ye(t.parentNode) || t), n
        }, d.sortStable = S.split("").sort(j).join("") === S, d.detectDuplicates = !!l, T(), d.sortDetached = ce(
          function(e) {
            return 1 & e.compareDocumentPosition(C.createElement("fieldset"))
          }), ce(function(e) {
          return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
        }) || fe("type|href|height|width", function(e, t, n) {
          if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
        }), d.attributes && ce(function(e) {
          return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild
            .getAttribute("value")
        }) || fe("value", function(e, t, n) {
          if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue
        }), ce(function(e) {
          return null == e.getAttribute("disabled")
        }) || fe(R, function(e, t, n) {
          var r;
          if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value :
            null
        }), se
      }(C);
      S.find = d, S.expr = d.selectors, S.expr[":"] = S.expr.pseudos, S.uniqueSort = S.unique = d.uniqueSort, S.text =
        d.getText, S.isXMLDoc = d.isXML, S.contains = d.contains, S.escapeSelector = d.escape;
      var h = function(e, t, n) {
          var r = [],
            i = void 0 !== n;
          while ((e = e[t]) && 9 !== e.nodeType)
            if (1 === e.nodeType) {
              if (i && S(e).is(n)) break;
              r.push(e)
            } return r
        },
        T = function(e, t) {
          for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
          return n
        },
        k = S.expr.match.needsContext;

      function A(e, t) {
        return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
      }
      var N = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

      function j(e, n, r) {
        return m(n) ? S.grep(e, function(e, t) {
          return !!n.call(e, t, e) !== r
        }) : n.nodeType ? S.grep(e, function(e) {
          return e === n !== r
        }) : "string" != typeof n ? S.grep(e, function(e) {
          return -1 < i.call(n, e) !== r
        }) : S.filter(n, e, r)
      }
      S.filter = function(e, t, n) {
        var r = t[0];
        return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? S.find.matchesSelector(r, e) ? [
          r] : [] : S.find.matches(e, S.grep(t, function(e) {
            return 1 === e.nodeType
          }))
      }, S.fn.extend({
        find: function(e) {
          var t, n, r = this.length,
            i = this;
          if ("string" != typeof e) return this.pushStack(S(e).filter(function() {
            for (t = 0; t < r; t++)
              if (S.contains(i[t], this)) return !0
          }));
          for (n = this.pushStack([]), t = 0; t < r; t++) S.find(e, i[t], n);
          return 1 < r ? S.uniqueSort(n) : n
        },
        filter: function(e) {
          return this.pushStack(j(this, e || [], !1))
        },
        not: function(e) {
          return this.pushStack(j(this, e || [], !0))
        },
        is: function(e) {
          return !!j(this, "string" == typeof e && k.test(e) ? S(e) : e || [], !1).length
        }
      });
      var D, q = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
      (S.fn.init = function(e, t, n) {
        var r, i;
        if (!e) return this;
        if (n = n || D, "string" == typeof e) {
          if (!(r = "<" === e[0] && ">" === e[e.length - 1] && 3 <= e.length ? [null, e, null] : q.exec(e)) || !r[
            1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
          if (r[1]) {
            if (t = t instanceof S ? t[0] : t, S.merge(this, S.parseHTML(r[1], t && t.nodeType ? t.ownerDocument ||
                t : E, !0)), N.test(r[1]) && S.isPlainObject(t))
              for (r in t) m(this[r]) ? this[r](t[r]) : this.attr(r, t[r]);
            return this
          }
          return (i = E.getElementById(r[2])) && (this[0] = i, this.length = 1), this
        }
        return e.nodeType ? (this[0] = e, this.length = 1, this) : m(e) ? void 0 !== n.ready ? n.ready(e) : e(S) : S
          .makeArray(e, this)
      }).prototype = S.fn, D = S(E);
      var L = /^(?:parents|prev(?:Until|All))/,
        H = {
          children: !0,
          contents: !0,
          next: !0,
          prev: !0
        };

      function O(e, t) {
        while ((e = e[t]) && 1 !== e.nodeType);
        return e
      }
      S.fn.extend({
        has: function(e) {
          var t = S(e, this),
            n = t.length;
          return this.filter(function() {
            for (var e = 0; e < n; e++)
              if (S.contains(this, t[e])) return !0
          })
        },
        closest: function(e, t) {
          var n, r = 0,
            i = this.length,
            o = [],
            a = "string" != typeof e && S(e);
          if (!k.test(e))
            for (; r < i; r++)
              for (n = this[r]; n && n !== t; n = n.parentNode)
                if (n.nodeType < 11 && (a ? -1 < a.index(n) : 1 === n.nodeType && S.find.matchesSelector(n,
                  e))) {
                  o.push(n);
                  break
                } return this.pushStack(1 < o.length ? S.uniqueSort(o) : o)
        },
        index: function(e) {
          return e ? "string" == typeof e ? i.call(S(e), this[0]) : i.call(this, e.jquery ? e[0] : e) : this[
            0] && this[0].parentNode ? this.first().prevAll().length : -1
        },
        add: function(e, t) {
          return this.pushStack(S.uniqueSort(S.merge(this.get(), S(e, t))))
        },
        addBack: function(e) {
          return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
        }
      }), S.each({
        parent: function(e) {
          var t = e.parentNode;
          return t && 11 !== t.nodeType ? t : null
        },
        parents: function(e) {
          return h(e, "parentNode")
        },
        parentsUntil: function(e, t, n) {
          return h(e, "parentNode", n)
        },
        next: function(e) {
          return O(e, "nextSibling")
        },
        prev: function(e) {
          return O(e, "previousSibling")
        },
        nextAll: function(e) {
          return h(e, "nextSibling")
        },
        prevAll: function(e) {
          return h(e, "previousSibling")
        },
        nextUntil: function(e, t, n) {
          return h(e, "nextSibling", n)
        },
        prevUntil: function(e, t, n) {
          return h(e, "previousSibling", n)
        },
        siblings: function(e) {
          return T((e.parentNode || {}).firstChild, e)
        },
        children: function(e) {
          return T(e.firstChild)
        },
        contents: function(e) {
          return null != e.contentDocument && r(e.contentDocument) ? e.contentDocument : (A(e, "template") && (
            e = e.content || e), S.merge([], e.childNodes))
        }
      }, function(r, i) {
        S.fn[r] = function(e, t) {
          var n = S.map(this, i, e);
          return "Until" !== r.slice(-5) && (t = e), t && "string" == typeof t && (n = S.filter(t, n)), 1 < this
            .length && (H[r] || S.uniqueSort(n), L.test(r) && n.reverse()), this.pushStack(n)
        }
      });
      var P = /[^\x20\t\r\n\f]+/g;

      function R(e) {
        return e
      }

      function M(e) {
        throw e
      }

      function I(e, t, n, r) {
        var i;
        try {
          e && m(i = e.promise) ? i.call(e).done(t).fail(n) : e && m(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [
            e
          ].slice(r))
        } catch (e) {
          n.apply(void 0, [e])
        }
      }
      S.Callbacks = function(r) {
        var e, n;
        r = "string" == typeof r ? (e = r, n = {}, S.each(e.match(P) || [], function(e, t) {
          n[t] = !0
        }), n) : S.extend({}, r);
        var i, t, o, a, s = [],
          u = [],
          l = -1,
          c = function() {
            for (a = a || r.once, o = i = !0; u.length; l = -1) {
              t = u.shift();
              while (++l < s.length) !1 === s[l].apply(t[0], t[1]) && r.stopOnFalse && (l = s.length, t = !1)
            }
            r.memory || (t = !1), i = !1, a && (s = t ? [] : "")
          },
          f = {
            add: function() {
              return s && (t && !i && (l = s.length - 1, u.push(t)), function n(e) {
                S.each(e, function(e, t) {
                  m(t) ? r.unique && f.has(t) || s.push(t) : t && t.length && "string" !== w(t) && n(t)
                })
              }(arguments), t && !i && c()), this
            },
            remove: function() {
              return S.each(arguments, function(e, t) {
                var n;
                while (-1 < (n = S.inArray(t, s, n))) s.splice(n, 1), n <= l && l--
              }), this
            },
            has: function(e) {
              return e ? -1 < S.inArray(e, s) : 0 < s.length
            },
            empty: function() {
              return s && (s = []), this
            },
            disable: function() {
              return a = u = [], s = t = "", this
            },
            disabled: function() {
              return !s
            },
            lock: function() {
              return a = u = [], t || i || (s = t = ""), this
            },
            locked: function() {
              return !!a
            },
            fireWith: function(e, t) {
              return a || (t = [e, (t = t || []).slice ? t.slice() : t], u.push(t), i || c()), this
            },
            fire: function() {
              return f.fireWith(this, arguments), this
            },
            fired: function() {
              return !!o
            }
          };
        return f
      }, S.extend({
        Deferred: function(e) {
          var o = [
              ["notify", "progress", S.Callbacks("memory"), S.Callbacks("memory"), 2],
              ["resolve", "done", S.Callbacks("once memory"), S.Callbacks("once memory"), 0, "resolved"],
              ["reject", "fail", S.Callbacks("once memory"), S.Callbacks("once memory"), 1, "rejected"]
            ],
            i = "pending",
            a = {
              state: function() {
                return i
              },
              always: function() {
                return s.done(arguments).fail(arguments), this
              },
              "catch": function(e) {
                return a.then(null, e)
              },
              pipe: function() {
                var i = arguments;
                return S.Deferred(function(r) {
                  S.each(o, function(e, t) {
                    var n = m(i[t[4]]) && i[t[4]];
                    s[t[1]](function() {
                      var e = n && n.apply(this, arguments);
                      e && m(e.promise) ? e.promise().progress(r.notify).done(r.resolve).fail(r
                        .reject) : r[t[0] + "With"](this, n ? [e] : arguments)
                    })
                  }), i = null
                }).promise()
              },
              then: function(t, n, r) {
                var u = 0;

                function l(i, o, a, s) {
                  return function() {
                    var n = this,
                      r = arguments,
                      e = function() {
                        var e, t;
                        if (!(i < u)) {
                          if ((e = a.apply(n, r)) === o.promise()) throw new TypeError(
                            "Thenable self-resolution");
                          t = e && ("object" == typeof e || "function" == typeof e) && e.then, m(t) ? s ? t
                            .call(e, l(u, o, R, s), l(u, o, M, s)) : (u++, t.call(e, l(u, o, R, s), l(u, o,
                              M, s), l(u, o, R, o.notifyWith))) : (a !== R && (n = void 0, r = [e]), (s || o
                              .resolveWith)(n, r))
                        }
                      },
                      t = s ? e : function() {
                        try {
                          e()
                        } catch (e) {
                          S.Deferred.exceptionHook && S.Deferred.exceptionHook(e, t.stackTrace), u <= i +
                            1 && (a !== M && (n = void 0, r = [e]), o.rejectWith(n, r))
                        }
                      };
                    i ? t() : (S.Deferred.getStackHook && (t.stackTrace = S.Deferred.getStackHook()), C
                      .setTimeout(t))
                  }
                }
                return S.Deferred(function(e) {
                  o[0][3].add(l(0, e, m(r) ? r : R, e.notifyWith)), o[1][3].add(l(0, e, m(t) ? t : R)), o[
                    2][3].add(l(0, e, m(n) ? n : M))
                }).promise()
              },
              promise: function(e) {
                return null != e ? S.extend(e, a) : a
              }
            },
            s = {};
          return S.each(o, function(e, t) {
            var n = t[2],
              r = t[5];
            a[t[1]] = n.add, r && n.add(function() {
              i = r
            }, o[3 - e][2].disable, o[3 - e][3].disable, o[0][2].lock, o[0][3].lock), n.add(t[3].fire), s[
              t[0]] = function() {
              return s[t[0] + "With"](this === s ? void 0 : this, arguments), this
            }, s[t[0] + "With"] = n.fireWith
          }), a.promise(s), e && e.call(s, s), s
        },
        when: function(e) {
          var n = arguments.length,
            t = n,
            r = Array(t),
            i = s.call(arguments),
            o = S.Deferred(),
            a = function(t) {
              return function(e) {
                r[t] = this, i[t] = 1 < arguments.length ? s.call(arguments) : e, --n || o.resolveWith(r, i)
              }
            };
          if (n <= 1 && (I(e, o.done(a(t)).resolve, o.reject, !n), "pending" === o.state() || m(i[t] && i[t]
              .then))) return o.then();
          while (t--) I(i[t], a(t), o.reject);
          return o.promise()
        }
      });
      var W = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
      S.Deferred.exceptionHook = function(e, t) {
        C.console && C.console.warn && e && W.test(e.name) && C.console.warn("jQuery.Deferred exception: " + e
          .message, e.stack, t)
      }, S.readyException = function(e) {
        C.setTimeout(function() {
          throw e
        })
      };
      var F = S.Deferred();

      function B() {
        E.removeEventListener("DOMContentLoaded", B), C.removeEventListener("load", B), S.ready()
      }
      S.fn.ready = function(e) {
          return F.then(e)["catch"](function(e) {
            S.readyException(e)
          }), this
        }, S.extend({
          isReady: !1,
          readyWait: 1,
          ready: function(e) {
            (!0 === e ? --S.readyWait : S.isReady) || (S.isReady = !0) !== e && 0 < --S.readyWait || F
              .resolveWith(E, [S])
          }
        }), S.ready.then = F.then, "complete" === E.readyState || "loading" !== E.readyState && !E.documentElement
        .doScroll ? C.setTimeout(S.ready) : (E.addEventListener("DOMContentLoaded", B), C.addEventListener("load",
        B));
      var $ = function(e, t, n, r, i, o, a) {
          var s = 0,
            u = e.length,
            l = null == n;
          if ("object" === w(n))
            for (s in i = !0, n) $(e, t, s, n[s], !0, o, a);
          else if (void 0 !== r && (i = !0, m(r) || (a = !0), l && (a ? (t.call(e, r), t = null) : (l = t, t =
              function(e, t, n) {
                return l.call(S(e), n)
              })), t))
            for (; s < u; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
          return i ? e : l ? t.call(e) : u ? t(e[0], n) : o
        },
        _ = /^-ms-/,
        z = /-([a-z])/g;

      function U(e, t) {
        return t.toUpperCase()
      }

      function X(e) {
        return e.replace(_, "ms-").replace(z, U)
      }
      var V = function(e) {
        return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
      };

      function G() {
        this.expando = S.expando + G.uid++
      }
      G.uid = 1, G.prototype = {
        cache: function(e) {
          var t = e[this.expando];
          return t || (t = {}, V(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this
          .expando, {
            value: t,
            configurable: !0
          }))), t
        },
        set: function(e, t, n) {
          var r, i = this.cache(e);
          if ("string" == typeof t) i[X(t)] = n;
          else
            for (r in t) i[X(r)] = t[r];
          return i
        },
        get: function(e, t) {
          return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][X(t)]
        },
        access: function(e, t, n) {
          return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n),
            void 0 !== n ? n : t)
        },
        remove: function(e, t) {
          var n, r = e[this.expando];
          if (void 0 !== r) {
            if (void 0 !== t) {
              n = (t = Array.isArray(t) ? t.map(X) : (t = X(t)) in r ? [t] : t.match(P) || []).length;
              while (n--) delete r[t[n]]
            }(void 0 === t || S.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this
              .expando])
          }
        },
        hasData: function(e) {
          var t = e[this.expando];
          return void 0 !== t && !S.isEmptyObject(t)
        }
      };
      var Y = new G,
        Q = new G,
        J = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        K = /[A-Z]/g;

      function Z(e, t, n) {
        var r, i;
        if (void 0 === n && 1 === e.nodeType)
          if (r = "data-" + t.replace(K, "-$&").toLowerCase(), "string" == typeof(n = e.getAttribute(r))) {
            try {
              n = "true" === (i = n) || "false" !== i && ("null" === i ? null : i === +i + "" ? +i : J.test(i) ? JSON
                .parse(i) : i)
            } catch (e) {}
            Q.set(e, t, n)
          } else n = void 0;
        return n
      }
      S.extend({
        hasData: function(e) {
          return Q.hasData(e) || Y.hasData(e)
        },
        data: function(e, t, n) {
          return Q.access(e, t, n)
        },
        removeData: function(e, t) {
          Q.remove(e, t)
        },
        _data: function(e, t, n) {
          return Y.access(e, t, n)
        },
        _removeData: function(e, t) {
          Y.remove(e, t)
        }
      }), S.fn.extend({
        data: function(n, e) {
          var t, r, i, o = this[0],
            a = o && o.attributes;
          if (void 0 === n) {
            if (this.length && (i = Q.get(o), 1 === o.nodeType && !Y.get(o, "hasDataAttrs"))) {
              t = a.length;
              while (t--) a[t] && 0 === (r = a[t].name).indexOf("data-") && (r = X(r.slice(5)), Z(o, r, i[r]));
              Y.set(o, "hasDataAttrs", !0)
            }
            return i
          }
          return "object" == typeof n ? this.each(function() {
            Q.set(this, n)
          }) : $(this, function(e) {
            var t;
            if (o && void 0 === e) return void 0 !== (t = Q.get(o, n)) ? t : void 0 !== (t = Z(o, n)) ? t :
              void 0;
            this.each(function() {
              Q.set(this, n, e)
            })
          }, null, e, 1 < arguments.length, null, !0)
        },
        removeData: function(e) {
          return this.each(function() {
            Q.remove(this, e)
          })
        }
      }), S.extend({
        queue: function(e, t, n) {
          var r;
          if (e) return t = (t || "fx") + "queue", r = Y.get(e, t), n && (!r || Array.isArray(n) ? r = Y.access(
            e, t, S.makeArray(n)) : r.push(n)), r || []
        },
        dequeue: function(e, t) {
          t = t || "fx";
          var n = S.queue(e, t),
            r = n.length,
            i = n.shift(),
            o = S._queueHooks(e, t);
          "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o
            .stop, i.call(e, function() {
              S.dequeue(e, t)
            }, o)), !r && o && o.empty.fire()
        },
        _queueHooks: function(e, t) {
          var n = t + "queueHooks";
          return Y.get(e, n) || Y.access(e, n, {
            empty: S.Callbacks("once memory").add(function() {
              Y.remove(e, [t + "queue", n])
            })
          })
        }
      }), S.fn.extend({
        queue: function(t, n) {
          var e = 2;
          return "string" != typeof t && (n = t, t = "fx", e--), arguments.length < e ? S.queue(this[0], t) :
            void 0 === n ? this : this.each(function() {
              var e = S.queue(this, t, n);
              S._queueHooks(this, t), "fx" === t && "inprogress" !== e[0] && S.dequeue(this, t)
            })
        },
        dequeue: function(e) {
          return this.each(function() {
            S.dequeue(this, e)
          })
        },
        clearQueue: function(e) {
          return this.queue(e || "fx", [])
        },
        promise: function(e, t) {
          var n, r = 1,
            i = S.Deferred(),
            o = this,
            a = this.length,
            s = function() {
              --r || i.resolveWith(o, [o])
            };
          "string" != typeof e && (t = e, e = void 0), e = e || "fx";
          while (a--)(n = Y.get(o[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
          return s(), i.promise(t)
        }
      });
      var ee = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        te = new RegExp("^(?:([+-])=|)(" + ee + ")([a-z%]*)$", "i"),
        ne = ["Top", "Right", "Bottom", "Left"],
        re = E.documentElement,
        ie = function(e) {
          return S.contains(e.ownerDocument, e)
        },
        oe = {
          composed: !0
        };
      re.getRootNode && (ie = function(e) {
        return S.contains(e.ownerDocument, e) || e.getRootNode(oe) === e.ownerDocument
      });
      var ae = function(e, t) {
        return "none" === (e = t || e).style.display || "" === e.style.display && ie(e) && "none" === S.css(e,
          "display")
      };

      function se(e, t, n, r) {
        var i, o, a = 20,
          s = r ? function() {
            return r.cur()
          } : function() {
            return S.css(e, t, "")
          },
          u = s(),
          l = n && n[3] || (S.cssNumber[t] ? "" : "px"),
          c = e.nodeType && (S.cssNumber[t] || "px" !== l && +u) && te.exec(S.css(e, t));
        if (c && c[3] !== l) {
          u /= 2, l = l || c[3], c = +u || 1;
          while (a--) S.style(e, t, c + l), (1 - o) * (1 - (o = s() / u || .5)) <= 0 && (a = 0), c /= o;
          c *= 2, S.style(e, t, c + l), n = n || []
        }
        return n && (c = +c || +u || 0, i = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = l, r.start = c, r
          .end = i)), i
      }
      var ue = {};

      function le(e, t) {
        for (var n, r, i, o, a, s, u, l = [], c = 0, f = e.length; c < f; c++)(r = e[c]).style && (n = r.style
          .display, t ? ("none" === n && (l[c] = Y.get(r, "display") || null, l[c] || (r.style.display = "")),
            "" === r.style.display && ae(r) && (l[c] = (u = a = o = void 0, a = (i = r).ownerDocument, s = i
              .nodeName, (u = ue[s]) || (o = a.body.appendChild(a.createElement(s)), u = S.css(o, "display"), o
                .parentNode.removeChild(o), "none" === u && (u = "block"), ue[s] = u)))) : "none" !== n && (l[c] =
            "none", Y.set(r, "display", n)));
        for (c = 0; c < f; c++) null != l[c] && (e[c].style.display = l[c]);
        return e
      }
      S.fn.extend({
        show: function() {
          return le(this, !0)
        },
        hide: function() {
          return le(this)
        },
        toggle: function(e) {
          return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function() {
            ae(this) ? S(this).show() : S(this).hide()
          })
        }
      });
      var ce, fe, pe = /^(?:checkbox|radio)$/i,
        de = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i,
        he = /^$|^module$|\/(?:java|ecma)script/i;
      ce = E.createDocumentFragment().appendChild(E.createElement("div")), (fe = E.createElement("input"))
        .setAttribute("type", "radio"), fe.setAttribute("checked", "checked"), fe.setAttribute("name", "t"), ce
        .appendChild(fe), y.checkClone = ce.cloneNode(!0).cloneNode(!0).lastChild.checked, ce.innerHTML =
        "<textarea>x</textarea>", y.noCloneChecked = !!ce.cloneNode(!0).lastChild.defaultValue, ce.innerHTML =
        "<option></option>", y.option = !!ce.lastChild;
      var ge = {
        thead: [1, "<table>", "</table>"],
        col: [2, "<table><colgroup>", "</colgroup></table>"],
        tr: [2, "<table><tbody>", "</tbody></table>"],
        td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
        _default: [0, "", ""]
      };

      function ve(e, t) {
        var n;
        return n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" !=
          typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && A(e, t) ? S.merge([e],
            n) : n
      }

      function ye(e, t) {
        for (var n = 0, r = e.length; n < r; n++) Y.set(e[n], "globalEval", !t || Y.get(t[n], "globalEval"))
      }
      ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead, ge.th = ge.td, y.option || (ge.optgroup = ge
        .option = [1, "<select multiple='multiple'>", "</select>"]);
      var me = /<|&#?\w+;/;

      function xe(e, t, n, r, i) {
        for (var o, a, s, u, l, c, f = t.createDocumentFragment(), p = [], d = 0, h = e.length; d < h; d++)
          if ((o = e[d]) || 0 === o)
            if ("object" === w(o)) S.merge(p, o.nodeType ? [o] : o);
            else if (me.test(o)) {
          a = a || f.appendChild(t.createElement("div")), s = (de.exec(o) || ["", ""])[1].toLowerCase(), u = ge[s] ||
            ge._default, a.innerHTML = u[1] + S.htmlPrefilter(o) + u[2], c = u[0];
          while (c--) a = a.lastChild;
          S.merge(p, a.childNodes), (a = f.firstChild).textContent = ""
        } else p.push(t.createTextNode(o));
        f.textContent = "", d = 0;
        while (o = p[d++])
          if (r && -1 < S.inArray(o, r)) i && i.push(o);
          else if (l = ie(o), a = ve(f.appendChild(o), "script"), l && ye(a), n) {
          c = 0;
          while (o = a[c++]) he.test(o.type || "") && n.push(o)
        }
        return f
      }
      var be = /^([^.]*)(?:\.(.+)|)/;

      function we() {
        return !0
      }

      function Te() {
        return !1
      }

      function Ce(e, t) {
        return e === function() {
          try {
            return E.activeElement
          } catch (e) {}
        }() == ("focus" === t)
      }

      function Ee(e, t, n, r, i, o) {
        var a, s;
        if ("object" == typeof t) {
          for (s in "string" != typeof n && (r = r || n, n = void 0), t) Ee(e, s, n, r, t[s], o);
          return e
        }
        if (null == r && null == i ? (i = n, r = n = void 0) : null == i && ("string" == typeof n ? (i = r, r =
            void 0) : (i = r, r = n, n = void 0)), !1 === i) i = Te;
        else if (!i) return e;
        return 1 === o && (a = i, (i = function(e) {
          return S().off(e), a.apply(this, arguments)
        }).guid = a.guid || (a.guid = S.guid++)), e.each(function() {
          S.event.add(this, t, i, r, n)
        })
      }

      function Se(e, i, o) {
        o ? (Y.set(e, i, !1), S.event.add(e, i, {
          namespace: !1,
          handler: function(e) {
            var t, n, r = Y.get(this, i);
            if (1 & e.isTrigger && this[i]) {
              if (r.length)(S.event.special[i] || {}).delegateType && e.stopPropagation();
              else if (r = s.call(arguments), Y.set(this, i, r), t = o(this, i), this[i](), r !== (n = Y.get(
                  this, i)) || t ? Y.set(this, i, !1) : n = {}, r !== n) return e.stopImmediatePropagation(),
                e.preventDefault(), n && n.value
            } else r.length && (Y.set(this, i, {
              value: S.event.trigger(S.extend(r[0], S.Event.prototype), r.slice(1), this)
            }), e.stopImmediatePropagation())
          }
        })) : void 0 === Y.get(e, i) && S.event.add(e, i, we)
      }
      S.event = {
        global: {},
        add: function(t, e, n, r, i) {
          var o, a, s, u, l, c, f, p, d, h, g, v = Y.get(t);
          if (V(t)) {
            n.handler && (n = (o = n).handler, i = o.selector), i && S.find.matchesSelector(re, i), n.guid || (n
              .guid = S.guid++), (u = v.events) || (u = v.events = Object.create(null)), (a = v.handle) || (a =
              v.handle = function(e) {
                return "undefined" != typeof S && S.event.triggered !== e.type ? S.event.dispatch.apply(t,
                  arguments) : void 0
              }), l = (e = (e || "").match(P) || [""]).length;
            while (l--) d = g = (s = be.exec(e[l]) || [])[1], h = (s[2] || "").split(".").sort(), d && (f = S
              .event.special[d] || {}, d = (i ? f.delegateType : f.bindType) || d, f = S.event.special[d] || {},
              c = S.extend({
                type: d,
                origType: g,
                data: r,
                handler: n,
                guid: n.guid,
                selector: i,
                needsContext: i && S.expr.match.needsContext.test(i),
                namespace: h.join(".")
              }, o), (p = u[d]) || ((p = u[d] = []).delegateCount = 0, f.setup && !1 !== f.setup.call(t, r, h,
                a) || t.addEventListener && t.addEventListener(d, a)), f.add && (f.add.call(t, c), c.handler
                .guid || (c.handler.guid = n.guid)), i ? p.splice(p.delegateCount++, 0, c) : p.push(c), S.event
              .global[d] = !0)
          }
        },
        remove: function(e, t, n, r, i) {
          var o, a, s, u, l, c, f, p, d, h, g, v = Y.hasData(e) && Y.get(e);
          if (v && (u = v.events)) {
            l = (t = (t || "").match(P) || [""]).length;
            while (l--)
              if (d = g = (s = be.exec(t[l]) || [])[1], h = (s[2] || "").split(".").sort(), d) {
                f = S.event.special[d] || {}, p = u[d = (r ? f.delegateType : f.bindType) || d] || [], s = s[2] &&
                  new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = o = p.length;
                while (o--) c = p[o], !i && g !== c.origType || n && n.guid !== c.guid || s && !s.test(c
                  .namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (p.splice(o, 1), c
                  .selector && p.delegateCount--, f.remove && f.remove.call(e, c));
                a && !p.length && (f.teardown && !1 !== f.teardown.call(e, h, v.handle) || S.removeEvent(e, d, v
                  .handle), delete u[d])
              } else
                for (d in u) S.event.remove(e, d + t[l], n, r, !0);
            S.isEmptyObject(u) && Y.remove(e, "handle events")
          }
        },
        dispatch: function(e) {
          var t, n, r, i, o, a, s = new Array(arguments.length),
            u = S.event.fix(e),
            l = (Y.get(this, "events") || Object.create(null))[u.type] || [],
            c = S.event.special[u.type] || {};
          for (s[0] = u, t = 1; t < arguments.length; t++) s[t] = arguments[t];
          if (u.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, u)) {
            a = S.event.handlers.call(this, u, l), t = 0;
            while ((i = a[t++]) && !u.isPropagationStopped()) {
              u.currentTarget = i.elem, n = 0;
              while ((o = i.handlers[n++]) && !u.isImmediatePropagationStopped()) u.rnamespace && !1 !== o
                .namespace && !u.rnamespace.test(o.namespace) || (u.handleObj = o, u.data = o.data, void 0 !== (
                  r = ((S.event.special[o.origType] || {}).handle || o.handler).apply(i.elem, s)) && !1 === (u
                  .result = r) && (u.preventDefault(), u.stopPropagation()))
            }
            return c.postDispatch && c.postDispatch.call(this, u), u.result
          }
        },
        handlers: function(e, t) {
          var n, r, i, o, a, s = [],
            u = t.delegateCount,
            l = e.target;
          if (u && l.nodeType && !("click" === e.type && 1 <= e.button))
            for (; l !== this; l = l.parentNode || this)
              if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
                for (o = [], a = {}, n = 0; n < u; n++) void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r
                  .needsContext ? -1 < S(i, this).index(l) : S.find(i, this, null, [l]).length), a[i] && o.push(
                  r);
                o.length && s.push({
                  elem: l,
                  handlers: o
                })
              } return l = this, u < t.length && s.push({
            elem: l,
            handlers: t.slice(u)
          }), s
        },
        addProp: function(t, e) {
          Object.defineProperty(S.Event.prototype, t, {
            enumerable: !0,
            configurable: !0,
            get: m(e) ? function() {
              if (this.originalEvent) return e(this.originalEvent)
            } : function() {
              if (this.originalEvent) return this.originalEvent[t]
            },
            set: function(e) {
              Object.defineProperty(this, t, {
                enumerable: !0,
                configurable: !0,
                writable: !0,
                value: e
              })
            }
          })
        },
        fix: function(e) {
          return e[S.expando] ? e : new S.Event(e)
        },
        special: {
          load: {
            noBubble: !0
          },
          click: {
            setup: function(e) {
              var t = this || e;
              return pe.test(t.type) && t.click && A(t, "input") && Se(t, "click", we), !1
            },
            trigger: function(e) {
              var t = this || e;
              return pe.test(t.type) && t.click && A(t, "input") && Se(t, "click"), !0
            },
            _default: function(e) {
              var t = e.target;
              return pe.test(t.type) && t.click && A(t, "input") && Y.get(t, "click") || A(t, "a")
            }
          },
          beforeunload: {
            postDispatch: function(e) {
              void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
            }
          }
        }
      }, S.removeEvent = function(e, t, n) {
        e.removeEventListener && e.removeEventListener(t, n)
      }, S.Event = function(e, t) {
        if (!(this instanceof S.Event)) return new S.Event(e, t);
        e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented ||
            void 0 === e.defaultPrevented && !1 === e.returnValue ? we : Te, this.target = e.target && 3 === e
            .target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this
            .relatedTarget = e.relatedTarget) : this.type = e, t && S.extend(this, t), this.timeStamp = e && e
          .timeStamp || Date.now(), this[S.expando] = !0
      }, S.Event.prototype = {
        constructor: S.Event,
        isDefaultPrevented: Te,
        isPropagationStopped: Te,
        isImmediatePropagationStopped: Te,
        isSimulated: !1,
        preventDefault: function() {
          var e = this.originalEvent;
          this.isDefaultPrevented = we, e && !this.isSimulated && e.preventDefault()
        },
        stopPropagation: function() {
          var e = this.originalEvent;
          this.isPropagationStopped = we, e && !this.isSimulated && e.stopPropagation()
        },
        stopImmediatePropagation: function() {
          var e = this.originalEvent;
          this.isImmediatePropagationStopped = we, e && !this.isSimulated && e.stopImmediatePropagation(), this
            .stopPropagation()
        }
      }, S.each({
        altKey: !0,
        bubbles: !0,
        cancelable: !0,
        changedTouches: !0,
        ctrlKey: !0,
        detail: !0,
        eventPhase: !0,
        metaKey: !0,
        pageX: !0,
        pageY: !0,
        shiftKey: !0,
        view: !0,
        "char": !0,
        code: !0,
        charCode: !0,
        key: !0,
        keyCode: !0,
        button: !0,
        buttons: !0,
        clientX: !0,
        clientY: !0,
        offsetX: !0,
        offsetY: !0,
        pointerId: !0,
        pointerType: !0,
        screenX: !0,
        screenY: !0,
        targetTouches: !0,
        toElement: !0,
        touches: !0,
        which: !0
      }, S.event.addProp), S.each({
        focus: "focusin",
        blur: "focusout"
      }, function(e, t) {
        S.event.special[e] = {
          setup: function() {
            return Se(this, e, Ce), !1
          },
          trigger: function() {
            return Se(this, e), !0
          },
          _default: function() {
            return !0
          },
          delegateType: t
        }
      }), S.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
      }, function(e, i) {
        S.event.special[e] = {
          delegateType: i,
          bindType: i,
          handle: function(e) {
            var t, n = e.relatedTarget,
              r = e.handleObj;
            return n && (n === this || S.contains(this, n)) || (e.type = r.origType, t = r.handler.apply(this,
              arguments), e.type = i), t
          }
        }
      }), S.fn.extend({
        on: function(e, t, n, r) {
          return Ee(this, e, t, n, r)
        },
        one: function(e, t, n, r) {
          return Ee(this, e, t, n, r, 1)
        },
        off: function(e, t, n) {
          var r, i;
          if (e && e.preventDefault && e.handleObj) return r = e.handleObj, S(e.delegateTarget).off(r
            .namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
          if ("object" == typeof e) {
            for (i in e) this.off(i, t, e[i]);
            return this
          }
          return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = Te), this.each(
            function() {
              S.event.remove(this, e, n, t)
            })
        }
      });
      var ke = /<script|<style|<link/i,
        Ae = /checked\s*(?:[^=]|=\s*.checked.)/i,
        Ne = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

      function je(e, t) {
        return A(e, "table") && A(11 !== t.nodeType ? t : t.firstChild, "tr") && S(e).children("tbody")[0] || e
      }

      function De(e) {
        return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
      }

      function qe(e) {
        return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e
      }

      function Le(e, t) {
        var n, r, i, o, a, s;
        if (1 === t.nodeType) {
          if (Y.hasData(e) && (s = Y.get(e).events))
            for (i in Y.remove(t, "handle events"), s)
              for (n = 0, r = s[i].length; n < r; n++) S.event.add(t, i, s[i][n]);
          Q.hasData(e) && (o = Q.access(e), a = S.extend({}, o), Q.set(t, a))
        }
      }

      function He(n, r, i, o) {
        r = g(r);
        var e, t, a, s, u, l, c = 0,
          f = n.length,
          p = f - 1,
          d = r[0],
          h = m(d);
        if (h || 1 < f && "string" == typeof d && !y.checkClone && Ae.test(d)) return n.each(function(e) {
          var t = n.eq(e);
          h && (r[0] = d.call(this, e, t.html())), He(t, r, i, o)
        });
        if (f && (t = (e = xe(r, n[0].ownerDocument, !1, n, o)).firstChild, 1 === e.childNodes.length && (e = t), t ||
            o)) {
          for (s = (a = S.map(ve(e, "script"), De)).length; c < f; c++) u = e, c !== p && (u = S.clone(u, !0, !0),
            s && S.merge(a, ve(u, "script"))), i.call(n[c], u, c);
          if (s)
            for (l = a[a.length - 1].ownerDocument, S.map(a, qe), c = 0; c < s; c++) u = a[c], he.test(u.type ||
              "") && !Y.access(u, "globalEval") && S.contains(l, u) && (u.src && "module" !== (u.type || "")
                .toLowerCase() ? S._evalUrl && !u.noModule && S._evalUrl(u.src, {
                  nonce: u.nonce || u.getAttribute("nonce")
                }, l) : b(u.textContent.replace(Ne, ""), u, l))
        }
        return n
      }

      function Oe(e, t, n) {
        for (var r, i = t ? S.filter(t, e) : e, o = 0; null != (r = i[o]); o++) n || 1 !== r.nodeType || S.cleanData(
          ve(r)), r.parentNode && (n && ie(r) && ye(ve(r, "script")), r.parentNode.removeChild(r));
        return e
      }
      S.extend({
        htmlPrefilter: function(e) {
          return e
        },
        clone: function(e, t, n) {
          var r, i, o, a, s, u, l, c = e.cloneNode(!0),
            f = ie(e);
          if (!(y.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || S.isXMLDoc(e)))
            for (a = ve(c), r = 0, i = (o = ve(e)).length; r < i; r++) s = o[r], u = a[r], void 0, "input" === (
                l = u.nodeName.toLowerCase()) && pe.test(s.type) ? u.checked = s.checked : "input" !== l &&
              "textarea" !== l || (u.defaultValue = s.defaultValue);
          if (t)
            if (n)
              for (o = o || ve(e), a = a || ve(c), r = 0, i = o.length; r < i; r++) Le(o[r], a[r]);
            else Le(e, c);
          return 0 < (a = ve(c, "script")).length && ye(a, !f && ve(e, "script")), c
        },
        cleanData: function(e) {
          for (var t, n, r, i = S.event.special, o = 0; void 0 !== (n = e[o]); o++)
            if (V(n)) {
              if (t = n[Y.expando]) {
                if (t.events)
                  for (r in t.events) i[r] ? S.event.remove(n, r) : S.removeEvent(n, r, t.handle);
                n[Y.expando] = void 0
              }
              n[Q.expando] && (n[Q.expando] = void 0)
            }
        }
      }), S.fn.extend({
        detach: function(e) {
          return Oe(this, e, !0)
        },
        remove: function(e) {
          return Oe(this, e)
        },
        text: function(e) {
          return $(this, function(e) {
            return void 0 === e ? S.text(this) : this.empty().each(function() {
              1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent =
                e)
            })
          }, null, e, arguments.length)
        },
        append: function() {
          return He(this, arguments, function(e) {
            1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || je(this, e).appendChild(e)
          })
        },
        prepend: function() {
          return He(this, arguments, function(e) {
            if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
              var t = je(this, e);
              t.insertBefore(e, t.firstChild)
            }
          })
        },
        before: function() {
          return He(this, arguments, function(e) {
            this.parentNode && this.parentNode.insertBefore(e, this)
          })
        },
        after: function() {
          return He(this, arguments, function(e) {
            this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
          })
        },
        empty: function() {
          for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (S.cleanData(ve(e, !1)), e
            .textContent = "");
          return this
        },
        clone: function(e, t) {
          return e = null != e && e, t = null == t ? e : t, this.map(function() {
            return S.clone(this, e, t)
          })
        },
        html: function(e) {
          return $(this, function(e) {
            var t = this[0] || {},
              n = 0,
              r = this.length;
            if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
            if ("string" == typeof e && !ke.test(e) && !ge[(de.exec(e) || ["", ""])[1].toLowerCase()]) {
              e = S.htmlPrefilter(e);
              try {
                for (; n < r; n++) 1 === (t = this[n] || {}).nodeType && (S.cleanData(ve(t, !1)), t
                  .innerHTML = e);
                t = 0
              } catch (e) {}
            }
            t && this.empty().append(e)
          }, null, e, arguments.length)
        },
        replaceWith: function() {
          var n = [];
          return He(this, arguments, function(e) {
            var t = this.parentNode;
            S.inArray(this, n) < 0 && (S.cleanData(ve(this)), t && t.replaceChild(e, this))
          }, n)
        }
      }), S.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
      }, function(e, a) {
        S.fn[e] = function(e) {
          for (var t, n = [], r = S(e), i = r.length - 1, o = 0; o <= i; o++) t = o === i ? this : this.clone(!
            0), S(r[o])[a](t), u.apply(n, t.get());
          return this.pushStack(n)
        }
      });
      var Pe = new RegExp("^(" + ee + ")(?!px)[a-z%]+$", "i"),
        Re = function(e) {
          var t = e.ownerDocument.defaultView;
          return t && t.opener || (t = C), t.getComputedStyle(e)
        },
        Me = function(e, t, n) {
          var r, i, o = {};
          for (i in t) o[i] = e.style[i], e.style[i] = t[i];
          for (i in r = n.call(e), t) e.style[i] = o[i];
          return r
        },
        Ie = new RegExp(ne.join("|"), "i");

      function We(e, t, n) {
        var r, i, o, a, s = e.style;
        return (n = n || Re(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || ie(e) || (a = S.style(e, t)), !y
            .pixelBoxStyles() && Pe.test(a) && Ie.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s
              .minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)),
          void 0 !== a ? a + "" : a
      }

      function Fe(e, t) {
        return {
          get: function() {
            if (!e()) return (this.get = t).apply(this, arguments);
            delete this.get
          }
        }
      }! function() {
        function e() {
          if (l) {
            u.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", l.style
              .cssText =
              "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",
              re.appendChild(u).appendChild(l);
            var e = C.getComputedStyle(l);
            n = "1%" !== e.top, s = 12 === t(e.marginLeft), l.style.right = "60%", o = 36 === t(e.right), r = 36 ===
              t(e.width), l.style.position = "absolute", i = 12 === t(l.offsetWidth / 3), re.removeChild(u), l = null
          }
        }

        function t(e) {
          return Math.round(parseFloat(e))
        }
        var n, r, i, o, a, s, u = E.createElement("div"),
          l = E.createElement("div");
        l.style && (l.style.backgroundClip = "content-box", l.cloneNode(!0).style.backgroundClip = "", y
          .clearCloneStyle = "content-box" === l.style.backgroundClip, S.extend(y, {
            boxSizingReliable: function() {
              return e(), r
            },
            pixelBoxStyles: function() {
              return e(), o
            },
            pixelPosition: function() {
              return e(), n
            },
            reliableMarginLeft: function() {
              return e(), s
            },
            scrollboxSize: function() {
              return e(), i
            },
            reliableTrDimensions: function() {
              var e, t, n, r;
              return null == a && (e = E.createElement("table"), t = E.createElement("tr"), n = E.createElement(
                  "div"), e.style.cssText = "position:absolute;left:-11111px;border-collapse:separate", t
                .style.cssText = "border:1px solid", t.style.height = "1px", n.style.height = "9px", n.style
                .display = "block", re.appendChild(e).appendChild(t).appendChild(n), r = C.getComputedStyle(
                t), a = parseInt(r.height, 10) + parseInt(r.borderTopWidth, 10) + parseInt(r
                  .borderBottomWidth, 10) === t.offsetHeight, re.removeChild(e)), a
            }
          }))
      }();
      var Be = ["Webkit", "Moz", "ms"],
        $e = E.createElement("div").style,
        _e = {};

      function ze(e) {
        var t = S.cssProps[e] || _e[e];
        return t || (e in $e ? e : _e[e] = function(e) {
          var t = e[0].toUpperCase() + e.slice(1),
            n = Be.length;
          while (n--)
            if ((e = Be[n] + t) in $e) return e
        }(e) || e)
      }
      var Ue = /^(none|table(?!-c[ea]).+)/,
        Xe = /^--/,
        Ve = {
          position: "absolute",
          visibility: "hidden",
          display: "block"
        },
        Ge = {
          letterSpacing: "0",
          fontWeight: "400"
        };

      function Ye(e, t, n) {
        var r = te.exec(t);
        return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t
      }

      function Qe(e, t, n, r, i, o) {
        var a = "width" === t ? 1 : 0,
          s = 0,
          u = 0;
        if (n === (r ? "border" : "content")) return 0;
        for (; a < 4; a += 2) "margin" === n && (u += S.css(e, n + ne[a], !0, i)), r ? ("content" === n && (u -= S
            .css(e, "padding" + ne[a], !0, i)), "margin" !== n && (u -= S.css(e, "border" + ne[a] + "Width", !0,
          i))) : (u += S.css(e, "padding" + ne[a], !0, i), "padding" !== n ? u += S.css(e, "border" + ne[a] +
          "Width", !0, i) : s += S.css(e, "border" + ne[a] + "Width", !0, i));
        return !r && 0 <= o && (u += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - u - s -
          .5)) || 0), u
      }

      function Je(e, t, n) {
        var r = Re(e),
          i = (!y.boxSizingReliable() || n) && "border-box" === S.css(e, "boxSizing", !1, r),
          o = i,
          a = We(e, t, r),
          s = "offset" + t[0].toUpperCase() + t.slice(1);
        if (Pe.test(a)) {
          if (!n) return a;
          a = "auto"
        }
        return (!y.boxSizingReliable() && i || !y.reliableTrDimensions() && A(e, "tr") || "auto" === a || !parseFloat(
          a) && "inline" === S.css(e, "display", !1, r)) && e.getClientRects().length && (i = "border-box" === S
          .css(e, "boxSizing", !1, r), (o = s in e) && (a = e[s])), (a = parseFloat(a) || 0) + Qe(e, t, n || (i ?
          "border" : "content"), o, r, a) + "px"
      }

      function Ke(e, t, n, r, i) {
        return new Ke.prototype.init(e, t, n, r, i)
      }
      S.extend({
        cssHooks: {
          opacity: {
            get: function(e, t) {
              if (t) {
                var n = We(e, "opacity");
                return "" === n ? "1" : n
              }
            }
          }
        },
        cssNumber: {
          animationIterationCount: !0,
          columnCount: !0,
          fillOpacity: !0,
          flexGrow: !0,
          flexShrink: !0,
          fontWeight: !0,
          gridArea: !0,
          gridColumn: !0,
          gridColumnEnd: !0,
          gridColumnStart: !0,
          gridRow: !0,
          gridRowEnd: !0,
          gridRowStart: !0,
          lineHeight: !0,
          opacity: !0,
          order: !0,
          orphans: !0,
          widows: !0,
          zIndex: !0,
          zoom: !0
        },
        cssProps: {},
        style: function(e, t, n, r) {
          if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
            var i, o, a, s = X(t),
              u = Xe.test(t),
              l = e.style;
            if (u || (t = ze(s)), a = S.cssHooks[t] || S.cssHooks[s], void 0 === n) return a && "get" in a &&
              void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
            "string" === (o = typeof n) && (i = te.exec(n)) && i[1] && (n = se(e, t, i), o = "number"), null !=
              n && n == n && ("number" !== o || u || (n += i && i[3] || (S.cssNumber[s] ? "" : "px")), y
                .clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), a &&
                "set" in a && void 0 === (n = a.set(e, n, r)) || (u ? l.setProperty(t, n) : l[t] = n))
          }
        },
        css: function(e, t, n, r) {
          var i, o, a, s = X(t);
          return Xe.test(t) || (t = ze(s)), (a = S.cssHooks[t] || S.cssHooks[s]) && "get" in a && (i = a.get(e,
              !0, n)), void 0 === i && (i = We(e, t, r)), "normal" === i && t in Ge && (i = Ge[t]), "" === n ||
            n ? (o = parseFloat(i), !0 === n || isFinite(o) ? o || 0 : i) : i
        }
      }), S.each(["height", "width"], function(e, u) {
        S.cssHooks[u] = {
          get: function(e, t, n) {
            if (t) return !Ue.test(S.css(e, "display")) || e.getClientRects().length && e
              .getBoundingClientRect().width ? Je(e, u, n) : Me(e, Ve, function() {
                return Je(e, u, n)
              })
          },
          set: function(e, t, n) {
            var r, i = Re(e),
              o = !y.scrollboxSize() && "absolute" === i.position,
              a = (o || n) && "border-box" === S.css(e, "boxSizing", !1, i),
              s = n ? Qe(e, u, n, a, i) : 0;
            return a && o && (s -= Math.ceil(e["offset" + u[0].toUpperCase() + u.slice(1)] - parseFloat(i[
              u]) - Qe(e, u, "border", !1, i) - .5)), s && (r = te.exec(t)) && "px" !== (r[3] || "px") && (e
              .style[u] = t, t = S.css(e, u)), Ye(0, t, s)
          }
        }
      }), S.cssHooks.marginLeft = Fe(y.reliableMarginLeft, function(e, t) {
        if (t) return (parseFloat(We(e, "marginLeft")) || e.getBoundingClientRect().left - Me(e, {
          marginLeft: 0
        }, function() {
          return e.getBoundingClientRect().left
        })) + "px"
      }), S.each({
        margin: "",
        padding: "",
        border: "Width"
      }, function(i, o) {
        S.cssHooks[i + o] = {
          expand: function(e) {
            for (var t = 0, n = {}, r = "string" == typeof e ? e.split(" ") : [e]; t < 4; t++) n[i + ne[t] +
              o] = r[t] || r[t - 2] || r[0];
            return n
          }
        }, "margin" !== i && (S.cssHooks[i + o].set = Ye)
      }), S.fn.extend({
        css: function(e, t) {
          return $(this, function(e, t, n) {
            var r, i, o = {},
              a = 0;
            if (Array.isArray(t)) {
              for (r = Re(e), i = t.length; a < i; a++) o[t[a]] = S.css(e, t[a], !1, r);
              return o
            }
            return void 0 !== n ? S.style(e, t, n) : S.css(e, t)
          }, e, t, 1 < arguments.length)
        }
      }), ((S.Tween = Ke).prototype = {
        constructor: Ke,
        init: function(e, t, n, r, i, o) {
          this.elem = e, this.prop = n, this.easing = i || S.easing._default, this.options = t, this.start =
            this.now = this.cur(), this.end = r, this.unit = o || (S.cssNumber[n] ? "" : "px")
        },
        cur: function() {
          var e = Ke.propHooks[this.prop];
          return e && e.get ? e.get(this) : Ke.propHooks._default.get(this)
        },
        run: function(e) {
          var t, n = Ke.propHooks[this.prop];
          return this.options.duration ? this.pos = t = S.easing[this.easing](e, this.options.duration * e, 0,
              1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start,
            this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) :
            Ke.propHooks._default.set(this), this
        }
      }).init.prototype = Ke.prototype, (Ke.propHooks = {
        _default: {
          get: function(e) {
            var t;
            return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e
              .prop] : (t = S.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0
          },
          set: function(e) {
            S.fx.step[e.prop] ? S.fx.step[e.prop](e) : 1 !== e.elem.nodeType || !S.cssHooks[e.prop] && null == e
              .elem.style[ze(e.prop)] ? e.elem[e.prop] = e.now : S.style(e.elem, e.prop, e.now + e.unit)
          }
        }
      }).scrollTop = Ke.propHooks.scrollLeft = {
        set: function(e) {
          e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
        }
      }, S.easing = {
        linear: function(e) {
          return e
        },
        swing: function(e) {
          return .5 - Math.cos(e * Math.PI) / 2
        },
        _default: "swing"
      }, S.fx = Ke.prototype.init, S.fx.step = {};
      var Ze, et, tt, nt, rt = /^(?:toggle|show|hide)$/,
        it = /queueHooks$/;

      function ot() {
        et && (!1 === E.hidden && C.requestAnimationFrame ? C.requestAnimationFrame(ot) : C.setTimeout(ot, S.fx
          .interval), S.fx.tick())
      }

      function at() {
        return C.setTimeout(function() {
          Ze = void 0
        }), Ze = Date.now()
      }

      function st(e, t) {
        var n, r = 0,
          i = {
            height: e
          };
        for (t = t ? 1 : 0; r < 4; r += 2 - t) i["margin" + (n = ne[r])] = i["padding" + n] = e;
        return t && (i.opacity = i.width = e), i
      }

      function ut(e, t, n) {
        for (var r, i = (lt.tweeners[t] || []).concat(lt.tweeners["*"]), o = 0, a = i.length; o < a; o++)
          if (r = i[o].call(n, t, e)) return r
      }

      function lt(o, e, t) {
        var n, a, r = 0,
          i = lt.prefilters.length,
          s = S.Deferred().always(function() {
            delete u.elem
          }),
          u = function() {
            if (a) return !1;
            for (var e = Ze || at(), t = Math.max(0, l.startTime + l.duration - e), n = 1 - (t / l.duration || 0), r =
                0, i = l.tweens.length; r < i; r++) l.tweens[r].run(n);
            return s.notifyWith(o, [l, n, t]), n < 1 && i ? t : (i || s.notifyWith(o, [l, 1, 0]), s.resolveWith(o, [
              l]), !1)
          },
          l = s.promise({
            elem: o,
            props: S.extend({}, e),
            opts: S.extend(!0, {
              specialEasing: {},
              easing: S.easing._default
            }, t),
            originalProperties: e,
            originalOptions: t,
            startTime: Ze || at(),
            duration: t.duration,
            tweens: [],
            createTween: function(e, t) {
              var n = S.Tween(o, l.opts, e, t, l.opts.specialEasing[e] || l.opts.easing);
              return l.tweens.push(n), n
            },
            stop: function(e) {
              var t = 0,
                n = e ? l.tweens.length : 0;
              if (a) return this;
              for (a = !0; t < n; t++) l.tweens[t].run(1);
              return e ? (s.notifyWith(o, [l, 1, 0]), s.resolveWith(o, [l, e])) : s.rejectWith(o, [l, e]), this
            }
          }),
          c = l.props;
        for (! function(e, t) {
            var n, r, i, o, a;
            for (n in e)
              if (i = t[r = X(n)], o = e[n], Array.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o,
                  delete e[n]), (a = S.cssHooks[r]) && "expand" in a)
                for (n in o = a.expand(o), delete e[r], o) n in e || (e[n] = o[n], t[n] = i);
              else t[r] = i
          }(c, l.opts.specialEasing); r < i; r++)
          if (n = lt.prefilters[r].call(l, o, c, l.opts)) return m(n.stop) && (S._queueHooks(l.elem, l.opts.queue)
            .stop = n.stop.bind(n)), n;
        return S.map(c, ut, l), m(l.opts.start) && l.opts.start.call(o, l), l.progress(l.opts.progress).done(l.opts
          .done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), S.fx.timer(S.extend(u, {
          elem: o,
          anim: l,
          queue: l.opts.queue
        })), l
      }
      S.Animation = S.extend(lt, {
          tweeners: {
            "*": [function(e, t) {
              var n = this.createTween(e, t);
              return se(n.elem, e, te.exec(t), n), n
            }]
          },
          tweener: function(e, t) {
            m(e) ? (t = e, e = ["*"]) : e = e.match(P);
            for (var n, r = 0, i = e.length; r < i; r++) n = e[r], lt.tweeners[n] = lt.tweeners[n] || [], lt
              .tweeners[n].unshift(t)
          },
          prefilters: [function(e, t, n) {
            var r, i, o, a, s, u, l, c, f = "width" in t || "height" in t,
              p = this,
              d = {},
              h = e.style,
              g = e.nodeType && ae(e),
              v = Y.get(e, "fxshow");
            for (r in n.queue || (null == (a = S._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty
                .fire, a.empty.fire = function() {
                  a.unqueued || s()
                }), a.unqueued++, p.always(function() {
                p.always(function() {
                  a.unqueued--, S.queue(e, "fx").length || a.empty.fire()
                })
              })), t)
              if (i = t[r], rt.test(i)) {
                if (delete t[r], o = o || "toggle" === i, i === (g ? "hide" : "show")) {
                  if ("show" !== i || !v || void 0 === v[r]) continue;
                  g = !0
                }
                d[r] = v && v[r] || S.style(e, r)
              } if ((u = !S.isEmptyObject(t)) || !S.isEmptyObject(d))
              for (r in f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (
                  l = v && v.display) && (l = Y.get(e, "display")), "none" === (c = S.css(e, "display")) && (
                  l ? c = l : (le([e], !0), l = e.style.display || l, c = S.css(e, "display"), le([e]))), (
                  "inline" === c || "inline-block" === c && null != l) && "none" === S.css(e, "float") && (
                  u || (p.done(function() {
                    h.display = l
                  }), null == l && (c = h.display, l = "none" === c ? "" : c)), h.display = "inline-block")), n
                .overflow && (h.overflow = "hidden", p.always(function() {
                  h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2]
                })), u = !1, d) u || (v ? "hidden" in v && (g = v.hidden) : v = Y.access(e, "fxshow", {
                display: l
              }), o && (v.hidden = !g), g && le([e], !0), p.done(function() {
                for (r in g || le([e]), Y.remove(e, "fxshow"), d) S.style(e, r, d[r])
              })), u = ut(g ? v[r] : 0, r, p), r in v || (v[r] = u.start, g && (u.end = u.start, u.start = 0))
          }],
          prefilter: function(e, t) {
            t ? lt.prefilters.unshift(e) : lt.prefilters.push(e)
          }
        }), S.speed = function(e, t, n) {
          var r = e && "object" == typeof e ? S.extend({}, e) : {
            complete: n || !n && t || m(e) && e,
            duration: e,
            easing: n && t || t && !m(t) && t
          };
          return S.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in S.fx.speeds ? r
              .duration = S.fx.speeds[r.duration] : r.duration = S.fx.speeds._default), null != r.queue && !0 !== r
            .queue || (r.queue = "fx"), r.old = r.complete, r.complete = function() {
              m(r.old) && r.old.call(this), r.queue && S.dequeue(this, r.queue)
            }, r
        }, S.fn.extend({
          fadeTo: function(e, t, n, r) {
            return this.filter(ae).css("opacity", 0).show().end().animate({
              opacity: t
            }, e, n, r)
          },
          animate: function(t, e, n, r) {
            var i = S.isEmptyObject(t),
              o = S.speed(e, n, r),
              a = function() {
                var e = lt(this, S.extend({}, t), o);
                (i || Y.get(this, "finish")) && e.stop(!0)
              };
            return a.finish = a, i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
          },
          stop: function(i, e, o) {
            var a = function(e) {
              var t = e.stop;
              delete e.stop, t(o)
            };
            return "string" != typeof i && (o = e, e = i, i = void 0), e && this.queue(i || "fx", []), this.each(
              function() {
                var e = !0,
                  t = null != i && i + "queueHooks",
                  n = S.timers,
                  r = Y.get(this);
                if (t) r[t] && r[t].stop && a(r[t]);
                else
                  for (t in r) r[t] && r[t].stop && it.test(t) && a(r[t]);
                for (t = n.length; t--;) n[t].elem !== this || null != i && n[t].queue !== i || (n[t].anim.stop(
                  o), e = !1, n.splice(t, 1));
                !e && o || S.dequeue(this, i)
              })
          },
          finish: function(a) {
            return !1 !== a && (a = a || "fx"), this.each(function() {
              var e, t = Y.get(this),
                n = t[a + "queue"],
                r = t[a + "queueHooks"],
                i = S.timers,
                o = n ? n.length : 0;
              for (t.finish = !0, S.queue(this, a, []), r && r.stop && r.stop.call(this, !0), e = i
                .length; e--;) i[e].elem === this && i[e].queue === a && (i[e].anim.stop(!0), i.splice(e, 1));
              for (e = 0; e < o; e++) n[e] && n[e].finish && n[e].finish.call(this);
              delete t.finish
            })
          }
        }), S.each(["toggle", "show", "hide"], function(e, r) {
          var i = S.fn[r];
          S.fn[r] = function(e, t, n) {
            return null == e || "boolean" == typeof e ? i.apply(this, arguments) : this.animate(st(r, !0), e, t,
              n)
          }
        }), S.each({
          slideDown: st("show"),
          slideUp: st("hide"),
          slideToggle: st("toggle"),
          fadeIn: {
            opacity: "show"
          },
          fadeOut: {
            opacity: "hide"
          },
          fadeToggle: {
            opacity: "toggle"
          }
        }, function(e, r) {
          S.fn[e] = function(e, t, n) {
            return this.animate(r, e, t, n)
          }
        }), S.timers = [], S.fx.tick = function() {
          var e, t = 0,
            n = S.timers;
          for (Ze = Date.now(); t < n.length; t++)(e = n[t])() || n[t] !== e || n.splice(t--, 1);
          n.length || S.fx.stop(), Ze = void 0
        }, S.fx.timer = function(e) {
          S.timers.push(e), S.fx.start()
        }, S.fx.interval = 13, S.fx.start = function() {
          et || (et = !0, ot())
        }, S.fx.stop = function() {
          et = null
        }, S.fx.speeds = {
          slow: 600,
          fast: 200,
          _default: 400
        }, S.fn.delay = function(r, e) {
          return r = S.fx && S.fx.speeds[r] || r, e = e || "fx", this.queue(e, function(e, t) {
            var n = C.setTimeout(e, r);
            t.stop = function() {
              C.clearTimeout(n)
            }
          })
        }, tt = E.createElement("input"), nt = E.createElement("select").appendChild(E.createElement("option")), tt
        .type = "checkbox", y.checkOn = "" !== tt.value, y.optSelected = nt.selected, (tt = E.createElement("input"))
        .value = "t", tt.type = "radio", y.radioValue = "t" === tt.value;
      var ct, ft = S.expr.attrHandle;
      S.fn.extend({
        attr: function(e, t) {
          return $(this, S.attr, e, t, 1 < arguments.length)
        },
        removeAttr: function(e) {
          return this.each(function() {
            S.removeAttr(this, e)
          })
        }
      }), S.extend({
        attr: function(e, t, n) {
          var r, i, o = e.nodeType;
          if (3 !== o && 8 !== o && 2 !== o) return "undefined" == typeof e.getAttribute ? S.prop(e, t, n) : (
            1 === o && S.isXMLDoc(e) || (i = S.attrHooks[t.toLowerCase()] || (S.expr.match.bool.test(t) ?
              ct : void 0)), void 0 !== n ? null === n ? void S.removeAttr(e, t) : i && "set" in i &&
            void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : i && "get" in i &&
            null !== (r = i.get(e, t)) ? r : null == (r = S.find.attr(e, t)) ? void 0 : r)
        },
        attrHooks: {
          type: {
            set: function(e, t) {
              if (!y.radioValue && "radio" === t && A(e, "input")) {
                var n = e.value;
                return e.setAttribute("type", t), n && (e.value = n), t
              }
            }
          }
        },
        removeAttr: function(e, t) {
          var n, r = 0,
            i = t && t.match(P);
          if (i && 1 === e.nodeType)
            while (n = i[r++]) e.removeAttribute(n)
        }
      }), ct = {
        set: function(e, t, n) {
          return !1 === t ? S.removeAttr(e, n) : e.setAttribute(n, n), n
        }
      }, S.each(S.expr.match.bool.source.match(/\w+/g), function(e, t) {
        var a = ft[t] || S.find.attr;
        ft[t] = function(e, t, n) {
          var r, i, o = t.toLowerCase();
          return n || (i = ft[o], ft[o] = r, r = null != a(e, t, n) ? o : null, ft[o] = i), r
        }
      });
      var pt = /^(?:input|select|textarea|button)$/i,
        dt = /^(?:a|area)$/i;

      function ht(e) {
        return (e.match(P) || []).join(" ")
      }

      function gt(e) {
        return e.getAttribute && e.getAttribute("class") || ""
      }

      function vt(e) {
        return Array.isArray(e) ? e : "string" == typeof e && e.match(P) || []
      }
      S.fn.extend({
        prop: function(e, t) {
          return $(this, S.prop, e, t, 1 < arguments.length)
        },
        removeProp: function(e) {
          return this.each(function() {
            delete this[S.propFix[e] || e]
          })
        }
      }), S.extend({
        prop: function(e, t, n) {
          var r, i, o = e.nodeType;
          if (3 !== o && 8 !== o && 2 !== o) return 1 === o && S.isXMLDoc(e) || (t = S.propFix[t] || t, i = S
              .propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] =
            n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t]
        },
        propHooks: {
          tabIndex: {
            get: function(e) {
              var t = S.find.attr(e, "tabindex");
              return t ? parseInt(t, 10) : pt.test(e.nodeName) || dt.test(e.nodeName) && e.href ? 0 : -1
            }
          }
        },
        propFix: {
          "for": "htmlFor",
          "class": "className"
        }
      }), y.optSelected || (S.propHooks.selected = {
        get: function(e) {
          var t = e.parentNode;
          return t && t.parentNode && t.parentNode.selectedIndex, null
        },
        set: function(e) {
          var t = e.parentNode;
          t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
        }
      }), S.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap",
        "frameBorder", "contentEditable"
      ], function() {
        S.propFix[this.toLowerCase()] = this
      }), S.fn.extend({
        addClass: function(t) {
          var e, n, r, i, o, a, s, u = 0;
          if (m(t)) return this.each(function(e) {
            S(this).addClass(t.call(this, e, gt(this)))
          });
          if ((e = vt(t)).length)
            while (n = this[u++])
              if (i = gt(n), r = 1 === n.nodeType && " " + ht(i) + " ") {
                a = 0;
                while (o = e[a++]) r.indexOf(" " + o + " ") < 0 && (r += o + " ");
                i !== (s = ht(r)) && n.setAttribute("class", s)
              } return this
        },
        removeClass: function(t) {
          var e, n, r, i, o, a, s, u = 0;
          if (m(t)) return this.each(function(e) {
            S(this).removeClass(t.call(this, e, gt(this)))
          });
          if (!arguments.length) return this.attr("class", "");
          if ((e = vt(t)).length)
            while (n = this[u++])
              if (i = gt(n), r = 1 === n.nodeType && " " + ht(i) + " ") {
                a = 0;
                while (o = e[a++])
                  while (-1 < r.indexOf(" " + o + " ")) r = r.replace(" " + o + " ", " ");
                i !== (s = ht(r)) && n.setAttribute("class", s)
              } return this
        },
        toggleClass: function(i, t) {
          var o = typeof i,
            a = "string" === o || Array.isArray(i);
          return "boolean" == typeof t && a ? t ? this.addClass(i) : this.removeClass(i) : m(i) ? this.each(
            function(e) {
              S(this).toggleClass(i.call(this, e, gt(this), t), t)
            }) : this.each(function() {
            var e, t, n, r;
            if (a) {
              t = 0, n = S(this), r = vt(i);
              while (e = r[t++]) n.hasClass(e) ? n.removeClass(e) : n.addClass(e)
            } else void 0 !== i && "boolean" !== o || ((e = gt(this)) && Y.set(this, "__className__", e),
              this.setAttribute && this.setAttribute("class", e || !1 === i ? "" : Y.get(this,
                "__className__") || ""))
          })
        },
        hasClass: function(e) {
          var t, n, r = 0;
          t = " " + e + " ";
          while (n = this[r++])
            if (1 === n.nodeType && -1 < (" " + ht(gt(n)) + " ").indexOf(t)) return !0;
          return !1
        }
      });
      var yt = /\r/g;
      S.fn.extend({
        val: function(n) {
          var r, e, i, t = this[0];
          return arguments.length ? (i = m(n), this.each(function(e) {
              var t;
              1 === this.nodeType && (null == (t = i ? n.call(this, e, S(this).val()) : n) ? t = "" :
                "number" == typeof t ? t += "" : Array.isArray(t) && (t = S.map(t, function(e) {
                  return null == e ? "" : e + ""
                })), (r = S.valHooks[this.type] || S.valHooks[this.nodeName.toLowerCase()]) && "set" in
                r && void 0 !== r.set(this, t, "value") || (this.value = t))
            })) : t ? (r = S.valHooks[t.type] || S.valHooks[t.nodeName.toLowerCase()]) && "get" in r &&
            void 0 !== (e = r.get(t, "value")) ? e : "string" == typeof(e = t.value) ? e.replace(yt, "") :
            null == e ? "" : e : void 0
        }
      }), S.extend({
        valHooks: {
          option: {
            get: function(e) {
              var t = S.find.attr(e, "value");
              return null != t ? t : ht(S.text(e))
            }
          },
          select: {
            get: function(e) {
              var t, n, r, i = e.options,
                o = e.selectedIndex,
                a = "select-one" === e.type,
                s = a ? null : [],
                u = a ? o + 1 : i.length;
              for (r = o < 0 ? u : a ? o : 0; r < u; r++)
                if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !A(n
                    .parentNode, "optgroup"))) {
                  if (t = S(n).val(), a) return t;
                  s.push(t)
                } return s
            },
            set: function(e, t) {
              var n, r, i = e.options,
                o = S.makeArray(t),
                a = i.length;
              while (a--)((r = i[a]).selected = -1 < S.inArray(S.valHooks.option.get(r), o)) && (n = !0);
              return n || (e.selectedIndex = -1), o
            }
          }
        }
      }), S.each(["radio", "checkbox"], function() {
        S.valHooks[this] = {
          set: function(e, t) {
            if (Array.isArray(t)) return e.checked = -1 < S.inArray(S(e).val(), t)
          }
        }, y.checkOn || (S.valHooks[this].get = function(e) {
          return null === e.getAttribute("value") ? "on" : e.value
        })
      }), y.focusin = "onfocusin" in C;
      var mt = /^(?:focusinfocus|focusoutblur)$/,
        xt = function(e) {
          e.stopPropagation()
        };
      S.extend(S.event, {
        trigger: function(e, t, n, r) {
          var i, o, a, s, u, l, c, f, p = [n || E],
            d = v.call(e, "type") ? e.type : e,
            h = v.call(e, "namespace") ? e.namespace.split(".") : [];
          if (o = f = a = n = n || E, 3 !== n.nodeType && 8 !== n.nodeType && !mt.test(d + S.event.triggered) &&
            (-1 < d.indexOf(".") && (d = (h = d.split(".")).shift(), h.sort()), u = d.indexOf(":") < 0 && "on" +
              d, (e = e[S.expando] ? e : new S.Event(d, "object" == typeof e && e)).isTrigger = r ? 2 : 3, e
              .namespace = h.join("."), e.rnamespace = e.namespace ? new RegExp("(^|\\.)" + h.join(
                "\\.(?:.*\\.|)") + "(\\.|$)") : null, e.result = void 0, e.target || (e.target = n), t = null ==
              t ? [e] : S.makeArray(t, [e]), c = S.event.special[d] || {}, r || !c.trigger || !1 !== c.trigger
              .apply(n, t))) {
            if (!r && !c.noBubble && !x(n)) {
              for (s = c.delegateType || d, mt.test(s + d) || (o = o.parentNode); o; o = o.parentNode) p.push(
                o), a = o;
              a === (n.ownerDocument || E) && p.push(a.defaultView || a.parentWindow || C)
            }
            i = 0;
            while ((o = p[i++]) && !e.isPropagationStopped()) f = o, e.type = 1 < i ? s : c.bindType || d, (l =
              (Y.get(o, "events") || Object.create(null))[e.type] && Y.get(o, "handle")) && l.apply(o, t), (
              l = u && o[u]) && l.apply && V(o) && (e.result = l.apply(o, t), !1 === e.result && e
              .preventDefault());
            return e.type = d, r || e.isDefaultPrevented() || c._default && !1 !== c._default.apply(p.pop(),
              t) || !V(n) || u && m(n[d]) && !x(n) && ((a = n[u]) && (n[u] = null), S.event.triggered = d, e
                .isPropagationStopped() && f.addEventListener(d, xt), n[d](), e.isPropagationStopped() && f
                .removeEventListener(d, xt), S.event.triggered = void 0, a && (n[u] = a)), e.result
          }
        },
        simulate: function(e, t, n) {
          var r = S.extend(new S.Event, n, {
            type: e,
            isSimulated: !0
          });
          S.event.trigger(r, null, t)
        }
      }), S.fn.extend({
        trigger: function(e, t) {
          return this.each(function() {
            S.event.trigger(e, t, this)
          })
        },
        triggerHandler: function(e, t) {
          var n = this[0];
          if (n) return S.event.trigger(e, t, n, !0)
        }
      }), y.focusin || S.each({
        focus: "focusin",
        blur: "focusout"
      }, function(n, r) {
        var i = function(e) {
          S.event.simulate(r, e.target, S.event.fix(e))
        };
        S.event.special[r] = {
          setup: function() {
            var e = this.ownerDocument || this.document || this,
              t = Y.access(e, r);
            t || e.addEventListener(n, i, !0), Y.access(e, r, (t || 0) + 1)
          },
          teardown: function() {
            var e = this.ownerDocument || this.document || this,
              t = Y.access(e, r) - 1;
            t ? Y.access(e, r, t) : (e.removeEventListener(n, i, !0), Y.remove(e, r))
          }
        }
      });
      var bt = C.location,
        wt = {
          guid: Date.now()
        },
        Tt = /\?/;
      S.parseXML = function(e) {
        var t, n;
        if (!e || "string" != typeof e) return null;
        try {
          t = (new C.DOMParser).parseFromString(e, "text/xml")
        } catch (e) {}
        return n = t && t.getElementsByTagName("parsererror")[0], t && !n || S.error("Invalid XML: " + (n ? S.map(n
          .childNodes,
          function(e) {
            return e.textContent
          }).join("\n") : e)), t
      };
      var Ct = /\[\]$/,
        Et = /\r?\n/g,
        St = /^(?:submit|button|image|reset|file)$/i,
        kt = /^(?:input|select|textarea|keygen)/i;

      function At(n, e, r, i) {
        var t;
        if (Array.isArray(e)) S.each(e, function(e, t) {
          r || Ct.test(n) ? i(n, t) : At(n + "[" + ("object" == typeof t && null != t ? e : "") + "]", t, r, i)
        });
        else if (r || "object" !== w(e)) i(n, e);
        else
          for (t in e) At(n + "[" + t + "]", e[t], r, i)
      }
      S.param = function(e, t) {
        var n, r = [],
          i = function(e, t) {
            var n = m(t) ? t() : t;
            r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
          };
        if (null == e) return "";
        if (Array.isArray(e) || e.jquery && !S.isPlainObject(e)) S.each(e, function() {
          i(this.name, this.value)
        });
        else
          for (n in e) At(n, e[n], t, i);
        return r.join("&")
      }, S.fn.extend({
        serialize: function() {
          return S.param(this.serializeArray())
        },
        serializeArray: function() {
          return this.map(function() {
            var e = S.prop(this, "elements");
            return e ? S.makeArray(e) : this
          }).filter(function() {
            var e = this.type;
            return this.name && !S(this).is(":disabled") && kt.test(this.nodeName) && !St.test(e) && (this
              .checked || !pe.test(e))
          }).map(function(e, t) {
            var n = S(this).val();
            return null == n ? null : Array.isArray(n) ? S.map(n, function(e) {
              return {
                name: t.name,
                value: e.replace(Et, "\r\n")
              }
            }) : {
              name: t.name,
              value: n.replace(Et, "\r\n")
            }
          }).get()
        }
      });
      var Nt = /%20/g,
        jt = /#.*$/,
        Dt = /([?&])_=[^&]*/,
        qt = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        Lt = /^(?:GET|HEAD)$/,
        Ht = /^\/\//,
        Ot = {},
        Pt = {},
        Rt = "*/".concat("*"),
        Mt = E.createElement("a");

      function It(o) {
        return function(e, t) {
          "string" != typeof e && (t = e, e = "*");
          var n, r = 0,
            i = e.toLowerCase().match(P) || [];
          if (m(t))
            while (n = i[r++]) "+" === n[0] ? (n = n.slice(1) || "*", (o[n] = o[n] || []).unshift(t)) : (o[n] = o[
              n] || []).push(t)
        }
      }

      function Wt(t, i, o, a) {
        var s = {},
          u = t === Pt;

        function l(e) {
          var r;
          return s[e] = !0, S.each(t[e] || [], function(e, t) {
            var n = t(i, o, a);
            return "string" != typeof n || u || s[n] ? u ? !(r = n) : void 0 : (i.dataTypes.unshift(n), l(n), !1)
          }), r
        }
        return l(i.dataTypes[0]) || !s["*"] && l("*")
      }

      function Ft(e, t) {
        var n, r, i = S.ajaxSettings.flatOptions || {};
        for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
        return r && S.extend(!0, e, r), e
      }
      Mt.href = bt.href, S.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
          url: bt.href,
          type: "GET",
          isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(bt.protocol),
          global: !0,
          processData: !0,
          async: !0,
          contentType: "application/x-www-form-urlencoded; charset=UTF-8",
          accepts: {
            "*": Rt,
            text: "text/plain",
            html: "text/html",
            xml: "application/xml, text/xml",
            json: "application/json, text/javascript"
          },
          contents: {
            xml: /\bxml\b/,
            html: /\bhtml/,
            json: /\bjson\b/
          },
          responseFields: {
            xml: "responseXML",
            text: "responseText",
            json: "responseJSON"
          },
          converters: {
            "* text": String,
            "text html": !0,
            "text json": JSON.parse,
            "text xml": S.parseXML
          },
          flatOptions: {
            url: !0,
            context: !0
          }
        },
        ajaxSetup: function(e, t) {
          return t ? Ft(Ft(e, S.ajaxSettings), t) : Ft(S.ajaxSettings, e)
        },
        ajaxPrefilter: It(Ot),
        ajaxTransport: It(Pt),
        ajax: function(e, t) {
          "object" == typeof e && (t = e, e = void 0), t = t || {};
          var c, f, p, n, d, r, h, g, i, o, v = S.ajaxSetup({}, t),
            y = v.context || v,
            m = v.context && (y.nodeType || y.jquery) ? S(y) : S.event,
            x = S.Deferred(),
            b = S.Callbacks("once memory"),
            w = v.statusCode || {},
            a = {},
            s = {},
            u = "canceled",
            T = {
              readyState: 0,
              getResponseHeader: function(e) {
                var t;
                if (h) {
                  if (!n) {
                    n = {};
                    while (t = qt.exec(p)) n[t[1].toLowerCase() + " "] = (n[t[1].toLowerCase() + " "] || [])
                      .concat(t[2])
                  }
                  t = n[e.toLowerCase() + " "]
                }
                return null == t ? null : t.join(", ")
              },
              getAllResponseHeaders: function() {
                return h ? p : null
              },
              setRequestHeader: function(e, t) {
                return null == h && (e = s[e.toLowerCase()] = s[e.toLowerCase()] || e, a[e] = t), this
              },
              overrideMimeType: function(e) {
                return null == h && (v.mimeType = e), this
              },
              statusCode: function(e) {
                var t;
                if (e)
                  if (h) T.always(e[T.status]);
                  else
                    for (t in e) w[t] = [w[t], e[t]];
                return this
              },
              abort: function(e) {
                var t = e || u;
                return c && c.abort(t), l(0, t), this
              }
            };
          if (x.promise(T), v.url = ((e || v.url || bt.href) + "").replace(Ht, bt.protocol + "//"), v.type = t
            .method || t.type || v.method || v.type, v.dataTypes = (v.dataType || "*").toLowerCase().match(P) ||
            [""], null == v.crossDomain) {
            r = E.createElement("a");
            try {
              r.href = v.url, r.href = r.href, v.crossDomain = Mt.protocol + "//" + Mt.host != r.protocol +
                "//" + r.host
            } catch (e) {
              v.crossDomain = !0
            }
          }
          if (v.data && v.processData && "string" != typeof v.data && (v.data = S.param(v.data, v.traditional)),
            Wt(Ot, v, t, T), h) return T;
          for (i in (g = S.event && v.global) && 0 == S.active++ && S.event.trigger("ajaxStart"), v.type = v
            .type.toUpperCase(), v.hasContent = !Lt.test(v.type), f = v.url.replace(jt, ""), v.hasContent ? v
            .data && v.processData && 0 === (v.contentType || "").indexOf(
            "application/x-www-form-urlencoded") && (v.data = v.data.replace(Nt, "+")) : (o = v.url.slice(f
              .length), v.data && (v.processData || "string" == typeof v.data) && (f += (Tt.test(f) ? "&" :
              "?") + v.data, delete v.data), !1 === v.cache && (f = f.replace(Dt, "$1"), o = (Tt.test(f) ?
              "&" : "?") + "_=" + wt.guid++ + o), v.url = f + o), v.ifModified && (S.lastModified[f] && T
              .setRequestHeader("If-Modified-Since", S.lastModified[f]), S.etag[f] && T.setRequestHeader(
                "If-None-Match", S.etag[f])), (v.data && v.hasContent && !1 !== v.contentType || t
            .contentType) && T.setRequestHeader("Content-Type", v.contentType), T.setRequestHeader("Accept", v
              .dataTypes[0] && v.accepts[v.dataTypes[0]] ? v.accepts[v.dataTypes[0]] + ("*" !== v.dataTypes[0] ?
                ", " + Rt + "; q=0.01" : "") : v.accepts["*"]), v.headers) T.setRequestHeader(i, v.headers[i]);
          if (v.beforeSend && (!1 === v.beforeSend.call(y, T, v) || h)) return T.abort();
          if (u = "abort", b.add(v.complete), T.done(v.success), T.fail(v.error), c = Wt(Pt, v, t, T)) {
            if (T.readyState = 1, g && m.trigger("ajaxSend", [T, v]), h) return T;
            v.async && 0 < v.timeout && (d = C.setTimeout(function() {
              T.abort("timeout")
            }, v.timeout));
            try {
              h = !1, c.send(a, l)
            } catch (e) {
              if (h) throw e;
              l(-1, e)
            }
          } else l(-1, "No Transport");

          function l(e, t, n, r) {
            var i, o, a, s, u, l = t;
            h || (h = !0, d && C.clearTimeout(d), c = void 0, p = r || "", T.readyState = 0 < e ? 4 : 0, i =
              200 <= e && e < 300 || 304 === e, n && (s = function(e, t, n) {
                var r, i, o, a, s = e.contents,
                  u = e.dataTypes;
                while ("*" === u[0]) u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader(
                  "Content-Type"));
                if (r)
                  for (i in s)
                    if (s[i] && s[i].test(r)) {
                      u.unshift(i);
                      break
                    } if (u[0] in n) o = u[0];
                else {
                  for (i in n) {
                    if (!u[0] || e.converters[i + " " + u[0]]) {
                      o = i;
                      break
                    }
                    a || (a = i)
                  }
                  o = o || a
                }
                if (o) return o !== u[0] && u.unshift(o), n[o]
              }(v, T, n)), !i && -1 < S.inArray("script", v.dataTypes) && S.inArray("json", v.dataTypes) <
              0 && (v.converters["text script"] = function() {}), s = function(e, t, n, r) {
                var i, o, a, s, u, l = {},
                  c = e.dataTypes.slice();
                if (c[1])
                  for (a in e.converters) l[a.toLowerCase()] = e.converters[a];
                o = c.shift();
                while (o)
                  if (e.responseFields[o] && (n[e.responseFields[o]] = t), !u && r && e.dataFilter && (t = e
                      .dataFilter(t, e.dataType)), u = o, o = c.shift())
                    if ("*" === o) o = u;
                    else if ("*" !== u && u !== o) {
                  if (!(a = l[u + " " + o] || l["* " + o]))
                    for (i in l)
                      if ((s = i.split(" "))[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) {
                        !0 === a ? a = l[i] : !0 !== l[i] && (o = s[0], c.unshift(s[1]));
                        break
                      } if (!0 !== a)
                    if (a && e["throws"]) t = a(t);
                    else try {
                      t = a(t)
                    } catch (e) {
                      return {
                        state: "parsererror",
                        error: a ? e : "No conversion from " + u + " to " + o
                      }
                    }
                }
                return {
                  state: "success",
                  data: t
                }
              }(v, s, T, i), i ? (v.ifModified && ((u = T.getResponseHeader("Last-Modified")) && (S
                  .lastModified[f] = u), (u = T.getResponseHeader("etag")) && (S.etag[f] = u)), 204 === e ||
                "HEAD" === v.type ? l = "nocontent" : 304 === e ? l = "notmodified" : (l = s.state, o = s
                  .data, i = !(a = s.error))) : (a = l, !e && l || (l = "error", e < 0 && (e = 0))), T
              .status = e, T.statusText = (t || l) + "", i ? x.resolveWith(y, [o, l, T]) : x.rejectWith(y, [T,
                l, a
              ]), T.statusCode(w), w = void 0, g && m.trigger(i ? "ajaxSuccess" : "ajaxError", [T, v, i ? o :
                a
              ]), b.fireWith(y, [T, l]), g && (m.trigger("ajaxComplete", [T, v]), --S.active || S.event
                .trigger("ajaxStop")))
          }
          return T
        },
        getJSON: function(e, t, n) {
          return S.get(e, t, n, "json")
        },
        getScript: function(e, t) {
          return S.get(e, void 0, t, "script")
        }
      }), S.each(["get", "post"], function(e, i) {
        S[i] = function(e, t, n, r) {
          return m(t) && (r = r || n, n = t, t = void 0), S.ajax(S.extend({
            url: e,
            type: i,
            dataType: r,
            data: t,
            success: n
          }, S.isPlainObject(e) && e))
        }
      }), S.ajaxPrefilter(function(e) {
        var t;
        for (t in e.headers) "content-type" === t.toLowerCase() && (e.contentType = e.headers[t] || "")
      }), S._evalUrl = function(e, t, n) {
        return S.ajax({
          url: e,
          type: "GET",
          dataType: "script",
          cache: !0,
          async: !1,
          global: !1,
          converters: {
            "text script": function() {}
          },
          dataFilter: function(e) {
            S.globalEval(e, t, n)
          }
        })
      }, S.fn.extend({
        wrapAll: function(e) {
          var t;
          return this[0] && (m(e) && (e = e.call(this[0])), t = S(e, this[0].ownerDocument).eq(0).clone(!0),
            this[0].parentNode && t.insertBefore(this[0]), t.map(function() {
              var e = this;
              while (e.firstElementChild) e = e.firstElementChild;
              return e
            }).append(this)), this
        },
        wrapInner: function(n) {
          return m(n) ? this.each(function(e) {
            S(this).wrapInner(n.call(this, e))
          }) : this.each(function() {
            var e = S(this),
              t = e.contents();
            t.length ? t.wrapAll(n) : e.append(n)
          })
        },
        wrap: function(t) {
          var n = m(t);
          return this.each(function(e) {
            S(this).wrapAll(n ? t.call(this, e) : t)
          })
        },
        unwrap: function(e) {
          return this.parent(e).not("body").each(function() {
            S(this).replaceWith(this.childNodes)
          }), this
        }
      }), S.expr.pseudos.hidden = function(e) {
        return !S.expr.pseudos.visible(e)
      }, S.expr.pseudos.visible = function(e) {
        return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
      }, S.ajaxSettings.xhr = function() {
        try {
          return new C.XMLHttpRequest
        } catch (e) {}
      };
      var Bt = {
          0: 200,
          1223: 204
        },
        $t = S.ajaxSettings.xhr();
      y.cors = !!$t && "withCredentials" in $t, y.ajax = $t = !!$t, S.ajaxTransport(function(i) {
        var o, a;
        if (y.cors || $t && !i.crossDomain) return {
          send: function(e, t) {
            var n, r = i.xhr();
            if (r.open(i.type, i.url, i.async, i.username, i.password), i.xhrFields)
              for (n in i.xhrFields) r[n] = i.xhrFields[n];
            for (n in i.mimeType && r.overrideMimeType && r.overrideMimeType(i.mimeType), i.crossDomain || e[
                "X-Requested-With"] || (e["X-Requested-With"] = "XMLHttpRequest"), e) r.setRequestHeader(n, e[
              n]);
            o = function(e) {
                return function() {
                  o && (o = a = r.onload = r.onerror = r.onabort = r.ontimeout = r.onreadystatechange =
                    null, "abort" === e ? r.abort() : "error" === e ? "number" != typeof r.status ? t(0,
                      "error") : t(r.status, r.statusText) : t(Bt[r.status] || r.status, r.statusText,
                      "text" !== (r.responseType || "text") || "string" != typeof r.responseText ? {
                        binary: r.response
                      } : {
                        text: r.responseText
                      }, r.getAllResponseHeaders()))
                }
              }, r.onload = o(), a = r.onerror = r.ontimeout = o("error"), void 0 !== r.onabort ? r.onabort =
              a : r.onreadystatechange = function() {
                4 === r.readyState && C.setTimeout(function() {
                  o && a()
                })
              }, o = o("abort");
            try {
              r.send(i.hasContent && i.data || null)
            } catch (e) {
              if (o) throw e
            }
          },
          abort: function() {
            o && o()
          }
        }
      }), S.ajaxPrefilter(function(e) {
        e.crossDomain && (e.contents.script = !1)
      }), S.ajaxSetup({
        accepts: {
          script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
        },
        contents: {
          script: /\b(?:java|ecma)script\b/
        },
        converters: {
          "text script": function(e) {
            return S.globalEval(e), e
          }
        }
      }), S.ajaxPrefilter("script", function(e) {
        void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
      }), S.ajaxTransport("script", function(n) {
        var r, i;
        if (n.crossDomain || n.scriptAttrs) return {
          send: function(e, t) {
            r = S("<script>").attr(n.scriptAttrs || {}).prop({
              charset: n.scriptCharset,
              src: n.url
            }).on("load error", i = function(e) {
              r.remove(), i = null, e && t("error" === e.type ? 404 : 200, e.type)
            }), E.head.appendChild(r[0])
          },
          abort: function() {
            i && i()
          }
        }
      });
      var _t, zt = [],
        Ut = /(=)\?(?=&|$)|\?\?/;
      S.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function() {
          var e = zt.pop() || S.expando + "_" + wt.guid++;
          return this[e] = !0, e
        }
      }), S.ajaxPrefilter("json jsonp", function(e, t, n) {
        var r, i, o, a = !1 !== e.jsonp && (Ut.test(e.url) ? "url" : "string" == typeof e.data && 0 === (e
          .contentType || "").indexOf("application/x-www-form-urlencoded") && Ut.test(e.data) && "data");
        if (a || "jsonp" === e.dataTypes[0]) return r = e.jsonpCallback = m(e.jsonpCallback) ? e.jsonpCallback() :
          e.jsonpCallback, a ? e[a] = e[a].replace(Ut, "$1" + r) : !1 !== e.jsonp && (e.url += (Tt.test(e.url) ?
            "&" : "?") + e.jsonp + "=" + r), e.converters["script json"] = function() {
            return o || S.error(r + " was not called"), o[0]
          }, e.dataTypes[0] = "json", i = C[r], C[r] = function() {
            o = arguments
          }, n.always(function() {
            void 0 === i ? S(C).removeProp(r) : C[r] = i, e[r] && (e.jsonpCallback = t.jsonpCallback, zt.push(
              r)), o && m(i) && i(o[0]), o = i = void 0
          }), "script"
      }), y.createHTMLDocument = ((_t = E.implementation.createHTMLDocument("").body).innerHTML =
        "<form></form><form></form>", 2 === _t.childNodes.length), S.parseHTML = function(e, t, n) {
        return "string" != typeof e ? [] : ("boolean" == typeof t && (n = t, t = !1), t || (y.createHTMLDocument ? (
          (r = (t = E.implementation.createHTMLDocument("")).createElement("base")).href = E.location.href, t
          .head.appendChild(r)) : t = E), o = !n && [], (i = N.exec(e)) ? [t.createElement(i[1])] : (i = xe([e],
          t, o), o && o.length && S(o).remove(), S.merge([], i.childNodes)));
        var r, i, o
      }, S.fn.load = function(e, t, n) {
        var r, i, o, a = this,
          s = e.indexOf(" ");
        return -1 < s && (r = ht(e.slice(s)), e = e.slice(0, s)), m(t) ? (n = t, t = void 0) : t && "object" ==
          typeof t && (i = "POST"), 0 < a.length && S.ajax({
            url: e,
            type: i || "GET",
            dataType: "html",
            data: t
          }).done(function(e) {
            o = arguments, a.html(r ? S("<div>").append(S.parseHTML(e)).find(r) : e)
          }).always(n && function(e, t) {
            a.each(function() {
              n.apply(this, o || [e.responseText, t, e])
            })
          }), this
      }, S.expr.pseudos.animated = function(t) {
        return S.grep(S.timers, function(e) {
          return t === e.elem
        }).length
      }, S.offset = {
        setOffset: function(e, t, n) {
          var r, i, o, a, s, u, l = S.css(e, "position"),
            c = S(e),
            f = {};
          "static" === l && (e.style.position = "relative"), s = c.offset(), o = S.css(e, "top"), u = S.css(e,
            "left"), ("absolute" === l || "fixed" === l) && -1 < (o + u).indexOf("auto") ? (a = (r = c
          .position()).top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(u) || 0), m(t) && (t = t.call(
            e, n, S.extend({}, s))), null != t.top && (f.top = t.top - s.top + a), null != t.left && (f.left = t
            .left - s.left + i), "using" in t ? t.using.call(e, f) : c.css(f)
        }
      }, S.fn.extend({
        offset: function(t) {
          if (arguments.length) return void 0 === t ? this : this.each(function(e) {
            S.offset.setOffset(this, t, e)
          });
          var e, n, r = this[0];
          return r ? r.getClientRects().length ? (e = r.getBoundingClientRect(), n = r.ownerDocument
            .defaultView, {
              top: e.top + n.pageYOffset,
              left: e.left + n.pageXOffset
            }) : {
            top: 0,
            left: 0
          } : void 0
        },
        position: function() {
          if (this[0]) {
            var e, t, n, r = this[0],
              i = {
                top: 0,
                left: 0
              };
            if ("fixed" === S.css(r, "position")) t = r.getBoundingClientRect();
            else {
              t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement;
              while (e && (e === n.body || e === n.documentElement) && "static" === S.css(e, "position")) e = e
                .parentNode;
              e && e !== r && 1 === e.nodeType && ((i = S(e).offset()).top += S.css(e, "borderTopWidth", !0), i
                .left += S.css(e, "borderLeftWidth", !0))
            }
            return {
              top: t.top - i.top - S.css(r, "marginTop", !0),
              left: t.left - i.left - S.css(r, "marginLeft", !0)
            }
          }
        },
        offsetParent: function() {
          return this.map(function() {
            var e = this.offsetParent;
            while (e && "static" === S.css(e, "position")) e = e.offsetParent;
            return e || re
          })
        }
      }), S.each({
        scrollLeft: "pageXOffset",
        scrollTop: "pageYOffset"
      }, function(t, i) {
        var o = "pageYOffset" === i;
        S.fn[t] = function(e) {
          return $(this, function(e, t, n) {
            var r;
            if (x(e) ? r = e : 9 === e.nodeType && (r = e.defaultView), void 0 === n) return r ? r[i] : e[
            t];
            r ? r.scrollTo(o ? r.pageXOffset : n, o ? n : r.pageYOffset) : e[t] = n
          }, t, e, arguments.length)
        }
      }), S.each(["top", "left"], function(e, n) {
        S.cssHooks[n] = Fe(y.pixelPosition, function(e, t) {
          if (t) return t = We(e, n), Pe.test(t) ? S(e).position()[n] + "px" : t
        })
      }), S.each({
        Height: "height",
        Width: "width"
      }, function(a, s) {
        S.each({
          padding: "inner" + a,
          content: s,
          "": "outer" + a
        }, function(r, o) {
          S.fn[o] = function(e, t) {
            var n = arguments.length && (r || "boolean" != typeof e),
              i = r || (!0 === e || !0 === t ? "margin" : "border");
            return $(this, function(e, t, n) {
              var r;
              return x(e) ? 0 === o.indexOf("outer") ? e["inner" + a] : e.document.documentElement[
                  "client" + a] : 9 === e.nodeType ? (r = e.documentElement, Math.max(e.body["scroll" +
                  a], r["scroll" + a], e.body["offset" + a], r["offset" + a], r["client" + a])) :
                void 0 === n ? S.css(e, t, i) : S.style(e, t, n, i)
            }, s, n ? e : void 0, n)
          }
        })
      }), S.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(e, t) {
        S.fn[t] = function(e) {
          return this.on(t, e)
        }
      }), S.fn.extend({
        bind: function(e, t, n) {
          return this.on(e, null, t, n)
        },
        unbind: function(e, t) {
          return this.off(e, null, t)
        },
        delegate: function(e, t, n, r) {
          return this.on(t, e, n, r)
        },
        undelegate: function(e, t, n) {
          return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
        },
        hover: function(e, t) {
          return this.mouseenter(e).mouseleave(t || e)
        }
      }), S.each(
        "blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu"
        .split(" "),
        function(e, n) {
          S.fn[n] = function(e, t) {
            return 0 < arguments.length ? this.on(n, null, e, t) : this.trigger(n)
          }
        });
      var Xt = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
      S.proxy = function(e, t) {
          var n, r, i;
          if ("string" == typeof t && (n = e[t], t = e, e = n), m(e)) return r = s.call(arguments, 2), (i =
        function() {
            return e.apply(t || this, r.concat(s.call(arguments)))
          }).guid = e.guid = e.guid || S.guid++, i
        }, S.holdReady = function(e) {
          e ? S.readyWait++ : S.ready(!0)
        }, S.isArray = Array.isArray, S.parseJSON = JSON.parse, S.nodeName = A, S.isFunction = m, S.isWindow = x, S
        .camelCase = X, S.type = w, S.now = Date.now, S.isNumeric = function(e) {
          var t = S.type(e);
          return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
        }, S.trim = function(e) {
          return null == e ? "" : (e + "").replace(Xt, "")
        }, "function" == typeof define && define.amd && define("jquery", [], function() {
          return S
        });
      var Vt = C.jQuery,
        Gt = C.$;
      return S.noConflict = function(e) {
        return C.$ === S && (C.$ = Gt), e && C.jQuery === S && (C.jQuery = Vt), S
      }, "undefined" == typeof e && (C.jQuery = C.$ = S), S
    });
  </script>
</body>

</html>