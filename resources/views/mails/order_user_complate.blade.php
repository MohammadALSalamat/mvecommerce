<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
    /*!
  * Bootstrap v4.0.0 (https://getbootstrap.com)
  * Copyright 2011-2018 The Bootstrap Authors
  * Copyright 2011-2018 Twitter, Inc.
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
  */
    :root {
      --blue: #1E9FF2;
      --indigo: #6610f2;
      --purple: #6f42c1;
      --pink: #e83e8c;
      --red: #FF4961;
      --orange: #FF9149;
      --yellow: #ffc107;
      --green: #28D094;
      --teal: #20c997;
      --cyan: #666EE8;
      --white: #fff;
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
      --font-family-sans-serif: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      --font-family-monospace: "Quicksand", Georgia, "Times New Roman", Times, serif;
    }

    @media print {

      *,
      *::before,
      *::after {
        text-shadow: none !important;
        box-shadow: none !important;
      }

      a:not(.btn) {
        text-decoration: underline;
      }

      abbr[title]::after {
        content: " ("attr(title) ")";
      }

      pre {
        white-space: pre-wrap !important;
      }

      pre,
      blockquote {
        border: 1px solid #999;
        page-break-inside: avoid;
      }

      thead {
        display: table-header-group;
      }

      tr,
      img {
        page-break-inside: avoid;
      }

      p,
      h2,
      h3 {
        orphans: 3;
        widows: 3;
      }

      h2,
      h3 {
        page-break-after: avoid;
      }

      @page {
        size: a3;
      }

      body {
        min-width: 992px !important;
      }

      .container {
        min-width: 992px !important;
      }

      .navbar {
        display: none;
      }

      .badge {
        border: 1px solid #000;
      }

      .table {
        border-collapse: collapse !important;
      }

      .table td,
      .table th {
        background-color: #fff !important;
      }

      .table-bordered th,
      .table-bordered td {
        border: 1px solid #ddd !important;
      }
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    html {
      font-family: sans-serif;
      line-height: 1.15;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      -ms-overflow-style: scrollbar;
      -webkit-tap-highlight-color: transparent;
    }

    @-ms-viewport {
      width: device-width;
    }

    article,
    aside,
    dialog,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    nav,
    section {
      display: block;
    }

    body {
      margin: 0;
      font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.45;
      color: #6B6F82;
      text-align: left;
      background-color: #F9FAFD;
    }

    [tabindex="-1"]:focus {
      outline: 0 !important;
    }

    hr {
      box-sizing: content-box;
      height: 0;
      overflow: visible;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin-top: 0;
      margin-bottom: 0.5rem;
    }

    p {
      margin-top: 0;
      margin-bottom: 1rem;
    }

    abbr[title],
    abbr[data-original-title] {
      text-decoration: underline;
      text-decoration: underline dotted;
      cursor: help;
      border-bottom: 0;
    }

    address {
      margin-bottom: 1rem;
      font-style: normal;
      line-height: inherit;
    }

    ol,
    ul,
    dl {
      margin-top: 0;
      margin-bottom: 1rem;
    }

    ol ol,
    ul ul,
    ol ul,
    ul ol {
      margin-bottom: 0;
    }

    dt {
      font-weight: 700;
    }

    dd {
      margin-bottom: .5rem;
      margin-left: 0;
    }

    blockquote {
      margin: 0 0 1rem;
    }

    dfn {
      font-style: italic;
    }

    b,
    strong {
      font-weight: bolder;
    }

    small {
      font-size: 80%;
    }

    sub,
    sup {
      position: relative;
      font-size: 75%;
      line-height: 0;
      vertical-align: baseline;
    }

    sub {
      bottom: -.25em;
    }

    sup {
      top: -.5em;
    }

    a {
      color: #5059e5;
      text-decoration: none;
      background-color: transparent;
      -webkit-text-decoration-skip: objects;
    }

    a:hover {
      color: #3a44e1;
      text-decoration: none;
    }

    a:not([href]):not([tabindex]) {
      color: inherit;
      text-decoration: none;
    }

    a:not([href]):not([tabindex]):hover,
    a:not([href]):not([tabindex]):focus {
      color: inherit;
      text-decoration: none;
    }

    a:not([href]):not([tabindex]):focus {
      outline: 0;
    }

    pre,
    code,
    kbd,
    samp {
      font-family: monospace, monospace;
      font-size: 1em;
    }

    pre {
      margin-top: 0;
      margin-bottom: 1rem;
      overflow: auto;
      -ms-overflow-style: scrollbar;
    }

    figure {
      margin: 0 0 1rem;
    }

    img {
      vertical-align: middle;
      border-style: none;
    }

    svg:not(:root) {
      overflow: hidden;
    }

    table {
      border-collapse: collapse;
    }

    caption {
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
      color: #6B6F82;
      text-align: left;
      caption-side: bottom;
    }

    th {
      text-align: inherit;
    }

    label {
      display: inline-block;
      margin-bottom: .5rem;
    }

    button {
      border-radius: 0;
    }

    button:focus {
      outline: 1px dotted;
      outline: 5px auto -webkit-focus-ring-color;
    }

    input,
    button,
    select,
    optgroup,
    textarea {
      margin: 0;
      font-family: inherit;
      font-size: inherit;
      line-height: inherit;
    }

    button,
    input {
      overflow: visible;
    }

    button,
    select {
      text-transform: none;
    }

    button,
    html [type="button"],
    [type="reset"],
    [type="submit"] {
      -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      padding: 0;
      border-style: none;
    }

    input[type="radio"],
    input[type="checkbox"] {
      box-sizing: border-box;
      padding: 0;
    }

    input[type="date"],
    input[type="time"],
    input[type="datetime-local"],
    input[type="month"] {
      -webkit-appearance: listbox;
    }

    textarea {
      overflow: auto;
      resize: vertical;
    }

    fieldset {
      min-width: 0;
      padding: 0;
      margin: 0;
      border: 0;
    }

    legend {
      display: block;
      width: 100%;
      max-width: 100%;
      padding: 0;
      margin-bottom: .5rem;
      font-size: 1.5rem;
      line-height: inherit;
      color: inherit;
      white-space: normal;
    }

    progress {
      vertical-align: baseline;
    }

    [type="number"]::-webkit-inner-spin-button,
    [type="number"]::-webkit-outer-spin-button {
      height: auto;
    }

    [type="search"] {
      outline-offset: -2px;
      -webkit-appearance: none;
    }

    [type="search"]::-webkit-search-cancel-button,
    [type="search"]::-webkit-search-decoration {
      -webkit-appearance: none;
    }

    ::-webkit-file-upload-button {
      font: inherit;
      -webkit-appearance: button;
    }

    output {
      display: inline-block;
    }

    summary {
      display: list-item;
      cursor: pointer;
    }

    template {
      display: none;
    }

    [hidden] {
      display: none !important;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
      margin-bottom: 0.5rem;
      font-family: "Quicksand", Georgia, "Times New Roman", Times, serif;
      font-weight: 400;
      line-height: 1.2;
      color: #464855;
    }

    h1,
    .h1 {
      font-size: 2rem;
    }

    h2,
    .h2 {
      font-size: 1.74rem;
    }

    h3,
    .h3 {
      font-size: 1.51rem;
    }

    h4,
    .h4 {
      font-size: 1.32rem;
    }

    h5,
    .h5 {
      font-size: 1.14rem;
    }

    h6,
    .h6 {
      font-size: 1rem;
    }

    .lead {
      font-size: 1.25rem;
      font-weight: 400;
    }

    .display-1 {
      font-size: 6rem;
      font-weight: 400;
      line-height: 1.2;
    }

    .display-2 {
      font-size: 5.5rem;
      font-weight: 400;
      line-height: 1.2;
    }

    .display-3 {
      font-size: 4.5rem;
      font-weight: 400;
      line-height: 1.2;
    }

    .display-4 {
      font-size: 3.5rem;
      font-weight: 400;
      line-height: 1.2;
    }

    hr {
      margin-top: 1rem;
      margin-bottom: 1rem;
      border: 0;
      border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    small,
    .small {
      font-size: 80%;
      font-weight: 400;
    }

    mark,
    .mark {
      padding: 0.2em;
      background-color: #fcf8e3;
    }

    .list-unstyled {
      padding-left: 0;
      list-style: none;
    }

    .list-inline {
      padding-left: 0;
      list-style: none;
    }

    .list-inline-item {
      display: inline-block;
    }

    .list-inline-item:not(:last-child) {
      margin-right: 0.5rem;
    }

    .initialism {
      font-size: 90%;
      text-transform: uppercase;
    }

    .blockquote {
      margin-bottom: 1rem;
      font-size: 1.25rem;
    }

    .blockquote-footer {
      display: block;
      font-size: 80%;
      color: #6B6F82;
    }

    .blockquote-footer::before {
      content: "\2014 \00A0";
    }

    .img-fluid {
      max-width: 100%;
      height: auto;
    }

    .img-thumbnail {
      padding: 0.25rem;
      background-color: #F9FAFD;
      border: 1px solid #626E82;
      border-radius: 0.25rem;
      max-width: 100%;
      height: auto;
    }

    .figure {
      display: inline-block;
    }

    .figure-img {
      margin-bottom: 0.5rem;
      line-height: 1;
    }

    .figure-caption {
      font-size: 90%;
      color: #6B6F82;
    }

    code,
    kbd,
    pre,
    samp {
      font-family: "Quicksand", Georgia, "Times New Roman", Times, serif;
    }

    code {
      font-size: 87.5%;
      color: #F74B5C;
      word-break: break-word;
    }

    a>code {
      color: inherit;
    }

    kbd {
      padding: 0.2rem 0.4rem;
      font-size: 87.5%;
      color: #fff;
      background-color: #f2f3f5;
      border-radius: 0.21rem;
    }

    kbd kbd {
      padding: 0;
      font-size: 100%;
      font-weight: 700;
    }

    pre {
      display: block;
      font-size: 87.5%;
      color: #6B6F82;
    }

    pre code {
      font-size: inherit;
      color: inherit;
      word-break: normal;
    }

    .pre-scrollable {
      max-height: 340px;
      overflow-y: scroll;
    }

    .container {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    @media (min-width: 576px) {
      .container {
        max-width: 540px;
      }
    }

    @media (min-width: 768px) {
      .container {
        max-width: 720px;
      }
    }

    @media (min-width: 992px) {
      .container {
        max-width: 960px;
      }
    }

    @media (min-width: 1200px) {
      .container {
        max-width: 1140px;
      }
    }

    .container-fluid {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
    }

    .no-gutters {
      margin-right: 0;
      margin-left: 0;
    }

    .no-gutters>.col,
    .no-gutters>[class*="col-"] {
      padding-right: 0;
      padding-left: 0;
    }

    .col-1,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-10,
    .col-11,
    .col-12,
    .col,
    .col-auto,
    .col-sm-1,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm,
    .col-sm-auto,
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md,
    .col-md-auto,
    .col-lg-1,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg,
    .col-lg-auto,
    .col-xl-1,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl,
    .col-xl-auto {
      position: relative;
      width: 100%;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px;
    }

    .col {
      flex-basis: 0;
      flex-grow: 1;
      max-width: 100%;
    }

    .col-auto {
      flex: 0 0 auto;
      width: auto;
      max-width: none;
    }

    .col-1 {
      flex: 0 0 8.333333%;
      max-width: 8.333333%;
    }

    .col-2 {
      flex: 0 0 16.666667%;
      max-width: 16.666667%;
    }

    .col-3 {
      flex: 0 0 25%;
      max-width: 25%;
    }

    .col-4 {
      flex: 0 0 33.333333%;
      max-width: 33.333333%;
    }

    .col-5 {
      flex: 0 0 41.666667%;
      max-width: 41.666667%;
    }

    .col-6 {
      flex: 0 0 50%;
      max-width: 50%;
    }

    .col-7 {
      flex: 0 0 58.333333%;
      max-width: 58.333333%;
    }

    .col-8 {
      flex: 0 0 66.666667%;
      max-width: 66.666667%;
    }

    .col-9 {
      flex: 0 0 75%;
      max-width: 75%;
    }

    .col-10 {
      flex: 0 0 83.333333%;
      max-width: 83.333333%;
    }

    .col-11 {
      flex: 0 0 91.666667%;
      max-width: 91.666667%;
    }

    .col-12 {
      flex: 0 0 100%;
      max-width: 100%;
    }

    .order-first {
      order: -1;
    }

    .order-last {
      order: 13;
    }

    .order-0 {
      order: 0;
    }

    .order-1 {
      order: 1;
    }

    .order-2 {
      order: 2;
    }

    .order-3 {
      order: 3;
    }

    .order-4 {
      order: 4;
    }

    .order-5 {
      order: 5;
    }

    .order-6 {
      order: 6;
    }

    .order-7 {
      order: 7;
    }

    .order-8 {
      order: 8;
    }

    .order-9 {
      order: 9;
    }

    .order-10 {
      order: 10;
    }

    .order-11 {
      order: 11;
    }

    .order-12 {
      order: 12;
    }

    .offset-1 {
      margin-left: 8.333333%;
    }

    .offset-2 {
      margin-left: 16.666667%;
    }

    .offset-3 {
      margin-left: 25%;
    }

    .offset-4 {
      margin-left: 33.333333%;
    }

    .offset-5 {
      margin-left: 41.666667%;
    }

    .offset-6 {
      margin-left: 50%;
    }

    .offset-7 {
      margin-left: 58.333333%;
    }

    .offset-8 {
      margin-left: 66.666667%;
    }

    .offset-9 {
      margin-left: 75%;
    }

    .offset-10 {
      margin-left: 83.333333%;
    }

    .offset-11 {
      margin-left: 91.666667%;
    }

    @media (min-width: 576px) {
      .col-sm {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
      }

      .col-sm-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: none;
      }

      .col-sm-1 {
        flex: 0 0 8.333333%;
        max-width: 8.333333%;
      }

      .col-sm-2 {
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
      }

      .col-sm-3 {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .col-sm-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }

      .col-sm-5 {
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
      }

      .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .col-sm-7 {
        flex: 0 0 58.333333%;
        max-width: 58.333333%;
      }

      .col-sm-8 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
      }

      .col-sm-9 {
        flex: 0 0 75%;
        max-width: 75%;
      }

      .col-sm-10 {
        flex: 0 0 83.333333%;
        max-width: 83.333333%;
      }

      .col-sm-11 {
        flex: 0 0 91.666667%;
        max-width: 91.666667%;
      }

      .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .order-sm-first {
        order: -1;
      }

      .order-sm-last {
        order: 13;
      }

      .order-sm-0 {
        order: 0;
      }

      .order-sm-1 {
        order: 1;
      }

      .order-sm-2 {
        order: 2;
      }

      .order-sm-3 {
        order: 3;
      }

      .order-sm-4 {
        order: 4;
      }

      .order-sm-5 {
        order: 5;
      }

      .order-sm-6 {
        order: 6;
      }

      .order-sm-7 {
        order: 7;
      }

      .order-sm-8 {
        order: 8;
      }

      .order-sm-9 {
        order: 9;
      }

      .order-sm-10 {
        order: 10;
      }

      .order-sm-11 {
        order: 11;
      }

      .order-sm-12 {
        order: 12;
      }

      .offset-sm-0 {
        margin-left: 0;
      }

      .offset-sm-1 {
        margin-left: 8.333333%;
      }

      .offset-sm-2 {
        margin-left: 16.666667%;
      }

      .offset-sm-3 {
        margin-left: 25%;
      }

      .offset-sm-4 {
        margin-left: 33.333333%;
      }

      .offset-sm-5 {
        margin-left: 41.666667%;
      }

      .offset-sm-6 {
        margin-left: 50%;
      }

      .offset-sm-7 {
        margin-left: 58.333333%;
      }

      .offset-sm-8 {
        margin-left: 66.666667%;
      }

      .offset-sm-9 {
        margin-left: 75%;
      }

      .offset-sm-10 {
        margin-left: 83.333333%;
      }

      .offset-sm-11 {
        margin-left: 91.666667%;
      }
    }

    @media (min-width: 768px) {
      .col-md {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
      }

      .col-md-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: none;
      }

      .col-md-1 {
        flex: 0 0 8.333333%;
        max-width: 8.333333%;
      }

      .col-md-2 {
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
      }

      .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .col-md-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }

      .col-md-5 {
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
      }

      .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .col-md-7 {
        flex: 0 0 58.333333%;
        max-width: 58.333333%;
      }

      .col-md-8 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
      }

      .col-md-9 {
        flex: 0 0 75%;
        max-width: 75%;
      }

      .col-md-10 {
        flex: 0 0 83.333333%;
        max-width: 83.333333%;
      }

      .col-md-11 {
        flex: 0 0 91.666667%;
        max-width: 91.666667%;
      }

      .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .order-md-first {
        order: -1;
      }

      .order-md-last {
        order: 13;
      }

      .order-md-0 {
        order: 0;
      }

      .order-md-1 {
        order: 1;
      }

      .order-md-2 {
        order: 2;
      }

      .order-md-3 {
        order: 3;
      }

      .order-md-4 {
        order: 4;
      }

      .order-md-5 {
        order: 5;
      }

      .order-md-6 {
        order: 6;
      }

      .order-md-7 {
        order: 7;
      }

      .order-md-8 {
        order: 8;
      }

      .order-md-9 {
        order: 9;
      }

      .order-md-10 {
        order: 10;
      }

      .order-md-11 {
        order: 11;
      }

      .order-md-12 {
        order: 12;
      }

      .offset-md-0 {
        margin-left: 0;
      }

      .offset-md-1 {
        margin-left: 8.333333%;
      }

      .offset-md-2 {
        margin-left: 16.666667%;
      }

      .offset-md-3 {
        margin-left: 25%;
      }

      .offset-md-4 {
        margin-left: 33.333333%;
      }

      .offset-md-5 {
        margin-left: 41.666667%;
      }

      .offset-md-6 {
        margin-left: 50%;
      }

      .offset-md-7 {
        margin-left: 58.333333%;
      }

      .offset-md-8 {
        margin-left: 66.666667%;
      }

      .offset-md-9 {
        margin-left: 75%;
      }

      .offset-md-10 {
        margin-left: 83.333333%;
      }

      .offset-md-11 {
        margin-left: 91.666667%;
      }
    }

    @media (min-width: 992px) {
      .col-lg {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
      }

      .col-lg-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: none;
      }

      .col-lg-1 {
        flex: 0 0 8.333333%;
        max-width: 8.333333%;
      }

      .col-lg-2 {
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
      }

      .col-lg-3 {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .col-lg-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }

      .col-lg-5 {
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
      }

      .col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .col-lg-7 {
        flex: 0 0 58.333333%;
        max-width: 58.333333%;
      }

      .col-lg-8 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
      }

      .col-lg-9 {
        flex: 0 0 75%;
        max-width: 75%;
      }

      .col-lg-10 {
        flex: 0 0 83.333333%;
        max-width: 83.333333%;
      }

      .col-lg-11 {
        flex: 0 0 91.666667%;
        max-width: 91.666667%;
      }

      .col-lg-12 {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .order-lg-first {
        order: -1;
      }

      .order-lg-last {
        order: 13;
      }

      .order-lg-0 {
        order: 0;
      }

      .order-lg-1 {
        order: 1;
      }

      .order-lg-2 {
        order: 2;
      }

      .order-lg-3 {
        order: 3;
      }

      .order-lg-4 {
        order: 4;
      }

      .order-lg-5 {
        order: 5;
      }

      .order-lg-6 {
        order: 6;
      }

      .order-lg-7 {
        order: 7;
      }

      .order-lg-8 {
        order: 8;
      }

      .order-lg-9 {
        order: 9;
      }

      .order-lg-10 {
        order: 10;
      }

      .order-lg-11 {
        order: 11;
      }

      .order-lg-12 {
        order: 12;
      }

      .offset-lg-0 {
        margin-left: 0;
      }

      .offset-lg-1 {
        margin-left: 8.333333%;
      }

      .offset-lg-2 {
        margin-left: 16.666667%;
      }

      .offset-lg-3 {
        margin-left: 25%;
      }

      .offset-lg-4 {
        margin-left: 33.333333%;
      }

      .offset-lg-5 {
        margin-left: 41.666667%;
      }

      .offset-lg-6 {
        margin-left: 50%;
      }

      .offset-lg-7 {
        margin-left: 58.333333%;
      }

      .offset-lg-8 {
        margin-left: 66.666667%;
      }

      .offset-lg-9 {
        margin-left: 75%;
      }

      .offset-lg-10 {
        margin-left: 83.333333%;
      }

      .offset-lg-11 {
        margin-left: 91.666667%;
      }
    }

    @media (min-width: 1200px) {
      .col-xl {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
      }

      .col-xl-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: none;
      }

      .col-xl-1 {
        flex: 0 0 8.333333%;
        max-width: 8.333333%;
      }

      .col-xl-2 {
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
      }

      .col-xl-3 {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .col-xl-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }

      .col-xl-5 {
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
      }

      .col-xl-6 {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .col-xl-7 {
        flex: 0 0 58.333333%;
        max-width: 58.333333%;
      }

      .col-xl-8 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
      }

      .col-xl-9 {
        flex: 0 0 75%;
        max-width: 75%;
      }

      .col-xl-10 {
        flex: 0 0 83.333333%;
        max-width: 83.333333%;
      }

      .col-xl-11 {
        flex: 0 0 91.666667%;
        max-width: 91.666667%;
      }

      .col-xl-12 {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .order-xl-first {
        order: -1;
      }

      .order-xl-last {
        order: 13;
      }

      .order-xl-0 {
        order: 0;
      }

      .order-xl-1 {
        order: 1;
      }

      .order-xl-2 {
        order: 2;
      }

      .order-xl-3 {
        order: 3;
      }

      .order-xl-4 {
        order: 4;
      }

      .order-xl-5 {
        order: 5;
      }

      .order-xl-6 {
        order: 6;
      }

      .order-xl-7 {
        order: 7;
      }

      .order-xl-8 {
        order: 8;
      }

      .order-xl-9 {
        order: 9;
      }

      .order-xl-10 {
        order: 10;
      }

      .order-xl-11 {
        order: 11;
      }

      .order-xl-12 {
        order: 12;
      }

      .offset-xl-0 {
        margin-left: 0;
      }

      .offset-xl-1 {
        margin-left: 8.333333%;
      }

      .offset-xl-2 {
        margin-left: 16.666667%;
      }

      .offset-xl-3 {
        margin-left: 25%;
      }

      .offset-xl-4 {
        margin-left: 33.333333%;
      }

      .offset-xl-5 {
        margin-left: 41.666667%;
      }

      .offset-xl-6 {
        margin-left: 50%;
      }

      .offset-xl-7 {
        margin-left: 58.333333%;
      }

      .offset-xl-8 {
        margin-left: 66.666667%;
      }

      .offset-xl-9 {
        margin-left: 75%;
      }

      .offset-xl-10 {
        margin-left: 83.333333%;
      }

      .offset-xl-11 {
        margin-left: 91.666667%;
      }
    }

    .table {
      width: 100%;
      max-width: 100%;
      margin-bottom: 1rem;
      background-color: transparent;
    }

    .table th,
    .table td {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #626E82;
    }

    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #626E82;
    }

    .table tbody+tbody {
      border-top: 2px solid #626E82;
    }

    .table .table {
      background-color: #F9FAFD;
    }

    .table-sm th,
    .table-sm td {
      padding: 0.3rem;
    }

    .table-bordered {
      border: 1px solid #626E82;
    }

    .table-bordered th,
    .table-bordered td {
      border: 1px solid #626E82;
    }

    .table-bordered thead th,
    .table-bordered thead td {
      border-bottom-width: 2px;
    }

    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(245, 247, 250, 0.5);
    }

    .table-hover tbody tr:hover {
      background-color: rgba(245, 247, 250, 0.5);
    }

    .table-primary,
    .table-primary>th,
    .table-primary>td {
      background-color: #d4d6f9;
    }

    .table-hover .table-primary:hover {
      background-color: #bec1f6;
    }

    .table-hover .table-primary:hover>td,
    .table-hover .table-primary:hover>th {
      background-color: #bec1f6;
    }

    .table-secondary,
    .table-secondary>th,
    .table-secondary>td {
      background-color: #d6d7dc;
    }

    .table-hover .table-secondary:hover {
      background-color: #c8cad0;
    }

    .table-hover .table-secondary:hover>td,
    .table-hover .table-secondary:hover>th {
      background-color: #c8cad0;
    }

    .table-success,
    .table-success>th,
    .table-success>td {
      background-color: #c3f2e1;
    }

    .table-hover .table-success:hover {
      background-color: #aeedd7;
    }

    .table-hover .table-success:hover>td,
    .table-hover .table-success:hover>th {
      background-color: #aeedd7;
    }

    .table-info,
    .table-info>th,
    .table-info>td {
      background-color: #c0e4fb;
    }

    .table-hover .table-info:hover {
      background-color: #a8daf9;
    }

    .table-hover .table-info:hover>td,
    .table-hover .table-info:hover>th {
      background-color: #a8daf9;
    }

    .table-warning,
    .table-warning>th,
    .table-warning>td {
      background-color: #ffe0cc;
    }

    .table-hover .table-warning:hover {
      background-color: #ffd1b3;
    }

    .table-hover .table-warning:hover>td,
    .table-hover .table-warning:hover>th {
      background-color: #ffd1b3;
    }

    .table-danger,
    .table-danger>th,
    .table-danger>td {
      background-color: #ffccd3;
    }

    .table-hover .table-danger:hover {
      background-color: #ffb3bd;
    }

    .table-hover .table-danger:hover>td,
    .table-hover .table-danger:hover>th {
      background-color: #ffb3bd;
    }

    .table-light,
    .table-light>th,
    .table-light>td {
      background-color: #ecedef;
    }

    .table-hover .table-light:hover {
      background-color: #dee0e3;
    }

    .table-hover .table-light:hover>td,
    .table-hover .table-light:hover>th {
      background-color: #dee0e3;
    }

    .table-dark,
    .table-dark>th,
    .table-dark>td {
      background-color: #cbcccf;
    }

    .table-hover .table-dark:hover {
      background-color: #bebfc3;
    }

    .table-hover .table-dark:hover>td,
    .table-hover .table-dark:hover>th {
      background-color: #bebfc3;
    }

    .table-active,
    .table-active>th,
    .table-active>td {
      background-color: rgba(245, 247, 250, 0.5);
    }

    .table-hover .table-active:hover {
      background-color: rgba(228, 233, 242, 0.5);
    }

    .table-hover .table-active:hover>td,
    .table-hover .table-active:hover>th {
      background-color: rgba(228, 233, 242, 0.5);
    }

    .table .thead-dark th {
      color: #F9FAFD;
      background-color: #2A2E30;
      border-color: #3c4244;
    }

    .table .thead-light th {
      color: #4E5154;
      background-color: #98A4B8;
      border-color: #626E82;
    }

    .table-dark {
      color: #F9FAFD;
      background-color: #2A2E30;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th {
      border-color: #3c4244;
    }

    .table-dark.table-bordered {
      border: 0;
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(255, 255, 255, 0.05);
    }

    .table-dark.table-hover tbody tr:hover {
      background-color: rgba(255, 255, 255, 0.075);
    }

    @media (max-width: 575.98px) {
      .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }

      .table-responsive-sm>.table-bordered {
        border: 0;
      }
    }

    @media (max-width: 767.98px) {
      .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }

      .table-responsive-md>.table-bordered {
        border: 0;
      }
    }

    @media (max-width: 991.98px) {
      .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }

      .table-responsive-lg>.table-bordered {
        border: 0;
      }
    }

    @media (max-width: 1199.98px) {
      .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }

      .table-responsive-xl>.table-bordered {
        border: 0;
      }
    }

    .table-responsive {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table-responsive>.table-bordered {
      border: 0;
    }

    .form-control {
      display: block;
      width: 100%;
      padding: 0.75rem 1rem;
      font-size: 1rem;
      line-height: 1.25;
      color: #4E5154;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #BABFC7;
      border-radius: 0.25rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control::-ms-expand {
      background-color: transparent;
      border: 0;
    }

    .form-control:focus {
      color: #4E5154;
      background-color: #fff;
      border-color: #1E9FF2;
      outline: 0;
      box-shadow: none;
    }

    .form-control::placeholder {
      color: #BABFC7;
      opacity: 1;
    }

    .form-control:disabled,
    .form-control[readonly] {
      background-color: #98A4B8;
      opacity: 1;
    }

    select.form-control:not([size]):not([multiple]) {
      height: calc(2.75rem + 2px);
    }

    select.form-control:focus::-ms-value {
      color: #4E5154;
      background-color: #fff;
    }

    .form-control-file,
    .form-control-range {
      display: block;
      width: 100%;
    }

    .col-form-label {
      padding-top: calc(0.75rem + 1px);
      padding-bottom: calc(0.75rem + 1px);
      margin-bottom: 0;
      font-size: inherit;
      line-height: 1.25;
    }

    .col-form-label-lg {
      padding-top: calc(1rem + 1px);
      padding-bottom: calc(1rem + 1px);
      font-size: 1.25rem;
      line-height: 1.25;
    }

    .col-form-label-sm {
      padding-top: calc(0.5rem + 1px);
      padding-bottom: calc(0.5rem + 1px);
      font-size: 0.875rem;
      line-height: 1;
    }

    .form-control-plaintext {
      display: block;
      width: 100%;
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
      margin-bottom: 0;
      line-height: 1.25;
      background-color: transparent;
      border: solid transparent;
      border-width: 1px 0;
    }

    .form-control-plaintext.form-control-sm,
    .input-group-sm>.form-control-plaintext.form-control,
    .input-group-sm>.input-group-prepend>.form-control-plaintext.input-group-text,
    .input-group-sm>.input-group-append>.form-control-plaintext.input-group-text,
    .input-group-sm>.input-group-prepend>.form-control-plaintext.btn,
    .input-group-sm>.input-group-append>.form-control-plaintext.btn,
    .form-control-plaintext.form-control-lg,
    .input-group-lg>.form-control-plaintext.form-control,
    .input-group-lg>.input-group-prepend>.form-control-plaintext.input-group-text,
    .input-group-lg>.input-group-append>.form-control-plaintext.input-group-text,
    .input-group-lg>.input-group-prepend>.form-control-plaintext.btn,
    .input-group-lg>.input-group-append>.form-control-plaintext.btn {
      padding-right: 0;
      padding-left: 0;
    }

    .form-control-sm,
    .input-group-sm>.form-control,
    .input-group-sm>.input-group-prepend>.input-group-text,
    .input-group-sm>.input-group-append>.input-group-text,
    .input-group-sm>.input-group-prepend>.btn,
    .input-group-sm>.input-group-append>.btn {
      padding: 0.5rem 0.75rem;
      font-size: 0.875rem;
      line-height: 1;
      border-radius: 0.21rem;
    }

    select.form-control-sm:not([size]):not([multiple]),
    .input-group-sm>select.form-control:not([size]):not([multiple]),
    .input-group-sm>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
    .input-group-sm>.input-group-append>select.input-group-text:not([size]):not([multiple]),
    .input-group-sm>.input-group-prepend>select.btn:not([size]):not([multiple]),
    .input-group-sm>.input-group-append>select.btn:not([size]):not([multiple]) {
      height: calc(1.875rem + 2px + 10);
    }

    .form-control-lg,
    .input-group-lg>.form-control,
    .input-group-lg>.input-group-prepend>.input-group-text,
    .input-group-lg>.input-group-append>.input-group-text,
    .input-group-lg>.input-group-prepend>.btn,
    .input-group-lg>.input-group-append>.btn {
      padding: 1rem 1.25rem;
      font-size: 1.25rem;
      line-height: 1.25;
      border-radius: 0.35rem;
    }

    select.form-control-lg:not([size]):not([multiple]),
    .input-group-lg>select.form-control:not([size]):not([multiple]),
    .input-group-lg>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
    .input-group-lg>.input-group-append>select.input-group-text:not([size]):not([multiple]),
    .input-group-lg>.input-group-prepend>select.btn:not([size]):not([multiple]),
    .input-group-lg>.input-group-append>select.btn:not([size]):not([multiple]) {
      height: calc(3.5625rem + 2px);
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-text {
      display: block;
      margin-top: 0.25rem;
    }

    .form-row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -5px;
      margin-left: -5px;
    }

    .form-row>.col,
    .form-row>[class*="col-"] {
      padding-right: 5px;
      padding-left: 5px;
    }

    .form-check {
      position: relative;
      display: block;
      padding-left: 1.25rem;
    }

    .form-check-input {
      position: absolute;
      margin-top: 0.3rem;
      margin-left: -1.25rem;
    }

    .form-check-input:disabled~.form-check-label {
      color: #6B6F82;
    }

    .form-check-label {
      margin-bottom: 0;
    }

    .form-check-inline {
      display: inline-flex;
      align-items: center;
      padding-left: 0;
      margin-right: 0.75rem;
    }

    .form-check-inline .form-check-input {
      position: static;
      margin-top: 0;
      margin-right: 0.3125rem;
      margin-left: 0;
    }

    .valid-feedback {
      display: none;
      width: 100%;
      margin-top: 0.25rem;
      font-size: 80%;
      color: #28D094;
    }

    .valid-tooltip {
      position: absolute;
      top: 100%;
      z-index: 5;
      display: none;
      max-width: 100%;
      padding: .5rem;
      margin-top: .1rem;
      font-size: .875rem;
      line-height: 1;
      color: #fff;
      background-color: rgba(40, 208, 148, 0.8);
      border-radius: .2rem;
    }

    .was-validated .form-control:valid,
    .form-control.is-valid,
    .was-validated .custom-select:valid,
    .custom-select.is-valid {
      border-color: #28D094;
    }

    .was-validated .form-control:valid:focus,
    .form-control.is-valid:focus,
    .was-validated .custom-select:valid:focus,
    .custom-select.is-valid:focus {
      border-color: #28D094;
      box-shadow: 0 0 0 0.2rem rgba(40, 208, 148, 0.25);
    }

    .was-validated .form-control:valid~.valid-feedback,
    .was-validated .form-control:valid~.valid-tooltip,
    .form-control.is-valid~.valid-feedback,
    .form-control.is-valid~.valid-tooltip,
    .was-validated .custom-select:valid~.valid-feedback,
    .was-validated .custom-select:valid~.valid-tooltip,
    .custom-select.is-valid~.valid-feedback,
    .custom-select.is-valid~.valid-tooltip {
      display: block;
    }

    .was-validated .form-check-input:valid~.form-check-label,
    .form-check-input.is-valid~.form-check-label {
      color: #28D094;
    }

    .was-validated .form-check-input:valid~.valid-feedback,
    .was-validated .form-check-input:valid~.valid-tooltip,
    .form-check-input.is-valid~.valid-feedback,
    .form-check-input.is-valid~.valid-tooltip {
      display: block;
    }

    .was-validated .custom-control-input:valid~.custom-control-label,
    .custom-control-input.is-valid~.custom-control-label {
      color: #28D094;
    }

    .was-validated .custom-control-input:valid~.custom-control-label::before,
    .custom-control-input.is-valid~.custom-control-label::before {
      background-color: #8ee9c9;
    }

    .was-validated .custom-control-input:valid~.valid-feedback,
    .was-validated .custom-control-input:valid~.valid-tooltip,
    .custom-control-input.is-valid~.valid-feedback,
    .custom-control-input.is-valid~.valid-tooltip {
      display: block;
    }

    .was-validated .custom-control-input:valid:checked~.custom-control-label::before,
    .custom-control-input.is-valid:checked~.custom-control-label::before {
      background-color: #4eddaa;
    }

    .was-validated .custom-control-input:valid:focus~.custom-control-label::before,
    .custom-control-input.is-valid:focus~.custom-control-label::before {
      box-shadow: 0 0 0 1px #F9FAFD, 0 0 0 0.2rem rgba(40, 208, 148, 0.25);
    }

    .was-validated .custom-file-input:valid~.custom-file-label,
    .custom-file-input.is-valid~.custom-file-label {
      border-color: #28D094;
    }

    .was-validated .custom-file-input:valid~.custom-file-label::before,
    .custom-file-input.is-valid~.custom-file-label::before {
      border-color: inherit;
    }

    .was-validated .custom-file-input:valid~.valid-feedback,
    .was-validated .custom-file-input:valid~.valid-tooltip,
    .custom-file-input.is-valid~.valid-feedback,
    .custom-file-input.is-valid~.valid-tooltip {
      display: block;
    }

    .was-validated .custom-file-input:valid:focus~.custom-file-label,
    .custom-file-input.is-valid:focus~.custom-file-label {
      box-shadow: 0 0 0 0.2rem rgba(40, 208, 148, 0.25);
    }

    .invalid-feedback {
      display: none;
      width: 100%;
      margin-top: 0.25rem;
      font-size: 80%;
      color: #FF4961;
    }

    .invalid-tooltip {
      position: absolute;
      top: 100%;
      z-index: 5;
      display: none;
      max-width: 100%;
      padding: .5rem;
      margin-top: .1rem;
      font-size: .875rem;
      line-height: 1;
      color: #fff;
      background-color: rgba(255, 73, 97, 0.8);
      border-radius: .2rem;
    }

    .was-validated .form-control:invalid,
    .form-control.is-invalid,
    .was-validated .custom-select:invalid,
    .custom-select.is-invalid {
      border-color: #FF4961;
    }

    .was-validated .form-control:invalid:focus,
    .form-control.is-invalid:focus,
    .was-validated .custom-select:invalid:focus,
    .custom-select.is-invalid:focus {
      border-color: #FF4961;
      box-shadow: 0 0 0 0.2rem rgba(255, 73, 97, 0.25);
    }

    .was-validated .form-control:invalid~.invalid-feedback,
    .was-validated .form-control:invalid~.invalid-tooltip,
    .form-control.is-invalid~.invalid-feedback,
    .form-control.is-invalid~.invalid-tooltip,
    .was-validated .custom-select:invalid~.invalid-feedback,
    .was-validated .custom-select:invalid~.invalid-tooltip,
    .custom-select.is-invalid~.invalid-feedback,
    .custom-select.is-invalid~.invalid-tooltip {
      display: block;
    }

    .was-validated .form-check-input:invalid~.form-check-label,
    .form-check-input.is-invalid~.form-check-label {
      color: #FF4961;
    }

    .was-validated .form-check-input:invalid~.invalid-feedback,
    .was-validated .form-check-input:invalid~.invalid-tooltip,
    .form-check-input.is-invalid~.invalid-feedback,
    .form-check-input.is-invalid~.invalid-tooltip {
      display: block;
    }

    .was-validated .custom-control-input:invalid~.custom-control-label,
    .custom-control-input.is-invalid~.custom-control-label {
      color: #FF4961;
    }

    .was-validated .custom-control-input:invalid~.custom-control-label::before,
    .custom-control-input.is-invalid~.custom-control-label::before {
      background-color: #ffc9d0;
    }

    .was-validated .custom-control-input:invalid~.invalid-feedback,
    .was-validated .custom-control-input:invalid~.invalid-tooltip,
    .custom-control-input.is-invalid~.invalid-feedback,
    .custom-control-input.is-invalid~.invalid-tooltip {
      display: block;
    }

    .was-validated .custom-control-input:invalid:checked~.custom-control-label::before,
    .custom-control-input.is-invalid:checked~.custom-control-label::before {
      background-color: #ff7c8d;
    }

    .was-validated .custom-control-input:invalid:focus~.custom-control-label::before,
    .custom-control-input.is-invalid:focus~.custom-control-label::before {
      box-shadow: 0 0 0 1px #F9FAFD, 0 0 0 0.2rem rgba(255, 73, 97, 0.25);
    }

    .was-validated .custom-file-input:invalid~.custom-file-label,
    .custom-file-input.is-invalid~.custom-file-label {
      border-color: #FF4961;
    }

    .was-validated .custom-file-input:invalid~.custom-file-label::before,
    .custom-file-input.is-invalid~.custom-file-label::before {
      border-color: inherit;
    }

    .was-validated .custom-file-input:invalid~.invalid-feedback,
    .was-validated .custom-file-input:invalid~.invalid-tooltip,
    .custom-file-input.is-invalid~.invalid-feedback,
    .custom-file-input.is-invalid~.invalid-tooltip {
      display: block;
    }

    .was-validated .custom-file-input:invalid:focus~.custom-file-label,
    .custom-file-input.is-invalid:focus~.custom-file-label {
      box-shadow: 0 0 0 0.2rem rgba(255, 73, 97, 0.25);
    }

    .form-inline {
      display: flex;
      flex-flow: row wrap;
      align-items: center;
    }

    .form-inline .form-check {
      width: 100%;
    }

    @media (min-width: 576px) {
      .form-inline label {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0;
      }

      .form-inline .form-group {
        display: flex;
        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
        margin-bottom: 0;
      }

      .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle;
      }

      .form-inline .form-control-plaintext {
        display: inline-block;
      }

      .form-inline .input-group {
        width: auto;
      }

      .form-inline .form-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding-left: 0;
      }

      .form-inline .form-check-input {
        position: relative;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0;
      }

      .form-inline .custom-control {
        align-items: center;
        justify-content: center;
      }

      .form-inline .custom-control-label {
        margin-bottom: 0;
      }
    }

    .btn {
      display: inline-block;
      font-weight: 400;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      user-select: none;
      border: 1px solid transparent;
      padding: 0.75rem 1rem;
      font-size: 1rem;
      line-height: 1.25;
      border-radius: 0.25rem;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn:hover,
    .btn:focus {
      text-decoration: none;
    }

    .btn:focus,
    .btn.focus {
      outline: 0;
      box-shadow: none;
    }

    .btn.disabled,
    .btn:disabled {
      opacity: 0.65;
    }

    .btn:not(:disabled):not(.disabled) {
      cursor: pointer;
    }

    .btn:not(:disabled):not(.disabled):active,
    .btn:not(:disabled):not(.disabled).active {
      background-image: none;
    }

    a.btn.disabled,
    fieldset:disabled a.btn {
      pointer-events: none;
    }

    .btn-primary {
      color: #fff;
      background-color: #666EE8;
      border-color: #666EE8;
    }

    .btn-primary:hover {
      color: #fff;
      background-color: #454ee3;
      border-color: #3a44e1;
    }

    .btn-primary:focus,
    .btn-primary.focus {
      box-shadow: 0 0 0 0.2rem rgba(102, 110, 232, 0.5);
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
      color: #fff;
      background-color: #666EE8;
      border-color: #666EE8;
    }

    .btn-primary:not(:disabled):not(.disabled):active,
    .btn-primary:not(:disabled):not(.disabled).active,
    .show>.btn-primary.dropdown-toggle {
      color: #fff;
      background-color: #3a44e1;
      border-color: #2f39e0;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus,
    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(102, 110, 232, 0.5);
    }

    .btn-secondary {
      color: #fff;
      background-color: #6B6F82;
      border-color: #6B6F82;
    }

    .btn-secondary:hover {
      color: #fff;
      background-color: #5a5d6d;
      border-color: #545766;
    }

    .btn-secondary:focus,
    .btn-secondary.focus {
      box-shadow: 0 0 0 0.2rem rgba(107, 111, 130, 0.5);
    }

    .btn-secondary.disabled,
    .btn-secondary:disabled {
      color: #fff;
      background-color: #6B6F82;
      border-color: #6B6F82;
    }

    .btn-secondary:not(:disabled):not(.disabled):active,
    .btn-secondary:not(:disabled):not(.disabled).active,
    .show>.btn-secondary.dropdown-toggle {
      color: #fff;
      background-color: #545766;
      border-color: #4e515f;
    }

    .btn-secondary:not(:disabled):not(.disabled):active:focus,
    .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(107, 111, 130, 0.5);
    }

    .btn-success {
      color: #2A2E30;
      background-color: #28D094;
      border-color: #28D094;
    }

    .btn-success:hover {
      color: #fff;
      background-color: #22b07d;
      border-color: #20a576;
    }

    .btn-success:focus,
    .btn-success.focus {
      box-shadow: 0 0 0 0.2rem rgba(40, 208, 148, 0.5);
    }

    .btn-success.disabled,
    .btn-success:disabled {
      color: #2A2E30;
      background-color: #28D094;
      border-color: #28D094;
    }

    .btn-success:not(:disabled):not(.disabled):active,
    .btn-success:not(:disabled):not(.disabled).active,
    .show>.btn-success.dropdown-toggle {
      color: #fff;
      background-color: #20a576;
      border-color: #1e9b6e;
    }

    .btn-success:not(:disabled):not(.disabled):active:focus,
    .btn-success:not(:disabled):not(.disabled).active:focus,
    .show>.btn-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(40, 208, 148, 0.5);
    }

    .btn-info {
      color: #fff;
      background-color: #1E9FF2;
      border-color: #1E9FF2;
    }

    .btn-info:hover {
      color: #fff;
      background-color: #0d8bdd;
      border-color: #0c84d1;
    }

    .btn-info:focus,
    .btn-info.focus {
      box-shadow: 0 0 0 0.2rem rgba(30, 159, 242, 0.5);
    }

    .btn-info.disabled,
    .btn-info:disabled {
      color: #fff;
      background-color: #1E9FF2;
      border-color: #1E9FF2;
    }

    .btn-info:not(:disabled):not(.disabled):active,
    .btn-info:not(:disabled):not(.disabled).active,
    .show>.btn-info.dropdown-toggle {
      color: #fff;
      background-color: #0c84d1;
      border-color: #0b7cc5;
    }

    .btn-info:not(:disabled):not(.disabled):active:focus,
    .btn-info:not(:disabled):not(.disabled).active:focus,
    .show>.btn-info.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(30, 159, 242, 0.5);
    }

    .btn-warning {
      color: #2A2E30;
      background-color: #FF9149;
      border-color: #FF9149;
    }

    .btn-warning:hover {
      color: #2A2E30;
      background-color: #ff7a23;
      border-color: #ff7216;
    }

    .btn-warning:focus,
    .btn-warning.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 145, 73, 0.5);
    }

    .btn-warning.disabled,
    .btn-warning:disabled {
      color: #2A2E30;
      background-color: #FF9149;
      border-color: #FF9149;
    }

    .btn-warning:not(:disabled):not(.disabled):active,
    .btn-warning:not(:disabled):not(.disabled).active,
    .show>.btn-warning.dropdown-toggle {
      color: #fff;
      background-color: #ff7216;
      border-color: #ff6a09;
    }

    .btn-warning:not(:disabled):not(.disabled):active:focus,
    .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show>.btn-warning.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 145, 73, 0.5);
    }

    .btn-danger {
      color: #fff;
      background-color: #FF4961;
      border-color: #FF4961;
    }

    .btn-danger:hover {
      color: #fff;
      background-color: #ff2340;
      border-color: #ff1635;
    }

    .btn-danger:focus,
    .btn-danger.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 73, 97, 0.5);
    }

    .btn-danger.disabled,
    .btn-danger:disabled {
      color: #fff;
      background-color: #FF4961;
      border-color: #FF4961;
    }

    .btn-danger:not(:disabled):not(.disabled):active,
    .btn-danger:not(:disabled):not(.disabled).active,
    .show>.btn-danger.dropdown-toggle {
      color: #fff;
      background-color: #ff1635;
      border-color: #ff092a;
    }

    .btn-danger:not(:disabled):not(.disabled):active:focus,
    .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show>.btn-danger.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 73, 97, 0.5);
    }

    .btn-light {
      color: #2A2E30;
      background-color: #BABFC7;
      border-color: #BABFC7;
    }

    .btn-light:hover {
      color: #2A2E30;
      background-color: #a5abb6;
      border-color: #9ea5b0;
    }

    .btn-light:focus,
    .btn-light.focus {
      box-shadow: 0 0 0 0.2rem rgba(186, 191, 199, 0.5);
    }

    .btn-light.disabled,
    .btn-light:disabled {
      color: #2A2E30;
      background-color: #BABFC7;
      border-color: #BABFC7;
    }

    .btn-light:not(:disabled):not(.disabled):active,
    .btn-light:not(:disabled):not(.disabled).active,
    .show>.btn-light.dropdown-toggle {
      color: #2A2E30;
      background-color: #9ea5b0;
      border-color: #979eaa;
    }

    .btn-light:not(:disabled):not(.disabled):active:focus,
    .btn-light:not(:disabled):not(.disabled).active:focus,
    .show>.btn-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(186, 191, 199, 0.5);
    }

    .btn-dark {
      color: #fff;
      background-color: #464855;
      border-color: #464855;
    }

    .btn-dark:hover {
      color: #fff;
      background-color: #353640;
      border-color: #2f3039;
    }

    .btn-dark:focus,
    .btn-dark.focus {
      box-shadow: 0 0 0 0.2rem rgba(70, 72, 85, 0.5);
    }

    .btn-dark.disabled,
    .btn-dark:disabled {
      color: #fff;
      background-color: #464855;
      border-color: #464855;
    }

    .btn-dark:not(:disabled):not(.disabled):active,
    .btn-dark:not(:disabled):not(.disabled).active,
    .show>.btn-dark.dropdown-toggle {
      color: #fff;
      background-color: #2f3039;
      border-color: #292a32;
    }

    .btn-dark:not(:disabled):not(.disabled):active:focus,
    .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show>.btn-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(70, 72, 85, 0.5);
    }

    .btn-outline-primary {
      color: #666EE8;
      background-color: transparent;
      background-image: none;
      border-color: #666EE8;
    }

    .btn-outline-primary:hover {
      color: #fff;
      background-color: #666EE8;
      border-color: #666EE8;
    }

    .btn-outline-primary:focus,
    .btn-outline-primary.focus {
      box-shadow: 0 0 0 0.2rem rgba(102, 110, 232, 0.5);
    }

    .btn-outline-primary.disabled,
    .btn-outline-primary:disabled {
      color: #666EE8;
      background-color: transparent;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active,
    .btn-outline-primary:not(:disabled):not(.disabled).active,
    .show>.btn-outline-primary.dropdown-toggle {
      color: #fff;
      background-color: #666EE8;
      border-color: #666EE8;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
    .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(102, 110, 232, 0.5);
    }

    .btn-outline-secondary {
      color: #6B6F82;
      background-color: transparent;
      background-image: none;
      border-color: #6B6F82;
    }

    .btn-outline-secondary:hover {
      color: #fff;
      background-color: #6B6F82;
      border-color: #6B6F82;
    }

    .btn-outline-secondary:focus,
    .btn-outline-secondary.focus {
      box-shadow: 0 0 0 0.2rem rgba(107, 111, 130, 0.5);
    }

    .btn-outline-secondary.disabled,
    .btn-outline-secondary:disabled {
      color: #6B6F82;
      background-color: transparent;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active,
    .btn-outline-secondary:not(:disabled):not(.disabled).active,
    .show>.btn-outline-secondary.dropdown-toggle {
      color: #fff;
      background-color: #6B6F82;
      border-color: #6B6F82;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
    .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(107, 111, 130, 0.5);
    }

    .btn-outline-success {
      color: #28D094;
      background-color: transparent;
      background-image: none;
      border-color: #28D094;
    }

    .btn-outline-success:hover {
      color: #2A2E30;
      background-color: #28D094;
      border-color: #28D094;
    }

    .btn-outline-success:focus,
    .btn-outline-success.focus {
      box-shadow: 0 0 0 0.2rem rgba(40, 208, 148, 0.5);
    }

    .btn-outline-success.disabled,
    .btn-outline-success:disabled {
      color: #28D094;
      background-color: transparent;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active,
    .btn-outline-success:not(:disabled):not(.disabled).active,
    .show>.btn-outline-success.dropdown-toggle {
      color: #2A2E30;
      background-color: #28D094;
      border-color: #28D094;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active:focus,
    .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(40, 208, 148, 0.5);
    }

    .btn-outline-info {
      color: #1E9FF2;
      background-color: transparent;
      background-image: none;
      border-color: #1E9FF2;
    }

    .btn-outline-info:hover {
      color: #fff;
      background-color: #1E9FF2;
      border-color: #1E9FF2;
    }

    .btn-outline-info:focus,
    .btn-outline-info.focus {
      box-shadow: 0 0 0 0.2rem rgba(30, 159, 242, 0.5);
    }

    .btn-outline-info.disabled,
    .btn-outline-info:disabled {
      color: #1E9FF2;
      background-color: transparent;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active,
    .btn-outline-info:not(:disabled):not(.disabled).active,
    .show>.btn-outline-info.dropdown-toggle {
      color: #fff;
      background-color: #1E9FF2;
      border-color: #1E9FF2;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active:focus,
    .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-info.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(30, 159, 242, 0.5);
    }

    .btn-outline-warning {
      color: #FF9149;
      background-color: transparent;
      background-image: none;
      border-color: #FF9149;
    }

    .btn-outline-warning:hover {
      color: #2A2E30;
      background-color: #FF9149;
      border-color: #FF9149;
    }

    .btn-outline-warning:focus,
    .btn-outline-warning.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 145, 73, 0.5);
    }

    .btn-outline-warning.disabled,
    .btn-outline-warning:disabled {
      color: #FF9149;
      background-color: transparent;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active,
    .btn-outline-warning:not(:disabled):not(.disabled).active,
    .show>.btn-outline-warning.dropdown-toggle {
      color: #2A2E30;
      background-color: #FF9149;
      border-color: #FF9149;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
    .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-warning.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 145, 73, 0.5);
    }

    .btn-outline-danger {
      color: #FF4961;
      background-color: transparent;
      background-image: none;
      border-color: #FF4961;
    }

    .btn-outline-danger:hover {
      color: #fff;
      background-color: #FF4961;
      border-color: #FF4961;
    }

    .btn-outline-danger:focus,
    .btn-outline-danger.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 73, 97, 0.5);
    }

    .btn-outline-danger.disabled,
    .btn-outline-danger:disabled {
      color: #FF4961;
      background-color: transparent;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active,
    .btn-outline-danger:not(:disabled):not(.disabled).active,
    .show>.btn-outline-danger.dropdown-toggle {
      color: #fff;
      background-color: #FF4961;
      border-color: #FF4961;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
    .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-danger.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 73, 97, 0.5);
    }

    .btn-outline-light {
      color: #BABFC7;
      background-color: transparent;
      background-image: none;
      border-color: #BABFC7;
    }

    .btn-outline-light:hover {
      color: #2A2E30;
      background-color: #BABFC7;
      border-color: #BABFC7;
    }

    .btn-outline-light:focus,
    .btn-outline-light.focus {
      box-shadow: 0 0 0 0.2rem rgba(186, 191, 199, 0.5);
    }

    .btn-outline-light.disabled,
    .btn-outline-light:disabled {
      color: #BABFC7;
      background-color: transparent;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active,
    .btn-outline-light:not(:disabled):not(.disabled).active,
    .show>.btn-outline-light.dropdown-toggle {
      color: #2A2E30;
      background-color: #BABFC7;
      border-color: #BABFC7;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active:focus,
    .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(186, 191, 199, 0.5);
    }

    .btn-outline-dark {
      color: #464855;
      background-color: transparent;
      background-image: none;
      border-color: #464855;
    }

    .btn-outline-dark:hover {
      color: #fff;
      background-color: #464855;
      border-color: #464855;
    }

    .btn-outline-dark:focus,
    .btn-outline-dark.focus {
      box-shadow: 0 0 0 0.2rem rgba(70, 72, 85, 0.5);
    }

    .btn-outline-dark.disabled,
    .btn-outline-dark:disabled {
      color: #464855;
      background-color: transparent;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active,
    .btn-outline-dark:not(:disabled):not(.disabled).active,
    .show>.btn-outline-dark.dropdown-toggle {
      color: #fff;
      background-color: #464855;
      border-color: #464855;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
    .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(70, 72, 85, 0.5);
    }

    .btn-link {
      font-weight: 400;
      color: #5059e5;
      background-color: transparent;
    }

    .btn-link:hover {
      color: #3a44e1;
      text-decoration: none;
      background-color: transparent;
      border-color: transparent;
    }

    .btn-link:focus,
    .btn-link.focus {
      text-decoration: none;
      border-color: transparent;
      box-shadow: none;
    }

    .btn-link:disabled,
    .btn-link.disabled {
      color: #6B6F82;
    }

    .btn-lg,
    .btn-group-lg>.btn {
      padding: 1rem 1.25rem;
      font-size: 1.25rem;
      line-height: 1.25;
      border-radius: 0.35rem;
    }

    .btn-sm,
    .btn-group-sm>.btn {
      padding: 0.5rem 0.75rem;
      font-size: 0.875rem;
      line-height: 1;
      border-radius: 0.21rem;
    }

    .btn-block {
      display: block;
      width: 100%;
    }

    .btn-block+.btn-block {
      margin-top: 0.5rem;
    }

    input[type="submit"].btn-block,
    input[type="reset"].btn-block,
    input[type="button"].btn-block {
      width: 100%;
    }

    .fade {
      opacity: 0;
      transition: opacity 0.15s linear;
    }

    .fade.show {
      opacity: 1;
    }

    .collapse {
      display: none;
    }

    .collapse.show {
      display: block;
    }

    tr.collapse.show {
      display: table-row;
    }

    tbody.collapse.show {
      display: table-row-group;
    }

    .collapsing {
      position: relative;
      height: 0;
      overflow: hidden;
      transition: height 0.35s ease;
    }

    .dropup,
    .dropdown {
      position: relative;
    }

    .dropdown-toggle::after {
      display: inline-block;
      width: 0;
      height: 0;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0.3em solid;
      border-right: 0.3em solid transparent;
      border-bottom: 0;
      border-left: 0.3em solid transparent;
    }

    .dropdown-toggle:empty::after {
      margin-left: 0;
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1000;
      display: none;
      float: left;
      min-width: 10rem;
      padding: 0.5rem 0;
      margin: 0.125rem 0 0;
      font-size: 1rem;
      color: #6B6F82;
      text-align: left;
      list-style: none;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, 0.15);
      border-radius: 0.25rem;
    }

    .dropup .dropdown-menu {
      margin-top: 0;
      margin-bottom: 0.125rem;
    }

    .dropup .dropdown-toggle::after {
      display: inline-block;
      width: 0;
      height: 0;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0;
      border-right: 0.3em solid transparent;
      border-bottom: 0.3em solid;
      border-left: 0.3em solid transparent;
    }

    .dropup .dropdown-toggle:empty::after {
      margin-left: 0;
    }

    .dropright .dropdown-menu {
      margin-top: 0;
      margin-left: 0.125rem;
    }

    .dropright .dropdown-toggle::after {
      display: inline-block;
      width: 0;
      height: 0;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0.3em solid transparent;
      border-bottom: 0.3em solid transparent;
      border-left: 0.3em solid;
    }

    .dropright .dropdown-toggle:empty::after {
      margin-left: 0;
    }

    .dropright .dropdown-toggle::after {
      vertical-align: 0;
    }

    .dropleft .dropdown-menu {
      margin-top: 0;
      margin-right: 0.125rem;
    }

    .dropleft .dropdown-toggle::after {
      display: inline-block;
      width: 0;
      height: 0;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
    }

    .dropleft .dropdown-toggle::after {
      display: none;
    }

    .dropleft .dropdown-toggle::before {
      display: inline-block;
      width: 0;
      height: 0;
      margin-right: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0.3em solid transparent;
      border-right: 0.3em solid;
      border-bottom: 0.3em solid transparent;
    }

    .dropleft .dropdown-toggle:empty::after {
      margin-left: 0;
    }

    .dropleft .dropdown-toggle::before {
      vertical-align: 0;
    }

    .dropdown-divider {
      height: 0;
      margin: 0.5rem 0;
      overflow: hidden;
      border-top: 1px solid #98A4B8;
    }

    .dropdown-item {
      display: block;
      width: 100%;
      padding: 0.25rem 1.5rem;
      clear: both;
      font-weight: 400;
      color: #2A2E30;
      text-align: inherit;
      white-space: nowrap;
      background-color: transparent;
      border: 0;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
      color: #1e2122;
      text-decoration: none;
      background-color: #F9FAFD;
    }

    .dropdown-item.active,
    .dropdown-item:active {
      color: #fff;
      text-decoration: none;
      background-color: #1E9FF2;
    }

    .dropdown-item.disabled,
    .dropdown-item:disabled {
      color: #6B6F82;
      background-color: transparent;
    }

    .dropdown-menu.show {
      display: block;
    }

    .dropdown-header {
      display: block;
      padding: 0.5rem 1.5rem;
      margin-bottom: 0;
      font-size: 0.875rem;
      color: #6B6F82;
      white-space: nowrap;
    }

    .btn-group,
    .btn-group-vertical {
      position: relative;
      display: inline-flex;
      vertical-align: middle;
    }

    .btn-group>.btn,
    .btn-group-vertical>.btn {
      position: relative;
      flex: 0 1 auto;
    }

    .btn-group>.btn:hover,
    .btn-group-vertical>.btn:hover {
      z-index: 1;
    }

    .btn-group>.btn:focus,
    .btn-group>.btn:active,
    .btn-group>.btn.active,
    .btn-group-vertical>.btn:focus,
    .btn-group-vertical>.btn:active,
    .btn-group-vertical>.btn.active {
      z-index: 1;
    }

    .btn-group .btn+.btn,
    .btn-group .btn+.btn-group,
    .btn-group .btn-group+.btn,
    .btn-group .btn-group+.btn-group,
    .btn-group-vertical .btn+.btn,
    .btn-group-vertical .btn+.btn-group,
    .btn-group-vertical .btn-group+.btn,
    .btn-group-vertical .btn-group+.btn-group {
      margin-left: -1px;
    }

    .btn-toolbar {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
    }

    .btn-toolbar .input-group {
      width: auto;
    }

    .btn-group>.btn:first-child {
      margin-left: 0;
    }

    .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
    .btn-group>.btn-group:not(:last-child)>.btn {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }

    .btn-group>.btn:not(:first-child),
    .btn-group>.btn-group:not(:first-child)>.btn {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }

    .dropdown-toggle-split {
      padding-right: 0.75rem;
      padding-left: 0.75rem;
    }

    .dropdown-toggle-split::after {
      margin-left: 0;
    }

    .btn-sm+.dropdown-toggle-split,
    .btn-group-sm>.btn+.dropdown-toggle-split {
      padding-right: 0.5625rem;
      padding-left: 0.5625rem;
    }

    .btn-lg+.dropdown-toggle-split,
    .btn-group-lg>.btn+.dropdown-toggle-split {
      padding-right: 0.9375rem;
      padding-left: 0.9375rem;
    }

    .btn-group-vertical {
      flex-direction: column;
      align-items: flex-start;
      justify-content: center;
    }

    .btn-group-vertical .btn,
    .btn-group-vertical .btn-group {
      width: 100%;
    }

    .btn-group-vertical>.btn+.btn,
    .btn-group-vertical>.btn+.btn-group,
    .btn-group-vertical>.btn-group+.btn,
    .btn-group-vertical>.btn-group+.btn-group {
      margin-top: -1px;
      margin-left: 0;
    }

    .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
    .btn-group-vertical>.btn-group:not(:last-child)>.btn {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .btn-group-vertical>.btn:not(:first-child),
    .btn-group-vertical>.btn-group:not(:first-child)>.btn {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .btn-group-toggle>.btn,
    .btn-group-toggle>.btn-group>.btn {
      margin-bottom: 0;
    }

    .btn-group-toggle>.btn input[type="radio"],
    .btn-group-toggle>.btn input[type="checkbox"],
    .btn-group-toggle>.btn-group>.btn input[type="radio"],
    .btn-group-toggle>.btn-group>.btn input[type="checkbox"] {
      position: absolute;
      clip: rect(0, 0, 0, 0);
      pointer-events: none;
    }

    .input-group {
      position: relative;
      display: flex;
      flex-wrap: wrap;
      align-items: stretch;
      width: 100%;
    }

    .input-group>.form-control,
    .input-group>.custom-select,
    .input-group>.custom-file {
      position: relative;
      flex: 1 1 auto;
      width: 1%;
      margin-bottom: 0;
    }

    .input-group>.form-control:focus,
    .input-group>.custom-select:focus,
    .input-group>.custom-file:focus {
      z-index: 3;
    }

    .input-group>.form-control+.form-control,
    .input-group>.form-control+.custom-select,
    .input-group>.form-control+.custom-file,
    .input-group>.custom-select+.form-control,
    .input-group>.custom-select+.custom-select,
    .input-group>.custom-select+.custom-file,
    .input-group>.custom-file+.form-control,
    .input-group>.custom-file+.custom-select,
    .input-group>.custom-file+.custom-file {
      margin-left: -1px;
    }

    .input-group>.form-control:not(:last-child),
    .input-group>.custom-select:not(:last-child) {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }

    .input-group>.form-control:not(:first-child),
    .input-group>.custom-select:not(:first-child) {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }

    .input-group>.custom-file {
      display: flex;
      align-items: center;
    }

    .input-group>.custom-file:not(:last-child) .custom-file-label,
    .input-group>.custom-file:not(:last-child) .custom-file-label::before {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }

    .input-group>.custom-file:not(:first-child) .custom-file-label,
    .input-group>.custom-file:not(:first-child) .custom-file-label::before {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }

    .input-group-prepend,
    .input-group-append {
      display: flex;
    }

    .input-group-prepend .btn,
    .input-group-append .btn {
      position: relative;
      z-index: 2;
    }

    .input-group-prepend .btn+.btn,
    .input-group-prepend .btn+.input-group-text,
    .input-group-prepend .input-group-text+.input-group-text,
    .input-group-prepend .input-group-text+.btn,
    .input-group-append .btn+.btn,
    .input-group-append .btn+.input-group-text,
    .input-group-append .input-group-text+.input-group-text,
    .input-group-append .input-group-text+.btn {
      margin-left: -1px;
    }

    .input-group-prepend {
      margin-right: -1px;
    }

    .input-group-append {
      margin-left: -1px;
    }

    .input-group-text {
      display: flex;
      align-items: center;
      padding: 0.75rem 1rem;
      margin-bottom: 0;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.25;
      color: #4E5154;
      text-align: center;
      white-space: nowrap;
      background-color: #F9FAFD;
      border: 1px solid #BABFC7;
      border-radius: 0.25rem;
    }

    .input-group-text input[type="radio"],
    .input-group-text input[type="checkbox"] {
      margin-top: 0;
    }

    .input-group>.input-group-prepend>.btn,
    .input-group>.input-group-prepend>.input-group-text,
    .input-group>.input-group-append:not(:last-child)>.btn,
    .input-group>.input-group-append:not(:last-child)>.input-group-text,
    .input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
    .input-group>.input-group-append:last-child>.input-group-text:not(:last-child) {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }

    .input-group>.input-group-append>.btn,
    .input-group>.input-group-append>.input-group-text,
    .input-group>.input-group-prepend:not(:first-child)>.btn,
    .input-group>.input-group-prepend:not(:first-child)>.input-group-text,
    .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
    .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }

    .custom-control {
      position: relative;
      display: block;
      min-height: 1.45rem;
      padding-left: 1.5rem;
    }

    .custom-control-inline {
      display: inline-flex;
      margin-right: 1rem;
    }

    .custom-control-input {
      position: absolute;
      z-index: -1;
      opacity: 0;
    }

    .custom-control-input:checked~.custom-control-label::before {
      color: #fff;
      background-color: #1E9FF2;
    }

    .custom-control-input:focus~.custom-control-label::before {
      box-shadow: 0 0 0 1px #F9FAFD, none;
    }

    .custom-control-input:active~.custom-control-label::before {
      color: #fff;
      background-color: #c7e7fc;
    }

    .custom-control-input:disabled~.custom-control-label {
      color: #6B6F82;
    }

    .custom-control-input:disabled~.custom-control-label::before {
      background-color: #98A4B8;
    }

    .custom-control-label {
      margin-bottom: 0;
    }

    .custom-control-label::before {
      position: absolute;
      top: 0.225rem;
      left: 0;
      display: block;
      width: 1rem;
      height: 1rem;
      pointer-events: none;
      content: "";
      user-select: none;
      background-color: #626E82;
    }

    .custom-control-label::after {
      position: absolute;
      top: 0.225rem;
      left: 0;
      display: block;
      width: 1rem;
      height: 1rem;
      content: "";
      background-repeat: no-repeat;
      background-position: center center;
      background-size: 50% 50%;
    }

    .custom-checkbox .custom-control-label::before {
      border-radius: 0.25rem;
    }

    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
      background-color: #1E9FF2;
    }

    .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
    }

    .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
      background-color: #1E9FF2;
    }

    .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E");
    }

    .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
      background-color: rgba(102, 110, 232, 0.5);
    }

    .custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
      background-color: rgba(102, 110, 232, 0.5);
    }

    .custom-radio .custom-control-label::before {
      border-radius: 50%;
    }

    .custom-radio .custom-control-input:checked~.custom-control-label::before {
      background-color: #1E9FF2;
    }

    .custom-radio .custom-control-input:checked~.custom-control-label::after {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E");
    }

    .custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
      background-color: rgba(102, 110, 232, 0.5);
    }

    .custom-select {
      display: inline-block;
      width: 100%;
      height: calc(2.75rem + 2px);
      padding: 0.375rem 1.75rem 0.375rem 0.75rem;
      line-height: 1.25;
      color: #4E5154;
      vertical-align: middle;
      background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23464855' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
      background-size: 8px 10px;
      border: 1px solid #BABFC7;
      border-radius: 0.25rem;
      appearance: none;
    }

    .custom-select:focus {
      border-color: #1E9FF2;
      outline: 0;
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(30, 159, 242, 0.5);
    }

    .custom-select:focus::-ms-value {
      color: #4E5154;
      background-color: #fff;
    }

    .custom-select[multiple],
    .custom-select[size]:not([size="1"]) {
      height: auto;
      padding-right: 0.75rem;
      background-image: none;
    }

    .custom-select:disabled {
      color: #6B6F82;
      background-color: #98A4B8;
    }

    .custom-select::-ms-expand {
      opacity: 0;
    }

    .custom-select-sm {
      height: calc(1.875rem + 2px + 10);
      padding-top: 0.375rem;
      padding-bottom: 0.375rem;
      font-size: 75%;
    }

    .custom-select-lg {
      height: calc(3.5625rem + 2px);
      padding-top: 0.375rem;
      padding-bottom: 0.375rem;
      font-size: 125%;
    }

    .custom-file {
      position: relative;
      display: inline-block;
      width: 100%;
      height: calc(2.75rem + 2px);
      margin-bottom: 0;
    }

    .custom-file-input {
      position: relative;
      z-index: 2;
      width: 100%;
      height: calc(2.75rem + 2px);
      margin: 0;
      opacity: 0;
    }

    .custom-file-input:focus~.custom-file-control {
      border-color: #1E9FF2;
      box-shadow: none;
    }

    .custom-file-input:focus~.custom-file-control::before {
      border-color: #1E9FF2;
    }

    .custom-file-input:lang(en)~.custom-file-label::after {
      content: "Browse";
    }

    .custom-file-label {
      position: absolute;
      top: 0;
      right: 0;
      left: 0;
      z-index: 1;
      height: calc(2.75rem + 2px);
      padding: 0.75rem 1rem;
      line-height: 1.25;
      color: #4E5154;
      background-color: #fff;
      border: 1px solid #BABFC7;
      border-radius: 0.25rem;
    }

    .custom-file-label::after {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      z-index: 3;
      display: block;
      height: calc(calc(2.75rem + 2px) - 1px * 2);
      padding: 0.75rem 1rem;
      line-height: 1.25;
      color: #4E5154;
      content: "Browse";
      background-color: #F9FAFD;
      border-left: 1px solid #BABFC7;
      border-radius: 0 0.25rem 0.25rem 0;
    }

    .nav {
      display: flex;
      flex-wrap: wrap;
      padding-left: 0;
      margin-bottom: 0;
      list-style: none;
    }

    .nav-link {
      display: block;
      padding: 0.5rem 1rem;
    }

    .nav-link:hover,
    .nav-link:focus {
      text-decoration: none;
    }

    .nav-link.disabled {
      color: #6B6F82;
    }

    .nav-tabs {
      border-bottom: 1px solid #BABFC7;
    }

    .nav-tabs .nav-item {
      margin-bottom: -1px;
    }

    .nav-tabs .nav-link {
      border: 1px solid transparent;
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
    }

    .nav-tabs .nav-link:hover,
    .nav-tabs .nav-link:focus {
      border-color: #BABFC7 #BABFC7 #BABFC7;
    }

    .nav-tabs .nav-link.disabled {
      color: #6B6F82;
      background-color: transparent;
      border-color: transparent;
    }

    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
      color: #4E5154;
      background-color: #F9FAFD;
      border-color: #BABFC7 #BABFC7 #F9FAFD;
    }

    .nav-tabs .dropdown-menu {
      margin-top: -1px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .nav-pills .nav-link {
      border-radius: 0.25rem;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      color: #fff;
      background-color: #1E9FF2;
    }

    .nav-fill .nav-item {
      flex: 1 1 auto;
      text-align: center;
    }

    .nav-justified .nav-item {
      flex-basis: 0;
      flex-grow: 1;
      text-align: center;
    }

    .tab-content>.tab-pane {
      display: none;
    }

    .tab-content>.active {
      display: block;
    }

    .navbar {
      position: relative;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      padding: 0.5rem 1rem;
    }

    .navbar>.container,
    .navbar>.container-fluid {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
    }

    .navbar-brand {
      display: inline-block;
      padding-top: 0.31875rem;
      padding-bottom: 0.31875rem;
      margin-right: 1rem;
      font-size: 1.25rem;
      line-height: inherit;
      white-space: nowrap;
    }

    .navbar-brand:hover,
    .navbar-brand:focus {
      text-decoration: none;
    }

    .navbar-nav {
      display: flex;
      flex-direction: column;
      padding-left: 0;
      margin-bottom: 0;
      list-style: none;
    }

    .navbar-nav .nav-link {
      padding-right: 0;
      padding-left: 0;
    }

    .navbar-nav .dropdown-menu {
      position: static;
      float: none;
    }

    .navbar-text {
      display: inline-block;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
    }

    .navbar-collapse {
      flex-basis: 100%;
      flex-grow: 1;
      align-items: center;
    }

    .navbar-toggler {
      padding: 0.25rem 0.75rem;
      font-size: 1.25rem;
      line-height: 1;
      background-color: transparent;
      border: 1px solid transparent;
      border-radius: 0.25rem;
    }

    .navbar-toggler:hover,
    .navbar-toggler:focus {
      text-decoration: none;
    }

    .navbar-toggler:not(:disabled):not(.disabled) {
      cursor: pointer;
    }

    .navbar-toggler-icon {
      display: inline-block;
      width: 1.5em;
      height: 1.5em;
      vertical-align: middle;
      content: "";
      background: no-repeat center center;
      background-size: 100% 100%;
    }

    @media (max-width: 575.98px) {

      .navbar-expand-sm>.container,
      .navbar-expand-sm>.container-fluid {
        padding-right: 0;
        padding-left: 0;
      }
    }

    @media (min-width: 576px) {
      .navbar-expand-sm {
        flex-flow: row nowrap;
        justify-content: flex-start;
      }

      .navbar-expand-sm .navbar-nav {
        flex-direction: row;
      }

      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute;
      }

      .navbar-expand-sm .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto;
      }

      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
      }

      .navbar-expand-sm>.container,
      .navbar-expand-sm>.container-fluid {
        flex-wrap: nowrap;
      }

      .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }

      .navbar-expand-sm .navbar-toggler {
        display: none;
      }

      .navbar-expand-sm .dropup .dropdown-menu {
        top: auto;
        bottom: 100%;
      }
    }

    @media (max-width: 767.98px) {

      .navbar-expand-md>.container,
      .navbar-expand-md>.container-fluid {
        padding-right: 0;
        padding-left: 0;
      }
    }

    @media (min-width: 768px) {
      .navbar-expand-md {
        flex-flow: row nowrap;
        justify-content: flex-start;
      }

      .navbar-expand-md .navbar-nav {
        flex-direction: row;
      }

      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute;
      }

      .navbar-expand-md .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto;
      }

      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
      }

      .navbar-expand-md>.container,
      .navbar-expand-md>.container-fluid {
        flex-wrap: nowrap;
      }

      .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }

      .navbar-expand-md .navbar-toggler {
        display: none;
      }

      .navbar-expand-md .dropup .dropdown-menu {
        top: auto;
        bottom: 100%;
      }
    }

    @media (max-width: 991.98px) {

      .navbar-expand-lg>.container,
      .navbar-expand-lg>.container-fluid {
        padding-right: 0;
        padding-left: 0;
      }
    }

    @media (min-width: 992px) {
      .navbar-expand-lg {
        flex-flow: row nowrap;
        justify-content: flex-start;
      }

      .navbar-expand-lg .navbar-nav {
        flex-direction: row;
      }

      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute;
      }

      .navbar-expand-lg .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto;
      }

      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
      }

      .navbar-expand-lg>.container,
      .navbar-expand-lg>.container-fluid {
        flex-wrap: nowrap;
      }

      .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }

      .navbar-expand-lg .navbar-toggler {
        display: none;
      }

      .navbar-expand-lg .dropup .dropdown-menu {
        top: auto;
        bottom: 100%;
      }
    }

    @media (max-width: 1199.98px) {

      .navbar-expand-xl>.container,
      .navbar-expand-xl>.container-fluid {
        padding-right: 0;
        padding-left: 0;
      }
    }

    @media (min-width: 1200px) {
      .navbar-expand-xl {
        flex-flow: row nowrap;
        justify-content: flex-start;
      }

      .navbar-expand-xl .navbar-nav {
        flex-direction: row;
      }

      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute;
      }

      .navbar-expand-xl .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto;
      }

      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
      }

      .navbar-expand-xl>.container,
      .navbar-expand-xl>.container-fluid {
        flex-wrap: nowrap;
      }

      .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }

      .navbar-expand-xl .navbar-toggler {
        display: none;
      }

      .navbar-expand-xl .dropup .dropdown-menu {
        top: auto;
        bottom: 100%;
      }
    }

    .navbar-expand {
      flex-flow: row nowrap;
      justify-content: flex-start;
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid {
      padding-right: 0;
      padding-left: 0;
    }

    .navbar-expand .navbar-nav {
      flex-direction: row;
    }

    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute;
    }

    .navbar-expand .navbar-nav .dropdown-menu-right {
      right: 0;
      left: auto;
    }

    .navbar-expand .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem;
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid {
      flex-wrap: nowrap;
    }

    .navbar-expand .navbar-collapse {
      display: flex !important;
      flex-basis: auto;
    }

    .navbar-expand .navbar-toggler {
      display: none;
    }

    .navbar-expand .dropup .dropdown-menu {
      top: auto;
      bottom: 100%;
    }

    .navbar-light .navbar-brand {
      color: #464855;
    }

    .navbar-light .navbar-brand:hover,
    .navbar-light .navbar-brand:focus {
      color: #464855;
    }

    .navbar-light .navbar-nav .nav-link {
      color: #6B6F82;
    }

    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link:focus {
      color: #626E82;
    }

    .navbar-light .navbar-nav .nav-link.disabled {
      color: #F9FAFD;
    }

    .navbar-light .navbar-nav .show>.nav-link,
    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .nav-link.active {
      color: #464855;
    }

    .navbar-light .navbar-toggler {
      color: #6B6F82;
      border-color: rgba(0, 0, 0, 0.1);
    }

    .navbar-light .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%236B6F82' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .navbar-light .navbar-text {
      color: #6B6F82;
    }

    .navbar-light .navbar-text a {
      color: #464855;
    }

    .navbar-light .navbar-text a:hover,
    .navbar-light .navbar-text a:focus {
      color: #464855;
    }

    .navbar-dark .navbar-brand {
      color: #fff;
    }

    .navbar-dark .navbar-brand:hover,
    .navbar-dark .navbar-brand:focus {
      color: #fff;
    }

    .navbar-dark .navbar-nav .nav-link {
      color: white;
    }

    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link:focus {
      color: rgba(255, 255, 255, 0.9);
    }

    .navbar-dark .navbar-nav .nav-link.disabled {
      color: rgba(255, 255, 255, 0.5);
    }

    .navbar-dark .navbar-nav .show>.nav-link,
    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .nav-link.active {
      color: #fff;
    }

    .navbar-dark .navbar-toggler {
      color: white;
      border-color: rgba(255, 255, 255, 0.1);
    }

    .navbar-dark .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .navbar-dark .navbar-text {
      color: white;
    }

    .navbar-dark .navbar-text a {
      color: #fff;
    }

    .navbar-dark .navbar-text a:hover,
    .navbar-dark .navbar-text a:focus {
      color: #fff;
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, 0.06);
      border-radius: 0.35rem;
    }

    .card>hr {
      margin-right: 0;
      margin-left: 0;
    }

    .card>.list-group:first-child .list-group-item:first-child {
      border-top-left-radius: 0.35rem;
      border-top-right-radius: 0.35rem;
    }

    .card>.list-group:last-child .list-group-item:last-child {
      border-bottom-right-radius: 0.35rem;
      border-bottom-left-radius: 0.35rem;
    }

    .card-body {
      flex: 1 1 auto;
      padding: 1.5rem;
    }

    .card-title {
      margin-bottom: 1.5rem;
    }

    .card-subtitle {
      margin-top: -0.75rem;
      margin-bottom: 0;
    }

    .card-text:last-child {
      margin-bottom: 0;
    }

    .card-link:hover {
      text-decoration: none;
    }

    .card-link+.card-link {
      margin-left: 1.5rem;
    }

    .card-header {
      padding: 1.5rem 1.5rem;
      margin-bottom: 0;
      background-color: #fff;
      border-bottom: 1px solid rgba(0, 0, 0, 0.06);
    }

    .card-header:first-child {
      border-radius: calc(0.35rem - 1px) calc(0.35rem - 1px) 0 0;
    }

    .card-header+.list-group .list-group-item:first-child {
      border-top: 0;
    }

    .card-footer {
      padding: 1.5rem 1.5rem;
      background-color: #fff;
      border-top: 1px solid rgba(0, 0, 0, 0.06);
    }

    .card-footer:last-child {
      border-radius: 0 0 calc(0.35rem - 1px) calc(0.35rem - 1px);
    }

    .card-header-tabs {
      margin-right: -0.75rem;
      margin-bottom: -1.5rem;
      margin-left: -0.75rem;
      border-bottom: 0;
    }

    .card-header-pills {
      margin-right: -0.75rem;
      margin-left: -0.75rem;
    }

    .card-img-overlay {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      padding: 1.25rem;
    }

    .card-img {
      width: 100%;
      border-radius: calc(0.35rem - 1px);
    }

    .card-img-top {
      width: 100%;
      border-top-left-radius: calc(0.35rem - 1px);
      border-top-right-radius: calc(0.35rem - 1px);
    }

    .card-img-bottom {
      width: 100%;
      border-bottom-right-radius: calc(0.35rem - 1px);
      border-bottom-left-radius: calc(0.35rem - 1px);
    }

    .card-deck {
      display: flex;
      flex-direction: column;
    }

    .card-deck .card {
      margin-bottom: 15px;
    }

    @media (min-width: 576px) {
      .card-deck {
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px;
      }

      .card-deck .card {
        display: flex;
        flex: 1 0 0%;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px;
      }
    }

    .card-group {
      display: flex;
      flex-direction: column;
    }

    .card-group>.card {
      margin-bottom: 15px;
    }

    @media (min-width: 576px) {
      .card-group {
        flex-flow: row wrap;
      }

      .card-group>.card {
        flex: 1 0 0%;
        margin-bottom: 0;
      }

      .card-group>.card+.card {
        margin-left: 0;
        border-left: 0;
      }

      .card-group>.card:first-child {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }

      .card-group>.card:first-child .card-img-top,
      .card-group>.card:first-child .card-header {
        border-top-right-radius: 0;
      }

      .card-group>.card:first-child .card-img-bottom,
      .card-group>.card:first-child .card-footer {
        border-bottom-right-radius: 0;
      }

      .card-group>.card:last-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }

      .card-group>.card:last-child .card-img-top,
      .card-group>.card:last-child .card-header {
        border-top-left-radius: 0;
      }

      .card-group>.card:last-child .card-img-bottom,
      .card-group>.card:last-child .card-footer {
        border-bottom-left-radius: 0;
      }

      .card-group>.card:only-child {
        border-radius: 0.35rem;
      }

      .card-group>.card:only-child .card-img-top,
      .card-group>.card:only-child .card-header {
        border-top-left-radius: 0.35rem;
        border-top-right-radius: 0.35rem;
      }

      .card-group>.card:only-child .card-img-bottom,
      .card-group>.card:only-child .card-footer {
        border-bottom-right-radius: 0.35rem;
        border-bottom-left-radius: 0.35rem;
      }

      .card-group>.card:not(:first-child):not(:last-child):not(:only-child) {
        border-radius: 0;
      }

      .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
      .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
      .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,
      .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
        border-radius: 0;
      }
    }

    .card-columns .card {
      margin-bottom: 1.5rem;
    }

    @media (min-width: 576px) {
      .card-columns {
        column-count: 3;
        column-gap: 1.25rem;
      }

      .card-columns .card {
        display: inline-block;
        width: 100%;
      }
    }

    .breadcrumb {
      display: flex;
      flex-wrap: wrap;
      padding: 0.75rem 0rem;
      margin-bottom: 1rem;
      list-style: none;
      background-color: #98A4B8;
      border-radius: 0.25rem;
    }

    .breadcrumb-item+.breadcrumb-item::before {
      display: inline-block;
      padding-right: 0.5rem;
      padding-left: 0.5rem;
      color: #6B6F82;
      content: "/";
    }

    .breadcrumb-item+.breadcrumb-item:hover::before {
      text-decoration: underline;
    }

    .breadcrumb-item+.breadcrumb-item:hover::before {
      text-decoration: none;
    }

    .breadcrumb-item.active {
      color: #6B6F82;
    }

    .pagination {
      display: flex;
      padding-left: 0;
      list-style: none;
      border-radius: 0.25rem;
    }

    .page-link {
      position: relative;
      display: block;
      padding: 0.5rem 0.75rem;
      margin-left: -1px;
      line-height: 1.25;
      color: #5059e5;
      background-color: #fff;
      border: 1px solid #626E82;
    }

    .page-link:hover {
      color: #3a44e1;
      text-decoration: none;
      background-color: #F9FAFD;
      border-color: #626E82;
    }

    .page-link:focus {
      z-index: 2;
      outline: 0;
      box-shadow: none;
    }

    .page-link:not(:disabled):not(.disabled) {
      cursor: pointer;
    }

    .page-item:first-child .page-link {
      margin-left: 0;
      border-top-left-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
    }

    .page-item:last-child .page-link {
      border-top-right-radius: 0.25rem;
      border-bottom-right-radius: 0.25rem;
    }

    .page-item.active .page-link {
      z-index: 1;
      color: #fff;
      background-color: #1E9FF2;
      border-color: #1E9FF2;
    }

    .page-item.disabled .page-link {
      color: #6B6F82;
      pointer-events: none;
      cursor: auto;
      background-color: #fff;
      border-color: #626E82;
    }

    .pagination-lg .page-link {
      padding: 0.75rem 1.5rem;
      font-size: 1.25rem;
      line-height: 1.25;
    }

    .pagination-lg .page-item:first-child .page-link {
      border-top-left-radius: 0.35rem;
      border-bottom-left-radius: 0.35rem;
    }

    .pagination-lg .page-item:last-child .page-link {
      border-top-right-radius: 0.35rem;
      border-bottom-right-radius: 0.35rem;
    }

    .pagination-sm .page-link {
      padding: 0.25rem 0.5rem;
      font-size: 0.875rem;
      line-height: 1;
    }

    .pagination-sm .page-item:first-child .page-link {
      border-top-left-radius: 0.21rem;
      border-bottom-left-radius: 0.21rem;
    }

    .pagination-sm .page-item:last-child .page-link {
      border-top-right-radius: 0.21rem;
      border-bottom-right-radius: 0.21rem;
    }

    .badge {
      display: inline-block;
      padding: 0.35em 0.4em;
      font-size: 85%;
      font-weight: 700;
      line-height: 1;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: 0.25rem;
    }

    .badge:empty {
      display: none;
    }

    .btn .badge {
      position: relative;
      top: -1px;
    }

    .badge-pill {
      padding-right: 0.6em;
      padding-left: 0.6em;
      border-radius: 10rem;
    }

    .badge-primary {
      color: #fff;
      background-color: #666EE8;
    }

    .badge-primary[href]:hover,
    .badge-primary[href]:focus {
      color: #fff;
      text-decoration: none;
      background-color: #3a44e1;
    }

    .badge-secondary {
      color: #fff;
      background-color: #6B6F82;
    }

    .badge-secondary[href]:hover,
    .badge-secondary[href]:focus {
      color: #fff;
      text-decoration: none;
      background-color: #545766;
    }

    .badge-success {
      color: #2A2E30;
      background-color: #28D094;
    }

    .badge-success[href]:hover,
    .badge-success[href]:focus {
      color: #2A2E30;
      text-decoration: none;
      background-color: #20a576;
    }

    .badge-info {
      color: #fff;
      background-color: #1E9FF2;
    }

    .badge-info[href]:hover,
    .badge-info[href]:focus {
      color: #fff;
      text-decoration: none;
      background-color: #0c84d1;
    }

    .badge-warning {
      color: #2A2E30;
      background-color: #FF9149;
    }

    .badge-warning[href]:hover,
    .badge-warning[href]:focus {
      color: #2A2E30;
      text-decoration: none;
      background-color: #ff7216;
    }

    .badge-danger {
      color: #fff;
      background-color: #FF4961;
    }

    .badge-danger[href]:hover,
    .badge-danger[href]:focus {
      color: #fff;
      text-decoration: none;
      background-color: #ff1635;
    }

    .badge-light {
      color: #2A2E30;
      background-color: #BABFC7;
    }

    .badge-light[href]:hover,
    .badge-light[href]:focus {
      color: #2A2E30;
      text-decoration: none;
      background-color: #9ea5b0;
    }

    .badge-dark {
      color: #fff;
      background-color: #464855;
    }

    .badge-dark[href]:hover,
    .badge-dark[href]:focus {
      color: #fff;
      text-decoration: none;
      background-color: #2f3039;
    }

    .jumbotron {
      padding: 2rem 1rem;
      margin-bottom: 2rem;
      background-color: #98A4B8;
      border-radius: 0.35rem;
    }

    @media (min-width: 576px) {
      .jumbotron {
        padding: 4rem 2rem;
      }
    }

    .jumbotron-fluid {
      padding-right: 0;
      padding-left: 0;
      border-radius: 0;
    }

    .alert {
      position: relative;
      padding: 0.75rem 1rem;
      margin-bottom: 1rem;
      border: 1px solid transparent;
      border-radius: 0.25rem;
    }

    .alert-heading {
      color: inherit;
    }

    .alert-link {
      font-weight: 700;
    }

    .alert-dismissible {
      padding-right: 3.5rem;
    }

    .alert-dismissible .close {
      position: absolute;
      top: 0;
      right: 0;
      padding: 0.75rem 1rem;
      color: inherit;
    }

    .alert-primary {
      color: #353979;
      background-color: #e0e2fa;
      border-color: #d4d6f9;
    }

    .alert-primary hr {
      border-top-color: #bec1f6;
    }

    .alert-primary .alert-link {
      color: #252856;
    }

    .alert-secondary {
      color: #383a44;
      background-color: #e1e2e6;
      border-color: #d6d7dc;
    }

    .alert-secondary hr {
      border-top-color: #c8cad0;
    }

    .alert-secondary .alert-link {
      color: #212228;
    }

    .alert-success {
      color: #156c4d;
      background-color: #d4f6ea;
      border-color: #c3f2e1;
    }

    .alert-success hr {
      border-top-color: #aeedd7;
    }

    .alert-success .alert-link {
      color: #0d412f;
    }

    .alert-info {
      color: #10537e;
      background-color: #d2ecfc;
      border-color: #c0e4fb;
    }

    .alert-info hr {
      border-top-color: #a8daf9;
    }

    .alert-info .alert-link {
      color: #0a3551;
    }

    .alert-warning {
      color: #854b26;
      background-color: #ffe9db;
      border-color: #ffe0cc;
    }

    .alert-warning hr {
      border-top-color: #ffd1b3;
    }

    .alert-warning .alert-link {
      color: #5d351b;
    }

    .alert-danger {
      color: #852632;
      background-color: #ffdbdf;
      border-color: #ffccd3;
    }

    .alert-danger hr {
      border-top-color: #ffb3bd;
    }

    .alert-danger .alert-link {
      color: #5d1b23;
    }

    .alert-light {
      color: #616367;
      background-color: #f1f2f4;
      border-color: #ecedef;
    }

    .alert-light hr {
      border-top-color: #dee0e3;
    }

    .alert-light .alert-link {
      color: #484a4d;
    }

    .alert-dark {
      color: #24252c;
      background-color: #dadadd;
      border-color: #cbcccf;
    }

    .alert-dark hr {
      border-top-color: #bebfc3;
    }

    .alert-dark .alert-link {
      color: #0d0d10;
    }

    @keyframes progress-bar-stripes {
      from {
        background-position: 1rem 0;
      }

      to {
        background-position: 0 0;
      }
    }

    .progress {
      display: flex;
      height: 1rem;
      overflow: hidden;
      font-size: 0.75rem;
      background-color: #EEE;
      border-radius: 0.25rem;
    }

    .progress-bar {
      display: flex;
      flex-direction: column;
      justify-content: center;
      color: #fff;
      text-align: center;
      background-color: #666EE8;
      transition: width 0.6s ease;
    }

    .progress-bar-striped {
      background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
      background-size: 1rem 1rem;
    }

    .progress-bar-animated {
      animation: progress-bar-stripes 1s linear infinite;
    }

    .media {
      display: flex;
      align-items: flex-start;
    }

    .media-body {
      flex: 1;
    }

    .list-group {
      display: flex;
      flex-direction: column;
      padding-left: 0;
      margin-bottom: 0;
    }

    .list-group-item-action {
      width: 100%;
      color: #4E5154;
      text-align: inherit;
    }

    .list-group-item-action:hover,
    .list-group-item-action:focus {
      color: #4E5154;
      text-decoration: none;
      background-color: #F9FAFD;
    }

    .list-group-item-action:active {
      color: #6B6F82;
      background-color: #98A4B8;
    }

    .list-group-item {
      position: relative;
      display: block;
      padding: 1.25rem 1.25rem;
      margin-bottom: -1px;
      background-color: #fff;
      border: 1px solid #E4E7ED;
    }

    .list-group-item:first-child {
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
    }

    .list-group-item:last-child {
      margin-bottom: 0;
      border-bottom-right-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
    }

    .list-group-item:hover,
    .list-group-item:focus {
      z-index: 1;
      text-decoration: none;
    }

    .list-group-item.disabled,
    .list-group-item:disabled {
      color: #6B6F82;
      background-color: #fff;
    }

    .list-group-item.active {
      z-index: 2;
      color: #fff;
      background-color: #1E9FF2;
      border-color: #1E9FF2;
    }

    .list-group-flush .list-group-item {
      border-right: 0;
      border-left: 0;
      border-radius: 0;
    }

    .list-group-flush:first-child .list-group-item:first-child {
      border-top: 0;
    }

    .list-group-flush:last-child .list-group-item:last-child {
      border-bottom: 0;
    }

    .list-group-item-primary {
      color: #353979;
      background-color: #d4d6f9;
    }

    .list-group-item-primary.list-group-item-action:hover,
    .list-group-item-primary.list-group-item-action:focus {
      color: #353979;
      background-color: #bec1f6;
    }

    .list-group-item-primary.list-group-item-action.active {
      color: #fff;
      background-color: #353979;
      border-color: #353979;
    }

    .list-group-item-secondary {
      color: #383a44;
      background-color: #d6d7dc;
    }

    .list-group-item-secondary.list-group-item-action:hover,
    .list-group-item-secondary.list-group-item-action:focus {
      color: #383a44;
      background-color: #c8cad0;
    }

    .list-group-item-secondary.list-group-item-action.active {
      color: #fff;
      background-color: #383a44;
      border-color: #383a44;
    }

    .list-group-item-success {
      color: #156c4d;
      background-color: #c3f2e1;
    }

    .list-group-item-success.list-group-item-action:hover,
    .list-group-item-success.list-group-item-action:focus {
      color: #156c4d;
      background-color: #aeedd7;
    }

    .list-group-item-success.list-group-item-action.active {
      color: #fff;
      background-color: #156c4d;
      border-color: #156c4d;
    }

    .list-group-item-info {
      color: #10537e;
      background-color: #c0e4fb;
    }

    .list-group-item-info.list-group-item-action:hover,
    .list-group-item-info.list-group-item-action:focus {
      color: #10537e;
      background-color: #a8daf9;
    }

    .list-group-item-info.list-group-item-action.active {
      color: #fff;
      background-color: #10537e;
      border-color: #10537e;
    }

    .list-group-item-warning {
      color: #854b26;
      background-color: #ffe0cc;
    }

    .list-group-item-warning.list-group-item-action:hover,
    .list-group-item-warning.list-group-item-action:focus {
      color: #854b26;
      background-color: #ffd1b3;
    }

    .list-group-item-warning.list-group-item-action.active {
      color: #fff;
      background-color: #854b26;
      border-color: #854b26;
    }

    .list-group-item-danger {
      color: #852632;
      background-color: #ffccd3;
    }

    .list-group-item-danger.list-group-item-action:hover,
    .list-group-item-danger.list-group-item-action:focus {
      color: #852632;
      background-color: #ffb3bd;
    }

    .list-group-item-danger.list-group-item-action.active {
      color: #fff;
      background-color: #852632;
      border-color: #852632;
    }

    .list-group-item-light {
      color: #616367;
      background-color: #ecedef;
    }

    .list-group-item-light.list-group-item-action:hover,
    .list-group-item-light.list-group-item-action:focus {
      color: #616367;
      background-color: #dee0e3;
    }

    .list-group-item-light.list-group-item-action.active {
      color: #fff;
      background-color: #616367;
      border-color: #616367;
    }

    .list-group-item-dark {
      color: #24252c;
      background-color: #cbcccf;
    }

    .list-group-item-dark.list-group-item-action:hover,
    .list-group-item-dark.list-group-item-action:focus {
      color: #24252c;
      background-color: #bebfc3;
    }

    .list-group-item-dark.list-group-item-action.active {
      color: #fff;
      background-color: #24252c;
      border-color: #24252c;
    }

    .close {
      float: right;
      font-size: 1.5rem;
      font-weight: 700;
      line-height: 1;
      color: #000;
      text-shadow: 0 1px 0 #fff;
      opacity: .5;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      opacity: .75;
    }

    .close:not(:disabled):not(.disabled) {
      cursor: pointer;
    }

    button.close {
      padding: 0;
      background-color: transparent;
      border: 0;
      -webkit-appearance: none;
    }

    .modal-open {
      overflow: hidden;
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
      outline: 0;
    }

    .modal-open .modal {
      overflow-x: hidden;
      overflow-y: auto;
    }

    .modal-dialog {
      position: relative;
      width: auto;
      margin: 0.5rem;
      pointer-events: none;
    }

    .modal.fade .modal-dialog {
      transition: transform 0.3s ease-out;
      transform: translate(0, -25%);
    }

    .modal.show .modal-dialog {
      transform: translate(0, 0);
    }

    .modal-dialog-centered {
      display: flex;
      align-items: center;
      min-height: calc(100% - (0.5rem * 2));
    }

    .modal-content {
      position: relative;
      display: flex;
      flex-direction: column;
      width: 100%;
      pointer-events: auto;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, 0.2);
      border-radius: 0.35rem;
      outline: 0;
    }

    .modal-backdrop {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1040;
      background-color: #000;
    }

    .modal-backdrop.fade {
      opacity: 0;
    }

    .modal-backdrop.show {
      opacity: 0.5;
    }

    .modal-header {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      padding: 1rem;
      border-bottom: 1px solid #98A4B8;
      border-top-left-radius: 0.35rem;
      border-top-right-radius: 0.35rem;
    }

    .modal-header .close {
      padding: 1rem;
      margin: -1rem -1rem -1rem auto;
    }

    .modal-title {
      margin-bottom: 0;
      line-height: 1.45;
    }

    .modal-body {
      position: relative;
      flex: 1 1 auto;
      padding: 1rem;
    }

    .modal-footer {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      padding: 1rem;
      border-top: 1px solid #98A4B8;
    }

    .modal-footer> :not(:first-child) {
      margin-left: .25rem;
    }

    .modal-footer> :not(:last-child) {
      margin-right: .25rem;
    }

    .modal-scrollbar-measure {
      position: absolute;
      top: -9999px;
      width: 50px;
      height: 50px;
      overflow: scroll;
    }

    @media (min-width: 576px) {
      .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
      }

      .modal-dialog-centered {
        min-height: calc(100% - (1.75rem * 2));
      }

      .modal-sm {
        max-width: 300px;
      }
    }

    @media (min-width: 992px) {
      .modal-lg {
        max-width: 800px;
      }
    }

    .tooltip {
      position: absolute;
      z-index: 1070;
      display: block;
      margin: 0;
      font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      font-style: normal;
      font-weight: 400;
      line-height: 1.45;
      text-align: left;
      text-align: start;
      text-decoration: none;
      text-shadow: none;
      text-transform: none;
      letter-spacing: normal;
      word-break: normal;
      word-spacing: normal;
      white-space: normal;
      line-break: auto;
      font-size: 0.875rem;
      word-wrap: break-word;
      opacity: 0;
    }

    .tooltip.show {
      opacity: 0.9;
    }

    .tooltip .arrow {
      position: absolute;
      display: block;
      width: 0.8rem;
      height: 0.4rem;
    }

    .tooltip .arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid;
    }

    .bs-tooltip-top,
    .bs-tooltip-auto[x-placement^="top"] {
      padding: 0.4rem 0;
    }

    .bs-tooltip-top .arrow,
    .bs-tooltip-auto[x-placement^="top"] .arrow {
      bottom: 0;
    }

    .bs-tooltip-top .arrow::before,
    .bs-tooltip-auto[x-placement^="top"] .arrow::before {
      top: 0;
      border-width: 0.4rem 0.4rem 0;
      border-top-color: #000;
    }

    .bs-tooltip-right,
    .bs-tooltip-auto[x-placement^="right"] {
      padding: 0 0.4rem;
    }

    .bs-tooltip-right .arrow,
    .bs-tooltip-auto[x-placement^="right"] .arrow {
      left: 0;
      width: 0.4rem;
      height: 0.8rem;
    }

    .bs-tooltip-right .arrow::before,
    .bs-tooltip-auto[x-placement^="right"] .arrow::before {
      right: 0;
      border-width: 0.4rem 0.4rem 0.4rem 0;
      border-right-color: #000;
    }

    .bs-tooltip-bottom,
    .bs-tooltip-auto[x-placement^="bottom"] {
      padding: 0.4rem 0;
    }

    .bs-tooltip-bottom .arrow,
    .bs-tooltip-auto[x-placement^="bottom"] .arrow {
      top: 0;
    }

    .bs-tooltip-bottom .arrow::before,
    .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
      bottom: 0;
      border-width: 0 0.4rem 0.4rem;
      border-bottom-color: #000;
    }

    .bs-tooltip-left,
    .bs-tooltip-auto[x-placement^="left"] {
      padding: 0 0.4rem;
    }

    .bs-tooltip-left .arrow,
    .bs-tooltip-auto[x-placement^="left"] .arrow {
      right: 0;
      width: 0.4rem;
      height: 0.8rem;
    }

    .bs-tooltip-left .arrow::before,
    .bs-tooltip-auto[x-placement^="left"] .arrow::before {
      left: 0;
      border-width: 0.4rem 0 0.4rem 0.4rem;
      border-left-color: #000;
    }

    .tooltip-inner {
      max-width: 200px;
      padding: 0.25rem 0.5rem;
      color: #fff;
      text-align: center;
      background-color: #000;
      border-radius: 0.25rem;
    }

    .popover {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1060;
      display: block;
      max-width: 276px;
      font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      font-style: normal;
      font-weight: 400;
      line-height: 1.45;
      text-align: left;
      text-align: start;
      text-decoration: none;
      text-shadow: none;
      text-transform: none;
      letter-spacing: normal;
      word-break: normal;
      word-spacing: normal;
      white-space: normal;
      line-break: auto;
      font-size: 0.875rem;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, 0.2);
      border-radius: 0.35rem;
    }

    .popover .arrow {
      position: absolute;
      display: block;
      width: 1rem;
      height: 0.5rem;
      margin: 0 0.35rem;
    }

    .popover .arrow::before,
    .popover .arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid;
    }

    .bs-popover-top,
    .bs-popover-auto[x-placement^="top"] {
      margin-bottom: 0.5rem;
    }

    .bs-popover-top .arrow,
    .bs-popover-auto[x-placement^="top"] .arrow {
      bottom: calc((0.5rem + 1px) * -1);
    }

    .bs-popover-top .arrow::before,
    .bs-popover-auto[x-placement^="top"] .arrow::before,
    .bs-popover-top .arrow::after,
    .bs-popover-auto[x-placement^="top"] .arrow::after {
      border-width: 0.5rem 0.5rem 0;
    }

    .bs-popover-top .arrow::before,
    .bs-popover-auto[x-placement^="top"] .arrow::before {
      bottom: 0;
      border-top-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-top .arrow::after,
    .bs-popover-auto[x-placement^="top"] .arrow::after {
      bottom: 1px;
      border-top-color: #fff;
    }

    .bs-popover-right,
    .bs-popover-auto[x-placement^="right"] {
      margin-left: 0.5rem;
    }

    .bs-popover-right .arrow,
    .bs-popover-auto[x-placement^="right"] .arrow {
      left: calc((0.5rem + 1px) * -1);
      width: 0.5rem;
      height: 1rem;
      margin: 0.35rem 0;
    }

    .bs-popover-right .arrow::before,
    .bs-popover-auto[x-placement^="right"] .arrow::before,
    .bs-popover-right .arrow::after,
    .bs-popover-auto[x-placement^="right"] .arrow::after {
      border-width: 0.5rem 0.5rem 0.5rem 0;
    }

    .bs-popover-right .arrow::before,
    .bs-popover-auto[x-placement^="right"] .arrow::before {
      left: 0;
      border-right-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-right .arrow::after,
    .bs-popover-auto[x-placement^="right"] .arrow::after {
      left: 1px;
      border-right-color: #fff;
    }

    .bs-popover-bottom,
    .bs-popover-auto[x-placement^="bottom"] {
      margin-top: 0.5rem;
    }

    .bs-popover-bottom .arrow,
    .bs-popover-auto[x-placement^="bottom"] .arrow {
      top: calc((0.5rem + 1px) * -1);
    }

    .bs-popover-bottom .arrow::before,
    .bs-popover-auto[x-placement^="bottom"] .arrow::before,
    .bs-popover-bottom .arrow::after,
    .bs-popover-auto[x-placement^="bottom"] .arrow::after {
      border-width: 0 0.5rem 0.5rem 0.5rem;
    }

    .bs-popover-bottom .arrow::before,
    .bs-popover-auto[x-placement^="bottom"] .arrow::before {
      top: 0;
      border-bottom-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-bottom .arrow::after,
    .bs-popover-auto[x-placement^="bottom"] .arrow::after {
      top: 1px;
      border-bottom-color: #fff;
    }

    .bs-popover-bottom .popover-header::before,
    .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
      position: absolute;
      top: 0;
      left: 50%;
      display: block;
      width: 1rem;
      margin-left: -0.5rem;
      content: "";
      border-bottom: 1px solid #f7f7f7;
    }

    .bs-popover-left,
    .bs-popover-auto[x-placement^="left"] {
      margin-right: 0.5rem;
    }

    .bs-popover-left .arrow,
    .bs-popover-auto[x-placement^="left"] .arrow {
      right: calc((0.5rem + 1px) * -1);
      width: 0.5rem;
      height: 1rem;
      margin: 0.35rem 0;
    }

    .bs-popover-left .arrow::before,
    .bs-popover-auto[x-placement^="left"] .arrow::before,
    .bs-popover-left .arrow::after,
    .bs-popover-auto[x-placement^="left"] .arrow::after {
      border-width: 0.5rem 0 0.5rem 0.5rem;
    }

    .bs-popover-left .arrow::before,
    .bs-popover-auto[x-placement^="left"] .arrow::before {
      right: 0;
      border-left-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-left .arrow::after,
    .bs-popover-auto[x-placement^="left"] .arrow::after {
      right: 1px;
      border-left-color: #fff;
    }

    .popover-header {
      padding: 0.5rem 0.75rem;
      margin-bottom: 0;
      font-size: 1rem;
      color: #464855;
      background-color: #f7f7f7;
      border-bottom: 1px solid #ebebeb;
      border-top-left-radius: calc(0.35rem - 1px);
      border-top-right-radius: calc(0.35rem - 1px);
    }

    .popover-header:empty {
      display: none;
    }

    .popover-body {
      padding: 0.5rem 0.75rem;
      color: #6B6F82;
    }

    .carousel {
      position: relative;
    }

    .carousel-inner {
      position: relative;
      width: 100%;
      overflow: hidden;
    }

    .carousel-item {
      position: relative;
      display: none;
      align-items: center;
      width: 100%;
      transition: transform 0.6s ease;
      backface-visibility: hidden;
      perspective: 1000px;
    }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
      display: block;
    }

    .carousel-item-next,
    .carousel-item-prev {
      position: absolute;
      top: 0;
    }

    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
      transform: translateX(0);
    }

    @supports (transform-style: preserve-3d) {

      .carousel-item-next.carousel-item-left,
      .carousel-item-prev.carousel-item-right {
        transform: translate3d(0, 0, 0);
      }
    }

    .carousel-item-next,
    .active.carousel-item-right {
      transform: translateX(100%);
    }

    @supports (transform-style: preserve-3d) {

      .carousel-item-next,
      .active.carousel-item-right {
        transform: translate3d(100%, 0, 0);
      }
    }

    .carousel-item-prev,
    .active.carousel-item-left {
      transform: translateX(-100%);
    }

    @supports (transform-style: preserve-3d) {

      .carousel-item-prev,
      .active.carousel-item-left {
        transform: translate3d(-100%, 0, 0);
      }
    }

    .carousel-control-prev,
    .carousel-control-next {
      position: absolute;
      top: 0;
      bottom: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 15%;
      color: #fff;
      text-align: center;
      opacity: 0.5;
    }

    .carousel-control-prev:hover,
    .carousel-control-prev:focus,
    .carousel-control-next:hover,
    .carousel-control-next:focus {
      color: #fff;
      text-decoration: none;
      outline: 0;
      opacity: .9;
    }

    .carousel-control-prev {
      left: 0;
    }

    .carousel-control-next {
      right: 0;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      display: inline-block;
      width: 20px;
      height: 20px;
      background: transparent no-repeat center center;
      background-size: 100% 100%;
    }

    .carousel-control-prev-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    }

    .carousel-control-next-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    }

    .carousel-indicators {
      position: absolute;
      right: 0;
      bottom: 10px;
      left: 0;
      z-index: 15;
      display: flex;
      justify-content: center;
      padding-left: 0;
      margin-right: 15%;
      margin-left: 15%;
      list-style: none;
    }

    .carousel-indicators li {
      position: relative;
      flex: 0 1 auto;
      width: 30px;
      height: 3px;
      margin-right: 3px;
      margin-left: 3px;
      text-indent: -999px;
      background-color: rgba(255, 255, 255, 0.5);
    }

    .carousel-indicators li::before {
      position: absolute;
      top: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: "";
    }

    .carousel-indicators li::after {
      position: absolute;
      bottom: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: "";
    }

    .carousel-indicators .active {
      background-color: #fff;
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
    }

    .align-baseline {
      vertical-align: baseline !important;
    }

    .align-top {
      vertical-align: top !important;
    }

    .align-middle {
      vertical-align: middle !important;
    }

    .align-bottom {
      vertical-align: bottom !important;
    }

    .align-text-bottom {
      vertical-align: text-bottom !important;
    }

    .align-text-top {
      vertical-align: text-top !important;
    }

    .bg-primary {
      background-color: #666EE8 !important;
    }

    a.bg-primary:hover,
    a.bg-primary:focus,
    button.bg-primary:hover,
    button.bg-primary:focus {
      background-color: #3a44e1 !important;
    }

    .bg-secondary {
      background-color: #6B6F82 !important;
    }

    a.bg-secondary:hover,
    a.bg-secondary:focus,
    button.bg-secondary:hover,
    button.bg-secondary:focus {
      background-color: #545766 !important;
    }

    .bg-success {
      background-color: #28D094 !important;
    }

    a.bg-success:hover,
    a.bg-success:focus,
    button.bg-success:hover,
    button.bg-success:focus {
      background-color: #20a576 !important;
    }

    .bg-info {
      background-color: #1E9FF2 !important;
    }

    a.bg-info:hover,
    a.bg-info:focus,
    button.bg-info:hover,
    button.bg-info:focus {
      background-color: #0c84d1 !important;
    }

    .bg-warning {
      background-color: #FF9149 !important;
    }

    a.bg-warning:hover,
    a.bg-warning:focus,
    button.bg-warning:hover,
    button.bg-warning:focus {
      background-color: #ff7216 !important;
    }

    .bg-danger {
      background-color: #FF4961 !important;
    }

    a.bg-danger:hover,
    a.bg-danger:focus,
    button.bg-danger:hover,
    button.bg-danger:focus {
      background-color: #ff1635 !important;
    }

    .bg-light {
      background-color: #BABFC7 !important;
    }

    a.bg-light:hover,
    a.bg-light:focus,
    button.bg-light:hover,
    button.bg-light:focus {
      background-color: #9ea5b0 !important;
    }

    .bg-dark {
      background-color: #464855 !important;
    }

    a.bg-dark:hover,
    a.bg-dark:focus,
    button.bg-dark:hover,
    button.bg-dark:focus {
      background-color: #2f3039 !important;
    }

    .bg-white {
      background-color: #fff !important;
    }

    .bg-transparent {
      background-color: transparent !important;
    }

    .border {
      border: 1px solid #626E82 !important;
    }

    .border-top {
      border-top: 1px solid #626E82 !important;
    }

    .border-right {
      border-right: 1px solid #626E82 !important;
    }

    .border-bottom {
      border-bottom: 1px solid #626E82 !important;
    }

    .border-left {
      border-left: 1px solid #626E82 !important;
    }

    .border-0 {
      border: 0 !important;
    }

    .border-top-0 {
      border-top: 0 !important;
    }

    .border-right-0 {
      border-right: 0 !important;
    }

    .border-bottom-0 {
      border-bottom: 0 !important;
    }

    .border-left-0 {
      border-left: 0 !important;
    }

    .border-primary {
      border-color: #666EE8 !important;
    }

    .border-secondary {
      border-color: #6B6F82 !important;
    }

    .border-success {
      border-color: #28D094 !important;
    }

    .border-info {
      border-color: #1E9FF2 !important;
    }

    .border-warning {
      border-color: #FF9149 !important;
    }

    .border-danger {
      border-color: #FF4961 !important;
    }

    .border-light {
      border-color: #BABFC7 !important;
    }

    .border-dark {
      border-color: #464855 !important;
    }

    .border-white {
      border-color: #fff !important;
    }

    .rounded {
      border-radius: 0.35rem !important;
    }

    .rounded-top {
      border-top-left-radius: 0.35rem !important;
      border-top-right-radius: 0.35rem !important;
    }

    .rounded-right {
      border-top-right-radius: 0.35rem !important;
      border-bottom-right-radius: 0.35rem !important;
    }

    .rounded-bottom {
      border-bottom-right-radius: 0.35rem !important;
      border-bottom-left-radius: 0.35rem !important;
    }

    .rounded-left {
      border-top-left-radius: 0.35rem !important;
      border-bottom-left-radius: 0.35rem !important;
    }

    .rounded-circle {
      border-radius: 50% !important;
    }

    .rounded-0 {
      border-radius: 0 !important;
    }

    .clearfix::after {
      display: block;
      clear: both;
      content: "";
    }

    .d-none {
      display: none !important;
    }

    .d-inline {
      display: inline !important;
    }

    .d-inline-block {
      display: inline-block !important;
    }

    .d-block {
      display: block !important;
    }

    .d-table {
      display: table !important;
    }

    .d-table-row {
      display: table-row !important;
    }

    .d-table-cell {
      display: table-cell !important;
    }

    .d-flex {
      display: flex !important;
    }

    .d-inline-flex {
      display: inline-flex !important;
    }

    @media (min-width: 576px) {
      .d-sm-none {
        display: none !important;
      }

      .d-sm-inline {
        display: inline !important;
      }

      .d-sm-inline-block {
        display: inline-block !important;
      }

      .d-sm-block {
        display: block !important;
      }

      .d-sm-table {
        display: table !important;
      }

      .d-sm-table-row {
        display: table-row !important;
      }

      .d-sm-table-cell {
        display: table-cell !important;
      }

      .d-sm-flex {
        display: flex !important;
      }

      .d-sm-inline-flex {
        display: inline-flex !important;
      }
    }

    @media (min-width: 768px) {
      .d-md-none {
        display: none !important;
      }

      .d-md-inline {
        display: inline !important;
      }

      .d-md-inline-block {
        display: inline-block !important;
      }

      .d-md-block {
        display: block !important;
      }

      .d-md-table {
        display: table !important;
      }

      .d-md-table-row {
        display: table-row !important;
      }

      .d-md-table-cell {
        display: table-cell !important;
      }

      .d-md-flex {
        display: flex !important;
      }

      .d-md-inline-flex {
        display: inline-flex !important;
      }
    }

    @media (min-width: 992px) {
      .d-lg-none {
        display: none !important;
      }

      .d-lg-inline {
        display: inline !important;
      }

      .d-lg-inline-block {
        display: inline-block !important;
      }

      .d-lg-block {
        display: block !important;
      }

      .d-lg-table {
        display: table !important;
      }

      .d-lg-table-row {
        display: table-row !important;
      }

      .d-lg-table-cell {
        display: table-cell !important;
      }

      .d-lg-flex {
        display: flex !important;
      }

      .d-lg-inline-flex {
        display: inline-flex !important;
      }
    }

    @media (min-width: 1200px) {
      .d-xl-none {
        display: none !important;
      }

      .d-xl-inline {
        display: inline !important;
      }

      .d-xl-inline-block {
        display: inline-block !important;
      }

      .d-xl-block {
        display: block !important;
      }

      .d-xl-table {
        display: table !important;
      }

      .d-xl-table-row {
        display: table-row !important;
      }

      .d-xl-table-cell {
        display: table-cell !important;
      }

      .d-xl-flex {
        display: flex !important;
      }

      .d-xl-inline-flex {
        display: inline-flex !important;
      }
    }

    @media print {
      .d-print-none {
        display: none !important;
      }

      .d-print-inline {
        display: inline !important;
      }

      .d-print-inline-block {
        display: inline-block !important;
      }

      .d-print-block {
        display: block !important;
      }

      .d-print-table {
        display: table !important;
      }

      .d-print-table-row {
        display: table-row !important;
      }

      .d-print-table-cell {
        display: table-cell !important;
      }

      .d-print-flex {
        display: flex !important;
      }

      .d-print-inline-flex {
        display: inline-flex !important;
      }
    }

    .embed-responsive {
      position: relative;
      display: block;
      width: 100%;
      padding: 0;
      overflow: hidden;
    }

    .embed-responsive::before {
      display: block;
      content: "";
    }

    .embed-responsive .embed-responsive-item,
    .embed-responsive iframe,
    .embed-responsive embed,
    .embed-responsive object,
    .embed-responsive video {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }

    .embed-responsive-21by9::before {
      padding-top: 42.857143%;
    }

    .embed-responsive-16by9::before {
      padding-top: 56.25%;
    }

    .embed-responsive-4by3::before {
      padding-top: 75%;
    }

    .embed-responsive-1by1::before {
      padding-top: 100%;
    }

    .flex-row {
      flex-direction: row !important;
    }

    .flex-column {
      flex-direction: column !important;
    }

    .flex-row-reverse {
      flex-direction: row-reverse !important;
    }

    .flex-column-reverse {
      flex-direction: column-reverse !important;
    }

    .flex-wrap {
      flex-wrap: wrap !important;
    }

    .flex-nowrap {
      flex-wrap: nowrap !important;
    }

    .flex-wrap-reverse {
      flex-wrap: wrap-reverse !important;
    }

    .justify-content-start {
      justify-content: flex-start !important;
    }

    .justify-content-end {
      justify-content: flex-end !important;
    }

    .justify-content-center {
      justify-content: center !important;
    }

    .justify-content-between {
      justify-content: space-between !important;
    }

    .justify-content-around {
      justify-content: space-around !important;
    }

    .align-items-start {
      align-items: flex-start !important;
    }

    .align-items-end {
      align-items: flex-end !important;
    }

    .align-items-center {
      align-items: center !important;
    }

    .align-items-baseline {
      align-items: baseline !important;
    }

    .align-items-stretch {
      align-items: stretch !important;
    }

    .align-content-start {
      align-content: flex-start !important;
    }

    .align-content-end {
      align-content: flex-end !important;
    }

    .align-content-center {
      align-content: center !important;
    }

    .align-content-between {
      align-content: space-between !important;
    }

    .align-content-around {
      align-content: space-around !important;
    }

    .align-content-stretch {
      align-content: stretch !important;
    }

    .align-self-auto {
      align-self: auto !important;
    }

    .align-self-start {
      align-self: flex-start !important;
    }

    .align-self-end {
      align-self: flex-end !important;
    }

    .align-self-center {
      align-self: center !important;
    }

    .align-self-baseline {
      align-self: baseline !important;
    }

    .align-self-stretch {
      align-self: stretch !important;
    }

    @media (min-width: 576px) {
      .flex-sm-row {
        flex-direction: row !important;
      }

      .flex-sm-column {
        flex-direction: column !important;
      }

      .flex-sm-row-reverse {
        flex-direction: row-reverse !important;
      }

      .flex-sm-column-reverse {
        flex-direction: column-reverse !important;
      }

      .flex-sm-wrap {
        flex-wrap: wrap !important;
      }

      .flex-sm-nowrap {
        flex-wrap: nowrap !important;
      }

      .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }

      .justify-content-sm-start {
        justify-content: flex-start !important;
      }

      .justify-content-sm-end {
        justify-content: flex-end !important;
      }

      .justify-content-sm-center {
        justify-content: center !important;
      }

      .justify-content-sm-between {
        justify-content: space-between !important;
      }

      .justify-content-sm-around {
        justify-content: space-around !important;
      }

      .align-items-sm-start {
        align-items: flex-start !important;
      }

      .align-items-sm-end {
        align-items: flex-end !important;
      }

      .align-items-sm-center {
        align-items: center !important;
      }

      .align-items-sm-baseline {
        align-items: baseline !important;
      }

      .align-items-sm-stretch {
        align-items: stretch !important;
      }

      .align-content-sm-start {
        align-content: flex-start !important;
      }

      .align-content-sm-end {
        align-content: flex-end !important;
      }

      .align-content-sm-center {
        align-content: center !important;
      }

      .align-content-sm-between {
        align-content: space-between !important;
      }

      .align-content-sm-around {
        align-content: space-around !important;
      }

      .align-content-sm-stretch {
        align-content: stretch !important;
      }

      .align-self-sm-auto {
        align-self: auto !important;
      }

      .align-self-sm-start {
        align-self: flex-start !important;
      }

      .align-self-sm-end {
        align-self: flex-end !important;
      }

      .align-self-sm-center {
        align-self: center !important;
      }

      .align-self-sm-baseline {
        align-self: baseline !important;
      }

      .align-self-sm-stretch {
        align-self: stretch !important;
      }
    }

    @media (min-width: 768px) {
      .flex-md-row {
        flex-direction: row !important;
      }

      .flex-md-column {
        flex-direction: column !important;
      }

      .flex-md-row-reverse {
        flex-direction: row-reverse !important;
      }

      .flex-md-column-reverse {
        flex-direction: column-reverse !important;
      }

      .flex-md-wrap {
        flex-wrap: wrap !important;
      }

      .flex-md-nowrap {
        flex-wrap: nowrap !important;
      }

      .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }

      .justify-content-md-start {
        justify-content: flex-start !important;
      }

      .justify-content-md-end {
        justify-content: flex-end !important;
      }

      .justify-content-md-center {
        justify-content: center !important;
      }

      .justify-content-md-between {
        justify-content: space-between !important;
      }

      .justify-content-md-around {
        justify-content: space-around !important;
      }

      .align-items-md-start {
        align-items: flex-start !important;
      }

      .align-items-md-end {
        align-items: flex-end !important;
      }

      .align-items-md-center {
        align-items: center !important;
      }

      .align-items-md-baseline {
        align-items: baseline !important;
      }

      .align-items-md-stretch {
        align-items: stretch !important;
      }

      .align-content-md-start {
        align-content: flex-start !important;
      }

      .align-content-md-end {
        align-content: flex-end !important;
      }

      .align-content-md-center {
        align-content: center !important;
      }

      .align-content-md-between {
        align-content: space-between !important;
      }

      .align-content-md-around {
        align-content: space-around !important;
      }

      .align-content-md-stretch {
        align-content: stretch !important;
      }

      .align-self-md-auto {
        align-self: auto !important;
      }

      .align-self-md-start {
        align-self: flex-start !important;
      }

      .align-self-md-end {
        align-self: flex-end !important;
      }

      .align-self-md-center {
        align-self: center !important;
      }

      .align-self-md-baseline {
        align-self: baseline !important;
      }

      .align-self-md-stretch {
        align-self: stretch !important;
      }
    }

    @media (min-width: 992px) {
      .flex-lg-row {
        flex-direction: row !important;
      }

      .flex-lg-column {
        flex-direction: column !important;
      }

      .flex-lg-row-reverse {
        flex-direction: row-reverse !important;
      }

      .flex-lg-column-reverse {
        flex-direction: column-reverse !important;
      }

      .flex-lg-wrap {
        flex-wrap: wrap !important;
      }

      .flex-lg-nowrap {
        flex-wrap: nowrap !important;
      }

      .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }

      .justify-content-lg-start {
        justify-content: flex-start !important;
      }

      .justify-content-lg-end {
        justify-content: flex-end !important;
      }

      .justify-content-lg-center {
        justify-content: center !important;
      }

      .justify-content-lg-between {
        justify-content: space-between !important;
      }

      .justify-content-lg-around {
        justify-content: space-around !important;
      }

      .align-items-lg-start {
        align-items: flex-start !important;
      }

      .align-items-lg-end {
        align-items: flex-end !important;
      }

      .align-items-lg-center {
        align-items: center !important;
      }

      .align-items-lg-baseline {
        align-items: baseline !important;
      }

      .align-items-lg-stretch {
        align-items: stretch !important;
      }

      .align-content-lg-start {
        align-content: flex-start !important;
      }

      .align-content-lg-end {
        align-content: flex-end !important;
      }

      .align-content-lg-center {
        align-content: center !important;
      }

      .align-content-lg-between {
        align-content: space-between !important;
      }

      .align-content-lg-around {
        align-content: space-around !important;
      }

      .align-content-lg-stretch {
        align-content: stretch !important;
      }

      .align-self-lg-auto {
        align-self: auto !important;
      }

      .align-self-lg-start {
        align-self: flex-start !important;
      }

      .align-self-lg-end {
        align-self: flex-end !important;
      }

      .align-self-lg-center {
        align-self: center !important;
      }

      .align-self-lg-baseline {
        align-self: baseline !important;
      }

      .align-self-lg-stretch {
        align-self: stretch !important;
      }
    }

    @media (min-width: 1200px) {
      .flex-xl-row {
        flex-direction: row !important;
      }

      .flex-xl-column {
        flex-direction: column !important;
      }

      .flex-xl-row-reverse {
        flex-direction: row-reverse !important;
      }

      .flex-xl-column-reverse {
        flex-direction: column-reverse !important;
      }

      .flex-xl-wrap {
        flex-wrap: wrap !important;
      }

      .flex-xl-nowrap {
        flex-wrap: nowrap !important;
      }

      .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }

      .justify-content-xl-start {
        justify-content: flex-start !important;
      }

      .justify-content-xl-end {
        justify-content: flex-end !important;
      }

      .justify-content-xl-center {
        justify-content: center !important;
      }

      .justify-content-xl-between {
        justify-content: space-between !important;
      }

      .justify-content-xl-around {
        justify-content: space-around !important;
      }

      .align-items-xl-start {
        align-items: flex-start !important;
      }

      .align-items-xl-end {
        align-items: flex-end !important;
      }

      .align-items-xl-center {
        align-items: center !important;
      }

      .align-items-xl-baseline {
        align-items: baseline !important;
      }

      .align-items-xl-stretch {
        align-items: stretch !important;
      }

      .align-content-xl-start {
        align-content: flex-start !important;
      }

      .align-content-xl-end {
        align-content: flex-end !important;
      }

      .align-content-xl-center {
        align-content: center !important;
      }

      .align-content-xl-between {
        align-content: space-between !important;
      }

      .align-content-xl-around {
        align-content: space-around !important;
      }

      .align-content-xl-stretch {
        align-content: stretch !important;
      }

      .align-self-xl-auto {
        align-self: auto !important;
      }

      .align-self-xl-start {
        align-self: flex-start !important;
      }

      .align-self-xl-end {
        align-self: flex-end !important;
      }

      .align-self-xl-center {
        align-self: center !important;
      }

      .align-self-xl-baseline {
        align-self: baseline !important;
      }

      .align-self-xl-stretch {
        align-self: stretch !important;
      }
    }

    .float-left {
      float: left !important;
    }

    .float-right {
      float: right !important;
    }

    .float-none {
      float: none !important;
    }

    @media (min-width: 576px) {
      .float-sm-left {
        float: left !important;
      }

      .float-sm-right {
        float: right !important;
      }

      .float-sm-none {
        float: none !important;
      }
    }

    @media (min-width: 768px) {
      .float-md-left {
        float: left !important;
      }

      .float-md-right {
        float: right !important;
      }

      .float-md-none {
        float: none !important;
      }
    }

    @media (min-width: 992px) {
      .float-lg-left {
        float: left !important;
      }

      .float-lg-right {
        float: right !important;
      }

      .float-lg-none {
        float: none !important;
      }
    }

    @media (min-width: 1200px) {
      .float-xl-left {
        float: left !important;
      }

      .float-xl-right {
        float: right !important;
      }

      .float-xl-none {
        float: none !important;
      }
    }

    .position-static {
      position: static !important;
    }

    .position-relative {
      position: relative !important;
    }

    .position-absolute {
      position: absolute !important;
    }

    .position-fixed {
      position: fixed !important;
    }

    .position-sticky {
      position: sticky !important;
    }

    .fixed-top {
      position: fixed;
      top: 0;
      right: 0;
      left: 0;
      z-index: 1030;
    }

    .fixed-bottom {
      position: fixed;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1030;
    }

    @supports (position: sticky) {
      .sticky-top {
        position: sticky;
        top: 0;
        z-index: 1020;
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
      clip-path: inset(50%);
      border: 0;
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
      position: static;
      width: auto;
      height: auto;
      overflow: visible;
      clip: auto;
      white-space: normal;
      clip-path: none;
    }

    .w-25 {
      width: 25% !important;
    }

    .w-50 {
      width: 50% !important;
    }

    .w-75 {
      width: 75% !important;
    }

    .w-100 {
      width: 100% !important;
    }

    .h-25 {
      height: 25% !important;
    }

    .h-50 {
      height: 50% !important;
    }

    .h-75 {
      height: 75% !important;
    }

    .h-100 {
      height: 100% !important;
    }

    .mw-100 {
      max-width: 100% !important;
    }

    .mh-100 {
      max-height: 100% !important;
    }

    .m-0 {
      margin: 0 !important;
    }

    .mt-0,
    .my-0 {
      margin-top: 0 !important;
    }

    .mr-0,
    .mx-0 {
      margin-right: 0 !important;
    }

    .mb-0,
    .my-0 {
      margin-bottom: 0 !important;
    }

    .ml-0,
    .mx-0 {
      margin-left: 0 !important;
    }

    .m-1 {
      margin: 1rem !important;
    }

    .mt-1,
    .my-1 {
      margin-top: 1rem !important;
    }

    .mr-1,
    .mx-1 {
      margin-right: 1rem !important;
    }

    .mb-1,
    .my-1 {
      margin-bottom: 1rem !important;
    }

    .ml-1,
    .mx-1 {
      margin-left: 1rem !important;
    }

    .m-2 {
      margin: 1.5rem !important;
    }

    .mt-2,
    .my-2 {
      margin-top: 1.5rem !important;
    }

    .mr-2,
    .mx-2 {
      margin-right: 1.5rem !important;
    }

    .mb-2,
    .my-2 {
      margin-bottom: 1.5rem !important;
    }

    .ml-2,
    .mx-2 {
      margin-left: 1.5rem !important;
    }

    .m-3 {
      margin: 3rem !important;
    }

    .mt-3,
    .my-3 {
      margin-top: 3rem !important;
    }

    .mr-3,
    .mx-3 {
      margin-right: 3rem !important;
    }

    .mb-3,
    .my-3 {
      margin-bottom: 3rem !important;
    }

    .ml-3,
    .mx-3 {
      margin-left: 3rem !important;
    }

    .m-4 {
      margin: 3.5rem !important;
    }

    .mt-4,
    .my-4 {
      margin-top: 3.5rem !important;
    }

    .mr-4,
    .mx-4 {
      margin-right: 3.5rem !important;
    }

    .mb-4,
    .my-4 {
      margin-bottom: 3.5rem !important;
    }

    .ml-4,
    .mx-4 {
      margin-left: 3.5rem !important;
    }

    .m-5 {
      margin: 4rem !important;
    }

    .mt-5,
    .my-5 {
      margin-top: 4rem !important;
    }

    .mr-5,
    .mx-5 {
      margin-right: 4rem !important;
    }

    .mb-5,
    .my-5 {
      margin-bottom: 4rem !important;
    }

    .ml-5,
    .mx-5 {
      margin-left: 4rem !important;
    }

    .p-0 {
      padding: 0 !important;
    }

    .pt-0,
    .py-0 {
      padding-top: 0 !important;
    }

    .pr-0,
    .px-0 {
      padding-right: 0 !important;
    }

    .pb-0,
    .py-0 {
      padding-bottom: 0 !important;
    }

    .pl-0,
    .px-0 {
      padding-left: 0 !important;
    }

    .p-1 {
      padding: 1rem !important;
    }

    .pt-1,
    .py-1 {
      padding-top: 1rem !important;
    }

    .pr-1,
    .px-1 {
      padding-right: 1rem !important;
    }

    .pb-1,
    .py-1 {
      padding-bottom: 1rem !important;
    }

    .pl-1,
    .px-1 {
      padding-left: 1rem !important;
    }

    .p-2 {
      padding: 1.5rem !important;
    }

    .pt-2,
    .py-2 {
      padding-top: 1.5rem !important;
    }

    .pr-2,
    .px-2 {
      padding-right: 1.5rem !important;
    }

    .pb-2,
    .py-2 {
      padding-bottom: 1.5rem !important;
    }

    .pl-2,
    .px-2 {
      padding-left: 1.5rem !important;
    }

    .p-3 {
      padding: 3rem !important;
    }

    .pt-3,
    .py-3 {
      padding-top: 3rem !important;
    }

    .pr-3,
    .px-3 {
      padding-right: 3rem !important;
    }

    .pb-3,
    .py-3 {
      padding-bottom: 3rem !important;
    }

    .pl-3,
    .px-3 {
      padding-left: 3rem !important;
    }

    .p-4 {
      padding: 3.5rem !important;
    }

    .pt-4,
    .py-4 {
      padding-top: 3.5rem !important;
    }

    .pr-4,
    .px-4 {
      padding-right: 3.5rem !important;
    }

    .pb-4,
    .py-4 {
      padding-bottom: 3.5rem !important;
    }

    .pl-4,
    .px-4 {
      padding-left: 3.5rem !important;
    }

    .p-5 {
      padding: 4rem !important;
    }

    .pt-5,
    .py-5 {
      padding-top: 4rem !important;
    }

    .pr-5,
    .px-5 {
      padding-right: 4rem !important;
    }

    .pb-5,
    .py-5 {
      padding-bottom: 4rem !important;
    }

    .pl-5,
    .px-5 {
      padding-left: 4rem !important;
    }

    .m-auto {
      margin: auto !important;
    }

    .mt-auto,
    .my-auto {
      margin-top: auto !important;
    }

    .mr-auto,
    .mx-auto {
      margin-right: auto !important;
    }

    .mb-auto,
    .my-auto {
      margin-bottom: auto !important;
    }

    .ml-auto,
    .mx-auto {
      margin-left: auto !important;
    }

    @media (min-width: 576px) {
      .m-sm-0 {
        margin: 0 !important;
      }

      .mt-sm-0,
      .my-sm-0 {
        margin-top: 0 !important;
      }

      .mr-sm-0,
      .mx-sm-0 {
        margin-right: 0 !important;
      }

      .mb-sm-0,
      .my-sm-0 {
        margin-bottom: 0 !important;
      }

      .ml-sm-0,
      .mx-sm-0 {
        margin-left: 0 !important;
      }

      .m-sm-1 {
        margin: 1rem !important;
      }

      .mt-sm-1,
      .my-sm-1 {
        margin-top: 1rem !important;
      }

      .mr-sm-1,
      .mx-sm-1 {
        margin-right: 1rem !important;
      }

      .mb-sm-1,
      .my-sm-1 {
        margin-bottom: 1rem !important;
      }

      .ml-sm-1,
      .mx-sm-1 {
        margin-left: 1rem !important;
      }

      .m-sm-2 {
        margin: 1.5rem !important;
      }

      .mt-sm-2,
      .my-sm-2 {
        margin-top: 1.5rem !important;
      }

      .mr-sm-2,
      .mx-sm-2 {
        margin-right: 1.5rem !important;
      }

      .mb-sm-2,
      .my-sm-2 {
        margin-bottom: 1.5rem !important;
      }

      .ml-sm-2,
      .mx-sm-2 {
        margin-left: 1.5rem !important;
      }

      .m-sm-3 {
        margin: 3rem !important;
      }

      .mt-sm-3,
      .my-sm-3 {
        margin-top: 3rem !important;
      }

      .mr-sm-3,
      .mx-sm-3 {
        margin-right: 3rem !important;
      }

      .mb-sm-3,
      .my-sm-3 {
        margin-bottom: 3rem !important;
      }

      .ml-sm-3,
      .mx-sm-3 {
        margin-left: 3rem !important;
      }

      .m-sm-4 {
        margin: 3.5rem !important;
      }

      .mt-sm-4,
      .my-sm-4 {
        margin-top: 3.5rem !important;
      }

      .mr-sm-4,
      .mx-sm-4 {
        margin-right: 3.5rem !important;
      }

      .mb-sm-4,
      .my-sm-4 {
        margin-bottom: 3.5rem !important;
      }

      .ml-sm-4,
      .mx-sm-4 {
        margin-left: 3.5rem !important;
      }

      .m-sm-5 {
        margin: 4rem !important;
      }

      .mt-sm-5,
      .my-sm-5 {
        margin-top: 4rem !important;
      }

      .mr-sm-5,
      .mx-sm-5 {
        margin-right: 4rem !important;
      }

      .mb-sm-5,
      .my-sm-5 {
        margin-bottom: 4rem !important;
      }

      .ml-sm-5,
      .mx-sm-5 {
        margin-left: 4rem !important;
      }

      .p-sm-0 {
        padding: 0 !important;
      }

      .pt-sm-0,
      .py-sm-0 {
        padding-top: 0 !important;
      }

      .pr-sm-0,
      .px-sm-0 {
        padding-right: 0 !important;
      }

      .pb-sm-0,
      .py-sm-0 {
        padding-bottom: 0 !important;
      }

      .pl-sm-0,
      .px-sm-0 {
        padding-left: 0 !important;
      }

      .p-sm-1 {
        padding: 1rem !important;
      }

      .pt-sm-1,
      .py-sm-1 {
        padding-top: 1rem !important;
      }

      .pr-sm-1,
      .px-sm-1 {
        padding-right: 1rem !important;
      }

      .pb-sm-1,
      .py-sm-1 {
        padding-bottom: 1rem !important;
      }

      .pl-sm-1,
      .px-sm-1 {
        padding-left: 1rem !important;
      }

      .p-sm-2 {
        padding: 1.5rem !important;
      }

      .pt-sm-2,
      .py-sm-2 {
        padding-top: 1.5rem !important;
      }

      .pr-sm-2,
      .px-sm-2 {
        padding-right: 1.5rem !important;
      }

      .pb-sm-2,
      .py-sm-2 {
        padding-bottom: 1.5rem !important;
      }

      .pl-sm-2,
      .px-sm-2 {
        padding-left: 1.5rem !important;
      }

      .p-sm-3 {
        padding: 3rem !important;
      }

      .pt-sm-3,
      .py-sm-3 {
        padding-top: 3rem !important;
      }

      .pr-sm-3,
      .px-sm-3 {
        padding-right: 3rem !important;
      }

      .pb-sm-3,
      .py-sm-3 {
        padding-bottom: 3rem !important;
      }

      .pl-sm-3,
      .px-sm-3 {
        padding-left: 3rem !important;
      }

      .p-sm-4 {
        padding: 3.5rem !important;
      }

      .pt-sm-4,
      .py-sm-4 {
        padding-top: 3.5rem !important;
      }

      .pr-sm-4,
      .px-sm-4 {
        padding-right: 3.5rem !important;
      }

      .pb-sm-4,
      .py-sm-4 {
        padding-bottom: 3.5rem !important;
      }

      .pl-sm-4,
      .px-sm-4 {
        padding-left: 3.5rem !important;
      }

      .p-sm-5 {
        padding: 4rem !important;
      }

      .pt-sm-5,
      .py-sm-5 {
        padding-top: 4rem !important;
      }

      .pr-sm-5,
      .px-sm-5 {
        padding-right: 4rem !important;
      }

      .pb-sm-5,
      .py-sm-5 {
        padding-bottom: 4rem !important;
      }

      .pl-sm-5,
      .px-sm-5 {
        padding-left: 4rem !important;
      }

      .m-sm-auto {
        margin: auto !important;
      }

      .mt-sm-auto,
      .my-sm-auto {
        margin-top: auto !important;
      }

      .mr-sm-auto,
      .mx-sm-auto {
        margin-right: auto !important;
      }

      .mb-sm-auto,
      .my-sm-auto {
        margin-bottom: auto !important;
      }

      .ml-sm-auto,
      .mx-sm-auto {
        margin-left: auto !important;
      }
    }

    @media (min-width: 768px) {
      .m-md-0 {
        margin: 0 !important;
      }

      .mt-md-0,
      .my-md-0 {
        margin-top: 0 !important;
      }

      .mr-md-0,
      .mx-md-0 {
        margin-right: 0 !important;
      }

      .mb-md-0,
      .my-md-0 {
        margin-bottom: 0 !important;
      }

      .ml-md-0,
      .mx-md-0 {
        margin-left: 0 !important;
      }

      .m-md-1 {
        margin: 1rem !important;
      }

      .mt-md-1,
      .my-md-1 {
        margin-top: 1rem !important;
      }

      .mr-md-1,
      .mx-md-1 {
        margin-right: 1rem !important;
      }

      .mb-md-1,
      .my-md-1 {
        margin-bottom: 1rem !important;
      }

      .ml-md-1,
      .mx-md-1 {
        margin-left: 1rem !important;
      }

      .m-md-2 {
        margin: 1.5rem !important;
      }

      .mt-md-2,
      .my-md-2 {
        margin-top: 1.5rem !important;
      }

      .mr-md-2,
      .mx-md-2 {
        margin-right: 1.5rem !important;
      }

      .mb-md-2,
      .my-md-2 {
        margin-bottom: 1.5rem !important;
      }

      .ml-md-2,
      .mx-md-2 {
        margin-left: 1.5rem !important;
      }

      .m-md-3 {
        margin: 3rem !important;
      }

      .mt-md-3,
      .my-md-3 {
        margin-top: 3rem !important;
      }

      .mr-md-3,
      .mx-md-3 {
        margin-right: 3rem !important;
      }

      .mb-md-3,
      .my-md-3 {
        margin-bottom: 3rem !important;
      }

      .ml-md-3,
      .mx-md-3 {
        margin-left: 3rem !important;
      }

      .m-md-4 {
        margin: 3.5rem !important;
      }

      .mt-md-4,
      .my-md-4 {
        margin-top: 3.5rem !important;
      }

      .mr-md-4,
      .mx-md-4 {
        margin-right: 3.5rem !important;
      }

      .mb-md-4,
      .my-md-4 {
        margin-bottom: 3.5rem !important;
      }

      .ml-md-4,
      .mx-md-4 {
        margin-left: 3.5rem !important;
      }

      .m-md-5 {
        margin: 4rem !important;
      }

      .mt-md-5,
      .my-md-5 {
        margin-top: 4rem !important;
      }

      .mr-md-5,
      .mx-md-5 {
        margin-right: 4rem !important;
      }

      .mb-md-5,
      .my-md-5 {
        margin-bottom: 4rem !important;
      }

      .ml-md-5,
      .mx-md-5 {
        margin-left: 4rem !important;
      }

      .p-md-0 {
        padding: 0 !important;
      }

      .pt-md-0,
      .py-md-0 {
        padding-top: 0 !important;
      }

      .pr-md-0,
      .px-md-0 {
        padding-right: 0 !important;
      }

      .pb-md-0,
      .py-md-0 {
        padding-bottom: 0 !important;
      }

      .pl-md-0,
      .px-md-0 {
        padding-left: 0 !important;
      }

      .p-md-1 {
        padding: 1rem !important;
      }

      .pt-md-1,
      .py-md-1 {
        padding-top: 1rem !important;
      }

      .pr-md-1,
      .px-md-1 {
        padding-right: 1rem !important;
      }

      .pb-md-1,
      .py-md-1 {
        padding-bottom: 1rem !important;
      }

      .pl-md-1,
      .px-md-1 {
        padding-left: 1rem !important;
      }

      .p-md-2 {
        padding: 1.5rem !important;
      }

      .pt-md-2,
      .py-md-2 {
        padding-top: 1.5rem !important;
      }

      .pr-md-2,
      .px-md-2 {
        padding-right: 1.5rem !important;
      }

      .pb-md-2,
      .py-md-2 {
        padding-bottom: 1.5rem !important;
      }

      .pl-md-2,
      .px-md-2 {
        padding-left: 1.5rem !important;
      }

      .p-md-3 {
        padding: 3rem !important;
      }

      .pt-md-3,
      .py-md-3 {
        padding-top: 3rem !important;
      }

      .pr-md-3,
      .px-md-3 {
        padding-right: 3rem !important;
      }

      .pb-md-3,
      .py-md-3 {
        padding-bottom: 3rem !important;
      }

      .pl-md-3,
      .px-md-3 {
        padding-left: 3rem !important;
      }

      .p-md-4 {
        padding: 3.5rem !important;
      }

      .pt-md-4,
      .py-md-4 {
        padding-top: 3.5rem !important;
      }

      .pr-md-4,
      .px-md-4 {
        padding-right: 3.5rem !important;
      }

      .pb-md-4,
      .py-md-4 {
        padding-bottom: 3.5rem !important;
      }

      .pl-md-4,
      .px-md-4 {
        padding-left: 3.5rem !important;
      }

      .p-md-5 {
        padding: 4rem !important;
      }

      .pt-md-5,
      .py-md-5 {
        padding-top: 4rem !important;
      }

      .pr-md-5,
      .px-md-5 {
        padding-right: 4rem !important;
      }

      .pb-md-5,
      .py-md-5 {
        padding-bottom: 4rem !important;
      }

      .pl-md-5,
      .px-md-5 {
        padding-left: 4rem !important;
      }

      .m-md-auto {
        margin: auto !important;
      }

      .mt-md-auto,
      .my-md-auto {
        margin-top: auto !important;
      }

      .mr-md-auto,
      .mx-md-auto {
        margin-right: auto !important;
      }

      .mb-md-auto,
      .my-md-auto {
        margin-bottom: auto !important;
      }

      .ml-md-auto,
      .mx-md-auto {
        margin-left: auto !important;
      }
    }

    @media (min-width: 992px) {
      .m-lg-0 {
        margin: 0 !important;
      }

      .mt-lg-0,
      .my-lg-0 {
        margin-top: 0 !important;
      }

      .mr-lg-0,
      .mx-lg-0 {
        margin-right: 0 !important;
      }

      .mb-lg-0,
      .my-lg-0 {
        margin-bottom: 0 !important;
      }

      .ml-lg-0,
      .mx-lg-0 {
        margin-left: 0 !important;
      }

      .m-lg-1 {
        margin: 1rem !important;
      }

      .mt-lg-1,
      .my-lg-1 {
        margin-top: 1rem !important;
      }

      .mr-lg-1,
      .mx-lg-1 {
        margin-right: 1rem !important;
      }

      .mb-lg-1,
      .my-lg-1 {
        margin-bottom: 1rem !important;
      }

      .ml-lg-1,
      .mx-lg-1 {
        margin-left: 1rem !important;
      }

      .m-lg-2 {
        margin: 1.5rem !important;
      }

      .mt-lg-2,
      .my-lg-2 {
        margin-top: 1.5rem !important;
      }

      .mr-lg-2,
      .mx-lg-2 {
        margin-right: 1.5rem !important;
      }

      .mb-lg-2,
      .my-lg-2 {
        margin-bottom: 1.5rem !important;
      }

      .ml-lg-2,
      .mx-lg-2 {
        margin-left: 1.5rem !important;
      }

      .m-lg-3 {
        margin: 3rem !important;
      }

      .mt-lg-3,
      .my-lg-3 {
        margin-top: 3rem !important;
      }

      .mr-lg-3,
      .mx-lg-3 {
        margin-right: 3rem !important;
      }

      .mb-lg-3,
      .my-lg-3 {
        margin-bottom: 3rem !important;
      }

      .ml-lg-3,
      .mx-lg-3 {
        margin-left: 3rem !important;
      }

      .m-lg-4 {
        margin: 3.5rem !important;
      }

      .mt-lg-4,
      .my-lg-4 {
        margin-top: 3.5rem !important;
      }

      .mr-lg-4,
      .mx-lg-4 {
        margin-right: 3.5rem !important;
      }

      .mb-lg-4,
      .my-lg-4 {
        margin-bottom: 3.5rem !important;
      }

      .ml-lg-4,
      .mx-lg-4 {
        margin-left: 3.5rem !important;
      }

      .m-lg-5 {
        margin: 4rem !important;
      }

      .mt-lg-5,
      .my-lg-5 {
        margin-top: 4rem !important;
      }

      .mr-lg-5,
      .mx-lg-5 {
        margin-right: 4rem !important;
      }

      .mb-lg-5,
      .my-lg-5 {
        margin-bottom: 4rem !important;
      }

      .ml-lg-5,
      .mx-lg-5 {
        margin-left: 4rem !important;
      }

      .p-lg-0 {
        padding: 0 !important;
      }

      .pt-lg-0,
      .py-lg-0 {
        padding-top: 0 !important;
      }

      .pr-lg-0,
      .px-lg-0 {
        padding-right: 0 !important;
      }

      .pb-lg-0,
      .py-lg-0 {
        padding-bottom: 0 !important;
      }

      .pl-lg-0,
      .px-lg-0 {
        padding-left: 0 !important;
      }

      .p-lg-1 {
        padding: 1rem !important;
      }

      .pt-lg-1,
      .py-lg-1 {
        padding-top: 1rem !important;
      }

      .pr-lg-1,
      .px-lg-1 {
        padding-right: 1rem !important;
      }

      .pb-lg-1,
      .py-lg-1 {
        padding-bottom: 1rem !important;
      }

      .pl-lg-1,
      .px-lg-1 {
        padding-left: 1rem !important;
      }

      .p-lg-2 {
        padding: 1.5rem !important;
      }

      .pt-lg-2,
      .py-lg-2 {
        padding-top: 1.5rem !important;
      }

      .pr-lg-2,
      .px-lg-2 {
        padding-right: 1.5rem !important;
      }

      .pb-lg-2,
      .py-lg-2 {
        padding-bottom: 1.5rem !important;
      }

      .pl-lg-2,
      .px-lg-2 {
        padding-left: 1.5rem !important;
      }

      .p-lg-3 {
        padding: 3rem !important;
      }

      .pt-lg-3,
      .py-lg-3 {
        padding-top: 3rem !important;
      }

      .pr-lg-3,
      .px-lg-3 {
        padding-right: 3rem !important;
      }

      .pb-lg-3,
      .py-lg-3 {
        padding-bottom: 3rem !important;
      }

      .pl-lg-3,
      .px-lg-3 {
        padding-left: 3rem !important;
      }

      .p-lg-4 {
        padding: 3.5rem !important;
      }

      .pt-lg-4,
      .py-lg-4 {
        padding-top: 3.5rem !important;
      }

      .pr-lg-4,
      .px-lg-4 {
        padding-right: 3.5rem !important;
      }

      .pb-lg-4,
      .py-lg-4 {
        padding-bottom: 3.5rem !important;
      }

      .pl-lg-4,
      .px-lg-4 {
        padding-left: 3.5rem !important;
      }

      .p-lg-5 {
        padding: 4rem !important;
      }

      .pt-lg-5,
      .py-lg-5 {
        padding-top: 4rem !important;
      }

      .pr-lg-5,
      .px-lg-5 {
        padding-right: 4rem !important;
      }

      .pb-lg-5,
      .py-lg-5 {
        padding-bottom: 4rem !important;
      }

      .pl-lg-5,
      .px-lg-5 {
        padding-left: 4rem !important;
      }

      .m-lg-auto {
        margin: auto !important;
      }

      .mt-lg-auto,
      .my-lg-auto {
        margin-top: auto !important;
      }

      .mr-lg-auto,
      .mx-lg-auto {
        margin-right: auto !important;
      }

      .mb-lg-auto,
      .my-lg-auto {
        margin-bottom: auto !important;
      }

      .ml-lg-auto,
      .mx-lg-auto {
        margin-left: auto !important;
      }
    }

    @media (min-width: 1200px) {
      .m-xl-0 {
        margin: 0 !important;
      }

      .mt-xl-0,
      .my-xl-0 {
        margin-top: 0 !important;
      }

      .mr-xl-0,
      .mx-xl-0 {
        margin-right: 0 !important;
      }

      .mb-xl-0,
      .my-xl-0 {
        margin-bottom: 0 !important;
      }

      .ml-xl-0,
      .mx-xl-0 {
        margin-left: 0 !important;
      }

      .m-xl-1 {
        margin: 1rem !important;
      }

      .mt-xl-1,
      .my-xl-1 {
        margin-top: 1rem !important;
      }

      .mr-xl-1,
      .mx-xl-1 {
        margin-right: 1rem !important;
      }

      .mb-xl-1,
      .my-xl-1 {
        margin-bottom: 1rem !important;
      }

      .ml-xl-1,
      .mx-xl-1 {
        margin-left: 1rem !important;
      }

      .m-xl-2 {
        margin: 1.5rem !important;
      }

      .mt-xl-2,
      .my-xl-2 {
        margin-top: 1.5rem !important;
      }

      .mr-xl-2,
      .mx-xl-2 {
        margin-right: 1.5rem !important;
      }

      .mb-xl-2,
      .my-xl-2 {
        margin-bottom: 1.5rem !important;
      }

      .ml-xl-2,
      .mx-xl-2 {
        margin-left: 1.5rem !important;
      }

      .m-xl-3 {
        margin: 3rem !important;
      }

      .mt-xl-3,
      .my-xl-3 {
        margin-top: 3rem !important;
      }

      .mr-xl-3,
      .mx-xl-3 {
        margin-right: 3rem !important;
      }

      .mb-xl-3,
      .my-xl-3 {
        margin-bottom: 3rem !important;
      }

      .ml-xl-3,
      .mx-xl-3 {
        margin-left: 3rem !important;
      }

      .m-xl-4 {
        margin: 3.5rem !important;
      }

      .mt-xl-4,
      .my-xl-4 {
        margin-top: 3.5rem !important;
      }

      .mr-xl-4,
      .mx-xl-4 {
        margin-right: 3.5rem !important;
      }

      .mb-xl-4,
      .my-xl-4 {
        margin-bottom: 3.5rem !important;
      }

      .ml-xl-4,
      .mx-xl-4 {
        margin-left: 3.5rem !important;
      }

      .m-xl-5 {
        margin: 4rem !important;
      }

      .mt-xl-5,
      .my-xl-5 {
        margin-top: 4rem !important;
      }

      .mr-xl-5,
      .mx-xl-5 {
        margin-right: 4rem !important;
      }

      .mb-xl-5,
      .my-xl-5 {
        margin-bottom: 4rem !important;
      }

      .ml-xl-5,
      .mx-xl-5 {
        margin-left: 4rem !important;
      }

      .p-xl-0 {
        padding: 0 !important;
      }

      .pt-xl-0,
      .py-xl-0 {
        padding-top: 0 !important;
      }

      .pr-xl-0,
      .px-xl-0 {
        padding-right: 0 !important;
      }

      .pb-xl-0,
      .py-xl-0 {
        padding-bottom: 0 !important;
      }

      .pl-xl-0,
      .px-xl-0 {
        padding-left: 0 !important;
      }

      .p-xl-1 {
        padding: 1rem !important;
      }

      .pt-xl-1,
      .py-xl-1 {
        padding-top: 1rem !important;
      }

      .pr-xl-1,
      .px-xl-1 {
        padding-right: 1rem !important;
      }

      .pb-xl-1,
      .py-xl-1 {
        padding-bottom: 1rem !important;
      }

      .pl-xl-1,
      .px-xl-1 {
        padding-left: 1rem !important;
      }

      .p-xl-2 {
        padding: 1.5rem !important;
      }

      .pt-xl-2,
      .py-xl-2 {
        padding-top: 1.5rem !important;
      }

      .pr-xl-2,
      .px-xl-2 {
        padding-right: 1.5rem !important;
      }

      .pb-xl-2,
      .py-xl-2 {
        padding-bottom: 1.5rem !important;
      }

      .pl-xl-2,
      .px-xl-2 {
        padding-left: 1.5rem !important;
      }

      .p-xl-3 {
        padding: 3rem !important;
      }

      .pt-xl-3,
      .py-xl-3 {
        padding-top: 3rem !important;
      }

      .pr-xl-3,
      .px-xl-3 {
        padding-right: 3rem !important;
      }

      .pb-xl-3,
      .py-xl-3 {
        padding-bottom: 3rem !important;
      }

      .pl-xl-3,
      .px-xl-3 {
        padding-left: 3rem !important;
      }

      .p-xl-4 {
        padding: 3.5rem !important;
      }

      .pt-xl-4,
      .py-xl-4 {
        padding-top: 3.5rem !important;
      }

      .pr-xl-4,
      .px-xl-4 {
        padding-right: 3.5rem !important;
      }

      .pb-xl-4,
      .py-xl-4 {
        padding-bottom: 3.5rem !important;
      }

      .pl-xl-4,
      .px-xl-4 {
        padding-left: 3.5rem !important;
      }

      .p-xl-5 {
        padding: 4rem !important;
      }

      .pt-xl-5,
      .py-xl-5 {
        padding-top: 4rem !important;
      }

      .pr-xl-5,
      .px-xl-5 {
        padding-right: 4rem !important;
      }

      .pb-xl-5,
      .py-xl-5 {
        padding-bottom: 4rem !important;
      }

      .pl-xl-5,
      .px-xl-5 {
        padding-left: 4rem !important;
      }

      .m-xl-auto {
        margin: auto !important;
      }

      .mt-xl-auto,
      .my-xl-auto {
        margin-top: auto !important;
      }

      .mr-xl-auto,
      .mx-xl-auto {
        margin-right: auto !important;
      }

      .mb-xl-auto,
      .my-xl-auto {
        margin-bottom: auto !important;
      }

      .ml-xl-auto,
      .mx-xl-auto {
        margin-left: auto !important;
      }
    }

    .text-justify {
      text-align: justify !important;
    }

    .text-nowrap {
      white-space: nowrap !important;
    }

    .text-truncate {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .text-left {
      text-align: left !important;
    }

    .text-right {
      text-align: right !important;
    }

    .text-center {
      text-align: center !important;
    }

    @media (min-width: 576px) {
      .text-sm-left {
        text-align: left !important;
      }

      .text-sm-right {
        text-align: right !important;
      }

      .text-sm-center {
        text-align: center !important;
      }
    }

    @media (min-width: 768px) {
      .text-md-left {
        text-align: left !important;
      }

      .text-md-right {
        text-align: right !important;
      }

      .text-md-center {
        text-align: center !important;
      }
    }

    @media (min-width: 992px) {
      .text-lg-left {
        text-align: left !important;
      }

      .text-lg-right {
        text-align: right !important;
      }

      .text-lg-center {
        text-align: center !important;
      }
    }

    @media (min-width: 1200px) {
      .text-xl-left {
        text-align: left !important;
      }

      .text-xl-right {
        text-align: right !important;
      }

      .text-xl-center {
        text-align: center !important;
      }
    }

    .text-lowercase {
      text-transform: lowercase !important;
    }

    .text-uppercase {
      text-transform: uppercase !important;
    }

    .text-capitalize {
      text-transform: capitalize !important;
    }

    .font-weight-light {
      font-weight: 300 !important;
    }

    .font-weight-normal {
      font-weight: 400 !important;
    }

    .font-weight-bold {
      font-weight: 700 !important;
    }

    .font-italic {
      font-style: italic !important;
    }

    .text-white {
      color: #fff !important;
    }

    .text-primary {
      color: #666EE8 !important;
    }

    a.text-primary:hover,
    a.text-primary:focus {
      color: #3a44e1 !important;
    }

    .text-secondary {
      color: #6B6F82 !important;
    }

    a.text-secondary:hover,
    a.text-secondary:focus {
      color: #545766 !important;
    }

    .text-success {
      color: #28D094 !important;
    }

    a.text-success:hover,
    a.text-success:focus {
      color: #20a576 !important;
    }

    .text-info {
      color: #1E9FF2 !important;
    }

    a.text-info:hover,
    a.text-info:focus {
      color: #0c84d1 !important;
    }

    .text-warning {
      color: #FF9149 !important;
    }

    a.text-warning:hover,
    a.text-warning:focus {
      color: #ff7216 !important;
    }

    .text-danger {
      color: #FF4961 !important;
    }

    a.text-danger:hover,
    a.text-danger:focus {
      color: #ff1635 !important;
    }

    .text-light {
      color: #BABFC7 !important;
    }

    a.text-light:hover,
    a.text-light:focus {
      color: #9ea5b0 !important;
    }

    .text-dark {
      color: #464855 !important;
    }

    a.text-dark:hover,
    a.text-dark:focus {
      color: #2f3039 !important;
    }

    .text-muted {
      color: #6B6F82 !important;
    }

    .text-hide {
      font: 0/0 a;
      color: transparent;
      text-shadow: none;
      background-color: transparent;
      border: 0;
    }

    .visible {
      visibility: visible !important;
    }

    .invisible {
      visibility: hidden !important;
    }
  </style>

  <!-- BEGIN MODERN CSS-->
  <style>
    html {
      font-size: 14px;
      height: 100%;
    }

    html body {
      height: 100%;
      background-color: #F4F5FA;
      direction: ltr;
    }

    html body.fixed-navbar {
      padding-top: 5rem;
    }

    html body a {
      color: #1E9FF2;
    }

    html body a:hover {
      color: #0c84d1;
    }

    html body .content {
      padding: 0;
      position: relative;
      transition: 300ms ease all;
      backface-visibility: hidden;
      min-height: calc(100% - 32px);
    }

    html body .content.app-content {
      overflow: hidden;
    }

    html body .content .content-wrapper {
      padding: 2.2rem;
    }

    html body .content .content-wrapper .content-header-title {
      font-weight: 500;
      letter-spacing: 1px;
      color: #464855;
    }

    html body .la {
      font-size: 1.4rem;
    }

    html body[data-col="1-column"]:not(.vertical-content-menu) .content,
    html body[data-col="1-column"]:not(.vertical-content-menu) .footer {
      margin-left: 0px !important;
    }

    html body[data-col="1-column"].horizontal-layout .content,
    html body[data-col="1-column"].horizontal-layout .footer {
      margin: 0 auto !important;
    }

    html body[data-col="1-column"].vertical-content-menu .content-body {
      margin-left: 0px !important;
    }

    html body.boxed-layout {
      padding-left: 0;
      padding-right: 0;
    }

    html body.bg-full-screen-image {
      background: url(../../app-assets/images/backgrounds/bg-2.jpg) no-repeat center center fixed;
      background-size: cover;
    }

    html body .pace .pace-progress {
      background: #FF4961;
    }

    /*
  * Blank page
  */
    .blank-page .content-wrapper {
      padding: 0 !important;
    }

    .blank-page .content-wrapper .flexbox-container {
      display: flex;
      align-items: center;
      height: 100vh;
    }

    .app-content.center-layout {
      overflow: hidden;
    }

    @media (max-width: 767.98px) {
      html body .content .content-wrapper {
        padding: 1rem;
      }

      html body footer {
        text-align: center;
      }
    }

    /*
  * Col 3 layout for detached and general type
  */
    @media (min-width: 992px) {
      body .content-right {
        width: calc(100% - 300px);
        float: right;
      }

      body .content-left {
        width: calc(100% - 300px);
        float: left;
      }

      body .content-detached {
        width: 100%;
      }

      body .content-detached.content-right {
        float: right;
        margin-left: -300px;
      }

      body .content-detached.content-right .content-body {
        margin-left: 320px;
      }

      body .content-detached.content-left {
        float: left;
        margin-right: -300px;
      }

      body .content-detached.content-left .content-body {
        margin-right: 320px;
      }

      .sidebar-right.sidebar-sticky {
        float: right !important;
        margin-left: -300px;
        width: 300px !important;
      }

      [data-col="content-left-sidebar"] .sticky-wrapper {
        float: left;
      }

      .vertical-content-menu .content .sidebar-left {
        margin-left: 288px;
      }

      .vertical-content-menu .content .content-detached.content-right {
        float: right;
        width: calc(100% - 300px);
        margin-left: -300px;
      }

      .vertical-content-menu .content .content-detached.content-right .content-body {
        margin-left: 295px;
      }

      .vertical-content-menu .content .content-detached.content-left {
        float: left;
        width: 100%;
        margin-right: -300px;
      }

      .vertical-content-menu .content .content-detached.content-left .content-body {
        margin-right: 320px;
      }
    }

    /*=========================================================================================
	File Name: sidebar.scss
	Description: content sidebar specific scss.
	----------------------------------------------------------------------------------------
	Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
	Version: 1.0
	Author: PIXINVENT
	Author URL: http://www.themeforest.net/user/pixinvent
  ==========================================================================================*/
    .sidebar {
      position: relative;
      width: 100%;
    }

    @media (min-width: 992px) {
      .sidebar {
        vertical-align: top;
        width: 300px;
      }
    }

    .sidebar-fixed {
      position: fixed;
      height: 100%;
      overflow: scroll;
    }

    @media (min-width: 992px) {
      .sidebar-left {
        float: left;
      }

      .sidebar-right {
        float: right;
      }
    }

    .horizontal-menu-padding .header-navbar .navbar-container {
      padding: 0;
    }

    .header-navbar .navbar-container {
      height: auto;
    }

    footer.footer {
      padding: 0.8rem;
    }

    footer.navbar-shadow {
      box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.1);
    }

    footer.navbar-border {
      border-top: 1px solid #E4E7ED;
    }

    footer.footer-transparent {
      border: none;
    }

    footer.footer-light {
      background: #FFFFFF;
    }

    footer.footer-dark {
      background: #2C303B;
      color: #fff;
    }

    /*=========================================================================================
	File Name: navigations.scss
	Description: Common mixin for menus, contain dark and light version scss.
	----------------------------------------------------------------------------------------
	Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
	Version: 1.0
	Author: PIXINVENT
	Author URL: http://www.themeforest.net/user/pixinvent
  ==========================================================================================*/
    .main-menu {
      z-index: 1000;
      position: absolute;
      display: table-cell;
    }

    .main-menu.menu-light {
      color: #6B6F82;
      background: #FFFFFF;
      border-right: 1px solid #E4E7ED;
    }

    .main-menu.menu-light .main-menu-header {
      padding: 20px;
    }

    .main-menu.menu-light .main-menu-header .menu-search {
      background: #e6e6e6;
      padding: 0.5rem 1rem;
      color: #545766;
    }

    .main-menu.menu-light .main-menu-header .menu-search:focus {
      border-color: #d9d9d9;
    }

    .main-menu.menu-light .navigation {
      background: #FFFFFF;
    }

    .main-menu.menu-light .navigation .navigation-header {
      color: #6B6F82;
      padding: 30px 20px 8px 20px;
    }

    .main-menu.menu-light .navigation .navigation-header span {
      font-weight: 500;
    }

    .main-menu.menu-light .navigation li a {
      color: #6B6F82;
      transition: all 0.2s ease;
    }

    .main-menu.menu-light .navigation li a i,
    .main-menu.menu-light .navigation li a span {
      transition: all 0.2s ease;
    }

    .main-menu.menu-light .navigation li a span {
      display: inline-block;
    }

    .main-menu.menu-light .navigation li a span.menu-sub-title {
      color: #bdbfc9;
    }

    .main-menu.menu-light .navigation li.hover>a,
    .main-menu.menu-light .navigation li.open>a,
    .main-menu.menu-light .navigation li.active>a {
      color: #FFFFFF;
    }

    .main-menu.menu-light .navigation>li {
      padding: 0;
    }

    .main-menu.menu-light .navigation>li>a {
      padding: 12px 30px 12px 18px;
    }

    .main-menu.menu-light .navigation>li>a .label {
      margin-top: 4px;
      margin-right: 5px;
    }

    .main-menu.menu-light .navigation>li>a i {
      position: relative;
      top: 3px;
    }

    .main-menu.menu-light .navigation>li.open>a {
      color: #545766;
      background: whitesmoke;
      border-right: 4px solid #1E9FF2;
    }

    .main-menu.menu-light .navigation>li.open .hover>a {
      transform: translateX(-4px);
    }

    .main-menu.menu-light .navigation>li:not(.open)>ul {
      display: none;
    }

    .main-menu.menu-light .navigation>li.hover>a,
    .main-menu.menu-light .navigation>li:hover>a,
    .main-menu.menu-light .navigation>li.active>a {
      color: #545766;
    }

    .main-menu.menu-light .navigation>li.hover>a>i,
    .main-menu.menu-light .navigation>li:hover>a>i,
    .main-menu.menu-light .navigation>li.active>a>i {
      transform: translateX(6px);
    }

    .main-menu.menu-light .navigation>li.hover>a>span,
    .main-menu.menu-light .navigation>li:hover>a>span,
    .main-menu.menu-light .navigation>li.active>a>span {
      transform: translateX(4px);
    }

    .main-menu.menu-light .navigation>li.hover>a.mm-next,
    .main-menu.menu-light .navigation>li:hover>a.mm-next,
    .main-menu.menu-light .navigation>li.active>a.mm-next {
      background-color: inherit;
    }

    .main-menu.menu-light .navigation>li.active>a {
      color: #6B6F82;
      font-weight: 700;
      background: #f0f0f0;
    }

    .main-menu.menu-light .navigation>li .active {
      background: #f0f0f0;
    }

    .main-menu.menu-light .navigation>li .active>a {
      color: #85899b;
      font-weight: 700;
      background: #f0f0f0;
    }

    .main-menu.menu-light .navigation>li .active .hover>a {
      background: whitesmoke;
    }

    .main-menu.menu-light .navigation>li ul {
      padding: 0;
      margin: 0;
      font-size: 1rem;
    }

    .main-menu.menu-light .navigation>li ul li {
      color: #6B6F82;
      background: transparent;
    }

    .main-menu.menu-light .navigation>li ul li>a {
      padding: 8px 18px 8px 54px;
    }

    .main-menu.menu-light .navigation>li ul .has-sub:not(.open)>ul {
      display: none;
    }

    .main-menu.menu-light .navigation>li ul .open>a {
      color: #6B6F82;
    }

    .main-menu.menu-light .navigation>li ul .open>ul {
      display: block;
    }

    .main-menu.menu-light .navigation>li ul .open>ul li>a {
      padding: 8px 18px 8px 64px;
    }

    .main-menu.menu-light .navigation>li ul .open>ul .open>ul {
      display: block;
    }

    .main-menu.menu-light .navigation>li ul .open>ul .open>ul li>a {
      padding: 8px 18px 8px 74px;
    }

    .main-menu.menu-light .navigation>li ul .hover>a,
    .main-menu.menu-light .navigation>li ul:hover>a {
      color: #74798d;
    }

    .main-menu.menu-light .navigation>li ul .active {
      background: transparent;
    }

    .main-menu.menu-light .navigation>li ul .active>a {
      color: #85899b;
      font-weight: 700;
    }

    .main-menu.menu-light .navigation>li ul .active .hover>a {
      background-color: transparent;
    }

    .main-menu.menu-light .navigation>li>ul {
      background: #FFFFFF;
    }

    .main-menu.menu-light ul.menu-popout {
      background: #FFFFFF;
    }

    .main-menu.menu-light ul.menu-popout li a {
      color: #6B6F82;
    }

    .main-menu.menu-light ul.menu-popout li a span.menu-sub-title {
      color: #bdbfc9;
    }

    .main-menu.menu-light ul.menu-popout .has-sub:not(.open)>ul {
      display: none;
    }

    .main-menu.menu-light ul.menu-popout .open>a {
      color: #6B6F82;
    }

    .main-menu.menu-light ul.menu-popout .open>ul {
      display: block;
    }

    .main-menu.menu-light ul.menu-popout .open>ul .open {
      background: #e8e8e8;
    }

    .main-menu.menu-light ul.menu-popout .open>ul .open>ul {
      display: block;
      background: #e8e8e8;
    }

    .main-menu.menu-light ul.menu-popout .hover>a,
    .main-menu.menu-light ul.menu-popout:hover>a {
      color: #74798d;
    }

    .main-menu.menu-light ul.menu-popout .active {
      font-weight: 700;
    }

    .main-menu.menu-light ul.menu-popout .active>a {
      color: #85899b;
    }

    .main-menu.menu-light ul.menu-popout .active .hover>a,
    .main-menu.menu-light ul.menu-popout .active :hover>a {
      background-color: transparent;
    }

    .main-menu.menu-dark {
      color: #dcdcdc;
      background: #2C303B;
    }

    .main-menu.menu-dark .main-menu-header {
      padding: 20px;
    }

    .main-menu.menu-dark .main-menu-header .menu-search {
      background: #16181e;
      padding: 0.5rem 1rem;
      color: #c3c3c3;
    }

    .main-menu.menu-dark .main-menu-header .menu-search:focus {
      border-color: #0b0c0f;
    }

    .main-menu.menu-dark .navigation {
      background: #2C303B;
    }

    .main-menu.menu-dark .navigation .navigation-header {
      color: #dcdcdc;
      padding: 30px 20px 8px 20px;
    }

    .main-menu.menu-dark .navigation .navigation-header span {
      font-weight: 500;
    }

    .main-menu.menu-dark .navigation li a {
      color: #dcdcdc;
      transition: all 0.2s ease;
    }

    .main-menu.menu-dark .navigation li a i,
    .main-menu.menu-dark .navigation li a span {
      transition: all 0.2s ease;
    }

    .main-menu.menu-dark .navigation li a span {
      display: inline-block;
    }

    .main-menu.menu-dark .navigation li a span.menu-sub-title {
      color: white;
    }

    .main-menu.menu-dark .navigation li.hover>a,
    .main-menu.menu-dark .navigation li.open>a,
    .main-menu.menu-dark .navigation li.active>a {
      color: #FFFFFF;
    }

    .main-menu.menu-dark .navigation>li {
      padding: 0;
    }

    .main-menu.menu-dark .navigation>li>a {
      padding: 12px 30px 12px 18px;
    }

    .main-menu.menu-dark .navigation>li>a .label {
      margin-top: 4px;
      margin-right: 5px;
    }

    .main-menu.menu-dark .navigation>li>a i {
      position: relative;
      top: 3px;
    }

    .main-menu.menu-dark .navigation>li.open>a {
      color: #c3c3c3;
      background: #23262f;
      border-right: 4px solid #1E9FF2;
    }

    .main-menu.menu-dark .navigation>li.open .hover>a {
      transform: translateX(-4px);
    }

    .main-menu.menu-dark .navigation>li:not(.open)>ul {
      display: none;
    }

    .main-menu.menu-dark .navigation>li.hover>a,
    .main-menu.menu-dark .navigation>li:hover>a,
    .main-menu.menu-dark .navigation>li.active>a {
      color: #c3c3c3;
    }

    .main-menu.menu-dark .navigation>li.hover>a>i,
    .main-menu.menu-dark .navigation>li:hover>a>i,
    .main-menu.menu-dark .navigation>li.active>a>i {
      transform: translateX(6px);
    }

    .main-menu.menu-dark .navigation>li.hover>a>span,
    .main-menu.menu-dark .navigation>li:hover>a>span,
    .main-menu.menu-dark .navigation>li.active>a>span {
      transform: translateX(4px);
    }

    .main-menu.menu-dark .navigation>li.hover>a.mm-next,
    .main-menu.menu-dark .navigation>li:hover>a.mm-next,
    .main-menu.menu-dark .navigation>li.active>a.mm-next {
      background-color: inherit;
    }

    .main-menu.menu-dark .navigation>li.active>a {
      color: #dcdcdc;
      font-weight: 700;
      background: #1f2229;
    }

    .main-menu.menu-dark .navigation>li .active {
      background: #1f2229;
    }

    .main-menu.menu-dark .navigation>li .active>a {
      color: #f6f6f6;
      font-weight: 700;
      background: #1f2229;
    }

    .main-menu.menu-dark .navigation>li .active .hover>a {
      background: #23262f;
    }

    .main-menu.menu-dark .navigation>li ul {
      padding: 0;
      margin: 0;
      font-size: 1rem;
    }

    .main-menu.menu-dark .navigation>li ul li {
      color: #dcdcdc;
      background: transparent;
    }

    .main-menu.menu-dark .navigation>li ul li>a {
      padding: 8px 18px 8px 54px;
    }

    .main-menu.menu-dark .navigation>li ul .has-sub:not(.open)>ul {
      display: none;
    }

    .main-menu.menu-dark .navigation>li ul .open>a {
      color: #dcdcdc;
    }

    .main-menu.menu-dark .navigation>li ul .open>ul {
      display: block;
    }

    .main-menu.menu-dark .navigation>li ul .open>ul li>a {
      padding: 8px 18px 8px 64px;
    }

    .main-menu.menu-dark .navigation>li ul .open>ul .open>ul {
      display: block;
    }

    .main-menu.menu-dark .navigation>li ul .open>ul .open>ul li>a {
      padding: 8px 18px 8px 74px;
    }

    .main-menu.menu-dark .navigation>li ul .hover>a,
    .main-menu.menu-dark .navigation>li ul:hover>a {
      color: #e6e6e6;
    }

    .main-menu.menu-dark .navigation>li ul .active {
      background: transparent;
    }

    .main-menu.menu-dark .navigation>li ul .active>a {
      color: #f6f6f6;
      font-weight: 700;
    }

    .main-menu.menu-dark .navigation>li ul .active .hover>a {
      background-color: transparent;
    }

    .main-menu.menu-dark .navigation>li>ul {
      background: #2C303B;
    }

    .main-menu.menu-dark ul.menu-popout {
      background: #2C303B;
    }

    .main-menu.menu-dark ul.menu-popout li a {
      color: #dcdcdc;
    }

    .main-menu.menu-dark ul.menu-popout li a span.menu-sub-title {
      color: white;
    }

    .main-menu.menu-dark ul.menu-popout .has-sub:not(.open)>ul {
      display: none;
    }

    .main-menu.menu-dark ul.menu-popout .open>a {
      color: #dcdcdc;
    }

    .main-menu.menu-dark ul.menu-popout .open>ul {
      display: block;
    }

    .main-menu.menu-dark ul.menu-popout .open>ul .open {
      background: #181b21;
    }

    .main-menu.menu-dark ul.menu-popout .open>ul .open>ul {
      display: block;
      background: #181b21;
    }

    .main-menu.menu-dark ul.menu-popout .hover>a,
    .main-menu.menu-dark ul.menu-popout:hover>a {
      color: #e6e6e6;
    }

    .main-menu.menu-dark ul.menu-popout .active {
      font-weight: 700;
    }

    .main-menu.menu-dark ul.menu-popout .active>a {
      color: #f6f6f6;
    }

    .main-menu.menu-dark ul.menu-popout .active .hover>a,
    .main-menu.menu-dark ul.menu-popout .active :hover>a {
      background-color: transparent;
    }

    .main-menu.menu-fixed {
      position: fixed;
      height: 100%;
      /* fallback if needed */
      top: 5rem;
      height: calc(100% - 5rem);
    }

    .main-menu.menu-fixed .main-menu-footer {
      position: fixed;
    }

    .main-menu.menu-shadow {
      box-shadow: 1px 0px 30px rgba(0, 0, 0, 0.1);
    }

    .main-menu.menu-border {
      border-right: 1px solid #E4E7ED;
    }

    .main-menu.menu-native-scroll .main-menu-content {
      overflow-y: scroll;
    }

    .main-menu.menu-bordered.menu-light .navigation>li {
      border-top: 1px solid #E4E7ED;
    }

    .main-menu.menu-bordered.menu-dark .navigation>li {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .main-menu .main-menu-content {
      height: 100%;
      position: relative;
    }

    .main-menu ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .main-menu ul.navigation-main {
      overflow-x: hidden;
    }

    .main-menu a {
      outline: none;
    }

    .main-menu a:hover,
    .main-menu a:focus {
      text-decoration: none;
    }

    .navigation {
      font-size: 1.1rem;
      letter-spacing: 0.2px;
      font-family: "Quicksand", Georgia, "Times New Roman", Times, serif;
      font-weight: 400;
      overflow-y: hidden;
      padding-bottom: 20px;
    }

    .navigation .navigation-header {
      font-family: "Quicksand", Georgia, "Times New Roman", Times, serif;
      font-weight: 400;
      line-height: 1.2;
      padding: 12px 22px;
      font-size: 1rem;
    }

    .navigation li {
      position: relative;
      white-space: nowrap;
    }

    .navigation li a {
      display: block;
      /* white-space: nowrap; */
      text-overflow: ellipsis;
      overflow: hidden;
    }

    .navigation li .is-hidden {
      /* transition: all 250ms ease-in;
            transform: scale(0);
            opacity: 0; */
    }

    .navigation li .is-shown {
      /* transition: all 250ms ease-in;
            transform: scale(1);
            opacity: 1; */
    }

    .navigation li.disabled a {
      cursor: not-allowed;
    }

    .menu-popout li.disabled a {
      cursor: not-allowed;
    }

    .dropdown-notification .notification-text {
      margin-bottom: 0.5rem;
    }

    .dropdown-notification .notification-tag {
      position: relative;
      top: -28px;
      right: 20px;
    }

    .main-menu-header .user-content {
      padding: 20px;
    }

    .main-menu-header .user-content .media {
      overflow: inherit;
    }

    .main-menu-header .user-content .media-body {
      vertical-align: bottom;
      opacity: 1;
      width: 150px;
      white-space: nowrap;
      transition: all .3s ease .15s;
    }

    .main-menu-footer {
      position: relative;
      overflow: hidden;
      bottom: 0;
      display: block;
      z-index: 1000;
      color: #c5c9d4;
      background-color: #16181e;
    }

    .main-menu-footer.footer-open {
      max-height: 500px;
      transition: max-height 0.2s ease-in-out;
    }

    .main-menu-footer.footer-close {
      max-height: 15px;
      transition: max-height 0.2s ease-in-out;
    }

    .main-menu-footer a {
      color: #a8aebe;
    }

    .main-menu-footer a:hover,
    .main-menu-footer a:focus {
      color: #FFFFFF;
    }

    .main-menu-footer .header {
      height: 19px;
      border-bottom: 1px solid #21242c;
    }

    .main-menu-footer .toggle {
      transform: rotate(0deg);
      transition: -webkit-transform 0.2s ease-in-out;
    }

    .main-menu-footer .content {
      padding: 0;
    }

    .main-menu-footer .content .actions>a {
      display: block;
      float: left;
      width: 33.333333%;
      padding: 1rem 0;
      color: #a8aebe;
      text-align: center;
      border-top: 1px solid #21242c;
      border-left: 1px solid #21242c;
    }

    .main-menu-footer .content .actions>a>span {
      font-size: 1.35rem;
    }

    .main-menu-footer .content .actions>a:hover,
    .main-menu-footer .content .actions>a:focus {
      color: #FFFFFF;
    }

    body.vertical-layout.vertical-menu.menu-expanded .main-menu-footer .content {
      margin-left: 0;
    }

    .vertical-layout.menu-expanded .menu-icon-right ul.navigation li>a:after,
    .vertical-overlay-menu .menu-icon-right ul.navigation li>a:after {
      left: 8px;
      right: initial !important;
    }

    .vertical-layout.menu-expanded .menu-icon-right ul.navigation li>a>i,
    .vertical-overlay-menu .menu-icon-right ul.navigation li>a>i {
      float: right !important;
      margin: 0px -12px 0px 0px !important;
    }

    .horizontal-layout .navbar-icon-right ul.nav>li>a:after {
      float: left;
      position: relative;
      top: 27px;
      left: -16px;
    }

    .horizontal-layout .navbar-icon-right ul.nav>li>a>i {
      float: right;
      margin: 0px 4px 0 8px;
    }

    .horizontal-layout .navbar-fixed {
      z-index: 999 !important;
    }

    @media (max-width: 767.98px) {

      .menu-hide .main-menu,
      .menu-open .main-menu {
        transition: transform .25s, top .35s, height .35s;
      }

      .main-menu {
        transform: translate3d(-240px, 0, 0);
        backface-visibility: hidden;
        perspective: 1000;
      }

      .menu-open .main-menu {
        transform: translate3d(0, 0, 0);
      }
    }

    @media (max-width: 991.98px) {
      .horizontal-layout.vertical-overlay-menu .main-menu-content {
        padding: 0;
      }

      .horizontal-layout.vertical-overlay-menu .main-menu-content .mega-dropdown-menu {
        margin: 0;
        width: 100%;
      }

      .horizontal-layout.vertical-overlay-menu .main-menu-content .mega-dropdown-menu>li {
        padding: 0;
      }

      .horizontal-layout.vertical-overlay-menu .navbar .navbar-container {
        margin-left: 0px;
      }
    }

    .display-inline {
      display: inline !important;
    }

    .display-block {
      display: block !important;
    }

    .display-inline-block {
      display: inline-block !important;
    }

    .display-hidden {
      display: none !important;
    }

    .display-table-cell {
      display: table-cell !important;
    }

    .position-top-0 {
      top: 0;
    }

    .position-right-0 {
      right: 0;
    }

    .position-bottom-0 {
      bottom: 0;
    }

    .position-left-0 {
      left: 0;
    }

    .zindex-1 {
      z-index: 1 !important;
    }

    .zindex-2 {
      z-index: 2 !important;
    }

    .zindex-3 {
      z-index: 3 !important;
    }

    .zindex-4 {
      z-index: 4 !important;
    }

    .zindex-0 {
      z-index: 0 !important;
    }

    .zindex-minus-1 {
      z-index: -1 !important;
    }

    .zindex-minus-2 {
      z-index: -2 !important;
    }

    .zindex-minus-3 {
      z-index: -3 !important;
    }

    .zindex-minus-4 {
      z-index: -4 !important;
    }

    .no-edge-top {
      top: 0 !important;
    }

    .no-edge-bottom {
      bottom: 0 !important;
    }

    .no-edge-left {
      left: 0 !important;
    }

    .no-edge-right {
      right: 0 !important;
    }

    .cursor-pointer {
      cursor: pointer;
    }

    .cursor-move {
      cursor: move;
    }

    .cursor-default {
      cursor: default;
    }

    .cursor-progress {
      cursor: progress;
    }

    .cursor-not-allowed {
      cursor: not-allowed;
    }

    .overflow-hidden {
      overflow: hidden;
    }

    .overflow-visible {
      overflow: visible;
    }

    .overflow-auto {
      overflow: auto;
    }

    .overflow-scroll {
      overflow: scroll;
    }

    .overflow-x-scroll {
      overflow: scroll;
    }

    .overflow-y-scroll {
      overflow: scroll;
    }

    .bullets-inside {
      list-style: inside;
    }

    .list-style-circle {
      list-style: circle;
    }

    .list-style-square {
      list-style: square;
    }

    .list-style-icons {
      padding-left: 10px;
      margin-left: 0;
      list-style: none;
    }

    .list-style-icons>li i {
      float: left;
      width: 1em;
      margin: 0 6px 0 0;
    }

    .border {
      border: 1px solid;
    }

    .border-top {
      border-top: 1px solid;
    }

    .border-bottom {
      border-bottom: 1px solid;
    }

    .border-left {
      border-left: 1px solid;
    }

    .border-right {
      border-right: 1px solid;
    }

    .border-2 {
      border-width: 2px !important;
    }

    .border-top-2 {
      border-top-width: 2px !important;
    }

    .border-bottom-2 {
      border-bottom-width: 2px !important;
    }

    .border-left-2 {
      border-left-width: 2px !important;
    }

    .border-right-2 {
      border-right-width: 2px !important;
    }

    .border-3 {
      border-width: 3px !important;
    }

    .border-top-3 {
      border-top-width: 3px !important;
    }

    .border-bottom-3 {
      border-bottom-width: 3px !important;
    }

    .border-left-3 {
      border-left-width: 3px !important;
    }

    .border-right-3 {
      border-right-width: 3px !important;
    }

    .no-border-top-radius {
      border-top-left-radius: 0 !important;
      border-top-right-radius: 0 !important;
    }

    .no-border-bottom-radius {
      border-bottom-left-radius: 0 !important;
      border-bottom-right-radius: 0 !important;
    }

    .no-border-top-left-radius {
      border-top-left-radius: 0 !important;
    }

    .no-border-top-right-radius {
      border-top-right-radius: 0 !important;
    }

    .no-border-bottom-left-radius {
      border-bottom-left-radius: 0 !important;
    }

    .no-border-bottom-right-radius {
      border-bottom-right-radius: 0 !important;
    }

    .box-shadow-0 {
      box-shadow: none !important;
    }

    .box-shadow-1 {
      box-shadow: 0 7px 12px 0 rgba(62, 57, 107, 0.16);
    }

    .box-shadow-2 {
      box-shadow: 0 10px 18px 0 rgba(62, 57, 107, 0.2);
    }

    .box-shadow-3 {
      box-shadow: 0 14px 24px 0 rgba(62, 57, 107, 0.26);
    }

    .box-shadow-4 {
      box-shadow: 0 16px 28px 0 rgba(62, 57, 107, 0.3);
    }

    .box-shadow-5 {
      box-shadow: 0 27px 24px 0 rgba(62, 57, 107, 0.36);
    }

    .fit {
      max-width: 100% !important;
    }

    .half-width {
      width: 50% !important;
    }

    .full-width {
      width: 100% !important;
    }

    .full-height {
      height: 100% !important;
    }

    .width-50 {
      width: 50px !important;
    }

    .width-100 {
      width: 100px !important;
    }

    .width-150 {
      width: 150px !important;
    }

    .width-200 {
      width: 200px !important;
    }

    .width-250 {
      width: 250px !important;
    }

    .width-300 {
      width: 300px !important;
    }

    .width-350 {
      width: 350px !important;
    }

    .width-400 {
      width: 400px !important;
    }

    .width-450 {
      width: 450px !important;
    }

    .width-500 {
      width: 500px !important;
    }

    .width-550 {
      width: 550px !important;
    }

    .width-600 {
      width: 600px !important;
    }

    .width-650 {
      width: 650px !important;
    }

    .width-700 {
      width: 700px !important;
    }

    .width-750 {
      width: 750px !important;
    }

    .width-800 {
      width: 800px !important;
    }

    .width-5-per {
      width: 5% !important;
    }

    .width-10-per {
      width: 10% !important;
    }

    .width-15-per {
      width: 15% !important;
    }

    .width-20-per {
      width: 20% !important;
    }

    .width-25-per {
      width: 25% !important;
    }

    .width-30-per {
      width: 30% !important;
    }

    .width-35-per {
      width: 35% !important;
    }

    .width-40-per {
      width: 40% !important;
    }

    .width-45-per {
      width: 45% !important;
    }

    .width-50-per {
      width: 50% !important;
    }

    .width-55-per {
      width: 55% !important;
    }

    .width-60-per {
      width: 60% !important;
    }

    .width-65-per {
      width: 65% !important;
    }

    .width-70-per {
      width: 70% !important;
    }

    .width-75-per {
      width: 75% !important;
    }

    .width-80-per {
      width: 80% !important;
    }

    .width-90-per {
      width: 90% !important;
    }

    .width-95-per {
      width: 95% !important;
    }

    .height-50 {
      height: 50px !important;
    }

    .height-75 {
      height: 75px !important;
    }

    .height-100 {
      height: 100px !important;
    }

    .height-150 {
      height: 150px !important;
    }

    .height-200 {
      height: 200px !important;
    }

    .height-250 {
      height: 250px !important;
    }

    .height-300 {
      height: 300px !important;
    }

    .height-350 {
      height: 350px !important;
    }

    .height-400 {
      height: 400px !important;
    }

    .height-450 {
      height: 450px !important;
    }

    .height-500 {
      height: 500px !important;
    }

    .height-550 {
      height: 550px !important;
    }

    .height-600 {
      height: 600px !important;
    }

    .height-650 {
      height: 650px !important;
    }

    .height-700 {
      height: 700px !important;
    }

    .height-750 {
      height: 750px !important;
    }

    .height-800 {
      height: 800px !important;
    }

    .height-5-per {
      height: 5% !important;
    }

    .height-10-per {
      height: 10% !important;
    }

    .height-15-per {
      height: 15% !important;
    }

    .height-20-per {
      height: 20% !important;
    }

    .height-25-per {
      height: 25% !important;
    }

    .height-30-per {
      height: 30% !important;
    }

    .height-35-per {
      height: 35% !important;
    }

    .height-40-per {
      height: 40% !important;
    }

    .height-45-per {
      height: 45% !important;
    }

    .height-50-per {
      height: 50% !important;
    }

    .height-55-per {
      height: 55% !important;
    }

    .height-60-per {
      height: 60% !important;
    }

    .height-65-per {
      height: 65% !important;
    }

    .height-70-per {
      height: 70% !important;
    }

    .height-75-per {
      height: 75% !important;
    }

    .height-80-per {
      height: 80% !important;
    }

    .full-height-vh-with-nav {
      height: calc(100vh - 5rem - 4rem);
    }

    .full-height-vh {
      height: 100vh;
    }

    .line-height-1 {
      line-height: 1 !important;
    }

    .line-height-2 {
      line-height: 2 !important;
    }

    .rotate-45 {
      transform: rotate(45deg);
    }

    .rotate-45-inverse {
      transform: rotate(-45deg);
    }

    .rotate-90 {
      transform: rotate(45deg);
    }

    .rotate-90-inverse {
      transform: rotate(-45deg);
    }

    .rotate-180 {
      transform: rotate(45deg);
    }

    .rotate-180-inverse {
      transform: rotate(-45deg);
    }

    .pull-up {
      transition: all 0.25s ease;
    }

    .pull-up:hover {
      transform: translateY(-4px) scale(1.02);
      box-shadow: 0px 14px 24px rgba(62, 57, 107, 0.2);
      z-index: 999;
    }

    .spinner {
      display: inline-block;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    .spinner-reverse {
      display: inline-block;
      animation: spin-reverse 1s linear infinite;
    }

    @keyframes spin-reverse {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(-360deg);
      }
    }

    .bg-cover {
      background-size: cover !important;
    }

    .background-repeat {
      background-repeat: repeat !important;
    }

    .background-no-repeat {
      background-repeat: no-repeat !important;
    }

    .img-xl {
      width: 64px !important;
      height: 64px !important;
    }

    .img-lg {
      width: 44px !important;
      height: 44px !important;
    }

    .img-sm {
      width: 36px !important;
      height: 36px !important;
    }

    .img-xs {
      width: 32px !important;
      height: 32px !important;
    }

    .bg-hexagons {
      background-color: #ffffff;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%23f7f7f7' fill-opacity='1' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .bg-hexagons-danger {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%23ff6576' fill-opacity='1' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .avatar {
      position: relative;
      display: inline-block;
      width: 30px;
      white-space: nowrap;
      border-radius: 1000px;
      vertical-align: bottom;
    }

    .avatar i {
      position: absolute;
      right: -7px;
      bottom: 2px;
      width: 8px;
      height: 8px;
      border-radius: 100%;
    }

    .avatar span.text-circle {
      text-align: center;
      vertical-align: middle;
      color: #FFFFFF;
      font-size: 1.2rem;
      background: #BABFC7;
      display: table-cell;
    }

    .avatar img {
      width: 100%;
      max-width: 100%;
      height: auto;
      border: 0 none;
      border-radius: 1000px;
    }

    .avatar .badge-up {
      top: -8px;
      right: -11px;
    }

    .avatar-online i {
      background-color: #28D094;
    }

    .avatar-off i {
      background-color: #BABFC7;
    }

    .avatar-busy i {
      background-color: #FF4961;
    }

    .avatar-away i {
      background-color: #FF9149;
    }

    .avatar-100 {
      width: 100px;
    }

    .avatar-100 span.text-circle {
      width: 100px;
      height: 100px;
    }

    .avatar-100 i {
      height: 20px;
      width: 20px;
    }

    .avatar-50 {
      width: 50px;
    }

    .avatar-50 span.text-circle {
      width: 50px;
      height: 50px;
    }

    .avatar-50 i {
      height: 10px;
      width: 10px;
    }

    .avatar-lg {
      width: 144px;
    }

    .avatar-lg span.text-circle {
      width: 144px;
      height: 144px;
    }

    .avatar-lg i {
      right: 0;
      bottom: 0;
      height: 20px;
      width: 20px;
    }

    .avatar-md {
      width: 40px;
    }

    .avatar-md span.text-circle {
      width: 40px;
      height: 40px;
    }

    .avatar-md i {
      right: 0;
      bottom: 0;
      height: 10px;
      width: 10px;
    }

    .avatar-sm {
      width: 32px;
    }

    .avatar-sm span.text-circle {
      width: 32px;
      height: 32px;
    }

    .avatar-sm i {
      height: 8px;
      width: 8px;
    }

    .avatar-xs {
      width: 24px;
    }

    .avatar-xs span.text-circle {
      width: 24px;
      height: 24px;
    }

    .avatar-xs i {
      height: 7px;
      width: 7px;
    }

    /*=========================================================================================
	File Name: search.scss
	Description: Search  functionality.
	----------------------------------------------------------------------------------------
	Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
	Version: 1.0
	Author: PIXINVENT
	Author URL: http://www.themeforest.net/user/pixinvent
 ==========================================================================================*/
    .navbar-container a.nav-link-search {
      float: left;
    }

    .navbar-container .search-input {
      float: left;
      padding-top: 1.2rem;
      width: 0;
    }

    .navbar-container .search-input .input {
      width: 0;
      border: none;
      background: none;
      transition: all 0.2s ease-out;
      line-height: 16px;
    }

    .navbar-container .search-input.open .input {
      width: 200px;
      padding: 5px 10px;
      outline: none;
      background: none;
      transition: all 0.3s ease-out;
    }

    .navbar-light .search-input .input,
    .navbar-semi-dark .search-input .input {
      color: #2C303B;
    }

    .navbar-light .search-input .input::placeholder,
    .navbar-semi-dark .search-input .input::placeholder {
      color: #2C303B;
    }

    .navbar-light .search-input.open .input,
    .navbar-semi-dark .search-input.open .input {
      color: #2C303B;
      border-bottom: 1px solid #2C303B;
    }

    .navbar-dark .search-input .input,
    .navbar-semi-light .search-input .input {
      color: #F9FAFD;
    }

    .navbar-dark .search-input .input::placeholder,
    .navbar-semi-light .search-input .input::placeholder {
      color: #F9FAFD;
    }

    .navbar-dark .search-input.open .input,
    .navbar-semi-light .search-input.open .input {
      color: #F9FAFD;
      border-bottom: 1px solid #F9FAFD;
    }

    @media (max-width: 991.98px) {
      #navbar-mobile .search-input.open .input {
        width: 180px;
        color: #2C303B;
        border-bottom: 1px solid #2C303B;
        overflow: hidden;
        position: relative;
        background: #fff;
        z-index: 1;
        padding: 10px 10px;
        top: -5px;
      }
    }

    .chart-container {
      position: relative;
      width: 100%;
    }

    @media (max-width: 768px) {
      .chart-container {
        overflow-x: scroll;
        overflow-y: visible;
        max-width: 100%;
      }
    }

    .chart {
      position: relative;
      display: block;
      width: 100%;
    }

    .jqstooltip {
      box-sizing: content-box;
    }

    [class*="bs-callout"] p {
      letter-spacing: 0.6px;
    }

    [class*="bs-callout"] .media {
      border-radius: 0.25rem !important;
    }

    [class*="bs-callout"].callout-bordered {
      border: 1px solid #ddd;
    }

    [class*="bs-callout"].callout-border-left {
      border-left: 5px solid;
    }

    [class*="bs-callout"].callout-border-right {
      border-right: 5px solid;
    }

    [class*="bs-callout"] .callout-arrow-left {
      border-top-left-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
    }

    [class*="bs-callout"] .callout-arrow-left:before {
      content: "";
      display: inline-block;
      position: absolute;
      top: 50%;
      right: -11%;
      border-left: 8px solid;
      border-top: 8px solid transparent;
      border-bottom: 8px solid transparent;
      border-left-color: inherit;
      margin-top: -8px;
    }

    [class*="bs-callout"] .callout-arrow-right {
      border-top-right-radius: 0.25rem;
      border-bottom-right-radius: 0.25rem;
    }

    [class*="bs-callout"] .callout-arrow-right:before {
      content: "";
      display: inline-block;
      position: absolute;
      top: 50%;
      left: -11%;
      border-left: 0;
      border-top: 8px solid transparent;
      border-bottom: 8px solid transparent;
      border-left-color: inherit;
      border-right: 8px solid;
      border-right-color: inherit;
      margin-top: -8px;
    }

    [class*="bs-callout"].callout-round {
      border-radius: 5rem !important;
    }

    [class*="bs-callout"].callout-round .media-left {
      border-top-left-radius: 5rem;
      border-bottom-left-radius: 5rem;
    }

    [class*="bs-callout"].callout-round .media-right {
      border-top-right-radius: 5rem;
      border-bottom-right-radius: 5rem;
    }

    [class*="bs-callout"].callout-square {
      border-radius: 0 !important;
    }

    [class*="bs-callout"].callout-square .media,
    [class*="bs-callout"].callout-square .callout-arrow-left,
    [class*="bs-callout"].callout-square .callout-arrow-right {
      border-radius: 0 !important;
    }

    .btn-social,
    .btn-social-icon {
      position: relative;
      padding-left: 3.95rem;
      text-align: left;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .btn-social> :first-child,
    .btn-social-icon> :first-child {
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 2.95rem;
      line-height: 2.7rem;
      font-size: 1.6em;
      text-align: center;
      border-right: 1px solid rgba(0, 0, 0, 0.2);
    }

    .btn-social.btn-lg,
    .btn-lg.btn-social-icon {
      padding-left: 3.25rem;
    }

    .btn-social.btn-lg> :first-child,
    .btn-lg.btn-social-icon> :first-child {
      line-height: 3.7rem;
      width: 3rem;
      font-size: 1.8em;
    }

    .btn-social.btn-sm,
    .btn-sm.btn-social-icon {
      padding-left: 3.75rem;
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
    }

    .btn-social.btn-sm> :first-child,
    .btn-sm.btn-social-icon> :first-child {
      line-height: 2.2rem;
      width: 3rem;
      font-size: 1.4em;
    }

    .btn-social.btn-xs,
    .btn-xs.btn-social-icon {
      padding-left: 2.25rem;
      font-size: 0.75rem;
      line-height: 0.2rem;
    }

    .btn-social.btn-xs> :first-child,
    .btn-xs.btn-social-icon> :first-child {
      line-height: 2rem;
      width: 1.8rem;
      font-size: 1.2em;
    }

    .btn-social-icon {
      height: 2.95rem;
      width: 2.95rem;
      padding: 0;
    }

    .btn-social-icon> :first-child {
      border: none;
      text-align: center;
      width: 100% !important;
    }

    .btn-social-icon.btn-lg {
      height: 4rem;
      width: 4rem;
      padding-left: 0;
      padding-right: 0;
    }

    .btn-social-icon.btn-sm {
      height: 2.5rem;
      width: 2.5rem;
      padding-left: 0;
      padding-right: 0;
    }

    .btn-social-icon.btn-xs {
      height: 2rem;
      width: 2rem;
      padding-left: 0;
      padding-right: 0;
    }

    .btn-adn {
      background-color: #d87a68;
      color: #fff;
      background-color: #d87a68;
      border-color: #fff;
    }

    .btn-adn:hover {
      color: #fff;
      background-color: #d87a68;
      border-color: #d87a68;
    }

    .btn-adn:focus,
    .btn-adn.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-adn.disabled,
    .btn-adn:disabled {
      color: #fff;
      background-color: #d87a68;
      border-color: #fff;
    }

    .btn-adn:not(:disabled):not(.disabled):active,
    .btn-adn:not(:disabled):not(.disabled).active,
    .show>.btn-adn.dropdown-toggle {
      color: #fff;
      background-color: #ce563f;
      border-color: #dfdfdf;
    }

    .btn-adn:not(:disabled):not(.disabled):active:focus,
    .btn-adn:not(:disabled):not(.disabled).active:focus,
    .show>.btn-adn.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-bitbucket {
      background-color: #205081;
      color: #fff;
      background-color: #205081;
      border-color: #fff;
    }

    .btn-bitbucket:hover {
      color: #fff;
      background-color: #205081;
      border-color: #205081;
    }

    .btn-bitbucket:focus,
    .btn-bitbucket.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-bitbucket.disabled,
    .btn-bitbucket:disabled {
      color: #fff;
      background-color: #205081;
      border-color: #fff;
    }

    .btn-bitbucket:not(:disabled):not(.disabled):active,
    .btn-bitbucket:not(:disabled):not(.disabled).active,
    .show>.btn-bitbucket.dropdown-toggle {
      color: #fff;
      background-color: #163758;
      border-color: #dfdfdf;
    }

    .btn-bitbucket:not(:disabled):not(.disabled):active:focus,
    .btn-bitbucket:not(:disabled):not(.disabled).active:focus,
    .show>.btn-bitbucket.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-dropbox {
      background-color: #1087dd;
      color: #fff;
      background-color: #1087dd;
      border-color: #fff;
    }

    .btn-dropbox:hover {
      color: #fff;
      background-color: #1087dd;
      border-color: #1087dd;
    }

    .btn-dropbox:focus,
    .btn-dropbox.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-dropbox.disabled,
    .btn-dropbox:disabled {
      color: #fff;
      background-color: #1087dd;
      border-color: #fff;
    }

    .btn-dropbox:not(:disabled):not(.disabled):active,
    .btn-dropbox:not(:disabled):not(.disabled).active,
    .show>.btn-dropbox.dropdown-toggle {
      color: #fff;
      background-color: #0d6aad;
      border-color: #dfdfdf;
    }

    .btn-dropbox:not(:disabled):not(.disabled):active:focus,
    .btn-dropbox:not(:disabled):not(.disabled).active:focus,
    .show>.btn-dropbox.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-facebook {
      background-color: #3b5998;
      color: #fff;
      background-color: #3b5998;
      border-color: #fff;
    }

    .btn-facebook:hover {
      color: #fff;
      background-color: #3b5998;
      border-color: #3b5998;
    }

    .btn-facebook:focus,
    .btn-facebook.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-facebook.disabled,
    .btn-facebook:disabled {
      color: #fff;
      background-color: #3b5998;
      border-color: #fff;
    }

    .btn-facebook:not(:disabled):not(.disabled):active,
    .btn-facebook:not(:disabled):not(.disabled).active,
    .show>.btn-facebook.dropdown-toggle {
      color: #fff;
      background-color: #2d4373;
      border-color: #dfdfdf;
    }

    .btn-facebook:not(:disabled):not(.disabled):active:focus,
    .btn-facebook:not(:disabled):not(.disabled).active:focus,
    .show>.btn-facebook.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-flickr {
      background-color: #ff0084;
      color: #fff;
      background-color: #ff0084;
      border-color: #fff;
    }

    .btn-flickr:hover {
      color: #fff;
      background-color: #ff0084;
      border-color: #ff0084;
    }

    .btn-flickr:focus,
    .btn-flickr.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-flickr.disabled,
    .btn-flickr:disabled {
      color: #fff;
      background-color: #ff0084;
      border-color: #fff;
    }

    .btn-flickr:not(:disabled):not(.disabled):active,
    .btn-flickr:not(:disabled):not(.disabled).active,
    .show>.btn-flickr.dropdown-toggle {
      color: #fff;
      background-color: #cc006a;
      border-color: #dfdfdf;
    }

    .btn-flickr:not(:disabled):not(.disabled):active:focus,
    .btn-flickr:not(:disabled):not(.disabled).active:focus,
    .show>.btn-flickr.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-foursquare {
      background-color: #f94877;
      color: #fff;
      background-color: #f94877;
      border-color: #fff;
    }

    .btn-foursquare:hover {
      color: #fff;
      background-color: #f94877;
      border-color: #f94877;
    }

    .btn-foursquare:focus,
    .btn-foursquare.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-foursquare.disabled,
    .btn-foursquare:disabled {
      color: #fff;
      background-color: #f94877;
      border-color: #fff;
    }

    .btn-foursquare:not(:disabled):not(.disabled):active,
    .btn-foursquare:not(:disabled):not(.disabled).active,
    .show>.btn-foursquare.dropdown-toggle {
      color: #fff;
      background-color: #f71752;
      border-color: #dfdfdf;
    }

    .btn-foursquare:not(:disabled):not(.disabled):active:focus,
    .btn-foursquare:not(:disabled):not(.disabled).active:focus,
    .show>.btn-foursquare.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-github {
      background-color: #444444;
      color: #fff;
      background-color: #444444;
      border-color: #fff;
    }

    .btn-github:hover {
      color: #fff;
      background-color: #444444;
      border-color: #444444;
    }

    .btn-github:focus,
    .btn-github.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-github.disabled,
    .btn-github:disabled {
      color: #fff;
      background-color: #444444;
      border-color: #fff;
    }

    .btn-github:not(:disabled):not(.disabled):active,
    .btn-github:not(:disabled):not(.disabled).active,
    .show>.btn-github.dropdown-toggle {
      color: #fff;
      background-color: #2b2b2b;
      border-color: #dfdfdf;
    }

    .btn-github:not(:disabled):not(.disabled):active:focus,
    .btn-github:not(:disabled):not(.disabled).active:focus,
    .show>.btn-github.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-google {
      background-color: #dd4b39;
      color: #fff;
      background-color: #dd4b39;
      border-color: #fff;
    }

    .btn-google:hover {
      color: #fff;
      background-color: #dd4b39;
      border-color: #dd4b39;
    }

    .btn-google:focus,
    .btn-google.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-google.disabled,
    .btn-google:disabled {
      color: #fff;
      background-color: #dd4b39;
      border-color: #fff;
    }

    .btn-google:not(:disabled):not(.disabled):active,
    .btn-google:not(:disabled):not(.disabled).active,
    .show>.btn-google.dropdown-toggle {
      color: #fff;
      background-color: #c23321;
      border-color: #dfdfdf;
    }

    .btn-google:not(:disabled):not(.disabled):active:focus,
    .btn-google:not(:disabled):not(.disabled).active:focus,
    .show>.btn-google.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-instagram {
      background-color: #3f729b;
      color: #fff;
      background-color: #3f729b;
      border-color: #fff;
    }

    .btn-instagram:hover {
      color: #fff;
      background-color: #3f729b;
      border-color: #3f729b;
    }

    .btn-instagram:focus,
    .btn-instagram.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-instagram.disabled,
    .btn-instagram:disabled {
      color: #fff;
      background-color: #3f729b;
      border-color: #fff;
    }

    .btn-instagram:not(:disabled):not(.disabled):active,
    .btn-instagram:not(:disabled):not(.disabled).active,
    .show>.btn-instagram.dropdown-toggle {
      color: #fff;
      background-color: #305777;
      border-color: #dfdfdf;
    }

    .btn-instagram:not(:disabled):not(.disabled):active:focus,
    .btn-instagram:not(:disabled):not(.disabled).active:focus,
    .show>.btn-instagram.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-linkedin {
      background-color: #007bb6;
      color: #fff;
      background-color: #007bb6;
      border-color: #fff;
    }

    .btn-linkedin:hover {
      color: #fff;
      background-color: #007bb6;
      border-color: #007bb6;
    }

    .btn-linkedin:focus,
    .btn-linkedin.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-linkedin.disabled,
    .btn-linkedin:disabled {
      color: #fff;
      background-color: #007bb6;
      border-color: #fff;
    }

    .btn-linkedin:not(:disabled):not(.disabled):active,
    .btn-linkedin:not(:disabled):not(.disabled).active,
    .show>.btn-linkedin.dropdown-toggle {
      color: #fff;
      background-color: #005983;
      border-color: #dfdfdf;
    }

    .btn-linkedin:not(:disabled):not(.disabled):active:focus,
    .btn-linkedin:not(:disabled):not(.disabled).active:focus,
    .show>.btn-linkedin.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-microsoft {
      background-color: #2672ec;
      color: #fff;
      background-color: #2672ec;
      border-color: #fff;
    }

    .btn-microsoft:hover {
      color: #fff;
      background-color: #2672ec;
      border-color: #2672ec;
    }

    .btn-microsoft:focus,
    .btn-microsoft.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-microsoft.disabled,
    .btn-microsoft:disabled {
      color: #fff;
      background-color: #2672ec;
      border-color: #fff;
    }

    .btn-microsoft:not(:disabled):not(.disabled):active,
    .btn-microsoft:not(:disabled):not(.disabled).active,
    .show>.btn-microsoft.dropdown-toggle {
      color: #fff;
      background-color: #125acd;
      border-color: #dfdfdf;
    }

    .btn-microsoft:not(:disabled):not(.disabled):active:focus,
    .btn-microsoft:not(:disabled):not(.disabled).active:focus,
    .show>.btn-microsoft.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-odnoklassniki {
      background-color: #f4731c;
      color: #fff;
      background-color: #f4731c;
      border-color: #fff;
    }

    .btn-odnoklassniki:hover {
      color: #fff;
      background-color: #f4731c;
      border-color: #f4731c;
    }

    .btn-odnoklassniki:focus,
    .btn-odnoklassniki.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-odnoklassniki.disabled,
    .btn-odnoklassniki:disabled {
      color: #fff;
      background-color: #f4731c;
      border-color: #fff;
    }

    .btn-odnoklassniki:not(:disabled):not(.disabled):active,
    .btn-odnoklassniki:not(:disabled):not(.disabled).active,
    .show>.btn-odnoklassniki.dropdown-toggle {
      color: #fff;
      background-color: #d35b0a;
      border-color: #dfdfdf;
    }

    .btn-odnoklassniki:not(:disabled):not(.disabled):active:focus,
    .btn-odnoklassniki:not(:disabled):not(.disabled).active:focus,
    .show>.btn-odnoklassniki.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-openid {
      background-color: #f7931e;
      color: #2A2E30;
      background-color: #f7931e;
      border-color: #fff;
    }

    .btn-openid:hover {
      color: #2A2E30;
      background-color: #f7931e;
      border-color: #f7931e;
    }

    .btn-openid:focus,
    .btn-openid.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-openid.disabled,
    .btn-openid:disabled {
      color: #2A2E30;
      background-color: #f7931e;
      border-color: #fff;
    }

    .btn-openid:not(:disabled):not(.disabled):active,
    .btn-openid:not(:disabled):not(.disabled).active,
    .show>.btn-openid.dropdown-toggle {
      color: #fff;
      background-color: #da7908;
      border-color: #dfdfdf;
    }

    .btn-openid:not(:disabled):not(.disabled):active:focus,
    .btn-openid:not(:disabled):not(.disabled).active:focus,
    .show>.btn-openid.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-pinterest {
      background-color: #cb2027;
      color: #fff;
      background-color: #cb2027;
      border-color: #fff;
    }

    .btn-pinterest:hover {
      color: #fff;
      background-color: #cb2027;
      border-color: #cb2027;
    }

    .btn-pinterest:focus,
    .btn-pinterest.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-pinterest.disabled,
    .btn-pinterest:disabled {
      color: #fff;
      background-color: #cb2027;
      border-color: #fff;
    }

    .btn-pinterest:not(:disabled):not(.disabled):active,
    .btn-pinterest:not(:disabled):not(.disabled).active,
    .show>.btn-pinterest.dropdown-toggle {
      color: #fff;
      background-color: #9f191f;
      border-color: #dfdfdf;
    }

    .btn-pinterest:not(:disabled):not(.disabled):active:focus,
    .btn-pinterest:not(:disabled):not(.disabled).active:focus,
    .show>.btn-pinterest.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-reddit {
      background-color: #eff7ff;
      color: #2A2E30;
      background-color: #eff7ff;
      border-color: #000;
    }

    .btn-reddit:hover {
      color: #fff;
      background-color: #000;
      border-color: #000;
    }

    .btn-reddit:focus,
    .btn-reddit.focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.5);
    }

    .btn-reddit.disabled,
    .btn-reddit:disabled {
      color: #2A2E30;
      background-color: #eff7ff;
      border-color: #000;
    }

    .btn-reddit:not(:disabled):not(.disabled):active,
    .btn-reddit:not(:disabled):not(.disabled).active,
    .show>.btn-reddit.dropdown-toggle {
      color: #2A2E30;
      background-color: #bcdeff;
      border-color: black;
    }

    .btn-reddit:not(:disabled):not(.disabled):active:focus,
    .btn-reddit:not(:disabled):not(.disabled).active:focus,
    .show>.btn-reddit.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.5);
    }

    .btn-soundcloud {
      background-color: #ff5500;
      color: #fff;
      background-color: #ff5500;
      border-color: #fff;
    }

    .btn-soundcloud:hover {
      color: #fff;
      background-color: #ff5500;
      border-color: #ff5500;
    }

    .btn-soundcloud:focus,
    .btn-soundcloud.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-soundcloud.disabled,
    .btn-soundcloud:disabled {
      color: #fff;
      background-color: #ff5500;
      border-color: #fff;
    }

    .btn-soundcloud:not(:disabled):not(.disabled):active,
    .btn-soundcloud:not(:disabled):not(.disabled).active,
    .show>.btn-soundcloud.dropdown-toggle {
      color: #fff;
      background-color: #cc4400;
      border-color: #dfdfdf;
    }

    .btn-soundcloud:not(:disabled):not(.disabled):active:focus,
    .btn-soundcloud:not(:disabled):not(.disabled).active:focus,
    .show>.btn-soundcloud.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-tumblr {
      background-color: #2c4762;
      color: #fff;
      background-color: #2c4762;
      border-color: #fff;
    }

    .btn-tumblr:hover {
      color: #fff;
      background-color: #2c4762;
      border-color: #2c4762;
    }

    .btn-tumblr:focus,
    .btn-tumblr.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-tumblr.disabled,
    .btn-tumblr:disabled {
      color: #fff;
      background-color: #2c4762;
      border-color: #fff;
    }

    .btn-tumblr:not(:disabled):not(.disabled):active,
    .btn-tumblr:not(:disabled):not(.disabled).active,
    .show>.btn-tumblr.dropdown-toggle {
      color: #fff;
      background-color: #1c2e3f;
      border-color: #dfdfdf;
    }

    .btn-tumblr:not(:disabled):not(.disabled):active:focus,
    .btn-tumblr:not(:disabled):not(.disabled).active:focus,
    .show>.btn-tumblr.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-twitter {
      background-color: #55acee;
      color: #2A2E30;
      background-color: #55acee;
      border-color: #fff;
    }

    .btn-twitter:hover {
      color: #2A2E30;
      background-color: #fff;
      border-color: #55acee;
    }

    .btn-twitter:focus,
    .btn-twitter.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-twitter.disabled,
    .btn-twitter:disabled {
      color: #2A2E30;
      background-color: #55acee;
      border-color: #fff;
    }

    .btn-twitter:not(:disabled):not(.disabled):active,
    .btn-twitter:not(:disabled):not(.disabled).active,
    .show>.btn-twitter.dropdown-toggle {
      color: #fff;
      background-color: #2795e9;
      border-color: #dfdfdf;
    }

    .btn-twitter:not(:disabled):not(.disabled):active:focus,
    .btn-twitter:not(:disabled):not(.disabled).active:focus,
    .show>.btn-twitter.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-vimeo {
      background-color: #1ab7ea;
      color: #fff;
      background-color: #1ab7ea;
      border-color: #fff;
    }

    .btn-vimeo:hover {
      color: #fff;
      background-color: #1ab7ea;
      border-color: #1ab7ea;
    }

    .btn-vimeo:focus,
    .btn-vimeo.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-vimeo.disabled,
    .btn-vimeo:disabled {
      color: #fff;
      background-color: #1ab7ea;
      border-color: #fff;
    }

    .btn-vimeo:not(:disabled):not(.disabled):active,
    .btn-vimeo:not(:disabled):not(.disabled).active,
    .show>.btn-vimeo.dropdown-toggle {
      color: #fff;
      background-color: #1295bf;
      border-color: #dfdfdf;
    }

    .btn-vimeo:not(:disabled):not(.disabled):active:focus,
    .btn-vimeo:not(:disabled):not(.disabled).active:focus,
    .show>.btn-vimeo.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-vk {
      background-color: #587ea3;
      color: #fff;
      background-color: #587ea3;
      border-color: #fff;
    }

    .btn-vk:hover {
      color: #fff;
      background-color: #587ea3;
      border-color: #587ea3;
    }

    .btn-vk:focus,
    .btn-vk.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-vk.disabled,
    .btn-vk:disabled {
      color: #fff;
      background-color: #587ea3;
      border-color: #fff;
    }

    .btn-vk:not(:disabled):not(.disabled):active,
    .btn-vk:not(:disabled):not(.disabled).active,
    .show>.btn-vk.dropdown-toggle {
      color: #fff;
      background-color: #466482;
      border-color: #dfdfdf;
    }

    .btn-vk:not(:disabled):not(.disabled):active:focus,
    .btn-vk:not(:disabled):not(.disabled).active:focus,
    .show>.btn-vk.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-yahoo {
      background-color: #720e9e;
      color: #fff;
      background-color: #720e9e;
      border-color: #fff;
    }

    .btn-yahoo:hover {
      color: #fff;
      background-color: #720e9e;
      border-color: #720e9e;
    }

    .btn-yahoo:focus,
    .btn-yahoo.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-yahoo.disabled,
    .btn-yahoo:disabled {
      color: #fff;
      background-color: #720e9e;
      border-color: #fff;
    }

    .btn-yahoo:not(:disabled):not(.disabled):active,
    .btn-yahoo:not(:disabled):not(.disabled).active,
    .show>.btn-yahoo.dropdown-toggle {
      color: #fff;
      background-color: #500a6f;
      border-color: #dfdfdf;
    }

    .btn-yahoo:not(:disabled):not(.disabled):active:focus,
    .btn-yahoo:not(:disabled):not(.disabled).active:focus,
    .show>.btn-yahoo.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    .btn-outline-adn {
      border: 1px solid #d87a68 !important;
      color: #d87a68;
    }

    .btn-outline-bitbucket {
      border: 1px solid #205081 !important;
      color: #205081;
    }

    .btn-outline-dropbox {
      border: 1px solid #1087dd !important;
      color: #1087dd;
    }

    .btn-outline-facebook {
      border: 1px solid #3b5998 !important;
      color: #3b5998;
    }

    .btn-outline-flickr {
      border: 1px solid #ff0084 !important;
      color: #ff0084;
    }

    .btn-outline-foursquare {
      border: 1px solid #f94877 !important;
      color: #f94877;
    }

    .btn-outline-github {
      border: 1px solid #444444 !important;
      color: #444444;
    }

    .btn-outline-google {
      border: 1px solid #dd4b39 !important;
      color: #dd4b39;
    }

    .btn-outline-instagram {
      border: 1px solid #3f729b !important;
      color: #3f729b;
    }

    .btn-outline-linkedin {
      border: 1px solid #007bb6 !important;
      color: #007bb6;
    }

    .btn-outline-microsoft {
      border: 1px solid #2672ec !important;
      color: #2672ec;
    }

    .btn-outline-odnoklassniki {
      border: 1px solid #f4731c !important;
      color: #f4731c;
    }

    .btn-outline-openid {
      border: 1px solid #f7931e !important;
      color: #f7931e;
    }

    .btn-outline-pinterest {
      border: 1px solid #cb2027 !important;
      color: #cb2027;
    }

    .btn-outline-reddit {
      border: 1px solid #ff4500 !important;
      color: #ff4500;
    }

    .btn-outline-soundcloud {
      border: 1px solid #ff5500 !important;
      color: #ff5500;
    }

    .btn-outline-tumblr {
      border: 1px solid #2c4762 !important;
      color: #2c4762;
    }

    .btn-outline-twitter {
      border: 1px solid #55acee !important;
      color: #55acee;
    }

    .btn-outline-vimeo {
      border: 1px solid #1ab7ea !important;
      color: #1ab7ea;
    }

    .btn-outline-vk {
      border: 1px solid #587ea3 !important;
      color: #587ea3;
    }

    .btn-outline-yahoo {
      border: 1px solid #720e9e !important;
      color: #720e9e;
    }

    .btn-outline-adn:hover {
      color: #ad412d;
      border: 1px solid #ad412d !important;
    }

    .btn-outline-bitbucket:hover {
      color: #0c1d2f;
      border: 1px solid #0c1d2f !important;
    }

    .btn-outline-dropbox:hover {
      color: #094d7e;
      border: 1px solid #094d7e !important;
    }

    .btn-outline-facebook:hover {
      color: #1e2e4f;
      border: 1px solid #1e2e4f !important;
    }

    .btn-outline-flickr:hover {
      color: #99004f;
      border: 1px solid #99004f !important;
    }

    .btn-outline-foursquare:hover {
      color: #d4073d;
      border: 1px solid #d4073d !important;
    }

    .btn-outline-github:hover {
      color: #111111;
      border: 1px solid #111111 !important;
    }

    .btn-outline-google:hover {
      color: #96271a;
      border: 1px solid #96271a !important;
    }

    .btn-outline-instagram:hover {
      color: #223d52;
      border: 1px solid #223d52 !important;
    }

    .btn-outline-linkedin:hover {
      color: #003650;
      border: 1px solid #003650 !important;
    }

    .btn-outline-microsoft:hover {
      color: #0e459e;
      border: 1px solid #0e459e !important;
    }

    .btn-outline-odnoklassniki:hover {
      color: #a24608;
      border: 1px solid #a24608 !important;
    }

    .btn-outline-openid:hover {
      color: #a95e06;
      border: 1px solid #a95e06 !important;
    }

    .btn-outline-pinterest:hover {
      color: #731216;
      border: 1px solid #731216 !important;
    }

    .btn-outline-reddit:hover {
      color: #992900;
      border: 1px solid #992900 !important;
    }

    .btn-outline-soundcloud:hover {
      color: #993300;
      border: 1px solid #993300 !important;
    }

    .btn-outline-tumblr:hover {
      color: #0c141c;
      border: 1px solid #0c141c !important;
    }

    .btn-outline-twitter:hover {
      color: #147bc9;
      border: 1px solid #147bc9 !important;
    }

    .btn-outline-vimeo:hover {
      color: #0d7091;
      border: 1px solid #0d7091 !important;
    }

    .btn-outline-vk:hover {
      color: #344b61;
      border: 1px solid #344b61 !important;
    }

    .btn-outline-yahoo:hover {
      color: #2e0640;
      border: 1px solid #2e0640 !important;
    }

    .bg-adn {
      background-color: #d87a68;
    }

    .bg-bitbucket {
      background-color: #205081;
    }

    .bg-dropbox {
      background-color: #1087dd;
    }

    .bg-facebook {
      background-color: #3b5998;
    }

    .bg-flickr {
      background-color: #ff0084;
    }

    .bg-foursquare {
      background-color: #f94877;
    }

    .bg-github {
      background-color: #444444;
    }

    .bg-google {
      background-color: #dd4b39;
    }

    .bg-instagram {
      background-color: #3f729b;
    }

    .bg-linkedin {
      background-color: #007bb6;
    }

    .bg-microsoft {
      background-color: #2672ec;
    }

    .bg-odnoklassniki {
      background-color: #f4731c;
    }

    .bg-openid {
      background-color: #f7931e;
    }

    .bg-pinterest {
      background-color: #cb2027;
    }

    .bg-reddit {
      background-color: #ff4500;
    }

    .bg-soundcloud {
      background-color: #ff5500;
    }

    .bg-tumblr {
      background-color: #2c4762;
    }

    .bg-twitter {
      background-color: #55acee;
    }

    .bg-vimeo {
      background-color: #1ab7ea;
    }

    .bg-vk {
      background-color: #587ea3;
    }

    .bg-yahoo {
      background-color: #720e9e;
    }

    /*=========================================================================================
	File Name: demo.scss
	Description: CSS used for demo purpose only. Remove this css from your project.
	----------------------------------------------------------------------------------------
	Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
	Version: 1.0
	Author: PIXINVENT
	Author URL: http://www.themeforest.net/user/pixinvent
  ==========================================================================================*/
    .fonticon-container>.fonticon-wrap {
      float: left;
      width: 60px;
      height: 60px;
      line-height: 4.8rem;
      text-align: center;
      border-radius: 0.1875rem;
      margin-right: 1rem;
      margin-bottom: 1.5rem;
    }

    .fonticon-container>.fonticon-wrap>i {
      font-size: 2.28rem;
      transition: all .2s ease-in-out;
    }

    .fonticon-container>.fonticon-wrap.youtube {
      width: 100px;
    }

    .fonticon-container:hover i {
      color: #666EE8;
      font-size: 2.9rem;
      transform: scale(1.3);
    }

    .fonticon-container>.fonticon-classname,
    .fonticon-container>.fonticon-unit {
      display: block;
      font-size: 1.5rem;
      line-height: 1.2;
    }

    .fonticon-container>.fonticon-unit {
      font-size: 1rem;
      font-style: italic;
    }

    .scroll-example {
      padding: 0.5rem;
      position: relative;
      border: 2px solid #d1d5ea;
      overflow: auto;
    }

    .scroll-example .horz-scroll-content {
      width: 1200px;
    }

    .browser {
      background: #e0e0e0;
      border: 4px solid #e0e0e0;
      width: 100%;
      height: 12rem;
      padding-top: 20px;
      margin: 0 0 10px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    .browser iframe {
      border: 0;
      background: #fff;
      height: 100%;
      width: 100%;
    }

    .loader-wrapper {
      height: 8em;
    }

    .maintenance-icon {
      font-size: 4rem;
    }

    .animationIcon {
      right: 30px;
      bottom: 10px;
    }

    /*=========================================================================================
	File Name: customizer.scss
	Description: CSS used for demo purpose only. Remove this css from your project.
	----------------------------------------------------------------------------------------
	Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
	Version: 1.0
	Author: PIXINVENT
	Author URL: http://www.themeforest.net/user/pixinvent
  ==========================================================================================*/
    .customizer {
      width: 400px;
      right: -400px;
      padding: 0;
      background-color: #FFF;
      z-index: 1051;
      position: fixed;
      top: 0;
      bottom: 0;
      height: 100vh;
      transition: right 0.4s cubic-bezier(0.05, 0.74, 0.2, 0.99);
      backface-visibility: hidden;
      border-left: 1px solid rgba(0, 0, 0, 0.05);
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    }

    .customizer.open {
      right: 0;
    }

    .customizer .customizer-content {
      position: relative;
      height: 100%;
    }

    .customizer a.customizer-toggle {
      background: #FFF;
      color: #666EE8;
      display: block;
      border-radius: 15px 0 0 15px;
    }

    .customizer a.customizer-close {
      color: #000;
    }

    .customizer .customizer-close {
      position: absolute;
      right: 10px;
      top: 10px;
      padding: 7px;
      width: auto;
      z-index: 10;
    }

    .customizer .customizer-toggle {
      position: absolute;
      top: 35%;
      width: 54px;
      height: 50px;
      left: -54px;
      text-align: center;
      line-height: 56px;
      cursor: pointer;
    }

    .customizer .color-options a {
      white-space: pre;
    }

    .customizer .customizer-sidebar-options .active {
      background-color: #666EE8;
      border-color: #666EE8;
      color: #FFF;
    }

    .ps-container {
      -ms-touch-action: none;
      touch-action: none;
      overflow: hidden !important;
      -ms-overflow-style: none;
    }

    @supports (-ms-overflow-style: none) {
      .ps-container {
        overflow: auto !important;
      }
    }

    @media screen and (-ms-high-contrast: active),
    (-ms-high-contrast: none) {
      .ps-container {
        overflow: auto !important;
      }
    }

    .ps-container.ps-active-x>.ps-scrollbar-x-rail,
    .ps-container.ps-active-y>.ps-scrollbar-y-rail {
      display: block;
      background-color: transparent;
    }

    .ps-container.ps-in-scrolling {
      pointer-events: none;
    }

    .ps-container.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: #eee;
      opacity: 0.9;
    }

    .ps-container.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: #999;
    }

    .ps-container.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: #eee;
      opacity: 0.9;
    }

    .ps-container.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: #999;
    }

    .ps-container>.ps-scrollbar-x-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      bottom: 3px;
      /* there must be 'bottom' for ps-scrollbar-x-rail */
      height: 8px;
    }

    .ps-container>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      position: absolute;
      /* please don't change 'position' */
      background-color: #aaa;
      border-radius: 4px;
      transition: background-color .2s linear;
      bottom: 0;
      /* there must be 'bottom' for ps-scrollbar-x */
      height: 8px;
    }

    .ps-container>.ps-scrollbar-y-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      right: 3px;
      /* there must be 'right' for ps-scrollbar-y-rail */
      width: 8px;
    }

    .ps-container>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      position: absolute;
      /* please don't change 'position' */
      background-color: #aaa;
      border-radius: 4px;
      transition: background-color .2s linear;
      right: 0;
      /* there must be 'right' for ps-scrollbar-y */
      width: 8px;
    }

    .ps-container:hover.ps-in-scrolling {
      pointer-events: none;
    }

    .ps-container:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: #eee;
      opacity: 0.9;
    }

    .ps-container:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: #999;
    }

    .ps-container:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: #eee;
      opacity: 0.9;
    }

    .ps-container:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: #999;
    }

    .ps-container:hover>.ps-scrollbar-x-rail,
    .ps-container:hover>.ps-scrollbar-y-rail {
      opacity: 0.6;
    }

    .ps-container:hover>.ps-scrollbar-x-rail:hover {
      background-color: #eee;
      opacity: 0.9;
    }

    .ps-container:hover>.ps-scrollbar-x-rail:hover>.ps-scrollbar-x {
      background-color: #999;
    }

    .ps-container:hover>.ps-scrollbar-y-rail:hover {
      background-color: #eee;
      opacity: 0.9;
    }

    .ps-container:hover>.ps-scrollbar-y-rail:hover>.ps-scrollbar-y {
      background-color: #999;
    }

    .ps-theme-dark {
      -ms-touch-action: none;
      touch-action: none;
      overflow: hidden !important;
      -ms-overflow-style: none;
    }

    @supports (-ms-overflow-style: none) {
      .ps-theme-dark {
        overflow: auto !important;
      }
    }

    @media screen and (-ms-high-contrast: active),
    (-ms-high-contrast: none) {
      .ps-theme-dark {
        overflow: auto !important;
      }
    }

    .ps-theme-dark.ps-active-x>.ps-scrollbar-x-rail,
    .ps-theme-dark.ps-active-y>.ps-scrollbar-y-rail {
      display: block;
      background-color: transperant;
    }

    .ps-theme-dark.ps-in-scrolling {
      pointer-events: none;
    }

    .ps-theme-dark.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .ps-theme-dark.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .ps-theme-dark.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .ps-theme-dark.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .ps-theme-dark>.ps-scrollbar-x-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      bottom: 3px;
      /* there must be 'bottom' for ps-scrollbar-x-rail */
      height: 8px;
    }

    .ps-theme-dark>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      position: absolute;
      /* please don't change 'position' */
      background-color: rgba(0, 0, 0, 0.2);
      border-radius: 4px;
      transition: background-color .2s linear;
      bottom: 0;
      /* there must be 'bottom' for ps-scrollbar-x */
      height: 8px;
    }

    .ps-theme-dark>.ps-scrollbar-y-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      right: 0;
      /* there must be 'right' for ps-scrollbar-y-rail */
      width: 6px;
    }

    .ps-theme-dark>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      position: absolute;
      /* please don't change 'position' */
      background-color: rgba(0, 0, 0, 0.2);
      border-radius: 4px;
      transition: background-color .2s linear;
      right: 0;
      /* there must be 'right' for ps-scrollbar-y */
      width: 6px;
    }

    .ps-theme-dark:hover.ps-in-scrolling {
      pointer-events: none;
    }

    .ps-theme-dark:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .ps-theme-dark:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .ps-theme-dark:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .ps-theme-dark:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .ps-theme-dark:hover>.ps-scrollbar-x-rail,
    .ps-theme-dark:hover>.ps-scrollbar-y-rail {
      opacity: 0.6;
    }

    .ps-theme-dark:hover>.ps-scrollbar-x-rail:hover {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .ps-theme-dark:hover>.ps-scrollbar-x-rail:hover>.ps-scrollbar-x {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .ps-theme-dark:hover>.ps-scrollbar-y-rail:hover {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .ps-theme-dark:hover>.ps-scrollbar-y-rail:hover>.ps-scrollbar-y {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .ps-theme-light {
      -ms-touch-action: none;
      touch-action: none;
      overflow: hidden !important;
      -ms-overflow-style: none;
    }

    @supports (-ms-overflow-style: none) {
      .ps-theme-light {
        overflow: auto !important;
      }
    }

    @media screen and (-ms-high-contrast: active),
    (-ms-high-contrast: none) {
      .ps-theme-light {
        overflow: auto !important;
      }
    }

    .ps-theme-light.ps-active-x>.ps-scrollbar-x-rail,
    .ps-theme-light.ps-active-y>.ps-scrollbar-y-rail {
      display: block;
      background-color: transperant;
    }

    .ps-theme-light.ps-in-scrolling {
      pointer-events: none;
    }

    .ps-theme-light.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: rgba(255, 255, 255, 0.2);
      opacity: 0.9;
    }

    .ps-theme-light.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: rgba(255, 255, 255, 0.8);
    }

    .ps-theme-light.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: rgba(255, 255, 255, 0.2);
      opacity: 0.9;
    }

    .ps-theme-light.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: rgba(255, 255, 255, 0.8);
    }

    .ps-theme-light>.ps-scrollbar-x-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      bottom: 3px;
      /* there must be 'bottom' for ps-scrollbar-x-rail */
      height: 8px;
    }

    .ps-theme-light>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      position: absolute;
      /* please don't change 'position' */
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 4px;
      transition: background-color .2s linear;
      bottom: 0;
      /* there must be 'bottom' for ps-scrollbar-x */
      height: 8px;
    }

    .ps-theme-light>.ps-scrollbar-y-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      right: 0;
      /* there must be 'right' for ps-scrollbar-y-rail */
      width: 6px;
    }

    .ps-theme-light>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      position: absolute;
      /* please don't change 'position' */
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 4px;
      transition: background-color .2s linear;
      right: 0;
      /* there must be 'right' for ps-scrollbar-y */
      width: 6px;
    }

    .ps-theme-light:hover.ps-in-scrolling {
      pointer-events: none;
    }

    .ps-theme-light:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: rgba(255, 255, 255, 0.2);
      opacity: 0.9;
    }

    .ps-theme-light:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: rgba(255, 255, 255, 0.8);
    }

    .ps-theme-light:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: rgba(255, 255, 255, 0.2);
      opacity: 0.9;
    }

    .ps-theme-light:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: rgba(255, 255, 255, 0.8);
    }

    .ps-theme-light:hover>.ps-scrollbar-x-rail,
    .ps-theme-light:hover>.ps-scrollbar-y-rail {
      opacity: 0.6;
    }

    .ps-theme-light:hover>.ps-scrollbar-x-rail:hover {
      background-color: rgba(255, 255, 255, 0.2);
      opacity: 0.9;
    }

    .ps-theme-light:hover>.ps-scrollbar-x-rail:hover>.ps-scrollbar-x {
      background-color: rgba(255, 255, 255, 0.8);
    }

    .ps-theme-light:hover>.ps-scrollbar-y-rail:hover {
      background-color: rgba(255, 255, 255, 0.2);
      opacity: 0.9;
    }

    .ps-theme-light:hover>.ps-scrollbar-y-rail:hover>.ps-scrollbar-y {
      background-color: rgba(255, 255, 255, 0.8);
    }

    .menu-collapsed .ps-theme-dark {
      -ms-touch-action: none;
      touch-action: none;
      overflow: hidden !important;
      -ms-overflow-style: none;
    }

    @supports (-ms-overflow-style: none) {
      .menu-collapsed .ps-theme-dark {
        overflow: auto !important;
      }
    }

    @media screen and (-ms-high-contrast: active),
    (-ms-high-contrast: none) {
      .menu-collapsed .ps-theme-dark {
        overflow: auto !important;
      }
    }

    .menu-collapsed .ps-theme-dark.ps-active-x>.ps-scrollbar-x-rail,
    .menu-collapsed .ps-theme-dark.ps-active-y>.ps-scrollbar-y-rail {
      display: block;
      background-color: transparent;
    }

    .menu-collapsed .ps-theme-dark.ps-in-scrolling {
      pointer-events: none;
    }

    .menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: #eee;
      opacity: 0.9;
    }

    .menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: #999;
    }

    .menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: #eee;
      opacity: 0.9;
    }

    .menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: #999;
    }

    .menu-collapsed .ps-theme-dark>.ps-scrollbar-x-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      bottom: 3px;
      /* there must be 'bottom' for ps-scrollbar-x-rail */
      height: 8px;
    }

    .menu-collapsed .ps-theme-dark>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      position: absolute;
      /* please don't change 'position' */
      background-color: #55595c !important;
      border-radius: 4px;
      transition: background-color .2s linear;
      bottom: 0;
      /* there must be 'bottom' for ps-scrollbar-x */
      height: 8px;
    }

    .menu-collapsed .ps-theme-dark>.ps-scrollbar-y-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      right: 0;
      /* there must be 'right' for ps-scrollbar-y-rail */
      width: 6px;
    }

    .menu-collapsed .ps-theme-dark>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      position: absolute;
      /* please don't change 'position' */
      background-color: #55595c !important;
      border-radius: 4px;
      transition: background-color .2s linear;
      right: 0;
      /* there must be 'right' for ps-scrollbar-y */
      width: 6px;
    }

    .menu-collapsed .ps-theme-dark:hover.ps-in-scrolling {
      pointer-events: none;
    }

    .menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: #eee;
      opacity: 0.9;
    }

    .menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: #999;
    }

    .menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: #eee;
      opacity: 0.9;
    }

    .menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: #999;
    }

    .menu-collapsed .ps-theme-dark:hover>.ps-scrollbar-x-rail,
    .menu-collapsed .ps-theme-dark:hover>.ps-scrollbar-y-rail {
      opacity: 0;
    }

    .menu-collapsed .ps-theme-dark:hover>.ps-scrollbar-x-rail:hover {
      background-color: #eee;
      opacity: 0.9;
    }

    .menu-collapsed .ps-theme-dark:hover>.ps-scrollbar-x-rail:hover>.ps-scrollbar-x {
      background-color: #999;
    }

    .menu-collapsed .ps-theme-dark:hover>.ps-scrollbar-y-rail:hover {
      background-color: #eee;
      opacity: 0.9;
    }

    .menu-collapsed .ps-theme-dark:hover>.ps-scrollbar-y-rail:hover>.ps-scrollbar-y {
      background-color: #999;
    }

    .menu-collapsed ul.ps-theme-dark {
      -ms-touch-action: none;
      touch-action: none;
      overflow: hidden !important;
      -ms-overflow-style: none;
    }

    @supports (-ms-overflow-style: none) {
      .menu-collapsed ul.ps-theme-dark {
        overflow: auto !important;
      }
    }

    @media screen and (-ms-high-contrast: active),
    (-ms-high-contrast: none) {
      .menu-collapsed ul.ps-theme-dark {
        overflow: auto !important;
      }
    }

    .menu-collapsed ul.ps-theme-dark.ps-active-x>.ps-scrollbar-x-rail,
    .menu-collapsed ul.ps-theme-dark.ps-active-y>.ps-scrollbar-y-rail {
      display: block;
      background-color: transperant;
    }

    .menu-collapsed ul.ps-theme-dark.ps-in-scrolling {
      pointer-events: none;
    }

    .menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .menu-collapsed ul.ps-theme-dark>.ps-scrollbar-x-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      bottom: 3px;
      /* there must be 'bottom' for ps-scrollbar-x-rail */
      height: 8px;
    }

    .menu-collapsed ul.ps-theme-dark>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      position: absolute;
      /* please don't change 'position' */
      background-color: rgba(0, 0, 0, 0.2);
      border-radius: 4px;
      transition: background-color .2s linear;
      bottom: 0;
      /* there must be 'bottom' for ps-scrollbar-x */
      height: 8px;
    }

    .menu-collapsed ul.ps-theme-dark>.ps-scrollbar-y-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      right: 0;
      /* there must be 'right' for ps-scrollbar-y-rail */
      width: 6px;
    }

    .menu-collapsed ul.ps-theme-dark>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      position: absolute;
      /* please don't change 'position' */
      background-color: rgba(0, 0, 0, 0.2);
      border-radius: 4px;
      transition: background-color .2s linear;
      right: 0;
      /* there must be 'right' for ps-scrollbar-y */
      width: 6px;
    }

    .menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling {
      pointer-events: none;
    }

    .menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .menu-collapsed ul.ps-theme-dark:hover>.ps-scrollbar-x-rail,
    .menu-collapsed ul.ps-theme-dark:hover>.ps-scrollbar-y-rail {
      opacity: 0.6;
    }

    .menu-collapsed ul.ps-theme-dark:hover>.ps-scrollbar-x-rail:hover {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .menu-collapsed ul.ps-theme-dark:hover>.ps-scrollbar-x-rail:hover>.ps-scrollbar-x {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .menu-collapsed ul.ps-theme-dark:hover>.ps-scrollbar-y-rail:hover {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .menu-collapsed ul.ps-theme-dark:hover>.ps-scrollbar-y-rail:hover>.ps-scrollbar-y {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark {
      -ms-touch-action: none;
      touch-action: none;
      overflow: hidden !important;
      -ms-overflow-style: none;
    }

    @supports (-ms-overflow-style: none) {
      .vertical-menu-modern.menu-collapsed .ps-theme-dark {
        overflow: auto !important;
      }
    }

    @media screen and (-ms-high-contrast: active),
    (-ms-high-contrast: none) {
      .vertical-menu-modern.menu-collapsed .ps-theme-dark {
        overflow: auto !important;
      }
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-active-x>.ps-scrollbar-x-rail,
    .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-active-y>.ps-scrollbar-y-rail {
      display: block;
      background-color: transperant;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-in-scrolling {
      pointer-events: none;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark>.ps-scrollbar-x-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      bottom: 3px;
      /* there must be 'bottom' for ps-scrollbar-x-rail */
      height: 8px;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      position: absolute;
      /* please don't change 'position' */
      background-color: rgba(0, 0, 0, 0.2);
      border-radius: 4px;
      transition: background-color .2s linear;
      bottom: 0;
      /* there must be 'bottom' for ps-scrollbar-x */
      height: 8px;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark>.ps-scrollbar-y-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      right: 0;
      /* there must be 'right' for ps-scrollbar-y-rail */
      width: 6px;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      position: absolute;
      /* please don't change 'position' */
      background-color: rgba(0, 0, 0, 0.2);
      border-radius: 4px;
      transition: background-color .2s linear;
      right: 0;
      /* there must be 'right' for ps-scrollbar-y */
      width: 6px;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover.ps-in-scrolling {
      pointer-events: none;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover>.ps-scrollbar-x-rail,
    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover>.ps-scrollbar-y-rail {
      opacity: 0.6;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover>.ps-scrollbar-x-rail:hover {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover>.ps-scrollbar-x-rail:hover>.ps-scrollbar-x {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover>.ps-scrollbar-y-rail:hover {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .vertical-menu-modern.menu-collapsed .ps-theme-dark:hover>.ps-scrollbar-y-rail:hover>.ps-scrollbar-y {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark {
      -ms-touch-action: none;
      touch-action: none;
      overflow: hidden !important;
      -ms-overflow-style: none;
    }

    @supports (-ms-overflow-style: none) {
      .vertical-menu-modern.menu-collapsed ul.ps-theme-dark {
        overflow: auto !important;
      }
    }

    @media screen and (-ms-high-contrast: active),
    (-ms-high-contrast: none) {
      .vertical-menu-modern.menu-collapsed ul.ps-theme-dark {
        overflow: auto !important;
      }
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-active-x>.ps-scrollbar-x-rail,
    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-active-y>.ps-scrollbar-y-rail {
      display: block;
      background-color: transperant;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-in-scrolling {
      pointer-events: none;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark>.ps-scrollbar-x-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      bottom: 3px;
      /* there must be 'bottom' for ps-scrollbar-x-rail */
      height: 8px;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      position: absolute;
      /* please don't change 'position' */
      background-color: rgba(0, 0, 0, 0.2);
      border-radius: 4px;
      transition: background-color .2s linear;
      bottom: 0;
      /* there must be 'bottom' for ps-scrollbar-x */
      height: 8px;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark>.ps-scrollbar-y-rail {
      display: none;
      position: absolute;
      /* please don't change 'position' */
      border-radius: 4px;
      opacity: 0;
      transition: background-color .2s linear, opacity .2s linear;
      right: 0;
      /* there must be 'right' for ps-scrollbar-y-rail */
      width: 6px;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      position: absolute;
      /* please don't change 'position' */
      background-color: rgba(0, 0, 0, 0.2);
      border-radius: 4px;
      transition: background-color .2s linear;
      right: 0;
      /* there must be 'right' for ps-scrollbar-y */
      width: 6px;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling {
      pointer-events: none;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover>.ps-scrollbar-x-rail,
    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover>.ps-scrollbar-y-rail {
      opacity: 0.6;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover>.ps-scrollbar-x-rail:hover {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover>.ps-scrollbar-x-rail:hover>.ps-scrollbar-x {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover>.ps-scrollbar-y-rail:hover {
      background-color: rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .vertical-menu-modern.menu-collapsed ul.ps-theme-dark:hover>.ps-scrollbar-y-rail:hover>.ps-scrollbar-y {
      background-color: rgba(0, 0, 0, 0.4);
    }

    /* to make scrollbars always visible */
    .always-visible.ps-container>.ps-scrollbar-x-rail,
    .always-visible.ps-container>.ps-scrollbar-y-rail {
      opacity: 0.6;
    }

    .large-margin.ps-container>.ps-scrollbar-x-rail {
      margin: 0 25%;
    }

    .large-margin.ps-container>.ps-scrollbar-y-rail {
      margin: 100px 0;
    }

    @media screen and (min-width: 0px) {
      head {
        font-family: "xs 0px";
      }

      body:after {
        content: "xs - min-width: 0px";
      }
    }

    @media screen and (min-width: 544px) {
      head {
        font-family: "sm 544px";
      }

      body:after {
        content: "sm - min-width: 544px";
      }
    }

    @media screen and (min-width: 768px) {
      head {
        font-family: "md 768px";
      }

      body:after {
        content: "md - min-width: 768px";
      }
    }

    @media screen and (min-width: 992px) {
      head {
        font-family: "lg 992px";
      }

      body:after {
        content: "lg - min-width: 992px";
      }
    }

    @media screen and (min-width: 1200px) {
      head {
        font-family: "xl 1200px";
      }

      body:after {
        content: "xl - min-width: 1200px";
      }
    }

    head {
      clear: both;
    }

    head title {
      font-family: "xs 0px, sm 544px, md 768px, lg 992px, xl 1200px";
    }

    body:after {
      display: none;
    }

    *[data-usn-if] {
      display: none;
    }

    /* ------------------------------------------------------------------------------
  *
  *  # Editor CSS
  *
  *  Summernote, Code Mirror & ACE Editors
  *
  *
  * ---------------------------------------------------------------------------- */
    /* CKEditor Starts */
    #cke_ckeditor-inline {
      max-width: 68%;
    }

    /* CKEditor Ends */
    /* Summernote Style Starts */
    .note-editor.note-frame {
      border-radius: 0.3rem;
    }

    .note-popover.popover {
      display: none;
    }

    .note-toolbar.panel-heading {
      color: #333;
      background-color: #f9f9f9;
      border-bottom: 1px solid #ddd;
      padding: 0.25rem 1rem 0.55rem !important;
    }

    .note-toolbar button.note-btn {
      background-color: transparent;
      border: 1px solid #ccc;
      padding: 0.5rem 1rem;
    }

    .note-toolbar .dropdown-toggle::after {
      display: none;
    }

    /* Summernote Style Ends */
    .content {
      overflow: visible;
      position: relative;
      width: auto;
      margin-left: 0;
      min-height: auto;
      padding: inherit;
    }

    /* TinyMCE */
    .mce-tinymce-inline {
      max-width: 80% !important;
    }

    .mce-container-body {
      overflow: auto;
    }

    /* Code Mirror */
    .CodeMirror {
      border-top: 1px solid black;
      border-bottom: 1px solid black;
    }

    .CodeMirror .CodeMirror-selected {
      background-color: skyblue !important;
    }

    .CodeMirror .CodeMirror-selectedtext {
      color: white;
    }

    .CodeMirror .styled-background {
      background-color: #ff7;
    }

    .CodeMirror .cm-matchhighlight {
      background-color: lightgreen;
    }

    .CodeMirror .CodeMirror-selection-highlight-scrollbar {
      background-color: green;
    }

    #codemirror-tabs+.CodeMirror .cm-tab {
      background: url(../../app-assets/images/icons/img.png);
      background-position: right;
      background-repeat: no-repeat;
    }

    iframe#preview {
      height: 300px;
      border: 1px solid black;
      width: 100%;
    }

    /* Ace Editor */
    .ace_editor {
      position: relative;
      overflow: hidden;
      height: 320px;
    }

    /* Quill Editor */
    .ql-editor h1,
    .ql-editor h2,
    .ql-editor h3,
    .ql-editor h4,
    .ql-editor h5,
    .ql-editor h6,
    .ql-editor,
    .ql-toolbar {
      font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      font-size: 1rem;
    }

    .group-area {
      margin-bottom: 3rem;
    }

    .block {
      display: block;
      width: 100%;
    }

    select[multiple='multiple'] {
      overflow: hidden;
    }

    /* Input with icon */
    .has-icon-left .form-control {
      padding-left: 2.5rem;
    }

    .form-control-position {
      position: absolute;
      top: 1px;
      right: 0;
      z-index: 2;
      display: block;
      width: 2.5rem;
      height: 2.5rem;
      line-height: 3.2rem;
      text-align: center;
    }

    select.form-control:not([size]):not([multiple]),
    input.form-control {
      /*--------------------------
        Sizing
        --------------------------*/
    }

    select.form-control:not([size]):not([multiple]).input-xl,
    input.form-control.input-xl {
      height: 3.75rem;
      padding: 0.5rem 1rem;
      font-size: 1.5rem;
      line-height: 1.45;
      border-radius: 0.35rem;
    }

    select.form-control:not([size]):not([multiple]).form-group-xl .form-control,
    input.form-control.form-group-xl .form-control {
      height: 3.75rem;
      padding: 0.5rem 0.5rem;
      font-size: 1.5rem;
      line-height: 1.45;
      border-radius: 0.35rem;
    }

    select.form-control:not([size]):not([multiple]).form-group-xl .form-control-static,
    input.form-control.form-group-xl .form-control-static {
      height: 3.55rem;
      padding: 0.5rem 0.5rem;
      font-size: 1.5rem;
      line-height: 1.7;
    }

    select.form-control:not([size]):not([multiple]).input-lg,
    input.form-control.input-lg {
      height: 3rem;
      padding: 0.75rem 0.75rem;
      font-size: 1.25rem;
      line-height: 1.45;
      border-radius: 0.35rem;
    }

    select.form-control:not([size]):not([multiple]).form-group-lg .form-control,
    input.form-control.form-group-lg .form-control {
      height: 3rem;
      padding: 1rem 1.25rem;
      font-size: 1.25rem;
      line-height: 1.25;
      border-radius: 0.35rem;
    }

    select.form-control:not([size]):not([multiple]).form-group-lg select.form-control,
    input.form-control.form-group-lg select.form-control {
      height: calc(3.5625rem + 2px);
      line-height: calc(3.5625rem + 2px);
    }

    select.form-control:not([size]):not([multiple]).form-group-lg textarea.form-control,
    select.form-control:not([size]):not([multiple]).form-group-lg select[multiple].form-control,
    input.form-control.form-group-lg textarea.form-control,
    input.form-control.form-group-lg select[multiple].form-control {
      height: auto;
    }

    select.form-control:not([size]):not([multiple]).form-group-lg .form-control-static,
    input.form-control.form-group-lg .form-control-static {
      height: calc(3.5625rem + 2px);
      min-height: 2.7rem;
      padding: 2rem 1.25rem;
      font-size: 1.25rem;
      line-height: 1.25;
    }

    select.form-control:not([size]):not([multiple]).input-sm,
    input.form-control.input-sm {
      height: 2rem;
      padding: 0.95rem 0.95rem;
      font-size: 0.975rem;
      line-height: 1.45;
      border-radius: 0.21rem;
    }

    select.form-control:not([size]):not([multiple]).form-group-sm .form-control,
    input.form-control.form-group-sm .form-control {
      /* font-size: $font-size-sm;
                line-height: $line-height-sm; */
      height: calc(1.875rem + 2px);
      padding: 0.5rem 0.75rem;
      font-size: 0.875rem;
      line-height: 1.45;
      border-radius: 0.21rem;
    }

    select.form-control:not([size]):not([multiple]).form-group-sm .form-control-static,
    input.form-control.form-group-sm .form-control-static {
      font-size: 0.875rem;
      line-height: 1;
    }

    select.form-control:not([size]):not([multiple]).input-xs,
    input.form-control.input-xs {
      height: 1.525rem;
      padding: 0.1rem 0.525rem;
      font-size: 0.75rem;
      line-height: 1.45;
      border-radius: 0.12rem;
    }

    select.form-control:not([size]):not([multiple]).form-group-xs .form-control,
    input.form-control.form-group-xs .form-control {
      height: 1.525rem;
      padding: 0.2rem 0.275rem;
      font-size: 0.75rem;
      line-height: 1.45;
      border-radius: 0.12rem;
    }

    select.form-control:not([size]):not([multiple]).form-group-xs .form-control-static,
    input.form-control.form-group-xs .form-control-static {
      height: 1.525rem;
      padding: 0.2rem 0.275rem;
      font-size: 0.75rem;
      line-height: 1.5;
    }

    select.form-control:not([size]):not([multiple]).input-xl+.form-control-position,
    select.form-control:not([size]):not([multiple]).form-group-xl>.form-control-position,
    input.form-control.input-xl+.form-control-position,
    input.form-control.form-group-xl>.form-control-position {
      width: 3.55rem;
      height: 3.55rem;
      line-height: 3.55rem;
      top: 4px;
    }

    select.form-control:not([size]):not([multiple]).input-lg+.form-control-position,
    select.form-control:not([size]):not([multiple]).form-group-lg>.form-control-position,
    input.form-control.input-lg+.form-control-position,
    input.form-control.form-group-lg>.form-control-position {
      width: 3rem;
      height: 3rem;
      line-height: 3rem;
      top: 4px;
    }

    select.form-control:not([size]):not([multiple]).input-sm+.form-control-position,
    select.form-control:not([size]):not([multiple]).form-group-sm>.form-control-position,
    input.form-control.input-sm+.form-control-position,
    input.form-control.form-group-sm>.form-control-position {
      width: calc(1.875rem + 2px);
      height: calc(1.875rem + 2px);
      line-height: calc(1.875rem + 2px);
      top: 2px;
    }

    select.form-control:not([size]):not([multiple]).input-xs+.form-control-position,
    select.form-control:not([size]):not([multiple]).form-group-xs>.form-control-position,
    input.form-control.input-xs+.form-control-position,
    input.form-control.form-group-xs>.form-control-position {
      width: 1.525rem;
      height: 1.525rem;
      line-height: 1.525rem;
      top: 0;
    }

    /*---------------------------------
  Input Icon
  ---------------------------------*/
    .position-relative .form-control {
      padding-right: calc(2.75rem + 2px);
    }

    .position-relative .form-control.input-xl {
      padding-right: 3.55rem;
    }

    .position-relative .form-control.input-lg {
      padding-right: calc(3.5625rem + 2px);
    }

    .position-relative .form-control.input-sm {
      padding-right: calc(1.875rem + 2px);
    }

    .position-relative .form-control.input-xs {
      padding-right: 1.525rem;
    }

    /* Input Icon left */
    .has-icon-left .form-control {
      padding-right: 1rem;
      padding-left: calc(2.75rem + 2px);
    }

    .has-icon-left .form-control.input-xl {
      padding-right: 0.5rem;
      padding-left: 3.55rem;
    }

    .has-icon-left .form-control.input-lg {
      padding-right: 1.25rem;
      padding-left: calc(3.5625rem + 2px);
    }

    .has-icon-left .form-control.input-sm {
      padding-right: 0.75rem;
      padding-left: 1.7rem;
    }

    .has-icon-left .form-control.input-xs {
      padding-right: 0.275rem;
      padding-left: 1.525rem;
    }

    .has-icon-left .form-control-position {
      right: auto;
      left: inherit;
    }

    input[type="color"] {
      height: calc(2.75rem + 2px);
    }

    input[type="date"].form-control,
    input[type="time"].form-control,
    input[type="datetime-local"].form-control,
    input[type="month"].form-control {
      line-height: 1.45;
    }

    .font-size-large {
      font-size: 1.25rem;
    }

    .font-size-base {
      font-size: 1rem;
    }

    .font-size-small {
      font-size: 0.875rem;
    }

    .font-size-xsmall {
      font-size: 0.75rem;
    }

    .form-group-style {
      position: relative;
      border: 1px solid rgba(0, 0, 0, 0.07);
      padding-top: 7px;
      padding-left: 12px;
      padding-right: 12px;
      padding-bottom: 4px;
      overflow: hidden;
    }

    .form-group-style label {
      margin: 0;
      text-transform: uppercase;
      font-weight: 700;
    }

    .form-group-style .form-control {
      border: none;
      padding-left: 0;
      margin-top: -4px;
      background: none;
    }

    .form-group-style.focus {
      background-color: #f0f0f0;
    }

    .form-group-style.focus label {
      opacity: 0.5;
    }

    .form-group-style label.filled {
      opacity: 0.5;
    }

    .input-group-xs .form-control,
    .input-group-xs .input-group-addon,
    .input-group-xs .input-group-btn>button {
      padding: 0.175rem 0.5rem;
      font-size: 0.725rem;
      line-height: 1.677777;
      border-bottom-left-radius: 0.175rem;
      border-top-left-radius: 0.175rem;
    }

    .input-group-xs .input-group-btn>button {
      border-radius: 0.175rem;
    }

    /* .input-group-btn > button {
    &.dropdown-toggle::after{
        margin-top: -1.75rem;
    }
  } */
    .input-group-addon {
      padding: 0.75rem;
    }

    .floating-label-form-group-with-focus label,
    .floating-label-form-group-with-value label {
      color: #666EE8 !important;
      text-transform: uppercase;
      font-weight: 400;
    }

    .select2-container--classic:focus,
    .select2-container--default:focus {
      outline: none;
    }

    .select2-container--classic .img-flag,
    .select2-container--default .img-flag {
      height: 15px;
      width: 18px;
    }

    .select2-container--classic .select2-selection--single,
    .select2-container--default .select2-selection--single {
      height: 40px !important;
      padding: 5px;
      border-color: #D9D9D9 !important;
    }

    .select2-container--classic .select2-selection--single .select2-selection__rendered i,
    .select2-container--default .select2-selection--single .select2-selection__rendered i {
      margin-right: 0.5rem;
    }

    .select2-container--classic.select2-container--open .select2-selection--single,
    .select2-container--default.select2-container--open .select2-selection--single {
      border-color: #CCCCCC !important;
      outline: 0;
    }

    .select2-container--classic.select2-container--focus,
    .select2-container--default.select2-container--focus {
      outline: 0;
    }

    .select2-container--classic.select2-container--focus .select2-selection--multiple,
    .select2-container--default.select2-container--focus .select2-selection--multiple {
      border-color: #CCCCCC !important;
      outline: 0;
    }

    .select2-container--classic .select2-selection--multiple,
    .select2-container--default .select2-selection--multiple {
      min-height: 40px !important;
      padding: 5px 8px !important;
      border-color: #D9D9D9 !important;
    }

    .select2-container--classic .select2-selection--multiple .select2-selection__choice,
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
      padding: 2px 6px !important;
      margin-top: 0px !important;
      background-color: #666EE8 !important;
      border-color: #3a44e1 !important;
      color: #FFFFFF;
      margin-right: 8px !important;
      margin-bottom: 2px;
    }

    .select2-container--classic .select2-selection--multiple .select2-selection__rendered,
    .select2-container--default .select2-selection--multiple .select2-selection__rendered {
      display: block !important;
      padding: 0 !important;
    }

    .select2-container--classic .select2-selection--multiple .select2-selection__choice__remove,
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
      color: #FFFFFF !important;
      float: right;
      margin-left: 0.5rem;
    }

    .select2-container--classic .select2-selection--multiple i,
    .select2-container--default .select2-selection--multiple i {
      position: relative;
      top: 1px;
      margin-right: 0.5rem;
      padding-left: 1px;
    }

    .select2-container--classic .select2-selection--multiple[class*=bg-] .select2-selection__choice,
    .select2-container--default .select2-selection--multiple[class*=bg-] .select2-selection__choice {
      background-color: rgba(0, 0, 0, 0.15) !important;
      border-color: rgba(0, 0, 0, 0.2) !important;
    }

    .select2-container--classic .select2-results__options .select2-results__option i,
    .select2-container--default .select2-results__options .select2-results__option i {
      margin-right: 0.5rem;
    }

    .select2-container--classic .select2-results__options .select2-results__option[aria-selected=true],
    .select2-container--default .select2-results__options .select2-results__option[aria-selected=true] {
      background-color: #666EE8 !important;
      color: #FFFFFF !important;
    }

    .select2-container--classic .select2-results__option--highlighted[aria-selected],
    .select2-container--default .select2-results__option--highlighted[aria-selected] {
      background-color: #E0E0E0 !important;
      color: #424242 !important;
    }

    .select2-container--classic .select2-result-repository .select2-result-repository__avatar,
    .select2-container--default .select2-result-repository .select2-result-repository__avatar {
      width: 22%;
      float: left;
    }

    .select2-container--classic .select2-result-repository .select2-result-repository__avatar img,
    .select2-container--default .select2-result-repository .select2-result-repository__avatar img {
      width: 75px;
    }

    .select2-container--classic .select2-result-repository .select2-result-repository__meta,
    .select2-container--default .select2-result-repository .select2-result-repository__meta {
      width: 78%;
      float: right;
    }

    .select2-container--classic .select2-result-repository .select2-result-repository__meta .select2-result-repository__title,
    .select2-container--default .select2-result-repository .select2-result-repository__meta .select2-result-repository__title {
      font-size: 1.35rem;
      font-weight: 700;
      text-transform: capitalize;
    }

    .select2-container--classic .select2-result-repository .select2-result-repository__meta .select2-result-repository__statistics div,
    .select2-container--default .select2-result-repository .select2-result-repository__meta .select2-result-repository__statistics div {
      display: inline;
      margin-right: 1rem;
    }

    .select2-container--classic .select-lg,
    .select2-container--default .select-lg {
      height: calc(3.5625rem + 2px)0.55 !important;
      font-size: 1.25rem;
      margin-bottom: 0 !important;
      padding: 0.75rem 0;
    }

    .select2-container--classic .select-lg.select2-selection--single .select2-selection__rendered,
    .select2-container--default .select-lg.select2-selection--single .select2-selection__rendered {
      padding-top: 0.1rem;
      padding-left: 1rem;
      padding-right: 5.5rem;
      line-height: 1;
    }

    .select2-container--classic .select-lg.select2-selection--single .select2-selection__arrow,
    .select2-container--default .select-lg.select2-selection--single .select2-selection__arrow {
      top: 0.75rem !important;
    }

    .select2-container--classic .select-lg.select2-selection--multiple .select2-selection__choice,
    .select2-container--default .select-lg.select2-selection--multiple .select2-selection__choice {
      padding: 0.2rem 0.75rem !important;
      font-size: 1.25rem;
    }

    .select2-container--classic .select-lg.select2-selection--multiple .select2-search--inline .select2-search__field,
    .select2-container--default .select-lg.select2-selection--multiple .select2-search--inline .select2-search__field {
      padding: 0;
      font-size: 1.25rem;
    }

    .select2-container--classic .select-sm,
    .select2-container--default .select-sm {
      height: calc(calc(1.875rem + 2px) + 0.5rem) !important;
      font-size: 0.875rem;
      padding: 0.35rem 0.2rem;
      margin-bottom: 0 !important;
    }

    .select2-container--classic .select-sm.select2-selection--single .select2-selection__rendered,
    .select2-container--default .select-sm.select2-selection--single .select2-selection__rendered {
      padding-right: 5.5rem;
    }

    .select2-container--classic .select-sm.select2-selection--single .select2-selection__arrow,
    .select2-container--default .select-sm.select2-selection--single .select2-selection__arrow {
      top: 0.5rem !important;
    }

    .select2-container--classic .select-sm.select2-selection--multiple,
    .select2-container--default .select-sm.select2-selection--multiple {
      min-height: calc(calc(1.875rem + 2px) + 0.5rem) !important;
      padding: 0.25rem 0.5rem !important;
    }

    .select2-container--classic .select-sm.select2-selection--multiple .select2-selection__choice,
    .select2-container--default .select-sm.select2-selection--multiple .select2-selection__choice {
      padding: 0 0.5rem !important;
      font-size: 0.875rem;
    }

    .select2-container--classic .select-sm.select2-selection--multiple .select2-search--inline .select2-search__field,
    .select2-container--default .select-sm.select2-selection--multiple .select2-search--inline .select2-search__field {
      padding: 0.35rem 0;
      margin-top: 0;
    }

    .select2-container--classic .select-xs,
    .select2-container--default .select-xs {
      height: calc(calc(1.875rem + 2px)) !important;
      padding: 0 0.2rem;
      font-size: 0.75rem;
      margin-bottom: 0 !important;
      line-height: 1.5;
    }

    .select2-container--classic .select-xs.select2-selection--single .select2-selection__rendered,
    .select2-container--default .select-xs.select2-selection--single .select2-selection__rendered {
      padding-left: 0.525rem;
      padding-right: 4.55rem;
    }

    .select2-container--classic .select-xs.select2-selection--single .select2-selection__arrow,
    .select2-container--default .select-xs.select2-selection--single .select2-selection__arrow {
      top: 0.175rem !important;
    }

    .select2-container--classic .select-xs.select2-selection--multiple,
    .select2-container--default .select-xs.select2-selection--multiple {
      min-height: calc(calc(1.875rem + 2px) + 0.2rem) !important;
      padding: 4px 6px !important;
    }

    .select2-container--classic .select-xs.select2-selection--multiple .select2-selection__choice,
    .select2-container--default .select-xs.select2-selection--multiple .select2-selection__choice {
      padding: 0 0.4rem !important;
      font-size: 0.75rem;
    }

    .select2-container--classic .select-xs.select2-selection--multiple .select2-search--inline .select2-search__field,
    .select2-container--default .select-xs.select2-selection--multiple .select2-search--inline .select2-search__field {
      padding: 0;
      font-size: 0.75rem;
      margin-top: 0;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
      top: 6px !important;
      right: 6px !important;
    }

    .select2-container--classic .select2-selection--single .select2-selection__arrow {
      top: 1px !important;
      right: 2px !important;
      height: 96% !important;
    }

    table.dataTable {
      border-spacing: 0px;
    }

    .content-wrapper table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
    .content-wrapper table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
      background-color: #666EE8;
      border-radius: 0;
      top: 10px;
      left: 10px;
      box-shadow: 0 0 2px #444;
    }

    .content-wrapper table.dataTable.dtr-inline.collapsed>tbody>tr.parent>td:first-child:before,
    .content-wrapper table.dataTable.dtr-inline.collapsed>tbody>tr.parent>th:first-child:before {
      background-color: #FF4961;
    }

    @media (max-width: 991.98px) {
      .dataTables_wrapper table {
        display: block;
        width: 100%;
        min-height: .01%;
        overflow-x: auto;
      }
    }

    .DTFC_LeftBodyLiner {
      top: -1px !important;
    }

    div.dataTables_wrapper {
      width: 100%;
      margin: 0 auto;
    }

    div.dataTables_wrapper div.dataTables_filter label {
      margin-top: 1rem;
    }

    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
      margin: 10px 0;
    }

    td.highlight {
      font-weight: bold;
      color: #666EE8;
      background-color: whitesmoke !important;
    }

    tr.group {
      background-color: #ededed !important;
    }

    tr.group:hover {
      background-color: #ededed !important;
    }

    th {
      white-space: nowrap;
    }

    .toolbar {
      float: left;
    }

    .no-style thead>tr>th,
    .no-style tfoot>tr>th {
      border-bottom: 1px solid #e3ebf3;
    }

    table.dataTable.compact tbody td {
      padding: 4px;
    }

    .table-striped tbody tr.odd.selected,
    .table-striped tbody tr.even.selected {
      background-color: #666EE8;
      color: #fff;
    }

    table.dataTable tbody>tr>.selected {
      background-color: #666EE8;
    }

    a.dt-button.red {
      color: red;
    }

    a.dt-button.orange {
      color: orange;
    }

    a.dt-button.green {
      color: green;
    }

    .dataex-css-row tr {
      height: 55px;
    }

    .dataex-key-customstyling td.focus {
      outline: 1px solid #ac1212;
      outline-offset: -3px;
      background-color: #e3ebf3 !important;
    }

    .dt-events-log {
      border: 1px solid #888;
      background: #f7f7f7;
      padding: 1em;
      margin-bottom: 1em;
    }

    .dataTables_wrapper tfoot input {
      width: 100%;
      box-sizing: border-box;
    }

    td.details-control {
      background: url("../images/datatables/resources/details_open.png") no-repeat center center;
      cursor: pointer;
    }

    tr.shown td.details-control {
      background: url("../images/datatables/resources/details_close.png") no-repeat center center;
    }

    .DTFC_LeftBodyLiner,
    .DTFC_RightBodyLiner {
      background: white;
    }

    .datepaginator .pagination li,
    .datepaginator-sm .pagination li,
    .datepaginator-lg .pagination li {
      display: inline-block;
    }

    .datepaginator .pagination li a,
    .datepaginator-sm .pagination li a,
    .datepaginator-lg .pagination li a {
      position: relative;
      float: left;
      padding: 0.5rem 0.75rem;
      margin-left: -1px;
      line-height: 1.6;
      color: #1E9FF2;
      text-decoration: none;
      background-color: #fff;
      border: none;
    }

    .datepaginator .pagination li a.dp-off,
    .datepaginator-sm .pagination li a.dp-off,
    .datepaginator-lg .pagination li a.dp-off {
      background-color: #f5f5f5 !important;
    }

    .datepaginator .pagination li a.dp-today,
    .datepaginator-sm .pagination li a.dp-today,
    .datepaginator-lg .pagination li a.dp-today {
      background-color: #1E9FF2 !important;
    }

    .datepaginator .pagination li a.dp-selected,
    .datepaginator-sm .pagination li a.dp-selected,
    .datepaginator-lg .pagination li a.dp-selected {
      background-color: #1E9FF2 !important;
    }

    .datepaginator .pagination li a .dp-divider,
    .datepaginator-sm .pagination li a .dp-divider,
    .datepaginator-lg .pagination li a .dp-divider {
      border-left: 2px solid #ddd !important;
    }

    .datepaginator .pagination li a #dp-calendar,
    .datepaginator-sm .pagination li a #dp-calendar,
    .datepaginator-lg .pagination li a #dp-calendar {
      padding: 0px 5px 0 0 !important;
      margin-right: 3px;
      position: absolute;
      right: -5px;
      top: 0px;
      font-size: 1.4rem;
    }

    .pagination.pagination-separate li:first-child a {
      margin-left: 0;
    }

    .pagination.pagination-separate li a {
      margin-left: 3px;
    }

    .pagination.pagination-separate.pagination-sm li.active a {
      padding: 0.5rem 0.7rem;
    }

    .pagination li a.no-border {
      padding: 0.5rem 1rem;
    }

    .pagination.pagination-round.pagination-flat li.active a {
      border-width: 1px;
      border-radius: 2rem;
      padding: 0.5rem 1rem;
    }

    .pagination.pagination-round.pagination-flat.pagination-sm li.active a {
      padding: 0.5rem 0.7rem;
    }

    .pagination.pagination-round li a.page-link:hover.no-border {
      border-width: 1px;
      border-radius: 2rem;
    }

    .pagination.pagination-round li:first-child a {
      border-top-left-radius: 2rem !important;
      border-bottom-left-radius: 2rem !important;
      padding-left: 1.2rem;
    }

    .pagination.pagination-round li:last-child a {
      border-top-right-radius: 2rem !important;
      border-bottom-right-radius: 2rem !important;
      padding-right: 1.2rem;
    }

    .pagination.pagination-round li.active a.no-border,
    .pagination.pagination-round li.active a.no-border:hover {
      border-width: 1px;
      border-radius: 2rem;
      padding: 0.5rem 1rem;
    }

    .pagination.pagination-curved li a {
      border-radius: 0.25rem;
    }

    .pagination.pagination-curved.pagination-sm li.active a {
      padding: 0.5rem 0.7rem;
    }

    .pagination.pagination-flat li a {
      border: 0;
      border-radius: 0.25rem;
    }

    .pagination.pagination-flat li.active a {
      border-width: 1px;
      border-radius: 3px;
      padding: 0.5rem 1rem;
    }

    .pagination.pagination-flat.pagination-sm li.active a {
      padding: 0.5rem 0.7rem;
    }
  </style>
  <style>
    a:focus {
      outline: none;
    }

    .font-small-1 {
      font-size: 0.7rem !important;
    }

    .font-small-2 {
      font-size: 0.8rem !important;
    }

    .font-small-3 {
      font-size: 0.9rem !important;
    }

    .font-medium-1 {
      font-size: 1.1rem !important;
    }

    .font-medium-2 {
      font-size: 1.2rem !important;
    }

    .font-medium-3 {
      font-size: 1.3rem !important;
    }

    .font-medium-4 {
      font-size: 1.4rem !important;
    }

    .font-medium-5 {
      font-size: 1.5rem !important;
    }

    .font-large-1 {
      font-size: 2rem !important;
    }

    .font-large-2 {
      font-size: 3rem !important;
    }

    .font-large-3 {
      font-size: 4rem !important;
    }

    .font-large-4 {
      font-size: 5rem !important;
    }

    .font-large-5 {
      font-size: 6rem !important;
    }

    .text-bold-300 {
      font-weight: 300;
    }

    .text-bold-400 {
      font-weight: 400;
    }

    .text-bold-500 {
      font-weight: 500;
    }

    .text-bold-600 {
      font-weight: 600;
    }

    .text-bold-700 {
      font-weight: 700;
    }

    .text-italic {
      font-style: italic;
    }

    .text-highlight {
      padding: 4px 6px;
    }

    ol li,
    ul li,
    dl li {
      line-height: 1.8;
    }

    code {
      padding: .2rem .4rem;
      font-size: 90%;
      color: #F74B5C;
      background-color: #f2f3f5;
      border-radius: 0.25rem;
    }

    pre {
      background-color: #f7f7f9;
    }

    pre code {
      background-color: transparent !important;
    }

    .bd-example-row .row+.row {
      margin-top: 1rem;
    }

    .bd-example-row .row>.col,
    .bd-example-row .row>[class^="col-"] {
      padding-top: .75rem;
      padding-bottom: .75rem;
      background-color: rgba(86, 61, 124, 0.15);
      border: 1px solid rgba(86, 61, 124, 0.2);
    }

    .bd-example-row .flex-items-top,
    .bd-example-row .flex-items-middle,
    .bd-example-row .flex-items-bottom {
      min-height: 6rem;
      background-color: rgba(255, 0, 0, 0.1);
    }

    .bd-example-row-flex-cols .row {
      min-height: 10rem;
      background-color: rgba(255, 0, 0, 0.1);
    }

    .bd-highlight {
      background-color: rgba(86, 61, 124, 0.15);
      border: 1px solid rgba(86, 61, 124, 0.15);
    }

    .example-container {
      width: 800px;
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    .example-row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
    }

    .example-content-main {
      position: relative;
      width: 100%;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px;
    }

    @media (min-width: 576px) {
      .example-content-main {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }

    @media (min-width: 992px) {
      .example-content-main {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
      }
    }

    .example-content-secondary {
      position: relative;
      width: 100%;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px;
    }

    @media (min-width: 576px) {
      .example-content-secondary {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }

    @media (min-width: 992px) {
      .example-content-secondary {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }
    }

    .table-white-space th,
    .table-white-space td {
      white-space: nowrap;
    }

    .table-borderless td,
    .table-borderless th {
      border: none;
    }

    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #e3ebf3;
      border-top: 1px solid #e3ebf3;
    }

    .table-bordered th,
    .table-bordered td {
      border: 1px solid #e3ebf3;
    }

    .table th,
    .table td {
      border-bottom: 1px solid #e3ebf3;
    }

    .table-bordered {
      border: 1px solid #e3ebf3;
    }

    .table-inverse {
      color: #eceeef;
      background-color: #00A5A8;
    }

    .table.table-column th,
    .table.table-column td {
      border: none;
      border-left: 1px solid #e3ebf3;
    }

    .table.table-column th:first-child,
    .table.table-column td:first-child {
      border-left: none;
    }

    .table th,
    .table td {
      padding: 0.75rem 2rem;
    }

    .table.table-xl th,
    .table.table-xl td {
      padding: 1.25rem 2rem;
    }

    .table.table-lg th,
    .table.table-lg td {
      padding: 0.9rem 2rem;
    }

    .table.table-de th,
    .table.table-de td {
      padding: 0.75rem 2rem;
    }

    .table.table-sm th,
    .table.table-sm td {
      padding: 0.6rem 2rem;
    }

    .table.table-xs th,
    .table.table-xs td {
      padding: 0.4rem 2rem;
    }

    /*
    * Table sizing
    */
    .table-borderless thead th {
      border-top: 1px solid #e3ebf3;
    }

    .table-borderless>tbody>tr>td,
    .table-borderless>tbody>tr>th {
      border: 0;
    }

    .table>thead>tr.border-solid>th {
      border-bottom-width: 2px;
    }

    .table>thead>tr.border-double>th {
      border-bottom-width: 4px;
      border-bottom-style: double;
    }

    .table>tbody>tr.border-dashed>td {
      border-top-style: dashed;
    }

    .border-custom-color td {
      border-top: inherit;
      border-bottom: inherit;
    }

    form {}

    form label {
      color: #2b335e;
    }

    form .form-group {
      margin-bottom: 1.5rem;
    }

    form .form-control {
      border: 1px solid #cacfe7;
      color: #3b4781;
    }

    form .form-control::-webkit-input-placeholder {
      color: #aeb5da;
    }

    form .form-control:-moz-placeholder {
      color: #aeb5da;
    }

    form .form-control::-moz-placeholder {
      color: #aeb5da;
    }

    form .form-control:-ms-input-placeholder {
      color: #aeb5da;
    }

    form .form-section {
      color: #2C303B;
      line-height: 3rem;
      margin-bottom: 20px;
      border-bottom: 1px solid #2C303B;
    }

    form .form-section i {
      font-size: 20px;
      margin-left: 5px;
      margin-right: 10px;
    }

    form .form-actions {
      border-top: 1px solid #d1d5ea;
      padding: 20px 0;
      margin-top: 20px;
    }

    form .form-actions.filled {
      background-color: #F4F5FA;
    }

    form .form-actions.center {
      text-align: center;
    }

    form .form-actions.right {
      text-align: right;
    }

    form .form-actions.top {
      border-top: 0;
      border-bottom: 1px solid #d1d5ea;
      margin-top: 0;
      margin-bottom: 20px;
    }

    @media (max-width: 767.98px) {
      form .form-actions .buttons-group {
        float: left !important;
        margin-bottom: 10px;
      }
    }

    @media (min-width: 576px) {
      form.form-horizontal .form-group .label-control {
        text-align: right;
      }
    }

    form.row-separator .form-group {
      margin: 0;
      border-bottom: 1px solid #e9ebf5;
    }

    form.row-separator .form-group .label-control {
      padding-top: 1.5rem;
    }

    form.row-separator .form-group>div {
      padding: 1.2rem;
      padding-right: 0;
    }

    form.row-separator .form-group.last {
      border-bottom: 0;
    }

    form.form-bordered .form-group {
      margin: 0;
      border-bottom: 1px solid #e9ebf5;
    }

    form.form-bordered .form-group .label-control {
      padding-top: 1.5rem;
    }

    form.form-bordered .form-group>div {
      padding: 1.2rem;
      padding-right: 0;
      border-left: 1px solid #e9ebf5;
    }

    form.form-bordered .form-group.last {
      border-bottom: 0;
    }

    form.striped-rows .form-group {
      margin: 0;
    }

    form.striped-rows .form-group .label-control {
      padding-top: 1.5rem;
    }

    form.striped-rows .form-group>div {
      padding: 1.2rem;
      padding-right: 0;
    }

    form.striped-rows .form-group:nth-child(even) {
      background-color: #F4F5FA;
    }

    form.striped-labels .form-group {
      margin: 0;
    }

    form.striped-labels .form-group .label-control {
      padding-top: 1.5rem;
    }

    form.striped-labels .form-group>div {
      padding: 1.2rem;
      padding-right: 0;
      background-color: white;
    }

    form.striped-labels .form-group:nth-child(even) {
      background-color: #F4F5FA;
    }

    form .custom-control-indicator {
      width: 1.1rem;
      height: 1.075rem;
      line-height: 1.05rem;
      top: 0.15rem;
      left: 0;
    }

    form .custom-control-indicator+.custom-control-description {
      margin-left: 1rem;
    }

    select.form-control {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
    }

    /*Bootstrap Enhance */
    .custom-checkbox {
      margin-bottom: 0;
    }

    .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
      background-color: rgba(30, 159, 242, 0.5);
    }

    .custom-checkbox input:disabled:checked~.custom-control-indicator {
      opacity: 0.5;
    }

    .custom-checkbox input:disabled~.custom-control-indicator {
      cursor: not-allowed;
    }

    .custom-control-input>input:focus~.custom-control-indicator {
      padding: 0.51rem;
    }

    .custom-control-indicator {
      width: 1.1rem;
      height: 1.075rem;
      line-height: 1.05rem;
      top: 0.15rem;
    }

    .custom-control-indicator+.custom-control-description {
      margin-left: 1rem;
    }

    .form-control:disabled,
    .form-control[readonly] {
      background-color: #ECEFF1;
    }

    .input-group-addon {
      background-color: #ECEFF1;
      border-color: #BABFC7;
    }

    .btn.btn-square {
      border-radius: 0;
    }

    .btn.btn-round {
      border-radius: 2rem;
    }

    .btn:focus,
    .btn.focus,
    .btn:active,
    .btn.active {
      outline: none;
      box-shadow: none !important;
    }

    .btn.btn-icon i {
      font-size: 1.1rem;
    }

    .btn.btn-icon.btn-pure {
      background-color: transparent;
      border-color: transparent;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    .btn.btn-icon.btn-pure i {
      font-size: 1.25rem;
    }

    .btn.btn-social {
      padding: 0.7rem 0.25rem 0.85rem 3.75rem;
    }

    .btn-min-width {
      min-width: 8.5rem;
    }

    .color-box {
      width: 100%;
      height: 2.75rem;
      border-radius: 0.25rem;
    }

    .btn-float {
      padding: 15px;
      white-space: normal;
      -webkit-box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .btn-float.btn-link {
      padding: 10px;
    }

    .btn-float i {
      display: block;
      margin: 0;
      top: 0;
    }

    .btn-float.btn-float-lg i,
    .btn-float.btn-float-lg span {
      font-size: 2rem;
    }

    .btn-float.btn-float-lg i+span {
      font-size: 1.1rem;
    }

    .btn-float>i+span {
      display: block;
      padding-top: 10px;
      margin-bottom: -6px;
    }

    .collapse-icon .card-header {
      position: relative;
    }

    .collapse-icon a[data-toggle="collapse"]:after {
      position: absolute;
      top: 40%;
      right: 20px;
      margin-top: -8px;
      font-family: 'feather';
      content: "\e982";
      transition: all 300ms linear 0s;
    }

    .collapse-icon a[data-toggle="collapse"]:before {
      position: absolute;
      top: 40%;
      right: 20px;
      margin-top: -8px;
      font-family: 'feather';
      content: "\e99d";
      transition: all 300ms linear 0s;
    }

    .collapse-icon.left a {
      padding-left: 28px;
    }

    .collapse-icon.left a:before,
    .collapse-icon.left a:after {
      left: 20px;
      right: auto;
    }

    .collapse-icon a[aria-expanded="true"]:before {
      opacity: 0;
    }

    .collapse-icon a[aria-expanded="false"]:after {
      opacity: 0;
    }

    .collapse-icon.accordion-icon-rotate a[aria-expanded="true"]:before {
      transform: rotate(180deg);
    }

    .collapse-icon.accordion-icon-rotate a[aria-expanded="false"]:after {
      transform: rotate(-180deg);
    }

    .dropdown.dropdown-demo {
      border: 1px solid rgba(0, 0, 0, 0.15);
      border-radius: 0.25rem;
    }

    .dropdown .dropdown-menu {
      border: 1px solid #E4E5EC;
      border-radius: 0.35rem;
      transform-origin: top;
      animation-fill-mode: forwards;
      transform: scale(1, 0);
      transition: all 0.2s linear;
      margin: -0.1rem 0 0;
      box-shadow: 0px 5px 75px 2px rgba(64, 70, 74, 0.2);
      min-width: 11rem;
    }

    .dropdown .dropdown-menu .dropdown-header {
      padding: 10px 20px;
      margin-top: 10px;
      text-transform: uppercase;
      color: #626E82;
    }

    .dropdown .dropdown-menu .dropdown-item {
      padding: 10px 20px;
      width: 100%;
    }

    .dropdown .dropdown-menu .dropdown-item:active a,
    .dropdown .dropdown-menu .dropdown-item.active a {
      color: #fff;
    }

    .dropdown .dropdown-divider {
      border: 1px solid #E4E5EC;
    }

    .dropdown i {
      margin-right: 0.5rem;
    }

    .dropdown .dropdown-menu {
      border: 1px solid #E4E5EC;
      border-radius: 0.35rem;
      transform-origin: top;
      animation-fill-mode: forwards;
      transform: scale(1, 0);
      transition: all 0.2s linear;
      margin: -0.1rem 0 0;
      box-shadow: 0px 5px 75px 2px rgba(64, 70, 74, 0.2) !important;
      min-width: 11rem;
    }

    .dropdown .dropdown-menu .dropdown-header {
      padding: 10px 20px;
      margin-top: 10px;
      text-transform: uppercase;
      color: #626E82;
    }

    .dropdown .dropdown-menu .dropdown-item {
      padding: 10px 20px;
      width: 100%;
    }

    .dropdown .dropdown-menu .dropdown-item:active a,
    .dropdown .dropdown-menu .dropdown-item.active a {
      color: #fff;
    }

    .nav-item i {
      margin-right: 0.5rem;
    }

    .show>.dropdown-menu {
      transform: scale(1, 1);
      opacity: 1;
      display: block;
    }

    .dropdown-toggle::after {
      font-size: 0.8rem;
      font-family: 'LineAwesome';
      content: "\f110" !important;
      border: none !important;
      position: relative;
      top: 0px;
      right: 0px;
      padding: 0 2px 0 6px;
      margin: 0 0.3em 0 0;
      vertical-align: 0;
    }

    .dropdown-toggle.nav-hide-arrow::after {
      display: none;
    }

    .dropdown-toggle:focus {
      outline: 0;
    }

    .navbar-horizontal .dropdown-menu .dropdown-submenu>a:after,
    .navbar-horizontal .dropdown-menu .dropdown-submenu>button:after {
      font-size: 0.85rem;
      right: 12px;
    }

    .navbar-horizontal .dropdown-toggle::after {
      top: 14px !important;
    }

    .dropdown-menu-right {
      right: 0;
    }

    .dropdown-menu {
      box-shadow: none;
    }

    .dropdown-menu .dropdown-submenu {
      position: relative;
    }

    .dropdown-menu .dropdown-submenu:hover .dropdown-menu {
      display: block;
    }

    .dropdown-menu .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -6px;
      margin-left: -1px;
    }

    .dropdown-menu .dropdown-submenu>.dropdown-menu.open-left {
      left: auto;
      right: 100%;
    }

    .dropdown-menu .dropdown-submenu>a:after,
    .dropdown-menu .dropdown-submenu>button:after {
      font-family: 'LineAwesome';
      content: "\f112" !important;
      right: 15px;
      font-size: 1rem;
      float: right;
      border: none;
      position: absolute;
    }

    .dropdown-menu .dropdown-submenu :hover>a:after,
    .dropdown-menu .dropdown-submenu :hover>button:after {
      border-left-color: #555;
    }

    .dropdown-menu .dropdown-submenu .pull-left {
      float: none;
    }

    .dropdown-menu .dropdown-submenu .pull-left>.dropdown-menu {
      left: -100%;
      margin-left: 10px;
    }

    .dropdown-header {
      text-transform: uppercase;
    }

    .dropdown-header.highlight {
      color: #2b2d2f;
      text-decoration: none;
      background-color: #f5f5f5;
    }

    .btn-secondary~.dropdown-menu .dropdown-item.active {
      background-color: #cccccc;
    }

    .btn-primary~.dropdown-menu .dropdown-item.active {
      background-color: #666EE8;
    }

    .btn-success~.dropdown-menu .dropdown-item.active {
      background-color: #28D094;
    }

    .btn-danger~.dropdown-menu .dropdown-item.active {
      background-color: #FF4961;
    }

    .btn-info~.dropdown-menu .dropdown-item.active {
      background-color: #1E9FF2;
    }

    .btn-warning~.dropdown-menu .dropdown-item.active {
      background-color: #FF9149;
    }

    .dropdown-menu.arrow {
      margin-top: 12px;
    }

    .dropdown-menu.arrow:after,
    .dropdown-menu.arrow:before {
      position: absolute;
      left: 10px;
      display: inline-block;
      width: 0;
      height: 0;
      content: '';
      border: 7px solid transparent;
      border-top-width: 0;
    }

    .dropdown-menu.arrow:before {
      top: -7px;
      border-bottom-color: #b3b3b3;
    }

    .dropdown-menu.arrow:after {
      top: -6px;
      border-bottom-color: #fff;
    }

    .dropdown-menu .arrow-left {
      margin-left: 7px !important;
    }

    .dropdown-menu .arrow-left:after,
    .dropdown-menu .arrow-left:before {
      position: absolute;
      top: 10px;
      display: inline-block;
      width: 0;
      height: 0;
      content: '';
      border: 7px solid transparent;
      border-left-width: 0;
    }

    .dropdown-menu .arrow-left:before {
      left: -8px;
      border-right-color: #b3b3b3;
    }

    .dropdown-menu .arrow-left:after {
      left: -7px;
      border-right-color: #fff;
    }

    .dropdown-menu .arrow-right {
      margin-right: 7px !important;
    }

    .dropdown-menu .arrow-right:after,
    .dropdown-menu .arrow-right:before {
      position: absolute;
      top: 10px;
      display: inline-block;
      width: 0;
      height: 0;
      content: '';
      border: 7px solid transparent;
      border-right-width: 0;
    }

    .dropdown-menu .arrow-right:before {
      right: -7px;
      border-left-color: #b3b3b3;
    }

    .dropdown-menu .arrow-right:after {
      right: -6px;
      border-left-color: #fff;
    }

    .dropup .dropdown-toggle::after {
      content: "\f113" !important;
    }

    .dropup .dropdown-menu {
      top: auto;
    }

    .dropup .dropdown-menu.arrow {
      margin-bottom: 12px;
    }

    .dropup .dropdown-menu.arrow:after,
    .dropup .dropdown-menu.arrow:before {
      top: auto;
      border-top-width: 7px;
      border-bottom-width: 0;
    }

    .dropup .dropdown-menu.arrow:before {
      bottom: -8px;
      border-top-color: #b3b3b3;
    }

    .dropup .dropdown-menu.arrow:after {
      bottom: -6px;
      border-top-color: #fff;
    }

    .dropup .dropdown-submenu .dropdown-menu {
      bottom: auto;
      top: 0;
    }

    .dropdown-menu-xl a,
    .dropdown-menu-xl button {
      padding-top: 9px !important;
      padding-bottom: 9px !important;
      font-size: 1.2rem;
      line-height: 1.43;
    }

    .dropdown-menu-lg a,
    .dropdown-menu-lg button {
      padding-top: 6px !important;
      padding-bottom: 6px !important;
    }

    .dropdown-menu-sm a,
    .dropdown-menu-sm button {
      padding-top: 5px !important;
      padding-bottom: 5px !important;
      font-size: 0.86rem;
      line-height: 1.67;
    }

    .dropdown-item.buttons-columnVisibility.active {
      color: #000000;
    }

    .drilldown-menu .dropdown-item.active.hover,
    .drilldown-menu .dropdown-item.active:hover,
    .drilldown-menu .dropdown-item:active.hover,
    .drilldown-menu .dropdown-item:active:hover {
      color: #fff;
    }

    /* ===============================================================================================
    File Name: navbar.scss
    Description: Contain header navigation bar, vertical main navigation bar and
    horiznotal main navigation bar related SCSS.
    ----------------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
  ================================================================================================*/
    .navbar-dark .hamburger-inner,
    .navbar-dark .hamburger-inner::before,
    .navbar-dark .hamburger-inner::after {
      background-color: #FFFFFF;
    }

    .header-navbar {
      padding: 0px;
      min-height: 5rem;
      font-family: "Quicksand", Georgia, "Times New Roman", Times, serif;
      transition: 300ms ease all;
      /* For sm screen*/
    }

    .header-navbar .navbar-wrapper {
      width: 100%;
    }

    .header-navbar.navbar-border {
      border-bottom: 1px solid #E4E7ED;
    }

    .header-navbar.navbar-dark.navbar-border {
      border-bottom: 1px solid #8596B5;
    }

    .header-navbar.navbar-shadow {
      box-shadow: 0px 2px 30px 2px rgba(0, 0, 0, 0.1);
    }

    .header-navbar.navbar-without-dd-arrow .nav-link.dropdown-toggle::after {
      display: none;
    }

    .header-navbar.navbar-brand-center .navbar-header {
      width: 192px;
      position: absolute;
      left: 50%;
      padding: 0;
      margin: 0;
      transform: translate(-50%, 0);
      z-index: 999;
    }

    .header-navbar .navbar-header {
      height: 100%;
      width: 260px;
      height: 5rem;
      float: left;
      position: relative;
      padding: 0rem 0.85rem;
      transition: 300ms ease all;
    }

    .header-navbar .navbar-header .navbar-brand {
      padding: 17px 0px;
      margin-right: 0;
    }

    .header-navbar .navbar-header .navbar-brand .brand-logo {
      width: 36px;
    }

    .header-navbar .navbar-header .navbar-brand .brand-text {
      display: inline;
      padding-left: 6px;
      font-weight: 500;
      vertical-align: middle;
    }

    .header-navbar .navbar-container {
      padding: 0rem 18px;
      height: 5rem;
      transition: 300ms ease all;
      background: inherit;
    }

    .header-navbar .navbar-container ul.nav li>a.nav-link {
      padding: 1.9rem 1rem;
      font-size: 1.15rem;
    }

    .header-navbar .navbar-container ul.nav li>a.nav-link i.flag-icon {
      margin-right: 0.5rem;
    }

    .header-navbar .navbar-container ul.nav li a.dropdown-user-link {
      padding: 1.2rem 1rem;
      line-height: 23px;
    }

    .header-navbar .navbar-container ul.nav li a.dropdown-user-link .user-name {
      display: inline-block;
      margin-bottom: 0.4rem;
      margin-left: 0.2rem;
    }

    .header-navbar .navbar-container ul.nav li a.menu-toggle {
      padding: 1.7rem 1rem 1.6rem 1rem;
    }

    .header-navbar .navbar-container ul.nav li a.menu-toggle i {
      font-size: 1.6rem;
    }

    .header-navbar .navbar-container ul.nav li a.nav-link-label {
      padding: 1.7rem 1rem 1.6rem 1rem;
    }

    .header-navbar .navbar-container ul.nav li a.dropdown-user-link .avatar {
      margin-right: 0.5rem;
      width: 36px;
    }

    .header-navbar .navbar-container ul.nav li a.nav-link-search,
    .header-navbar .navbar-container ul.nav li a.nav-link-expand {
      padding: 1.7rem 1rem 1.7rem 1rem;
    }

    .header-navbar .navbar-container ul.nav li div.input-group {
      padding: 0.7rem 1rem;
    }

    .header-navbar .navbar-container ul.nav li i.ficon {
      font-size: 1.5rem;
    }

    .header-navbar .navbar-container ul.nav li .media-list {
      max-height: 18.2rem;
    }

    .header-navbar .navbar-container ul.nav li .scrollable-container {
      position: relative;
    }

    .header-navbar .navbar-container .dropdown-menu-media {
      width: 24rem;
    }

    .header-navbar .navbar-container .dropdown-menu-media .media-list .media {
      padding: 1rem;
      border: none;
      border-bottom: 1px solid #E4E5EC;
    }

    .header-navbar .navbar-container .dropdown-menu-media .dropdown-menu-header {
      border-bottom: 1px solid #E4E5EC;
    }

    .header-navbar .navbar-container .dropdown-menu-media .dropdown-menu-footer a {
      padding: 0.3rem;
      border-top: 1px solid #E4E5EC;
    }

    .header-navbar.navbar-without-menu .navbar-container {
      margin-left: 0;
    }

    .header-navbar .nav-item+.nav-item {
      margin-left: 0rem;
    }

    @media (max-width: 767.98px) {
      .header-navbar .navbar-header {
        width: 100% !important;
        padding: 0.5rem 1rem;
      }

      .header-navbar .navbar-header .menu-toggle {
        top: 2px;
        position: relative;
      }

      .header-navbar .navbar-header .open-navbar-container i {
        font-size: 1.8rem;
      }

      .header-navbar .navbar-header .navbar-brand {
        position: absolute;
        left: 50%;
        top: 0;
        transform: translate(-50%, 0);
      }

      .header-navbar.navbar-with-menu .navbar-container {
        width: 100%;
        display: table;
        background: #fff;
        padding: 0rem 1rem;
        margin: 0;
        height: auto;
      }
    }

    .navbar-light {
      background: #FFFFFF;
    }

    .navbar-light.navbar-horizontal {
      background: #FFFFFF;
    }

    .navbar-light .navbar-nav li {
      line-height: 1;
    }

    .navbar-light .navbar-nav .active.nav-link {
      background-color: rgba(0, 0, 0, 0.03);
    }

    .navbar-light .navbar-nav .disabled.nav-link {
      color: #6B6F82;
    }

    .navbar-dark {
      background: #2C303B;
    }

    .navbar-dark.navbar-horizontal {
      background: #2C303B;
    }

    .navbar-dark .nav-search .form-control,
    .navbar-dark .nav-search .btn-secondary {
      color: #FFFFFF;
      background: #2C303B;
    }

    .navbar-dark .navbar-brand .brand-text {
      color: #FFFFFF !important;
    }

    .navbar-dark .navbar-nav li {
      line-height: 1;
    }

    .navbar-dark .navbar-nav .active.nav-link {
      background-color: rgba(255, 255, 255, 0.05);
    }

    .navbar-dark .navbar-nav .disabled.nav-link {
      color: #98A4B8;
    }

    .navbar-semi-dark {
      background: #FFFFFF;
    }

    .navbar-semi-dark .navbar-header {
      background: #2C303B;
    }

    .navbar-semi-dark .navbar-header .brand-text {
      color: #FFFFFF;
    }

    .navbar-semi-dark .navbar-nav li {
      line-height: 1;
    }

    .navbar-semi-dark .navbar-nav .nav-link {
      color: #6B6F82;
    }

    .navbar-semi-dark .navbar-nav .active.nav-link {
      background-color: rgba(0, 0, 0, 0.03);
    }

    .navbar-semi-dark .navbar-nav .disabled.nav-link {
      color: #6B6F82;
    }

    .navbar-semi-light {
      background: #6B6F82;
    }

    .navbar-semi-light .navbar-header {
      background: #FFFFFF;
    }

    .navbar-semi-light .navbar-header .brand-text {
      color: #464855;
    }

    .navbar-semi-light .navbar-nav li {
      line-height: 1;
    }

    .navbar-semi-light .navbar-nav .nav-link {
      color: #FFFFFF;
    }

    .navbar-semi-light .navbar-nav .active.nav-link {
      background-color: rgba(0, 0, 0, 0.03);
    }

    .navbar-semi-light .navbar-nav .disabled.nav-link {
      color: #6B6F82;
    }

    .mega-dropdown {
      position: static !important;
    }

    .mega-dropdown .dropdown-menu {
      display: flex;
    }

    .navigation-main .mega-dropdown-menu,
    .navbar-nav .mega-dropdown-menu {
      font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      width: calc(100% - 50px);
      padding: 0.5rem 0;
      /* fallback if needed */
      margin: 0px 25px;
      box-shadow: none;
      box-shadow: 0px 5px 75px 2px rgba(64, 70, 74, 0.2);
      z-index: 9999;
    }

    .navigation-main .mega-dropdown-menu ul,
    .navbar-nav .mega-dropdown-menu ul {
      padding: 0;
      margin: 0;
    }

    .navigation-main .mega-dropdown-menu ul li,
    .navbar-nav .mega-dropdown-menu ul li {
      list-style: none;
    }

    .navigation-main .mega-dropdown-menu ul li a,
    .navbar-nav .mega-dropdown-menu ul li a {
      display: block;
      color: #464855;
    }

    .navigation-main .mega-dropdown-menu ul li a .children-in,
    .navbar-nav .mega-dropdown-menu ul li a .children-in {
      float: right;
    }

    .navigation-main .mega-dropdown-menu ul li a:hover,
    .navbar-nav .mega-dropdown-menu ul li a:hover {
      text-decoration: none;
      color: #6B6F82;
    }

    .navigation-main .mega-dropdown-menu ul li a:focus,
    .navbar-nav .mega-dropdown-menu ul li a:focus {
      text-decoration: none;
      color: #6B6F82;
    }

    .navigation-main .mega-dropdown-menu ul a.dropdown-item,
    .navbar-nav .mega-dropdown-menu ul a.dropdown-item {
      padding: 10px;
    }

    .navigation-main .mega-dropdown-menu p.accordion-text,
    .navbar-nav .mega-dropdown-menu p.accordion-text {
      line-height: 1.45;
    }

    .navigation-main .mega-dropdown-menu .dropdown-menu-header,
    .navbar-nav .mega-dropdown-menu .dropdown-menu-header {
      padding: 0.5rem 0;
      border-bottom: 1px solid #E4E5EC;
    }

    .navigation-main .mega-dropdown-menu h6 i.la,
    .navbar-nav .mega-dropdown-menu h6 i.la {
      font-size: 1.1rem;
    }

    .horizontal-top-icon-menu .mega-dropdown-menu {
      margin: 0px 25px !important;
    }

    @media (min-width: 576px) {
      .container .mega-dropdown-menu {
        max-width: 540px;
        margin: 0 calc((100% - 540px)/2);
      }
    }

    @media (min-width: 768px) {
      .container .mega-dropdown-menu {
        max-width: 720px;
        margin: 0 calc((100% - 720px)/2);
      }
    }

    @media (min-width: 992px) {
      .container .mega-dropdown-menu {
        max-width: 960px;
        margin: 0 calc((100% - 960px)/2);
      }
    }

    @media (min-width: 1200px) {
      .container .mega-dropdown-menu {
        max-width: 1140px;
        margin: 0 calc((100% - 1140px)/2);
      }
    }

    @-moz-document url-prefix() {
      ul li a .children-in {
        position: relative;
        right: 3px;
        top: -14px;
      }
    }

    .menu-list {
      list-style: none;
      padding: 0;
      overflow: hidden;
    }

    .menu-panel {
      padding: 0;
    }

    .sliding-menu {
      overflow: hidden;
      position: relative;
    }

    .sliding-menu ul {
      float: left;
      margin: 0;
      padding: 0;
    }

    .sliding-menu ul li {
      list-style: none;
      margin: 0;
    }

    .navbar-menu-icon {
      width: 24px;
      margin: 16px 2px !important;
      position: relative;
      margin: 0px auto;
      transform: rotate(0deg);
      transition: .5s ease-in-out;
      cursor: pointer;
    }

    .navbar-menu-icon span {
      display: block;
      position: absolute;
      height: 2px;
      width: 100%;
      background: #6B6F82;
      border-radius: 9px;
      opacity: 1;
      left: 0;
      transform: rotate(0deg);
      transition: .25s ease-in-out;
    }

    .navbar-menu-icon span:nth-child(1) {
      top: 0px;
    }

    .navbar-menu-icon span:nth-child(2) {
      top: 10px;
    }

    .navbar-menu-icon span:nth-child(3) {
      top: 20px;
    }

    .navbar-menu-icon.show span:nth-child(1) {
      top: 10px;
      transform: rotate(135deg);
    }

    .navbar-menu-icon.show span:nth-child(2) {
      opacity: 0;
      left: -60px;
    }

    .navbar-menu-icon.show span:nth-child(3) {
      top: 10px;
      transform: rotate(-135deg);
    }

    @media (max-width: 767.98px) {
      .header-navbar .navbar-nav .show {
        position: static;
      }

      .header-navbar .navbar-nav .open-navbar-container {
        padding-top: 0.625rem;
      }

      .header-navbar .navbar-container .show .dropdown-menu {
        right: 0;
        left: 0 !important;
        float: none;
        width: auto;
        margin-top: 0;
        max-height: 400px;
        overflow-x: hidden;
        overflow-y: scroll;
      }

      .header-navbar .navbar-container ul.nav li.nav-item i {
        margin-right: 0.2rem;
      }

      .header-navbar .navbar-container ul.nav li>a.nav-link {
        padding: 1.5rem 0.4rem;
      }

      .header-navbar .navbar-container ul.nav li>a.nav-link i.flag-icon {
        margin-right: 0.2rem;
      }

      .header-navbar .navbar-container ul.nav li a.dropdown-user-link {
        padding: 0.8rem 0.6rem;
      }

      .header-navbar .navbar-container ul.nav li a.nav-link-label {
        padding: 1.4rem 0rem 1rem 0.8rem;
      }

      .header-navbar .navbar-container ul.nav li a.nav-link-search,
      .header-navbar .navbar-container ul.nav li a.nav-link-expand {
        padding: 1.4rem 1rem 1rem 1rem;
      }

      .header-navbar .navbar-container ul.nav li .dropdown-toggle::after {
        margin-right: 0;
        margin-left: -2px;
      }

      .navbar-dark .hamburger-inner,
      .navbar-dark .hamburger-inner::before,
      .navbar-dark .hamburger-inner::after,
      .navbar-semi-dark .hamburger-inner,
      .navbar-semi-dark .hamburger-inner::before,
      .navbar-semi-dark .hamburger-inner::after {
        background-color: #FFFFFF;
      }

      .navbar-dark .navbar-header .navbar-nav .nav-link,
      .navbar-semi-dark .navbar-header .navbar-nav .nav-link {
        color: #FFFFFF;
      }

      .navbar-dark .navbar-container .navbar-nav .nav-link,
      .navbar-semi-dark .navbar-container .navbar-nav .nav-link {
        color: #6B6F82;
      }

      .navbar-light .navbar-header .navbar-nav .nav-link,
      .navbar-semi-light .navbar-header .navbar-nav .nav-link {
        color: #2C303B;
      }

      .navbar-light .navbar-container .navbar-nav .nav-link,
      .navbar-semi-light .navbar-container .navbar-nav .nav-link {
        color: #6B6F82;
      }
    }

    .headroom {
      will-change: transform;
      transition: transform 200ms linear;
    }

    .headroom--pinned-top {
      transform: translateY(0%);
    }

    .headroom--unpinned-top {
      transform: translateY(-100%);
    }

    .headroom--pinned-bottom {
      transform: translateY(0%);
    }

    .headroom--unpinned-bottom {
      transform: translateY(100%);
    }

    @media (max-width: 1199.98px) {
      .header-navbar .navbar-container ul.nav li>a.nav-link i.flag-icon {
        margin-right: 0.2rem;
      }

      .header-navbar .navbar-container ul.nav li a.dropdown-user-link {
        padding: 0.8rem 0.6rem;
      }

      .header-navbar .navbar-container ul.nav li .dropdown-toggle::after {
        margin-right: 0;
        margin-left: -2px;
      }
    }

    @media (max-width: 1199.98px) {
      .header-navbar .navbar-container ul.nav li .selected-language {
        display: none;
      }

      .header-navbar .navbar-container ul.nav li a.dropdown-user-link .user-name {
        display: none;
      }
    }

    @media (max-width: 767px) {
      #navbar-mobile.navbar-collapse .navbar-nav {
        margin: 0;
        flex-flow: row wrap;
      }

      #navbar-mobile.navbar-collapse .navbar-nav .dropdown-menu {
        position: absolute;
      }

      #navbar-mobile.navbar-collapse .navbar-nav .nav-item {
        float: left;
      }
    }

    /* ----------- iPhone 5, 5S  iPhone 6----------- */
    /* Landscape */
    @media only screen and (min-device-width: 26.78em) and (max-device-width: 47.64em) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {
      .header-navbar .navbar-container .show .dropdown-menu {
        max-height: 180px;
      }
    }

    /* ----------- iPhone 6+ ----------- */
    /* Landscape */
    @media only screen and (min-device-width: 29.57em) and (max-device-width: 52.57em) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape) {
      .header-navbar .navbar-container .show .dropdown-menu {
        max-height: 280px;
      }
    }

    .card-group,
    .card-deck {
      margin-bottom: 0.75rem;
    }

    .card {
      margin-bottom: 1.875rem;
      border: none;
      box-shadow: 0px 1px 15px 1px rgba(62, 57, 107, 0.07);
    }

    .card .card {
      box-shadow: none !important;
    }

    .card .card-title {
      font-weight: 500;
      letter-spacing: 0.05rem;
      font-size: 1.12rem;
    }

    .card .card-bordered {
      border: 1px solid rgba(0, 0, 0, 0.06);
    }

    .card.card-fullscreen {
      display: block;
      z-index: 9999;
      position: fixed;
      width: 100% !important;
      height: 100% !important;
      top: 0;
      right: 0;
      left: 0;
      bottom: 0;
      overflow: auto;
    }

    .card .card-body[class*='border-bottom-'] {
      border-bottom-width: 2px !important;
    }

    .card .card-img-overlay.bg-overlay {
      background: rgba(0, 0, 0, 0.45);
    }

    .card .card-img-overlay .text-muted {
      color: #464855 !important;
    }

    .card.card-minimal {
      border: none;
      box-shadow: none;
    }

    .card.crypto-card-3 .card-body:before {
      font-family: "cryptocoins";
      font-size: 10rem;
      color: rgba(255, 255, 255, 0.15);
      position: absolute;
      bottom: -32px;
      right: 0px;
    }

    .card-moved .card,
    .card-moved .card-header {
      background-color: #FF9149;
      color: #FFFFFF;
    }

    .handle,
    .titleArea {
      cursor: move;
    }

    .card-header {
      border-bottom: none;
    }

    .card-header .card-title {
      margin-bottom: 0;
    }

    .card-header .heading-elements,
    .card-header .heading-elements-toggle {
      background-color: inherit;
      position: absolute;
      top: 20px;
      right: 20px;
    }

    .card-header .heading-elements.heading-top-elements .page-item,
    .card-header .heading-elements-toggle.heading-top-elements .page-item {
      display: inline-block;
    }

    .card-header .heading-elements a,
    .card-header .heading-elements-toggle a {
      padding: 0 8px;
    }

    .card-header .heading-elements a.btn,
    .card-header .heading-elements-toggle a.btn {
      padding-top: 6px;
      padding-bottom: 6px;
    }

    .card-footer {
      border-top: 1px solid #EEEEEE;
    }

    .text-white .card-text {
      color: white;
    }

    .text-white .card-img-overlay .text-muted {
      color: #FFF !important;
    }

    .text-white code {
      background-color: white;
    }

    .text-white .heading-elements i {
      color: #FFF;
    }

    .card-head-inverse {
      color: #FFF;
    }

    .card-head-inverse .heading-elements i {
      color: #FFF;
    }

    .card-transparent {
      background-color: transparent;
    }

    .card-image-position-right {
      margin-left: 50px;
      position: absolute;
      top: -27px;
    }

    .card-image-position-right-mid {
      position: absolute;
      top: 23px;
      margin-left: 280px;
      width: 250px;
    }

    .card-font-style-black {
      font-size: 90px;
      font-weight: 900;
      color: #ffffff52;
      margin-top: -12px;
    }

    .card-font-style-white {
      font-size: 72px;
      font-weight: 900;
      margin-top: -10px;
    }

    .background-round {
      background-color: rgba(0, 0, 0, 0.18);
      padding: 8px;
      border-radius: 50%;
    }

    @media (max-width: 991.98px) {
      .heading-elements {
        text-align: center;
      }

      .heading-elements .list-inline {
        display: none;
      }

      .heading-elements.visible {
        display: block;
        margin-top: 0;
        top: 100%;
        top: 50px;
        height: auto;
        left: 0px;
        padding: 10px;
        border: 1px solid #eee;
        z-index: 997;
        position: absolute;
        width: 100%;
      }

      .heading-elements.visible .list-inline {
        display: block;
      }
    }

    @media (min-width: 992px) {
      .heading-elements-toggle {
        display: none;
      }
    }

    .breadcrumb {
      font-size: 1rem;
      font-family: "Quicksand", Georgia, "Times New Roman", Times, serif;
      background-color: transparent;
      padding: 0 0 0.75rem 0rem;
    }

    .breadcrumb>li+li::before {
      padding-right: .6rem;
      padding-left: .6rem;
    }

    .breadcrumb .breadcrumb-item+.breadcrumb-item::before {
      content: "-";
    }

    /* Custom scss for page headers style */
    .breadcrumbs-right .breadcrumb {
      float: right;
    }

    .breadcrumbs-top .breadcrumb {
      margin: 0;
      padding: 0;
    }

    .breadcrumb-new .content-header-title {
      padding: 6px 24px 8px 0;
      margin: 0 24px 0 0;
      border-right: 1px solid #E4E5EC;
    }

    .pagination {
      margin-top: 1rem;
    }

    .pagination .page-link {
      color: #1E9FF2;
      border: 1px solid #BABFC7;
    }

    .pager {
      padding-left: 0;
      margin: 1.45 0;
      list-style: none;
      text-align: center;
    }

    .pager li {
      display: inline;
    }

    .pager li>a,
    .pager li>span {
      display: inline-block;
      padding: 5px 14px;
      background-color: #fff;
      border: 1px solid #626E82;
      border-radius: 0.25rem;
    }

    .pager li>a:hover,
    .pager li>a:focus {
      text-decoration: none;
      background-color: #F9FAFD;
    }

    .pager.pager-square li a {
      border-radius: 0;
    }

    .pager.pager-round li a {
      border-radius: 2rem;
    }

    .pager.pager-flat li a {
      border: 0;
    }

    .pager .next>a,
    .pager .next>span {
      float: right;
    }

    .pager .previous>a,
    .pager .previous>span {
      float: left;
    }

    .pager .disabled>a,
    .pager .disabled>a:hover,
    .pager .disabled>a:focus,
    .pager .disabled>span {
      color: #6B6F82;
      background-color: #fff;
    }

    .pager [class*="text-"] .pager {
      text-align: inherit;
    }

    .badge {
      color: #FFFFFF;
      font-weight: 400;
    }

    .badge[class*='badge-'] [class*='icon-'] {
      line-height: 1;
    }

    .badge[class*='badge-'] [class*='icon-']~span {
      position: relative;
      bottom: 2px;
      padding: 0 5px;
    }

    .badge[class*='badge-'] span {
      position: relative;
      bottom: 2px;
      padding: 0 5px;
    }

    .badge[class*='badge-'] a {
      color: #fff;
    }

    .badge[class*='badge-'] .dropdown-toggle::after,
    .badge[class*='badge-'].dropdown-toggle::after {
      position: relative;
      top: -2px;
      right: 3px;
      font-size: 1rem;
    }

    .badge[class*='badge-'] .dropdown-menu a {
      color: #555;
    }

    .badge.badge-square {
      border-radius: 0;
    }

    .badge.badge-border {
      background-color: transparent;
      border-width: 3px !important;
      font-size: 85%;
    }

    .badge.badge-striped {
      background-color: #dadada;
      border-width: 3px !important;
      font-size: 0.85rem;
      color: #555;
    }

    .badge.badge-striped a {
      color: #555;
    }

    .badge.badge.float-right {
      margin-left: 0.5rem;
      margin-top: 0.15rem;
    }

    .badge-xl {
      font-size: 1.8rem;
    }

    .badge-lg {
      font-size: 1.2rem;
    }

    .badge-md {
      font-size: 1rem;
    }

    .badge-sm {
      font-size: 0.8rem;
    }

    .badge-secondary {
      background-color: #6B6F82;
    }

    .badge-secondary.badge-glow {
      box-shadow: 0px 0px 10px #6B6F82;
    }

    .badge-secondary[href]:hover,
    .badge-secondary[href]:focus {
      background-color: #545766;
    }

    .badge-primary {
      background-color: #666EE8;
    }

    .badge-primary.badge-glow {
      box-shadow: 0px 0px 10px #666EE8;
    }

    .badge-primary[href]:hover,
    .badge-primary[href]:focus {
      background-color: #3a44e1;
    }

    .badge-success {
      background-color: #28D094;
    }

    .badge-success.badge-glow {
      box-shadow: 0px 0px 10px #28D094;
    }

    .badge-success[href]:hover,
    .badge-success[href]:focus {
      background-color: #20a576;
    }

    .badge-info {
      background-color: #1E9FF2;
    }

    .badge-info.badge-glow {
      box-shadow: 0px 0px 10px #1E9FF2;
    }

    .badge-info[href]:hover,
    .badge-info[href]:focus {
      background-color: #0c84d1;
    }

    .badge-warning {
      background-color: #FF9149;
    }

    .badge-warning.badge-glow {
      box-shadow: 0px 0px 10px #FF9149;
    }

    .badge-warning[href]:hover,
    .badge-warning[href]:focus {
      background-color: #ff7216;
    }

    .badge-danger {
      background-color: #FF4961;
    }

    .badge-danger.badge-glow {
      box-shadow: 0px 0px 10px #FF4961;
    }

    .badge-danger[href]:hover,
    .badge-danger[href]:focus {
      background-color: #ff1635;
    }

    .badge-up {
      position: absolute;
      top: 10px;
      right: 6px;
    }

    .badge-icon i {
      font-size: 100%;
      margin-right: 5px;
    }

    .form-control+.block-tag {
      display: block;
    }

    .block-tag {
      margin-top: 0.5rem;
    }

    .block-area {
      padding: 0.24rem 0.3rem;
    }

    .token.property,
    .token.tag,
    .token.boolean,
    .token.number,
    .token.constant,
    .token.symbol,
    .token.deleted {
      color: #905;
      font-size: 100%;
      font-weight: 400;
      padding: 0;
    }

    .nav {
      border-radius: 0.25rem;
    }

    .nav.wrap-border {
      border: 1px solid #ddd;
    }

    .nav.wrap-border li.nav-header {
      margin: 0 0.5rem;
    }

    .nav.no-hover-bg .nav-item:hover {
      background-color: transparent;
    }

    .nav .dropdown .dropdown-item.active {
      background-color: transparent;
      color: #55595c;
    }

    .nav .dropdown .dropdown-item.active:focus {
      background-color: transparent;
      color: #55595c;
    }

    .nav.square-border {
      border-radius: 0;
    }

    .nav.square-border .nav-item .nav-link.active {
      border-radius: 0;
    }

    .nav .nav-item .nav-link {
      display: inline-flex;
    }

    .nav .nav-item i {
      align-self: center;
    }

    .nav .dropdown-divider {
      margin: 0.5rem 0;
    }

    .nav .modern-nav-toggle {
      padding: 25px 0px;
    }

    .nav.nav-pills .nav-item .nav-link i.float-right:before {
      position: relative;
      top: 7px;
      left: 7px;
    }

    .nav.nav-pills .nav-item .nav-link .badge.float-right {
      position: relative;
      top: 1px;
      left: 3px;
    }

    .nav.nav-pills .nav-item .nav-link.dropdown-toggle::after {
      top: -1px;
    }

    .nav.nav-pills.nav-justified {
      width: 100%;
    }

    .nav.nav-pills.nav-justified .nav-item {
      float: none;
    }

    .nav.nav-pills.nav-justified .nav-link {
      text-align: center;
      margin-bottom: 5px;
    }

    .nav.nav-pills.nav-justified>.dropdown .dropdown-menu {
      top: auto;
      left: auto;
    }

    @media (min-width: 576px) {
      .nav.nav-pills.nav-justified .nav-item {
        display: table-cell;
        width: 1%;
      }

      .nav.nav-pills.nav-justified .nav-link {
        margin-bottom: 0;
      }
    }

    .nav.nav-pills.nav-justified .nav-link {
      margin-right: 0;
      border-radius: 0.25rem;
    }

    @media (min-width: 576px) {

      .nav.nav-pills.nav-justified .nav-link.active,
      .nav.nav-pills.nav-justified .nav-link.active:hover,
      .nav.nav-pills.nav-justified .nav-link.active:focus {
        border-bottom-color: transparent;
      }
    }

    .nav.nav-pills.nav-justified .nav-link {
      display: block;
    }

    .nav.nav-pills.nav-justified .nav-link.active {
      border: none;
    }

    .nav.nav-pills.nav-justified .nav-link.active:hover,
    .nav.nav-pills.nav-justified .nav-link.active:focus {
      border: none;
    }

    .nav.nav-pills.nav-pill-bordered .nav-item {
      border: 1px solid #d3d3d3;
      border-radius: 0.25rem;
    }

    .nav.nav-pills.nav-pill-with-active-bordered .nav-item a.nav-link {
      border: 1px solid #d3d3d3;
      border-radius: 0.25rem;
      background-color: #ffffff;
      color: #55595c;
    }

    .nav.nav-pills.nav-pill-with-active-bordered .nav-item a.nav-link.active {
      border: 1px solid #666EE8;
      color: #666EE8;
    }

    .nav.nav-pills.nav-active-bordered-pill .nav-item a.nav-link {
      color: #55595c;
    }

    .nav.nav-pills.nav-active-bordered-pill .nav-item a.nav-link.active {
      border: 1px solid #666EE8;
      border-radius: 0.25rem;
      color: #666EE8;
      background-color: #ffffff;
    }

    .nav.nav-pills.nav-pill-toolbar.nav-stacked .nav-item~.nav-item a.nav-link {
      border-left: 1px solid #d3d3d3;
      border-top: 0;
    }

    .nav.nav-pills.nav-pill-toolbar.nav-stacked .nav-item:first-child a.nav-link {
      border-radius: 0.25rem 0.25rem 0 0;
    }

    .nav.nav-pills.nav-pill-toolbar.nav-stacked .nav-item:last-child a.nav-link {
      border-radius: 0 0 0.25rem 0.25rem;
    }

    .nav.nav-pills.nav-pill-toolbar .nav-item {
      margin-top: 0;
      margin-left: 0;
    }

    .nav.nav-pills.nav-pill-toolbar .nav-item a.nav-link {
      border: 1px solid #d3d3d3;
      border-radius: 0;
    }

    .nav.nav-pills.nav-pill-toolbar .nav-item a.nav-link.active,
    .nav.nav-pills.nav-pill-toolbar .nav-item a.nav-link:active {
      border-color: #1E9FF2;
    }

    .nav.nav-tabs .nav-item .nav-link {
      padding: 0.5rem 0.7rem;
      display: inline-flex;
    }

    .nav.nav-tabs .nav-item .nav-link:hover:not(.active) {
      border-color: transparent;
    }

    .nav.nav-tabs .nav-item .nav-link.active {
      background-color: #fff;
      border-radius: 0.25rem 0.25rem 0 0;
    }

    .nav.nav-tabs .nav-item .nav-link i.float-right {
      margin-left: 0.5rem;
    }

    .nav.nav-tabs .nav-item .nav-link.dropdown-toggle::after {
      top: -1px;
    }

    .nav.nav-tabs .nav-item:hover {
      color: #333;
    }

    .nav.nav-tabs.wrap-border {
      border: 1px solid #ddd;
    }

    .nav.nav-tabs.no-hover-bg .nav-item:hover {
      background-color: transparent;
    }

    .nav.nav-tabs .dropdown .dropdown-item.active {
      background-color: transparent;
      color: #55595c;
    }

    .nav.nav-tabs .dropdown .dropdown-item.active:focus {
      background-color: transparent;
      color: #55595c;
    }

    .nav.nav-tabs.square-border {
      border-radius: 0;
    }

    .nav.nav-tabs.square-border .nav-item .nav-link.active {
      border-radius: 0;
    }

    .nav.nav-tabs.nav-justified {
      width: 100%;
    }

    .nav.nav-tabs.nav-justified .nav-item {
      float: none;
    }

    .nav.nav-tabs.nav-justified .nav-link {
      text-align: center;
      margin-bottom: 5px;
    }

    .nav.nav-tabs.nav-justified>.dropdown .dropdown-menu {
      top: auto;
      left: auto;
    }

    @media (min-width: 576px) {
      .nav.nav-tabs.nav-justified .nav-item {
        display: table-cell;
        width: 1%;
      }

      .nav.nav-tabs.nav-justified .nav-link {
        margin-bottom: 0;
      }
    }

    .nav.nav-tabs.nav-justified .nav-link {
      margin-right: 0;
      border-radius: 0.25rem;
    }

    @media (min-width: 576px) {

      .nav.nav-tabs.nav-justified .nav-link.active,
      .nav.nav-tabs.nav-justified .nav-link.active:hover,
      .nav.nav-tabs.nav-justified .nav-link.active:focus {
        border-bottom-color: transparent;
      }
    }

    .nav.nav-tabs.nav-justified .nav-item a.nav-link {
      display: block;
    }

    .nav.nav-tabs.nav-justified .nav-item a.nav-link .active {
      background-color: #fff;
    }

    .nav.nav-tabs.nav-top-border .nav-item a {
      color: #28D094;
    }

    .nav.nav-tabs.nav-top-border .nav-item a.nav-link.active {
      border-top: 3px solid #28D094;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      color: #555;
    }

    .nav.nav-tabs.nav-top-border .nav-item a:hover {
      color: #0f5039;
    }

    .nav.nav-tabs.nav-top-border .nav-item a:hover:not(.active) {
      border-color: transparent;
    }

    .nav.nav-tabs.nav-topline {
      border-bottom: none;
    }

    .nav.nav-tabs.nav-topline .nav-item:hover {
      background-color: transparent;
    }

    .nav.nav-tabs.nav-topline .nav-item:not(:last-child) {
      border-right: none;
    }

    .nav.nav-tabs.nav-topline .nav-item a {
      border: 1px solid rgba(40, 44, 42, 0.1);
      border-bottom: none;
    }

    .nav.nav-tabs.nav-topline .nav-item a.nav-link {
      padding: 0.8rem 0.5rem;
      background: rgba(40, 44, 42, 0.05);
      color: #74777b;
      line-height: 1;
      -webkit-transition: color 0.2s;
      transition: color 0.2s;
    }

    .nav.nav-tabs.nav-topline .nav-item a.nav-link.active {
      background: none;
      box-shadow: inset 0 3px 0 #FF4961;
      color: #FF4961;
      border-radius: 0;
      border-top-color: #FF4961;
      border-bottom: none;
    }

    .nav.nav-tabs.nav-topline .nav-item a.nav-link:hover,
    .nav.nav-tabs.nav-topline .nav-item a.nav-link:focus {
      color: #FF4961;
    }

    .nav.nav-tabs.nav-topline .nav-item a.nav-link.dropdown-toggle::after {
      top: -1px;
    }

    .nav.nav-tabs.nav-underline {
      background: #fff;
      position: relative;
      border-bottom: 1px solid #1E9FF2;
    }

    .nav.nav-tabs.nav-underline .nav-item {
      position: relative;
      z-index: 1;
      display: block;
      text-align: center;
      -webkit-flex: 1;
      -moz-flex: 1;
      -ms-flex: 1;
      flex: 1;
      margin-left: 0;
    }

    .nav.nav-tabs.nav-underline .nav-item.open a .nav-link {
      background-color: transparent;
    }

    .nav.nav-tabs.nav-underline .nav-item.open a .nav-link:focus,
    .nav.nav-tabs.nav-underline .nav-item.open a .nav-link:hover {
      background-color: transparent;
      color: #1E9FF2;
    }

    .nav.nav-tabs.nav-underline .nav-item a.nav-link {
      position: relative;
      display: block;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      line-height: 2rem;
      padding: 0.5rem 1rem;
      -webkit-transition: color 0.2s;
      transition: color 0.2s;
      color: #1E9FF2;
      border: none;
    }

    .nav.nav-tabs.nav-underline .nav-item a.nav-link.dropdown-toggle::after {
      margin-top: -1rem;
    }

    .nav.nav-tabs.nav-underline .nav-item a.nav-link.active {
      border: none;
      background-color: transparent;
    }

    .nav.nav-tabs.nav-underline .nav-item a.nav-link.active:focus,
    .nav.nav-tabs.nav-underline .nav-item a.nav-link.active:hover {
      color: #55595c;
      background-color: transparent;
    }

    .nav.nav-tabs.nav-underline .nav-item a.nav-link.active:before {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    .nav.nav-tabs.nav-underline .nav-item a.nav-link:hover,
    .nav.nav-tabs.nav-underline .nav-item a.nav-link:focus {
      color: #1E9FF2;
    }

    .nav.nav-tabs.nav-underline .nav-item a.nav-link:before {
      position: absolute;
      bottom: -1px;
      left: 0;
      width: 100%;
      height: 4px;
      background: #1E9FF2;
      content: '';
      -webkit-transition: -webkit-transform 0.3s;
      transition: transform 0.3s;
      -webkit-transform: translate3d(0, 150%, 0);
      transform: translate3d(0, 150%, 0);
    }

    .nav.nav-tabs.nav-linetriangle {
      border-bottom-color: #FF9149;
    }

    .nav.nav-tabs.nav-linetriangle .nav-item {
      position: relative;
      z-index: 1;
      display: block;
      text-align: center;
      -webkit-flex: 1;
      -moz-flex: 1;
      -ms-flex: 1;
      flex: 1;
    }

    .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link {
      position: relative;
      display: block;
      overflow: visible;
      text-overflow: ellipsis;
      white-space: nowrap;
      line-height: 2.5;
      border: none;
      color: #55595c;
    }

    .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active {
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      border-bottom-color: #FF9149;
      color: #FF9149;
    }

    .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:after,
    .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:before {
      position: absolute;
      top: 100%;
      left: 50%;
      width: 0;
      height: 0;
      border: solid transparent;
      content: '';
      pointer-events: none;
    }

    .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:before {
      margin-left: -11px;
      border-width: 12px;
      border-top-color: #FF9149;
    }

    .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:after {
      margin-left: -10px;
      border-width: 10px;
      border-top-color: #fff;
    }

    .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:focus {
      color: #FF9149;
    }

    .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.dropdown-toggle:after {
      margin-top: -1rem;
    }

    .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.dropdown-toggle.active:after {
      margin-top: 0;
    }

    .nav.nav-tabs.nav-linetriangle.nav-justified {
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      border-bottom-color: #FF9149;
    }

    .nav.nav-tabs.nav-linetriangle.nav-justified .nav-item a.nav-link.active {
      top: 0px;
    }

    .nav.nav-tabs.nav-iconfall {
      overflow: visible;
      border-bottom: none;
    }

    .nav.nav-tabs.nav-iconfall .nav-item {
      position: relative;
      z-index: 1;
      display: block;
      text-align: center;
      -webkit-flex: 1;
      -moz-flex: 1;
      -ms-flex: 1;
      flex: 1;
      margin: 0.5rem 0.7rem 0;
    }

    .nav.nav-tabs.nav-iconfall .nav-item:hover,
    .nav.nav-tabs.nav-iconfall .nav-item:focus {
      background-color: transparent;
    }

    .nav.nav-tabs.nav-iconfall .nav-item a.nav-link {
      display: inline-block;
      padding: 1em 0 2em;
      color: #74777b;
      position: relative;
      line-height: 2.5;
      width: 100%;
      border: none;
      -webkit-transition: color 0.3s cubic-bezier(0.7, 0, 0.3, 1);
      transition: color 0.3s cubic-bezier(0.7, 0, 0.3, 1);
    }

    .nav.nav-tabs.nav-iconfall .nav-item a:hover,
    .nav.nav-tabs.nav-iconfall .nav-item a:focus {
      color: #2CC185;
      border: none;
    }

    .nav.nav-tabs.nav-iconfall .nav-item a.active {
      color: #2CC185;
      border: none;
      background-color: transparent;
    }

    .nav.nav-tabs.nav-iconfall .nav-item a.active i:after {
      opacity: 1;
      -webkit-transform: scale3d(1, 1, 1);
      transform: scale3d(1, 1, 1);
    }

    .nav.nav-tabs.nav-iconfall .nav-item a.active i:before {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    .nav.nav-tabs.nav-iconfall .nav-item a i {
      display: block;
      margin-right: 0;
    }

    .nav.nav-tabs.nav-iconfall .nav-item a i:after {
      position: absolute;
      bottom: 1em;
      left: 50%;
      margin-left: -20px;
      width: 40px;
      height: 4px;
      background: #2CC185;
      content: '';
      opacity: 0;
      -webkit-transition: -webkit-transform 0.2s ease-in;
      transition: transform 0.2s ease-in;
      -webkit-transform: scale3d(0, 1, 1);
      transform: scale3d(0, 1, 1);
    }

    .nav.nav-tabs.nav-iconfall .nav-item a i:before {
      display: block;
      margin: 0 0 0.35em;
      opacity: 0;
      -webkit-transition: -webkit-transform 0.2s, opacity 0.2s;
      transition: transform 0.2s, opacity 0.2s;
      -webkit-transform: translate3d(0, -100px, 0);
      transform: translate3d(0, -100px, 0);
      pointer-events: none;
    }

    .nav.nav-tabs.nav-iconfall .nav-item a.dropdown-toggle:after {
      margin-top: -1rem;
    }

    .nav .nav-item .nav-link {
      display: block;
    }

    .nav .dropdown-divider {
      margin: 0.5rem 0;
    }

    @media (min-width: 576px) {

      .nav.nav-tabs.nav-linetriangle.nav-justified .nav-item,
      .nav.nav-tabs.nav-iconfall.nav-justified .nav-item,
      .nav.nav-tabs.nav-underline.nav-justified .nav-item {
        display: table-cell !important;
      }
    }

    .nav-vertical {
      overflow: hidden;
    }

    .nav-vertical .nav-left.nav-tabs {
      float: left;
      border-bottom: 0;
      border-radius: 0;
      display: table;
    }

    .nav-vertical .nav-left.nav-tabs li.nav-item {
      float: none;
      margin: 0;
      margin-right: -1px;
    }

    .nav-vertical .nav-left.nav-tabs li.nav-item a.nav-link {
      min-width: 6.5rem;
      border-right: 1px solid #ddd;
    }

    .nav-vertical .nav-left.nav-tabs li.nav-item a.nav-link.active {
      border: 1px solid #ddd;
      border-right: 0;
      border-radius: 0.25rem 0 0 0.25rem;
    }

    .nav-vertical .nav-left.nav-tabs li.nav-item a.nav-link:hover:not(.active) {
      border-color: transparent;
      border-right: 1px solid #ddd;
    }

    .nav-vertical .nav-left.nav-tabs.nav-border-left li.nav-item a.nav-link {
      color: #FF4961;
    }

    .nav-vertical .nav-left.nav-tabs.nav-border-left li.nav-item a.nav-link.active {
      border-left: 3px solid #FF4961;
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
      color: #555;
    }

    .nav-vertical .nav-left~.tab-content {
      margin-left: 45px;
    }

    .nav-vertical .nav-left~.tab-content .tab-pane {
      display: none;
      background-color: #fff;
      padding: 0 0 0.6rem 1rem;
      overflow-y: auto;
    }

    .nav-vertical .nav-left~.tab-content .tab-pane.active {
      display: block;
    }

    .nav-vertical .nav-right.nav-tabs {
      float: right;
      border-bottom: 0;
      border-radius: 0;
      display: table;
    }

    .nav-vertical .nav-right.nav-tabs li.nav-item {
      float: none;
      margin: 0;
      margin-left: -1px;
    }

    .nav-vertical .nav-right.nav-tabs li.nav-item a.nav-link {
      min-width: 6.5rem;
      border-left: 1px solid #ddd;
    }

    .nav-vertical .nav-right.nav-tabs li.nav-item a.nav-link.active {
      border: 1px solid #ddd;
      border-left: 0;
      border-radius: 0 0.25rem 0.25rem 0;
    }

    .nav-vertical .nav-right.nav-tabs li.nav-item a.nav-link:hover:not(.active) {
      border-color: transparent;
      border-left: 1px solid #ddd;
    }

    .nav-vertical .nav-right.nav-tabs.nav-border-right li.nav-item a.nav-link {
      color: #FF4961;
    }

    .nav-vertical .nav-right.nav-tabs.nav-border-right li.nav-item a.nav-link.active {
      border-right: 3px solid #FF4961;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      color: #555;
    }

    .nav-vertical .nav-right~.tab-content .tab-pane {
      display: none;
      background-color: #fff;
      padding: 0 0 0.6rem 1rem;
      overflow-y: auto;
    }

    .nav-vertical .nav-right~.tab-content .tab-pane.active {
      display: block;
    }

    .nav.nav-tabs.nav-only-icon .nav-item .nav-link {
      font-size: 1.25rem;
    }

    .nav.nav-tabs.nav-only-icon .nav-item .nav-link i {
      margin-left: 0.5rem;
    }

    .nav.nav-tabs .nav-item.show .nav-link,
    .nav.nav-tabs .nav-item.show .nav-link:focus {
      background-color: transparent;
    }

    .alert {
      position: relative;
    }

    .alert .alert-link:hover {
      text-decoration: underline;
    }

    .alert.alert-icon-left {
      border-left-width: 4rem;
    }

    .alert.alert-icon-right {
      border-right-width: 4rem;
    }

    .alert.alert-icon-left[class*=bg-] {
      border-left-color: rgba(0, 0, 0, 0.15) !important;
    }

    .alert.alert-icon-right[class*=bg-] {
      border-right-color: rgba(0, 0, 0, 0.15) !important;
    }

    .alert[class*=alert-icon-] .alert-icon {
      content: '\f2b2';
      font-family: LineAwesome;
      color: #fff;
      width: 4rem;
      left: -4rem;
      text-align: center;
      position: absolute;
      top: 50%;
      margin-top: -8px;
      font-size: 1.25rem;
      font-weight: 400;
      line-height: 1;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .alert .close {
      font-size: 2rem;
      line-height: 1rem;
    }

    .alert[class*=bg-] {
      color: #fff;
    }

    .alert[class*=bg-] .alert-link {
      color: #fff;
    }

    .alert[class*=bg-] .close {
      color: #fff;
      opacity: 1;
      text-shadow: none;
    }

    .alert.alert-icon-right .alert-icon {
      left: auto;
      right: -4rem;
    }

    .alert[class*=alert-arrow-]:before {
      content: "";
      display: inline-block;
      position: absolute;
      top: 50%;
      left: 0;
      border-left: 8px solid;
      border-top: 8px solid transparent;
      border-bottom: 8px solid transparent;
      border-left-color: inherit;
      margin-top: -8px;
    }

    .alert.alert-arrow-right:before {
      left: auto;
      right: 0;
      border-left: 0;
      border-right: 8px solid;
      border-right-color: inherit;
    }

    .media-list .media {
      padding: 1.5rem;
      margin-top: 0;
    }

    .media-list .media .media-left {
      padding-right: 1rem;
      float: left;
    }

    .media-list .media .media-right {
      padding-left: 1rem;
      float: right;
    }

    .media-list a.media {
      color: #6B6F82 !important;
    }

    .media [class*="avatar-"] {
      position: relative;
      padding-right: 0 !important;
      margin-right: 0;
    }

    .media [class*="avatar-"] i {
      position: absolute;
      right: -4px;
      bottom: -1px;
      width: 10px;
      height: 10px;
      border: 2px solid white;
      border-radius: 100%;
    }

    .media-bordered .media {
      border-top: 1px solid #E4E7ED;
    }

    .media-bordered .media:first-child {
      border-top: 0;
    }

    .media-notation a {
      margin-right: 0.5rem;
    }

    /*=========================================================================================
  File Name: progress.scss
  Description: Extended bootstrap progress bar scss.
  ----------------------------------------------------------------------------------------
  Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
  Version: 1.0
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
  ----------------------------------------------------------------------------------------

  Modifiers:       `progress-lg`
                   `progress-md`
                   `progress-sm`
                   `progress-xs`

  ==========================================================================================*/
    .progress {
      margin-bottom: 3rem;
    }

    .progress:last-child {
      margin-bottom: 1rem;
    }

    .progress.progress-xl {
      height: 2rem !important;
    }

    .progress.progress-lg {
      height: 1.5rem !important;
    }

    .progress.progress-md {
      height: 1rem !important;
    }

    .progress.progress-sm {
      height: 0.5rem !important;
    }

    .progress.progress-xs {
      height: 0.25rem !important;
    }

    .progress.box-shadow {
      box-shadow: 0px 10px 15px 0px rgba(107, 111, 130, 0.3);
    }

    /* ===============================================================================================
	File Name: list-group.scss
	Description: Contain list item, list group related extended SCSS.
	----------------------------------------------------------------------------------------------
	Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
	Version: 1.0
	Author: PIXINVENT
	Author URL: http://www.themeforest.net/user/pixinvent
  ================================================================================================*/
    ul.list-inline li {
      display: inline-block;
    }

    ul.list-inline.list-inline-pipe>li+li:before {
      content: ' | ';
      color: #626E82;
    }

    .list-group .list-group-item.active {
      color: #fff !important;
    }

    .list-group .list-group-item-action:active {
      color: #fff;
      background-color: #1E9FF2;
    }

    .list-group .list-group-item-action:active a {
      color: #fff;
    }

    .users-list li+li {
      margin-left: -14px;
    }

    .users-list li img {
      border: 2px solid #fff;
      box-shadow: 0px 2px 10px 0px rgba(107, 111, 130, 0.3);
    }

    .users-list li .badge {
      background: rgba(255, 255, 255, 0.8);
      color: #6B6F82;
      margin-bottom: 6px;
    }

    .modal-sm {
      max-width: 400px;
    }

    .modal-xs {
      max-width: 300px;
    }

    .modal-xl {
      max-width: 94%;
      margin-left: 3%;
      margin-right: 3%;
    }

    .icon-align {
      margin-top: 0.6rem;
      margin-left: 0.5rem;
    }

    .popover.popover-top:after,
    .popover.popover-top:before,
    .popover.bs-tether-element-attached-top:after,
    .popover.bs-tether-element-attached-top:before {
      margin-left: -10px;
    }

    .popover.popover-right:after,
    .popover.popover-right:before,
    .popover.bs-tether-element-attached-right:after,
    .popover.bs-tether-element-attached-right:before {
      margin-top: -10px;
    }

    .popover.popover-bottom:after,
    .popover.popover-bottom:before,
    .popover.bs-tether-element-attached-bottom:after,
    .popover.bs-tether-element-attached-bottom:before {
      margin-left: -10px;
    }

    .popover.popover-left:after,
    .popover.popover-left:before,
    .popover.bs-tether-element-attached-left:after,
    .popover.bs-tether-element-attached-left:before {
      margin-top: -10px;
    }

    .icon-bg-circle {
      color: #FFFFFF;
      padding: 0.5rem;
      border-radius: 50%;
    }

    .icon-left {
      margin-right: 0.5rem;
    }

    .icon-right {
      margin-right: 0.5rem;
    }

    .icon-spin {
      display: inline-block;
      animation: spin 1s infinite linear;
    }

    .blockOverlay {
      z-index: 1050 !important;
    }

    .blockElement,
    .blockPage {
      z-index: 1051 !important;
    }

    .embed-responsive:before {
      padding-top: 57%;
    }

    @-moz-keyframes spin {
      from {
        -moz-transform: rotate(0deg);
      }

      to {
        -moz-transform: rotate(360deg);
      }
    }

    @-webkit-keyframes spin {
      from {
        -webkit-transform: rotate(0deg);
      }

      to {
        -webkit-transform: rotate(360deg);
      }
    }

    @keyframes spin {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    .hidden {
      display: none;
      visibility: hidden;
    }

    a:hover {
      cursor: pointer;
    }

    .round {
      border-radius: 1.5rem;
    }

    .square {
      border-radius: 0;
    }

    .mega-dropdown-menu p.accordion-text {
      line-height: 1.45;
    }

    .mega-dropdown-menu a[aria-expanded="true"] {
      padding-bottom: 1rem;
    }

    .line-on-side {
      border-bottom: 1px solid #dadada;
      line-height: 0.1em;
      margin: 10px 0 20px;
    }

    .line-on-side span {
      background: #fff;
      padding: 0 10px;
    }

    .icon-line-height {
      line-height: 1.5rem !important;
    }

    .table-middle td {
      vertical-align: middle;
    }

    .spinner {
      display: inline-block;
      -webkit-animation: spin 1s linear infinite;
      -o-animation: spin 1s linear infinite;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }
  </style>

</head>
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-body">
      <section class="card">
        <div id="invoice-template" class="card-body">
          <!-- Invoice Company Details -->
          <div id="invoice-company-details" class="row">
            <div class="col-md-6 col-sm-12 text-center text-md-left">
              <div class="media">
                <img src="{{ public_path('front-style/assets/images/itajer_logo.png') }}" width="200px"
                  alt="company logo" class="" />
              </div>
            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-right">
              <h2>INVOICE</h2>
              <p class="pb-3"># INV-{{ $order_email_imfo['order_number'] }}</p>
              <ul class="px-0 list-unstyled">
                <li>Final Total</li>
                <li class="lead text-bold-800">{{ $order_email_imfo['total'] }} AED</li>
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
                <li class="text-bold-800">{{ $order_email_imfo['full_name ']}}</li>
                <li>{{ $order_email_imfo['address'] }},</li>
                <li>{{ $order_email_imfo['city'] }},</li>
                <li>{{ $order_email_imfo['country'] }}.</li>
              </ul>
              <strong class="text-muted">Shipping To</strong>
              <ul class="px-0 list-unstyled">
                <li class="text-bold-800">{{ $order_email_imfo['sfull_name'] }}</li>
                <li>{{ $order_email_imfo->saddress }},</li>
                <li>{{ $order_email_imfo->scity }},</li>
                <li>{{ $order_email_imfo->scountry }}.</li>
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
                    @foreach ($order_email_imfo->product as $items)
                    <tr>
                      <th scope="row">1</th>
                      <td class="text-truncate">
                        <span class="avatar avatar-xs">
                          <img class="box-shadow-2" src="{{  $items->image}}" alt="avatar">
                        </span>
                        <span>{{ $items->title }}</span>
                      </td>
                      <td class="text-right">{{ $order_email_imfo->full_name }}</td>
                      <td class="text-right">{{ $items->pivot->quantity }}</td>
                      <td class="text-right">{{ $order_email_imfo->total }}</td>
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
                        <td class="text-right">{{ $order_email_imfo->sub_total }} AED</td>
                      </tr>
                      <tr>
                        <td>Coupon</td>
                        <td class="text-right">{{ $order_email_imfo->coupon }} AED</td>
                      </tr>
                      <tr>
                        <td>Delivary Charge</td>
                        <td class="text-right">{{ $order_email_imfo->delivary_charge }} AED</td>
                      </tr>
                      <tr>
                        <td class="text-bold-800">Total</td>
                        <td class="text-bold-800 text-right"> {{ $order_email_imfo->total }} AED</td>
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

<body>

  </html>