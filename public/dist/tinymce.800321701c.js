(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["tinymce"],{

/***/ "./resources/js/plugins/tinymce.js":
/*!*****************************************!*\
  !*** ./resources/js/plugins/tinymce.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global) {let tinymce = __webpack_require__(/*! tinymce */ "./node_modules/tinymce/tinymce.js");

global.TinyMCE = global.tinymce = tinymce;

__webpack_require__(/*! tinymce/icons/default */ "./node_modules/tinymce/icons/default/index.js");

__webpack_require__(/*! tinymce/themes/silver/theme */ "./node_modules/tinymce/themes/silver/theme.js");

__webpack_require__(/*! tinymce/plugins/autolink */ "./node_modules/tinymce/plugins/autolink/index.js");

__webpack_require__(/*! tinymce/plugins/advlist */ "./node_modules/tinymce/plugins/advlist/index.js");

__webpack_require__(/*! tinymce/plugins/lists */ "./node_modules/tinymce/plugins/lists/index.js");

__webpack_require__(/*! tinymce/plugins/link */ "./node_modules/tinymce/plugins/link/index.js");

__webpack_require__(/*! tinymce/plugins/image */ "./node_modules/tinymce/plugins/image/index.js");

__webpack_require__(/*! tinymce/plugins/charmap */ "./node_modules/tinymce/plugins/charmap/index.js");

__webpack_require__(/*! tinymce/plugins/print */ "./node_modules/tinymce/plugins/print/index.js");

__webpack_require__(/*! tinymce/plugins/preview */ "./node_modules/tinymce/plugins/preview/index.js");

__webpack_require__(/*! tinymce/plugins/anchor */ "./node_modules/tinymce/plugins/anchor/index.js");

__webpack_require__(/*! tinymce/plugins/searchreplace */ "./node_modules/tinymce/plugins/searchreplace/index.js");

__webpack_require__(/*! tinymce/plugins/visualblocks */ "./node_modules/tinymce/plugins/visualblocks/index.js");

__webpack_require__(/*! tinymce/plugins/code */ "./node_modules/tinymce/plugins/code/index.js");

__webpack_require__(/*! tinymce/plugins/fullscreen */ "./node_modules/tinymce/plugins/fullscreen/index.js");

__webpack_require__(/*! tinymce/plugins/insertdatetime */ "./node_modules/tinymce/plugins/insertdatetime/index.js");

__webpack_require__(/*! tinymce/plugins/media */ "./node_modules/tinymce/plugins/media/index.js");

__webpack_require__(/*! tinymce/plugins/table */ "./node_modules/tinymce/plugins/table/index.js");

__webpack_require__(/*! tinymce/plugins/paste */ "./node_modules/tinymce/plugins/paste/index.js");

__webpack_require__(/*! tinymce/plugins/help */ "./node_modules/tinymce/plugins/help/index.js");

__webpack_require__(/*! tinymce/plugins/wordcount */ "./node_modules/tinymce/plugins/wordcount/index.js");

__webpack_require__(/*! tinymce/skins/ui/oxide/skin.min.css */ "./node_modules/tinymce/skins/ui/oxide/skin.min.css");

__webpack_require__(/*! tinymce/skins/ui/oxide/content.min.css */ "./node_modules/tinymce/skins/ui/oxide/content.min.css");

tinymce.init({
  selector: 'textarea.tinymce-enable',
  toolbar_mode: 'wrap',
  min_height: 300,
  menubar: false,
  browser_spellcheck: true,
  mobile: {
    theme: 'silver'
  },
  entity_encoding: 'raw',
  // Without this the editor change Vietnamese chars to HTML entities so we can't use LIKE queries
  plugins: ['advlist autolink lists link image charmap print preview anchor', 'searchreplace visualblocks code fullscreen', 'insertdatetime media table paste code help wordcount'],
  toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code help',
  content_css: false,
  skin: false,
  setup: function (editor) {
    editor.on('change', function () {
      tinymce.triggerSave();
    });
  }
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

/***/ }),

/***/ "./resources/js/tinymce.js":
/*!*********************************!*\
  !*** ./resources/js/tinymce.js ***!
  \*********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _plugins_tinymce__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./plugins/tinymce */ "./resources/js/plugins/tinymce.js");
/* harmony import */ var _plugins_tinymce__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_plugins_tinymce__WEBPACK_IMPORTED_MODULE_0__);


/***/ })

},[["./resources/js/tinymce.js","manifest","vendors"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGx1Z2lucy90aW55bWNlLmpzIiwid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy90aW55bWNlLmpzIl0sIm5hbWVzIjpbInRpbnltY2UiLCJyZXF1aXJlIiwiZ2xvYmFsIiwiVGlueU1DRSIsImluaXQiLCJzZWxlY3RvciIsInRvb2xiYXJfbW9kZSIsIm1pbl9oZWlnaHQiLCJtZW51YmFyIiwiYnJvd3Nlcl9zcGVsbGNoZWNrIiwibW9iaWxlIiwidGhlbWUiLCJlbnRpdHlfZW5jb2RpbmciLCJwbHVnaW5zIiwidG9vbGJhciIsImNvbnRlbnRfY3NzIiwic2tpbiIsInNldHVwIiwiZWRpdG9yIiwib24iLCJ0cmlnZ2VyU2F2ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7O0FBQUEsa0RBQUlBLE9BQU8sR0FBR0MsbUJBQU8sQ0FBQyxrREFBRCxDQUFyQjs7QUFFQUMsTUFBTSxDQUFDQyxPQUFQLEdBQWlCRCxNQUFNLENBQUNGLE9BQVAsR0FBaUJBLE9BQWxDOztBQUVBQyxtQkFBTyxDQUFDLDRFQUFELENBQVA7O0FBRUFBLG1CQUFPLENBQUMsa0ZBQUQsQ0FBUDs7QUFFQUEsbUJBQU8sQ0FBQyxrRkFBRCxDQUFQOztBQUNBQSxtQkFBTyxDQUFDLGdGQUFELENBQVA7O0FBQ0FBLG1CQUFPLENBQUMsNEVBQUQsQ0FBUDs7QUFDQUEsbUJBQU8sQ0FBQywwRUFBRCxDQUFQOztBQUNBQSxtQkFBTyxDQUFDLDRFQUFELENBQVA7O0FBQ0FBLG1CQUFPLENBQUMsZ0ZBQUQsQ0FBUDs7QUFDQUEsbUJBQU8sQ0FBQyw0RUFBRCxDQUFQOztBQUNBQSxtQkFBTyxDQUFDLGdGQUFELENBQVA7O0FBQ0FBLG1CQUFPLENBQUMsOEVBQUQsQ0FBUDs7QUFDQUEsbUJBQU8sQ0FBQyw0RkFBRCxDQUFQOztBQUNBQSxtQkFBTyxDQUFDLDBGQUFELENBQVA7O0FBQ0FBLG1CQUFPLENBQUMsMEVBQUQsQ0FBUDs7QUFDQUEsbUJBQU8sQ0FBQyxzRkFBRCxDQUFQOztBQUNBQSxtQkFBTyxDQUFDLDhGQUFELENBQVA7O0FBQ0FBLG1CQUFPLENBQUMsNEVBQUQsQ0FBUDs7QUFDQUEsbUJBQU8sQ0FBQyw0RUFBRCxDQUFQOztBQUNBQSxtQkFBTyxDQUFDLDRFQUFELENBQVA7O0FBQ0FBLG1CQUFPLENBQUMsMEVBQUQsQ0FBUDs7QUFDQUEsbUJBQU8sQ0FBQyxvRkFBRCxDQUFQOztBQUVBQSxtQkFBTyxDQUFDLCtGQUFELENBQVA7O0FBQ0FBLG1CQUFPLENBQUMscUdBQUQsQ0FBUDs7QUFFQUQsT0FBTyxDQUFDSSxJQUFSLENBQWE7QUFDVEMsVUFBUSxFQUFDLHlCQURBO0FBRVRDLGNBQVksRUFBRSxNQUZMO0FBR1RDLFlBQVUsRUFBRSxHQUhIO0FBSVRDLFNBQU8sRUFBRSxLQUpBO0FBS1RDLG9CQUFrQixFQUFFLElBTFg7QUFNVEMsUUFBTSxFQUFFO0FBQ0pDLFNBQUssRUFBRTtBQURILEdBTkM7QUFTVEMsaUJBQWUsRUFBRSxLQVRSO0FBU2U7QUFDeEJDLFNBQU8sRUFBRSxDQUNMLGdFQURLLEVBRUwsNENBRkssRUFHTCxzREFISyxDQVZBO0FBZVRDLFNBQU8sRUFBRSw4SkFmQTtBQWdCVEMsYUFBVyxFQUFFLEtBaEJKO0FBaUJUQyxNQUFJLEVBQUUsS0FqQkc7QUFrQlRDLE9BQUssRUFBRSxVQUFVQyxNQUFWLEVBQWtCO0FBQ3JCQSxVQUFNLENBQUNDLEVBQVAsQ0FBVSxRQUFWLEVBQW9CLFlBQVk7QUFDNUJuQixhQUFPLENBQUNvQixXQUFSO0FBQ0gsS0FGRDtBQUdIO0FBdEJRLENBQWIsRTs7Ozs7Ozs7Ozs7OztBQy9CQTtBQUFBO0FBQUEiLCJmaWxlIjoidGlueW1jZS44MDAzMjE3MDFjLmpzIiwic291cmNlc0NvbnRlbnQiOlsibGV0IHRpbnltY2UgPSByZXF1aXJlKCd0aW55bWNlJyk7XG5cbmdsb2JhbC5UaW55TUNFID0gZ2xvYmFsLnRpbnltY2UgPSB0aW55bWNlO1xuXG5yZXF1aXJlKCd0aW55bWNlL2ljb25zL2RlZmF1bHQnKTtcblxucmVxdWlyZSgndGlueW1jZS90aGVtZXMvc2lsdmVyL3RoZW1lJyk7XG5cbnJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy9hdXRvbGluaycpO1xucmVxdWlyZSgndGlueW1jZS9wbHVnaW5zL2Fkdmxpc3QnKTtcbnJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy9saXN0cycpO1xucmVxdWlyZSgndGlueW1jZS9wbHVnaW5zL2xpbmsnKTtcbnJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy9pbWFnZScpO1xucmVxdWlyZSgndGlueW1jZS9wbHVnaW5zL2NoYXJtYXAnKTtcbnJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy9wcmludCcpO1xucmVxdWlyZSgndGlueW1jZS9wbHVnaW5zL3ByZXZpZXcnKTtcbnJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy9hbmNob3InKTtcbnJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy9zZWFyY2hyZXBsYWNlJyk7XG5yZXF1aXJlKCd0aW55bWNlL3BsdWdpbnMvdmlzdWFsYmxvY2tzJyk7XG5yZXF1aXJlKCd0aW55bWNlL3BsdWdpbnMvY29kZScpO1xucmVxdWlyZSgndGlueW1jZS9wbHVnaW5zL2Z1bGxzY3JlZW4nKTtcbnJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy9pbnNlcnRkYXRldGltZScpO1xucmVxdWlyZSgndGlueW1jZS9wbHVnaW5zL21lZGlhJyk7XG5yZXF1aXJlKCd0aW55bWNlL3BsdWdpbnMvdGFibGUnKTtcbnJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy9wYXN0ZScpO1xucmVxdWlyZSgndGlueW1jZS9wbHVnaW5zL2hlbHAnKTtcbnJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy93b3JkY291bnQnKTtcblxucmVxdWlyZSgndGlueW1jZS9za2lucy91aS9veGlkZS9za2luLm1pbi5jc3MnKTtcbnJlcXVpcmUoJ3RpbnltY2Uvc2tpbnMvdWkvb3hpZGUvY29udGVudC5taW4uY3NzJyk7XG5cbnRpbnltY2UuaW5pdCh7XG4gICAgc2VsZWN0b3I6J3RleHRhcmVhLnRpbnltY2UtZW5hYmxlJyxcbiAgICB0b29sYmFyX21vZGU6ICd3cmFwJyxcbiAgICBtaW5faGVpZ2h0OiAzMDAsXG4gICAgbWVudWJhcjogZmFsc2UsXG4gICAgYnJvd3Nlcl9zcGVsbGNoZWNrOiB0cnVlLFxuICAgIG1vYmlsZToge1xuICAgICAgICB0aGVtZTogJ3NpbHZlcidcbiAgICB9LFxuICAgIGVudGl0eV9lbmNvZGluZzogJ3JhdycsIC8vIFdpdGhvdXQgdGhpcyB0aGUgZWRpdG9yIGNoYW5nZSBWaWV0bmFtZXNlIGNoYXJzIHRvIEhUTUwgZW50aXRpZXMgc28gd2UgY2FuJ3QgdXNlIExJS0UgcXVlcmllc1xuICAgIHBsdWdpbnM6IFtcbiAgICAgICAgJ2Fkdmxpc3QgYXV0b2xpbmsgbGlzdHMgbGluayBpbWFnZSBjaGFybWFwIHByaW50IHByZXZpZXcgYW5jaG9yJyxcbiAgICAgICAgJ3NlYXJjaHJlcGxhY2UgdmlzdWFsYmxvY2tzIGNvZGUgZnVsbHNjcmVlbicsXG4gICAgICAgICdpbnNlcnRkYXRldGltZSBtZWRpYSB0YWJsZSBwYXN0ZSBjb2RlIGhlbHAgd29yZGNvdW50J1xuICAgIF0sXG4gICAgdG9vbGJhcjogJ3VuZG8gcmVkbyB8IGZvcm1hdHNlbGVjdCB8IGJvbGQgaXRhbGljIGJhY2tjb2xvciB8IGFsaWdubGVmdCBhbGlnbmNlbnRlciBhbGlnbnJpZ2h0IGFsaWduanVzdGlmeSB8IGJ1bGxpc3QgbnVtbGlzdCBvdXRkZW50IGluZGVudCB8IHJlbW92ZWZvcm1hdCB8IGNvZGUgaGVscCcsXG4gICAgY29udGVudF9jc3M6IGZhbHNlLFxuICAgIHNraW46IGZhbHNlLFxuICAgIHNldHVwOiBmdW5jdGlvbiAoZWRpdG9yKSB7XG4gICAgICAgIGVkaXRvci5vbignY2hhbmdlJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgdGlueW1jZS50cmlnZ2VyU2F2ZSgpO1xuICAgICAgICB9KTtcbiAgICB9XG59KTtcbiIsImltcG9ydCBcIi4vcGx1Z2lucy90aW55bWNlXCI7XG4iXSwic291cmNlUm9vdCI6IiJ9