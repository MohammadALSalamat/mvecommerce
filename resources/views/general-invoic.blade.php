<!DOCTYPE html>
<html class="loading" lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <title>INV-{{ $order->order_number }}</title>

  <style>

    dl,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    ol,
    p,
    pre,
    ul {
      margin-top: 0
    }

    address,
    dl,
    ol,
    p,
    pre,
    ul {
      margin-bottom: 1rem
    }

    body,
    caption {
      color: #6B6F82;
      text-align: left
    }

    dd,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    label {
      margin-bottom: .5rem
    }

    button,
    hr,
    input {
      overflow: visible
    }

    pre,
    textarea {
      overflow: auto
    }

    address,
    legend {
      line-height: inherit
    }

    progress,
    sub,
    sup {
      vertical-align: baseline
    }

    .btn-group-vertical,
    .navbar-nav {
      -webkit-box-orient: vertical;
      -moz-box-direction: normal
    }

    .dropdown-menu,
    .nav,
    .navbar-nav {
      list-style: none
    }

    :root {
      --blue: #1E9FF2;
      --indigo: #6610F2;
      --purple: #6F42C1;
      --pink: #E83E8C;
      --red: #FF4961;
      --orange: #FF9149;
      --yellow: #FFC107;
      --green: #28D094;
      --teal: #20C997;
      --cyan: #666EE8;
      --white: #FFFFFF;
      --gray: #6B6F82;
      --gray-dark: #464855;
      --primary: #666EE8;
      --secondary: #6B6F82;
      --success: #28D094;
      --info: #1E9FF2;
      --warning: #FF9149;
      --danger: #FF4961;
      --light: #BABFC7;
      --dark: #464855;
      --breakpoint-xs: 0;
      --breakpoint-sm: 576px;
      --breakpoint-md: 768px;
      --breakpoint-lg: 992px;
      --breakpoint-xl: 1200px;
      --font-family-sans-serif: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      --font-family-monospace: 'Quicksand', Georgia, 'Times New Roman', Times, serif
    }

    @media print {

      blockquote,
      img,
      pre,
      tr {
        page-break-inside: avoid
      }

      *,
      ::after,
      ::before {
        text-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
      }

      a:not(.btn) {
        text-decoration: underline
      }

      abbr[title]::after {
        content: ' ('attr(title) ')'
      }

      pre {
        white-space: pre-wrap !important
      }

      blockquote,
      pre {
        border: 1px solid #999
      }

      thead {
        display: table-header-group
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

      @page {
        size: a3
      }

      .container,
      body {
        min-width: 992px !important
      }

      .navbar {
        display: none
      }

      .badge {
        border: 1px solid #000
      }

      .table {
        border-collapse: collapse !important
      }

      .table td,
      .table th {
        background-color: #FFF !important
      }

      .table-bordered td,
      .table-bordered th {
        border: 1px solid #DDD !important
      }
    }

    article,
    aside,
    dialog,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    legend,
    main,
    nav,
    section {
      display: block
    }

    label,
    output {
      display: inline-block
    }

    *,
    ::after,
    ::before {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
    }

    html {
      font-family: sans-serif;
      line-height: 1.15;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      -ms-overflow-style: scrollbar;
      -webkit-tap-highlight-color: transparent
    }

    @-ms-viewport {
      width: device-width
    }

    body {
      margin: 0;
      font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.45;
      background-color: #F9FAFD
    }

    [tabindex='-1']:focus {
      outline: 0 !important
    }

    hr {
      -webkit-box-sizing: content-box;
      -moz-box-sizing: content-box;
      box-sizing: content-box;
      height: 0
    }

    .img-fluid,
    .img-thumbnail {
      max-width: 100%;
      height: auto
    }

    abbr[data-original-title],
    abbr[title] {
      text-decoration: underline;
      text-decoration: underline dotted;
      cursor: help;
      border-bottom: 0
    }

    .btn:not(:disabled):not(.disabled),
    .navbar-toggler:not(:disabled):not(.disabled),
    .page-link:not(:disabled):not(.disabled),
    summary {
      cursor: pointer
    }

    address {
      font-style: normal
    }

    ol ol,
    ol ul,
    ul ol,
    ul ul {
      margin-bottom: 0
    }

    dt {
      font-weight: 700
    }

    dd {
      margin-left: 0
    }

    blockquote,
    figure {
      margin: 0 0 1rem
    }

    dfn {
      font-style: italic
    }

    b,
    strong {
      font-weight: bolder
    }

    small {
      font-size: 80%
    }

    sub,
    sup {
      position: relative;
      font-size: 75%;
      line-height: 0
    }

    sub {
      bottom: -.25em
    }

    sup {
      top: -.5em
    }

    a {
      color: #5059E5;
      text-decoration: none;
      background-color: transparent;
      -webkit-text-decoration-skip: objects
    }

    a:hover {
      color: #3A44E1;
      text-decoration: none
    }

    a:not([href]):not([tabindex]),
    a:not([href]):not([tabindex]):focus,
    a:not([href]):not([tabindex]):hover {
      color: inherit;
      text-decoration: none
    }

    a:not([href]):not([tabindex]):focus {
      outline: 0
    }

    code,
    kbd,
    pre,
    samp {
      font-size: 1em
    }

    pre {
      -ms-overflow-style: scrollbar
    }

    img {
      vertical-align: middle;
      border-style: none
    }

    svg:not(:root) {
      overflow: hidden
    }

    table {
      border-collapse: collapse
    }

    caption {
      padding-top: .75rem;
      padding-bottom: .75rem;
      caption-side: bottom
    }

    th {
      text-align: inherit
    }

    button {
      border-radius: 0
    }

    button:focus {
      outline: dotted 1px;
      outline: -webkit-focus-ring-color auto 5px
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      margin: 0;
      font-family: inherit;
      font-size: inherit;
      line-height: inherit
    }

    button,
    select {
      text-transform: none
    }

    [type=submit],
    [type=reset],
    button,
    html [type=button] {
      -webkit-appearance: button
    }

    [type=submit]::-moz-focus-inner,
    [type=button]::-moz-focus-inner,
    [type=reset]::-moz-focus-inner,
    button::-moz-focus-inner {
      padding: 0;
      border-style: none
    }

    input[type=radio],
    input[type=checkbox] {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      padding: 0
    }

    input[type=date],
    input[type=time],
    input[type=datetime-local],
    input[type=month] {
      -webkit-appearance: listbox
    }

    textarea {
      resize: vertical
    }

    fieldset {
      min-width: 0;
      padding: 0;
      margin: 0;
      border: 0
    }

    legend {
      width: 100%;
      max-width: 100%;
      padding: 0;
      margin-bottom: .5rem;
      font-size: 1.5rem;
      color: inherit;
      white-space: normal
    }

    .badge,
    .btn,
    .dropdown-header,
    .dropdown-item,
    .input-group-text,
    .navbar-brand {
      white-space: nowrap
    }

    [type=number]::-webkit-inner-spin-button,
    [type=number]::-webkit-outer-spin-button {
      height: auto
    }

    [type=search] {
      outline-offset: -2px;
      -webkit-appearance: none
    }

    [type=search]::-webkit-search-cancel-button,
    [type=search]::-webkit-search-decoration {
      -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
      font: inherit;
      -webkit-appearance: button
    }

    .display-1,
    .display-2,
    .display-3,
    .display-4 {
      line-height: 1.2
    }

    .btn,
    .btn-link,
    .display-1,
    .display-2,
    .display-3,
    .dropdown-item,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    .input-group-text,
    .lead,
    .small,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    small {
      font-weight: 400
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    code,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    kbd,
    pre,
    samp {
      font-family: Quicksand, Georgia, 'Times New Roman', Times, serif
    }

    summary {
      display: list-item
    }

    template {
      display: none
    }

    [hidden] {
      display: none !important
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
      margin-bottom: .5rem;
      line-height: 1.2;
      color: #464855
    }

    .blockquote,
    hr {
      margin-bottom: 1rem
    }

    .h1,
    h1 {
      font-size: 2rem
    }

    .h2,
    h2 {
      font-size: 1.74rem
    }

    .h3,
    h3 {
      font-size: 1.51rem
    }

    .h4,
    h4 {
      font-size: 1.32rem
    }

    .h5,
    h5 {
      font-size: 1.14rem
    }

    .h6,
    h6 {
      font-size: 1rem
    }

    .lead {
      font-size: 1.25rem
    }

    .display-1 {
      font-size: 6rem
    }

    .display-2 {
      font-size: 5.5rem
    }

    .display-3 {
      font-size: 4.5rem
    }

    .display-4 {
      font-size: 3.5rem;
      font-weight: 400
    }

    hr {
      margin-top: 1rem;
      border: 0;
      border-top: 1px solid rgba(0, 0, 0, .1)
    }

    .small,
    small {
      font-size: 80%
    }

    .mark,
    mark {
      padding: .2em;
      background-color: #FCF8E3
    }

    .list-inline,
    .list-unstyled {
      padding-left: 0;
      list-style: none
    }

    .list-inline-item {
      display: inline-block
    }

    .list-inline-item:not(:last-child) {
      margin-right: .5rem
    }

    .initialism {
      font-size: 90%;
      text-transform: uppercase
    }

    .blockquote {
      font-size: 1.25rem
    }

    .blockquote-footer {
      display: block;
      font-size: 80%;
      color: #6B6F82
    }

    .blockquote-footer::before {
      content: '\2014 \00A0'
    }

    .img-thumbnail {
      padding: .25rem;
      background-color: #F9FAFD;
      border: 1px solid #626E82;
      border-radius: .25rem
    }

    .figure {
      display: inline-block
    }

    .figure-img {
      margin-bottom: .5rem;
      line-height: 1
    }

    .figure-caption {
      font-size: 90%;
      color: #6B6F82
    }

    code,
    kbd {
      font-size: 87.5%
    }

    a>code,
    pre code {
      color: inherit
    }

    code {
      color: #F74B5C;
      word-break: break-word
    }

    kbd {
      padding: .2rem .4rem;
      color: #FFF;
      background-color: #F2F3F5;
      border-radius: .21rem
    }

    kbd kbd {
      padding: 0;
      font-size: 100%;
      font-weight: 700
    }

    .container,
    .container-fluid {
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
      width: 100%
    }

    pre {
      display: block;
      font-size: 87.5%;
      color: #6B6F82
    }

    pre code {
      font-size: inherit;
      word-break: normal
    }

    .pre-scrollable {
      max-height: 340px;
      overflow-y: scroll
    }

    @media (min-width:576px) {
      .container {
        max-width: 540px
      }
    }

    @media (min-width:768px) {
      .container {
        max-width: 720px
      }
    }

    @media (min-width:992px) {
      .container {
        max-width: 960px
      }
    }

    @media (min-width:1200px) {
      .container {
        max-width: 1140px
      }
    }

    .row {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px
    }

    .no-gutters {
      margin-right: 0;
      margin-left: 0
    }

    .no-gutters>.col,
    .no-gutters>[class*=col-] {
      padding-right: 0;
      padding-left: 0
    }

    .col,
    .col-1,
    .col-10,
    .col-11,
    .col-12,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-auto,
    .col-lg,
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
    .col-lg-auto,
    .col-md,
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
    .col-md-auto,
    .col-sm,
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
    .col-sm-auto,
    .col-xl,
    .col-xl-1,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-auto {
      position: relative;
      width: 100%;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px
    }

    .col {
      -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
      flex-basis: 0;
      -webkit-box-flex: 1;
      -webkit-flex-grow: 1;
      -moz-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      max-width: 100%
    }

    .col-1,
    .col-auto {
      -webkit-box-flex: 0
    }

    .col-auto {
      -webkit-flex: 0 0 auto;
      -moz-box-flex: 0;
      -ms-flex: 0 0 auto;
      flex: 0 0 auto;
      width: auto;
      max-width: none
    }

    .col-1 {
      -webkit-flex: 0 0 8.333333%;
      -moz-box-flex: 0;
      -ms-flex: 0 0 8.333333%;
      flex: 0 0 8.333333%;
      max-width: 8.333333%
    }

    .col-2,
    .col-3 {
      -webkit-box-flex: 0
    }

    .col-2 {
      -webkit-flex: 0 0 16.666667%;
      -moz-box-flex: 0;
      -ms-flex: 0 0 16.666667%;
      flex: 0 0 16.666667%;
      max-width: 16.666667%
    }

    .col-3 {
      -webkit-flex: 0 0 25%;
      -moz-box-flex: 0;
      -ms-flex: 0 0 25%;
      flex: 0 0 25%;
      max-width: 25%
    }

    .col-4,
    .col-5 {
      -webkit-box-flex: 0
    }

    .col-4 {
      -webkit-flex: 0 0 33.333333%;
      -moz-box-flex: 0;
      -ms-flex: 0 0 33.333333%;
      flex: 0 0 33.333333%;
      max-width: 33.333333%
    }

    .col-5 {
      -webkit-flex: 0 0 41.666667%;
      -moz-box-flex: 0;
      -ms-flex: 0 0 41.666667%;
      flex: 0 0 41.666667%;
      max-width: 41.666667%
    }

    .col-6,
    .col-7 {
      -webkit-box-flex: 0
    }

    .col-6 {
      -webkit-flex: 0 0 50%;
      -moz-box-flex: 0;
      -ms-flex: 0 0 50%;
      flex: 0 0 50%;
      max-width: 50%
    }

    .col-7 {
      -webkit-flex: 0 0 58.333333%;
      -moz-box-flex: 0;
      -ms-flex: 0 0 58.333333%;
      flex: 0 0 58.333333%;
      max-width: 58.333333%
    }

    .col-8,
    .col-9 {
      -webkit-box-flex: 0
    }

    .col-8 {
      -webkit-flex: 0 0 66.666667%;
      -moz-box-flex: 0;
      -ms-flex: 0 0 66.666667%;
      flex: 0 0 66.666667%;
      max-width: 66.666667%
    }

    .col-9 {
      -webkit-flex: 0 0 75%;
      -moz-box-flex: 0;
      -ms-flex: 0 0 75%;
      flex: 0 0 75%;
      max-width: 75%
    }

    .col-10,
    .col-11 {
      -webkit-box-flex: 0
    }

    .col-10 {
      -webkit-flex: 0 0 83.333333%;
      -moz-box-flex: 0;
      -ms-flex: 0 0 83.333333%;
      flex: 0 0 83.333333%;
      max-width: 83.333333%
    }

    .col-11 {
      -webkit-flex: 0 0 91.666667%;
      -moz-box-flex: 0;
      -ms-flex: 0 0 91.666667%;
      flex: 0 0 91.666667%;
      max-width: 91.666667%
    }

    .col-12 {
      -webkit-box-flex: 0;
      -webkit-flex: 0 0 100%;
      -moz-box-flex: 0;
      -ms-flex: 0 0 100%;
      flex: 0 0 100%;
      max-width: 100%
    }

    .order-first {
      -webkit-box-ordinal-group: 0;
      -webkit-order: -1;
      -moz-box-ordinal-group: 0;
      -ms-flex-order: -1;
      order: -1
    }

    .order-last {
      -webkit-box-ordinal-group: 14;
      -webkit-order: 13;
      -moz-box-ordinal-group: 14;
      -ms-flex-order: 13;
      order: 13
    }

    .order-0 {
      -webkit-box-ordinal-group: 1;
      -webkit-order: 0;
      -moz-box-ordinal-group: 1;
      -ms-flex-order: 0;
      order: 0
    }

    .order-1 {
      -webkit-box-ordinal-group: 2;
      -webkit-order: 1;
      -moz-box-ordinal-group: 2;
      -ms-flex-order: 1;
      order: 1
    }

    .order-2 {
      -webkit-box-ordinal-group: 3;
      -webkit-order: 2;
      -moz-box-ordinal-group: 3;
      -ms-flex-order: 2;
      order: 2
    }

    .order-3 {
      -webkit-box-ordinal-group: 4;
      -webkit-order: 3;
      -moz-box-ordinal-group: 4;
      -ms-flex-order: 3;
      order: 3
    }

    .order-4 {
      -webkit-box-ordinal-group: 5;
      -webkit-order: 4;
      -moz-box-ordinal-group: 5;
      -ms-flex-order: 4;
      order: 4
    }

    .order-5 {
      -webkit-box-ordinal-group: 6;
      -webkit-order: 5;
      -moz-box-ordinal-group: 6;
      -ms-flex-order: 5;
      order: 5
    }

    .order-6 {
      -webkit-box-ordinal-group: 7;
      -webkit-order: 6;
      -moz-box-ordinal-group: 7;
      -ms-flex-order: 6;
      order: 6
    }

    .order-7 {
      -webkit-box-ordinal-group: 8;
      -webkit-order: 7;
      -moz-box-ordinal-group: 8;
      -ms-flex-order: 7;
      order: 7
    }

    .order-8 {
      -webkit-box-ordinal-group: 9;
      -webkit-order: 8;
      -moz-box-ordinal-group: 9;
      -ms-flex-order: 8;
      order: 8
    }

    .order-9 {
      -webkit-box-ordinal-group: 10;
      -webkit-order: 9;
      -moz-box-ordinal-group: 10;
      -ms-flex-order: 9;
      order: 9
    }

    .order-10 {
      -webkit-box-ordinal-group: 11;
      -webkit-order: 10;
      -moz-box-ordinal-group: 11;
      -ms-flex-order: 10;
      order: 10
    }

    .order-11 {
      -webkit-box-ordinal-group: 12;
      -webkit-order: 11;
      -moz-box-ordinal-group: 12;
      -ms-flex-order: 11;
      order: 11
    }

    .order-12 {
      -webkit-box-ordinal-group: 13;
      -webkit-order: 12;
      -moz-box-ordinal-group: 13;
      -ms-flex-order: 12;
      order: 12
    }

    .offset-1 {
      margin-left: 8.333333%
    }

    .offset-2 {
      margin-left: 16.666667%
    }

    .offset-3 {
      margin-left: 25%
    }

    .offset-4 {
      margin-left: 33.333333%
    }

    .offset-5 {
      margin-left: 41.666667%
    }

    .offset-6 {
      margin-left: 50%
    }

    .offset-7 {
      margin-left: 58.333333%
    }

    .offset-8 {
      margin-left: 66.666667%
    }

    .offset-9 {
      margin-left: 75%
    }

    .offset-10 {
      margin-left: 83.333333%
    }

    .offset-11 {
      margin-left: 91.666667%
    }

    @media (min-width:576px) {
      .col-sm {
        -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -moz-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
      }

      .col-sm-auto {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 auto;
        -moz-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
      }

      .col-sm-1 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 8.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
      }

      .col-sm-2 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 16.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
      }

      .col-sm-3 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 25%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
      }

      .col-sm-4 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 33.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
      }

      .col-sm-5 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 41.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
      }

      .col-sm-6 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 50%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
      }

      .col-sm-7 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 58.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
      }

      .col-sm-8 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 66.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
      }

      .col-sm-9 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 75%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
      }

      .col-sm-10 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 83.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
      }

      .col-sm-11 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 91.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
      }

      .col-sm-12 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 100%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
      }

      .order-sm-first {
        -webkit-box-ordinal-group: 0;
        -webkit-order: -1;
        -moz-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1
      }

      .order-sm-last {
        -webkit-box-ordinal-group: 14;
        -webkit-order: 13;
        -moz-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13
      }

      .order-sm-0 {
        -webkit-box-ordinal-group: 1;
        -webkit-order: 0;
        -moz-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0
      }

      .order-sm-1 {
        -webkit-box-ordinal-group: 2;
        -webkit-order: 1;
        -moz-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
      }

      .order-sm-2 {
        -webkit-box-ordinal-group: 3;
        -webkit-order: 2;
        -moz-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
      }

      .order-sm-3 {
        -webkit-box-ordinal-group: 4;
        -webkit-order: 3;
        -moz-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
      }

      .order-sm-4 {
        -webkit-box-ordinal-group: 5;
        -webkit-order: 4;
        -moz-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4
      }

      .order-sm-5 {
        -webkit-box-ordinal-group: 6;
        -webkit-order: 5;
        -moz-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5
      }

      .order-sm-6 {
        -webkit-box-ordinal-group: 7;
        -webkit-order: 6;
        -moz-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6
      }

      .order-sm-7 {
        -webkit-box-ordinal-group: 8;
        -webkit-order: 7;
        -moz-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7
      }

      .order-sm-8 {
        -webkit-box-ordinal-group: 9;
        -webkit-order: 8;
        -moz-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8
      }

      .order-sm-9 {
        -webkit-box-ordinal-group: 10;
        -webkit-order: 9;
        -moz-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9
      }

      .order-sm-10 {
        -webkit-box-ordinal-group: 11;
        -webkit-order: 10;
        -moz-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10
      }

      .order-sm-11 {
        -webkit-box-ordinal-group: 12;
        -webkit-order: 11;
        -moz-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11
      }

      .order-sm-12 {
        -webkit-box-ordinal-group: 13;
        -webkit-order: 12;
        -moz-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12
      }

      .offset-sm-0 {
        margin-left: 0
      }

      .offset-sm-1 {
        margin-left: 8.333333%
      }

      .offset-sm-2 {
        margin-left: 16.666667%
      }

      .offset-sm-3 {
        margin-left: 25%
      }

      .offset-sm-4 {
        margin-left: 33.333333%
      }

      .offset-sm-5 {
        margin-left: 41.666667%
      }

      .offset-sm-6 {
        margin-left: 50%
      }

      .offset-sm-7 {
        margin-left: 58.333333%
      }

      .offset-sm-8 {
        margin-left: 66.666667%
      }

      .offset-sm-9 {
        margin-left: 75%
      }

      .offset-sm-10 {
        margin-left: 83.333333%
      }

      .offset-sm-11 {
        margin-left: 91.666667%
      }
    }

    @media (min-width:768px) {
      .col-md {
        -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -moz-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
      }

      .col-md-auto {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 auto;
        -moz-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
      }

      .col-md-1 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 8.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
      }

      .col-md-2 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 16.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
      }

      .col-md-3 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 25%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
      }

      .col-md-4 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 33.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
      }

      .col-md-5 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 41.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
      }

      .col-md-6 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 50%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
      }

      .col-md-7 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 58.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
      }

      .col-md-8 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 66.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
      }

      .col-md-9 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 75%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
      }

      .col-md-10 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 83.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
      }

      .col-md-11 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 91.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
      }

      .col-md-12 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 100%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
      }

      .order-md-first {
        -webkit-box-ordinal-group: 0;
        -webkit-order: -1;
        -moz-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1
      }

      .order-md-last {
        -webkit-box-ordinal-group: 14;
        -webkit-order: 13;
        -moz-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13
      }

      .order-md-0 {
        -webkit-box-ordinal-group: 1;
        -webkit-order: 0;
        -moz-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0
      }

      .order-md-1 {
        -webkit-box-ordinal-group: 2;
        -webkit-order: 1;
        -moz-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
      }

      .order-md-2 {
        -webkit-box-ordinal-group: 3;
        -webkit-order: 2;
        -moz-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
      }

      .order-md-3 {
        -webkit-box-ordinal-group: 4;
        -webkit-order: 3;
        -moz-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
      }

      .order-md-4 {
        -webkit-box-ordinal-group: 5;
        -webkit-order: 4;
        -moz-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4
      }

      .order-md-5 {
        -webkit-box-ordinal-group: 6;
        -webkit-order: 5;
        -moz-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5
      }

      .order-md-6 {
        -webkit-box-ordinal-group: 7;
        -webkit-order: 6;
        -moz-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6
      }

      .order-md-7 {
        -webkit-box-ordinal-group: 8;
        -webkit-order: 7;
        -moz-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7
      }

      .order-md-8 {
        -webkit-box-ordinal-group: 9;
        -webkit-order: 8;
        -moz-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8
      }

      .order-md-9 {
        -webkit-box-ordinal-group: 10;
        -webkit-order: 9;
        -moz-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9
      }

      .order-md-10 {
        -webkit-box-ordinal-group: 11;
        -webkit-order: 10;
        -moz-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10
      }

      .order-md-11 {
        -webkit-box-ordinal-group: 12;
        -webkit-order: 11;
        -moz-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11
      }

      .order-md-12 {
        -webkit-box-ordinal-group: 13;
        -webkit-order: 12;
        -moz-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12
      }

      .offset-md-0 {
        margin-left: 0
      }

      .offset-md-1 {
        margin-left: 8.333333%
      }

      .offset-md-2 {
        margin-left: 16.666667%
      }

      .offset-md-3 {
        margin-left: 25%
      }

      .offset-md-4 {
        margin-left: 33.333333%
      }

      .offset-md-5 {
        margin-left: 41.666667%
      }

      .offset-md-6 {
        margin-left: 50%
      }

      .offset-md-7 {
        margin-left: 58.333333%
      }

      .offset-md-8 {
        margin-left: 66.666667%
      }

      .offset-md-9 {
        margin-left: 75%
      }

      .offset-md-10 {
        margin-left: 83.333333%
      }

      .offset-md-11 {
        margin-left: 91.666667%
      }
    }

    @media (min-width:992px) {
      .col-lg {
        -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -moz-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
      }

      .col-lg-auto {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 auto;
        -moz-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
      }

      .col-lg-1 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 8.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
      }

      .col-lg-2 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 16.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
      }

      .col-lg-3 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 25%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
      }

      .col-lg-4 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 33.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
      }

      .col-lg-5 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 41.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
      }

      .col-lg-6 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 50%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
      }

      .col-lg-7 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 58.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
      }

      .col-lg-8 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 66.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
      }

      .col-lg-9 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 75%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
      }

      .col-lg-10 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 83.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
      }

      .col-lg-11 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 91.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
      }

      .col-lg-12 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 100%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
      }

      .order-lg-first {
        -webkit-box-ordinal-group: 0;
        -webkit-order: -1;
        -moz-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1
      }

      .order-lg-last {
        -webkit-box-ordinal-group: 14;
        -webkit-order: 13;
        -moz-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13
      }

      .order-lg-0 {
        -webkit-box-ordinal-group: 1;
        -webkit-order: 0;
        -moz-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0
      }

      .order-lg-1 {
        -webkit-box-ordinal-group: 2;
        -webkit-order: 1;
        -moz-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
      }

      .order-lg-2 {
        -webkit-box-ordinal-group: 3;
        -webkit-order: 2;
        -moz-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
      }

      .order-lg-3 {
        -webkit-box-ordinal-group: 4;
        -webkit-order: 3;
        -moz-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
      }

      .order-lg-4 {
        -webkit-box-ordinal-group: 5;
        -webkit-order: 4;
        -moz-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4
      }

      .order-lg-5 {
        -webkit-box-ordinal-group: 6;
        -webkit-order: 5;
        -moz-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5
      }

      .order-lg-6 {
        -webkit-box-ordinal-group: 7;
        -webkit-order: 6;
        -moz-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6
      }

      .order-lg-7 {
        -webkit-box-ordinal-group: 8;
        -webkit-order: 7;
        -moz-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7
      }

      .order-lg-8 {
        -webkit-box-ordinal-group: 9;
        -webkit-order: 8;
        -moz-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8
      }

      .order-lg-9 {
        -webkit-box-ordinal-group: 10;
        -webkit-order: 9;
        -moz-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9
      }

      .order-lg-10 {
        -webkit-box-ordinal-group: 11;
        -webkit-order: 10;
        -moz-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10
      }

      .order-lg-11 {
        -webkit-box-ordinal-group: 12;
        -webkit-order: 11;
        -moz-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11
      }

      .order-lg-12 {
        -webkit-box-ordinal-group: 13;
        -webkit-order: 12;
        -moz-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12
      }

      .offset-lg-0 {
        margin-left: 0
      }

      .offset-lg-1 {
        margin-left: 8.333333%
      }

      .offset-lg-2 {
        margin-left: 16.666667%
      }

      .offset-lg-3 {
        margin-left: 25%
      }

      .offset-lg-4 {
        margin-left: 33.333333%
      }

      .offset-lg-5 {
        margin-left: 41.666667%
      }

      .offset-lg-6 {
        margin-left: 50%
      }

      .offset-lg-7 {
        margin-left: 58.333333%
      }

      .offset-lg-8 {
        margin-left: 66.666667%
      }

      .offset-lg-9 {
        margin-left: 75%
      }

      .offset-lg-10 {
        margin-left: 83.333333%
      }

      .offset-lg-11 {
        margin-left: 91.666667%
      }
    }

    @media (min-width:1200px) {
      .col-xl {
        -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -moz-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
      }

      .col-xl-auto {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 auto;
        -moz-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
      }

      .col-xl-1 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 8.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
      }

      .col-xl-2 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 16.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
      }

      .col-xl-3 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 25%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
      }

      .col-xl-4 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 33.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
      }

      .col-xl-5 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 41.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
      }

      .col-xl-6 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 50%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
      }

      .col-xl-7 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 58.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
      }

      .col-xl-8 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 66.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
      }

      .col-xl-9 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 75%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
      }

      .col-xl-10 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 83.333333%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
      }

      .col-xl-11 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 91.666667%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
      }

      .col-xl-12 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 100%;
        -moz-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
      }

      .order-xl-first {
        -webkit-box-ordinal-group: 0;
        -webkit-order: -1;
        -moz-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1
      }

      .order-xl-last {
        -webkit-box-ordinal-group: 14;
        -webkit-order: 13;
        -moz-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13
      }

      .order-xl-0 {
        -webkit-box-ordinal-group: 1;
        -webkit-order: 0;
        -moz-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0
      }

      .order-xl-1 {
        -webkit-box-ordinal-group: 2;
        -webkit-order: 1;
        -moz-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
      }

      .order-xl-2 {
        -webkit-box-ordinal-group: 3;
        -webkit-order: 2;
        -moz-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
      }

      .order-xl-3 {
        -webkit-box-ordinal-group: 4;
        -webkit-order: 3;
        -moz-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
      }

      .order-xl-4 {
        -webkit-box-ordinal-group: 5;
        -webkit-order: 4;
        -moz-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4
      }

      .order-xl-5 {
        -webkit-box-ordinal-group: 6;
        -webkit-order: 5;
        -moz-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5
      }

      .order-xl-6 {
        -webkit-box-ordinal-group: 7;
        -webkit-order: 6;
        -moz-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6
      }

      .order-xl-7 {
        -webkit-box-ordinal-group: 8;
        -webkit-order: 7;
        -moz-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7
      }

      .order-xl-8 {
        -webkit-box-ordinal-group: 9;
        -webkit-order: 8;
        -moz-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8
      }

      .order-xl-9 {
        -webkit-box-ordinal-group: 10;
        -webkit-order: 9;
        -moz-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9
      }

      .order-xl-10 {
        -webkit-box-ordinal-group: 11;
        -webkit-order: 10;
        -moz-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10
      }

      .order-xl-11 {
        -webkit-box-ordinal-group: 12;
        -webkit-order: 11;
        -moz-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11
      }

      .order-xl-12 {
        -webkit-box-ordinal-group: 13;
        -webkit-order: 12;
        -moz-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12
      }

      .offset-xl-0 {
        margin-left: 0
      }

      .offset-xl-1 {
        margin-left: 8.333333%
      }

      .offset-xl-2 {
        margin-left: 16.666667%
      }

      .offset-xl-3 {
        margin-left: 25%
      }

      .offset-xl-4 {
        margin-left: 33.333333%
      }

      .offset-xl-5 {
        margin-left: 41.666667%
      }

      .offset-xl-6 {
        margin-left: 50%
      }

      .offset-xl-7 {
        margin-left: 58.333333%
      }

      .offset-xl-8 {
        margin-left: 66.666667%
      }

      .offset-xl-9 {
        margin-left: 75%
      }

      .offset-xl-10 {
        margin-left: 83.333333%
      }

      .offset-xl-11 {
        margin-left: 91.666667%
      }
    }

    .table {
      width: 100%;
      max-width: 100%;
      margin-bottom: 1rem;
      background-color: transparent
    }

    .table td,
    .table th {
      padding: .75rem;
      vertical-align: top;
      border-top: 1px solid #626E82
    }

    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #626E82
    }

    .table tbody+tbody {
      border-top: 2px solid #626E82
    }

    .table .table {
      background-color: #F9FAFD
    }

    .table-sm td,
    .table-sm th {
      padding: .3rem
    }

    .table-bordered,
    .table-bordered td,
    .table-bordered th {
      border: 1px solid #626E82
    }

    .table-bordered thead td,
    .table-bordered thead th {
      border-bottom-width: 2px
    }

    .table-hover tbody tr:hover,
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(245, 247, 250, .5)
    }

    .table-primary,
    .table-primary>td,
    .table-primary>th {
      background-color: #D4D6F9
    }

    .table-hover .table-primary:hover,
    .table-hover .table-primary:hover>td,
    .table-hover .table-primary:hover>th {
      background-color: #BEC1F6
    }

    .table-secondary,
    .table-secondary>td,
    .table-secondary>th {
      background-color: #D6D7DC
    }

    .table-hover .table-secondary:hover,
    .table-hover .table-secondary:hover>td,
    .table-hover .table-secondary:hover>th {
      background-color: #C8CAD0
    }

    .table-success,
    .table-success>td,
    .table-success>th {
      background-color: #C3F2E1
    }

    .table-hover .table-success:hover,
    .table-hover .table-success:hover>td,
    .table-hover .table-success:hover>th {
      background-color: #AEEDD7
    }

    .table-info,
    .table-info>td,
    .table-info>th {
      background-color: #C0E4FB
    }

    .table-hover .table-info:hover,
    .table-hover .table-info:hover>td,
    .table-hover .table-info:hover>th {
      background-color: #A8DAF9
    }

    .table-warning,
    .table-warning>td,
    .table-warning>th {
      background-color: #FFE0CC
    }

    .table-hover .table-warning:hover,
    .table-hover .table-warning:hover>td,
    .table-hover .table-warning:hover>th {
      background-color: #FFD1B3
    }

    .table-danger,
    .table-danger>td,
    .table-danger>th {
      background-color: #FFCCD3
    }

    .table-hover .table-danger:hover,
    .table-hover .table-danger:hover>td,
    .table-hover .table-danger:hover>th {
      background-color: #FFB3BD
    }

    .table-light,
    .table-light>td,
    .table-light>th {
      background-color: #ECEDEF
    }

    .table-hover .table-light:hover,
    .table-hover .table-light:hover>td,
    .table-hover .table-light:hover>th {
      background-color: #DEE0E3
    }

    .table-dark,
    .table-dark>td,
    .table-dark>th {
      background-color: #CBCCCF
    }

    .table-hover .table-dark:hover,
    .table-hover .table-dark:hover>td,
    .table-hover .table-dark:hover>th {
      background-color: #BEBFC3
    }

    .table-active,
    .table-active>td,
    .table-active>th {
      background-color: rgba(245, 247, 250, .5)
    }

    .table-hover .table-active:hover,
    .table-hover .table-active:hover>td,
    .table-hover .table-active:hover>th {
      background-color: rgba(228, 233, 242, .5)
    }

    .table .thead-dark th {
      color: #F9FAFD;
      background-color: #2A2E30;
      border-color: #3C4244
    }

    .table .thead-light th {
      color: #4E5154;
      background-color: #98A4B8;
      border-color: #626E82
    }

    .table-dark {
      color: #F9FAFD;
      background-color: #2A2E30
    }

    .table-dark td,
    .table-dark th,
    .table-dark thead th {
      border-color: #3C4244
    }

    .table-dark.table-bordered,
    .table-responsive>.table-bordered {
      border: 0
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(255, 255, 255, .05)
    }

    .table-dark.table-hover tbody tr:hover {
      background-color: rgba(255, 255, 255, .075)
    }

    @media (max-width:575.98px) {
      .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
      }

      .table-responsive-sm>.table-bordered {
        border: 0
      }
    }

    @media (max-width:767.98px) {
      .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
      }

      .table-responsive-md>.table-bordered {
        border: 0
      }
    }

    @media (max-width:991.98px) {
      .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
      }

      .table-responsive-lg>.table-bordered {
        border: 0
      }
    }

    @media (max-width:1199.98px) {
      .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
      }

      .table-responsive-xl>.table-bordered {
        border: 0
      }
    }

    .table-responsive {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar
    }

    .collapsing,
    .modal,
    .modal-open,
    .progress {
      overflow: hidden
    }

    .form-control {
      display: block;
      width: 100%;
      padding: .75rem 1rem;
      font-size: 1rem;
      line-height: 1.25;
      color: #4E5154;
      background-color: #FFF;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
      border: 1px solid #BABFC7;
      border-radius: .25rem;
      -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
      -moz-transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
      -o-transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .dropdown-menu,
    .modal-content {
      -webkit-background-clip: padding-box
    }

    .form-control::-ms-expand {
      background-color: transparent;
      border: 0
    }

    .form-control:focus {
      color: #4E5154;
      background-color: #FFF;
      border-color: #1E9FF2;
      outline: 0;
      -webkit-box-shadow: none;
      box-shadow: none
    }

    .form-control::-webkit-input-placeholder {
      color: #BABFC7;
      opacity: 1
    }

    .form-control:-moz-placeholder {
      color: #BABFC7;
      opacity: 1
    }

    .form-control::-moz-placeholder {
      color: #BABFC7;
      opacity: 1
    }

    .form-control:-ms-input-placeholder {
      color: #BABFC7;
      opacity: 1
    }

    .form-control::placeholder {
      color: #BABFC7;
      opacity: 1
    }

    .form-control:disabled,
    .form-control[readonly] {
      background-color: #98A4B8;
      opacity: 1
    }

    select.form-control:not([size]):not([multiple]) {
      height: -webkit-calc(2.75rem + 2px);
      height: -moz-calc(2.75rem + 2px);
      height: calc(2.75rem + 2px)
    }

    select.form-control:focus::-ms-value {
      color: #4E5154;
      background-color: #FFF
    }

    .form-control-file,
    .form-control-range {
      display: block;
      width: 100%
    }

    .col-form-label {
      padding-top: -webkit-calc(.75rem + 1px);
      padding-top: -moz-calc(.75rem + 1px);
      padding-top: calc(.75rem + 1px);
      padding-bottom: -webkit-calc(.75rem + 1px);
      padding-bottom: -moz-calc(.75rem + 1px);
      padding-bottom: calc(.75rem + 1px);
      margin-bottom: 0;
      font-size: inherit;
      line-height: 1.25
    }

    .col-form-label-lg {
      padding-top: -webkit-calc(1rem + 1px);
      padding-top: -moz-calc(1rem + 1px);
      padding-top: calc(1rem + 1px);
      padding-bottom: -webkit-calc(1rem + 1px);
      padding-bottom: -moz-calc(1rem + 1px);
      padding-bottom: calc(1rem + 1px);
      font-size: 1.25rem;
      line-height: 1.25
    }

    .col-form-label-sm {
      padding-top: -webkit-calc(.5rem + 1px);
      padding-top: -moz-calc(.5rem + 1px);
      padding-top: calc(.5rem + 1px);
      padding-bottom: -webkit-calc(.5rem + 1px);
      padding-bottom: -moz-calc(.5rem + 1px);
      padding-bottom: calc(.5rem + 1px);
      font-size: .875rem;
      line-height: 1
    }

    .form-control-plaintext {
      display: block;
      width: 100%;
      padding-top: .75rem;
      padding-bottom: .75rem;
      margin-bottom: 0;
      line-height: 1.25;
      background-color: transparent;
      border: solid transparent;
      border-width: 1px 0
    }

    .custom-file-input.is-valid~.custom-file-label,
    .custom-select.is-valid,
    .form-control.is-valid,
    .was-validated .custom-file-input:valid~.custom-file-label,
    .was-validated .custom-select:valid,
    .was-validated .form-control:valid {
      border-color: #28D094
    }

    .form-control-plaintext.form-control-lg,
    .form-control-plaintext.form-control-sm,
    .input-group-lg>.form-control-plaintext.form-control,
    .input-group-lg>.input-group-append>.form-control-plaintext.btn,
    .input-group-lg>.input-group-append>.form-control-plaintext.input-group-text,
    .input-group-lg>.input-group-prepend>.form-control-plaintext.btn,
    .input-group-lg>.input-group-prepend>.form-control-plaintext.input-group-text,
    .input-group-sm>.form-control-plaintext.form-control,
    .input-group-sm>.input-group-append>.form-control-plaintext.btn,
    .input-group-sm>.input-group-append>.form-control-plaintext.input-group-text,
    .input-group-sm>.input-group-prepend>.form-control-plaintext.btn,
    .input-group-sm>.input-group-prepend>.form-control-plaintext.input-group-text {
      padding-right: 0;
      padding-left: 0
    }

    .form-control-sm,
    .input-group-sm>.form-control,
    .input-group-sm>.input-group-append>.btn,
    .input-group-sm>.input-group-append>.input-group-text,
    .input-group-sm>.input-group-prepend>.btn,
    .input-group-sm>.input-group-prepend>.input-group-text {
      padding: .5rem .75rem;
      font-size: .875rem;
      line-height: 1;
      border-radius: .21rem
    }

    .input-group-sm>.input-group-append>select.btn:not([size]):not([multiple]),
    .input-group-sm>.input-group-append>select.input-group-text:not([size]):not([multiple]),
    .input-group-sm>.input-group-prepend>select.btn:not([size]):not([multiple]),
    .input-group-sm>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
    .input-group-sm>select.form-control:not([size]):not([multiple]),
    select.form-control-sm:not([size]):not([multiple]) {
      height: -webkit-calc(1.875rem + 2px + 10);
      height: -moz-calc(1.875rem + 2px + 10);
      height: calc(1.875rem + 2px + 10)
    }

    .form-control-lg,
    .input-group-lg>.form-control,
    .input-group-lg>.input-group-append>.btn,
    .input-group-lg>.input-group-append>.input-group-text,
    .input-group-lg>.input-group-prepend>.btn,
    .input-group-lg>.input-group-prepend>.input-group-text {
      padding: 1rem 1.25rem;
      font-size: 1.25rem;
      line-height: 1.25;
      border-radius: .35rem
    }

    .input-group-lg>.input-group-append>select.btn:not([size]):not([multiple]),
    .input-group-lg>.input-group-append>select.input-group-text:not([size]):not([multiple]),
    .input-group-lg>.input-group-prepend>select.btn:not([size]):not([multiple]),
    .input-group-lg>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
    .input-group-lg>select.form-control:not([size]):not([multiple]),
    select.form-control-lg:not([size]):not([multiple]) {
      height: -webkit-calc(3.5625rem + 2px);
      height: -moz-calc(3.5625rem + 2px);
      height: calc(3.5625rem + 2px)
    }

    .form-group {
      margin-bottom: 1rem
    }

    .form-text {
      display: block;
      margin-top: .25rem
    }

    .form-row {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-right: -5px;
      margin-left: -5px
    }

    .form-row>.col,
    .form-row>[class*=col-] {
      padding-right: 5px;
      padding-left: 5px
    }

    .form-check {
      position: relative;
      display: block;
      padding-left: 1.25rem
    }

    .form-check-input {
      position: absolute;
      margin-top: .3rem;
      margin-left: -1.25rem
    }

    .form-check-input:disabled~.form-check-label {
      color: #6B6F82
    }

    .form-check-label {
      margin-bottom: 0
    }

    .form-check-inline {
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -moz-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      padding-left: 0;
      margin-right: .75rem
    }

    .form-check-inline .form-check-input {
      position: static;
      margin-top: 0;
      margin-right: .3125rem;
      margin-left: 0
    }

    .invalid-tooltip,
    .valid-tooltip {
      position: absolute;
      z-index: 5;
      max-width: 100%;
      padding: .5rem;
      line-height: 1;
      border-radius: .2rem;
      top: 100%
    }

    .valid-feedback {
      display: none;
      width: 100%;
      margin-top: .25rem;
      font-size: 80%;
      color: #28D094
    }

    .valid-tooltip {
      display: none;
      margin-top: .1rem;
      font-size: .875rem;
      color: #FFF;
      background-color: rgba(40, 208, 148, .8)
    }

    .custom-control-input.is-valid~.valid-feedback,
    .custom-control-input.is-valid~.valid-tooltip,
    .custom-file-input.is-valid~.valid-feedback,
    .custom-file-input.is-valid~.valid-tooltip,
    .custom-select.is-valid~.valid-feedback,
    .custom-select.is-valid~.valid-tooltip,
    .form-check-input.is-valid~.valid-feedback,
    .form-check-input.is-valid~.valid-tooltip,
    .form-control.is-valid~.valid-feedback,
    .form-control.is-valid~.valid-tooltip,
    .was-validated .custom-control-input:valid~.valid-feedback,
    .was-validated .custom-control-input:valid~.valid-tooltip,
    .was-validated .custom-file-input:valid~.valid-feedback,
    .was-validated .custom-file-input:valid~.valid-tooltip,
    .was-validated .custom-select:valid~.valid-feedback,
    .was-validated .custom-select:valid~.valid-tooltip,
    .was-validated .form-check-input:valid~.valid-feedback,
    .was-validated .form-check-input:valid~.valid-tooltip,
    .was-validated .form-control:valid~.valid-feedback,
    .was-validated .form-control:valid~.valid-tooltip {
      display: block
    }

    .custom-control-input.is-valid~.custom-control-label,
    .form-check-input.is-valid~.form-check-label,
    .was-validated .custom-control-input:valid~.custom-control-label,
    .was-validated .form-check-input:valid~.form-check-label {
      color: #28D094
    }

    .custom-select.is-valid:focus,
    .form-control.is-valid:focus,
    .was-validated .custom-select:valid:focus,
    .was-validated .form-control:valid:focus {
      border-color: #28D094;
      -webkit-box-shadow: 0 0 0 .2rem rgba(40, 208, 148, .25);
      box-shadow: 0 0 0 .2rem rgba(40, 208, 148, .25)
    }

    .custom-control-input.is-valid~.custom-control-label::before,
    .was-validated .custom-control-input:valid~.custom-control-label::before {
      background-color: #8EE9C9
    }

    .custom-control-input.is-valid:checked~.custom-control-label::before,
    .was-validated .custom-control-input:valid:checked~.custom-control-label::before {
      background-color: #4EDDAA
    }

    .custom-control-input.is-valid:focus~.custom-control-label::before,
    .was-validated .custom-control-input:valid:focus~.custom-control-label::before {
      -webkit-box-shadow: 0 0 0 1px #F9FAFD, 0 0 0 .2rem rgba(40, 208, 148, .25);
      box-shadow: 0 0 0 1px #F9FAFD, 0 0 0 .2rem rgba(40, 208, 148, .25)
    }

    .custom-file-input.is-valid~.custom-file-label::before,
    .was-validated .custom-file-input:valid~.custom-file-label::before {
      border-color: inherit
    }

    .custom-file-input.is-invalid~.custom-file-label,
    .custom-select.is-invalid,
    .form-control.is-invalid,
    .was-validated .custom-file-input:invalid~.custom-file-label,
    .was-validated .custom-select:invalid,
    .was-validated .form-control:invalid {
      border-color: #FF4961
    }

    .custom-file-input.is-valid:focus~.custom-file-label,
    .was-validated .custom-file-input:valid:focus~.custom-file-label {
      -webkit-box-shadow: 0 0 0 .2rem rgba(40, 208, 148, .25);
      box-shadow: 0 0 0 .2rem rgba(40, 208, 148, .25)
    }

    .invalid-feedback {
      display: none;
      width: 100%;
      margin-top: .25rem;
      font-size: 80%;
      color: #FF4961
    }

    .invalid-tooltip {
      display: none;
      margin-top: .1rem;
      font-size: .875rem;
      color: #FFF;
      background-color: rgba(255, 73, 97, .8)
    }

    .collapsing,
    .dropdown,
    .dropup {
      position: relative
    }

    .custom-control-input.is-invalid~.invalid-feedback,
    .custom-control-input.is-invalid~.invalid-tooltip,
    .custom-file-input.is-invalid~.invalid-feedback,
    .custom-file-input.is-invalid~.invalid-tooltip,
    .custom-select.is-invalid~.invalid-feedback,
    .custom-select.is-invalid~.invalid-tooltip,
    .form-check-input.is-invalid~.invalid-feedback,
    .form-check-input.is-invalid~.invalid-tooltip,
    .form-control.is-invalid~.invalid-feedback,
    .form-control.is-invalid~.invalid-tooltip,
    .was-validated .custom-control-input:invalid~.invalid-feedback,
    .was-validated .custom-control-input:invalid~.invalid-tooltip,
    .was-validated .custom-file-input:invalid~.invalid-feedback,
    .was-validated .custom-file-input:invalid~.invalid-tooltip,
    .was-validated .custom-select:invalid~.invalid-feedback,
    .was-validated .custom-select:invalid~.invalid-tooltip,
    .was-validated .form-check-input:invalid~.invalid-feedback,
    .was-validated .form-check-input:invalid~.invalid-tooltip,
    .was-validated .form-control:invalid~.invalid-feedback,
    .was-validated .form-control:invalid~.invalid-tooltip {
      display: block
    }

    .custom-control-input.is-invalid~.custom-control-label,
    .form-check-input.is-invalid~.form-check-label,
    .was-validated .custom-control-input:invalid~.custom-control-label,
    .was-validated .form-check-input:invalid~.form-check-label {
      color: #FF4961
    }

    .custom-select.is-invalid:focus,
    .form-control.is-invalid:focus,
    .was-validated .custom-select:invalid:focus,
    .was-validated .form-control:invalid:focus {
      border-color: #FF4961;
      -webkit-box-shadow: 0 0 0 .2rem rgba(255, 73, 97, .25);
      box-shadow: 0 0 0 .2rem rgba(255, 73, 97, .25)
    }

    .custom-control-input.is-invalid~.custom-control-label::before,
    .was-validated .custom-control-input:invalid~.custom-control-label::before {
      background-color: #FFC9D0
    }

    .custom-control-input.is-invalid:checked~.custom-control-label::before,
    .was-validated .custom-control-input:invalid:checked~.custom-control-label::before {
      background-color: #FF7C8D
    }

    .custom-control-input.is-invalid:focus~.custom-control-label::before,
    .was-validated .custom-control-input:invalid:focus~.custom-control-label::before {
      -webkit-box-shadow: 0 0 0 1px #F9FAFD, 0 0 0 .2rem rgba(255, 73, 97, .25);
      box-shadow: 0 0 0 1px #F9FAFD, 0 0 0 .2rem rgba(255, 73, 97, .25)
    }

    .custom-file-input.is-invalid~.custom-file-label::before,
    .was-validated .custom-file-input:invalid~.custom-file-label::before {
      border-color: inherit
    }

    .custom-file-input.is-invalid:focus~.custom-file-label,
    .was-validated .custom-file-input:invalid:focus~.custom-file-label {
      -webkit-box-shadow: 0 0 0 .2rem rgba(255, 73, 97, .25);
      box-shadow: 0 0 0 .2rem rgba(255, 73, 97, .25)
    }

    .form-inline {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-flow: row wrap;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center
    }

    .form-inline .form-check {
      width: 100%
    }

    @media (min-width:576px) {
      .form-inline label {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 0
      }

      .form-inline .form-group {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 auto;
        -moz-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        -webkit-flex-flow: row wrap;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 0
      }

      .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
      }

      .form-inline .form-control-plaintext {
        display: inline-block
      }

      .form-inline .input-group {
        width: auto
      }

      .form-inline .form-check {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: auto;
        padding-left: 0
      }

      .form-inline .form-check-input {
        position: relative;
        margin-top: 0;
        margin-right: .25rem;
        margin-left: 0
      }

      .form-inline .custom-control {
        -webkit-box-align: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
      }

      .form-inline .custom-control-label {
        margin-bottom: 0
      }
    }

    .btn-block,
    input[type=submit].btn-block,
    input[type=button].btn-block,
    input[type=reset].btn-block {
      width: 100%
    }

    .btn {
      display: inline-block;
      text-align: center;
      vertical-align: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      border: 1px solid transparent;
      padding: .75rem 1rem;
      font-size: 1rem;
      line-height: 1.25;
      border-radius: .25rem;
      -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
      -moz-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
      -o-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .btn:focus,
    .btn:hover {
      text-decoration: none
    }

    .btn.focus,
    .btn:focus {
      outline: 0;
      -webkit-box-shadow: none;
      box-shadow: none
    }

    .btn.disabled,
    .btn:disabled {
      opacity: .65
    }

    .btn:not(:disabled):not(.disabled).active,
    .btn:not(:disabled):not(.disabled):active {
      background-image: none
    }

    a.btn.disabled,
    fieldset:disabled a.btn {
      pointer-events: none
    }

    .btn-primary {
      color: #FFF;
      background-color: #666EE8;
      border-color: #666EE8
    }

    .btn-primary:hover {
      color: #FFF;
      background-color: #454EE3;
      border-color: #3A44E1
    }

    .btn-primary.focus,
    .btn-primary:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(102, 110, 232, .5);
      box-shadow: 0 0 0 .2rem rgba(102, 110, 232, .5)
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
      color: #FFF;
      background-color: #666EE8;
      border-color: #666EE8
    }

    .btn-primary:not(:disabled):not(.disabled).active,
    .btn-primary:not(:disabled):not(.disabled):active,
    .show>.btn-primary.dropdown-toggle {
      color: #FFF;
      background-color: #3A44E1;
      border-color: #2F39E0
    }

    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .btn-primary:not(:disabled):not(.disabled):active:focus,
    .show>.btn-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(102, 110, 232, .5);
      box-shadow: 0 0 0 .2rem rgba(102, 110, 232, .5)
    }

    .btn-secondary {
      color: #FFF;
      background-color: #6B6F82;
      border-color: #6B6F82
    }

    .btn-secondary:hover {
      color: #FFF;
      background-color: #5A5D6D;
      border-color: #545766
    }

    .btn-secondary.focus,
    .btn-secondary:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(107, 111, 130, .5);
      box-shadow: 0 0 0 .2rem rgba(107, 111, 130, .5)
    }

    .btn-secondary.disabled,
    .btn-secondary:disabled {
      color: #FFF;
      background-color: #6B6F82;
      border-color: #6B6F82
    }

    .btn-secondary:not(:disabled):not(.disabled).active,
    .btn-secondary:not(:disabled):not(.disabled):active,
    .show>.btn-secondary.dropdown-toggle {
      color: #FFF;
      background-color: #545766;
      border-color: #4E515F
    }

    .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .btn-secondary:not(:disabled):not(.disabled):active:focus,
    .show>.btn-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(107, 111, 130, .5);
      box-shadow: 0 0 0 .2rem rgba(107, 111, 130, .5)
    }

    .btn-success {
      color: #2A2E30;
      background-color: #28D094;
      border-color: #28D094
    }

    .btn-success:hover {
      color: #FFF;
      background-color: #22B07D;
      border-color: #20A576
    }

    .btn-success.focus,
    .btn-success:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(40, 208, 148, .5);
      box-shadow: 0 0 0 .2rem rgba(40, 208, 148, .5)
    }

    .btn-success.disabled,
    .btn-success:disabled {
      color: #2A2E30;
      background-color: #28D094;
      border-color: #28D094
    }

    .btn-success:not(:disabled):not(.disabled).active,
    .btn-success:not(:disabled):not(.disabled):active,
    .show>.btn-success.dropdown-toggle {
      color: #FFF;
      background-color: #20A576;
      border-color: #1E9B6E
    }

    .btn-success:not(:disabled):not(.disabled).active:focus,
    .btn-success:not(:disabled):not(.disabled):active:focus,
    .show>.btn-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(40, 208, 148, .5);
      box-shadow: 0 0 0 .2rem rgba(40, 208, 148, .5)
    }

    .btn-info {
      color: #FFF;
      background-color: #1E9FF2;
      border-color: #1E9FF2
    }

    .btn-info:hover {
      color: #FFF;
      background-color: #0D8BDD;
      border-color: #0C84D1
    }

    .btn-info.focus,
    .btn-info:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(30, 159, 242, .5);
      box-shadow: 0 0 0 .2rem rgba(30, 159, 242, .5)
    }

    .btn-info.disabled,
    .btn-info:disabled {
      color: #FFF;
      background-color: #1E9FF2;
      border-color: #1E9FF2
    }

    .btn-info:not(:disabled):not(.disabled).active,
    .btn-info:not(:disabled):not(.disabled):active,
    .show>.btn-info.dropdown-toggle {
      color: #FFF;
      background-color: #0C84D1;
      border-color: #0B7CC5
    }

    .btn-info:not(:disabled):not(.disabled).active:focus,
    .btn-info:not(:disabled):not(.disabled):active:focus,
    .show>.btn-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(30, 159, 242, .5);
      box-shadow: 0 0 0 .2rem rgba(30, 159, 242, .5)
    }

    .btn-warning {
      color: #2A2E30;
      background-color: #FF9149;
      border-color: #FF9149
    }

    .btn-warning:hover {
      color: #2A2E30;
      background-color: #FF7A23;
      border-color: #FF7216
    }

    .btn-warning.focus,
    .btn-warning:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(255, 145, 73, .5);
      box-shadow: 0 0 0 .2rem rgba(255, 145, 73, .5)
    }

    .btn-warning.disabled,
    .btn-warning:disabled {
      color: #2A2E30;
      background-color: #FF9149;
      border-color: #FF9149
    }

    .btn-warning:not(:disabled):not(.disabled).active,
    .btn-warning:not(:disabled):not(.disabled):active,
    .show>.btn-warning.dropdown-toggle {
      color: #FFF;
      background-color: #FF7216;
      border-color: #FF6A09
    }

    .btn-warning:not(:disabled):not(.disabled).active:focus,
    .btn-warning:not(:disabled):not(.disabled):active:focus,
    .show>.btn-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(255, 145, 73, .5);
      box-shadow: 0 0 0 .2rem rgba(255, 145, 73, .5)
    }

    .btn-danger {
      color: #FFF;
      background-color: #FF4961;
      border-color: #FF4961
    }

    .btn-danger:hover {
      color: #FFF;
      background-color: #FF2340;
      border-color: #FF1635
    }

    .btn-danger.focus,
    .btn-danger:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(255, 73, 97, .5);
      box-shadow: 0 0 0 .2rem rgba(255, 73, 97, .5)
    }

    .btn-danger.disabled,
    .btn-danger:disabled {
      color: #FFF;
      background-color: #FF4961;
      border-color: #FF4961
    }

    .btn-danger:not(:disabled):not(.disabled).active,
    .btn-danger:not(:disabled):not(.disabled):active,
    .show>.btn-danger.dropdown-toggle {
      color: #FFF;
      background-color: #FF1635;
      border-color: #FF092A
    }

    .btn-danger:not(:disabled):not(.disabled).active:focus,
    .btn-danger:not(:disabled):not(.disabled):active:focus,
    .show>.btn-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(255, 73, 97, .5);
      box-shadow: 0 0 0 .2rem rgba(255, 73, 97, .5)
    }

    .btn-light {
      color: #2A2E30;
      background-color: #BABFC7;
      border-color: #BABFC7
    }

    .btn-light:hover {
      color: #2A2E30;
      background-color: #A5ABB6;
      border-color: #9EA5B0
    }

    .btn-light.focus,
    .btn-light:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(186, 191, 199, .5);
      box-shadow: 0 0 0 .2rem rgba(186, 191, 199, .5)
    }

    .btn-light.disabled,
    .btn-light:disabled {
      color: #2A2E30;
      background-color: #BABFC7;
      border-color: #BABFC7
    }

    .btn-light:not(:disabled):not(.disabled).active,
    .btn-light:not(:disabled):not(.disabled):active,
    .show>.btn-light.dropdown-toggle {
      color: #2A2E30;
      background-color: #9EA5B0;
      border-color: #979EAA
    }

    .btn-light:not(:disabled):not(.disabled).active:focus,
    .btn-light:not(:disabled):not(.disabled):active:focus,
    .show>.btn-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(186, 191, 199, .5);
      box-shadow: 0 0 0 .2rem rgba(186, 191, 199, .5)
    }

    .btn-dark {
      color: #FFF;
      background-color: #464855;
      border-color: #464855
    }

    .btn-dark:hover {
      color: #FFF;
      background-color: #353640;
      border-color: #2F3039
    }

    .btn-dark.focus,
    .btn-dark:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(70, 72, 85, .5);
      box-shadow: 0 0 0 .2rem rgba(70, 72, 85, .5)
    }

    .btn-dark.disabled,
    .btn-dark:disabled {
      color: #FFF;
      background-color: #464855;
      border-color: #464855
    }

    .btn-dark:not(:disabled):not(.disabled).active,
    .btn-dark:not(:disabled):not(.disabled):active,
    .show>.btn-dark.dropdown-toggle {
      color: #FFF;
      background-color: #2F3039;
      border-color: #292A32
    }

    .btn-dark:not(:disabled):not(.disabled).active:focus,
    .btn-dark:not(:disabled):not(.disabled):active:focus,
    .show>.btn-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(70, 72, 85, .5);
      box-shadow: 0 0 0 .2rem rgba(70, 72, 85, .5)
    }

    .btn-outline-primary {
      color: #666EE8;
      background-color: transparent;
      background-image: none;
      border-color: #666EE8
    }

    .btn-outline-primary:hover {
      color: #FFF;
      background-color: #666EE8;
      border-color: #666EE8
    }

    .btn-outline-primary.focus,
    .btn-outline-primary:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(102, 110, 232, .5);
      box-shadow: 0 0 0 .2rem rgba(102, 110, 232, .5)
    }

    .btn-outline-primary.disabled,
    .btn-outline-primary:disabled {
      color: #666EE8;
      background-color: transparent
    }

    .btn-outline-primary:not(:disabled):not(.disabled).active,
    .btn-outline-primary:not(:disabled):not(.disabled):active,
    .show>.btn-outline-primary.dropdown-toggle {
      color: #FFF;
      background-color: #666EE8;
      border-color: #666EE8
    }

    .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(102, 110, 232, .5);
      box-shadow: 0 0 0 .2rem rgba(102, 110, 232, .5)
    }

    .btn-outline-secondary {
      color: #6B6F82;
      background-color: transparent;
      background-image: none;
      border-color: #6B6F82
    }

    .btn-outline-secondary:hover {
      color: #FFF;
      background-color: #6B6F82;
      border-color: #6B6F82
    }

    .btn-outline-secondary.focus,
    .btn-outline-secondary:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(107, 111, 130, .5);
      box-shadow: 0 0 0 .2rem rgba(107, 111, 130, .5)
    }

    .btn-outline-secondary.disabled,
    .btn-outline-secondary:disabled {
      color: #6B6F82;
      background-color: transparent
    }

    .btn-outline-secondary:not(:disabled):not(.disabled).active,
    .btn-outline-secondary:not(:disabled):not(.disabled):active,
    .show>.btn-outline-secondary.dropdown-toggle {
      color: #FFF;
      background-color: #6B6F82;
      border-color: #6B6F82
    }

    .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(107, 111, 130, .5);
      box-shadow: 0 0 0 .2rem rgba(107, 111, 130, .5)
    }

    .btn-outline-success {
      color: #28D094;
      background-color: transparent;
      background-image: none;
      border-color: #28D094
    }

    .btn-outline-success:hover {
      color: #2A2E30;
      background-color: #28D094;
      border-color: #28D094
    }

    .btn-outline-success.focus,
    .btn-outline-success:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(40, 208, 148, .5);
      box-shadow: 0 0 0 .2rem rgba(40, 208, 148, .5)
    }

    .btn-outline-success.disabled,
    .btn-outline-success:disabled {
      color: #28D094;
      background-color: transparent
    }

    .btn-outline-success:not(:disabled):not(.disabled).active,
    .btn-outline-success:not(:disabled):not(.disabled):active,
    .show>.btn-outline-success.dropdown-toggle {
      color: #2A2E30;
      background-color: #28D094;
      border-color: #28D094
    }

    .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .btn-outline-success:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(40, 208, 148, .5);
      box-shadow: 0 0 0 .2rem rgba(40, 208, 148, .5)
    }

    .btn-outline-info {
      color: #1E9FF2;
      background-color: transparent;
      background-image: none;
      border-color: #1E9FF2
    }

    .btn-outline-info:hover {
      color: #FFF;
      background-color: #1E9FF2;
      border-color: #1E9FF2
    }

    .btn-outline-info.focus,
    .btn-outline-info:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(30, 159, 242, .5);
      box-shadow: 0 0 0 .2rem rgba(30, 159, 242, .5)
    }

    .btn-outline-info.disabled,
    .btn-outline-info:disabled {
      color: #1E9FF2;
      background-color: transparent
    }

    .btn-outline-info:not(:disabled):not(.disabled).active,
    .btn-outline-info:not(:disabled):not(.disabled):active,
    .show>.btn-outline-info.dropdown-toggle {
      color: #FFF;
      background-color: #1E9FF2;
      border-color: #1E9FF2
    }

    .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .btn-outline-info:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(30, 159, 242, .5);
      box-shadow: 0 0 0 .2rem rgba(30, 159, 242, .5)
    }

    .btn-outline-warning {
      color: #FF9149;
      background-color: transparent;
      background-image: none;
      border-color: #FF9149
    }

    .btn-outline-warning:hover {
      color: #2A2E30;
      background-color: #FF9149;
      border-color: #FF9149
    }

    .btn-outline-warning.focus,
    .btn-outline-warning:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(255, 145, 73, .5);
      box-shadow: 0 0 0 .2rem rgba(255, 145, 73, .5)
    }

    .btn-outline-warning.disabled,
    .btn-outline-warning:disabled {
      color: #FF9149;
      background-color: transparent
    }

    .btn-outline-warning:not(:disabled):not(.disabled).active,
    .btn-outline-warning:not(:disabled):not(.disabled):active,
    .show>.btn-outline-warning.dropdown-toggle {
      color: #2A2E30;
      background-color: #FF9149;
      border-color: #FF9149
    }

    .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(255, 145, 73, .5);
      box-shadow: 0 0 0 .2rem rgba(255, 145, 73, .5)
    }

    .btn-outline-danger {
      color: #FF4961;
      background-color: transparent;
      background-image: none;
      border-color: #FF4961
    }

    .btn-outline-danger:hover {
      color: #FFF;
      background-color: #FF4961;
      border-color: #FF4961
    }

    .btn-outline-danger.focus,
    .btn-outline-danger:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(255, 73, 97, .5);
      box-shadow: 0 0 0 .2rem rgba(255, 73, 97, .5)
    }

    .btn-outline-danger.disabled,
    .btn-outline-danger:disabled {
      color: #FF4961;
      background-color: transparent
    }

    .btn-outline-danger:not(:disabled):not(.disabled).active,
    .btn-outline-danger:not(:disabled):not(.disabled):active,
    .show>.btn-outline-danger.dropdown-toggle {
      color: #FFF;
      background-color: #FF4961;
      border-color: #FF4961
    }

    .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(255, 73, 97, .5);
      box-shadow: 0 0 0 .2rem rgba(255, 73, 97, .5)
    }

    .btn-outline-light {
      color: #BABFC7;
      background-color: transparent;
      background-image: none;
      border-color: #BABFC7
    }

    .btn-outline-light:hover {
      color: #2A2E30;
      background-color: #BABFC7;
      border-color: #BABFC7
    }

    .btn-outline-light.focus,
    .btn-outline-light:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(186, 191, 199, .5);
      box-shadow: 0 0 0 .2rem rgba(186, 191, 199, .5)
    }

    .btn-outline-light.disabled,
    .btn-outline-light:disabled {
      color: #BABFC7;
      background-color: transparent
    }

    .btn-outline-light:not(:disabled):not(.disabled).active,
    .btn-outline-light:not(:disabled):not(.disabled):active,
    .show>.btn-outline-light.dropdown-toggle {
      color: #2A2E30;
      background-color: #BABFC7;
      border-color: #BABFC7
    }

    .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .btn-outline-light:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(186, 191, 199, .5);
      box-shadow: 0 0 0 .2rem rgba(186, 191, 199, .5)
    }

    .btn-outline-dark {
      color: #464855;
      background-color: transparent;
      background-image: none;
      border-color: #464855
    }

    .btn-outline-dark:hover {
      color: #FFF;
      background-color: #464855;
      border-color: #464855
    }

    .btn-outline-dark.focus,
    .btn-outline-dark:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(70, 72, 85, .5);
      box-shadow: 0 0 0 .2rem rgba(70, 72, 85, .5)
    }

    .btn-outline-dark.disabled,
    .btn-outline-dark:disabled {
      color: #464855;
      background-color: transparent
    }

    .btn-outline-dark:not(:disabled):not(.disabled).active,
    .btn-outline-dark:not(:disabled):not(.disabled):active,
    .show>.btn-outline-dark.dropdown-toggle {
      color: #FFF;
      background-color: #464855;
      border-color: #464855
    }

    .btn-link,
    .btn-link:hover {
      background-color: transparent
    }

    .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgba(70, 72, 85, .5);
      box-shadow: 0 0 0 .2rem rgba(70, 72, 85, .5)
    }

    .btn-link {
      color: #5059E5
    }

    .btn-link:hover {
      color: #3A44E1;
      text-decoration: none;
      border-color: transparent
    }

    .btn-link.focus,
    .btn-link:focus {
      text-decoration: none;
      border-color: transparent;
      -webkit-box-shadow: none;
      box-shadow: none
    }

    .btn-link.disabled,
    .btn-link:disabled {
      color: #6B6F82
    }

    .btn-group-lg>.btn,
    .btn-lg {
      padding: 1rem 1.25rem;
      font-size: 1.25rem;
      line-height: 1.25;
      border-radius: .35rem
    }

    .btn-group-sm>.btn,
    .btn-sm {
      padding: .5rem .75rem;
      font-size: .875rem;
      line-height: 1;
      border-radius: .21rem
    }

    .btn-block {
      display: block
    }

    .btn-block+.btn-block {
      margin-top: .5rem
    }

    .dropdown-toggle::after,
    .dropup .dropdown-toggle::after {
      width: 0;
      height: 0;
      vertical-align: .255em;
      content: ''
    }

    .fade {
      opacity: 0;
      -webkit-transition: opacity .15s linear;
      -moz-transition: opacity .15s linear;
      -o-transition: opacity .15s linear;
      transition: opacity .15s linear
    }

    .fade.show {
      opacity: 1
    }

    .collapse {
      display: none
    }

    .collapse.show {
      display: block
    }

    tr.collapse.show {
      display: table-row
    }

    tbody.collapse.show {
      display: table-row-group
    }

    .collapsing {
      height: 0;
      -webkit-transition: height .35s ease;
      -moz-transition: height .35s ease;
      -o-transition: height .35s ease;
      transition: height .35s ease
    }

    .dropdown-toggle::after {
      display: inline-block;
      margin-left: .255em;
      border-top: .3em solid;
      border-right: .3em solid transparent;
      border-bottom: 0;
      border-left: .3em solid transparent
    }

    .dropdown-toggle:empty::after {
      margin-left: 0
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1000;
      display: none;
      float: left;
      min-width: 10rem;
      padding: .5rem 0;
      margin: .125rem 0 0;
      font-size: 1rem;
      color: #6B6F82;
      text-align: left;
      background-color: #FFF;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, .15);
      border-radius: .25rem
    }

    .dropup .dropdown-menu {
      margin-top: 0;
      margin-bottom: .125rem
    }

    .dropup .dropdown-toggle::after {
      display: inline-block;
      margin-left: .255em;
      border-top: 0;
      border-right: .3em solid transparent;
      border-bottom: .3em solid;
      border-left: .3em solid transparent
    }

    .dropleft .dropdown-toggle::before,
    .dropright .dropdown-toggle::after {
      width: 0;
      content: '';
      border-top: .3em solid transparent;
      border-bottom: .3em solid transparent;
      height: 0
    }

    .dropup .dropdown-toggle:empty::after {
      margin-left: 0
    }

    .dropright .dropdown-menu {
      margin-top: 0;
      margin-left: .125rem
    }

    .dropright .dropdown-toggle::after {
      display: inline-block;
      margin-left: .255em;
      border-left: .3em solid;
      vertical-align: 0
    }

    .dropright .dropdown-toggle:empty::after {
      margin-left: 0
    }

    .dropleft .dropdown-menu {
      margin-top: 0;
      margin-right: .125rem
    }

    .dropleft .dropdown-toggle::after {
      width: 0;
      height: 0;
      margin-left: .255em;
      vertical-align: .255em;
      content: '';
      display: none
    }

    .dropleft .dropdown-toggle::before {
      display: inline-block;
      margin-right: .255em;
      border-right: .3em solid;
      vertical-align: 0
    }

    .dropleft .dropdown-toggle:empty::after {
      margin-left: 0
    }

    .dropdown-divider {
      height: 0;
      margin: .5rem 0;
      overflow: hidden;
      border-top: 1px solid #98A4B8
    }

    .btn-group-toggle>.btn,
    .btn-group-toggle>.btn-group>.btn,
    .custom-control-label,
    .custom-file,
    .dropdown-header,
    .input-group-text,
    .nav {
      margin-bottom: 0
    }

    .dropdown-item {
      display: block;
      width: 100%;
      padding: .25rem 1.5rem;
      clear: both;
      color: #2A2E30;
      text-align: inherit;
      background-color: transparent;
      border: 0
    }

    .btn-group>.btn-group:not(:last-child)>.btn,
    .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
    .input-group>.custom-file:not(:last-child) .custom-file-label,
    .input-group>.custom-file:not(:last-child) .custom-file-label::before,
    .input-group>.custom-select:not(:last-child),
    .input-group>.form-control:not(:last-child) {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .btn-group>.btn-group:not(:first-child)>.btn,
    .btn-group>.btn:not(:first-child),
    .input-group>.custom-file:not(:first-child) .custom-file-label,
    .input-group>.custom-file:not(:first-child) .custom-file-label::before,
    .input-group>.custom-select:not(:first-child),
    .input-group>.form-control:not(:first-child) {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0
    }

    .dropdown-item:focus,
    .dropdown-item:hover {
      color: #1E2122;
      text-decoration: none;
      background-color: #F9FAFD
    }

    .dropdown-item.active,
    .dropdown-item:active {
      color: #FFF;
      text-decoration: none;
      background-color: #1E9FF2
    }

    .dropdown-item.disabled,
    .dropdown-item:disabled {
      color: #6B6F82;
      background-color: transparent
    }

    .dropdown-menu.show {
      display: block
    }

    .dropdown-header {
      display: block;
      padding: .5rem 1.5rem;
      font-size: .875rem;
      color: #6B6F82
    }

    .btn-group,
    .btn-group-vertical {
      position: relative;
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -moz-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      vertical-align: middle
    }

    .btn-toolbar,
    .input-group {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox
    }

    .btn-group-vertical>.btn,
    .btn-group>.btn {
      position: relative;
      -webkit-box-flex: 0;
      -webkit-flex: 0 1 auto;
      -moz-box-flex: 0;
      -ms-flex: 0 1 auto;
      flex: 0 1 auto
    }

    .btn-group-vertical>.btn.active,
    .btn-group-vertical>.btn:active,
    .btn-group-vertical>.btn:focus,
    .btn-group-vertical>.btn:hover,
    .btn-group>.btn.active,
    .btn-group>.btn:active,
    .btn-group>.btn:focus,
    .btn-group>.btn:hover {
      z-index: 1
    }

    .btn-group .btn+.btn,
    .btn-group .btn+.btn-group,
    .btn-group .btn-group+.btn,
    .btn-group .btn-group+.btn-group,
    .btn-group-vertical .btn+.btn,
    .btn-group-vertical .btn+.btn-group,
    .btn-group-vertical .btn-group+.btn,
    .btn-group-vertical .btn-group+.btn-group {
      margin-left: -1px
    }

    .btn-group>.btn:first-child,
    .card>hr,
    .dropdown-toggle-split::after {
      margin-left: 0
    }

    .btn-toolbar {
      display: flex;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -moz-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start
    }

    .btn-toolbar .input-group {
      width: auto
    }

    .dropdown-toggle-split {
      padding-right: .75rem;
      padding-left: .75rem
    }

    .btn-group-sm>.btn+.dropdown-toggle-split,
    .btn-sm+.dropdown-toggle-split {
      padding-right: .5625rem;
      padding-left: .5625rem
    }

    .btn-group-lg>.btn+.dropdown-toggle-split,
    .btn-lg+.dropdown-toggle-split {
      padding-right: .9375rem;
      padding-left: .9375rem
    }

    .btn-group-vertical {
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -moz-box-orient: vertical;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -moz-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -moz-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .btn-group-vertical .btn,
    .btn-group-vertical .btn-group {
      width: 100%
    }

    .btn-group-vertical>.btn+.btn,
    .btn-group-vertical>.btn+.btn-group,
    .btn-group-vertical>.btn-group+.btn,
    .btn-group-vertical>.btn-group+.btn-group {
      margin-top: -1px;
      margin-left: 0
    }

    .input-group-append,
    .input-group-append .btn+.btn,
    .input-group-append .btn+.input-group-text,
    .input-group-append .input-group-text+.btn,
    .input-group-append .input-group-text+.input-group-text,
    .input-group-prepend .btn+.btn,
    .input-group-prepend .btn+.input-group-text,
    .input-group-prepend .input-group-text+.btn,
    .input-group-prepend .input-group-text+.input-group-text,
    .input-group>.custom-file+.custom-file,
    .input-group>.custom-file+.custom-select,
    .input-group>.custom-file+.form-control,
    .input-group>.custom-select+.custom-file,
    .input-group>.custom-select+.custom-select,
    .input-group>.custom-select+.form-control,
    .input-group>.form-control+.custom-file,
    .input-group>.form-control+.custom-select,
    .input-group>.form-control+.form-control {
      margin-left: -1px
    }

    .btn-group-vertical>.btn-group:not(:last-child)>.btn,
    .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
    }

    .btn-group-vertical>.btn-group:not(:first-child)>.btn,
    .btn-group-vertical>.btn:not(:first-child) {
      border-top-left-radius: 0;
      border-top-right-radius: 0
    }

    .btn-group-toggle>.btn input[type=radio],
    .btn-group-toggle>.btn input[type=checkbox],
    .btn-group-toggle>.btn-group>.btn input[type=radio],
    .btn-group-toggle>.btn-group>.btn input[type=checkbox] {
      position: absolute;
      clip: rect(0, 0, 0, 0);
      pointer-events: none
    }

    .input-group {
      position: relative;
      display: flex;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-align: stretch;
      -webkit-align-items: stretch;
      -moz-box-align: stretch;
      -ms-flex-align: stretch;
      align-items: stretch;
      width: 100%
    }

    .input-group-append,
    .input-group-prepend,
    .input-group>.custom-file {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox
    }

    .input-group>.custom-file,
    .input-group>.custom-select,
    .input-group>.form-control {
      position: relative;
      -webkit-box-flex: 1;
      -webkit-flex: 1 1 auto;
      -moz-box-flex: 1;
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      width: 1%;
      margin-bottom: 0
    }

    .input-group>.custom-file:focus,
    .input-group>.custom-select:focus,
    .input-group>.form-control:focus {
      z-index: 3
    }

    .input-group>.custom-file {
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center
    }

    .input-group-append,
    .input-group-prepend {
      display: flex
    }

    .input-group-append .btn,
    .input-group-prepend .btn {
      position: relative;
      z-index: 2
    }

    .input-group-prepend {
      margin-right: -1px
    }

    .input-group-text {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      padding: .75rem 1rem;
      font-size: 1rem;
      line-height: 1.25;
      color: #4E5154;
      text-align: center;
      background-color: #F9FAFD;
      border: 1px solid #BABFC7;
      border-radius: .25rem
    }

    .alert-link,
    .badge,
    .close {
      font-weight: 700
    }

    .input-group-text input[type=radio],
    .input-group-text input[type=checkbox] {
      margin-top: 0
    }

    .input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
    .input-group>.input-group-append:last-child>.input-group-text:not(:last-child),
    .input-group>.input-group-append:not(:last-child)>.btn,
    .input-group>.input-group-append:not(:last-child)>.input-group-text,
    .input-group>.input-group-prepend>.btn,
    .input-group>.input-group-prepend>.input-group-text {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .input-group>.input-group-append>.btn,
    .input-group>.input-group-append>.input-group-text,
    .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
    .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),
    .input-group>.input-group-prepend:not(:first-child)>.btn,
    .input-group>.input-group-prepend:not(:first-child)>.input-group-text {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0
    }

    .custom-control {
      position: relative;
      display: block;
      min-height: 1.45rem;
      padding-left: 1.5rem
    }

    .custom-control-inline {
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -moz-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      margin-right: 1rem
    }

    .custom-control-label::after,
    .custom-control-label::before {
      position: absolute;
      top: .225rem;
      display: block;
      width: 1rem;
      height: 1rem;
      content: '';
      left: 0
    }

    .custom-control-input {
      position: absolute;
      z-index: -1;
      opacity: 0
    }

    .custom-control-input:checked~.custom-control-label::before {
      color: #FFF;
      background-color: #1E9FF2
    }

    .custom-control-input:focus~.custom-control-label::before {
      -webkit-box-shadow: 0 0 0 1px #F9FAFD, none;
      box-shadow: 0 0 0 1px #F9FAFD, none
    }

    .custom-control-input:active~.custom-control-label::before {
      color: #FFF;
      background-color: #C7E7FC
    }

    .custom-control-input:disabled~.custom-control-label {
      color: #6B6F82
    }

    .custom-control-input:disabled~.custom-control-label::before {
      background-color: #98A4B8
    }

    .custom-control-label::before {
      pointer-events: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-color: #626E82
    }

    .custom-checkbox .custom-control-input:checked~.custom-control-label::before,
    .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
      background-color: #1E9FF2
    }

    .custom-control-label::after {
      background-repeat: no-repeat;
      background-position: center center;
      -webkit-background-size: 50% 50%;
      background-size: 50% 50%
    }

    .custom-file-input:lang(en)~.custom-file-label::after,
    .custom-file-label::after {
      content: 'Browse'
    }

    .custom-checkbox .custom-control-label::before {
      border-radius: .25rem
    }

    .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
      background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 8 8\'%3E%3Cpath fill=\'%23fff\' d=\'M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z\'/%3E%3C/svg%3E')
    }

    .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
      background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 4 4\'%3E%3Cpath stroke=\'%23fff\' d=\'M0 2h4\'/%3E%3C/svg%3E')
    }

    .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before,
    .custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
      background-color: rgba(102, 110, 232, .5)
    }

    .custom-radio .custom-control-label::before {
      border-radius: 50%
    }

    .custom-radio .custom-control-input:checked~.custom-control-label::before {
      background-color: #1E9FF2
    }

    .custom-radio .custom-control-input:checked~.custom-control-label::after {
      background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'-4 -4 8 8\'%3E%3Ccircle r=\'3\' fill=\'%23fff\'/%3E%3C/svg%3E')
    }

    .custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
      background-color: rgba(102, 110, 232, .5)
    }

    .custom-select {
      display: inline-block;
      width: 100%;
      height: -webkit-calc(2.75rem + 2px);
      height: -moz-calc(2.75rem + 2px);
      height: calc(2.75rem + 2px);
      padding: .375rem 1.75rem .375rem .75rem;
      line-height: 1.25;
      color: #4E5154;
      vertical-align: middle;
      background: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 4 5\'%3E%3Cpath fill=\'%23464855\' d=\'M2 0L0 2h4zm0 5L0 3h4z\'/%3E%3C/svg%3E') right .75rem center no-repeat #FFF;
      -webkit-background-size: 8px 10px;
      background-size: 8px 10px;
      border: 1px solid #BABFC7;
      border-radius: .25rem;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none
    }

    .custom-select-lg,
    .custom-select-sm {
      padding-top: .375rem;
      padding-bottom: .375rem
    }

    .custom-file-input:focus~.custom-file-control::before,
    .custom-select:focus {
      border-color: #1E9FF2
    }

    .custom-select:focus {
      outline: 0;
      -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .075), 0 0 5px rgba(30, 159, 242, .5);
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, .075), 0 0 5px rgba(30, 159, 242, .5)
    }

    .custom-select:focus::-ms-value {
      color: #4E5154;
      background-color: #FFF
    }

    .custom-select[multiple],
    .custom-select[size]:not([size='1']) {
      height: auto;
      padding-right: .75rem;
      background-image: none
    }

    .custom-select:disabled {
      color: #6B6F82;
      background-color: #98A4B8
    }

    .custom-select::-ms-expand {
      opacity: 0
    }

    .custom-select-sm {
      height: -webkit-calc(1.875rem + 2px + 10);
      height: -moz-calc(1.875rem + 2px + 10);
      height: calc(1.875rem + 2px + 10);
      font-size: 75%
    }

    .custom-select-lg {
      height: -webkit-calc(3.5625rem + 2px);
      height: -moz-calc(3.5625rem + 2px);
      height: calc(3.5625rem + 2px);
      font-size: 125%
    }

    .custom-file,
    .custom-file-input {
      position: relative;
      width: 100%;
      height: -webkit-calc(2.75rem + 2px);
      height: -moz-calc(2.75rem + 2px)
    }

    .custom-file {
      display: inline-block;
      height: calc(2.75rem + 2px)
    }

    .custom-file-input {
      z-index: 2;
      height: calc(2.75rem + 2px);
      margin: 0;
      opacity: 0
    }

    .custom-file-label,
    .custom-file-label::after {
      position: absolute;
      padding: .75rem 1rem;
      line-height: 1.25;
      color: #4E5154;
      top: 0;
      right: 0
    }

    .custom-file-input:focus~.custom-file-control {
      border-color: #1E9FF2;
      -webkit-box-shadow: none;
      box-shadow: none
    }

    .custom-file-label {
      left: 0;
      z-index: 1;
      height: -webkit-calc(2.75rem + 2px);
      height: -moz-calc(2.75rem + 2px);
      height: calc(2.75rem + 2px);
      background-color: #FFF;
      border: 1px solid #BABFC7;
      border-radius: .25rem
    }

    .custom-file-label::after {
      bottom: 0;
      z-index: 3;
      display: block;
      height: -webkit-calc(calc(2.75rem + 2px) - 1px * 2);
      height: -moz-calc(calc(2.75rem + 2px) - 1px * 2);
      height: calc(calc(2.75rem + 2px) - 1px * 2);
      background-color: #F9FAFD;
      border-left: 1px solid #BABFC7;
      border-radius: 0 .25rem .25rem 0
    }

    .nav,
    .navbar {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      -webkit-flex-wrap: wrap
    }

    .nav {
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      padding-left: 0
    }

    .nav-link,
    .navbar {
      padding: .5rem 1rem
    }

    .nav-link {
      display: block
    }

    .nav-link:focus,
    .nav-link:hover {
      text-decoration: none
    }

    .nav-link.disabled {
      color: #6B6F82
    }

    .nav-tabs {
      border-bottom: 1px solid #BABFC7
    }

    .nav-tabs .nav-item {
      margin-bottom: -1px
    }

    .nav-tabs .nav-link {
      border: 1px solid transparent;
      border-top-left-radius: .25rem;
      border-top-right-radius: .25rem
    }

    .nav-tabs .nav-link:focus,
    .nav-tabs .nav-link:hover {
      border-color: #BABFC7
    }

    .nav-tabs .nav-link.disabled {
      color: #6B6F82;
      background-color: transparent;
      border-color: transparent
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
      color: #4E5154;
      background-color: #F9FAFD;
      border-color: #BABFC7 #BABFC7 #F9FAFD
    }

    .nav-tabs .dropdown-menu {
      margin-top: -1px;
      border-top-left-radius: 0;
      border-top-right-radius: 0
    }

    .nav-pills .nav-link {
      border-radius: .25rem
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      color: #FFF;
      background-color: #1E9FF2
    }

    .nav-fill .nav-item {
      -webkit-box-flex: 1;
      -webkit-flex: 1 1 auto;
      -moz-box-flex: 1;
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      text-align: center
    }

    .nav-justified .nav-item {
      -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
      flex-basis: 0;
      -webkit-box-flex: 1;
      -webkit-flex-grow: 1;
      -moz-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      text-align: center
    }

    .tab-content>.tab-pane {
      display: none
    }

    .tab-content>.active {
      display: block
    }

    .navbar {
      position: relative;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      -webkit-justify-content: space-between;
      -moz-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between
    }

    .navbar>.container,
    .navbar>.container-fluid {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      -webkit-justify-content: space-between;
      -moz-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between
    }

    .navbar-brand {
      display: inline-block;
      padding-top: .31875rem;
      padding-bottom: .31875rem;
      margin-right: 1rem;
      font-size: 1.25rem;
      line-height: inherit
    }

    .navbar-brand:focus,
    .navbar-brand:hover {
      text-decoration: none
    }

    .navbar-nav {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -moz-box-orient: vertical;
      -ms-flex-direction: column;
      flex-direction: column;
      padding-left: 0;
      margin-bottom: 0
    }

    .navbar-nav .nav-link {
      padding-right: 0;
      padding-left: 0
    }

    .navbar-nav .dropdown-menu {
      position: static;
      float: none
    }

    .navbar-text {
      display: inline-block;
      padding-top: .5rem;
      padding-bottom: .5rem
    }

    .navbar-collapse {
      -webkit-flex-basis: 100%;
      -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
      -webkit-box-flex: 1;
      -webkit-flex-grow: 1;
      -moz-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center
    }

    .navbar-toggler {
      padding: .25rem .75rem;
      font-size: 1.25rem;
      line-height: 1;
      background-color: transparent;
      border: 1px solid transparent;
      border-radius: .25rem
    }

    .navbar-toggler:focus,
    .navbar-toggler:hover {
      text-decoration: none
    }

    .navbar-toggler-icon {
      display: inline-block;
      width: 1.5em;
      height: 1.5em;
      vertical-align: middle;
      content: '';
      background: center center no-repeat;
      -webkit-background-size: 100% 100%;
      background-size: 100% 100%
    }

    .card,
    .card-footer,
    .card-header {
      background-color: #FFF
    }

    @media (max-width:575.98px) {

      .navbar-expand-sm>.container,
      .navbar-expand-sm>.container-fluid {
        padding-right: 0;
        padding-left: 0
      }
    }

    @media (min-width:576px) {
      .navbar-expand-sm {
        -webkit-flex-flow: row nowrap;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -moz-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .navbar-expand-sm .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -moz-box-orient: horizontal;
        -moz-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
      }

      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute
      }

      .navbar-expand-sm .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
      }

      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
      }

      .navbar-expand-sm>.container,
      .navbar-expand-sm>.container-fluid {
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
      }

      .navbar-expand-sm .navbar-collapse {
        display: -webkit-box !important;
        display: -webkit-flex !important;
        display: -moz-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -webkit-flex-basis: auto;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
      }

      .navbar-expand-sm .navbar-toggler {
        display: none
      }

      .navbar-expand-sm .dropup .dropdown-menu {
        top: auto;
        bottom: 100%
      }
    }

    @media (max-width:767.98px) {

      .navbar-expand-md>.container,
      .navbar-expand-md>.container-fluid {
        padding-right: 0;
        padding-left: 0
      }
    }

    @media (min-width:768px) {
      .navbar-expand-md {
        -webkit-flex-flow: row nowrap;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -moz-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .navbar-expand-md .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -moz-box-orient: horizontal;
        -moz-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
      }

      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute
      }

      .navbar-expand-md .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
      }

      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
      }

      .navbar-expand-md>.container,
      .navbar-expand-md>.container-fluid {
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
      }

      .navbar-expand-md .navbar-collapse {
        display: -webkit-box !important;
        display: -webkit-flex !important;
        display: -moz-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -webkit-flex-basis: auto;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
      }

      .navbar-expand-md .navbar-toggler {
        display: none
      }

      .navbar-expand-md .dropup .dropdown-menu {
        top: auto;
        bottom: 100%
      }
    }

    @media (max-width:991.98px) {

      .navbar-expand-lg>.container,
      .navbar-expand-lg>.container-fluid {
        padding-right: 0;
        padding-left: 0
      }
    }

    @media (min-width:992px) {
      .navbar-expand-lg {
        -webkit-flex-flow: row nowrap;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -moz-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .navbar-expand-lg .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -moz-box-orient: horizontal;
        -moz-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
      }

      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute
      }

      .navbar-expand-lg .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
      }

      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
      }

      .navbar-expand-lg>.container,
      .navbar-expand-lg>.container-fluid {
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
      }

      .navbar-expand-lg .navbar-collapse {
        display: -webkit-box !important;
        display: -webkit-flex !important;
        display: -moz-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -webkit-flex-basis: auto;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
      }

      .navbar-expand-lg .navbar-toggler {
        display: none
      }

      .navbar-expand-lg .dropup .dropdown-menu {
        top: auto;
        bottom: 100%
      }
    }

    @media (max-width:1199.98px) {

      .navbar-expand-xl>.container,
      .navbar-expand-xl>.container-fluid {
        padding-right: 0;
        padding-left: 0
      }
    }

    @media (min-width:1200px) {
      .navbar-expand-xl {
        -webkit-flex-flow: row nowrap;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -moz-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .navbar-expand-xl .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -moz-box-orient: horizontal;
        -moz-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
      }

      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute
      }

      .navbar-expand-xl .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
      }

      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
      }

      .navbar-expand-xl>.container,
      .navbar-expand-xl>.container-fluid {
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
      }

      .navbar-expand-xl .navbar-collapse {
        display: -webkit-box !important;
        display: -webkit-flex !important;
        display: -moz-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -webkit-flex-basis: auto;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
      }

      .navbar-expand-xl .navbar-toggler {
        display: none
      }

      .navbar-expand-xl .dropup .dropdown-menu {
        top: auto;
        bottom: 100%
      }
    }

    .navbar-expand {
      -webkit-flex-flow: row nowrap;
      -ms-flex-flow: row nowrap;
      flex-flow: row nowrap;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -moz-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid {
      padding-right: 0;
      padding-left: 0
    }

    .navbar-expand .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -moz-box-orient: horizontal;
      -moz-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row
    }

    .card,
    .card-deck,
    .card-group,
    .list-group,
    .modal-content,
    .progress-bar {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -moz-box-orient: vertical;
      -moz-box-direction: normal
    }

    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute
    }

    .navbar-expand .navbar-nav .dropdown-menu-right {
      right: 0;
      left: auto
    }

    .navbar-expand .navbar-nav .nav-link {
      padding-right: .5rem;
      padding-left: .5rem
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid {
      -webkit-flex-wrap: nowrap;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap
    }

    .navbar-expand .navbar-collapse {
      display: -webkit-box !important;
      display: -webkit-flex !important;
      display: -moz-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -webkit-flex-basis: auto;
      -ms-flex-preferred-size: auto;
      flex-basis: auto
    }

    .navbar-expand .navbar-toggler {
      display: none
    }

    .navbar-expand .dropup .dropdown-menu {
      top: auto;
      bottom: 100%
    }

    .navbar-light .navbar-brand,
    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:hover {
      color: #464855
    }

    .navbar-light .navbar-nav .nav-link {
      color: #6B6F82
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover {
      color: #626E82
    }

    .navbar-light .navbar-nav .nav-link.disabled {
      color: #F9FAFD
    }

    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .show>.nav-link {
      color: #464855
    }

    .navbar-light .navbar-toggler {
      color: #6B6F82;
      border-color: rgba(0, 0, 0, .1)
    }

    .navbar-light .navbar-toggler-icon {
      background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox=\'0 0 30 30\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath stroke=\'%236B6F82\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' d=\'M4 7h22M4 15h22M4 23h22\'/%3E%3C/svg%3E')
    }

    .navbar-light .navbar-text {
      color: #6B6F82
    }

    .navbar-light .navbar-text a,
    .navbar-light .navbar-text a:focus,
    .navbar-light .navbar-text a:hover {
      color: #464855
    }

    .navbar-dark .navbar-brand,
    .navbar-dark .navbar-brand:focus,
    .navbar-dark .navbar-brand:hover {
      color: #FFF
    }

    .navbar-dark .navbar-nav .nav-link {
      color: #fff
    }

    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link:hover {
      color: rgba(255, 255, 255, .9)
    }

    .navbar-dark .navbar-nav .nav-link.disabled {
      color: rgba(255, 255, 255, .5)
    }

    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .show>.nav-link {
      color: #FFF
    }

    .navbar-dark .navbar-toggler {
      color: #fff;
      border-color: rgba(255, 255, 255, .1)
    }

    .navbar-dark .navbar-toggler-icon {
      background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox=\'0 0 30 30\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath stroke=\'white\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' d=\'M4 7h22M4 15h22M4 23h22\'/%3E%3C/svg%3E')
    }

    .navbar-dark .navbar-text {
      color: #fff
    }

    .navbar-dark .navbar-text a,
    .navbar-dark .navbar-text a:focus,
    .navbar-dark .navbar-text a:hover {
      color: #FFF
    }

    .card {
      position: relative;
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      -webkit-background-clip: border-box;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, .06);
      border-radius: .35rem
    }

    .card>hr {
      margin-right: 0
    }

    .card>.list-group:first-child .list-group-item:first-child {
      border-top-left-radius: .35rem;
      border-top-right-radius: .35rem
    }

    .card>.list-group:last-child .list-group-item:last-child {
      border-bottom-right-radius: .35rem;
      border-bottom-left-radius: .35rem
    }

    .card-body {
      -webkit-box-flex: 1;
      -webkit-flex: 1 1 auto;
      -moz-box-flex: 1;
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      padding: 1.5rem
    }

    .card-title {
      margin-bottom: 1.5rem
    }

    .card-header,
    .card-subtitle,
    .card-text:last-child {
      margin-bottom: 0
    }

    .card-subtitle {
      margin-top: -.75rem
    }

    .card-link:hover {
      text-decoration: none
    }

    .card-link+.card-link {
      margin-left: 1.5rem
    }

    .card-header-pills,
    .card-header-tabs {
      margin-right: -.75rem;
      margin-left: -.75rem
    }

    .card-header {
      padding: 1.5rem;
      border-bottom: 1px solid rgba(0, 0, 0, .06)
    }

    .card-header:first-child {
      border-radius: -webkit-calc(.35rem - 1px) -webkit-calc(.35rem - 1px) 0 0;
      border-radius: -moz-calc(.35rem - 1px) -moz-calc(.35rem - 1px) 0 0;
      border-radius: calc(.35rem - 1px) calc(.35rem - 1px) 0 0
    }

    .card-header+.list-group .list-group-item:first-child {
      border-top: 0
    }

    .card-footer {
      padding: 1.5rem;
      border-top: 1px solid rgba(0, 0, 0, .06)
    }

    .card-footer:last-child {
      border-radius: 0 0 -webkit-calc(.35rem - 1px) -webkit-calc(.35rem - 1px);
      border-radius: 0 0 -moz-calc(.35rem - 1px) -moz-calc(.35rem - 1px);
      border-radius: 0 0 calc(.35rem - 1px) calc(.35rem - 1px)
    }

    .card-header-tabs {
      margin-bottom: -1.5rem;
      border-bottom: 0
    }

    .card-img-overlay {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      padding: 1.25rem
    }

    .alert,
    .btn .badge,
    .page-link {
      position: relative
    }

    .card-img {
      width: 100%;
      border-radius: -webkit-calc(.35rem - 1px);
      border-radius: -moz-calc(.35rem - 1px);
      border-radius: calc(.35rem - 1px)
    }

    .card-img-top {
      width: 100%;
      border-top-left-radius: -webkit-calc(.35rem - 1px);
      border-top-left-radius: -moz-calc(.35rem - 1px);
      border-top-left-radius: calc(.35rem - 1px);
      border-top-right-radius: -webkit-calc(.35rem - 1px);
      border-top-right-radius: -moz-calc(.35rem - 1px);
      border-top-right-radius: calc(.35rem - 1px)
    }

    .card-img-bottom {
      width: 100%;
      border-bottom-right-radius: -webkit-calc(.35rem - 1px);
      border-bottom-right-radius: -moz-calc(.35rem - 1px);
      border-bottom-right-radius: calc(.35rem - 1px);
      border-bottom-left-radius: -webkit-calc(.35rem - 1px);
      border-bottom-left-radius: -moz-calc(.35rem - 1px);
      border-bottom-left-radius: calc(.35rem - 1px)
    }

    .card-deck {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .card-deck .card {
      margin-bottom: 15px
    }

    @media (min-width:576px) {
      .card-deck {
        -webkit-flex-flow: row wrap;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px
      }

      .card-deck .card {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -webkit-flex: 1 0 0;
        -moz-box-flex: 1;
        -ms-flex: 1 0 0;
        flex: 1 0 0;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px
      }
    }

    .card-group {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .card-group>.card {
      margin-bottom: 15px
    }

    @media (min-width:576px) {
      .card-group {
        -webkit-flex-flow: row wrap;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap
      }

      .card-group>.card {
        -webkit-box-flex: 1;
        -webkit-flex: 1 0 0;
        -moz-box-flex: 1;
        -ms-flex: 1 0 0;
        flex: 1 0 0;
        margin-bottom: 0
      }

      .card-group>.card+.card {
        margin-left: 0;
        border-left: 0
      }

      .card-group>.card:first-child {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
      }

      .card-group>.card:first-child .card-header,
      .card-group>.card:first-child .card-img-top {
        border-top-right-radius: 0
      }

      .card-group>.card:first-child .card-footer,
      .card-group>.card:first-child .card-img-bottom {
        border-bottom-right-radius: 0
      }

      .card-group>.card:last-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
      }

      .card-group>.card:last-child .card-header,
      .card-group>.card:last-child .card-img-top {
        border-top-left-radius: 0
      }

      .card-group>.card:last-child .card-footer,
      .card-group>.card:last-child .card-img-bottom {
        border-bottom-left-radius: 0
      }

      .card-group>.card:only-child {
        border-radius: .35rem
      }

      .card-group>.card:only-child .card-header,
      .card-group>.card:only-child .card-img-top {
        border-top-left-radius: .35rem;
        border-top-right-radius: .35rem
      }

      .card-group>.card:only-child .card-footer,
      .card-group>.card:only-child .card-img-bottom {
        border-bottom-right-radius: .35rem;
        border-bottom-left-radius: .35rem
      }

      .card-group>.card:not(:first-child):not(:last-child):not(:only-child),
      .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer,
      .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,
      .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
      .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top {
        border-radius: 0
      }

      .card-columns {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
        -webkit-column-gap: 1.25rem;
        -moz-column-gap: 1.25rem;
        column-gap: 1.25rem
      }

      .card-columns .card {
        display: inline-block;
        width: 100%
      }
    }

    .breadcrumb,
    .pagination {
      border-radius: .25rem;
      list-style: none
    }

    .card-columns .card {
      margin-bottom: 1.5rem
    }

    .breadcrumb {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      padding: .75rem 0;
      margin-bottom: 1rem;
      background-color: #98A4B8
    }

    .breadcrumb-item+.breadcrumb-item::before {
      display: inline-block;
      padding-right: .5rem;
      padding-left: .5rem;
      color: #6B6F82;
      content: '/'
    }

    .pagination,
    .progress {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox
    }

    .breadcrumb-item+.breadcrumb-item:hover::before {
      text-decoration: none
    }

    .breadcrumb-item.active {
      color: #6B6F82
    }

    .pagination {
      display: flex;
      padding-left: 0
    }

    .page-link,
    .popover-body,
    .popover-header {
      padding: .5rem .75rem
    }

    .page-link {
      display: block;
      margin-left: -1px;
      line-height: 1.25;
      color: #5059E5;
      background-color: #FFF;
      border: 1px solid #626E82
    }

    .page-link:hover {
      color: #3A44E1;
      text-decoration: none;
      background-color: #F9FAFD;
      border-color: #626E82
    }

    .page-link:focus {
      z-index: 2;
      outline: 0;
      -webkit-box-shadow: none;
      box-shadow: none
    }

    .page-item:first-child .page-link {
      margin-left: 0;
      border-top-left-radius: .25rem;
      border-bottom-left-radius: .25rem
    }

    .page-item:last-child .page-link {
      border-top-right-radius: .25rem;
      border-bottom-right-radius: .25rem
    }

    .page-item.active .page-link {
      z-index: 1;
      color: #FFF;
      background-color: #1E9FF2;
      border-color: #1E9FF2
    }

    .page-item.disabled .page-link {
      color: #6B6F82;
      pointer-events: none;
      cursor: auto;
      background-color: #FFF;
      border-color: #626E82
    }

    .pagination-lg .page-link {
      padding: .75rem 1.5rem;
      font-size: 1.25rem;
      line-height: 1.25
    }

    .badge,
    .close {
      line-height: 1
    }

    .pagination-lg .page-item:first-child .page-link {
      border-top-left-radius: .35rem;
      border-bottom-left-radius: .35rem
    }

    .pagination-lg .page-item:last-child .page-link {
      border-top-right-radius: .35rem;
      border-bottom-right-radius: .35rem
    }

    .pagination-sm .page-link {
      padding: .25rem .5rem;
      font-size: .875rem;
      line-height: 1
    }

    .pagination-sm .page-item:first-child .page-link {
      border-top-left-radius: .21rem;
      border-bottom-left-radius: .21rem
    }

    .pagination-sm .page-item:last-child .page-link {
      border-top-right-radius: .21rem;
      border-bottom-right-radius: .21rem
    }

    .badge {
      display: inline-block;
      padding: .35em .4em;
      font-size: 85%;
      text-align: center;
      vertical-align: baseline;
      border-radius: .25rem
    }

    .badge:empty {
      display: none
    }

    .btn .badge {
      top: -1px
    }

    .badge-pill {
      padding-right: .6em;
      padding-left: .6em;
      border-radius: 10rem
    }

    .badge-primary {
      color: #FFF;
      background-color: #666EE8
    }

    .badge-primary[href]:focus,
    .badge-primary[href]:hover {
      color: #FFF;
      text-decoration: none;
      background-color: #3A44E1
    }

    .badge-secondary {
      color: #FFF;
      background-color: #6B6F82
    }

    .badge-secondary[href]:focus,
    .badge-secondary[href]:hover {
      color: #FFF;
      text-decoration: none;
      background-color: #545766
    }

    .badge-success {
      color: #2A2E30;
      background-color: #28D094
    }

    .badge-success[href]:focus,
    .badge-success[href]:hover {
      color: #2A2E30;
      text-decoration: none;
      background-color: #20A576
    }

    .badge-info {
      color: #FFF;
      background-color: #1E9FF2
    }

    .badge-info[href]:focus,
    .badge-info[href]:hover {
      color: #FFF;
      text-decoration: none;
      background-color: #0C84D1
    }

    .badge-warning {
      color: #2A2E30;
      background-color: #FF9149
    }

    .badge-warning[href]:focus,
    .badge-warning[href]:hover {
      color: #2A2E30;
      text-decoration: none;
      background-color: #FF7216
    }

    .badge-danger {
      color: #FFF;
      background-color: #FF4961
    }

    .badge-danger[href]:focus,
    .badge-danger[href]:hover {
      color: #FFF;
      text-decoration: none;
      background-color: #FF1635
    }

    .badge-light {
      color: #2A2E30;
      background-color: #BABFC7
    }

    .badge-light[href]:focus,
    .badge-light[href]:hover {
      color: #2A2E30;
      text-decoration: none;
      background-color: #9EA5B0
    }

    .badge-dark {
      color: #FFF;
      background-color: #464855
    }

    .badge-dark[href]:focus,
    .badge-dark[href]:hover {
      color: #FFF;
      text-decoration: none;
      background-color: #2F3039
    }

    .jumbotron {
      padding: 2rem 1rem;
      margin-bottom: 2rem;
      background-color: #98A4B8;
      border-radius: .35rem
    }

    @media (min-width:576px) {
      .jumbotron {
        padding: 4rem 2rem
      }
    }

    .jumbotron-fluid {
      padding-right: 0;
      padding-left: 0;
      border-radius: 0
    }

    .alert {
      padding: .75rem 1rem;
      margin-bottom: 1rem;
      border: 1px solid transparent;
      border-radius: .25rem
    }

    .alert-heading {
      color: inherit
    }

    .alert-dismissible {
      padding-right: 3.5rem
    }

    .alert-dismissible .close {
      position: absolute;
      top: 0;
      right: 0;
      padding: .75rem 1rem;
      color: inherit
    }

    .alert-primary {
      color: #353979;
      background-color: #E0E2FA;
      border-color: #D4D6F9
    }

    .alert-primary hr {
      border-top-color: #BEC1F6
    }

    .alert-primary .alert-link {
      color: #252856
    }

    .alert-secondary {
      color: #383A44;
      background-color: #E1E2E6;
      border-color: #D6D7DC
    }

    .alert-secondary hr {
      border-top-color: #C8CAD0
    }

    .alert-secondary .alert-link {
      color: #212228
    }

    .alert-success {
      color: #156C4D;
      background-color: #D4F6EA;
      border-color: #C3F2E1
    }

    .alert-success hr {
      border-top-color: #AEEDD7
    }

    .alert-success .alert-link {
      color: #0D412F
    }

    .alert-info {
      color: #10537E;
      background-color: #D2ECFC;
      border-color: #C0E4FB
    }

    .alert-info hr {
      border-top-color: #A8DAF9
    }

    .alert-info .alert-link {
      color: #0A3551
    }

    .alert-warning {
      color: #854B26;
      background-color: #FFE9DB;
      border-color: #FFE0CC
    }

    .alert-warning hr {
      border-top-color: #FFD1B3
    }

    .alert-warning .alert-link {
      color: #5D351B
    }

    .alert-danger {
      color: #852632;
      background-color: #FFDBDF;
      border-color: #FFCCD3
    }

    .alert-danger hr {
      border-top-color: #FFB3BD
    }

    .alert-danger .alert-link {
      color: #5D1B23
    }

    .alert-light {
      color: #616367;
      background-color: #F1F2F4;
      border-color: #ECEDEF
    }

    .alert-light hr {
      border-top-color: #DEE0E3
    }

    .alert-light .alert-link {
      color: #484A4D
    }

    .alert-dark {
      color: #24252C;
      background-color: #DADADD;
      border-color: #CBCCCF
    }

    .alert-dark hr {
      border-top-color: #BEBFC3
    }

    .alert-dark .alert-link {
      color: #0D0D10
    }

    @-webkit-keyframes progress-bar-stripes {
      from {
        background-position: 1rem 0
      }

      to {
        background-position: 0 0
      }
    }

    @-moz-keyframes progress-bar-stripes {
      from {
        background-position: 1rem 0
      }

      to {
        background-position: 0 0
      }
    }

    @-o-keyframes progress-bar-stripes {
      from {
        background-position: 1rem 0
      }

      to {
        background-position: 0 0
      }
    }

    @keyframes progress-bar-stripes {
      from {
        background-position: 1rem 0
      }

      to {
        background-position: 0 0
      }
    }

    .progress {
      display: flex;
      height: 1rem;
      font-size: .75rem;
      background-color: #EEE;
      border-radius: .25rem
    }

    .media,
    .progress-bar {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox
    }

    .progress-bar {
      display: flex;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -moz-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      color: #FFF;
      text-align: center;
      background-color: #666EE8;
      -webkit-transition: width .6s ease;
      -moz-transition: width .6s ease;
      -o-transition: width .6s ease;
      transition: width .6s ease
    }

    .progress-bar-striped {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      -webkit-background-size: 1rem 1rem;
      background-size: 1rem 1rem
    }

    .progress-bar-animated {
      -webkit-animation: progress-bar-stripes 1s linear infinite;
      -moz-animation: progress-bar-stripes 1s linear infinite;
      -o-animation: progress-bar-stripes 1s linear infinite;
      animation: progress-bar-stripes 1s linear infinite
    }

    .media {
      display: flex;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -moz-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .list-group,
    .modal-dialog-centered {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox
    }

    .media-body {
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -moz-box-flex: 1;
      -ms-flex: 1;
      flex: 1
    }

    .list-group {
      display: -moz-box;
      display: flex;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      padding-left: 0;
      margin-bottom: 0
    }

    .list-group-item-action {
      width: 100%;
      color: #4E5154;
      text-align: inherit
    }

    .list-group-item-action:focus,
    .list-group-item-action:hover {
      color: #4E5154;
      text-decoration: none;
      background-color: #F9FAFD
    }

    .list-group-item-action:active {
      color: #6B6F82;
      background-color: #98A4B8
    }

    .list-group-item {
      position: relative;
      display: block;
      padding: 1.25rem;
      margin-bottom: -1px;
      background-color: #FFF;
      border: 1px solid #E4E7ED
    }

    .list-group-item:first-child {
      border-top-left-radius: .25rem;
      border-top-right-radius: .25rem
    }

    .list-group-item:last-child {
      margin-bottom: 0;
      border-bottom-right-radius: .25rem;
      border-bottom-left-radius: .25rem
    }

    .list-group-item:focus,
    .list-group-item:hover {
      z-index: 1;
      text-decoration: none
    }

    .list-group-item.disabled,
    .list-group-item:disabled {
      color: #6B6F82;
      background-color: #FFF
    }

    .list-group-item.active {
      z-index: 2;
      color: #FFF;
      background-color: #1E9FF2;
      border-color: #1E9FF2
    }

    .list-group-flush .list-group-item {
      border-right: 0;
      border-left: 0;
      border-radius: 0
    }

    .list-group-flush:first-child .list-group-item:first-child {
      border-top: 0
    }

    .list-group-flush:last-child .list-group-item:last-child {
      border-bottom: 0
    }

    .list-group-item-primary {
      color: #353979;
      background-color: #D4D6F9
    }

    .list-group-item-primary.list-group-item-action:focus,
    .list-group-item-primary.list-group-item-action:hover {
      color: #353979;
      background-color: #BEC1F6
    }

    .list-group-item-primary.list-group-item-action.active {
      color: #FFF;
      background-color: #353979;
      border-color: #353979
    }

    .list-group-item-secondary {
      color: #383A44;
      background-color: #D6D7DC
    }

    .list-group-item-secondary.list-group-item-action:focus,
    .list-group-item-secondary.list-group-item-action:hover {
      color: #383A44;
      background-color: #C8CAD0
    }

    .list-group-item-secondary.list-group-item-action.active {
      color: #FFF;
      background-color: #383A44;
      border-color: #383A44
    }

    .list-group-item-success {
      color: #156C4D;
      background-color: #C3F2E1
    }

    .list-group-item-success.list-group-item-action:focus,
    .list-group-item-success.list-group-item-action:hover {
      color: #156C4D;
      background-color: #AEEDD7
    }

    .list-group-item-success.list-group-item-action.active {
      color: #FFF;
      background-color: #156C4D;
      border-color: #156C4D
    }

    .list-group-item-info {
      color: #10537E;
      background-color: #C0E4FB
    }

    .list-group-item-info.list-group-item-action:focus,
    .list-group-item-info.list-group-item-action:hover {
      color: #10537E;
      background-color: #A8DAF9
    }

    .list-group-item-info.list-group-item-action.active {
      color: #FFF;
      background-color: #10537E;
      border-color: #10537E
    }

    .list-group-item-warning {
      color: #854B26;
      background-color: #FFE0CC
    }

    .list-group-item-warning.list-group-item-action:focus,
    .list-group-item-warning.list-group-item-action:hover {
      color: #854B26;
      background-color: #FFD1B3
    }

    .list-group-item-warning.list-group-item-action.active {
      color: #FFF;
      background-color: #854B26;
      border-color: #854B26
    }

    .list-group-item-danger {
      color: #852632;
      background-color: #FFCCD3
    }

    .list-group-item-danger.list-group-item-action:focus,
    .list-group-item-danger.list-group-item-action:hover {
      color: #852632;
      background-color: #FFB3BD
    }

    .list-group-item-danger.list-group-item-action.active {
      color: #FFF;
      background-color: #852632;
      border-color: #852632
    }

    .list-group-item-light {
      color: #616367;
      background-color: #ECEDEF
    }

    .list-group-item-light.list-group-item-action:focus,
    .list-group-item-light.list-group-item-action:hover {
      color: #616367;
      background-color: #DEE0E3
    }

    .list-group-item-light.list-group-item-action.active {
      color: #FFF;
      background-color: #616367;
      border-color: #616367
    }

    .list-group-item-dark {
      color: #24252C;
      background-color: #CBCCCF
    }

    .list-group-item-dark.list-group-item-action:focus,
    .list-group-item-dark.list-group-item-action:hover {
      color: #24252C;
      background-color: #BEBFC3
    }

    .list-group-item-dark.list-group-item-action.active {
      color: #FFF;
      background-color: #24252C;
      border-color: #24252C
    }

    .close {
      float: right;
      font-size: 1.5rem;
      color: #000;
      text-shadow: 0 1px 0 #FFF;
      opacity: .5
    }

    .popover,
    .tooltip {
      font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      font-style: normal;
      font-weight: 400;
      text-transform: none;
      letter-spacing: normal;
      word-break: normal;
      word-spacing: normal;
      white-space: normal;
      line-break: auto;
      font-size: .875rem;
      word-wrap: break-word;
      text-decoration: none
    }

    .modal-title,
    .popover,
    .tooltip {
      line-height: 1.45
    }

    .popover,
    .text-hide,
    .tooltip {
      text-shadow: none
    }

    .close:focus,
    .close:hover {
      color: #000;
      text-decoration: none;
      opacity: .75
    }

    .close:not(:disabled):not(.disabled) {
      cursor: pointer
    }

    button.close {
      padding: 0;
      background-color: transparent;
      border: 0;
      -webkit-appearance: none
    }

    .modal {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1050;
      display: none;
      outline: 0
    }

    .modal-open .modal {
      overflow-x: hidden;
      overflow-y: auto
    }

    .modal-dialog {
      position: relative;
      width: auto;
      margin: .5rem;
      pointer-events: none
    }

    .modal.fade .modal-dialog {
      -webkit-transition: -webkit-transform .3s ease-out;
      -moz-transition: -moz-transform .3s ease-out;
      -o-transition: -o-transform .3s ease-out;
      transition: transform .3s ease-out;
      -webkit-transform: translate(0, -25%);
      -moz-transform: translate(0, -25%);
      -ms-transform: translate(0, -25%);
      -o-transform: translate(0, -25%);
      transform: translate(0, -25%)
    }

    .modal.show .modal-dialog {
      -webkit-transform: translate(0, 0);
      -moz-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
      -o-transform: translate(0, 0);
      transform: translate(0, 0)
    }

    .modal-dialog-centered {
      display: -moz-box;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      min-height: -webkit-calc(100% - (.5rem * 2));
      min-height: -moz-calc(100% - (.5rem * 2));
      min-height: calc(100% - (.5rem * 2))
    }

    .modal-content,
    .modal-header {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox
    }

    .modal-content {
      position: relative;
      display: -moz-box;
      display: flex;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      width: 100%;
      pointer-events: auto;
      background-color: #FFF;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: .35rem;
      outline: 0
    }

    .flex-column,
    .flex-row {
      -moz-box-direction: normal !important
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
      opacity: 0
    }

    .modal-backdrop.show {
      opacity: .5
    }

    .modal-header {
      display: -moz-box;
      display: flex;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -moz-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
      -webkit-box-pack: justify;
      -webkit-justify-content: space-between;
      -moz-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
      padding: 1rem;
      border-bottom: 1px solid #98A4B8;
      border-top-left-radius: .35rem;
      border-top-right-radius: .35rem
    }

    .modal-header .close {
      padding: 1rem;
      margin: -1rem -1rem -1rem auto
    }

    .modal-title {
      margin-bottom: 0
    }

    .modal-body {
      position: relative;
      -webkit-box-flex: 1;
      -webkit-flex: 1 1 auto;
      -moz-box-flex: 1;
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      padding: 1rem
    }

    .modal-footer {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: end;
      -webkit-justify-content: flex-end;
      -moz-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end;
      padding: 1rem;
      border-top: 1px solid #98A4B8
    }

    .popover,
    .popover .arrow,
    .popover .arrow::after,
    .popover .arrow::before,
    .tooltip,
    .tooltip .arrow {
      position: absolute;
      display: block
    }

    .modal-footer>:not(:first-child) {
      margin-left: .25rem
    }

    .modal-footer>:not(:last-child) {
      margin-right: .25rem
    }

    .modal-scrollbar-measure {
      position: absolute;
      top: -9999px;
      width: 50px;
      height: 50px;
      overflow: scroll
    }

    @media (min-width:576px) {
      .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto
      }

      .modal-dialog-centered {
        min-height: -webkit-calc(100% - (1.75rem * 2));
        min-height: -moz-calc(100% - (1.75rem * 2));
        min-height: calc(100% - (1.75rem * 2))
      }

      .modal-sm {
        max-width: 300px
      }
    }

    @media (min-width:992px) {
      .modal-lg {
        max-width: 800px
      }
    }

    .tooltip {
      z-index: 1070;
      margin: 0;
      text-align: left;
      text-align: start;
      opacity: 0
    }

    .tooltip.show {
      opacity: .9
    }

    .tooltip .arrow {
      width: .8rem;
      height: .4rem
    }

    .tooltip .arrow::before {
      position: absolute;
      content: '';
      border-color: transparent;
      border-style: solid
    }

    .bs-tooltip-auto[x-placement^=top],
    .bs-tooltip-top {
      padding: .4rem 0
    }

    .bs-tooltip-auto[x-placement^=top] .arrow,
    .bs-tooltip-top .arrow {
      bottom: 0
    }

    .bs-tooltip-auto[x-placement^=top] .arrow::before,
    .bs-tooltip-top .arrow::before {
      top: 0;
      border-width: .4rem .4rem 0;
      border-top-color: #000
    }

    .bs-tooltip-auto[x-placement^=right],
    .bs-tooltip-right {
      padding: 0 .4rem
    }

    .bs-tooltip-auto[x-placement^=right] .arrow,
    .bs-tooltip-right .arrow {
      left: 0;
      width: .4rem;
      height: .8rem
    }

    .bs-tooltip-auto[x-placement^=right] .arrow::before,
    .bs-tooltip-right .arrow::before {
      right: 0;
      border-width: .4rem .4rem .4rem 0;
      border-right-color: #000
    }

    .bs-tooltip-auto[x-placement^=bottom],
    .bs-tooltip-bottom {
      padding: .4rem 0
    }

    .bs-tooltip-auto[x-placement^=bottom] .arrow,
    .bs-tooltip-bottom .arrow {
      top: 0
    }

    .bs-tooltip-auto[x-placement^=bottom] .arrow::before,
    .bs-tooltip-bottom .arrow::before {
      bottom: 0;
      border-width: 0 .4rem .4rem;
      border-bottom-color: #000
    }

    .bs-tooltip-auto[x-placement^=left],
    .bs-tooltip-left {
      padding: 0 .4rem
    }

    .bs-tooltip-auto[x-placement^=left] .arrow,
    .bs-tooltip-left .arrow {
      right: 0;
      width: .4rem;
      height: .8rem
    }

    .bs-tooltip-auto[x-placement^=left] .arrow::before,
    .bs-tooltip-left .arrow::before {
      left: 0;
      border-width: .4rem 0 .4rem .4rem;
      border-left-color: #000
    }

    .tooltip-inner {
      max-width: 200px;
      padding: .25rem .5rem;
      color: #FFF;
      text-align: center;
      background-color: #000;
      border-radius: .25rem
    }

    .popover {
      top: 0;
      left: 0;
      z-index: 1060;
      max-width: 276px;
      text-align: left;
      text-align: start;
      background-color: #FFF;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: .35rem
    }

    .popover .arrow {
      width: 1rem;
      height: .5rem;
      margin: 0 .35rem
    }

    .popover .arrow::after,
    .popover .arrow::before {
      content: '';
      border-color: transparent;
      border-style: solid
    }

    .bs-popover-auto[x-placement^=top],
    .bs-popover-top {
      margin-bottom: .5rem
    }

    .bs-popover-auto[x-placement^=top] .arrow,
    .bs-popover-top .arrow {
      bottom: -webkit-calc((.5rem + 1px) * -1);
      bottom: -moz-calc((.5rem + 1px) * -1);
      bottom: calc((.5rem + 1px) * -1)
    }

    .bs-popover-auto[x-placement^=top] .arrow::after,
    .bs-popover-auto[x-placement^=top] .arrow::before,
    .bs-popover-top .arrow::after,
    .bs-popover-top .arrow::before {
      border-width: .5rem .5rem 0
    }

    .bs-popover-auto[x-placement^=top] .arrow::before,
    .bs-popover-top .arrow::before {
      bottom: 0;
      border-top-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=top] .arrow::after,
    .bs-popover-top .arrow::after {
      bottom: 1px;
      border-top-color: #FFF
    }

    .bs-popover-auto[x-placement^=right],
    .bs-popover-right {
      margin-left: .5rem
    }

    .bs-popover-auto[x-placement^=right] .arrow,
    .bs-popover-right .arrow {
      left: -webkit-calc((.5rem + 1px) * -1);
      left: -moz-calc((.5rem + 1px) * -1);
      left: calc((.5rem + 1px) * -1);
      width: .5rem;
      height: 1rem;
      margin: .35rem 0
    }

    .bs-popover-auto[x-placement^=right] .arrow::after,
    .bs-popover-auto[x-placement^=right] .arrow::before,
    .bs-popover-right .arrow::after,
    .bs-popover-right .arrow::before {
      border-width: .5rem .5rem .5rem 0
    }

    .bs-popover-auto[x-placement^=right] .arrow::before,
    .bs-popover-right .arrow::before {
      left: 0;
      border-right-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=right] .arrow::after,
    .bs-popover-right .arrow::after {
      left: 1px;
      border-right-color: #FFF
    }

    .bs-popover-auto[x-placement^=bottom],
    .bs-popover-bottom {
      margin-top: .5rem
    }

    .bs-popover-auto[x-placement^=bottom] .arrow,
    .bs-popover-bottom .arrow {
      top: -webkit-calc((.5rem + 1px) * -1);
      top: -moz-calc((.5rem + 1px) * -1);
      top: calc((.5rem + 1px) * -1)
    }

    .bs-popover-auto[x-placement^=bottom] .arrow::after,
    .bs-popover-auto[x-placement^=bottom] .arrow::before,
    .bs-popover-bottom .arrow::after,
    .bs-popover-bottom .arrow::before {
      border-width: 0 .5rem .5rem
    }

    .bs-popover-auto[x-placement^=bottom] .arrow::before,
    .bs-popover-bottom .arrow::before {
      top: 0;
      border-bottom-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=bottom] .arrow::after,
    .bs-popover-bottom .arrow::after {
      top: 1px;
      border-bottom-color: #FFF
    }

    .bs-popover-auto[x-placement^=bottom] .popover-header::before,
    .bs-popover-bottom .popover-header::before {
      position: absolute;
      top: 0;
      left: 50%;
      display: block;
      width: 1rem;
      margin-left: -.5rem;
      content: '';
      border-bottom: 1px solid #F7F7F7
    }

    .carousel,
    .carousel-inner,
    .carousel-item {
      position: relative
    }

    .bs-popover-auto[x-placement^=left],
    .bs-popover-left {
      margin-right: .5rem
    }

    .bs-popover-auto[x-placement^=left] .arrow,
    .bs-popover-left .arrow {
      right: -webkit-calc((.5rem + 1px) * -1);
      right: -moz-calc((.5rem + 1px) * -1);
      right: calc((.5rem + 1px) * -1);
      width: .5rem;
      height: 1rem;
      margin: .35rem 0
    }

    .bs-popover-auto[x-placement^=left] .arrow::after,
    .bs-popover-auto[x-placement^=left] .arrow::before,
    .bs-popover-left .arrow::after,
    .bs-popover-left .arrow::before {
      border-width: .5rem 0 .5rem .5rem
    }

    .bs-popover-auto[x-placement^=left] .arrow::before,
    .bs-popover-left .arrow::before {
      right: 0;
      border-left-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=left] .arrow::after,
    .bs-popover-left .arrow::after {
      right: 1px;
      border-left-color: #FFF
    }

    .popover-header {
      margin-bottom: 0;
      font-size: 1rem;
      color: #464855;
      background-color: #F7F7F7;
      border-bottom: 1px solid #EBEBEB;
      border-top-left-radius: -webkit-calc(.35rem - 1px);
      border-top-left-radius: -moz-calc(.35rem - 1px);
      border-top-left-radius: calc(.35rem - 1px);
      border-top-right-radius: -webkit-calc(.35rem - 1px);
      border-top-right-radius: -moz-calc(.35rem - 1px);
      border-top-right-radius: calc(.35rem - 1px)
    }

    .popover-header:empty {
      display: none
    }

    .popover-body {
      color: #6B6F82
    }

    .carousel-inner {
      width: 100%;
      overflow: hidden
    }

    .carousel-item {
      display: none;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      width: 100%;
      -webkit-transition: -webkit-transform .6s ease;
      -moz-transition: -moz-transform .6s ease;
      -o-transition: -o-transform .6s ease;
      transition: transform .6s ease;
      -webkit-backface-visibility: hidden;
      -moz-backface-visibility: hidden;
      backface-visibility: hidden;
      -webkit-perspective: 1000px;
      -moz-perspective: 1000px;
      perspective: 1000px
    }

    .carousel-item-next,
    .carousel-item-prev,
    .carousel-item.active {
      display: block
    }

    .carousel-item-next,
    .carousel-item-prev {
      position: absolute;
      top: 0
    }

    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
      -webkit-transform: translateX(0);
      -moz-transform: translateX(0);
      -ms-transform: translateX(0);
      -o-transform: translateX(0);
      transform: translateX(0)
    }

    @supports ((-webkit-transform-style:preserve-3d) or (-moz-transform-style:preserve-3d) or (transform-style:preserve-3d)) {

      .carousel-item-next.carousel-item-left,
      .carousel-item-prev.carousel-item-right {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
      }
    }

    .active.carousel-item-right,
    .carousel-item-next {
      -webkit-transform: translateX(100%);
      -moz-transform: translateX(100%);
      -ms-transform: translateX(100%);
      -o-transform: translateX(100%);
      transform: translateX(100%)
    }

    @supports ((-webkit-transform-style:preserve-3d) or (-moz-transform-style:preserve-3d) or (transform-style:preserve-3d)) {

      .active.carousel-item-right,
      .carousel-item-next {
        -webkit-transform: translate3d(100%, 0, 0);
        -moz-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
      }
    }

    .active.carousel-item-left,
    .carousel-item-prev {
      -webkit-transform: translateX(-100%);
      -moz-transform: translateX(-100%);
      -ms-transform: translateX(-100%);
      -o-transform: translateX(-100%);
      transform: translateX(-100%)
    }

    @supports ((-webkit-transform-style:preserve-3d) or (-moz-transform-style:preserve-3d) or (transform-style:preserve-3d)) {

      .active.carousel-item-left,
      .carousel-item-prev {
        -webkit-transform: translate3d(-100%, 0, 0);
        -moz-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
      }
    }

    .carousel-control-next,
    .carousel-control-prev {
      position: absolute;
      top: 0;
      bottom: 0;
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -moz-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      width: 15%;
      color: #FFF;
      text-align: center;
      opacity: .5
    }

    .carousel-control-next:focus,
    .carousel-control-next:hover,
    .carousel-control-prev:focus,
    .carousel-control-prev:hover {
      color: #FFF;
      text-decoration: none;
      outline: 0;
      opacity: .9
    }

    .carousel-control-prev {
      left: 0
    }

    .carousel-control-next {
      right: 0
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
      display: inline-block;
      width: 20px;
      height: 20px;
      background: center center no-repeat;
      -webkit-background-size: 100% 100%;
      background-size: 100% 100%
    }

    .carousel-control-prev-icon {
      background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'%23fff\' viewBox=\'0 0 8 8\'%3E%3Cpath d=\'M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z\'/%3E%3C/svg%3E')
    }

    .carousel-control-next-icon {
      background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'%23fff\' viewBox=\'0 0 8 8\'%3E%3Cpath d=\'M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z\'/%3E%3C/svg%3E')
    }

    .carousel-indicators {
      position: absolute;
      right: 0;
      bottom: 10px;
      left: 0;
      z-index: 15;
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -moz-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      padding-left: 0;
      margin-right: 15%;
      margin-left: 15%;
      list-style: none
    }

    .carousel-indicators li {
      position: relative;
      -webkit-box-flex: 0;
      -webkit-flex: 0 1 auto;
      -moz-box-flex: 0;
      -ms-flex: 0 1 auto;
      flex: 0 1 auto;
      width: 30px;
      height: 3px;
      margin-right: 3px;
      margin-left: 3px;
      text-indent: -999px;
      background-color: rgba(255, 255, 255, .5)
    }

    .carousel-indicators li::after,
    .carousel-indicators li::before {
      left: 0;
      display: inline-block;
      height: 10px;
      position: absolute;
      content: '';
      width: 100%
    }

    .carousel-indicators li::before {
      top: -10px
    }

    .carousel-indicators li::after {
      bottom: -10px
    }

    .carousel-indicators .active {
      background-color: #FFF
    }

    .carousel-caption {
      position: absolute;
      right: 15%;
      bottom: 20px;
      left: 15%;
      z-index: 10;
      padding-top: 20px;
      padding-bottom: 20px;
      color: #FFF;
      text-align: center
    }

    .align-baseline {
      vertical-align: baseline !important
    }

    .align-top {
      vertical-align: top !important
    }

    .align-middle {
      vertical-align: middle !important
    }

    .align-bottom {
      vertical-align: bottom !important
    }

    .align-text-bottom {
      vertical-align: text-bottom !important
    }

    .align-text-top {
      vertical-align: text-top !important
    }

    .bg-primary {
      background-color: #666EE8 !important
    }

    a.bg-primary:focus,
    a.bg-primary:hover,
    button.bg-primary:focus,
    button.bg-primary:hover {
      background-color: #3A44E1 !important
    }

    .bg-secondary {
      background-color: #6B6F82 !important
    }

    a.bg-secondary:focus,
    a.bg-secondary:hover,
    button.bg-secondary:focus,
    button.bg-secondary:hover {
      background-color: #545766 !important
    }

    .bg-success {
      background-color: #28D094 !important
    }

    a.bg-success:focus,
    a.bg-success:hover,
    button.bg-success:focus,
    button.bg-success:hover {
      background-color: #20A576 !important
    }

    .bg-info {
      background-color: #1E9FF2 !important
    }

    a.bg-info:focus,
    a.bg-info:hover,
    button.bg-info:focus,
    button.bg-info:hover {
      background-color: #0C84D1 !important
    }

    .bg-warning {
      background-color: #FF9149 !important
    }

    a.bg-warning:focus,
    a.bg-warning:hover,
    button.bg-warning:focus,
    button.bg-warning:hover {
      background-color: #FF7216 !important
    }

    .bg-danger {
      background-color: #FF4961 !important
    }

    a.bg-danger:focus,
    a.bg-danger:hover,
    button.bg-danger:focus,
    button.bg-danger:hover {
      background-color: #FF1635 !important
    }

    .bg-light {
      background-color: #BABFC7 !important
    }

    a.bg-light:focus,
    a.bg-light:hover,
    button.bg-light:focus,
    button.bg-light:hover {
      background-color: #9EA5B0 !important
    }

    .bg-dark {
      background-color: #464855 !important
    }

    a.bg-dark:focus,
    a.bg-dark:hover,
    button.bg-dark:focus,
    button.bg-dark:hover {
      background-color: #2F3039 !important
    }

    .bg-white {
      background-color: #FFF !important
    }

    .bg-transparent {
      background-color: transparent !important
    }

    .border {
      border: 1px solid #626E82 !important
    }

    .border-top {
      border-top: 1px solid #626E82 !important
    }

    .border-right {
      border-right: 1px solid #626E82 !important
    }

    .border-bottom {
      border-bottom: 1px solid #626E82 !important
    }

    .border-left {
      border-left: 1px solid #626E82 !important
    }

    .border-0 {
      border: 0 !important
    }

    .rounded-right,
    .rounded-top {
      border-top-right-radius: .35rem !important
    }

    .rounded-bottom,
    .rounded-right {
      border-bottom-right-radius: .35rem !important
    }

    .rounded-left,
    .rounded-top {
      border-top-left-radius: .35rem !important
    }

    .rounded-bottom,
    .rounded-left {
      border-bottom-left-radius: .35rem !important
    }

    .border-top-0 {
      border-top: 0 !important
    }

    .border-right-0 {
      border-right: 0 !important
    }

    .border-bottom-0 {
      border-bottom: 0 !important
    }

    .border-left-0 {
      border-left: 0 !important
    }

    .border-primary {
      border-color: #666EE8 !important
    }

    .border-secondary {
      border-color: #6B6F82 !important
    }

    .border-success {
      border-color: #28D094 !important
    }

    .border-info {
      border-color: #1E9FF2 !important
    }

    .border-warning {
      border-color: #FF9149 !important
    }

    .border-danger {
      border-color: #FF4961 !important
    }

    .border-light {
      border-color: #BABFC7 !important
    }

    .border-dark {
      border-color: #464855 !important
    }

    .border-white {
      border-color: #FFF !important
    }

    .rounded {
      border-radius: .35rem !important
    }

    .rounded-circle {
      border-radius: 50% !important
    }

    .rounded-0 {
      border-radius: 0 !important
    }

    .clearfix::after {
      display: block;
      clear: both;
      content: ''
    }

    .d-none {
      display: none !important
    }

    .d-inline {
      display: inline !important
    }

    .d-inline-block {
      display: inline-block !important
    }

    .d-block {
      display: block !important
    }

    .d-table {
      display: table !important
    }

    .d-table-row {
      display: table-row !important
    }

    .d-table-cell {
      display: table-cell !important
    }

    .d-flex {
      display: -webkit-box !important;
      display: -webkit-flex !important;
      display: -moz-box !important;
      display: -ms-flexbox !important;
      display: flex !important
    }

    .d-inline-flex {
      display: -webkit-inline-box !important;
      display: -webkit-inline-flex !important;
      display: -moz-inline-box !important;
      display: -ms-inline-flexbox !important;
      display: inline-flex !important
    }

    @media (min-width:576px) {
      .d-sm-none {
        display: none !important
      }

      .d-sm-inline {
        display: inline !important
      }

      .d-sm-inline-block {
        display: inline-block !important
      }

      .d-sm-block {
        display: block !important
      }

      .d-sm-table {
        display: table !important
      }

      .d-sm-table-row {
        display: table-row !important
      }

      .d-sm-table-cell {
        display: table-cell !important
      }

      .d-sm-flex {
        display: -webkit-box !important;
        display: -webkit-flex !important;
        display: -moz-box !important;
        display: -ms-flexbox !important;
        display: flex !important
      }

      .d-sm-inline-flex {
        display: -webkit-inline-box !important;
        display: -webkit-inline-flex !important;
        display: -moz-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
      }
    }

    @media (min-width:768px) {
      .d-md-none {
        display: none !important
      }

      .d-md-inline {
        display: inline !important
      }

      .d-md-inline-block {
        display: inline-block !important
      }

      .d-md-block {
        display: block !important
      }

      .d-md-table {
        display: table !important
      }

      .d-md-table-row {
        display: table-row !important
      }

      .d-md-table-cell {
        display: table-cell !important
      }

      .d-md-flex {
        display: -webkit-box !important;
        display: -webkit-flex !important;
        display: -moz-box !important;
        display: -ms-flexbox !important;
        display: flex !important
      }

      .d-md-inline-flex {
        display: -webkit-inline-box !important;
        display: -webkit-inline-flex !important;
        display: -moz-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
      }
    }

    @media (min-width:992px) {
      .d-lg-none {
        display: none !important
      }

      .d-lg-inline {
        display: inline !important
      }

      .d-lg-inline-block {
        display: inline-block !important
      }

      .d-lg-block {
        display: block !important
      }

      .d-lg-table {
        display: table !important
      }

      .d-lg-table-row {
        display: table-row !important
      }

      .d-lg-table-cell {
        display: table-cell !important
      }

      .d-lg-flex {
        display: -webkit-box !important;
        display: -webkit-flex !important;
        display: -moz-box !important;
        display: -ms-flexbox !important;
        display: flex !important
      }

      .d-lg-inline-flex {
        display: -webkit-inline-box !important;
        display: -webkit-inline-flex !important;
        display: -moz-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
      }
    }

    @media (min-width:1200px) {
      .d-xl-none {
        display: none !important
      }

      .d-xl-inline {
        display: inline !important
      }

      .d-xl-inline-block {
        display: inline-block !important
      }

      .d-xl-block {
        display: block !important
      }

      .d-xl-table {
        display: table !important
      }

      .d-xl-table-row {
        display: table-row !important
      }

      .d-xl-table-cell {
        display: table-cell !important
      }

      .d-xl-flex {
        display: -webkit-box !important;
        display: -webkit-flex !important;
        display: -moz-box !important;
        display: -ms-flexbox !important;
        display: flex !important
      }

      .d-xl-inline-flex {
        display: -webkit-inline-box !important;
        display: -webkit-inline-flex !important;
        display: -moz-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
      }
    }

    @media print {
      .d-print-none {
        display: none !important
      }

      .d-print-inline {
        display: inline !important
      }

      .d-print-inline-block {
        display: inline-block !important
      }

      .d-print-block {
        display: block !important
      }

      .d-print-table {
        display: table !important
      }

      .d-print-table-row {
        display: table-row !important
      }

      .d-print-table-cell {
        display: table-cell !important
      }

      .d-print-flex {
        display: -webkit-box !important;
        display: -webkit-flex !important;
        display: -moz-box !important;
        display: -ms-flexbox !important;
        display: flex !important
      }

      .d-print-inline-flex {
        display: -webkit-inline-box !important;
        display: -webkit-inline-flex !important;
        display: -moz-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
      }
    }

    .embed-responsive {
      position: relative;
      display: block;
      width: 100%;
      padding: 0;
      overflow: hidden
    }

    .embed-responsive::before {
      display: block;
      content: ''
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

    .embed-responsive-21by9::before {
      padding-top: 42.857143%
    }

    .embed-responsive-16by9::before {
      padding-top: 56.25%
    }

    .embed-responsive-4by3::before {
      padding-top: 75%
    }

    .embed-responsive-1by1::before {
      padding-top: 100%
    }

    .flex-row {
      -webkit-box-orient: horizontal !important;
      -webkit-box-direction: normal !important;
      -webkit-flex-direction: row !important;
      -moz-box-orient: horizontal !important;
      -ms-flex-direction: row !important;
      flex-direction: row !important
    }

    .flex-column {
      -webkit-box-orient: vertical !important;
      -webkit-box-direction: normal !important;
      -webkit-flex-direction: column !important;
      -moz-box-orient: vertical !important;
      -ms-flex-direction: column !important;
      flex-direction: column !important
    }

    .flex-column-reverse,
    .flex-row-reverse {
      -webkit-box-direction: reverse !important;
      -moz-box-direction: reverse !important
    }

    .flex-row-reverse {
      -webkit-box-orient: horizontal !important;
      -webkit-flex-direction: row-reverse !important;
      -moz-box-orient: horizontal !important;
      -ms-flex-direction: row-reverse !important;
      flex-direction: row-reverse !important
    }

    .flex-column-reverse {
      -webkit-box-orient: vertical !important;
      -webkit-flex-direction: column-reverse !important;
      -moz-box-orient: vertical !important;
      -ms-flex-direction: column-reverse !important;
      flex-direction: column-reverse !important
    }

    .flex-wrap {
      -webkit-flex-wrap: wrap !important;
      -ms-flex-wrap: wrap !important;
      flex-wrap: wrap !important
    }

    .flex-nowrap {
      -webkit-flex-wrap: nowrap !important;
      -ms-flex-wrap: nowrap !important;
      flex-wrap: nowrap !important
    }

    .flex-wrap-reverse {
      -webkit-flex-wrap: wrap-reverse !important;
      -ms-flex-wrap: wrap-reverse !important;
      flex-wrap: wrap-reverse !important
    }

    .justify-content-start {
      -webkit-box-pack: start !important;
      -webkit-justify-content: flex-start !important;
      -moz-box-pack: start !important;
      -ms-flex-pack: start !important;
      justify-content: flex-start !important
    }

    .justify-content-end {
      -webkit-box-pack: end !important;
      -webkit-justify-content: flex-end !important;
      -moz-box-pack: end !important;
      -ms-flex-pack: end !important;
      justify-content: flex-end !important
    }

    .justify-content-center {
      -webkit-box-pack: center !important;
      -webkit-justify-content: center !important;
      -moz-box-pack: center !important;
      -ms-flex-pack: center !important;
      justify-content: center !important
    }

    .justify-content-between {
      -webkit-box-pack: justify !important;
      -webkit-justify-content: space-between !important;
      -moz-box-pack: justify !important;
      -ms-flex-pack: justify !important;
      justify-content: space-between !important
    }

    .justify-content-around {
      -webkit-justify-content: space-around !important;
      -ms-flex-pack: distribute !important;
      justify-content: space-around !important
    }

    .align-items-start {
      -webkit-box-align: start !important;
      -webkit-align-items: flex-start !important;
      -moz-box-align: start !important;
      -ms-flex-align: start !important;
      align-items: flex-start !important
    }

    .align-items-end {
      -webkit-box-align: end !important;
      -webkit-align-items: flex-end !important;
      -moz-box-align: end !important;
      -ms-flex-align: end !important;
      align-items: flex-end !important
    }

    .align-items-center {
      -webkit-box-align: center !important;
      -webkit-align-items: center !important;
      -moz-box-align: center !important;
      -ms-flex-align: center !important;
      align-items: center !important
    }

    .align-items-baseline {
      -webkit-box-align: baseline !important;
      -webkit-align-items: baseline !important;
      -moz-box-align: baseline !important;
      -ms-flex-align: baseline !important;
      align-items: baseline !important
    }

    .align-items-stretch {
      -webkit-box-align: stretch !important;
      -webkit-align-items: stretch !important;
      -moz-box-align: stretch !important;
      -ms-flex-align: stretch !important;
      align-items: stretch !important
    }

    .align-content-start {
      -webkit-align-content: flex-start !important;
      -ms-flex-line-pack: start !important;
      align-content: flex-start !important
    }

    .align-content-end {
      -webkit-align-content: flex-end !important;
      -ms-flex-line-pack: end !important;
      align-content: flex-end !important
    }

    .align-content-center {
      -webkit-align-content: center !important;
      -ms-flex-line-pack: center !important;
      align-content: center !important
    }

    .align-content-between {
      -webkit-align-content: space-between !important;
      -ms-flex-line-pack: justify !important;
      align-content: space-between !important
    }

    .align-content-around {
      -webkit-align-content: space-around !important;
      -ms-flex-line-pack: distribute !important;
      align-content: space-around !important
    }

    .align-content-stretch {
      -webkit-align-content: stretch !important;
      -ms-flex-line-pack: stretch !important;
      align-content: stretch !important
    }

    .align-self-auto {
      -webkit-align-self: auto !important;
      -ms-flex-item-align: auto !important;
      align-self: auto !important
    }

    .align-self-start {
      -webkit-align-self: flex-start !important;
      -ms-flex-item-align: start !important;
      align-self: flex-start !important
    }

    .align-self-end {
      -webkit-align-self: flex-end !important;
      -ms-flex-item-align: end !important;
      align-self: flex-end !important
    }

    .align-self-center {
      -webkit-align-self: center !important;
      -ms-flex-item-align: center !important;
      align-self: center !important
    }

    .align-self-baseline {
      -webkit-align-self: baseline !important;
      -ms-flex-item-align: baseline !important;
      align-self: baseline !important
    }

    .align-self-stretch {
      -webkit-align-self: stretch !important;
      -ms-flex-item-align: stretch !important;
      align-self: stretch !important
    }

    .float-left {
      float: left !important
    }

    .float-right {
      float: right !important
    }

    .float-none {
      float: none !important
    }

    .position-static {
      position: static !important
    }

    .position-relative {
      position: relative !important
    }

    .position-absolute {
      position: absolute !important
    }

    .position-fixed {
      position: fixed !important
    }

    .position-sticky {
      position: -webkit-sticky !important;
      position: sticky !important
    }

    .fixed-bottom,
    .fixed-top {
      position: fixed;
      right: 0;
      left: 0;
      z-index: 1030
    }

    .fixed-top {
      top: 0
    }

    .fixed-bottom {
      bottom: 0
    }

    @supports ((position:-webkit-sticky) or (position:sticky)) {
      .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020
      }
    }

    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      -webkit-clip-path: inset(50%);
      clip-path: inset(50%);
      border: 0
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
      position: static;
      width: auto;
      height: auto;
      overflow: visible;
      clip: auto;
      white-space: normal;
      -webkit-clip-path: none;
      clip-path: none
    }

    .w-25 {
      width: 25% !important
    }

    .w-50 {
      width: 50% !important
    }

    .w-75 {
      width: 75% !important
    }

    .w-100 {
      width: 100% !important
    }

    .h-25 {
      height: 25% !important
    }

    .h-50 {
      height: 50% !important
    }

    .h-75 {
      height: 75% !important
    }

    .h-100 {
      height: 100% !important
    }

    .mw-100 {
      max-width: 100% !important
    }

    .mh-100 {
      max-height: 100% !important
    }

    .m-0 {
      margin: 0 !important
    }

    .mt-0,
    .my-0 {
      margin-top: 0 !important
    }

    .mr-0,
    .mx-0 {
      margin-right: 0 !important
    }

    .mb-0,
    .my-0 {
      margin-bottom: 0 !important
    }

    .ml-0,
    .mx-0 {
      margin-left: 0 !important
    }

    .m-1 {
      margin: 1rem !important
    }

    .mt-1,
    .my-1 {
      margin-top: 1rem !important
    }

    .mr-1,
    .mx-1 {
      margin-right: 1rem !important
    }

    .mb-1,
    .my-1 {
      margin-bottom: 1rem !important
    }

    .ml-1,
    .mx-1 {
      margin-left: 1rem !important
    }

    .m-2 {
      margin: 1.5rem !important
    }

    .mt-2,
    .my-2 {
      margin-top: 1.5rem !important
    }

    .mr-2,
    .mx-2 {
      margin-right: 1.5rem !important
    }

    .mb-2,
    .my-2 {
      margin-bottom: 1.5rem !important
    }

    .ml-2,
    .mx-2 {
      margin-left: 1.5rem !important
    }

    .m-3 {
      margin: 3rem !important
    }

    .mt-3,
    .my-3 {
      margin-top: 3rem !important
    }

    .mr-3,
    .mx-3 {
      margin-right: 3rem !important
    }

    .mb-3,
    .my-3 {
      margin-bottom: 3rem !important
    }

    .ml-3,
    .mx-3 {
      margin-left: 3rem !important
    }

    .m-4 {
      margin: 3.5rem !important
    }

    .mt-4,
    .my-4 {
      margin-top: 3.5rem !important
    }

    .mr-4,
    .mx-4 {
      margin-right: 3.5rem !important
    }

    .mb-4,
    .my-4 {
      margin-bottom: 3.5rem !important
    }

    .ml-4,
    .mx-4 {
      margin-left: 3.5rem !important
    }

    .m-5 {
      margin: 4rem !important
    }

    .mt-5,
    .my-5 {
      margin-top: 4rem !important
    }

    .mr-5,
    .mx-5 {
      margin-right: 4rem !important
    }

    .mb-5,
    .my-5 {
      margin-bottom: 4rem !important
    }

    .ml-5,
    .mx-5 {
      margin-left: 4rem !important
    }

    .p-0 {
      padding: 0 !important
    }

    .pt-0,
    .py-0 {
      padding-top: 0 !important
    }

    .pr-0,
    .px-0 {
      padding-right: 0 !important
    }

    .pb-0,
    .py-0 {
      padding-bottom: 0 !important
    }

    .pl-0,
    .px-0 {
      padding-left: 0 !important
    }

    .p-1 {
      padding: 1rem !important
    }

    .pt-1,
    .py-1 {
      padding-top: 1rem !important
    }

    .pr-1,
    .px-1 {
      padding-right: 1rem !important
    }

    .pb-1,
    .py-1 {
      padding-bottom: 1rem !important
    }

    .pl-1,
    .px-1 {
      padding-left: 1rem !important
    }

    .p-2 {
      padding: 1.5rem !important
    }

    .pt-2,
    .py-2 {
      padding-top: 1.5rem !important
    }

    .pr-2,
    .px-2 {
      padding-right: 1.5rem !important
    }

    .pb-2,
    .py-2 {
      padding-bottom: 1.5rem !important
    }

    .pl-2,
    .px-2 {
      padding-left: 1.5rem !important
    }

    .p-3 {
      padding: 3rem !important
    }

    .pt-3,
    .py-3 {
      padding-top: 3rem !important
    }

    .pr-3,
    .px-3 {
      padding-right: 3rem !important
    }

    .pb-3,
    .py-3 {
      padding-bottom: 3rem !important
    }

    .pl-3,
    .px-3 {
      padding-left: 3rem !important
    }

    .p-4 {
      padding: 3.5rem !important
    }

    .pt-4,
    .py-4 {
      padding-top: 3.5rem !important
    }

    .pr-4,
    .px-4 {
      padding-right: 3.5rem !important
    }

    .pb-4,
    .py-4 {
      padding-bottom: 3.5rem !important
    }

    .pl-4,
    .px-4 {
      padding-left: 3.5rem !important
    }

    .p-5 {
      padding: 4rem !important
    }

    .pt-5,
    .py-5 {
      padding-top: 4rem !important
    }

    .pr-5,
    .px-5 {
      padding-right: 4rem !important
    }

    .pb-5,
    .py-5 {
      padding-bottom: 4rem !important
    }

    .pl-5,
    .px-5 {
      padding-left: 4rem !important
    }

    .m-auto {
      margin: auto !important
    }

    .mt-auto,
    .my-auto {
      margin-top: auto !important
    }

    .mr-auto,
    .mx-auto {
      margin-right: auto !important
    }

    .mb-auto,
    .my-auto {
      margin-bottom: auto !important
    }

    .ml-auto,
    .mx-auto {
      margin-left: auto !important
    }

    .text-justify {
      text-align: justify !important
    }

    .text-nowrap {
      white-space: nowrap !important
    }

    .text-truncate {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap
    }

    .text-left {
      text-align: left !important
    }

    .text-right {
      text-align: right !important
    }

    .text-center {
      text-align: center !important
    }

    @media (min-width:576px) {

      .flex-sm-column,
      .flex-sm-row {
        -webkit-box-direction: normal !important;
        -moz-box-direction: normal !important
      }

      .flex-sm-row {
        -webkit-box-orient: horizontal !important;
        -webkit-flex-direction: row !important;
        -moz-box-orient: horizontal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important
      }

      .flex-sm-column {
        -webkit-box-orient: vertical !important;
        -webkit-flex-direction: column !important;
        -moz-box-orient: vertical !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important
      }

      .flex-sm-column-reverse,
      .flex-sm-row-reverse {
        -webkit-box-direction: reverse !important;
        -moz-box-direction: reverse !important
      }

      .flex-sm-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-flex-direction: row-reverse !important;
        -moz-box-orient: horizontal !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important
      }

      .flex-sm-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-flex-direction: column-reverse !important;
        -moz-box-orient: vertical !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important
      }

      .flex-sm-wrap {
        -webkit-flex-wrap: wrap !important;
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
      }

      .flex-sm-nowrap {
        -webkit-flex-wrap: nowrap !important;
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important
      }

      .flex-sm-wrap-reverse {
        -webkit-flex-wrap: wrap-reverse !important;
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important
      }

      .justify-content-sm-start {
        -webkit-box-pack: start !important;
        -webkit-justify-content: flex-start !important;
        -moz-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
      }

      .justify-content-sm-end {
        -webkit-box-pack: end !important;
        -webkit-justify-content: flex-end !important;
        -moz-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
      }

      .justify-content-sm-center {
        -webkit-box-pack: center !important;
        -webkit-justify-content: center !important;
        -moz-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important
      }

      .justify-content-sm-between {
        -webkit-box-pack: justify !important;
        -webkit-justify-content: space-between !important;
        -moz-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
      }

      .justify-content-sm-around {
        -webkit-justify-content: space-around !important;
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
      }

      .align-items-sm-start {
        -webkit-box-align: start !important;
        -webkit-align-items: flex-start !important;
        -moz-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important
      }

      .align-items-sm-end {
        -webkit-box-align: end !important;
        -webkit-align-items: flex-end !important;
        -moz-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important
      }

      .align-items-sm-center {
        -webkit-box-align: center !important;
        -webkit-align-items: center !important;
        -moz-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important
      }

      .align-items-sm-baseline {
        -webkit-box-align: baseline !important;
        -webkit-align-items: baseline !important;
        -moz-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important
      }

      .align-items-sm-stretch {
        -webkit-box-align: stretch !important;
        -webkit-align-items: stretch !important;
        -moz-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important
      }

      .align-content-sm-start {
        -webkit-align-content: flex-start !important;
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
      }

      .align-content-sm-end {
        -webkit-align-content: flex-end !important;
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important
      }

      .align-content-sm-center {
        -webkit-align-content: center !important;
        -ms-flex-line-pack: center !important;
        align-content: center !important
      }

      .align-content-sm-between {
        -webkit-align-content: space-between !important;
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important
      }

      .align-content-sm-around {
        -webkit-align-content: space-around !important;
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important
      }

      .align-content-sm-stretch {
        -webkit-align-content: stretch !important;
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important
      }

      .align-self-sm-auto {
        -webkit-align-self: auto !important;
        -ms-flex-item-align: auto !important;
        align-self: auto !important
      }

      .align-self-sm-start {
        -webkit-align-self: flex-start !important;
        -ms-flex-item-align: start !important;
        align-self: flex-start !important
      }

      .align-self-sm-end {
        -webkit-align-self: flex-end !important;
        -ms-flex-item-align: end !important;
        align-self: flex-end !important
      }

      .align-self-sm-center {
        -webkit-align-self: center !important;
        -ms-flex-item-align: center !important;
        align-self: center !important
      }

      .align-self-sm-baseline {
        -webkit-align-self: baseline !important;
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important
      }

      .align-self-sm-stretch {
        -webkit-align-self: stretch !important;
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important
      }

      .float-sm-left {
        float: left !important
      }

      .float-sm-right {
        float: right !important
      }

      .float-sm-none {
        float: none !important
      }

      .m-sm-0 {
        margin: 0 !important
      }

      .mt-sm-0,
      .my-sm-0 {
        margin-top: 0 !important
      }

      .mr-sm-0,
      .mx-sm-0 {
        margin-right: 0 !important
      }

      .mb-sm-0,
      .my-sm-0 {
        margin-bottom: 0 !important
      }

      .ml-sm-0,
      .mx-sm-0 {
        margin-left: 0 !important
      }

      .m-sm-1 {
        margin: 1rem !important
      }

      .mt-sm-1,
      .my-sm-1 {
        margin-top: 1rem !important
      }

      .mr-sm-1,
      .mx-sm-1 {
        margin-right: 1rem !important
      }

      .mb-sm-1,
      .my-sm-1 {
        margin-bottom: 1rem !important
      }

      .ml-sm-1,
      .mx-sm-1 {
        margin-left: 1rem !important
      }

      .m-sm-2 {
        margin: 1.5rem !important
      }

      .mt-sm-2,
      .my-sm-2 {
        margin-top: 1.5rem !important
      }

      .mr-sm-2,
      .mx-sm-2 {
        margin-right: 1.5rem !important
      }

      .mb-sm-2,
      .my-sm-2 {
        margin-bottom: 1.5rem !important
      }

      .ml-sm-2,
      .mx-sm-2 {
        margin-left: 1.5rem !important
      }

      .m-sm-3 {
        margin: 3rem !important
      }

      .mt-sm-3,
      .my-sm-3 {
        margin-top: 3rem !important
      }

      .mr-sm-3,
      .mx-sm-3 {
        margin-right: 3rem !important
      }

      .mb-sm-3,
      .my-sm-3 {
        margin-bottom: 3rem !important
      }

      .ml-sm-3,
      .mx-sm-3 {
        margin-left: 3rem !important
      }

      .m-sm-4 {
        margin: 3.5rem !important
      }

      .mt-sm-4,
      .my-sm-4 {
        margin-top: 3.5rem !important
      }

      .mr-sm-4,
      .mx-sm-4 {
        margin-right: 3.5rem !important
      }

      .mb-sm-4,
      .my-sm-4 {
        margin-bottom: 3.5rem !important
      }

      .ml-sm-4,
      .mx-sm-4 {
        margin-left: 3.5rem !important
      }

      .m-sm-5 {
        margin: 4rem !important
      }

      .mt-sm-5,
      .my-sm-5 {
        margin-top: 4rem !important
      }

      .mr-sm-5,
      .mx-sm-5 {
        margin-right: 4rem !important
      }

      .mb-sm-5,
      .my-sm-5 {
        margin-bottom: 4rem !important
      }

      .ml-sm-5,
      .mx-sm-5 {
        margin-left: 4rem !important
      }

      .p-sm-0 {
        padding: 0 !important
      }

      .pt-sm-0,
      .py-sm-0 {
        padding-top: 0 !important
      }

      .pr-sm-0,
      .px-sm-0 {
        padding-right: 0 !important
      }

      .pb-sm-0,
      .py-sm-0 {
        padding-bottom: 0 !important
      }

      .pl-sm-0,
      .px-sm-0 {
        padding-left: 0 !important
      }

      .p-sm-1 {
        padding: 1rem !important
      }

      .pt-sm-1,
      .py-sm-1 {
        padding-top: 1rem !important
      }

      .pr-sm-1,
      .px-sm-1 {
        padding-right: 1rem !important
      }

      .pb-sm-1,
      .py-sm-1 {
        padding-bottom: 1rem !important
      }

      .pl-sm-1,
      .px-sm-1 {
        padding-left: 1rem !important
      }

      .p-sm-2 {
        padding: 1.5rem !important
      }

      .pt-sm-2,
      .py-sm-2 {
        padding-top: 1.5rem !important
      }

      .pr-sm-2,
      .px-sm-2 {
        padding-right: 1.5rem !important
      }

      .pb-sm-2,
      .py-sm-2 {
        padding-bottom: 1.5rem !important
      }

      .pl-sm-2,
      .px-sm-2 {
        padding-left: 1.5rem !important
      }

      .p-sm-3 {
        padding: 3rem !important
      }

      .pt-sm-3,
      .py-sm-3 {
        padding-top: 3rem !important
      }

      .pr-sm-3,
      .px-sm-3 {
        padding-right: 3rem !important
      }

      .pb-sm-3,
      .py-sm-3 {
        padding-bottom: 3rem !important
      }

      .pl-sm-3,
      .px-sm-3 {
        padding-left: 3rem !important
      }

      .p-sm-4 {
        padding: 3.5rem !important
      }

      .pt-sm-4,
      .py-sm-4 {
        padding-top: 3.5rem !important
      }

      .pr-sm-4,
      .px-sm-4 {
        padding-right: 3.5rem !important
      }

      .pb-sm-4,
      .py-sm-4 {
        padding-bottom: 3.5rem !important
      }

      .pl-sm-4,
      .px-sm-4 {
        padding-left: 3.5rem !important
      }

      .p-sm-5 {
        padding: 4rem !important
      }

      .pt-sm-5,
      .py-sm-5 {
        padding-top: 4rem !important
      }

      .pr-sm-5,
      .px-sm-5 {
        padding-right: 4rem !important
      }

      .pb-sm-5,
      .py-sm-5 {
        padding-bottom: 4rem !important
      }

      .pl-sm-5,
      .px-sm-5 {
        padding-left: 4rem !important
      }

      .m-sm-auto {
        margin: auto !important
      }

      .mt-sm-auto,
      .my-sm-auto {
        margin-top: auto !important
      }

      .mr-sm-auto,
      .mx-sm-auto {
        margin-right: auto !important
      }

      .mb-sm-auto,
      .my-sm-auto {
        margin-bottom: auto !important
      }

      .ml-sm-auto,
      .mx-sm-auto {
        margin-left: auto !important
      }

      .text-sm-left {
        text-align: left !important
      }

      .text-sm-right {
        text-align: right !important
      }

      .text-sm-center {
        text-align: center !important
      }
    }

    @media (min-width:768px) {

      .flex-md-column,
      .flex-md-row {
        -webkit-box-direction: normal !important;
        -moz-box-direction: normal !important
      }

      .flex-md-row {
        -webkit-box-orient: horizontal !important;
        -webkit-flex-direction: row !important;
        -moz-box-orient: horizontal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important
      }

      .flex-md-column {
        -webkit-box-orient: vertical !important;
        -webkit-flex-direction: column !important;
        -moz-box-orient: vertical !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important
      }

      .flex-md-column-reverse,
      .flex-md-row-reverse {
        -webkit-box-direction: reverse !important;
        -moz-box-direction: reverse !important
      }

      .flex-md-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-flex-direction: row-reverse !important;
        -moz-box-orient: horizontal !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important
      }

      .flex-md-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-flex-direction: column-reverse !important;
        -moz-box-orient: vertical !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important
      }

      .flex-md-wrap {
        -webkit-flex-wrap: wrap !important;
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
      }

      .flex-md-nowrap {
        -webkit-flex-wrap: nowrap !important;
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important
      }

      .flex-md-wrap-reverse {
        -webkit-flex-wrap: wrap-reverse !important;
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important
      }

      .justify-content-md-start {
        -webkit-box-pack: start !important;
        -webkit-justify-content: flex-start !important;
        -moz-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
      }

      .justify-content-md-end {
        -webkit-box-pack: end !important;
        -webkit-justify-content: flex-end !important;
        -moz-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
      }

      .justify-content-md-center {
        -webkit-box-pack: center !important;
        -webkit-justify-content: center !important;
        -moz-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important
      }

      .justify-content-md-between {
        -webkit-box-pack: justify !important;
        -webkit-justify-content: space-between !important;
        -moz-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
      }

      .justify-content-md-around {
        -webkit-justify-content: space-around !important;
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
      }

      .align-items-md-start {
        -webkit-box-align: start !important;
        -webkit-align-items: flex-start !important;
        -moz-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important
      }

      .align-items-md-end {
        -webkit-box-align: end !important;
        -webkit-align-items: flex-end !important;
        -moz-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important
      }

      .align-items-md-center {
        -webkit-box-align: center !important;
        -webkit-align-items: center !important;
        -moz-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important
      }

      .align-items-md-baseline {
        -webkit-box-align: baseline !important;
        -webkit-align-items: baseline !important;
        -moz-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important
      }

      .align-items-md-stretch {
        -webkit-box-align: stretch !important;
        -webkit-align-items: stretch !important;
        -moz-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important
      }

      .align-content-md-start {
        -webkit-align-content: flex-start !important;
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
      }

      .align-content-md-end {
        -webkit-align-content: flex-end !important;
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important
      }

      .align-content-md-center {
        -webkit-align-content: center !important;
        -ms-flex-line-pack: center !important;
        align-content: center !important
      }

      .align-content-md-between {
        -webkit-align-content: space-between !important;
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important
      }

      .align-content-md-around {
        -webkit-align-content: space-around !important;
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important
      }

      .align-content-md-stretch {
        -webkit-align-content: stretch !important;
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important
      }

      .align-self-md-auto {
        -webkit-align-self: auto !important;
        -ms-flex-item-align: auto !important;
        align-self: auto !important
      }

      .align-self-md-start {
        -webkit-align-self: flex-start !important;
        -ms-flex-item-align: start !important;
        align-self: flex-start !important
      }

      .align-self-md-end {
        -webkit-align-self: flex-end !important;
        -ms-flex-item-align: end !important;
        align-self: flex-end !important
      }

      .align-self-md-center {
        -webkit-align-self: center !important;
        -ms-flex-item-align: center !important;
        align-self: center !important
      }

      .align-self-md-baseline {
        -webkit-align-self: baseline !important;
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important
      }

      .align-self-md-stretch {
        -webkit-align-self: stretch !important;
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important
      }

      .float-md-left {
        float: left !important
      }

      .float-md-right {
        float: right !important
      }

      .float-md-none {
        float: none !important
      }

      .m-md-0 {
        margin: 0 !important
      }

      .mt-md-0,
      .my-md-0 {
        margin-top: 0 !important
      }

      .mr-md-0,
      .mx-md-0 {
        margin-right: 0 !important
      }

      .mb-md-0,
      .my-md-0 {
        margin-bottom: 0 !important
      }

      .ml-md-0,
      .mx-md-0 {
        margin-left: 0 !important
      }

      .m-md-1 {
        margin: 1rem !important
      }

      .mt-md-1,
      .my-md-1 {
        margin-top: 1rem !important
      }

      .mr-md-1,
      .mx-md-1 {
        margin-right: 1rem !important
      }

      .mb-md-1,
      .my-md-1 {
        margin-bottom: 1rem !important
      }

      .ml-md-1,
      .mx-md-1 {
        margin-left: 1rem !important
      }

      .m-md-2 {
        margin: 1.5rem !important
      }

      .mt-md-2,
      .my-md-2 {
        margin-top: 1.5rem !important
      }

      .mr-md-2,
      .mx-md-2 {
        margin-right: 1.5rem !important
      }

      .mb-md-2,
      .my-md-2 {
        margin-bottom: 1.5rem !important
      }

      .ml-md-2,
      .mx-md-2 {
        margin-left: 1.5rem !important
      }

      .m-md-3 {
        margin: 3rem !important
      }

      .mt-md-3,
      .my-md-3 {
        margin-top: 3rem !important
      }

      .mr-md-3,
      .mx-md-3 {
        margin-right: 3rem !important
      }

      .mb-md-3,
      .my-md-3 {
        margin-bottom: 3rem !important
      }

      .ml-md-3,
      .mx-md-3 {
        margin-left: 3rem !important
      }

      .m-md-4 {
        margin: 3.5rem !important
      }

      .mt-md-4,
      .my-md-4 {
        margin-top: 3.5rem !important
      }

      .mr-md-4,
      .mx-md-4 {
        margin-right: 3.5rem !important
      }

      .mb-md-4,
      .my-md-4 {
        margin-bottom: 3.5rem !important
      }

      .ml-md-4,
      .mx-md-4 {
        margin-left: 3.5rem !important
      }

      .m-md-5 {
        margin: 4rem !important
      }

      .mt-md-5,
      .my-md-5 {
        margin-top: 4rem !important
      }

      .mr-md-5,
      .mx-md-5 {
        margin-right: 4rem !important
      }

      .mb-md-5,
      .my-md-5 {
        margin-bottom: 4rem !important
      }

      .ml-md-5,
      .mx-md-5 {
        margin-left: 4rem !important
      }

      .p-md-0 {
        padding: 0 !important
      }

      .pt-md-0,
      .py-md-0 {
        padding-top: 0 !important
      }

      .pr-md-0,
      .px-md-0 {
        padding-right: 0 !important
      }

      .pb-md-0,
      .py-md-0 {
        padding-bottom: 0 !important
      }

      .pl-md-0,
      .px-md-0 {
        padding-left: 0 !important
      }

      .p-md-1 {
        padding: 1rem !important
      }

      .pt-md-1,
      .py-md-1 {
        padding-top: 1rem !important
      }

      .pr-md-1,
      .px-md-1 {
        padding-right: 1rem !important
      }

      .pb-md-1,
      .py-md-1 {
        padding-bottom: 1rem !important
      }

      .pl-md-1,
      .px-md-1 {
        padding-left: 1rem !important
      }

      .p-md-2 {
        padding: 1.5rem !important
      }

      .pt-md-2,
      .py-md-2 {
        padding-top: 1.5rem !important
      }

      .pr-md-2,
      .px-md-2 {
        padding-right: 1.5rem !important
      }

      .pb-md-2,
      .py-md-2 {
        padding-bottom: 1.5rem !important
      }

      .pl-md-2,
      .px-md-2 {
        padding-left: 1.5rem !important
      }

      .p-md-3 {
        padding: 3rem !important
      }

      .pt-md-3,
      .py-md-3 {
        padding-top: 3rem !important
      }

      .pr-md-3,
      .px-md-3 {
        padding-right: 3rem !important
      }

      .pb-md-3,
      .py-md-3 {
        padding-bottom: 3rem !important
      }

      .pl-md-3,
      .px-md-3 {
        padding-left: 3rem !important
      }

      .p-md-4 {
        padding: 3.5rem !important
      }

      .pt-md-4,
      .py-md-4 {
        padding-top: 3.5rem !important
      }

      .pr-md-4,
      .px-md-4 {
        padding-right: 3.5rem !important
      }

      .pb-md-4,
      .py-md-4 {
        padding-bottom: 3.5rem !important
      }

      .pl-md-4,
      .px-md-4 {
        padding-left: 3.5rem !important
      }

      .p-md-5 {
        padding: 4rem !important
      }

      .pt-md-5,
      .py-md-5 {
        padding-top: 4rem !important
      }

      .pr-md-5,
      .px-md-5 {
        padding-right: 4rem !important
      }

      .pb-md-5,
      .py-md-5 {
        padding-bottom: 4rem !important
      }

      .pl-md-5,
      .px-md-5 {
        padding-left: 4rem !important
      }

      .m-md-auto {
        margin: auto !important
      }

      .mt-md-auto,
      .my-md-auto {
        margin-top: auto !important
      }

      .mr-md-auto,
      .mx-md-auto {
        margin-right: auto !important
      }

      .mb-md-auto,
      .my-md-auto {
        margin-bottom: auto !important
      }

      .ml-md-auto,
      .mx-md-auto {
        margin-left: auto !important
      }

      .text-md-left {
        text-align: left !important
      }

      .text-md-right {
        text-align: right !important
      }

      .text-md-center {
        text-align: center !important
      }
    }

    @media (min-width:992px) {

      .flex-lg-column,
      .flex-lg-row {
        -webkit-box-direction: normal !important;
        -moz-box-direction: normal !important
      }

      .flex-lg-row {
        -webkit-box-orient: horizontal !important;
        -webkit-flex-direction: row !important;
        -moz-box-orient: horizontal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important
      }

      .flex-lg-column {
        -webkit-box-orient: vertical !important;
        -webkit-flex-direction: column !important;
        -moz-box-orient: vertical !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important
      }

      .flex-lg-column-reverse,
      .flex-lg-row-reverse {
        -webkit-box-direction: reverse !important;
        -moz-box-direction: reverse !important
      }

      .flex-lg-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-flex-direction: row-reverse !important;
        -moz-box-orient: horizontal !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important
      }

      .flex-lg-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-flex-direction: column-reverse !important;
        -moz-box-orient: vertical !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important
      }

      .flex-lg-wrap {
        -webkit-flex-wrap: wrap !important;
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
      }

      .flex-lg-nowrap {
        -webkit-flex-wrap: nowrap !important;
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important
      }

      .flex-lg-wrap-reverse {
        -webkit-flex-wrap: wrap-reverse !important;
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important
      }

      .justify-content-lg-start {
        -webkit-box-pack: start !important;
        -webkit-justify-content: flex-start !important;
        -moz-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
      }

      .justify-content-lg-end {
        -webkit-box-pack: end !important;
        -webkit-justify-content: flex-end !important;
        -moz-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
      }

      .justify-content-lg-center {
        -webkit-box-pack: center !important;
        -webkit-justify-content: center !important;
        -moz-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important
      }

      .justify-content-lg-between {
        -webkit-box-pack: justify !important;
        -webkit-justify-content: space-between !important;
        -moz-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
      }

      .justify-content-lg-around {
        -webkit-justify-content: space-around !important;
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
      }

      .align-items-lg-start {
        -webkit-box-align: start !important;
        -webkit-align-items: flex-start !important;
        -moz-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important
      }

      .align-items-lg-end {
        -webkit-box-align: end !important;
        -webkit-align-items: flex-end !important;
        -moz-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important
      }

      .align-items-lg-center {
        -webkit-box-align: center !important;
        -webkit-align-items: center !important;
        -moz-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important
      }

      .align-items-lg-baseline {
        -webkit-box-align: baseline !important;
        -webkit-align-items: baseline !important;
        -moz-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important
      }

      .align-items-lg-stretch {
        -webkit-box-align: stretch !important;
        -webkit-align-items: stretch !important;
        -moz-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important
      }

      .align-content-lg-start {
        -webkit-align-content: flex-start !important;
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
      }

      .align-content-lg-end {
        -webkit-align-content: flex-end !important;
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important
      }

      .align-content-lg-center {
        -webkit-align-content: center !important;
        -ms-flex-line-pack: center !important;
        align-content: center !important
      }

      .align-content-lg-between {
        -webkit-align-content: space-between !important;
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important
      }

      .align-content-lg-around {
        -webkit-align-content: space-around !important;
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important
      }

      .align-content-lg-stretch {
        -webkit-align-content: stretch !important;
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important
      }

      .align-self-lg-auto {
        -webkit-align-self: auto !important;
        -ms-flex-item-align: auto !important;
        align-self: auto !important
      }

      .align-self-lg-start {
        -webkit-align-self: flex-start !important;
        -ms-flex-item-align: start !important;
        align-self: flex-start !important
      }

      .align-self-lg-end {
        -webkit-align-self: flex-end !important;
        -ms-flex-item-align: end !important;
        align-self: flex-end !important
      }

      .align-self-lg-center {
        -webkit-align-self: center !important;
        -ms-flex-item-align: center !important;
        align-self: center !important
      }

      .align-self-lg-baseline {
        -webkit-align-self: baseline !important;
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important
      }

      .align-self-lg-stretch {
        -webkit-align-self: stretch !important;
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important
      }

      .float-lg-left {
        float: left !important
      }

      .float-lg-right {
        float: right !important
      }

      .float-lg-none {
        float: none !important
      }

      .m-lg-0 {
        margin: 0 !important
      }

      .mt-lg-0,
      .my-lg-0 {
        margin-top: 0 !important
      }

      .mr-lg-0,
      .mx-lg-0 {
        margin-right: 0 !important
      }

      .mb-lg-0,
      .my-lg-0 {
        margin-bottom: 0 !important
      }

      .ml-lg-0,
      .mx-lg-0 {
        margin-left: 0 !important
      }

      .m-lg-1 {
        margin: 1rem !important
      }

      .mt-lg-1,
      .my-lg-1 {
        margin-top: 1rem !important
      }

      .mr-lg-1,
      .mx-lg-1 {
        margin-right: 1rem !important
      }

      .mb-lg-1,
      .my-lg-1 {
        margin-bottom: 1rem !important
      }

      .ml-lg-1,
      .mx-lg-1 {
        margin-left: 1rem !important
      }

      .m-lg-2 {
        margin: 1.5rem !important
      }

      .mt-lg-2,
      .my-lg-2 {
        margin-top: 1.5rem !important
      }

      .mr-lg-2,
      .mx-lg-2 {
        margin-right: 1.5rem !important
      }

      .mb-lg-2,
      .my-lg-2 {
        margin-bottom: 1.5rem !important
      }

      .ml-lg-2,
      .mx-lg-2 {
        margin-left: 1.5rem !important
      }

      .m-lg-3 {
        margin: 3rem !important
      }

      .mt-lg-3,
      .my-lg-3 {
        margin-top: 3rem !important
      }

      .mr-lg-3,
      .mx-lg-3 {
        margin-right: 3rem !important
      }

      .mb-lg-3,
      .my-lg-3 {
        margin-bottom: 3rem !important
      }

      .ml-lg-3,
      .mx-lg-3 {
        margin-left: 3rem !important
      }

      .m-lg-4 {
        margin: 3.5rem !important
      }

      .mt-lg-4,
      .my-lg-4 {
        margin-top: 3.5rem !important
      }

      .mr-lg-4,
      .mx-lg-4 {
        margin-right: 3.5rem !important
      }

      .mb-lg-4,
      .my-lg-4 {
        margin-bottom: 3.5rem !important
      }

      .ml-lg-4,
      .mx-lg-4 {
        margin-left: 3.5rem !important
      }

      .m-lg-5 {
        margin: 4rem !important
      }

      .mt-lg-5,
      .my-lg-5 {
        margin-top: 4rem !important
      }

      .mr-lg-5,
      .mx-lg-5 {
        margin-right: 4rem !important
      }

      .mb-lg-5,
      .my-lg-5 {
        margin-bottom: 4rem !important
      }

      .ml-lg-5,
      .mx-lg-5 {
        margin-left: 4rem !important
      }

      .p-lg-0 {
        padding: 0 !important
      }

      .pt-lg-0,
      .py-lg-0 {
        padding-top: 0 !important
      }

      .pr-lg-0,
      .px-lg-0 {
        padding-right: 0 !important
      }

      .pb-lg-0,
      .py-lg-0 {
        padding-bottom: 0 !important
      }

      .pl-lg-0,
      .px-lg-0 {
        padding-left: 0 !important
      }

      .p-lg-1 {
        padding: 1rem !important
      }

      .pt-lg-1,
      .py-lg-1 {
        padding-top: 1rem !important
      }

      .pr-lg-1,
      .px-lg-1 {
        padding-right: 1rem !important
      }

      .pb-lg-1,
      .py-lg-1 {
        padding-bottom: 1rem !important
      }

      .pl-lg-1,
      .px-lg-1 {
        padding-left: 1rem !important
      }

      .p-lg-2 {
        padding: 1.5rem !important
      }

      .pt-lg-2,
      .py-lg-2 {
        padding-top: 1.5rem !important
      }

      .pr-lg-2,
      .px-lg-2 {
        padding-right: 1.5rem !important
      }

      .pb-lg-2,
      .py-lg-2 {
        padding-bottom: 1.5rem !important
      }

      .pl-lg-2,
      .px-lg-2 {
        padding-left: 1.5rem !important
      }

      .p-lg-3 {
        padding: 3rem !important
      }

      .pt-lg-3,
      .py-lg-3 {
        padding-top: 3rem !important
      }

      .pr-lg-3,
      .px-lg-3 {
        padding-right: 3rem !important
      }

      .pb-lg-3,
      .py-lg-3 {
        padding-bottom: 3rem !important
      }

      .pl-lg-3,
      .px-lg-3 {
        padding-left: 3rem !important
      }

      .p-lg-4 {
        padding: 3.5rem !important
      }

      .pt-lg-4,
      .py-lg-4 {
        padding-top: 3.5rem !important
      }

      .pr-lg-4,
      .px-lg-4 {
        padding-right: 3.5rem !important
      }

      .pb-lg-4,
      .py-lg-4 {
        padding-bottom: 3.5rem !important
      }

      .pl-lg-4,
      .px-lg-4 {
        padding-left: 3.5rem !important
      }

      .p-lg-5 {
        padding: 4rem !important
      }

      .pt-lg-5,
      .py-lg-5 {
        padding-top: 4rem !important
      }

      .pr-lg-5,
      .px-lg-5 {
        padding-right: 4rem !important
      }

      .pb-lg-5,
      .py-lg-5 {
        padding-bottom: 4rem !important
      }

      .pl-lg-5,
      .px-lg-5 {
        padding-left: 4rem !important
      }

      .m-lg-auto {
        margin: auto !important
      }

      .mt-lg-auto,
      .my-lg-auto {
        margin-top: auto !important
      }

      .mr-lg-auto,
      .mx-lg-auto {
        margin-right: auto !important
      }

      .mb-lg-auto,
      .my-lg-auto {
        margin-bottom: auto !important
      }

      .ml-lg-auto,
      .mx-lg-auto {
        margin-left: auto !important
      }

      .text-lg-left {
        text-align: left !important
      }

      .text-lg-right {
        text-align: right !important
      }

      .text-lg-center {
        text-align: center !important
      }
    }

    @media (min-width:1200px) {

      .flex-xl-column,
      .flex-xl-row {
        -webkit-box-direction: normal !important;
        -moz-box-direction: normal !important
      }

      .flex-xl-row {
        -webkit-box-orient: horizontal !important;
        -webkit-flex-direction: row !important;
        -moz-box-orient: horizontal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important
      }

      .flex-xl-column {
        -webkit-box-orient: vertical !important;
        -webkit-flex-direction: column !important;
        -moz-box-orient: vertical !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important
      }

      .flex-xl-column-reverse,
      .flex-xl-row-reverse {
        -webkit-box-direction: reverse !important;
        -moz-box-direction: reverse !important
      }

      .flex-xl-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-flex-direction: row-reverse !important;
        -moz-box-orient: horizontal !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important
      }

      .flex-xl-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-flex-direction: column-reverse !important;
        -moz-box-orient: vertical !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important
      }

      .flex-xl-wrap {
        -webkit-flex-wrap: wrap !important;
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
      }

      .flex-xl-nowrap {
        -webkit-flex-wrap: nowrap !important;
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important
      }

      .flex-xl-wrap-reverse {
        -webkit-flex-wrap: wrap-reverse !important;
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important
      }

      .justify-content-xl-start {
        -webkit-box-pack: start !important;
        -webkit-justify-content: flex-start !important;
        -moz-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
      }

      .justify-content-xl-end {
        -webkit-box-pack: end !important;
        -webkit-justify-content: flex-end !important;
        -moz-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
      }

      .justify-content-xl-center {
        -webkit-box-pack: center !important;
        -webkit-justify-content: center !important;
        -moz-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important
      }

      .justify-content-xl-between {
        -webkit-box-pack: justify !important;
        -webkit-justify-content: space-between !important;
        -moz-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
      }

      .justify-content-xl-around {
        -webkit-justify-content: space-around !important;
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
      }

      .align-items-xl-start {
        -webkit-box-align: start !important;
        -webkit-align-items: flex-start !important;
        -moz-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important
      }

      .align-items-xl-end {
        -webkit-box-align: end !important;
        -webkit-align-items: flex-end !important;
        -moz-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important
      }

      .align-items-xl-center {
        -webkit-box-align: center !important;
        -webkit-align-items: center !important;
        -moz-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important
      }

      .align-items-xl-baseline {
        -webkit-box-align: baseline !important;
        -webkit-align-items: baseline !important;
        -moz-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important
      }

      .align-items-xl-stretch {
        -webkit-box-align: stretch !important;
        -webkit-align-items: stretch !important;
        -moz-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important
      }

      .align-content-xl-start {
        -webkit-align-content: flex-start !important;
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
      }

      .align-content-xl-end {
        -webkit-align-content: flex-end !important;
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important
      }

      .align-content-xl-center {
        -webkit-align-content: center !important;
        -ms-flex-line-pack: center !important;
        align-content: center !important
      }

      .align-content-xl-between {
        -webkit-align-content: space-between !important;
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important
      }

      .align-content-xl-around {
        -webkit-align-content: space-around !important;
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important
      }

      .align-content-xl-stretch {
        -webkit-align-content: stretch !important;
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important
      }

      .align-self-xl-auto {
        -webkit-align-self: auto !important;
        -ms-flex-item-align: auto !important;
        align-self: auto !important
      }

      .align-self-xl-start {
        -webkit-align-self: flex-start !important;
        -ms-flex-item-align: start !important;
        align-self: flex-start !important
      }

      .align-self-xl-end {
        -webkit-align-self: flex-end !important;
        -ms-flex-item-align: end !important;
        align-self: flex-end !important
      }

      .align-self-xl-center {
        -webkit-align-self: center !important;
        -ms-flex-item-align: center !important;
        align-self: center !important
      }

      .align-self-xl-baseline {
        -webkit-align-self: baseline !important;
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important
      }

      .align-self-xl-stretch {
        -webkit-align-self: stretch !important;
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important
      }

      .float-xl-left {
        float: left !important
      }

      .float-xl-right {
        float: right !important
      }

      .float-xl-none {
        float: none !important
      }

      .m-xl-0 {
        margin: 0 !important
      }

      .mt-xl-0,
      .my-xl-0 {
        margin-top: 0 !important
      }

      .mr-xl-0,
      .mx-xl-0 {
        margin-right: 0 !important
      }

      .mb-xl-0,
      .my-xl-0 {
        margin-bottom: 0 !important
      }

      .ml-xl-0,
      .mx-xl-0 {
        margin-left: 0 !important
      }

      .m-xl-1 {
        margin: 1rem !important
      }

      .mt-xl-1,
      .my-xl-1 {
        margin-top: 1rem !important
      }

      .mr-xl-1,
      .mx-xl-1 {
        margin-right: 1rem !important
      }

      .mb-xl-1,
      .my-xl-1 {
        margin-bottom: 1rem !important
      }

      .ml-xl-1,
      .mx-xl-1 {
        margin-left: 1rem !important
      }

      .m-xl-2 {
        margin: 1.5rem !important
      }

      .mt-xl-2,
      .my-xl-2 {
        margin-top: 1.5rem !important
      }

      .mr-xl-2,
      .mx-xl-2 {
        margin-right: 1.5rem !important
      }

      .mb-xl-2,
      .my-xl-2 {
        margin-bottom: 1.5rem !important
      }

      .ml-xl-2,
      .mx-xl-2 {
        margin-left: 1.5rem !important
      }

      .m-xl-3 {
        margin: 3rem !important
      }

      .mt-xl-3,
      .my-xl-3 {
        margin-top: 3rem !important
      }

      .mr-xl-3,
      .mx-xl-3 {
        margin-right: 3rem !important
      }

      .mb-xl-3,
      .my-xl-3 {
        margin-bottom: 3rem !important
      }

      .ml-xl-3,
      .mx-xl-3 {
        margin-left: 3rem !important
      }

      .m-xl-4 {
        margin: 3.5rem !important
      }

      .mt-xl-4,
      .my-xl-4 {
        margin-top: 3.5rem !important
      }

      .mr-xl-4,
      .mx-xl-4 {
        margin-right: 3.5rem !important
      }

      .mb-xl-4,
      .my-xl-4 {
        margin-bottom: 3.5rem !important
      }

      .ml-xl-4,
      .mx-xl-4 {
        margin-left: 3.5rem !important
      }

      .m-xl-5 {
        margin: 4rem !important
      }

      .mt-xl-5,
      .my-xl-5 {
        margin-top: 4rem !important
      }

      .mr-xl-5,
      .mx-xl-5 {
        margin-right: 4rem !important
      }

      .mb-xl-5,
      .my-xl-5 {
        margin-bottom: 4rem !important
      }

      .ml-xl-5,
      .mx-xl-5 {
        margin-left: 4rem !important
      }

      .p-xl-0 {
        padding: 0 !important
      }

      .pt-xl-0,
      .py-xl-0 {
        padding-top: 0 !important
      }

      .pr-xl-0,
      .px-xl-0 {
        padding-right: 0 !important
      }

      .pb-xl-0,
      .py-xl-0 {
        padding-bottom: 0 !important
      }

      .pl-xl-0,
      .px-xl-0 {
        padding-left: 0 !important
      }

      .p-xl-1 {
        padding: 1rem !important
      }

      .pt-xl-1,
      .py-xl-1 {
        padding-top: 1rem !important
      }

      .pr-xl-1,
      .px-xl-1 {
        padding-right: 1rem !important
      }

      .pb-xl-1,
      .py-xl-1 {
        padding-bottom: 1rem !important
      }

      .pl-xl-1,
      .px-xl-1 {
        padding-left: 1rem !important
      }

      .p-xl-2 {
        padding: 1.5rem !important
      }

      .pt-xl-2,
      .py-xl-2 {
        padding-top: 1.5rem !important
      }

      .pr-xl-2,
      .px-xl-2 {
        padding-right: 1.5rem !important
      }

      .pb-xl-2,
      .py-xl-2 {
        padding-bottom: 1.5rem !important
      }

      .pl-xl-2,
      .px-xl-2 {
        padding-left: 1.5rem !important
      }

      .p-xl-3 {
        padding: 3rem !important
      }

      .pt-xl-3,
      .py-xl-3 {
        padding-top: 3rem !important
      }

      .pr-xl-3,
      .px-xl-3 {
        padding-right: 3rem !important
      }

      .pb-xl-3,
      .py-xl-3 {
        padding-bottom: 3rem !important
      }

      .pl-xl-3,
      .px-xl-3 {
        padding-left: 3rem !important
      }

      .p-xl-4 {
        padding: 3.5rem !important
      }

      .pt-xl-4,
      .py-xl-4 {
        padding-top: 3.5rem !important
      }

      .pr-xl-4,
      .px-xl-4 {
        padding-right: 3.5rem !important
      }

      .pb-xl-4,
      .py-xl-4 {
        padding-bottom: 3.5rem !important
      }

      .pl-xl-4,
      .px-xl-4 {
        padding-left: 3.5rem !important
      }

      .p-xl-5 {
        padding: 4rem !important
      }

      .pt-xl-5,
      .py-xl-5 {
        padding-top: 4rem !important
      }

      .pr-xl-5,
      .px-xl-5 {
        padding-right: 4rem !important
      }

      .pb-xl-5,
      .py-xl-5 {
        padding-bottom: 4rem !important
      }

      .pl-xl-5,
      .px-xl-5 {
        padding-left: 4rem !important
      }

      .m-xl-auto {
        margin: auto !important
      }

      .mt-xl-auto,
      .my-xl-auto {
        margin-top: auto !important
      }

      .mr-xl-auto,
      .mx-xl-auto {
        margin-right: auto !important
      }

      .mb-xl-auto,
      .my-xl-auto {
        margin-bottom: auto !important
      }

      .ml-xl-auto,
      .mx-xl-auto {
        margin-left: auto !important
      }

      .text-xl-left {
        text-align: left !important
      }

      .text-xl-right {
        text-align: right !important
      }

      .text-xl-center {
        text-align: center !important
      }
    }

    .text-lowercase {
      text-transform: lowercase !important
    }

    .text-uppercase {
      text-transform: uppercase !important
    }

    .text-capitalize {
      text-transform: capitalize !important
    }

    .font-weight-light {
      font-weight: 300 !important
    }

    .font-weight-normal {
      font-weight: 400 !important
    }

    .font-weight-bold {
      font-weight: 700 !important
    }

    .font-italic {
      font-style: italic !important
    }

    .text-white {
      color: #FFF !important
    }

    .text-primary {
      color: #666EE8 !important
    }

    a.text-primary:focus,
    a.text-primary:hover {
      color: #3A44E1 !important
    }

    .text-secondary {
      color: #6B6F82 !important
    }

    a.text-secondary:focus,
    a.text-secondary:hover {
      color: #545766 !important
    }

    .text-success {
      color: #28D094 !important
    }

    a.text-success:focus,
    a.text-success:hover {
      color: #20A576 !important
    }

    .text-info {
      color: #1E9FF2 !important
    }

    a.text-info:focus,
    a.text-info:hover {
      color: #0C84D1 !important
    }

    .text-warning {
      color: #FF9149 !important
    }

    a.text-warning:focus,
    a.text-warning:hover {
      color: #FF7216 !important
    }

    .text-danger {
      color: #FF4961 !important
    }

    a.text-danger:focus,
    a.text-danger:hover {
      color: #FF1635 !important
    }

    .text-light {
      color: #BABFC7 !important
    }

    a.text-light:focus,
    a.text-light:hover {
      color: #9EA5B0 !important
    }

    .text-dark {
      color: #464855 !important
    }

    a.text-dark:focus,
    a.text-dark:hover {
      color: #2F3039 !important
    }

    .text-muted {
      color: #6B6F82 !important
    }

    .text-hide {
      font: 0/0 a;
      color: transparent;
      background-color: transparent;
      border: 0
    }

    .visible {
      visibility: visible !important
    }

    .invisible {
      visibility: hidden !important
    }

    @font-face {
      font-family: feather;
      src: url(fonts/feather.eot?9xfrq8);
      src: url(fonts/feather.eot?9xfrq8#iefix) format('embedded-opentype'), url(fonts/feather.ttf?9xfrq8) format('truetype'), url(fonts/feather.woff?9xfrq8) format('woff'), url(fonts/feather.svg?9xfrq8#feather) format('svg');
      font-weight: 400;
      font-style: normal
    }

    [class*=" ft-"],
    [class^=ft-] {
      font-family: feather !important;
      speak: none;
      font-style: normal;
      font-weight: 400;
      font-variant: normal;
      text-transform: none;
      line-height: 1;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .ft-bold:before {
      content: "\e9ea"
    }

    .ft-crop:before {
      content: "\e9eb"
    }

    .ft-help-circle:before {
      content: "\e9ec"
    }

    .ft-italic:before {
      content: "\e9ed"
    }

    .ft-shopping-cart:before {
      content: "\e9ee"
    }

    .ft-underline:before {
      content: "\e9ef"
    }

    .ft-activity:before {
      content: "\e900"
    }

    .ft-airplay:before {
      content: "\e901"
    }

    .ft-alert-circle:before {
      content: "\e902"
    }

    .ft-alert-octagon:before {
      content: "\e903"
    }

    .ft-alert-triangle:before {
      content: "\e904"
    }

    .ft-align-center:before {
      content: "\e905"
    }

    .ft-align-justify:before {
      content: "\e906"
    }

    .ft-align-left:before {
      content: "\e907"
    }

    .ft-align-right:before {
      content: "\e908"
    }

    .ft-anchor:before {
      content: "\e909"
    }

    .ft-aperture:before {
      content: "\e90a"
    }

    .ft-arrow-down-left:before {
      content: "\e90b"
    }

    .ft-arrow-down-right:before {
      content: "\e90c"
    }

    .ft-arrow-down:before {
      content: "\e90d"
    }

    .ft-arrow-left:before {
      content: "\e90e"
    }

    .ft-arrow-right:before {
      content: "\e90f"
    }

    .ft-arrow-up-left:before {
      content: "\e910"
    }

    .ft-arrow-up-right:before {
      content: "\e911"
    }

    .ft-arrow-up:before {
      content: "\e912"
    }

    .ft-at-sign:before {
      content: "\e913"
    }

    .ft-award:before {
      content: "\e914"
    }

    .ft-bar-chart-2:before {
      content: "\e915"
    }

    .ft-bar-chart:before {
      content: "\e916"
    }

    .ft-battery-charging:before {
      content: "\e917"
    }

    .ft-battery:before {
      content: "\e918"
    }

    .ft-bell-off:before {
      content: "\e919"
    }

    .ft-bell:before {
      content: "\e91a"
    }

    .ft-bluetooth:before {
      content: "\e91b"
    }

    .ft-book:before {
      content: "\e91c"
    }

    .ft-bookmark:before {
      content: "\e91d"
    }

    .ft-box:before {
      content: "\e91e"
    }

    .ft-briefcase:before {
      content: "\e91f"
    }

    .ft-calendar:before {
      content: "\e920"
    }

    .ft-camera-off:before {
      content: "\e921"
    }

    .ft-camera:before {
      content: "\e922"
    }

    .ft-cast:before {
      content: "\e923"
    }

    .ft-check-circle:before {
      content: "\e924"
    }

    .ft-check-square:before {
      content: "\e925"
    }

    .ft-check:before {
      content: "\e926"
    }

    .ft-chevron-down:before {
      content: "\e927"
    }

    .ft-chevron-left:before {
      content: "\e928"
    }

    .ft-chevron-right:before {
      content: "\e929"
    }

    .ft-chevron-up:before {
      content: "\e92a"
    }

    .ft-chevrons-down:before {
      content: "\e92b"
    }

    .ft-chevrons-left:before {
      content: "\e92c"
    }

    .ft-chevrons-right:before {
      content: "\e92d"
    }

    .ft-chevrons-up:before {
      content: "\e92e"
    }

    .ft-chrome:before {
      content: "\e92f"
    }

    .ft-circle:before {
      content: "\e930"
    }

    .ft-clipboard:before {
      content: "\e931"
    }

    .ft-clock:before {
      content: "\e932"
    }

    .ft-cloud-drizzle:before {
      content: "\e933"
    }

    .ft-cloud-lightning:before {
      content: "\e934"
    }

    .ft-cloud-off:before {
      content: "\e935"
    }

    .ft-cloud-rain:before {
      content: "\e936"
    }

    .ft-cloud-snow:before {
      content: "\e937"
    }

    .ft-cloud:before {
      content: "\e938"
    }

    .ft-codepen:before {
      content: "\e939"
    }

    .ft-command:before {
      content: "\e93a"
    }

    .ft-compass:before {
      content: "\e93b"
    }

    .ft-copy:before {
      content: "\e93c"
    }

    .ft-corner-down-left:before {
      content: "\e93d"
    }

    .ft-corner-down-right:before {
      content: "\e93e"
    }

    .ft-corner-left-down:before {
      content: "\e93f"
    }

    .ft-corner-left-up:before {
      content: "\e940"
    }

    .ft-corner-right-down:before {
      content: "\e941"
    }

    .ft-corner-right-up:before {
      content: "\e942"
    }

    .ft-corner-up-left:before {
      content: "\e943"
    }

    .ft-corner-up-right:before {
      content: "\e944"
    }

    .ft-cpu:before {
      content: "\e945"
    }

    .ft-credit-card:before {
      content: "\e946"
    }

    .ft-crosshair:before {
      content: "\e947"
    }

    .ft-delete:before {
      content: "\e948"
    }

    .ft-disc:before {
      content: "\e949"
    }

    .ft-download-cloud:before {
      content: "\e94a"
    }

    .ft-download:before {
      content: "\e94b"
    }

    .ft-droplet:before {
      content: "\e94c"
    }

    .ft-edit-2:before {
      content: "\e94d"
    }

    .ft-edit-3:before {
      content: "\e94e"
    }

    .ft-edit:before {
      content: "\e94f"
    }

    .ft-external-link:before {
      content: "\e950"
    }

    .ft-eye-off:before {
      content: "\e951"
    }

    .ft-eye:before {
      content: "\e952"
    }

    .ft-facebook:before {
      content: "\e953"
    }

    .ft-fast-forward:before {
      content: "\e954"
    }

    .ft-feather:before {
      content: "\e955"
    }

    .ft-file-minus:before {
      content: "\e956"
    }

    .ft-file-plus:before {
      content: "\e957"
    }

    .ft-file-text:before {
      content: "\e958"
    }

    .ft-file:before {
      content: "\e959"
    }

    .ft-film:before {
      content: "\e95a"
    }

    .ft-filter:before {
      content: "\e95b"
    }

    .ft-flag:before {
      content: "\e95c"
    }

    .ft-folder:before {
      content: "\e95d"
    }

    .ft-github:before {
      content: "\e95e"
    }

    .ft-gitlab:before {
      content: "\e95f"
    }

    .ft-globe:before {
      content: "\e960"
    }

    .ft-grid:before {
      content: "\e961"
    }

    .ft-hash:before {
      content: "\e962"
    }

    .ft-headphones:before {
      content: "\e963"
    }

    .ft-heart:before {
      content: "\e964"
    }

    .ft-home:before {
      content: "\e965"
    }

    .ft-image:before {
      content: "\e966"
    }

    .ft-inbox:before {
      content: "\e967"
    }

    .ft-info:before {
      content: "\e968"
    }

    .ft-instagram:before {
      content: "\e969"
    }

    .ft-layers:before {
      content: "\e96a"
    }

    .ft-layout:before {
      content: "\e96b"
    }

    .ft-life-buoy:before {
      content: "\e96c"
    }

    .ft-link-2:before {
      content: "\e96d"
    }

    .ft-link:before {
      content: "\e96e"
    }

    .ft-list:before {
      content: "\e96f"
    }

    .ft-loader:before {
      content: "\e970"
    }

    .ft-lock:before {
      content: "\e971"
    }

    .ft-log-in:before {
      content: "\e972"
    }

    .ft-log-out:before {
      content: "\e973"
    }

    .ft-mail:before {
      content: "\e974"
    }

    .ft-map-pin:before {
      content: "\e975"
    }

    .ft-map:before {
      content: "\e976"
    }

    .ft-maximize-2:before {
      content: "\e977"
    }

    .ft-maximize:before {
      content: "\e978"
    }

    .ft-menu:before {
      content: "\e979"
    }

    .ft-message-circle:before {
      content: "\e97a"
    }

    .ft-message-square:before {
      content: "\e97b"
    }

    .ft-mic-off:before {
      content: "\e97c"
    }

    .ft-mic:before {
      content: "\e97d"
    }

    .ft-minimize-2:before {
      content: "\e97e"
    }

    .ft-minimize:before {
      content: "\e97f"
    }

    .ft-minus-circle:before {
      content: "\e980"
    }

    .ft-minus-square:before {
      content: "\e981"
    }

    .ft-minus:before {
      content: "\e982"
    }

    .ft-monitor:before {
      content: "\e983"
    }

    .ft-moon:before {
      content: "\e984"
    }

    .ft-more-horizontal:before {
      content: "\e985"
    }

    .ft-more-vertical:before {
      content: "\e986"
    }

    .ft-move:before {
      content: "\e987"
    }

    .ft-music:before {
      content: "\e988"
    }

    .ft-navigation-2:before {
      content: "\e989"
    }

    .ft-navigation:before {
      content: "\e98a"
    }

    .ft-octagon:before {
      content: "\e98b"
    }

    .ft-package:before {
      content: "\e98c"
    }

    .ft-paperclip:before {
      content: "\e98d"
    }

    .ft-pause-circle:before {
      content: "\e98e"
    }

    .ft-pause:before {
      content: "\e98f"
    }

    .ft-percent:before {
      content: "\e990"
    }

    .ft-phone-call:before {
      content: "\e991"
    }

    .ft-phone-forwarded:before {
      content: "\e992"
    }

    .ft-phone-incoming:before {
      content: "\e993"
    }

    .ft-phone-missed:before {
      content: "\e994"
    }

    .ft-phone-off:before {
      content: "\e995"
    }

    .ft-phone-outgoing:before {
      content: "\e996"
    }

    .ft-phone:before {
      content: "\e997"
    }

    .ft-pie-chart:before {
      content: "\e998"
    }

    .ft-play-circle:before {
      content: "\e999"
    }

    .ft-play:before {
      content: "\e99a"
    }

    .ft-plus-circle:before {
      content: "\e99b"
    }

    .ft-plus-square:before {
      content: "\e99c"
    }

    .ft-plus:before {
      content: "\e99d"
    }

    .ft-pocket:before {
      content: "\e99e"
    }

    .ft-power:before {
      content: "\e99f"
    }

    .ft-printer:before {
      content: "\e9a0"
    }

    .ft-radio:before {
      content: "\e9a1"
    }

    .ft-refresh-ccw:before {
      content: "\e9a2"
    }

    .ft-refresh-cw:before {
      content: "\e9a3"
    }

    .ft-repeat:before {
      content: "\e9a4"
    }

    .ft-rewind:before {
      content: "\e9a5"
    }

    .ft-rotate-ccw:before {
      content: "\e9a6"
    }

    .ft-rotate-cw:before {
      content: "\e9a7"
    }

    .ft-save:before {
      content: "\e9a8"
    }

    .ft-scissors:before {
      content: "\e9a9"
    }

    .ft-search:before {
      content: "\e9aa"
    }

    .ft-server:before {
      content: "\e9ab"
    }

    .ft-settings:before {
      content: "\e9ac"
    }

    .ft-share-2:before {
      content: "\e9ad"
    }

    .ft-share:before {
      content: "\e9ae"
    }

    .ft-shield:before {
      content: "\e9af"
    }

    .ft-shuffle:before {
      content: "\e9b0"
    }

    .ft-sidebar:before {
      content: "\e9b1"
    }

    .ft-skip-back:before {
      content: "\e9b2"
    }

    .ft-skip-forward:before {
      content: "\e9b3"
    }

    .ft-slack:before {
      content: "\e9b4"
    }

    .ft-slash:before {
      content: "\e9b5"
    }

    .ft-sliders:before {
      content: "\e9b6"
    }

    .ft-smartphone:before {
      content: "\e9b7"
    }

    .ft-speaker:before {
      content: "\e9b8"
    }

    .ft-square:before {
      content: "\e9b9"
    }

    .ft-star:before {
      content: "\e9ba"
    }

    .ft-stop-circle:before {
      content: "\e9bb"
    }

    .ft-sun:before {
      content: "\e9bc"
    }

    .ft-sunrise:before {
      content: "\e9bd"
    }

    .ft-sunset:before {
      content: "\e9be"
    }

    .ft-tablet:before {
      content: "\e9bf"
    }

    .ft-tag:before {
      content: "\e9c0"
    }

    .ft-target:before {
      content: "\e9c1"
    }

    .ft-thermometer:before {
      content: "\e9c2"
    }

    .ft-thumbs-down:before {
      content: "\e9c3"
    }

    .ft-thumbs-up:before {
      content: "\e9c4"
    }

    .ft-toggle-left:before {
      content: "\e9c5"
    }

    .ft-toggle-right:before {
      content: "\e9c6"
    }

    .ft-trash-2:before {
      content: "\e9c7"
    }

    .ft-trash:before {
      content: "\e9c8"
    }

    .ft-trending-down:before {
      content: "\e9c9"
    }

    .ft-trending-up:before {
      content: "\e9ca"
    }

    .ft-triangle:before {
      content: "\e9cb"
    }

    .ft-tv:before {
      content: "\e9cc"
    }

    .ft-twitter:before {
      content: "\e9cd"
    }

    .ft-type:before {
      content: "\e9ce"
    }

    .ft-umbrella:before {
      content: "\e9cf"
    }

    .ft-unlock:before {
      content: "\e9d0"
    }

    .ft-upload-cloud:before {
      content: "\e9d1"
    }

    .ft-upload:before {
      content: "\e9d2"
    }

    .ft-user-check:before {
      content: "\e9d3"
    }

    .ft-user-minus:before {
      content: "\e9d4"
    }

    .ft-user-plus:before {
      content: "\e9d5"
    }

    .ft-user-x:before {
      content: "\e9d6"
    }

    .ft-user:before {
      content: "\e9d7"
    }

    .ft-users:before {
      content: "\e9d8"
    }

    .ft-video-off:before {
      content: "\e9d9"
    }

    .ft-video:before {
      content: "\e9da"
    }

    .ft-voicemail:before {
      content: "\e9db"
    }

    .ft-volume-1:before {
      content: "\e9dc"
    }

    .ft-volume-2:before {
      content: "\e9dd"
    }

    .ft-volume-x:before {
      content: "\e9de"
    }

    .ft-volume:before {
      content: "\e9df"
    }

    .ft-watch:before {
      content: "\e9e0"
    }

    .ft-wifi-off:before {
      content: "\e9e1"
    }

    .ft-wifi:before {
      content: "\e9e2"
    }

    .ft-wind:before {
      content: "\e9e3"
    }

    .ft-x-circle:before {
      content: "\e9e4"
    }

    .ft-x-square:before {
      content: "\e9e5"
    }

    .ft-x:before {
      content: "\e9e6"
    }

    .ft-zap:before {
      content: "\e9e7"
    }

    .ft-zoom-in:before {
      content: "\e9e8"
    }

    .ft-zoom-out:before {
      content: "\e9e9"
    }

    .flag-icon,
    .flag-icon-background {
      background-repeat: no-repeat;
      background-size: contain;
      background-position: 50%
    }

    .flag-icon {
      position: relative;
      display: inline-block;
      width: 1.33333333em;
      line-height: 1em
    }

    .flag-icon:before {
      content: "\00a0"
    }

    .flag-icon.flag-icon-squared {
      width: 1em
    }

    .flag-icon-ad {
      background-image: url(../flags/4x3/ad.svg)
    }

    .flag-icon-ad.flag-icon-squared {
      background-image: url(../flags/1x1/ad.svg)
    }

    .flag-icon-ae {
      background-image: url(../flags/4x3/ae.svg)
    }

    .flag-icon-ae.flag-icon-squared {
      background-image: url(../flags/1x1/ae.svg)
    }

    .flag-icon-af {
      background-image: url(../flags/4x3/af.svg)
    }

    .flag-icon-af.flag-icon-squared {
      background-image: url(../flags/1x1/af.svg)
    }

    .flag-icon-ag {
      background-image: url(../flags/4x3/ag.svg)
    }

    .flag-icon-ag.flag-icon-squared {
      background-image: url(../flags/1x1/ag.svg)
    }

    .flag-icon-ai {
      background-image: url(../flags/4x3/ai.svg)
    }

    .flag-icon-ai.flag-icon-squared {
      background-image: url(../flags/1x1/ai.svg)
    }

    .flag-icon-al {
      background-image: url(../flags/4x3/al.svg)
    }

    .flag-icon-al.flag-icon-squared {
      background-image: url(../flags/1x1/al.svg)
    }

    .flag-icon-am {
      background-image: url(../flags/4x3/am.svg)
    }

    .flag-icon-am.flag-icon-squared {
      background-image: url(../flags/1x1/am.svg)
    }

    .flag-icon-ao {
      background-image: url(../flags/4x3/ao.svg)
    }

    .flag-icon-ao.flag-icon-squared {
      background-image: url(../flags/1x1/ao.svg)
    }

    .flag-icon-aq {
      background-image: url(../flags/4x3/aq.svg)
    }

    .flag-icon-aq.flag-icon-squared {
      background-image: url(../flags/1x1/aq.svg)
    }

    .flag-icon-ar {
      background-image: url(../flags/4x3/ar.svg)
    }

    .flag-icon-ar.flag-icon-squared {
      background-image: url(../flags/1x1/ar.svg)
    }

    .flag-icon-as {
      background-image: url(../flags/4x3/as.svg)
    }

    .flag-icon-as.flag-icon-squared {
      background-image: url(../flags/1x1/as.svg)
    }

    .flag-icon-at {
      background-image: url(../flags/4x3/at.svg)
    }

    .flag-icon-at.flag-icon-squared {
      background-image: url(../flags/1x1/at.svg)
    }

    .flag-icon-au {
      background-image: url(../flags/4x3/au.svg)
    }

    .flag-icon-au.flag-icon-squared {
      background-image: url(../flags/1x1/au.svg)
    }

    .flag-icon-aw {
      background-image: url(../flags/4x3/aw.svg)
    }

    .flag-icon-aw.flag-icon-squared {
      background-image: url(../flags/1x1/aw.svg)
    }

    .flag-icon-ax {
      background-image: url(../flags/4x3/ax.svg)
    }

    .flag-icon-ax.flag-icon-squared {
      background-image: url(../flags/1x1/ax.svg)
    }

    .flag-icon-az {
      background-image: url(../flags/4x3/az.svg)
    }

    .flag-icon-az.flag-icon-squared {
      background-image: url(../flags/1x1/az.svg)
    }

    .flag-icon-ba {
      background-image: url(../flags/4x3/ba.svg)
    }

    .flag-icon-ba.flag-icon-squared {
      background-image: url(../flags/1x1/ba.svg)
    }

    .flag-icon-bb {
      background-image: url(../flags/4x3/bb.svg)
    }

    .flag-icon-bb.flag-icon-squared {
      background-image: url(../flags/1x1/bb.svg)
    }

    .flag-icon-bd {
      background-image: url(../flags/4x3/bd.svg)
    }

    .flag-icon-bd.flag-icon-squared {
      background-image: url(../flags/1x1/bd.svg)
    }

    .flag-icon-be {
      background-image: url(../flags/4x3/be.svg)
    }

    .flag-icon-be.flag-icon-squared {
      background-image: url(../flags/1x1/be.svg)
    }

    .flag-icon-bf {
      background-image: url(../flags/4x3/bf.svg)
    }

    .flag-icon-bf.flag-icon-squared {
      background-image: url(../flags/1x1/bf.svg)
    }

    .flag-icon-bg {
      background-image: url(../flags/4x3/bg.svg)
    }

    .flag-icon-bg.flag-icon-squared {
      background-image: url(../flags/1x1/bg.svg)
    }

    .flag-icon-bh {
      background-image: url(../flags/4x3/bh.svg)
    }

    .flag-icon-bh.flag-icon-squared {
      background-image: url(../flags/1x1/bh.svg)
    }

    .flag-icon-bi {
      background-image: url(../flags/4x3/bi.svg)
    }

    .flag-icon-bi.flag-icon-squared {
      background-image: url(../flags/1x1/bi.svg)
    }

    .flag-icon-bj {
      background-image: url(../flags/4x3/bj.svg)
    }

    .flag-icon-bj.flag-icon-squared {
      background-image: url(../flags/1x1/bj.svg)
    }

    .flag-icon-bl {
      background-image: url(../flags/4x3/bl.svg)
    }

    .flag-icon-bl.flag-icon-squared {
      background-image: url(../flags/1x1/bl.svg)
    }

    .flag-icon-bm {
      background-image: url(../flags/4x3/bm.svg)
    }

    .flag-icon-bm.flag-icon-squared {
      background-image: url(../flags/1x1/bm.svg)
    }

    .flag-icon-bn {
      background-image: url(../flags/4x3/bn.svg)
    }

    .flag-icon-bn.flag-icon-squared {
      background-image: url(../flags/1x1/bn.svg)
    }

    .flag-icon-bo {
      background-image: url(../flags/4x3/bo.svg)
    }

    .flag-icon-bo.flag-icon-squared {
      background-image: url(../flags/1x1/bo.svg)
    }

    .flag-icon-bq {
      background-image: url(../flags/4x3/bq.svg)
    }

    .flag-icon-bq.flag-icon-squared {
      background-image: url(../flags/1x1/bq.svg)
    }

    .flag-icon-br {
      background-image: url(../flags/4x3/br.svg)
    }

    .flag-icon-br.flag-icon-squared {
      background-image: url(../flags/1x1/br.svg)
    }

    .flag-icon-bs {
      background-image: url(../flags/4x3/bs.svg)
    }

    .flag-icon-bs.flag-icon-squared {
      background-image: url(../flags/1x1/bs.svg)
    }

    .flag-icon-bt {
      background-image: url(../flags/4x3/bt.svg)
    }

    .flag-icon-bt.flag-icon-squared {
      background-image: url(../flags/1x1/bt.svg)
    }

    .flag-icon-bv {
      background-image: url(../flags/4x3/bv.svg)
    }

    .flag-icon-bv.flag-icon-squared {
      background-image: url(../flags/1x1/bv.svg)
    }

    .flag-icon-bw {
      background-image: url(../flags/4x3/bw.svg)
    }

    .flag-icon-bw.flag-icon-squared {
      background-image: url(../flags/1x1/bw.svg)
    }

    .flag-icon-by {
      background-image: url(../flags/4x3/by.svg)
    }

    .flag-icon-by.flag-icon-squared {
      background-image: url(../flags/1x1/by.svg)
    }

    .flag-icon-bz {
      background-image: url(../flags/4x3/bz.svg)
    }

    .flag-icon-bz.flag-icon-squared {
      background-image: url(../flags/1x1/bz.svg)
    }

    .flag-icon-ca {
      background-image: url(../flags/4x3/ca.svg)
    }

    .flag-icon-ca.flag-icon-squared {
      background-image: url(../flags/1x1/ca.svg)
    }

    .flag-icon-cc {
      background-image: url(../flags/4x3/cc.svg)
    }

    .flag-icon-cc.flag-icon-squared {
      background-image: url(../flags/1x1/cc.svg)
    }

    .flag-icon-cd {
      background-image: url(../flags/4x3/cd.svg)
    }

    .flag-icon-cd.flag-icon-squared {
      background-image: url(../flags/1x1/cd.svg)
    }

    .flag-icon-cf {
      background-image: url(../flags/4x3/cf.svg)
    }

    .flag-icon-cf.flag-icon-squared {
      background-image: url(../flags/1x1/cf.svg)
    }

    .flag-icon-cg {
      background-image: url(../flags/4x3/cg.svg)
    }

    .flag-icon-cg.flag-icon-squared {
      background-image: url(../flags/1x1/cg.svg)
    }

    .flag-icon-ch {
      background-image: url(../flags/4x3/ch.svg)
    }

    .flag-icon-ch.flag-icon-squared {
      background-image: url(../flags/1x1/ch.svg)
    }

    .flag-icon-ci {
      background-image: url(../flags/4x3/ci.svg)
    }

    .flag-icon-ci.flag-icon-squared {
      background-image: url(../flags/1x1/ci.svg)
    }

    .flag-icon-ck {
      background-image: url(../flags/4x3/ck.svg)
    }

    .flag-icon-ck.flag-icon-squared {
      background-image: url(../flags/1x1/ck.svg)
    }

    .flag-icon-cl {
      background-image: url(../flags/4x3/cl.svg)
    }

    .flag-icon-cl.flag-icon-squared {
      background-image: url(../flags/1x1/cl.svg)
    }

    .flag-icon-cm {
      background-image: url(../flags/4x3/cm.svg)
    }

    .flag-icon-cm.flag-icon-squared {
      background-image: url(../flags/1x1/cm.svg)
    }

    .flag-icon-cn {
      background-image: url(../flags/4x3/cn.svg)
    }

    .flag-icon-cn.flag-icon-squared {
      background-image: url(../flags/1x1/cn.svg)
    }

    .flag-icon-co {
      background-image: url(../flags/4x3/co.svg)
    }

    .flag-icon-co.flag-icon-squared {
      background-image: url(../flags/1x1/co.svg)
    }

    .flag-icon-cr {
      background-image: url(../flags/4x3/cr.svg)
    }

    .flag-icon-cr.flag-icon-squared {
      background-image: url(../flags/1x1/cr.svg)
    }

    .flag-icon-cu {
      background-image: url(../flags/4x3/cu.svg)
    }

    .flag-icon-cu.flag-icon-squared {
      background-image: url(../flags/1x1/cu.svg)
    }

    .flag-icon-cv {
      background-image: url(../flags/4x3/cv.svg)
    }

    .flag-icon-cv.flag-icon-squared {
      background-image: url(../flags/1x1/cv.svg)
    }

    .flag-icon-cw {
      background-image: url(../flags/4x3/cw.svg)
    }

    .flag-icon-cw.flag-icon-squared {
      background-image: url(../flags/1x1/cw.svg)
    }

    .flag-icon-cx {
      background-image: url(../flags/4x3/cx.svg)
    }

    .flag-icon-cx.flag-icon-squared {
      background-image: url(../flags/1x1/cx.svg)
    }

    .flag-icon-cy {
      background-image: url(../flags/4x3/cy.svg)
    }

    .flag-icon-cy.flag-icon-squared {
      background-image: url(../flags/1x1/cy.svg)
    }

    .flag-icon-cz {
      background-image: url(../flags/4x3/cz.svg)
    }

    .flag-icon-cz.flag-icon-squared {
      background-image: url(../flags/1x1/cz.svg)
    }

    .flag-icon-de {
      background-image: url(../flags/4x3/de.svg)
    }

    .flag-icon-de.flag-icon-squared {
      background-image: url(../flags/1x1/de.svg)
    }

    .flag-icon-dj {
      background-image: url(../flags/4x3/dj.svg)
    }

    .flag-icon-dj.flag-icon-squared {
      background-image: url(../flags/1x1/dj.svg)
    }

    .flag-icon-dk {
      background-image: url(../flags/4x3/dk.svg)
    }

    .flag-icon-dk.flag-icon-squared {
      background-image: url(../flags/1x1/dk.svg)
    }

    .flag-icon-dm {
      background-image: url(../flags/4x3/dm.svg)
    }

    .flag-icon-dm.flag-icon-squared {
      background-image: url(../flags/1x1/dm.svg)
    }

    .flag-icon-do {
      background-image: url(../flags/4x3/do.svg)
    }

    .flag-icon-do.flag-icon-squared {
      background-image: url(../flags/1x1/do.svg)
    }

    .flag-icon-dz {
      background-image: url(../flags/4x3/dz.svg)
    }

    .flag-icon-dz.flag-icon-squared {
      background-image: url(../flags/1x1/dz.svg)
    }

    .flag-icon-ec {
      background-image: url(../flags/4x3/ec.svg)
    }

    .flag-icon-ec.flag-icon-squared {
      background-image: url(../flags/1x1/ec.svg)
    }

    .flag-icon-ee {
      background-image: url(../flags/4x3/ee.svg)
    }

    .flag-icon-ee.flag-icon-squared {
      background-image: url(../flags/1x1/ee.svg)
    }

    .flag-icon-eg {
      background-image: url(../flags/4x3/eg.svg)
    }

    .flag-icon-eg.flag-icon-squared {
      background-image: url(../flags/1x1/eg.svg)
    }

    .flag-icon-eh {
      background-image: url(../flags/4x3/eh.svg)
    }

    .flag-icon-eh.flag-icon-squared {
      background-image: url(../flags/1x1/eh.svg)
    }

    .flag-icon-er {
      background-image: url(../flags/4x3/er.svg)
    }

    .flag-icon-er.flag-icon-squared {
      background-image: url(../flags/1x1/er.svg)
    }

    .flag-icon-es {
      background-image: url(../flags/4x3/es.svg)
    }

    .flag-icon-es.flag-icon-squared {
      background-image: url(../flags/1x1/es.svg)
    }

    .flag-icon-et {
      background-image: url(../flags/4x3/et.svg)
    }

    .flag-icon-et.flag-icon-squared {
      background-image: url(../flags/1x1/et.svg)
    }

    .flag-icon-fi {
      background-image: url(../flags/4x3/fi.svg)
    }

    .flag-icon-fi.flag-icon-squared {
      background-image: url(../flags/1x1/fi.svg)
    }

    .flag-icon-fj {
      background-image: url(../flags/4x3/fj.svg)
    }

    .flag-icon-fj.flag-icon-squared {
      background-image: url(../flags/1x1/fj.svg)
    }

    .flag-icon-fk {
      background-image: url(../flags/4x3/fk.svg)
    }

    .flag-icon-fk.flag-icon-squared {
      background-image: url(../flags/1x1/fk.svg)
    }

    .flag-icon-fm {
      background-image: url(../flags/4x3/fm.svg)
    }

    .flag-icon-fm.flag-icon-squared {
      background-image: url(../flags/1x1/fm.svg)
    }

    .flag-icon-fo {
      background-image: url(../flags/4x3/fo.svg)
    }

    .flag-icon-fo.flag-icon-squared {
      background-image: url(../flags/1x1/fo.svg)
    }

    .flag-icon-fr {
      background-image: url(../flags/4x3/fr.svg)
    }

    .flag-icon-fr.flag-icon-squared {
      background-image: url(../flags/1x1/fr.svg)
    }

    .flag-icon-ga {
      background-image: url(../flags/4x3/ga.svg)
    }

    .flag-icon-ga.flag-icon-squared {
      background-image: url(../flags/1x1/ga.svg)
    }

    .flag-icon-gb {
      background-image: url(../flags/4x3/gb.svg)
    }

    .flag-icon-gb.flag-icon-squared {
      background-image: url(../flags/1x1/gb.svg)
    }

    .flag-icon-gd {
      background-image: url(../flags/4x3/gd.svg)
    }

    .flag-icon-gd.flag-icon-squared {
      background-image: url(../flags/1x1/gd.svg)
    }

    .flag-icon-ge {
      background-image: url(../flags/4x3/ge.svg)
    }

    .flag-icon-ge.flag-icon-squared {
      background-image: url(../flags/1x1/ge.svg)
    }

    .flag-icon-gf {
      background-image: url(../flags/4x3/gf.svg)
    }

    .flag-icon-gf.flag-icon-squared {
      background-image: url(../flags/1x1/gf.svg)
    }

    .flag-icon-gg {
      background-image: url(../flags/4x3/gg.svg)
    }

    .flag-icon-gg.flag-icon-squared {
      background-image: url(../flags/1x1/gg.svg)
    }

    .flag-icon-gh {
      background-image: url(../flags/4x3/gh.svg)
    }

    .flag-icon-gh.flag-icon-squared {
      background-image: url(../flags/1x1/gh.svg)
    }

    .flag-icon-gi {
      background-image: url(../flags/4x3/gi.svg)
    }

    .flag-icon-gi.flag-icon-squared {
      background-image: url(../flags/1x1/gi.svg)
    }

    .flag-icon-gl {
      background-image: url(../flags/4x3/gl.svg)
    }

    .flag-icon-gl.flag-icon-squared {
      background-image: url(../flags/1x1/gl.svg)
    }

    .flag-icon-gm {
      background-image: url(../flags/4x3/gm.svg)
    }

    .flag-icon-gm.flag-icon-squared {
      background-image: url(../flags/1x1/gm.svg)
    }

    .flag-icon-gn {
      background-image: url(../flags/4x3/gn.svg)
    }

    .flag-icon-gn.flag-icon-squared {
      background-image: url(../flags/1x1/gn.svg)
    }

    .flag-icon-gp {
      background-image: url(../flags/4x3/gp.svg)
    }

    .flag-icon-gp.flag-icon-squared {
      background-image: url(../flags/1x1/gp.svg)
    }

    .flag-icon-gq {
      background-image: url(../flags/4x3/gq.svg)
    }

    .flag-icon-gq.flag-icon-squared {
      background-image: url(../flags/1x1/gq.svg)
    }

    .flag-icon-gr {
      background-image: url(../flags/4x3/gr.svg)
    }

    .flag-icon-gr.flag-icon-squared {
      background-image: url(../flags/1x1/gr.svg)
    }

    .flag-icon-gs {
      background-image: url(../flags/4x3/gs.svg)
    }

    .flag-icon-gs.flag-icon-squared {
      background-image: url(../flags/1x1/gs.svg)
    }

    .flag-icon-gt {
      background-image: url(../flags/4x3/gt.svg)
    }

    .flag-icon-gt.flag-icon-squared {
      background-image: url(../flags/1x1/gt.svg)
    }

    .flag-icon-gu {
      background-image: url(../flags/4x3/gu.svg)
    }

    .flag-icon-gu.flag-icon-squared {
      background-image: url(../flags/1x1/gu.svg)
    }

    .flag-icon-gw {
      background-image: url(../flags/4x3/gw.svg)
    }

    .flag-icon-gw.flag-icon-squared {
      background-image: url(../flags/1x1/gw.svg)
    }

    .flag-icon-gy {
      background-image: url(../flags/4x3/gy.svg)
    }

    .flag-icon-gy.flag-icon-squared {
      background-image: url(../flags/1x1/gy.svg)
    }

    .flag-icon-hk {
      background-image: url(../flags/4x3/hk.svg)
    }

    .flag-icon-hk.flag-icon-squared {
      background-image: url(../flags/1x1/hk.svg)
    }

    .flag-icon-hm {
      background-image: url(../flags/4x3/hm.svg)
    }

    .flag-icon-hm.flag-icon-squared {
      background-image: url(../flags/1x1/hm.svg)
    }

    .flag-icon-hn {
      background-image: url(../flags/4x3/hn.svg)
    }

    .flag-icon-hn.flag-icon-squared {
      background-image: url(../flags/1x1/hn.svg)
    }

    .flag-icon-hr {
      background-image: url(../flags/4x3/hr.svg)
    }

    .flag-icon-hr.flag-icon-squared {
      background-image: url(../flags/1x1/hr.svg)
    }

    .flag-icon-ht {
      background-image: url(../flags/4x3/ht.svg)
    }

    .flag-icon-ht.flag-icon-squared {
      background-image: url(../flags/1x1/ht.svg)
    }

    .flag-icon-hu {
      background-image: url(../flags/4x3/hu.svg)
    }

    .flag-icon-hu.flag-icon-squared {
      background-image: url(../flags/1x1/hu.svg)
    }

    .flag-icon-id {
      background-image: url(../flags/4x3/id.svg)
    }

    .flag-icon-id.flag-icon-squared {
      background-image: url(../flags/1x1/id.svg)
    }

    .flag-icon-ie {
      background-image: url(../flags/4x3/ie.svg)
    }

    .flag-icon-ie.flag-icon-squared {
      background-image: url(../flags/1x1/ie.svg)
    }

    .flag-icon-il {
      background-image: url(../flags/4x3/il.svg)
    }

    .flag-icon-il.flag-icon-squared {
      background-image: url(../flags/1x1/il.svg)
    }

    .flag-icon-im {
      background-image: url(../flags/4x3/im.svg)
    }

    .flag-icon-im.flag-icon-squared {
      background-image: url(../flags/1x1/im.svg)
    }

    .flag-icon-in {
      background-image: url(../flags/4x3/in.svg)
    }

    .flag-icon-in.flag-icon-squared {
      background-image: url(../flags/1x1/in.svg)
    }

    .flag-icon-io {
      background-image: url(../flags/4x3/io.svg)
    }

    .flag-icon-io.flag-icon-squared {
      background-image: url(../flags/1x1/io.svg)
    }

    .flag-icon-iq {
      background-image: url(../flags/4x3/iq.svg)
    }

    .flag-icon-iq.flag-icon-squared {
      background-image: url(../flags/1x1/iq.svg)
    }

    .flag-icon-ir {
      background-image: url(../flags/4x3/ir.svg)
    }

    .flag-icon-ir.flag-icon-squared {
      background-image: url(../flags/1x1/ir.svg)
    }

    .flag-icon-is {
      background-image: url(../flags/4x3/is.svg)
    }

    .flag-icon-is.flag-icon-squared {
      background-image: url(../flags/1x1/is.svg)
    }

    .flag-icon-it {
      background-image: url(../flags/4x3/it.svg)
    }

    .flag-icon-it.flag-icon-squared {
      background-image: url(../flags/1x1/it.svg)
    }

    .flag-icon-je {
      background-image: url(../flags/4x3/je.svg)
    }

    .flag-icon-je.flag-icon-squared {
      background-image: url(../flags/1x1/je.svg)
    }

    .flag-icon-jm {
      background-image: url(../flags/4x3/jm.svg)
    }

    .flag-icon-jm.flag-icon-squared {
      background-image: url(../flags/1x1/jm.svg)
    }

    .flag-icon-jo {
      background-image: url(../flags/4x3/jo.svg)
    }

    .flag-icon-jo.flag-icon-squared {
      background-image: url(../flags/1x1/jo.svg)
    }

    .flag-icon-jp {
      background-image: url(../flags/4x3/jp.svg)
    }

    .flag-icon-jp.flag-icon-squared {
      background-image: url(../flags/1x1/jp.svg)
    }

    .flag-icon-ke {
      background-image: url(../flags/4x3/ke.svg)
    }

    .flag-icon-ke.flag-icon-squared {
      background-image: url(../flags/1x1/ke.svg)
    }

    .flag-icon-kg {
      background-image: url(../flags/4x3/kg.svg)
    }

    .flag-icon-kg.flag-icon-squared {
      background-image: url(../flags/1x1/kg.svg)
    }

    .flag-icon-kh {
      background-image: url(../flags/4x3/kh.svg)
    }

    .flag-icon-kh.flag-icon-squared {
      background-image: url(../flags/1x1/kh.svg)
    }

    .flag-icon-ki {
      background-image: url(../flags/4x3/ki.svg)
    }

    .flag-icon-ki.flag-icon-squared {
      background-image: url(../flags/1x1/ki.svg)
    }

    .flag-icon-km {
      background-image: url(../flags/4x3/km.svg)
    }

    .flag-icon-km.flag-icon-squared {
      background-image: url(../flags/1x1/km.svg)
    }

    .flag-icon-kn {
      background-image: url(../flags/4x3/kn.svg)
    }

    .flag-icon-kn.flag-icon-squared {
      background-image: url(../flags/1x1/kn.svg)
    }

    .flag-icon-kp {
      background-image: url(../flags/4x3/kp.svg)
    }

    .flag-icon-kp.flag-icon-squared {
      background-image: url(../flags/1x1/kp.svg)
    }

    .flag-icon-kr {
      background-image: url(../flags/4x3/kr.svg)
    }

    .flag-icon-kr.flag-icon-squared {
      background-image: url(../flags/1x1/kr.svg)
    }

    .flag-icon-kw {
      background-image: url(../flags/4x3/kw.svg)
    }

    .flag-icon-kw.flag-icon-squared {
      background-image: url(../flags/1x1/kw.svg)
    }

    .flag-icon-ky {
      background-image: url(../flags/4x3/ky.svg)
    }

    .flag-icon-ky.flag-icon-squared {
      background-image: url(../flags/1x1/ky.svg)
    }

    .flag-icon-kz {
      background-image: url(../flags/4x3/kz.svg)
    }

    .flag-icon-kz.flag-icon-squared {
      background-image: url(../flags/1x1/kz.svg)
    }

    .flag-icon-la {
      background-image: url(../flags/4x3/la.svg)
    }

    .flag-icon-la.flag-icon-squared {
      background-image: url(../flags/1x1/la.svg)
    }

    .flag-icon-lb {
      background-image: url(../flags/4x3/lb.svg)
    }

    .flag-icon-lb.flag-icon-squared {
      background-image: url(../flags/1x1/lb.svg)
    }

    .flag-icon-lc {
      background-image: url(../flags/4x3/lc.svg)
    }

    .flag-icon-lc.flag-icon-squared {
      background-image: url(../flags/1x1/lc.svg)
    }

    .flag-icon-li {
      background-image: url(../flags/4x3/li.svg)
    }

    .flag-icon-li.flag-icon-squared {
      background-image: url(../flags/1x1/li.svg)
    }

    .flag-icon-lk {
      background-image: url(../flags/4x3/lk.svg)
    }

    .flag-icon-lk.flag-icon-squared {
      background-image: url(../flags/1x1/lk.svg)
    }

    .flag-icon-lr {
      background-image: url(../flags/4x3/lr.svg)
    }

    .flag-icon-lr.flag-icon-squared {
      background-image: url(../flags/1x1/lr.svg)
    }

    .flag-icon-ls {
      background-image: url(../flags/4x3/ls.svg)
    }

    .flag-icon-ls.flag-icon-squared {
      background-image: url(../flags/1x1/ls.svg)
    }

    .flag-icon-lt {
      background-image: url(../flags/4x3/lt.svg)
    }

    .flag-icon-lt.flag-icon-squared {
      background-image: url(../flags/1x1/lt.svg)
    }

    .flag-icon-lu {
      background-image: url(../flags/4x3/lu.svg)
    }

    .flag-icon-lu.flag-icon-squared {
      background-image: url(../flags/1x1/lu.svg)
    }

    .flag-icon-lv {
      background-image: url(../flags/4x3/lv.svg)
    }

    .flag-icon-lv.flag-icon-squared {
      background-image: url(../flags/1x1/lv.svg)
    }

    .flag-icon-ly {
      background-image: url(../flags/4x3/ly.svg)
    }

    .flag-icon-ly.flag-icon-squared {
      background-image: url(../flags/1x1/ly.svg)
    }

    .flag-icon-ma {
      background-image: url(../flags/4x3/ma.svg)
    }

    .flag-icon-ma.flag-icon-squared {
      background-image: url(../flags/1x1/ma.svg)
    }

    .flag-icon-mc {
      background-image: url(../flags/4x3/mc.svg)
    }

    .flag-icon-mc.flag-icon-squared {
      background-image: url(../flags/1x1/mc.svg)
    }

    .flag-icon-md {
      background-image: url(../flags/4x3/md.svg)
    }

    .flag-icon-md.flag-icon-squared {
      background-image: url(../flags/1x1/md.svg)
    }

    .flag-icon-me {
      background-image: url(../flags/4x3/me.svg)
    }

    .flag-icon-me.flag-icon-squared {
      background-image: url(../flags/1x1/me.svg)
    }

    .flag-icon-mf {
      background-image: url(../flags/4x3/mf.svg)
    }

    .flag-icon-mf.flag-icon-squared {
      background-image: url(../flags/1x1/mf.svg)
    }

    .flag-icon-mg {
      background-image: url(../flags/4x3/mg.svg)
    }

    .flag-icon-mg.flag-icon-squared {
      background-image: url(../flags/1x1/mg.svg)
    }

    .flag-icon-mh {
      background-image: url(../flags/4x3/mh.svg)
    }

    .flag-icon-mh.flag-icon-squared {
      background-image: url(../flags/1x1/mh.svg)
    }

    .flag-icon-mk {
      background-image: url(../flags/4x3/mk.svg)
    }

    .flag-icon-mk.flag-icon-squared {
      background-image: url(../flags/1x1/mk.svg)
    }

    .flag-icon-ml {
      background-image: url(../flags/4x3/ml.svg)
    }

    .flag-icon-ml.flag-icon-squared {
      background-image: url(../flags/1x1/ml.svg)
    }

    .flag-icon-mm {
      background-image: url(../flags/4x3/mm.svg)
    }

    .flag-icon-mm.flag-icon-squared {
      background-image: url(../flags/1x1/mm.svg)
    }

    .flag-icon-mn {
      background-image: url(../flags/4x3/mn.svg)
    }

    .flag-icon-mn.flag-icon-squared {
      background-image: url(../flags/1x1/mn.svg)
    }

    .flag-icon-mo {
      background-image: url(../flags/4x3/mo.svg)
    }

    .flag-icon-mo.flag-icon-squared {
      background-image: url(../flags/1x1/mo.svg)
    }

    .flag-icon-mp {
      background-image: url(../flags/4x3/mp.svg)
    }

    .flag-icon-mp.flag-icon-squared {
      background-image: url(../flags/1x1/mp.svg)
    }

    .flag-icon-mq {
      background-image: url(../flags/4x3/mq.svg)
    }

    .flag-icon-mq.flag-icon-squared {
      background-image: url(../flags/1x1/mq.svg)
    }

    .flag-icon-mr {
      background-image: url(../flags/4x3/mr.svg)
    }

    .flag-icon-mr.flag-icon-squared {
      background-image: url(../flags/1x1/mr.svg)
    }

    .flag-icon-ms {
      background-image: url(../flags/4x3/ms.svg)
    }

    .flag-icon-ms.flag-icon-squared {
      background-image: url(../flags/1x1/ms.svg)
    }

    .flag-icon-mt {
      background-image: url(../flags/4x3/mt.svg)
    }

    .flag-icon-mt.flag-icon-squared {
      background-image: url(../flags/1x1/mt.svg)
    }

    .flag-icon-mu {
      background-image: url(../flags/4x3/mu.svg)
    }

    .flag-icon-mu.flag-icon-squared {
      background-image: url(../flags/1x1/mu.svg)
    }

    .flag-icon-mv {
      background-image: url(../flags/4x3/mv.svg)
    }

    .flag-icon-mv.flag-icon-squared {
      background-image: url(../flags/1x1/mv.svg)
    }

    .flag-icon-mw {
      background-image: url(../flags/4x3/mw.svg)
    }

    .flag-icon-mw.flag-icon-squared {
      background-image: url(../flags/1x1/mw.svg)
    }

    .flag-icon-mx {
      background-image: url(../flags/4x3/mx.svg)
    }

    .flag-icon-mx.flag-icon-squared {
      background-image: url(../flags/1x1/mx.svg)
    }

    .flag-icon-my {
      background-image: url(../flags/4x3/my.svg)
    }

    .flag-icon-my.flag-icon-squared {
      background-image: url(../flags/1x1/my.svg)
    }

    .flag-icon-mz {
      background-image: url(../flags/4x3/mz.svg)
    }

    .flag-icon-mz.flag-icon-squared {
      background-image: url(../flags/1x1/mz.svg)
    }

    .flag-icon-na {
      background-image: url(../flags/4x3/na.svg)
    }

    .flag-icon-na.flag-icon-squared {
      background-image: url(../flags/1x1/na.svg)
    }

    .flag-icon-nc {
      background-image: url(../flags/4x3/nc.svg)
    }

    .flag-icon-nc.flag-icon-squared {
      background-image: url(../flags/1x1/nc.svg)
    }

    .flag-icon-ne {
      background-image: url(../flags/4x3/ne.svg)
    }

    .flag-icon-ne.flag-icon-squared {
      background-image: url(../flags/1x1/ne.svg)
    }

    .flag-icon-nf {
      background-image: url(../flags/4x3/nf.svg)
    }

    .flag-icon-nf.flag-icon-squared {
      background-image: url(../flags/1x1/nf.svg)
    }

    .flag-icon-ng {
      background-image: url(../flags/4x3/ng.svg)
    }

    .flag-icon-ng.flag-icon-squared {
      background-image: url(../flags/1x1/ng.svg)
    }

    .flag-icon-ni {
      background-image: url(../flags/4x3/ni.svg)
    }

    .flag-icon-ni.flag-icon-squared {
      background-image: url(../flags/1x1/ni.svg)
    }

    .flag-icon-nl {
      background-image: url(../flags/4x3/nl.svg)
    }

    .flag-icon-nl.flag-icon-squared {
      background-image: url(../flags/1x1/nl.svg)
    }

    .flag-icon-no {
      background-image: url(../flags/4x3/no.svg)
    }

    .flag-icon-no.flag-icon-squared {
      background-image: url(../flags/1x1/no.svg)
    }

    .flag-icon-np {
      background-image: url(../flags/4x3/np.svg)
    }

    .flag-icon-np.flag-icon-squared {
      background-image: url(../flags/1x1/np.svg)
    }

    .flag-icon-nr {
      background-image: url(../flags/4x3/nr.svg)
    }

    .flag-icon-nr.flag-icon-squared {
      background-image: url(../flags/1x1/nr.svg)
    }

    .flag-icon-nu {
      background-image: url(../flags/4x3/nu.svg)
    }

    .flag-icon-nu.flag-icon-squared {
      background-image: url(../flags/1x1/nu.svg)
    }

    .flag-icon-nz {
      background-image: url(../flags/4x3/nz.svg)
    }

    .flag-icon-nz.flag-icon-squared {
      background-image: url(../flags/1x1/nz.svg)
    }

    .flag-icon-om {
      background-image: url(../flags/4x3/om.svg)
    }

    .flag-icon-om.flag-icon-squared {
      background-image: url(../flags/1x1/om.svg)
    }

    .flag-icon-pa {
      background-image: url(../flags/4x3/pa.svg)
    }

    .flag-icon-pa.flag-icon-squared {
      background-image: url(../flags/1x1/pa.svg)
    }

    .flag-icon-pe {
      background-image: url(../flags/4x3/pe.svg)
    }

    .flag-icon-pe.flag-icon-squared {
      background-image: url(../flags/1x1/pe.svg)
    }

    .flag-icon-pf {
      background-image: url(../flags/4x3/pf.svg)
    }

    .flag-icon-pf.flag-icon-squared {
      background-image: url(../flags/1x1/pf.svg)
    }

    .flag-icon-pg {
      background-image: url(../flags/4x3/pg.svg)
    }

    .flag-icon-pg.flag-icon-squared {
      background-image: url(../flags/1x1/pg.svg)
    }

    .flag-icon-ph {
      background-image: url(../flags/4x3/ph.svg)
    }

    .flag-icon-ph.flag-icon-squared {
      background-image: url(../flags/1x1/ph.svg)
    }

    .flag-icon-pk {
      background-image: url(../flags/4x3/pk.svg)
    }

    .flag-icon-pk.flag-icon-squared {
      background-image: url(../flags/1x1/pk.svg)
    }

    .flag-icon-pl {
      background-image: url(../flags/4x3/pl.svg)
    }

    .flag-icon-pl.flag-icon-squared {
      background-image: url(../flags/1x1/pl.svg)
    }

    .flag-icon-pm {
      background-image: url(../flags/4x3/pm.svg)
    }

    .flag-icon-pm.flag-icon-squared {
      background-image: url(../flags/1x1/pm.svg)
    }

    .flag-icon-pn {
      background-image: url(../flags/4x3/pn.svg)
    }

    .flag-icon-pn.flag-icon-squared {
      background-image: url(../flags/1x1/pn.svg)
    }

    .flag-icon-pr {
      background-image: url(../flags/4x3/pr.svg)
    }

    .flag-icon-pr.flag-icon-squared {
      background-image: url(../flags/1x1/pr.svg)
    }

    .flag-icon-ps {
      background-image: url(../flags/4x3/ps.svg)
    }

    .flag-icon-ps.flag-icon-squared {
      background-image: url(../flags/1x1/ps.svg)
    }

    .flag-icon-pt {
      background-image: url(../flags/4x3/pt.svg)
    }

    .flag-icon-pt.flag-icon-squared {
      background-image: url(../flags/1x1/pt.svg)
    }

    .flag-icon-pw {
      background-image: url(../flags/4x3/pw.svg)
    }

    .flag-icon-pw.flag-icon-squared {
      background-image: url(../flags/1x1/pw.svg)
    }

    .flag-icon-py {
      background-image: url(../flags/4x3/py.svg)
    }

    .flag-icon-py.flag-icon-squared {
      background-image: url(../flags/1x1/py.svg)
    }

    .flag-icon-qa {
      background-image: url(../flags/4x3/qa.svg)
    }

    .flag-icon-qa.flag-icon-squared {
      background-image: url(../flags/1x1/qa.svg)
    }

    .flag-icon-re {
      background-image: url(../flags/4x3/re.svg)
    }

    .flag-icon-re.flag-icon-squared {
      background-image: url(../flags/1x1/re.svg)
    }

    .flag-icon-ro {
      background-image: url(../flags/4x3/ro.svg)
    }

    .flag-icon-ro.flag-icon-squared {
      background-image: url(../flags/1x1/ro.svg)
    }

    .flag-icon-rs {
      background-image: url(../flags/4x3/rs.svg)
    }

    .flag-icon-rs.flag-icon-squared {
      background-image: url(../flags/1x1/rs.svg)
    }

    .flag-icon-ru {
      background-image: url(../flags/4x3/ru.svg)
    }

    .flag-icon-ru.flag-icon-squared {
      background-image: url(../flags/1x1/ru.svg)
    }

    .flag-icon-rw {
      background-image: url(../flags/4x3/rw.svg)
    }

    .flag-icon-rw.flag-icon-squared {
      background-image: url(../flags/1x1/rw.svg)
    }

    .flag-icon-sa {
      background-image: url(../flags/4x3/sa.svg)
    }

    .flag-icon-sa.flag-icon-squared {
      background-image: url(../flags/1x1/sa.svg)
    }

    .flag-icon-sb {
      background-image: url(../flags/4x3/sb.svg)
    }

    .flag-icon-sb.flag-icon-squared {
      background-image: url(../flags/1x1/sb.svg)
    }

    .flag-icon-sc {
      background-image: url(../flags/4x3/sc.svg)
    }

    .flag-icon-sc.flag-icon-squared {
      background-image: url(../flags/1x1/sc.svg)
    }

    .flag-icon-sd {
      background-image: url(../flags/4x3/sd.svg)
    }

    .flag-icon-sd.flag-icon-squared {
      background-image: url(../flags/1x1/sd.svg)
    }

    .flag-icon-se {
      background-image: url(../flags/4x3/se.svg)
    }

    .flag-icon-se.flag-icon-squared {
      background-image: url(../flags/1x1/se.svg)
    }

    .flag-icon-sg {
      background-image: url(../flags/4x3/sg.svg)
    }

    .flag-icon-sg.flag-icon-squared {
      background-image: url(../flags/1x1/sg.svg)
    }

    .flag-icon-sh {
      background-image: url(../flags/4x3/sh.svg)
    }

    .flag-icon-sh.flag-icon-squared {
      background-image: url(../flags/1x1/sh.svg)
    }

    .flag-icon-si {
      background-image: url(../flags/4x3/si.svg)
    }

    .flag-icon-si.flag-icon-squared {
      background-image: url(../flags/1x1/si.svg)
    }

    .flag-icon-sj {
      background-image: url(../flags/4x3/sj.svg)
    }

    .flag-icon-sj.flag-icon-squared {
      background-image: url(../flags/1x1/sj.svg)
    }

    .flag-icon-sk {
      background-image: url(../flags/4x3/sk.svg)
    }

    .flag-icon-sk.flag-icon-squared {
      background-image: url(../flags/1x1/sk.svg)
    }

    .flag-icon-sl {
      background-image: url(../flags/4x3/sl.svg)
    }

    .flag-icon-sl.flag-icon-squared {
      background-image: url(../flags/1x1/sl.svg)
    }

    .flag-icon-sm {
      background-image: url(../flags/4x3/sm.svg)
    }

    .flag-icon-sm.flag-icon-squared {
      background-image: url(../flags/1x1/sm.svg)
    }

    .flag-icon-sn {
      background-image: url(../flags/4x3/sn.svg)
    }

    .flag-icon-sn.flag-icon-squared {
      background-image: url(../flags/1x1/sn.svg)
    }

    .flag-icon-so {
      background-image: url(../flags/4x3/so.svg)
    }

    .flag-icon-so.flag-icon-squared {
      background-image: url(../flags/1x1/so.svg)
    }

    .flag-icon-sr {
      background-image: url(../flags/4x3/sr.svg)
    }

    .flag-icon-sr.flag-icon-squared {
      background-image: url(../flags/1x1/sr.svg)
    }

    .flag-icon-ss {
      background-image: url(../flags/4x3/ss.svg)
    }

    .flag-icon-ss.flag-icon-squared {
      background-image: url(../flags/1x1/ss.svg)
    }

    .flag-icon-st {
      background-image: url(../flags/4x3/st.svg)
    }

    .flag-icon-st.flag-icon-squared {
      background-image: url(../flags/1x1/st.svg)
    }

    .flag-icon-sv {
      background-image: url(../flags/4x3/sv.svg)
    }

    .flag-icon-sv.flag-icon-squared {
      background-image: url(../flags/1x1/sv.svg)
    }

    .flag-icon-sx {
      background-image: url(../flags/4x3/sx.svg)
    }

    .flag-icon-sx.flag-icon-squared {
      background-image: url(../flags/1x1/sx.svg)
    }

    .flag-icon-sy {
      background-image: url(../flags/4x3/sy.svg)
    }

    .flag-icon-sy.flag-icon-squared {
      background-image: url(../flags/1x1/sy.svg)
    }

    .flag-icon-sz {
      background-image: url(../flags/4x3/sz.svg)
    }

    .flag-icon-sz.flag-icon-squared {
      background-image: url(../flags/1x1/sz.svg)
    }

    .flag-icon-tc {
      background-image: url(../flags/4x3/tc.svg)
    }

    .flag-icon-tc.flag-icon-squared {
      background-image: url(../flags/1x1/tc.svg)
    }

    .flag-icon-td {
      background-image: url(../flags/4x3/td.svg)
    }

    .flag-icon-td.flag-icon-squared {
      background-image: url(../flags/1x1/td.svg)
    }

    .flag-icon-tf {
      background-image: url(../flags/4x3/tf.svg)
    }

    .flag-icon-tf.flag-icon-squared {
      background-image: url(../flags/1x1/tf.svg)
    }

    .flag-icon-tg {
      background-image: url(../flags/4x3/tg.svg)
    }

    .flag-icon-tg.flag-icon-squared {
      background-image: url(../flags/1x1/tg.svg)
    }

    .flag-icon-th {
      background-image: url(../flags/4x3/th.svg)
    }

    .flag-icon-th.flag-icon-squared {
      background-image: url(../flags/1x1/th.svg)
    }

    .flag-icon-tj {
      background-image: url(../flags/4x3/tj.svg)
    }

    .flag-icon-tj.flag-icon-squared {
      background-image: url(../flags/1x1/tj.svg)
    }

    .flag-icon-tk {
      background-image: url(../flags/4x3/tk.svg)
    }

    .flag-icon-tk.flag-icon-squared {
      background-image: url(../flags/1x1/tk.svg)
    }

    .flag-icon-tl {
      background-image: url(../flags/4x3/tl.svg)
    }

    .flag-icon-tl.flag-icon-squared {
      background-image: url(../flags/1x1/tl.svg)
    }

    .flag-icon-tm {
      background-image: url(../flags/4x3/tm.svg)
    }

    .flag-icon-tm.flag-icon-squared {
      background-image: url(../flags/1x1/tm.svg)
    }

    .flag-icon-tn {
      background-image: url(../flags/4x3/tn.svg)
    }

    .flag-icon-tn.flag-icon-squared {
      background-image: url(../flags/1x1/tn.svg)
    }

    .flag-icon-to {
      background-image: url(../flags/4x3/to.svg)
    }

    .flag-icon-to.flag-icon-squared {
      background-image: url(../flags/1x1/to.svg)
    }

    .flag-icon-tr {
      background-image: url(../flags/4x3/tr.svg)
    }

    .flag-icon-tr.flag-icon-squared {
      background-image: url(../flags/1x1/tr.svg)
    }

    .flag-icon-tt {
      background-image: url(../flags/4x3/tt.svg)
    }

    .flag-icon-tt.flag-icon-squared {
      background-image: url(../flags/1x1/tt.svg)
    }

    .flag-icon-tv {
      background-image: url(../flags/4x3/tv.svg)
    }

    .flag-icon-tv.flag-icon-squared {
      background-image: url(../flags/1x1/tv.svg)
    }

    .flag-icon-tw {
      background-image: url(../flags/4x3/tw.svg)
    }

    .flag-icon-tw.flag-icon-squared {
      background-image: url(../flags/1x1/tw.svg)
    }

    .flag-icon-tz {
      background-image: url(../flags/4x3/tz.svg)
    }

    .flag-icon-tz.flag-icon-squared {
      background-image: url(../flags/1x1/tz.svg)
    }

    .flag-icon-ua {
      background-image: url(../flags/4x3/ua.svg)
    }

    .flag-icon-ua.flag-icon-squared {
      background-image: url(../flags/1x1/ua.svg)
    }

    .flag-icon-ug {
      background-image: url(../flags/4x3/ug.svg)
    }

    .flag-icon-ug.flag-icon-squared {
      background-image: url(../flags/1x1/ug.svg)
    }

    .flag-icon-um {
      background-image: url(../flags/4x3/um.svg)
    }

    .flag-icon-um.flag-icon-squared {
      background-image: url(../flags/1x1/um.svg)
    }

    .flag-icon-us {
      background-image: url(../flags/4x3/us.svg)
    }

    .flag-icon-us.flag-icon-squared {
      background-image: url(../flags/1x1/us.svg)
    }

    .flag-icon-uy {
      background-image: url(../flags/4x3/uy.svg)
    }

    .flag-icon-uy.flag-icon-squared {
      background-image: url(../flags/1x1/uy.svg)
    }

    .flag-icon-uz {
      background-image: url(../flags/4x3/uz.svg)
    }

    .flag-icon-uz.flag-icon-squared {
      background-image: url(../flags/1x1/uz.svg)
    }

    .flag-icon-va {
      background-image: url(../flags/4x3/va.svg)
    }

    .flag-icon-va.flag-icon-squared {
      background-image: url(../flags/1x1/va.svg)
    }

    .flag-icon-vc {
      background-image: url(../flags/4x3/vc.svg)
    }

    .flag-icon-vc.flag-icon-squared {
      background-image: url(../flags/1x1/vc.svg)
    }

    .flag-icon-ve {
      background-image: url(../flags/4x3/ve.svg)
    }

    .flag-icon-ve.flag-icon-squared {
      background-image: url(../flags/1x1/ve.svg)
    }

    .flag-icon-vg {
      background-image: url(../flags/4x3/vg.svg)
    }

    .flag-icon-vg.flag-icon-squared {
      background-image: url(../flags/1x1/vg.svg)
    }

    .flag-icon-vi {
      background-image: url(../flags/4x3/vi.svg)
    }

    .flag-icon-vi.flag-icon-squared {
      background-image: url(../flags/1x1/vi.svg)
    }

    .flag-icon-vn {
      background-image: url(../flags/4x3/vn.svg)
    }

    .flag-icon-vn.flag-icon-squared {
      background-image: url(../flags/1x1/vn.svg)
    }

    .flag-icon-vu {
      background-image: url(../flags/4x3/vu.svg)
    }

    .flag-icon-vu.flag-icon-squared {
      background-image: url(../flags/1x1/vu.svg)
    }

    .flag-icon-wf {
      background-image: url(../flags/4x3/wf.svg)
    }

    .flag-icon-wf.flag-icon-squared {
      background-image: url(../flags/1x1/wf.svg)
    }

    .flag-icon-ws {
      background-image: url(../flags/4x3/ws.svg)
    }

    .flag-icon-ws.flag-icon-squared {
      background-image: url(../flags/1x1/ws.svg)
    }

    .flag-icon-ye {
      background-image: url(../flags/4x3/ye.svg)
    }

    .flag-icon-ye.flag-icon-squared {
      background-image: url(../flags/1x1/ye.svg)
    }

    .flag-icon-yt {
      background-image: url(../flags/4x3/yt.svg)
    }

    .flag-icon-yt.flag-icon-squared {
      background-image: url(../flags/1x1/yt.svg)
    }

    .flag-icon-za {
      background-image: url(../flags/4x3/za.svg)
    }

    .flag-icon-za.flag-icon-squared {
      background-image: url(../flags/1x1/za.svg)
    }

    .flag-icon-zm {
      background-image: url(../flags/4x3/zm.svg)
    }

    .flag-icon-zm.flag-icon-squared {
      background-image: url(../flags/1x1/zm.svg)
    }

    .flag-icon-zw {
      background-image: url(../flags/4x3/zw.svg)
    }

    .flag-icon-zw.flag-icon-squared {
      background-image: url(../flags/1x1/zw.svg)
    }

    .flag-icon-eu {
      background-image: url(../flags/4x3/eu.svg)
    }

    .flag-icon-eu.flag-icon-squared {
      background-image: url(../flags/1x1/eu.svg)
    }

    .flag-icon-gb-eng {
      background-image: url(../flags/4x3/gb-eng.svg)
    }

    .flag-icon-gb-eng.flag-icon-squared {
      background-image: url(../flags/1x1/gb-eng.svg)
    }

    .flag-icon-gb-sct {
      background-image: url(../flags/4x3/gb-sct.svg)
    }

    .flag-icon-gb-sct.flag-icon-squared {
      background-image: url(../flags/1x1/gb-sct.svg)
    }

    .flag-icon-gb-wls {
      background-image: url(../flags/4x3/gb-wls.svg)
    }

    .flag-icon-gb-wls.flag-icon-squared {
      background-image: url(../flags/1x1/gb-wls.svg)
    }

    .pace {
      -webkit-pointer-events: none;
      pointer-events: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none
    }

    .pace-inactive {
      display: none
    }

    .pace .pace-progress {
      background: #ff6275;
      position: fixed;
      z-index: 2000;
      top: 0;
      right: 100%;
      width: 100%;
      height: 3px
    }
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
                  <img src="{{ asset('front-style/assets/images/itajer_logo.png') }}" width="200px"
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
</body>

</html>