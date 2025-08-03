// index.js
import "flyonui/flyonui"
import Dropzone from 'dropzone';
import 'dropzone/dist/dropzone.css';
import _ from 'lodash';

Dropzone.autoDiscover = false;

document.addEventListener('DOMContentLoaded', function () {
  new Dropzone("#my-dropzone", {
    url: "/upload",
    maxFiles: 3,
    acceptedFiles: "image/*"
  });
});

