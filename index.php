<!DOCTYPE html>
<html>

	<head>
    <style>
         hr,
  img {
      border: 0
  }
  
  body,
  figure {
      margin: 0
  }
  
  .tooltip,
  button,
  select {
      text-transform: none
  }
  
  html {
      font-family: sans-serif;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%
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
      background-color: transparent;
      color: #337ab7;
      text-decoration: none
  }
  
  a:active,
  a:hover {
      outline: 0
  }
  
  abbr[title] {
      border-bottom: 1px dotted
  }
  
  b,
  optgroup,
  strong {
      font-weight: 700
  }
  
  dfn {
      font-style: italic
  }
  
  h1 {
      font-size: 2em
  }
  
  mark {
      background: #ff0;
      color: #000
  }
  
  .form-control,
  .img-thumbnail,
  body {
      background-color: #fff
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
  
  .modal,
  .modal-backdrop {
      bottom: 0;
      right: 0;
      top: 0;
      left: 0
  }
  
  img {
      vertical-align: middle
  }
  
  svg:not(:root) {
      overflow: hidden
  }
  
  hr {
      -webkit-box-sizing: content-box;
      -moz-box-sizing: content-box;
      box-sizing: content-box;
      height: 0
  }
  
  pre,
  textarea {
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
  
  input[type=search]::-webkit-search-cancel-button,
  input[type=search]::-webkit-search-decoration {
      -webkit-appearance: none
  }
  
  table {
      border-collapse: collapse;
      border-spacing: 0
  }
  
  td,
  th {
      padding: 0
  }
  
  *,
  :after,
  :before {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
  }
  
  html {
      font-size: 10px;
      -webkit-tap-highlight-color: transparent
  }
  
  body {
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #333
  }
  
  button,
  input,
  select,
  textarea {
      font-family: inherit;
      font-size: inherit;
      line-height: inherit
  }
  
  a:focus,
  a:hover {
      color: #23527c;
      text-decoration: underline
  }
  
  .btn,
  .nav>li>a:focus,
  .nav>li>a:hover,
  .navbar-brand:focus,
  .navbar-brand:hover,
  .tooltip {
      text-decoration: none
  }
  
  a:focus {
      outline: -webkit-focus-ring-color auto 5px;
      outline-offset: -2px
  }
  
  .img-responsive {
      display: block;
      max-width: 100%;
      height: auto
  }
  
  .img-thumbnail,
  label {
      display: inline-block;
      max-width: 100%
  }
  
  .img-rounded {
      border-radius: 6px
  }
  
  .img-thumbnail {
      padding: 4px;
      line-height: 1.42857143;
      border: 1px solid #ddd;
      border-radius: 4px;
      -webkit-transition: all .2s ease-in-out;
      -o-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out;
      height: auto
  }
  
  .img-circle {
      border-radius: 50%
  }
  
  hr {
      margin-top: 20px;
      margin-bottom: 20px;
      border-top: 1px solid #eee
  }
  
  .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      margin: -1px;
      padding: 0;
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
  
  .container,
  .container-fluid {
      margin-right: auto;
      margin-left: auto;
      padding-left: 15px;
      padding-right: 15px
  }
  
  [role=button] {
      cursor: pointer
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
  
  .row {
      margin-left: -15px;
      margin-right: -15px
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
      padding-left: 15px;
      padding-right: 15px
  }
  
  fieldset,
  legend {
      padding: 0;
      border: 0
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
  
  fieldset {
      margin: 0;
      min-width: 0
  }
  
  legend {
      display: block;
      width: 100%;
      margin-bottom: 20px;
      font-size: 21px;
      line-height: inherit;
      color: #333;
      border-bottom: 1px solid #e5e5e5
  }
  
  label {
      margin-bottom: 5px;
      font-weight: 700
  }
  
  .checkbox label,
  .checkbox-inline,
  .radio label,
  .radio-inline {
      font-weight: 400;
      padding-left: 20px;
      cursor: pointer;
      margin-bottom: 0
  }
  
  input[type=search] {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      -webkit-appearance: none
  }
  
  input[type=checkbox],
  input[type=radio] {
      margin: 4px 0 0;
      margin-top: 1px\9;
      line-height: normal
  }
  
  .form-control,
  output {
      font-size: 14px;
      line-height: 1.42857143;
      color: #555;
      display: block
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
  input[type=radio]:focus,
  input[type=file]:focus {
      outline: -webkit-focus-ring-color auto 5px;
      outline-offset: -2px
  }
  
  .btn,
  .email:focus,
  .modal,
  .modal-content,
  .name:focus,
  .navbar-toggle:focus,
  .phone:focus {
      outline: 0
  }
  
  output {
      padding-top: 7px
  }
  
  .form-control {
      width: 100%;
      height: 34px;
      padding: 6px 12px;
      background-image: none;
      border: 1px solid #ccc;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
      -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
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
  
  .has-success .checkbox,
  .has-success .checkbox-inline,
  .has-success .control-label,
  .has-success .form-control-feedback,
  .has-success .help-block,
  .has-success .radio,
  .has-success .radio-inline,
  .has-success.checkbox label,
  .has-success.checkbox-inline label,
  .has-success.radio label,
  .has-success.radio-inline label {
      color: #3c763d
  }
  
  .form-control::-ms-expand {
      border: 0;
      background-color: transparent
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
      input[type=time].form-control,
      input[type=datetime-local].form-control,
      input[type=month].form-control {
          line-height: 34px
      }
      .input-group-sm input[type=date],
      .input-group-sm input[type=time],
      .input-group-sm input[type=datetime-local],
      .input-group-sm input[type=month],
      input[type=date].input-sm,
      input[type=time].input-sm,
      input[type=datetime-local].input-sm,
      input[type=month].input-sm {
          line-height: 30px
      }
      .input-group-lg input[type=date],
      .input-group-lg input[type=time],
      .input-group-lg input[type=datetime-local],
      .input-group-lg input[type=month],
      input[type=date].input-lg,
      input[type=time].input-lg,
      input[type=datetime-local].input-lg,
      input[type=month].input-lg {
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
  
  .checkbox label,
  .radio label {
      min-height: 20px
  }
  
  .checkbox input[type=checkbox],
  .checkbox-inline input[type=checkbox],
  .radio input[type=radio],
  .radio-inline input[type=radio] {
      position: absolute;
      margin-left: -20px;
      margin-top: 4px\9
  }
  
  .checkbox+.checkbox,
  .radio+.radio {
      margin-top: -5px
  }
  
  .checkbox-inline,
  .radio-inline {
      position: relative;
      display: inline-block;
      vertical-align: middle
  }
  
  .checkbox-inline+.checkbox-inline,
  .radio-inline+.radio-inline {
      margin-top: 0;
      margin-left: 10px
  }
  
  .checkbox-inline.disabled,
  .checkbox.disabled label,
  .radio-inline.disabled,
  .radio.disabled label,
  fieldset[disabled] .checkbox label,
  fieldset[disabled] .checkbox-inline,
  fieldset[disabled] .radio label,
  fieldset[disabled] .radio-inline,
  fieldset[disabled] input[type=checkbox],
  fieldset[disabled] input[type=radio],
  input[type=checkbox].disabled,
  input[type=checkbox][disabled],
  input[type=radio].disabled,
  input[type=radio][disabled] {
      cursor: not-allowed
  }
  
  .form-control-static {
      padding-top: 7px;
      padding-bottom: 7px;
      margin-bottom: 0;
      min-height: 34px
  }
  
  .form-control-static.input-lg,
  .form-control-static.input-sm {
      padding-left: 0;
      padding-right: 0
  }
  
  .form-group-sm .form-control,
  .input-sm {
      padding: 5px 10px;
      border-radius: 3px;
      font-size: 12px
  }
  
  .input-sm {
      height: 30px;
      line-height: 1.5
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
      line-height: 1.5
  }
  
  .form-group-lg .form-control,
  .input-lg {
      border-radius: 6px;
      padding: 10px 16px;
      font-size: 18px
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
      line-height: 1.3333333
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
      line-height: 1.3333333
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
      border-color: #3c763d;
      background-color: #dff0d8
  }
  
  .has-warning .checkbox,
  .has-warning .checkbox-inline,
  .has-warning .control-label,
  .has-warning .form-control-feedback,
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
      border-color: #8a6d3b;
      background-color: #fcf8e3
  }
  
  .has-error .checkbox,
  .has-error .checkbox-inline,
  .has-error .control-label,
  .has-error .form-control-feedback,
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
      border-color: #a94442;
      background-color: #f2dede
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
      .form-inline .form-control-static,
      .form-inline .form-group {
          display: inline-block
      }
      .form-inline .control-label,
      .form-inline .form-group {
          margin-bottom: 0;
          vertical-align: middle
      }
      .form-inline .form-control {
          display: inline-block;
          width: auto;
          vertical-align: middle
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
      .form-horizontal .control-label {
          text-align: right;
          margin-bottom: 0;
          padding-top: 7px
      }
  }
  
  .nav>li,
  .nav>li>a {
      display: block;
      position: relative
  }
  
  .nav-justified>.dropdown .dropdown-menu,
  .nav-tabs.nav-justified>.dropdown .dropdown-menu {
      top: auto;
      left: auto
  }
  
  .form-horizontal .checkbox,
  .form-horizontal .checkbox-inline,
  .form-horizontal .radio,
  .form-horizontal .radio-inline {
      margin-top: 0;
      margin-bottom: 0;
      padding-top: 7px
  }
  
  .form-horizontal .checkbox,
  .form-horizontal .radio {
      min-height: 27px
  }
  
  .form-horizontal .form-group {
      margin-left: -15px;
      margin-right: -15px
  }
  
  .form-horizontal .has-feedback .form-control-feedback {
      right: 15px
  }
  
  @media (min-width:768px) {
      .form-horizontal .form-group-lg .control-label {
          padding-top: 11px;
          font-size: 18px
      }
      .form-horizontal .form-group-sm .control-label {
          padding-top: 6px;
          font-size: 12px
      }
  }
  
  .nav {
      margin-bottom: 0;
      padding-left: 0;
      list-style: none
  }
  
  .nav>li>a {
      padding: 10px 15px
  }
  
  .nav>li>a:focus,
  .nav>li>a:hover {
      background-color: #eee
  }
  
  .nav>li.disabled>a {
      color: #777
  }
  
  .nav>li.disabled>a:focus,
  .nav>li.disabled>a:hover {
      color: #777;
      text-decoration: none;
      background-color: transparent;
      cursor: not-allowed
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
      background-color: #fff;
      border: 1px solid #ddd;
      border-bottom-color: transparent;
      cursor: default
  }
  
  .nav-tabs.nav-justified {
      width: 100%;
      border-bottom: 0
  }
  
  .nav-tabs.nav-justified>li {
      float: none
  }
  
  .nav-tabs.nav-justified>li>a {
      text-align: center;
      margin-bottom: 5px;
      margin-right: 0;
      border-radius: 4px
  }
  
  .nav-tabs.nav-justified>.active>a,
  .nav-tabs.nav-justified>.active>a:focus,
  .nav-tabs.nav-justified>.active>a:hover {
      border: 1px solid #ddd
  }
  
  @media (min-width:768px) {
      .nav-tabs.nav-justified>li {
          display: table-cell;
          width: 1%
      }
      .nav-tabs.nav-justified>li>a {
          margin-bottom: 0;
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
  
  .nav-justified>li,
  .nav-stacked>li {
      float: none
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
  
  .nav-stacked>li+li {
      margin-top: 2px;
      margin-left: 0
  }
  
  .nav-justified {
      width: 100%
  }
  
  .nav-justified>li>a {
      text-align: center;
      margin-bottom: 5px
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
      .nav-justified>li {
          display: table-cell;
          width: 1%
      }
      .nav-justified>li>a {
          margin-bottom: 0
      }
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
      border-top-right-radius: 0;
      border-top-left-radius: 0
  }
  
  .navbar {
      position: relative;
      min-height: 50px;
      margin-bottom: 20px;
      border: 1px solid transparent
  }
  
  .navbar-collapse {
      overflow-x: visible;
      padding-right: 15px;
      padding-left: 15px;
      border-top: 1px solid transparent;
      -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
      -webkit-overflow-scrolling: touch
  }
  
  .navbar-collapse.in {
      overflow-y: auto
  }
  
  @media (min-width:768px) {
      .navbar {
          border-radius: 4px
      }
      .navbar-header {
          float: left
      }
      .navbar-collapse {
          width: auto;
          border-top: 0;
          -webkit-box-shadow: none;
          box-shadow: none
      }
      .navbar-collapse.collapse {
          display: block!important;
          height: auto!important;
          padding-bottom: 0;
          overflow: visible!important
      }
      .navbar-collapse.in {
          overflow-y: visible
      }
      .navbar-fixed-bottom .navbar-collapse,
      .navbar-fixed-top .navbar-collapse,
      .navbar-static-top .navbar-collapse {
          padding-left: 0;
          padding-right: 0
      }
  }
  
  .modal,
  .modal-open {
      overflow: hidden
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
  
  .container-fluid>.navbar-collapse,
  .container-fluid>.navbar-header,
  .container>.navbar-collapse,
  .container>.navbar-header {
      margin-right: -15px;
      margin-left: -15px
  }
  
  .navbar-static-top {
      z-index: 1000;
      border-width: 0 0 1px
  }
  
  .navbar-fixed-bottom,
  .navbar-fixed-top {
      position: fixed;
      right: 0;
      left: 0;
      z-index: 1030
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
  
  .navbar-brand {
      float: left;
      padding: 15px;
      font-size: 18px;
      line-height: 20px;
      height: 50px
  }
  
  .navbar-brand>img {
      display: block
  }
  
  @media (min-width:768px) {
      .container-fluid>.navbar-collapse,
      .container-fluid>.navbar-header,
      .container>.navbar-collapse,
      .container>.navbar-header {
          margin-right: 0;
          margin-left: 0
      }
      .navbar-fixed-bottom,
      .navbar-fixed-top,
      .navbar-static-top {
          border-radius: 0
      }
      .navbar>.container .navbar-brand,
      .navbar>.container-fluid .navbar-brand {
          margin-left: -15px
      }
  }
  
  .navbar-toggle {
      position: relative;
      float: right;
      margin-right: 15px;
      padding: 9px 10px;
      margin-top: 8px;
      margin-bottom: 8px;
      background-color: transparent;
      background-image: none;
      border: 1px solid transparent;
      border-radius: 4px
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
  
  .modal-title,
  .tooltip {
      line-height: 1.42857143
  }
  
  @media (min-width:768px) {
      .navbar-toggle {
          display: none
      }
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
      border-top: 1px solid transparent;
      border-bottom: 1px solid transparent;
      -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
      margin: 8px -15px
  }
  
  @media (min-width:768px) {
      .navbar-form .form-control-static,
      .navbar-form .form-group {
          display: inline-block
      }
      .navbar-form .control-label,
      .navbar-form .form-group {
          margin-bottom: 0;
          vertical-align: middle
      }
      .navbar-form .form-control {
          display: inline-block;
          width: auto;
          vertical-align: middle
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
      .navbar-form {
          width: auto;
          border: 0;
          margin-left: 0;
          margin-right: 0;
          padding-top: 0;
          padding-bottom: 0;
          -webkit-box-shadow: none;
          box-shadow: none
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
  
  .navbar-nav>li>.dropdown-menu {
      margin-top: 0;
      border-top-right-radius: 0;
      border-top-left-radius: 0
  }
  
  .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
      margin-bottom: 0;
      border-radius: 4px 4px 0 0
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
          margin-left: 15px;
          margin-right: 15px
      }
      .navbar-left {
          float: left!important
      }
      .navbar-right {
          float: right!important;
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
  
  .navbar-default .navbar-nav>li>a,
  .navbar-default .navbar-text {
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
  
  .navbar-default .navbar-nav>.open>a,
  .navbar-default .navbar-nav>.open>a:focus,
  .navbar-default .navbar-nav>.open>a:hover {
      background-color: #e7e7e7;
      color: #555
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
  
  .navbar-inverse .navbar-nav>li>a,
  .navbar-inverse .navbar-text {
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
  
  .navbar-inverse .navbar-nav>.open>a,
  .navbar-inverse .navbar-nav>.open>a:focus,
  .navbar-inverse .navbar-nav>.open>a:hover {
      background-color: #080808;
      color: #fff
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
  
  .modal {
      display: none;
      position: fixed;
      z-index: 1050;
      -webkit-overflow-scrolling: touch
  }
  
  .modal.fade .modal-dialog {
      -webkit-transform: translate(0, -25%);
      -ms-transform: translate(0, -25%);
      -o-transform: translate(0, -25%);
      transform: translate(0, -25%);
      -webkit-transition: -webkit-transform .3s ease-out;
      -o-transition: -o-transform .3s ease-out;
      transition: transform .3s ease-out
  }
  
  .modal.in .modal-dialog {
      -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
      -o-transform: translate(0, 0);
      transform: translate(0, 0)
  }
  
  .modal-dialog {
      position: relative;
      width: auto;
      margin: 10px
  }
  
  .modal-content {
      position: relative;
      background-color: #fff;
      border: 1px solid #999;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: 6px;
      -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
      box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
      -webkit-background-clip: padding-box;
      background-clip: padding-box
  }
  
  .modal-backdrop {
      position: fixed;
      z-index: 1040;
      background-color: #000
  }
  
  .modal-backdrop.fade {
      opacity: 0;
      filter: alpha(opacity=0)
  }
  
  .modal-backdrop.in {
      opacity: .5;
      filter: alpha(opacity=50)
  }
  
  .modal-header {
      padding: 15px;
      border-bottom: 1px solid #e5e5e5
  }
  
  .modal-header .close {
      margin-top: -2px
  }
  
  .modal-title {
      margin: 0
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
      margin-left: 5px;
      margin-bottom: 0
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
  
  .tooltip.top-left .tooltip-arrow,
  .tooltip.top-right .tooltip-arrow {
      margin-bottom: -5px;
      border-width: 5px 5px 0;
      border-top-color: #000;
      bottom: 0
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
      letter-spacing: normal;
      line-break: auto;
      text-align: left;
      text-align: start;
      text-shadow: none;
      white-space: normal;
      word-break: normal;
      word-spacing: normal;
      word-wrap: normal;
      font-size: 12px;
      opacity: 0;
      filter: alpha(opacity=0)
  }
  
  .tooltip.in {
      opacity: .9;
      filter: alpha(opacity=90)
  }
  
  .tooltip.top {
      margin-top: -3px;
      padding: 5px 0
  }
  
  .tooltip.right {
      margin-left: 3px;
      padding: 0 5px
  }
  
  .tooltip.bottom {
      margin-top: 3px;
      padding: 5px 0
  }
  
  .tooltip.left {
      margin-left: -3px;
      padding: 0 5px
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
  
  .tooltip.top .tooltip-arrow {
      bottom: 0;
      left: 50%;
      margin-left: -5px;
      border-width: 5px 5px 0;
      border-top-color: #000
  }
  
  .tooltip.top-left .tooltip-arrow {
      right: 5px
  }
  
  .tooltip.top-right .tooltip-arrow {
      left: 5px
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
  
  .tooltip.bottom .tooltip-arrow,
  .tooltip.bottom-left .tooltip-arrow,
  .tooltip.bottom-right .tooltip-arrow {
      top: 0;
      border-width: 0 5px 5px;
      border-bottom-color: #000
  }
  
  .tooltip.bottom .tooltip-arrow {
      left: 50%;
      margin-left: -5px
  }
  
  .tooltip.bottom-left .tooltip-arrow {
      right: 5px;
      margin-top: -5px
  }
  
  .tooltip.bottom-right .tooltip-arrow {
      left: 5px;
      margin-top: -5px
  }
  
  .clearfix:after,
  .clearfix:before,
  .container-fluid:after,
  .container-fluid:before,
  .container:after,
  .container:before,
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
  .row:after,
  .row:before {
      content: " ";
      display: table
  }
  
  .clearfix:after,
  .container-fluid:after,
  .container:after,
  .form-horizontal .form-group:after,
  .modal-footer:after,
  .modal-header:after,
  .nav:after,
  .navbar-collapse:after,
  .navbar-header:after,
  .navbar:after,
  .row:after {
      clear: both
  }
  
  .center-block {
      display: block;
      margin-left: auto;
      margin-right: auto
  }
  
  .pull-right {
      float: right!important
  }
  
  .pull-left {
      float: left!important
  }
  
  .hide {
      display: none!important
  }
  
  .show {
      display: block!important
  }
  
  .hidden,
  .visible-lg,
  .visible-lg-block,
  .visible-lg-inline,
  .visible-lg-inline-block,
  .visible-md,
  .visible-md-block,
  .visible-md-inline,
  .visible-md-inline-block,
  .visible-sm,
  .visible-sm-block,
  .visible-sm-inline,
  .visible-sm-inline-block,
  .visible-xs,
  .visible-xs-block,
  .visible-xs-inline,
  .visible-xs-inline-block {
      display: none!important
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
  
  .affix {
      position: fixed
  }
  
  @-ms-viewport {
      width: device-width
  }
  
  @media (max-width:767px) {
      .visible-xs {
          display: block!important
      }
      table.visible-xs {
          display: table!important
      }
      tr.visible-xs {
          display: table-row!important
      }
      td.visible-xs,
      th.visible-xs {
          display: table-cell!important
      }
      .visible-xs-block {
          display: block!important
      }
      .visible-xs-inline {
          display: inline!important
      }
      .visible-xs-inline-block {
          display: inline-block!important
      }
  }
  
  @media (min-width:768px) and (max-width:991px) {
      .visible-sm {
          display: block!important
      }
      table.visible-sm {
          display: table!important
      }
      tr.visible-sm {
          display: table-row!important
      }
      td.visible-sm,
      th.visible-sm {
          display: table-cell!important
      }
      .visible-sm-block {
          display: block!important
      }
      .visible-sm-inline {
          display: inline!important
      }
      .visible-sm-inline-block {
          display: inline-block!important
      }
  }
  
  @media (min-width:992px) and (max-width:1199px) {
      .visible-md {
          display: block!important
      }
      table.visible-md {
          display: table!important
      }
      tr.visible-md {
          display: table-row!important
      }
      td.visible-md,
      th.visible-md {
          display: table-cell!important
      }
      .visible-md-block {
          display: block!important
      }
      .visible-md-inline {
          display: inline!important
      }
      .visible-md-inline-block {
          display: inline-block!important
      }
  }
  
  @media (min-width:1200px) {
      .visible-lg {
          display: block!important
      }
      table.visible-lg {
          display: table!important
      }
      tr.visible-lg {
          display: table-row!important
      }
      td.visible-lg,
      th.visible-lg {
          display: table-cell!important
      }
      .visible-lg-block {
          display: block!important
      }
      .visible-lg-inline {
          display: inline!important
      }
      .visible-lg-inline-block {
          display: inline-block!important
      }
      .hidden-lg {
          display: none!important
      }
  }
  
  @media (max-width:767px) {
      .hidden-xs {
          display: none!important
      }
  }
  
  @media (min-width:768px) and (max-width:991px) {
      .hidden-sm {
          display: none!important
      }
  }
  
  @media (min-width:992px) and (max-width:1199px) {
      .hidden-md {
          display: none!important
      }
  }
  
  .visible-print {
      display: none!important
  }
  
  @media print {
      .visible-print {
          display: block!important
      }
      table.visible-print {
          display: table!important
      }
      tr.visible-print {
          display: table-row!important
      }
      td.visible-print,
      th.visible-print {
          display: table-cell!important
      }
  }
  
  .visible-print-block {
      display: none!important
  }
  
  @media print {
      .visible-print-block {
          display: block!important
      }
  }
  
  .visible-print-inline {
      display: none!important
  }
  
  @media print {
      .visible-print-inline {
          display: inline!important
      }
  }
  
  .visible-print-inline-block {
      display: none!important
  }
  
  @media print {
      .visible-print-inline-block {
          display: inline-block!important
      }
      .hidden-print {
          display: none!important
      }
  }
  
  .bl1,
  .bl1 .logo,
  .rlt {
      position: relative
  }
  
  .bl1 .to-go:before,
  .clearfix:after {
      content: ""
  }
  
  .bl1 .to-go,
  .btn-b,
  .btn-b:hover,
  .btn:hover {
      cursor: pointer
  }
  
  ,
  юбьт .main_title,
  .bl1 .title,
  .bl2 .title,
  .btn {
      text-transform: uppercase
  }
  
  body {
      min-width: 320px;
      line-height: 1
  }
  
  .clearfix:after {
      display: table;
      clear: both
  }
  
  .modal-open .modal {
      overflow-x: hidden;
      overflow-y: auto
  }
  
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  li,
  ul {
      padding: 0;
      margin: 0
  }
  
  .container-fluid {
      max-width: 1920px;
      margin: 0 auto;
      overflow: hidden
  }
  
  .main_field {
      padding-top: 72px;
      padding-bottom: 72px
  }
  .main_title {
      margin-bottom: 32px;
      font-family: MuseoSansLight, sans-serif;
      font-size: 34px;
      color: #fff;
      text-align: center;
      line-height: 1.1
  }
  
  .main_title span {
      color: #ef4b2b
  }
  
  .br0 {
      height: 0
  }
  
  .btn-q,
  .btn-r {
      height: 41px!important;
      padding: 14px 24px 12px
  }
  
  .btn {
      border: none;
      display: table;
      background: #ef4c2a;
      font-family: MuseoSansMedium, sans-serif;
      font-size: 15px;
      color: #fff;
      line-height: 1;
      text-align: center;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -webkit-transition: all .3s ease-in;
      -moz-transition: all .3s ease-in;
      -o-transition: all .3s ease-in;
      -ms-transition: all .3s ease-in;
      transition: all .3s ease-in
  }
  
  .btn:hover {
      background: #272a2e;
      -webkit-transition: all .1s ease-in;
      -moz-transition: all .1s ease-in;
      -o-transition: all .1s ease-in;
      -ms-transition: all .1s ease-in;
      transition: all .1s ease-in
  }
  
  .btn-r {
      -moz-border-radius: 22px 0 22px 22px;
      -webkit-border-radius: 22px 0 22px 22px;
      -khtml-border-radius: 22px 0 22px 22px;
      border-radius: 22px 0 22px 22px;
      behavior: url(css/border-radius.htc)
  }
  
  .btn-b {
      background: #ef4c2a;
      border: 2px solid transparent;
      -webkit-transition: all .1s ease-in;
      -moz-transition: all .1s ease-in;
      -o-transition: all .1s ease-in;
      -ms-transition: all .1s ease-in;
      transition: all .1s ease-in
  }
  
  .btn-b:hover {
      background: 0 0;
      border: 2px solid #ef4c2a;
      color: #ef4c2a
  }
  
  .form,
  .form_catalog {
      margin-top: 50px;
      text-align: center
  }
  
  .label1,
  .label2,
  .label3 {
      margin-bottom: 11px;
      font-size: 16px;
      color: #fff;
      line-height: 1.13;
      font-family: MuseoSansLight, sans-serif
  }
  
  .bl1 .brandbar .logo-text,
  .bl1 .head-contact span {
      font-family: MuseoSansMedium, sans-serif;
      color: #fff
  }
  
  .email,
  .name,
  .phone {
      margin-bottom: 31px;
      height: 37px;
      width: 406px;
      padding-left: 8px
  }
  
  .error-input {
      border: 1px solid red!important
  }
  
  .bl1 .to-go,
  .bl1 .to-go .round {
      -khtml-border-radius: 50%;
      behavior: url(css/border-radius.htc)
  }
  
  .bl1 {
      background: url(img/bl1_bg.jpg) top center;
      z-index: 1
  }
  
  .bl1 .container .row>div {
      height: 833px;
      position: relative
  }
  
  .bl1 .brandbar {
      width: 450px;
      margin: 72px 0 64px
  }
  
  .bl1 .brandbar .logo {
      width: 270px;
      height: 66px;
      background: url(img/logo.png)
  }
  
  .bl1 .brandbar .logo-text {
      margin-top: 5px;
      font-size: 14px;
  }
  
  .bl1 .brandbar .logo-text span {
    display: table;
    font-size: 11px;
    text-transform: uppercase;
  }
  
  .bl1 .logo {
      z-index: 11
  }
  
  .bl1 .logo .light {
      width: 72px;
      height: 73px;
      background: url(img/bl1_light.png);
      position: absolute;
      top: -24px;
      left: 188px;
      -webkit-animation: light 5s infinite;
      -moz-animation: light 5s infinite;
      -o-animation: light 5s infinite;
      animation: light 5s infinite
  }
  
  @-webkit-keyframes light {
      40% {
          opacity: .4
      }
      80% {
          opacity: .8
      }
      60% {
          opacity: .6
      }
      90% {
          opacity: .9
      }
  }
  
  .bl1 .head-contact {
      display: table;
      position: absolute;
      top: 59px;
      right: 15px;
      z-index: 11
  }
  
  .bl1 .text,
  .bl1 .title {
      position: relative;
      z-index: 11
  }
  
  .bl1 .head-contact span {
      display: block;
      padding: 3px 0;
      font-size: 24px;
      text-align: right
  }
  
  .bl1 .btn {
      margin-top: 10px
  }
  
  .bl1 .title {
      margin: 84px 0 42px;
      font-family: MuseoSansBold, sans-serif;
      font-size: 60px;
      color: #fff;
      line-height: 1.1
  }
  
  .bl1 .text,
  .bl2 .title {
      line-height: 1.25;
      color: #fff
  }
  
  .bl1 .text {
      max-width: 480px;
      font-family: MuseoSansLight, sans-serif;
      font-size: 20px
  }
  
  .bl1 .img {
      width: 1661px;
      height: 830px;
      background: url(img/bl1_family.png);
      position: absolute;
      left: -50%;
      bottom: 0;
      margin-left: 130px
  }
  
  .bl1 .to-go {
      width: 56px;
      height: 56px;
      margin-top: 132px;
      position: relative;
      background: #b4b2af;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      border-radius: 50%
  }
  
  .bl1 .to-go:before {
      width: 35px;
      height: 22px;
      background: url(img/bl1-triangle.png);
      position: absolute;
      top: 20px;
      left: 11px;
      cursor: pointer;
      z-index: 43235
  }
  
  .bl1 .to-go .round {
      width: 6px;
      height: 6px;
      background: #fff;
      position: absolute;
      left: 25px;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      border-radius: 50%;
      z-index: 11
  }
  
  .bl1 .to-go .round:nth-child(1) {
      top: -24px
  }
  
  .bl1 .to-go .round:nth-child(2) {
      top: -48px
  }
  
  .bl1 .to-go .round:nth-child(3) {
      top: -72px
  }
  
  .bl2 {
      background: #1e2125
  }
  
  .bl2 .icon {
      width: 86px;
      height: 86px;
      margin: 0 auto
  }
  
  .bl2 .icon1 {
      background: url(img/bl2_icon1.png)
  }
  
  .bl2 .icon2 {
      background: url(img/bl2_icon2.png)
  }
  
  .bl2 .icon3 {
      background: url(img/bl2_icon3.png)
  }
  
  .bl2 .title {
      min-height: 50px;
      display: flex;
      justify-content: center;
      flex-direction: column;
      margin: 32px auto;
      font-family: MuseoSansMedium, sans-serif;
      font-size: 22px;
      text-align: center
  }
  
  .bl2 .text {
      margin: 0 auto;
      font-family: MuseoSansLight, sans-serif;
      font-size: 16px;
      color: #fff;
      line-height: 1.2;
      text-align: center;
      padding: 0 8%
  }
    .bl1 .img {
      z-index: 4
  }
  
  #modal-download a span {
      color: #00f;
      font-weight: 700
  }
 
  .bl3 .pos-light1{
  	position: relative;
  }
  .bl3 .light1{
  	position: absolute;
    background: url(img/bl3-light1.png);
    background-repeat: no-repeat;
    width: 182px;
    height: 295px;
    top: 710px;
    left: 34px;
    -webkit-animation: light 3s infinite;
    -moz-animation: light 3s infinite;
    -o-animation: light 3s infinite;
    animation: light 3s infinite;
    z-index: 44;
   }
    .bl3 .light2{
    position: absolute;
    background: url(img/bl3-light2.png);
    background-repeat: no-repeat;
    width: 638px;
    height: 380px;
    bottom: 367px;
    right: -99px;
    -webkit-animation: light 3s infinite;
    -moz-animation: light 3s infinite;
    -o-animation: light 3s infinite;
    animation: light 3s infinite;
    z-index: 44;
   }
   .bl1 .logo-invica1{
   	display: inline-block;
    background: url(img/bl1_invicta.png);
    width: 129px;
    height: 47px;
    margin-right: 5px;
   }
   .bl1 .logo-laudel{
   	display: inline-block;
    background: url(img/bl1_laudel.svg);
    width: 113px;
    height: 46px;
   }
    .bl11 .logo-invica1{
   	display: inline-block;
    background: url(img/bl1_invicta.png);
    width: 129px;
    height: 47px;
    margin-right: 5px;
   }
   .bl11 .logo-laudel{
   	display: inline-block;
    background: url(img/bl1_laudel.svg);
    width: 113px;
    height: 46px;
   }
   .bl11 .title span{
 	font-size: 38px;
    display: inline-block;
    vertical-align: middle;
    margin-top: -19px;
    margin-left: 9px;
    }
    .bl11 .title .c{
 	font-size: 29px;
    display: inline-block;
    vertical-align: middle;
    margin-top: -12px;
    margin-right: 9px;
    }
   .bl1 .brandbar .logo-text .text-logo { 
    letter-spacing: 7px;
    text-transform: uppercase;
    display: block;
    font-size: 10px;
    vertical-align: middle;
    margin-top: 7px;
    margin-right: 5px;
}
  @media (max-width:767px) {
      .bl1 .container .row>div {
          height: auto
      }
      .bl1 .text,
      .bl1 .title {
          text-align: center!important;
          margin-left: auto;
          margin-right: auto
      }
      .bl1 .title {
          font-size: 44px;
          margin-top: 37px;
          margin-bottom: 19px
      }
      .bl1 .text {
          font-size: 18px
      }
      .bl1 .head-contact {
          width: 100%;
          margin: 24px auto 0;
          position: relative;
          right: auto;
          top: auto;
          box-sizing: border-box;
          -moz-box-sizing: border-box;
          -webkit-box-sizing: border-box
      }
      .bl1 .head-contact span {
          display: table;
          padding: 7px 0;
          float: left
      }
      .bl1 .head-contact .btn {
          display: table;
          float: right;
          margin: 0
      }
      .bl1 .brandbar {
          margin: 34px auto 0
      }
      .bl1 .to-go {
          margin: 102px auto 72px
      }
      .bl1 .brandbar .logo { margin: 0 auto; }
	  .bl1 .brandbar .logo-text{ text-align: center}
  }
  
  @media (min-width:480px) and (max-width:767px) {
      .hidden-xs2 {
          display: none!important
      }
      .bl1 .brandbar .logo { margin: 0 auto; }
  }
  
  @media (max-width:480px) {
      .hidden-xs1 {
          display: none!important
      }
      .bl1 .brandbar {
          margin: 44px auto 0
      }
      .bl1 .title {
          font-size: 30px;
          margin-top: 48px;
          margin-bottom: 34px
      }
      .bl1 .text {
          font-size: 16px
      }
      .bl1 .brandbar .logo { margin: 0 auto; }
      /*.bl1 .logo-invica1 { display: none; }
      .bl1 .logo-laudel { display: none; }*/
      .bl1 .brandbar {width: 310px;}
      .bl1 .brandbar .logo-text .text-logo {
		    margin-top: 11px;
		    margin-right: 0; 
		}
	  .bl1 .brandbar .logo-text{ text-align: center} 
}
  @media (min-width:768px) and (max-width:991px) {
      .bl1 .container .row>div {
          height: auto
      }
      .bl1 .text,
      .bl1 .title {
          text-align: center!important;
          margin-left: auto;
          margin-right: auto;
      }
      .bl1 .to-go {
          margin: 102px auto 72px;
      }
  }   
   </style>
  
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Топки и печи-камины Invicta & Laudel</title>
		<meta name="description" content="Официальный представитель Invicta & Laudel в Украине. Доставка и установка «под ключ». Европейское качество по доступной цене. Для красоты и обогрева. Монтируется от 1 до 7 дней. Адаптируется под любой дизайн." />
		<meta name="keywords" content="Печи камины, камины топки, Invicta & Laudel, печи Invicta, монтаж печи, камины Invicta, Remilly Invicta, MAIRY Invicta, BRADFORD антрацит Invicta, CHAMANE 14 Invicta, Топка 900 AIR CONTROL Invicta, SELENIC 700 Invicta, GRANDE VISION 800 Laudel, PRISMATIC 850 Laudel"/>
		<meta http-equiv="content-language" content="ru">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon_32x32.png" />
         <link rel="apple-touch-icon" sizes="152x152" href="img/favicon_152x152.png"/> 
		<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
		<meta name="format-detection" content="telephone=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<script>!function(){function e(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function t(e){return window.localStorage&&localStorage.font_css_cache&&localStorage.font_css_cache_file===e}function n(){if(window.localStorage&&window.XMLHttpRequest)if(t(o))a(localStorage.font_css_cache);else{var n=new XMLHttpRequest;n.open("GET",o,!0),e(n,"load",function(){4===n.readyState&&(a(n.responseText),localStorage.font_css_cache=n.responseText,localStorage.font_css_cache_file=o)}),n.send()}else{var c=document.createElement("link");c.href=o,c.rel="stylesheet",c.type="text/css",document.getElementsByTagName("head")[0].appendChild(c),document.cookie="font_css_cache"}}function a(e){var t=document.createElement("style");t.innerHTML=e,document.getElementsByTagName("head")[0].appendChild(t)}var o="fonts.css";window.localStorage&&localStorage.font_css_cache||document.cookie.indexOf("font_css_cache")>-1?n():e(window,"load",n)}();</script>-->

        <link href="fonts.css" rel="stylesheet">      
	</head>
<body>


<div class="container-fluid bl1">
    <div class="row">
        <div class="container">
        <div class="light-big hidden-md hidden-sm hidden-xs"></div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="head-contact hidden-xs1">
                        <span class="hidden-xs2">044 338 23 50</span>
                        <span>094 906 73 50</span>
                        <div class="btn btn-r " data-toggle="modal" data-target="#myModal1">Заказать звонок</div>
                    </div>
                    <div class="brandbar">
                        <div class="logo"><div class="light"></div></div>
                        <div class="logo-text"><div class="logo-invica1"></div>
                        <div class="logo-laudel"></div><div class="text-logo">Топки и печи-камины</div> <br><span class="hidden-xs">Официальный представитель в Украине</span></div>
                    </div>
                    <div class="title">«Живое сердце» <span class="visible-lg visible-md visible-xs br0"><br></span>вашего дома</div>  
                    <div class="text">Выберите камин или свободностоящую<span class="visible-lg visible-md br0"><br></span>печь-камин и наслаждайтесь теплом и уютом живого огня в вашем доме уже через 3 дня</div>
                    <div class="to-go">
                        <span class="round"></span>
                        <span class="round"></span>
                        <span class="round"></span>
                        <div class="btn-down"></div>
                    </div>
                    <div class="img hidden-sm hidden-xs"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bl2 main_field">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="item">
                        <div class="icon icon1"></div>
                        <div class="title">И светят, и греют</div>
                        <div class="text">Наши печи-камины и камины-топки используются для красоты и обогрева дома</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="item">
                        <div class="icon icon2"></div>
                        <div class="title">Доставка и установка «под ключ»</div>
                        <div class="text">Выполняем монтаж любой сложности и подключение к отопительной системе собственными высокопрофессиональными бригадами</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="item">
                        <div class="icon icon3"></div>
                        <div class="title">Оптимальное  соотношение <span class="visible-lg br0"><br></span>цены и качества</div>
                        <div class="text">Камины французского бренда Invicta & Laudel — это экономичная цена при условии европейского качества и дизайна</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid bl3 main_field">   
    <div class="row">
        <div class="container pos-light1">
        	<div class="light1 hidden-md hidden-sm hidden-xs"></div>
        	<div class="light2 hidden-md hidden-sm hidden-xs"></div>
            <div class="row ">
                <div class="col-xs-12">
                    <div class="main-title"><span>Что выбрать:</span> камин или свободностоящую печь-камин?</div>
                    <div class="text-main">При выборе камина важно понимать, Вы ищете эффективное и недорогое отопление <span class="visible-lg br0"><br></span> или просто хотите дополнить интерьер чудесным и рациональным акцентом?</div>
                </div>           
                <div class="col-xs-12 rlt">            	
                    <div class="img1">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-7 col-sm-offset-6 ">
                        <div class="title">Печи-камины</div>
                        <div class="text mb12">Если вы давно мечтали о настоящем камине в доме, но у Вас не хватает свободного пространства, задумайтесь о приобретении печи-камина. Это отопительное оборудование — некий гибрид, взявший от «родителей» лучшее: от камина — изысканный дизайн, от печи — высокую тепловую отдачу и компактность.</div>
                        <div class="text"><span>Печи Invicta</span> уже давно завоевали свое признание в Европе. Они прогреют пространство всего за 1 час, а их современный дизайн впишется в любой интерьер.</div>                        
                        <div class="img1-xs visible-xs"></div> 
                        <div class="list-title">Особенности печи-камина:</div>
                        <ul>                            
                            <li class="icon1"><span>Свободно стоящий, компактный.</span> В случае переезда можно забрать с собой</li>
                            <li class="icon2">Монтируется в течение 1-2 дней</li>
                            <li class="icon3"><span>Быстрый прогрев помещения</span> (в течение 1 часа)</li>
                            <li class="icon4"><span>Экономный<br></span>(дешевле камина с монтажом  в 2-3 раза)</li>
                            <li class="icon5"><span>Современный дизайн.</span> Можно подобрать модель под любой интерьер</li>
                            <li class="icon6"><span>Безопасный.</span> Не требует постоянного присмотра.</li>
                            <li class="icon7"><span>Можно использовать для</span> подогрева напитков: чая, какао, глинтвейна</li>
                            <li class="icon8">Прост и удобен в эксплуатации</li>
                        </ul>
                        <div class="btn btn-r btn-b " data-toggle="modal" data-target="#myModal2">Скачать каталог печей-каминов</div>
                    </div>                    
                </div>               
                <div class="col-xs-12 rlt rlt-2"> 
                    <div class="img2"></div>                       
                    <div class="col-xs-12 col-sm-6 col-md-5">
                        <div class="title">Камины-топки</div>
                        <div class="text">Камин — центр общения семьи и «сердце дома». <span class="visible-lg br0"><br></span>А топка — главный элемент камина. Современные камины на основе топок Invicta работают не только в режиме «для красоты», но и в режиме отопления. Чтобы камин выполнял отопительную функцию по всему дому, можно использовать конвекционное отопление (обогрев воздухом) и централизованное (водяное) отопление.</div>
                        <div class="text"><span>Топки Invicta</span> функциональны, им можно подобрать любое «обрамление», вписать в любой интерьер.</div>
                        <div class="list-title">Особенности камина-топки:</div>
                        <ul>
                            <li class="icon9">Может полностью заменить центральный обогрев</li>
                            <li class="icon10">Дешевле отопления газом<span class="visible-lg br0"><br></span><span>примерно в 2 раза</span></li>
                            <li class="icon11">Монтируется в течение 2-7 дней</li>
                            <li class="icon12">Адаптируется под любой дизайн</li>
                            <li class="icon13">Большой обзор огня</li>
                            <li class="icon14"><span>Безопасный.</span> Не требует постоянного присмотра</li>
                            <li class="icon15">Прост и удобен в эксплуатации</li>
                        </ul>
                        <div class="btn btn-r btn-b  " data-toggle="modal" data-target="#myModal3">Скачать каталог  каминов-топок</div>
                    </div>                                      
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid bl4 main_field hidden-sm hidden-xs">
    <div class="row">
        <div class="container">
            <div class="row">
					<div class="title-big">Время задуматься о камине, если</div>
            </div>
        </div> 
        <div class="container">   
	            <div class="row">
		            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		            	<div class="item item1">
                            <div class="text-hover">Чем раньше Вы обратитесь к нам, тем больше маневров для выбора и проще установка. Наши специалисты помогут Вам на этапе проектирования спланировать систему отопления с учетом выбора камина и его месторасположения.
                            </div>
                            <div class="text">Вы на этапе проектирования дома</div>
		            		<div class="round">
                                <div class="icon icon1"></div>
                            </div>
                            <div class="btn btn-q btn-1  visible-xs">Подробнее</div>
		            	</div>
		            </div>
		            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		            	<div class="item item2">
                            <div class="text-hover">Мы поможем Вам максимально эффективно спланировать систему отопления на этапе строительства с учетом выбора камина и его месторасположения в вашем доме.
                            </div>
                            <div class="text">Ваш дом в процессе строительства </div>
                            <div class="round">
                                <div class="icon icon2"></div>
                            </div> 
                            <div class="btn btn-q btn-1 visible-xs ">Подробнее</div>
		            	</div>
		            </div>
		            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		            	<div class="item item3">
                            <div class="text-hover">Вы ранее построили дом, а теперь мечтаете о камине? Мы поможем Вам в выборе отопительного прибора, который идеально впишется в интерьер. Мы подберем для Вас 2 и более варианта монтажа, в зависимости от ваших потребностей и бюджета, и бережно отнесемся к вашему ремонту.
                            </div>
                            <div class="text">Ваш дом уже построен, но вы  хотите воплотить мечту о камине</div>
                            <div class="round">
                                <div class="icon icon3"></div>
                            </div>
                            <div class="btn btn-q btn-1 visible-xs">Подробнее</div>            
                        </div>
		            </div>
		            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		            	<div class="item item4">
                            <div class="text-hover">Квартира — не повод отказываться от роскоши живого огня, прирученного в камине. У наших специалистов более чем 10-летний опыт устройства камина в квартирах. В наших проектах учтены все нормативы и требования к постройке.
                            </div>
                            <div class="text">У Вас двухуровневая квартира или пентхауз</div>
                            <div class="round">
                                <div class="icon icon4"></div>
                            </div> 
                            <div class="btn btn-q btn-1 visible-xs">Подробнее</div>           
                        </div>
		            </div>
	              </div>
               </div>
	        </div>    
        </div>
<div class="container-fluid bl5 main_field">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="item">
                        
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="item">
                        <div class="title">У Вас много вопросов?</div>
                        <div class="text">Оставьте заявку и получите бесплатную консультацию по подбору камина или печи в Вашем случае</div>
                        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback4'); ga('send', 'event', 'submit', 'callback4');" >
                            <input type="hidden" class="topic" value="У Вас много вопросов?">
                            <div class="label1">Ваше имя</div>
                            <div>
                                <input type="text" class="name">
                            </div>
                            <div class="label2">Ваш телефон</div>
                            <div>
                                <input type="text" class="phone">
                            </div>
                            <button class="btn btn-r btn-new btn-1" type="submit">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bl6 main_field">
    <div class="row">
        <div class="container">
            <div class="row">
            	<div class="col-xs-12">
            		<div class="title">Самые популярные из более 150 моделей</div>
            	</div>
				<div class="col-xs-12">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Печи-камины</a></li>
					<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Топки</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">
							<div class="col-md-6 col-xs-12">
				                   <div class="col-md-8 col-xs-8"> 
				                    <div class="titlecam">Печь-камин<span class="descr-org"> Remilly Invicta</span></div>
				                      <ul>
			                            <li>Aртикул:<span class="descr-org"> 6013-84</span></li>
				                        <li>Тепловая мощность:<span class="descr-org"> 8 kW</span></li>
				                        <li>Размеры:<span class="descr-org"> H 830 x W 476 x D 375 mm</span></li>
				                        <li>Вес:<span class="descr-org"> 80 kg</span> </li>
				                        <li>Диаметр дымохода:<span class="descr-org"> 150 mm</span> </li>
				                        <div class="old-price"><span class="decor">13 230 грн.</span></div>
				                        <div class="price">11 600 грн.</div>
				                     </ul>
				                     <div class="text-sap" data-toggle="modal" data-target="#myModalprice1">технические характеристики</div>
				                     <div class="btn btn-q btn-1" data-toggle="modal" data-target="#myModal4">Расчитать стоимость монтажа</div>   
				                    </div>
                    				<div class="col-md-4 col-xs-4"><img src="img/bl6_img1.png" alt=""></div> 
                			</div> 
                			<div class="col-md-6 col-xs-12">
                  			   <div class="col-md-8 col-xs-8">
                        		 <div class="titlecam">Печь-камин<span class="descr-org"> MAIRY Invicta</span></div>
			                         <ul >
		                                <li>Aртикул:<span class="descr-org"> 6145-44</span></li>
			                            <li>Тепловая мощность:<span class="descr-org"> 10 kW</span></li>
			                            <li>Размеры:<span class="descr-org"> H 1098 x W 524 x D 426,5 mm</span> </li>
			                            <li>Вес:<span class="descr-org"> 107 kg</span> </li>
			                            <li>Диаметр дымохода:<span class="descr-org"> 150 mm</span> </li>
			                        </ul>
                        		<div class="old-price"><span class="decor">23 260 грн</span>.</div>
                        		<div class="price">22 375 грн.</div>
                        		<div class="text-sap" data-toggle="modal" data-target="#myModalprice2" >технические характеристики</div>
                        		<div class="btn btn-q btn-1" data-toggle="modal" data-target="#myModal4" >Расчитать стоимость монтажа</div> 
                  				</div>
                   				<div class="col-md-4 col-xs-4"><img src="img/bl6_img3.png" alt=""></div> 
                			</div>
			                <div class="col-md-6 col-xs-12">
			                  <div class="col-md-8 col-xs-8">
			                        <div class="titlecam">Печь-камин<span class="descr-org"> BRADFORD антрацит Invicta</span></div>
			                         <ul>
		                                <li>Aртикул:<span class="descr-org"> 6173-44</span></li> 
			                            <li>Тепловая мощность:<span class="descr-org"> 12 kW</span></li>
			                            <li>Размеры:<span class="descr-org"> H 690 x W 730 x D 613 mm</span></li>
			                            <li>Вес:<span class="descr-org"> 172 kg</span> </li>
			                            <li>Диаметр дымохода:<span class="descr-org"> 150 mm</span> </li>
			                        </ul>
			                        <div class="price">30 991 грн грн.</div>
			                        <div class="text-sap" data-toggle="modal" data-target="#myModalprice3">технические характеристики</div>
			                        <div class="btn btn-q btn-1" data-toggle="modal" data-target="#myModal4">Расчитать стоимость монтажа</div> 
			                    </div>  
			                    <div class="col-md-4 col-xs-4"><img src="img/bl6_img4.png" alt=""></div>    
			                </div>
			                <div class="col-md-6 col-xs-12">
			                       <div class="col-md-8 col-xs-8">
			                          <div class="titlecam">Печь-камин<span class="descr-org"> CHAMANE 14 Invicta</span> </div>
			                            <ul>
		                                    <li>Aртикул:<span class="descr-org"> 6156-44</span></li> 
			                                <li>Тепловая мощность:<span class="descr-org"> 14 kW</span></li>
			                                <li>Размеры:<span class="descr-org"> H 1200 x W 560 x D 578 mm</span></li>
			                                <li>Вес:<span class="descr-org"> 160 kg</span> </li>
			                                <li>Диаметр дымохода:<span class="descr-org"> 180 mm</span></li>
			                            </ul>
			                            <div class="price">30 885,00 грн.</div>
			                            <div class="text-sap" data-toggle="modal" data-target="#myModalprice4">технические характеристики</div>
			                            <div class="btn btn-q btn-1 " data-toggle="modal" data-target="#myModal4">Расчитать стоимость монтажа</div> 
			                       </div>
			                       <div class="col-md-4 col-xs-4"><img src="img/bl6_img2.png" alt=""></div> 
			                </div>
					</div>
					<div role="tabpanel" class="tab-pane" id="profile">
					         <div class="col-md-6 col-xs-12" >
				                   <div class="col-md-8 col-xs-8"> 
				                    <div class="titlecam">Топка<span class="descr-org"> Топка 900 AIR CONTROL Invicta </span></div>
				                      <ul>
			                            <li>Aртикул:<span class="descr-org"> 6490-43</span></li> 
				                        <li>Тепловая мощность:<span class="descr-org"> 10 kW </span></li>
				                        <li>Размеры:<span class="descr-org"> H 784 x W 913 x D 505 mm</span></li>
				                        <li>Вес:<span class="descr-org"> 233 kg</span> </li>
				                        <li>Диаметр дымохода:<span class="descr-org"> 200 mm</span> </li>
				                        <div class="old-price"><span class="decor">48 520 грн.</span></div>
				                        <div class="price">47 927,70 грн.</div>
				                     </ul>
				                     <div class="text-sap" data-toggle="modal" data-target="#myModalprice5">технические характеристики</div>
				                     <div class="btn btn-q btn-1" data-toggle="modal" data-target="#myModal4">Расчитать стоимость монтажа</div>   
				                    </div>
                    				<div class="col-md-4 col-xs-4"><img src="img/bl6_2bl_1_img1.png" alt=""></div> 
                			</div> 
                             <div class="col-md-6 col-xs-12">
                               <div class="col-md-8 col-xs-8">
                                 <div class="titlecam">Топка<span class="descr-org"> SELENIC 700 Invicta  с шибером</span></div>
                                     <ul >
                                        <li>Aртикул:<span class="descr-org"> 6769-05</span></li> 
                                        <li>Тепловая мощность:<span class="descr-org"> 14 kW</span></li>
                                        <li>Размеры:<span class="descr-org"> H 690 x W 692 x D 455 mm</span> </li>
                                        <li>Вес:<span class="descr-org"> 132 kg</span> </li>
                                        <li>Диаметр дымохода:<span class="descr-org"> 200 mm</span> </li>
                                    </ul>
                                <div class="old-price"><span class="decor">15 523грн</span>.</div>
                                <div class="price">13 095</div>
                                <div class="text-sap" data-toggle="modal" data-target="#myModalprice6">технические характеристики</div>
                                <div class="btn btn-q btn-1" data-toggle="modal" data-target="#myModal4">Расчитать стоимость монтажа</div> 
                                </div>
                                <div class="col-md-4 col-xs-4"><img src="img/bl6_2bl_1_img4.png" alt=""></div> 
                            </div>
                			 <div class="col-md-6 col-xs-12">
                                   <div class="col-md-8 col-xs-8">
                                      <div class="titlecam">Топка<span class="descr-org"> GRANDE VISION 800 Laudel</span> </div>
                                        <ul>
                                            <li>Aртикул:<span class="descr-org"> 6769-05</span></li>
                                            <li>Тепловая мощность:<span class="descr-org"> 14 kW</span></li>
                                            <li>Размеры:<span class="descr-org"> H 847.5 x W 795 x D 484 mm</span></li>
                                            <li>Вес:<span class="descr-org"> 162 kg</span> </li>
                                            <li>Диаметр дымохода:<span class="descr-org"> 200 mm</span></li>
                                        </ul>
                                        <div class="price">27 354 грн.</div>
                                        <div class="text-sap" data-toggle="modal" data-target="#myModalprice7">технические характеристики</div>
                                        <div class="btn btn-q btn-1" data-toggle="modal" data-target="#myModal4">Расчитать стоимость монтажа</div> 
                                   </div>
                                   <div class="col-md-4 col-xs-4">
                                   <img src="img/bl6_2bl_1_img2.png" alt=""></div>
                            </div>
			                 <div class="col-md-6 col-xs-12">
			                	<div class="col-md-8 col-xs-8">
			                        <div class="titlecam">Топка <br><span class="descr-org">PRISMATIC 850 Laudel</span> </div>
			                         <ul> 
		                                <li>Aртикул:<span class="descr-org"> 6385-50</span></li>
			                            <li>Тепловая мощность:<span class="descr-org"> 16 kW</span></li>
			                            <li>Размеры:<span class="descr-org"> H 940 x W 827 x D 514 mm</span></li>
			                            <li>Вес:<span class="descr-org"> 167 kg</span> </li>
			                            <li>Диаметр дымохода:<span class="descr-org"> 200 mm</span> </li>
			                        </ul>
			                        <div class="price">34 629 грн.</div>
			                        <div class="text-sap" data-toggle="modal" data-target="#myModalprice8">технические характеристики</div>
			                        <div class="btn btn-q btn-1" data-toggle="modal" data-target="#myModal4">Расчитать стоимость монтажа</div> 
			                    </div>  
			                    <div class="col-md-4 col-xs-4"><img src="img/bl6_2bl_1_img3.png" alt=""></div>  
			                </div>
					    </div>
					</div>
					</div>
				</div>
        	</div>
  	   </div>
	</div>
<div class="container-fluid bl7 main_field">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                	<div class="title">Получить каталог всех товаров</div>
                	<div class="text">Оставьте заявку, чтобы получить каталог всех товаров</div>
                		<form action="" class="form_catalog " method="POST" onsubmit="yaCounter41408764.reachGoal('callback7'); ga('send', 'event', 'submit', 'callback7');" >
                            <input type="hidden" class="topic" value=" Получить каталог товаров">
                            <div class="label1">Ваше имя</div>
                            <div>
                                <input type="text" class="name">
                            </div>
                            <div class="label2">Ваш телефон</div>
                            <div>
                                <input type="text" class="phone">
                            </div>
                            <div class="label3">Ваш e-mail</div>
                            <div>
                                <input type="text" class="email">
                            </div>
                            <button class="btn btn-r btn-new btn-1 btn-b donloader ">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>
                        </form>
                	
                </div>
                <div class="img  hidden-xs hidden-sm"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bl8 main_field  hidden-xs">
    <div class="row">
        <div class="container">
            <div class="row">
				 <div class="title">Каминная топка впишется в любой интерьер</div>
                 <div class="col-lg-9">
                 <div class="style-slider">
                    <div id="slider" class="flexslider">
                     <ul class="slides">
                        <li>
                          <img src="img/img1_interior_big.jpg" />
                        </li>
                        <li>
                          <img src="img/img2_interior_big.jpg" />
                        </li>
                        <li>
                          <img src="img/img3_interior_big.jpg" />
                        </li>
                        <li>
                          <img src="img/img4_interior_big.jpg" />
                        </li>
                        <li>
                          <img src="img/img5_interior_big.jpg" />
                        </li>
                        <li>
                          <img src="img/img6_interior_big.jpg" />
                        </li>
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
                </div>
            </div>
               <div class="style-corousel hidden-md hidden-sm hidden-xs">
                 <div id="carousel" class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="img/img1_interior_big.jpg" />
                    </li>
                    <li>
                      <img src="img/img2_interior_big.jpg" />
                    </li>
                    <li>
                      <img src="img/img3_interior_big.jpg" />
                    </li>
                    <li>
                      <img src="img/img4_interior_big.jpg" />
                    </li>
                    <li>
                        <img src="img/img5_interior_big.jpg" />
                    </li>
                    <li>
                        <img src="img/img6_interior_big.jpg" />
                    </li>
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
                </div>   
               </div>
                
             </div>
			<div class="col-lg-3 ">
                 <img  class="img hidden-md hidden-sm hidden-xs" src="img/bl8_img_invicta.jpg" alt=""> 
                 <div class="text">Для примера мы взяли модель <span>Onde 800 Invicta.</span> Но Вы можете выбрать любую из наших топок! </div>
            </div>	 

            </div>
        </div>
    </div>
</div>
<div class="container-fluid bl9 main_field hidden-xs">
  <div class="vertical-text hidden-sm hidden-xs">* Ваш подарок в случае заказа камина "под ключ"</div>
    <div class="row">
        <div class="container">
            <div class="row">
            		<div class="col-sm-6  hidden-sm hidden-xs">
                        <input type="hidden" class="topic" value="Дизайн-проект в подарок">
            			<div class="title-name">Дизайнер<br><span class= "br0">Ольга</span></div>
            			<div class="img"></div>
            		</div>
            		<div  class="col-md-6 col-xs-12">
            			<div class="title">Как будет выглядеть <span class= "br0"><br></span> камин в вашем <span class= "br0"><br></span> интерьере?</div>
	                	<div class="text">Оставьте заявку,<span class= "br0"><br></span>  чтобы получить дизайн-проект,<span class= "br0"><br></span>  стоимостью в <span>2 500 грн.</span>  в подарок! </div>
	               		 <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback8'); ga('send', 'event', 'submit', 'callback8');" >

	                            <div class="label1">Ваше имя</div>
	                            <div>
	                                <input type="text" class="name">
	                            </div>
	                            <div class="label2">Ваш телефон</div>
	                            <div>
	                                <input type="text" class="phone">
	                            </div>
	                            <div class="label3">Ваш e-mail</div>
	                            <div>
	                                <input type="text" class="email">
	                            </div>
	                            <button class="btn btn-r btn-new btn-1  ">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>
	                     </form>
            		</div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid bl10 main_field">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="title"> O нас  </div>
                <div class="col-sm-4">
                	<div class="item">
                		<div class="icon icon1"></div>
                		<div class="text">Официальный представитель французского бренда Invicta & Laudel в Украине</div>
                	</div>
                </div>
                <div class="col-sm-4 hidden-xs">
                	 <div class="item">
                	 	<div class="icon icon2"></div>
                		<div class="text">Собственные монтажные бригады с опытом работы каждого сотрудника не менее 10 лет</div>
                	</div>
                	
                </div>
                <div class="col-sm-4">
                	<div class="item">
                		<div class="icon icon3"></div>
                		<div class="text">Осуществляем полную поддержку заводской гарантии на камины (5 лет)</div>
                	</div>
                </div>
              <div class="clearfix visible-sm visible-md visible-lg"></div>
                <div class="col-sm-4">
                	<div class="item">
                		<div class="icon icon4"></div>
                		<div class="text">Бесплатно выедем на объект для расчета сметы</div>
                	</div>
                </div>
                <div class="col-sm-4 hidden-xs">
                	<div class="item">
                		<div class="icon icon5"></div>
                		<div class="text">Бережно относимся к вашему ремонту и всегда оставляем порядок после монтажа </div>
                	</div>
                	
                </div>
                <div class="col-sm-4 hidden-xs">
                	<div class="item">
                		<div class="icon icon6"></div>
                		<div class="text">Подбираем для Вас минимум 2 вариантов монтажа (в зависимости от материалов и вида отопления)</div>
                	</div>
                </div>
               <div class="clearfix visible-sm visible-md visible-lg"></div>
                <div class="col-sm-4 hidden-xs">
                	<div class="item">	
                		<div class="icon icon7"></div>
                		<div class="text">Выполняем доставку и монтаж по всей Украине</div>
                	</div>
                </div>
                <div class="col-sm-4">
                	<div class="item">
	                	<div class="icon icon8"></div>
	                	<div class="text">Гарантируем пожизненное обслуживание вашей печи или камина</div>
                	</div>
                </div>
                <div class="col-sm-4 hidden-xs">
                	<div class="item">
	                	<div class="icon icon9"></div>
	                	<div class="text">Соблюдаем анонимность. Не используем имена наших клиентов без их разрешения.</div>
                	</div>
                </div>
                <div class="col-sm-12">
                	<div class="btn btn-r btn-new btn-1" data-toggle="modal" data-target="#myModal5">УЗНАТЬ  БОЛЬШЕ</div>
                </div>
               
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bl11 main_field hidden-sm hidden-xs">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                	<div class="title">Почему мы работаем <span class="c">c</span><div class="logo-invica1"></div>
                        <div class="logo-laudel"></div><span> ?</span></div>
                	<div class="text">Мы работали с десятками европейских брендов, но предпочитаем продукцию Invicta & Laudel. И на то есть свои причины. Продукция Invicta & Laudel изготавливается во Франции с 1926 года. Собственное литье чугуна позволяет создавать оптимальные цены на рынке при соблюдении качества и дизайна высокого уровня. Современное производство чугунного литья сертифицировано по системе качества ISO 9002. Продукция Invicta & Laudel любима европейцами за ее практичность и экономию, а во Франции Laudel считается профессиональной «маркой для печников».</div>
                </div>
                <div class="col-md-7">
                	<div class="img">
                        <img src="img/bl11_img_video.jpg" alt="">
                        <img class="icon" src="" alt="" data-toggle="modal" data-target="#myModalvideo">   
                    </div>
                    <div id="myModalvideo" class="modal fade" role="dialog">
                        <div class="modal-dialog">
    
    <!-- Modal content-->
                    <div class="modal-content" id="video-content">
                    <div class="modal-header">
                     <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
                        <span id="frame-bl">
                        <iframe  id="youtube_player" class="youtube_player_iframe" width="560" height="315" src="https://www.youtube.com/embed/ZEONTKfpY1A" frameborder="0" allowfullscreen allowscriptaccess="always"  ></iframe>
                        </span>

                    </div>

                     </div>
                     </div>
                    </div>
                    <div class="text-video">
                        Камины и топки Invicta & Laudel - оптимальны по качеству и цене
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bl12 main_field hidden-xs hidden-sm">
    <div class="row">
        <div class="container">
            <div class="row">
            	<div class="title">НАШИ КАМИНЫ БУДУТ СЛУЖИТЬ<span class= "br0"><br></span> ДОЛГО И ВЕРНО ВАМ И ВАШИМ ПОКОЛЕНИЯМ   </div>
                 <div class="col-md-6 pad-text">

                	<div class="text-big icon icon1">Официальная<span class= "br0"><br></span> гарантия-5 ЛЕТ</div>
                	<div class="text">Камины и печи Invicta & Laudel выполнены из высококачественного чугуна и ПРАКТИЧЕСКИ ВЕЧНЫ. Единственное, что может произойти спустя некоторое время — износ керамических уплотняющих шнуров. Они стоят недорого и подлежат периодической замене.</div>
                	<div class="text-big icon icon2">Пожизненное<span class= "br0"><br></span> обслуживание</div>
                	<div class="text">Мы гарантируем Вам пожизненное обслуживание вашего камина и возможность замены деталей, даже по истечению срока гарантии.</div>
                </div>
                <div class="col-md-6">
                	<div class="img"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bl13 main_field ">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="title">Наши работы</div>
                <div class="text">Греют дома и сердца наших клиентов </div>
                <div class="col-sm-4 hidden-xs">
                	<div><img src="img/bl13_img1.jpg" alt=""></div>
                </div>
                <div class="col-sm-4 hidden-xs">
                	<div><img src="img/bl13_img2.jpg" alt=""></div>
                </div>
                <div class="col-sm-4 ">
                	<div><img src="img/bl13_img3.jpg" alt=""></div>
                </div>
                <div class="col-sm-4 ">
                	<div><img src="img/bl13_img4.jpg " alt=""></div>
                </div>
                <div class="col-sm-4 hidden-xs">
                	<div><img src="img/bl13_img5.jpg" alt=""></div>
                </div>
                <div class="col-sm-4 hidden-xs">
                	<div><img src="img/bl13_img6.jpg" alt=""></div>
                </div>
                <div class="col-sm-4 ">
                	<div><img src="img/bl13_img7.jpg" alt=""></div>
                </div>
                <div class="col-sm-4 hidden-xs">
                	<div><img src="img/bl13_img8.jpg" alt=""></div>
                </div>
                <div class="col-sm-4 hidden-xs">
                	<div><img src="img/bl13_img9.jpg" alt=""></div>
                </div>
                <div class="col-sm-12"><div class="btn btn-r btn-new btn-1" data-toggle="modal" data-target="#myModal6">Хочу такой камин! </div></div>
                
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bl15 main_field hidden-sm hidden-xs">
    <div class="row">
        <div class="container">
            <div class="row img-position">
            <img src="img/bl15_man.png" alt="">
            		<div  class="col-md-6 form-position ">
            			<div class="title">У Вас остались вопросы?</div>
	                	<div class="text">Оставьте заявку<span class= "br0"><br></span> и получите бесплатную консультацию<span class= "br0"><br></span> по подбору камина или печи в Вашем случае
	                  </div>
	               		 <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback11'); ga('send', 'event', 'submit', 'callback11');" >
                         <input type="hidden" class="topic" value="Получить консультацию">
	                            <div class="label1">Ваше имя</div>
	                            <div>
	                                <input type="text" class="name">
	                            </div>
	                            <div class="label2">Ваш телефон</div>
	                            <div>
	                                <input type="text" class="phone">
	                            </div>
	                            <button class="btn btn-r btn-new btn-1  ">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>
	                     </form>
            		</div>
            
                   
                
				   
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bl16 main_field hidden-xs">
    <div class="row">
        <div class="container">
            <div class="row">
            		<div class="col-sm-12">
            			<div class="title">Также мы предлагаем</div>
            		</div>
            		<div class="col-sm-4">
            			<div class="item">
            				<div class="text">Каменки:<span class= "br0"><br></span> дровяные и электрические</div>
            				<div> <img src="img/bl16_img1.jpg" alt=""></div>
            				<div class="btn btn-q btn-new btn-1" data-toggle="modal" data-target="#myModal7">Узнать стоимость</div>
            			</div>
            		</div>
            		<div class="col-sm-4">
            			<div class="item">
            				<div class="text">Барбекю</div>
            				<div><img src="img/bl16_img2.jpg" alt=""></div>
            				 <div class="btn btn-q btn-new btn-1" data-toggle="modal" data-target="#myModal7">Узнать стоимость</div>
            			</div>
            		</div>
            		<div class="col-sm-4">
            			<div class="item">
            				<div class="text">Электрокамины</div>
            				<div><img src="img/bl16_img3.jpg" alt=""></div>
            				<div class="btn btn-q btn-new btn-1" data-toggle="modal" data-target="#myModal7">Узнать стоимость</div>
            			</div>
            		</div>
                     <div class="clearfix visible-sm visible-md visible-lg"></div>
                    <div class="col-sm-4">
                        <div class="item">
                            <div class="text">Бани, хаммамы, сауны «под ключ» </div>
                            <div><img src="img/bl16_img5.jpg" alt=""></div>
                             <div class="btn btn-q btn-new btn-1" data-toggle="modal" data-target="#myModal7">Узнать стоимость</div>
                        </div>
                    </div>
            		<div class="col-sm-4">
            			<div class="item">
            				<div class="text">Оборудование для хаммама </div>
            				<div><img src="img/bl16_img4.jpg" alt=""></div>
            				 <div class="btn btn-q btn-new btn-1" data-toggle="modal" data-target="#myModal7">Узнать стоимость</div>
            			</div>
            		</div>
            	
            		<div class="col-sm-4">
            			<div class="item">
            				<div class="text">Аксессуары и средства по уходу за каминами</div>
            				<div><img src="img/bl16_img6.jpg" alt=""></div>
            				<div class="btn btn-q btn-new btn-1" data-toggle="modal" data-target="#myModal7">Узнать стоимость</div>
            			</div>
            		</div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bl17 main_field">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="title">Приглашаем Вас в наш шоурум!</div>
                <div class="style-slider hidden-xs">
                         <div id="slider" class="flexslider">
                      <ul class="slides">
                        <li>
                        <img src="img/bl17_img4_big.jpg" />
                          
                        </li>
                        <li>
                          <img src="img/bl17_img2_big.jpg" />
                        </li>
                        <li>
                          <img src="img/bl17_img3_big.jpg" />
                        </li>
                        <li>
                          <img  src="img/bl17_img1_big.jpg" />
                        </li>
                        <li>
                          <img src="img/bl17_img5_big.jpg" />
                        </li>
                        <li>
                          <img src="img/bl17_img6_big.jpg" />
                        </li>
                        <li>
                          <img src="img/bl17_img7_big.jpg" />
                        </li>
                        <!-- items mirrored twice, total of 12 -->
                      </ul>
                    </div>
                </div>
               
              <div class="col-md-12 hidden-xs hidden-sm hidden-md">
              <div class="style-corousel">
                  <div id="carousel" class="flexslider">
                  <ul class="slides">
                    <li>
                        <img  src="img/bl17_img4_big.jpg" />
                    </li>
                    <li>
                      <img  src="img/bl17_img2_big.jpg" />
                    </li>
                    <li>
                      <img  src="img/bl17_img3_big.jpg" />
                    </li>
                    <li>
                     <img  src="img/bl17_img1_big.jpg" />
                    </li>
                    <li>
                      <img  src="img/bl17_img5_big.jpg" />
                    </li>
                    <li>
                      <img  src="img/bl17_img6_big.jpg" />
                    </li>
                    <li>
                      <img  src="img/bl17_img7_big.jpg" />
                    </li>
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
                </div> 
              </div>
                
              </div>  
             
                <div class="col-xs-6">
                    <div class="text1">
                        Если вы не из Киева - запишитесь на встречу<span class= "br0"><br></span> с нашим представителем в Bашем городе
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="text2">
                       Адрес шоурума в г. Киев:<span class= "br0"><br></span> ул. Верхний Вал, 52<span class= "br0"><br></span>+38 044 338 23 50<span class= "br0"><br></span>+38 094 906 73 50 
                </div>
            </div>
            <div class=" col-xs-12 town">Выберите ваш город</div>
            <div class=" col-xs-12 sel">
                <select name="" id="select">
                    <option value="">Киев</option>
                    <option value="">Белая Церковь</option>
                    <option value="">Житомир</option>
                    <option value="">Ровно</option>
                    <option value="">Тернополь</option>
                    <option value="">Львов</option>
                    <option value="">Коломыя</option>
                    <option value="">Ужгород</option>
                    <option value="">Чернигов</option>
                    <option value="">Черновцы</option>
                    <option value="">Одесса</option>
                    <option value="">Херсон</option>
                    <option value="">Харьков</option>
                    <option value="">Днепр</option>
                    <option value="">Кривой Рог</option>
                    <option value="">Краматорск</option>
                    <option value="">Винница</option>
                    <option value="">Луцк</option>
                    <option value="">Хмельницкий</option>
                    <option value="">Ивано-Франковск</option>
                    <option value="">Запорожье</option>
                </select>
                <div class="btn btn-r btn-new btn-1 btn-b" data-toggle="modal" data-target="#myModal8">ДОГОВОРИТЬСЯ О ВСТРЕЧЕ</div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid bl18 main_field hidden-xs">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                	<div class="title">Вы дизайнер?<span class= "br0"><br></span> Узнайте об условиях<span class= "br0"><br></span> сотрудничества!</div>
                	<div class="text">Предлагаем Вам полное техническое<span class= "br0"><br></span> сопровождение вашего проекта.<span class= "br0"><br></span> Обеспечим Вас чертежами и проконсультируем.</div>
                </div>
                <div class="col-sm-6">
                	<div class="text1">Оставить заявку, чтобы получить<span class= "br0"><br></span> предложение по сотрудничеству</div>
                	<form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback14'); ga('send', 'event', 'submit', 'callback14');" >
                    <input type="hidden" class="topic" value=" Дизайнер: обсудить партнерство">
                        <div class="label1">Ваше имя</div>
                         <div>
                           <input type="text" class="name">
                            </div>
                           <div class="label2">Ваш телефон</div>
                            <div>
                                <input type="text" class="phone">
                            </div>
                           <div class="label3">Ваш e-mail</div>
                           <div>
                              <input type="text" class="email">
                           </div>
                           <button class="btn btn-r btn-new btn-1 btn-b ">Обсудить партерство</button>
                       </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bl19 main_field hidden-xs">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="link">
                        <div class="title">Контактная информация</div>
                        <div class="text">Адрес: ул. Верхний Вал, 52, Киев, Украина</div>
                        <div class="email-cont">E-mail: info@spa-kamin.ua</div>
                        <div class="phone-cont">Тел. :
                              +38 044 338 23 50<span class= "br0"><br></span>
                              <span class="phone1"> +38 094 906 73 50   </span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bl20 main_field">
         <div id="map"></div>
</div>
<!-- Modal 1 -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
        <h4 class="modal-title">Заказать звонок</h4>
      </div>
    <div class="modal-body">
      <div class="modal-text">Оставьте заявку и наши менеджеры ответят на все Ваши вопросы в течениe 15-ти минут</div>
        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback1'); ga('send', 'event', 'submit', 'callback1');" >
            <input type="hidden" class="topic" value="Заказать звонок">
            <div>
                <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
            </div>
            <div>
                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
            </div>
            <button class="btn btn-q btn-new btn-1  btn-modal">Перезвоните мне</button>
        </form>
      </div>
  </div>
</div>
</div>
<!-- Modal 2 -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
        <h4 class="modal-title">Скачать каталог печей-каминов</h4>
      </div>
    <div class="modal-body">
      <div class="modal-text">Оставьте контакты, чтобы получить доступ к каталогу печей-каминов</div>
        <form action="" class="form_catalog " method="POST" onsubmit="yaCounter41408764.reachGoal('callback2'); ga('send', 'event', 'submit', 'callback2');" >
            <input type="hidden" class="topic" value="Скачать каталог печей-каминов">
            <div>
                <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
            </div>
            <div>
                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
            </div>
            <button class="btn btn-q btn-new btn-1  btn-modal formbtn donloader ">Скачать каталог</button>
        </form>
      </div>
  </div>
</div>
</div>
<!-- Modal 3 -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
        <h4 class="modal-title">Скачать каталог каминов-топок</h4>
      </div>
    <div class="modal-body">
      <div class="modal-text">Оставьте контакты, чтобы получить доступ к каталогу каминов-топок</div>
        <form action="" class="form_catalog " method="POST" onsubmit="yaCounter41408764.reachGoal('callback3'); ga('send', 'event', 'submit', 'callback3');" >
        <input type="hidden" class="topic" value="Скачать каталог каминов-топок">
            <div>
                <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
            </div>
            <div>
                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
            </div>
            <button class="btn btn-q btn-new btn-1  btn-modal formbtn  donloader">Скачать каталог</button>
        </form>
      </div>
  </div>
</div>
</div>
<!-- Modal 4 -->
<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
        <h4 class="modal-title">Рассчитать стоимость монтажа</h4>
      </div>
    <div class="modal-body">
      <div class="modal-text">Оставьте заявку, мы рассчитаем для Вас стоимость монтажа в 2-х вариантах</div>
        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback6'); ga('send', 'event', 'submit', 'callback6');" >
        <input type="hidden" class="topic" value="Засчитать стоимость">
            <div>
                <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
            </div>
            <div>
                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
            </div>
            <div>
                <input type="text" data-required='required'  class="email email-modal" placeholder="Ваш e-mail">
            </div>
            <button class="btn btn-q btn-new btn-1  btn-modal formbtn ">Рассчитать стоимость</button>
        </form>
      </div>
  </div>
</div>
</div>
<!-- Modal 5 -->
<div id="myModal5" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
        <h4 class="modal-title">Узнать больше о нас</h4>
      </div>
    <div class="modal-body">
      <div class="modal-text">Оставьте контакты, наши менеджеры свяжутся с Вами в течении 15 минут</div>
        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback9'); ga('send', 'event', 'submit', 'callback9');" >
            <input type="hidden" class="topic" value="Узнать больше">
            <div>
                <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
            </div>
            <div>
                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
            </div>
            <button class="btn btn-q btn-new btn-1  btn-modal formbtn ">Перезвоните мне</button>
        </form>
      </div>
  </div>
</div>
</div>
<!-- Modal 6 -->
<div id="myModal6" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
        <h4 class="modal-title">Хочу такой камин</h4>
      </div>
    <div class="modal-body">
      <div class="modal-text">Оставьте контакты, наши менеджеры свяжутся с Вами в течении 15 минут</div>
        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback10'); ga('send', 'event', 'submit', 'callback10');" >
        <input type="hidden" class="topic" value="Хочу такой камин">
            <div>
                <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
            </div>
            <div>
                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
            </div>
            <button class="btn btn-q btn-new btn-1  btn-modal formbtn ">Перезвоните мне</button>
        </form>
      </div>
  </div>
</div>
</div>
<!-- Modal 7 -->
<div id="myModal7" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
        <h4 class="modal-title">Оставьте заявку, чтобы узнать стоимость</h4>
      </div>
    <div class="modal-body">
      <div class="modal-text">Оставьте контакты, наши менеджеры свяжутся с Вами в течении 15 минут</div>
        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback12'); ga('send', 'event', 'submit', 'callback12');" >
        <input type="hidden" class="topic" value=" Узнать стоимость доп.товаров">
            <div>
                <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
            </div>
            <div>
                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
            </div>
            <button class="btn btn-q btn-new btn-1  btn-modal formbtn ">Перезвоните мне</button>
        </form>
      </div>
  </div>
</div>
</div>
<!-- Modal 8 -->
<div id="myModal8" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
        <h4 class="modal-title">Договориться о встрече</h4>
      </div>
    <div class="modal-body">
      <div class="modal-text">Оставьте контакты, наши менеджеры свяжутся с Вами в течении 15 минут</div>
        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback13'); ga('send', 'event', 'submit', 'callback13');" >
            <input type="hidden" class="topic" value="Договорится о встречи">
            <div>
                <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
            </div>
            <div>
                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
            </div>
            <button class="btn btn-q btn-new btn-1  btn-modal formbtn ">Перезвоните мне</button>
        </form>
      </div>
  </div>
</div>
</div>

<!-- Modal price  -->
<div id="myModalprice1" class="modal fade" role="dialog">
  <div class="modal-dialog">
        
    <!-- Modal content-->
    <div class="modal-content modal-content-bg ">

         <div class="modal-name hidden-md hidden-sm hidden-xs">
             <div class="background1"></div>
            <div class="title">Печь-камин Remilly Invicta</div>
             <div class="text">Печь-камин Invicta Remilly – мощная и эффективная печь, предназначенная для отопления больших помещений. Эта модель обладает креативным дизайном, позволяющим камину легко вписываться в любой интерьер. Печь может использоваться как в режиме длительного горения, так и при максимальной мощности, в качестве топлива служат дрова.
            Chatel отличается не большой высотой и при этом вместительными размерами топочной камеры, что позволяет печи проявлять значительную мощность даже при работе в номинальном режиме. Модель полностью выполнена из качественного чугуна собственного производства, что гарантирует ей надежную эксплуатацию и долгий срок службы. </div>
         </div>
        <div class="modal-description hidden-md hidden-sm hidden-xs">
            <div class="title"></div>
           <ul>
            <li class="title">Характеристики:</li>
            <li>Aртикул:<span> 6013-84</span></li>
            <li>Тепловая мощность: <span>8 kW</span></li>
            <li>КПД: <span>77%</span> </li>
            <li>Система вторичного дожига </li>
            <li>Длительного горения </li>
            <li>Система очистки стекла</li>
            <li>Диаметр дымохода: <span>150 mm </span> </li>
            <li>Подключение дымохода: <span>верхнее</span>  </li>

            <li class="marg-li">Размеры : <br><span>H 830 x W 476 x D 375 mm</span></li>
            <li>Вес: <span>80 kg</span>  </li>
            <li>Площадь отапливаемого помещения : <span>42 to 128 m2</span>  </li>
            <li>Цвет: <span>антрацит</span> </li>
            <li>Гарантия:<span> 5 лет</span></li>
           </ul>
        </div>
        <div class="modal-form">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
            <div class="form-content">
                <div class="title">Рассчитать стоимость монтажа в 2-х вариантах </div>
                <div class="text">Оставьте заявку, чтобы получить рассчет  стоимости монтажа в 2 вариантах и получить подробную консультацию</div> 
                        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback5'); ga('send', 'event', 'submit', 'callback5');">
                        <input type="hidden" class="topic" value="Технические характеристики Печь-камин Remilly Invicta">
                         <div>
                           <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
                            </div>
                            <div>
                                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
                            </div>
                           <div>
                              <input type="text" data-required='required'  class="email email-modal" placeholder="Ваш e-mail">
                           </div>
                           <button class="btn btn-q btn-new btn-1  btn-modal formbtn ">РАССЧИТАТЬ СТОИМОСТЬ МOНТАЖА</button>
                       </form>
                      <div class="gift">При заказе печи,<br> набор для чистки камина - <span>В ПОДАРОК!</span></div> 
                     <img src="img/modal-form-icon.png" alt="">  
        </div>
     </div>
   </div>
</div>
</div>
<!-- Modal price2 -->
<div id="myModalprice2" class="modal fade" role="dialog">
  <div class="modal-dialog">
        
    <!-- Modal content-->
    <div class="modal-content modal-content-bg ">

         <div class="modal-name hidden-md hidden-sm hidden-xs">
             <div class="background1"></div>
            <div class="title">Печь-камин MAIRY Invicta</div>
             <div class="text">Печь-камин Invicta Mairy – мощная и эффективная печь, предназначенная для отопления больших помещений. Эта модель французского производства обладает креативным дизайном, позволяющим камину легко вписываться в любой интерьер. Печь может использоваться как в режиме длительного горения, так и при максимальной мощности, в качестве топлива служат дрова.
            Mairy отличается не большой высотой и при этом вместительными размерами топочной камеры, что позволяет печи проявлять значительную мощность даже при работе в номинальном режиме. Модель полностью выполнена из качественного чугуна собственного производства, что гарантирует ей надежную эксплуатацию и долгий срок службы. Система вторичного дожига обеспечивает более полное и эффективное сжигание топлива, повышая КПД изделия и позволяя экономить дрова.
            </div>
         </div>
        <div class="modal-description hidden-md hidden-sm hidden-xs">
            <div class="title"></div>
           <ul>
            <li class="title">Характеристики:</li>
            <li>Aртикул:<span> 6145-44</span></li>
            <li>Тепловая мощность: <span>10 kW</span> </li>
            <li>КПД: <span>76%</span></li>
            <li>Система вторичного дожига </li>
            <li>Длительного горения </li>
            <li>Диаметр дымохода: <span>150 mm </span> </li>
            <li>Подключение дымохода: <span>верхнее</span>  </li>

            <li class="marg-li">Размеры:<br><span>H 1098 x W 524 x D 426,5 mm</span></li>
            <li>Вес: <span>107 kg</span>  </li>
            <li>Площадь отапливаемого помещения: <span>52 to 160 m2</span>  </li>
            <li>Цвет: <span>антрацит</span> </li>
            <li>Гарантия:<span> 5 лет</span></li>
           </ul>
        </div>
        <div class="modal-form">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
            <div class="form-content">
                <div class="title">Рассчитать стоимость монтажа в 2-х вариантах </div>
                <div class="text">Оставьте заявку, чтобы получить рассчет  стоимости монтажа в 2 вариантах и получить подробную консультацию</div> 
                        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback5'); ga('send', 'event', 'submit', 'callback5');">
                        <input type="hidden" class="topic" value="Технические характеристики Печь-камин MAIRY Invicta">
                         <div>
                           <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
                            </div>
                            <div>
                                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
                            </div>
                           <div>
                              <input type="text" data-required='required'  class="email email-modal" placeholder="Ваш e-mail">
                           </div>
                           <button class="btn btn-q btn-new btn-1  btn-modal formbtn ">РАССЧИТАТЬ СТОИМОСТЬ МOНТАЖА</button>
                       </form>
                      <div class="gift">При заказе печи,<br> набор для чистки камина - <span>В ПОДАРОК!</span></div>
                     <img src="img/modal-form-icon.png" alt="">  
            </div>
            

        </div>
  </div>
</div>
</div>
<!-- Modal price3 -->
<div id="myModalprice3" class="modal fade" role="dialog">
  <div class="modal-dialog">
        
    <!-- Modal content-->
    <div class="modal-content modal-content-bg ">

         <div class="modal-name hidden-md hidden-sm hidden-xs">
             <div class="background1"></div>
            <div class="title">Печь-камин BRADFORD антрацит Invicta</div>
             <div class="text">Печь-камин Invicta Bradford – элегантный стильный камин, способный своим безупречным внешним видом украсить любой самый современный интерьер, а также эффективно обогреть загородный дом или дачу и длительное время удерживать тепло. Двустенная конструкция печи с воздушным зазором между стенками позволяет максимально быстро обогреть помещение, в котором будет стоять печь. Bradford выполнен из прочного литого чугуна собственного производства, обеспечивающего надежность и долговечность изделия. Для защиты от повреждений и сохранения прекрасного внешнего вида в процессе длительной эксплуатации корпус модели покрыт жаропрочной краской цвета антрацит
            </div>
         </div>
        <div class="modal-description hidden-md hidden-sm hidden-xs">
            <div class="title"></div>
           <ul>
            <li class="title">Характеристики:</li>
            <li>Aртикул:<span> 6145-44</span></li>
            <li>Тепловая мощность: <span>12 kW</span> </li>
            <li>КПД: <span>75.2%</span></li>
            <li>Система очистки стекла</li>
            <li>Длительного горения </li>
            <li>Диаметр дымохода: <span>150 mm </span> </li>
            <li>Подключение дымохода: <span>верхнее</span>  </li>

            <li class="marg-li">Размеры: <br><span>H 690 x W 730 x D 613 mm</span></li>
            <li>Вес: <span>172 kg</span>  </li>
            <li>Площадь отапливаемого помещения: <span>64 to 192 m2</span>  </li>
            <li>Гарантия:<span> 5 лет</span></li>
           </ul>
        </div>
        <div class="modal-form">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
            <div class="form-content">
                <div class="title">Рассчитать стоимость монтажа в 2-х вариантах </div>
                <div class="text">Оставьте заявку, чтобы получить рассчет  стоимости монтажа в 2 вариантах и получить подробную консультацию</div> 
                        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback5'); ga('send', 'event', 'submit', 'callback5');">
                         <input type="hidden" class="topic" value="Технические характеристики Печь-камин BRADFORD антрацит Invicta">
                         <div>
                           <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
                            </div>
                            <div>
                                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
                            </div>
                           <div>
                              <input type="text" data-required='required'  class="email email-modal" placeholder="Ваш e-mail">
                           </div>
                           <button class="btn btn-q btn-new btn-1  btn-modal formbtn ">РАССЧИТАТЬ СТОИМОСТЬ МOНТАЖА</button>
                       </form>
                      <div class="gift">При заказе печи,<br> набор для чистки камина - <span>В ПОДАРОК!</span></div>
                     <img src="img/modal-form-icon.png" alt="">  
            </div>
            

        </div>
  </div>
</div>
</div>
<!-- Modal price4 -->
<div id="myModalprice4" class="modal fade" role="dialog">
  <div class="modal-dialog">
        
    <!-- Modal content-->
    <div class="modal-content modal-content-bg ">

         <div class="modal-name hidden-md hidden-sm hidden-xs">
             <div class="background1"></div>
            <div class="title">Печь-камин CHAMANE 14 Invicta</div>
             <div class="text">Печь-камин Invicta Chamane – отменно справляется и со своей основной функцией – эффективно и быстро способна обогреть загородный дом, дачу и длительное время удерживать тепло.
            </div>
         </div>
        <div class="modal-description hidden-md hidden-sm hidden-xs">
            <div class="title"></div>
           <ul>
            <li class="title">Характеристики:</li>
            <li>Aртикул:<span> 6156-44</span></li>
            <li>Тепловая мощность: <span>14 kW</span> </li>
            <li>КПД: <span>78.7%</span></li>
            <li>Камера двойного сгорания </li>
            <li>Диаметр дымохода: <span>180 mm </span> </li>
            <li>Подключение дымохода: <span>верхнее</span>  </li>

            <li class="marg-li">Размеры: <br><span>H 1200 x W 560 x D 578 mm</span></li>
            <li>Вес: <span>160 kg</span>  </li>
            <li>Площадь отапливаемого помещения: <span>76 to 224 m2</span>  </li>
            <li>Гарантия:<span> 5 лет</span></li>
           </ul>
        </div>
        <div class="modal-form">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
            <div class="form-content">
                <div class="title">Рассчитать стоимость монтажа в 2-х вариантах </div>
                <div class="text">Оставьте заявку, чтобы получить рассчет  стоимости монтажа в 2 вариантах и получить подробную консультацию</div> 
                        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback5'); ga('send', 'event', 'submit', 'callback5');">
                         <input type="hidden" class="topic" value="Технические характеристики Печь-камин CHAMANE 14 Invicta">
                         <div>
                           <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
                            </div>
                            <div>
                                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
                            </div>
                           <div>
                              <input type="text" data-required='required'  class="email email-modal" placeholder="Ваш e-mail">
                           </div>
                           <button class="btn btn-q btn-new btn-1  btn-modal formbtn ">РАССЧИТАТЬ СТОИМОСТЬ МOНТАЖА</button>
                       </form>
                      <div class="gift">При заказе печи,<br> набор для чистки камина - <span>В ПОДАРОК!</span></div> 
                     <img src="img/modal-form-icon.png" alt="">  
            </div>
        </div>
  </div>
</div>
</div>

<!-- Modal price5 tab2  -->
<div id="myModalprice5" class="modal fade" role="dialog">
  <div class="modal-dialog">
        
    <!-- Modal content-->
    <div class="modal-content modal-content-bg ">

         <div class="modal-name hidden-md hidden-sm hidden-xs">
             <div class="background1"></div>
            <div class="title">Топка 900 AIR CONTROL Invicta</div>
             <div class="text">Топка 900 AIR CONTROL Invicta 
                Высокотехнологичная французская чугунная топка выполненная в современном стиле, имеет тонированную по контуру стекла дверь, оборудована системой очистки стекла. Полная герметичность топки, система вторичного дожига и возможность подвода воздуха для горения из-вне позволяют точно настроить процесс горения в топке. Топочная часть топки 900 Air Control футерована вермикулитом, что повышает ее надежность, а также улучшает внешний вид топки.  

            </div>
         </div>
        <div class="modal-description hidden-md hidden-sm hidden-xs">
            <div class="title"></div>
           <ul>
            <li class="title">Характеристики:</li>
            <li>Aртикул:<span> 6490-43</span></li> 
            <li>Тепловая мощность: <span>10 kW</span> </li>
            <li>КПД: <span>76%</span></li>
            <li>Подача воздуха для горения извне <span>100 mm</span></li>
            <li>Диаметр дымохода: <span>200 mm </span> </li>
            
            <li class="marg-li">Размеры : <br><span>H  784 x W  913 x D 505 mm</span></li>
            <li>Вес: <span>233 kg</span>  </li>
            <li>Гарантия:<span>5 лет</span></li>
            <li>Опции: <span>подставка</span></li>
           </ul>
        </div>
        <div class="modal-form">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
            <div class="form-content">
                <div class="title">Рассчитать стоимость монтажа в 2-х вариантах </div>
                <div class="text">Оставьте заявку, чтобы получить рассчет  стоимости монтажа в 2 вариантах и получить подробную консультацию</div> 
                        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback5'); ga('send', 'event', 'submit', 'callback5');">
                        <input type="hidden" class="topic" value="Технические характеристики Топка 900 AIR CONTROL Invicta">
                         <div>
                           <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
                            </div>
                            <div>
                                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
                            </div>
                           <div>
                              <input type="text" data-required='required'  class="email email-modal" placeholder="Ваш e-mail">
                           </div>
                           <button class="btn btn-q btn-new btn-1  btn-modal formbtn ">РАССЧИТАТЬ СТОИМОСТЬ МOНТАЖА</button>
                       </form>
                      <div class="gift">При заказе печи,<br> набор для чистки камина - <span>В ПОДАРОК!</span></div> 
                     <img src="img/modal-form-icon.png" alt="">  
            </div>
        </div>
  </div>
</div>
</div>
<!-- Modal price6 tab2  -->
<div id="myModalprice6" class="modal fade" role="dialog">
  <div class="modal-dialog">
        
    <!-- Modal content-->
    <div class="modal-content modal-content-bg ">

         <div class="modal-name hidden-md hidden-sm hidden-xs">
             <div class="background1"></div>
            <div class="title">SELENIC 700 Invicta</div>
             <div class="text">SELENIC 700 Invicta с шибером
                Французская чугунная топка с прямым стеклом, боковым открытием дверцы и выдвижным зольным ящиком. Оснащена системой очистки стекла и шиберной заслонкой.  

            </div>
         </div>
        <div class="modal-description hidden-md hidden-sm hidden-xs">
            <div class="title"></div>
           <ul>
            <li class="title">Характеристики:</li>
            <li>Aртикул:<span> 6769-05</span></li> 
            <li>Тепловая мощность: <span>14 kW</span> </li>
            <li>КПД: <span>73,4%</span></li>
            <li>Длительного горения</li>
            <li>Диаметр дымохода: <span>200 mm </span> </li>
            

            <li class="marg-li">Размеры : <br><span>H 690 x W 692 x D 455 mm</span></li>
            <li>Вес: <span>132 kg</span>  </li>
            <li>Шиберная заслонка</li>
            <li>Гарантия:<span> 5 лет</span></li>
           </ul>
        </div>
        <div class="modal-form">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
            <div class="form-content">
                <div class="title">Рассчитать стоимость монтажа в 2-х вариантах </div>
                <div class="text">Оставьте заявку, чтобы получить рассчет  стоимости монтажа в 2 вариантах и получить подробную консультацию</div> 
                        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback5'); ga('send', 'event', 'submit', 'callback5');">
                        <input type="hidden" class="topic" value="Технические характеристики SELENIC 700 Invicta с шибером">
                         <div>
                           <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
                            </div>
                            <div>
                                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
                            </div>
                           <div>
                              <input type="text" data-required='required'  class="email email-modal" placeholder="Ваш e-mail">
                           </div>
                           <button class="btn btn-q btn-new btn-1  btn-modal formbtn ">РАССЧИТАТЬ СТОИМОСТЬ МOНТАЖА</button>
                       </form>
                      <div class="gift">При заказе печи,<br> набор для чистки камина - <span>В ПОДАРОК!</span></div> 
                     <img src="img/modal-form-icon.png" alt="">  
            </div>
        </div>
  </div>
</div>
</div>
<!-- Modal price7 tab2  -->
<div id="myModalprice7" class="modal fade" role="dialog">
  <div class="modal-dialog">
        
    <!-- Modal content-->
    <div class="modal-content modal-content-bg ">

         <div class="modal-name hidden-md hidden-sm hidden-xs">
             <div class="background1"></div>
            <div class="title">GRANDE VISION 800 Laudel</div>
             <div class="text">Французская чугунная топка с прямым стеклом, двойной задней стенкой, оснащена функцией вторичной подачи воздуха для горения и системой очистки стекла

            </div>
         </div>
        <div class="modal-description hidden-md hidden-sm hidden-xs">
            <div class="title"></div>
           <ul>
            <li class="title">Характеристики:</li>
            <li>Aртикул:<span> 6769-05</span></li>
            <li>Тепловая мощность: <span>14 kW</span> </li>
            <li>КПД: <span>75%</span></li>
            <li>Длительного горения</li>
            <li>Система очистки стекла</li>
            <li>Вторичный дожиг</li>
            <li>Диаметр дымохода: <span>200 mm </span> </li>
            

            <li class="marg-li">Размеры: <br><span>H 847.5 x W 795 x D 484 mm</span></li>
            <li>Вес: <span>162 kg</span>  </li>
            <li>Гарантия:<span> 5 лет</span></li>
           </ul>
        </div>
        <div class="modal-form">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
            <div class="form-content">
                <div class="title">Рассчитать стоимость монтажа в 2-х вариантах </div>
                <div class="text">Оставьте заявку, чтобы получить рассчет  стоимости монтажа в 2 вариантах и получить подробную консультацию</div> 
                        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback5'); ga('send', 'event', 'submit', 'callback5');">
                        <input type="hidden" class="topic" value="Технические характеристики PRISMATIC 850 Laudel">
                         <div>
                           <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
                            </div>
                            <div>
                                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
                            </div>
                           <div>
                              <input type="text" data-required='required'  class="email email-modal" placeholder="Ваш e-mail">
                           </div>
                           <button class="btn btn-q btn-new btn-1  btn-modal formbtn ">РАССЧИТАТЬ СТОИМОСТЬ МOНТАЖА</button>
                       </form>
                      <div class="gift">При заказе печи,<br> набор для чистки камина - <span>В ПОДАРОК!</span></div> 
                     <img src="img/modal-form-icon.png" alt="">  
            </div>
        </div>
  </div>
</div>
</div>
<!-- Modal price8 tab2  -->
<div id="myModalprice8" class="modal fade" role="dialog">
  <div class="modal-dialog">
        
    <!-- Modal content-->
    <div class="modal-content modal-content-bg  hidden-md">

         <div class="modal-name hidden-md hidden-sm hidden-xs">
             <div class="background1"></div>
            <div class="title">PRISMATIC 850 Laudel </div>
             <div class="text">Французская чугунная топка с призматическим трапецевидным стеклом. Такая конструкция каминной топки позволяет максимально увеличить угол обзора огня, а также установить топку в углу помещения, что сэкономит полезную площадь помещения. Оборудована функцией вторичного дожига и системой очистки стекла.

            </div>
         </div>
        <div class="modal-description hidden-md hidden-sm hidden-xs">
            <div class="title"></div>
           <ul>
            <li class="title">Характеристики:</li>
            <li>Aртикул:<span> 6385-50</span></li>
            <li>Тепловая мощность: <span>16 kW</span> </li>
            <li>КПД: <span>71,4%</span></li>
            <li>Длительного горения</li>
            <li>Система очистки стекла</li>
            <li>Вторичный дожиг</li>
            <li>Диаметр дымохода: <span>200 mm </span> </li>
            

            <li class="marg-li">Размеры: <br><span>H 940 x W 827 x D 514 mm</span></li>
            <li>Вес: <span>167 kg</span>  </li>
            <li>Шиберная заслонка</li>
            <li>Гарантия:<span> 5 лет</span></li>
           </ul>
        </div>
        <div class="modal-form">
        <img class="close" data-dismiss="modal" src="img/Form_closed.png" alt="">
            <div class="form-content">
                <div class="title">Рассчитать стоимость монтажа в 2-х вариантах </div>
                <div class="text">Оставьте заявку, чтобы получить рассчет  стоимости монтажа в 2 вариантах и получить подробную консультацию</div> 
                        <form action="" class="form" method="POST" onsubmit="yaCounter41408764.reachGoal('callback5'); ga('send', 'event', 'submit', 'callback5');">
                        <input type="hidden" class="topic" value="Технические характеристики PRISMATIC 850 Laudel">
                         <div>
                           <input type="text" data-required='required' class="name  name-modal" placeholder="Вашe имя">
                            </div>
                            <div>
                                <input type="text" data-required='required'  class="phone phone-modal" placeholder="Ваш телефон">
                            </div>
                           <div>
                              <input type="text" data-required='required'  class="email email-modal" placeholder="Ваш e-mail">
                           </div>
                           <button class="btn btn-q btn-new btn-1  btn-modal formbtn ">РАССЧИТАТЬ СТОИМОСТЬ МOНТАЖА</button>
                       </form>
                      <div class="gift">При заказе печи,<br> набор для чистки камина - <span>В ПОДАРОК!</span></div> 
                     <img src="img/modal-form-icon.png" alt="">  
            </div>
        </div>
  </div>
</div>
</div>
    <p id="back-top"><a href="#top"><img src="img/arrow_up.png" alt=""></a></p>
    <div id="modal-end">
        <button id="modal-close"></button>
        <span class="span-form text-center">Спасибо! Ваша заявка отправлена<br>
        Мы свяжемся с Вами в ближайшее время</span>
    </div>
    <div id="modal-download">
        <button id="modal-close"></button>
        <span class="span-form text-center">Спасибо! Ваша заявка отправлена<br>
         Мы свяжемся с Вами в ближайшее время</span>

        <a href="https://drive.google.com/drive/folders/0B7FR_jj5SeOdX0ZSVWtaampkclk" target="_blank">Просмотреть каталог  можно<br> перейдя по <span>ссылке</span></a>
    </div>
    <div id="overlay"></div>

<script>
    function loadCSS(path) {
        var ms=document.createElement("link");ms.rel="stylesheet";
        ms.href=path;document.getElementsByTagName("head")[0].appendChild(ms);
    } 
    loadCSS("css/style.css");
    loadCSS("css/flexslider.css");
</script>

<script>var scr = {"scripts":[
	{"src" : "//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js", "async" : false},
	{"src" : "libs/SmoothScroll.js", "async" : false},
	{"src" : "libs/bootstrap.min.js", "async" : false},
    {"src" : "libs/jquery.flexslider.min.js", "async" : false},
	{"src" : "common.js", "async" : false}
	]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeAb5tMZ-rLa-Mxtgdm__NNSq-IwSESaM"></script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            scaleControl: false,
            draggable: false,
            streetViewControl: false,
            mapTypeControl: false,
            center: new google.maps.LatLng(50.469238,30.517679000000044),
            styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
        };
        var markers = [];
            var image = new google.maps.MarkerImage('img/icon_location.png',
            new google.maps.Size(95,95),
            new google.maps.Point(0,0),
            new google.maps.Point(26,64)
        );        
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(50.469238,30.517679000000044),
            map: map,
            raiseOnDrag: false,
            icon: image,
            title: ' ул. Верхний Вал, 52, Киев, Украина',
        });
    }
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41408764 = new Ya.Metrika({
                    id:41408764,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:false,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/41408764" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88575826-1', 'auto');
  ga('send', 'pageview');

</script>
<!--validator -->
</body>

</html>