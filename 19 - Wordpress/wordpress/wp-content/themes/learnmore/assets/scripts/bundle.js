/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/focus-visible/dist/focus-visible.min.js":
/*!**************************************************************!*\
  !*** ./node_modules/focus-visible/dist/focus-visible.min.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("!function (e, t) {\n   true ? t() : undefined;\n}(0, function () {\n  \"use strict\";\n\n  function e(e) {\n    var t = !0,\n        n = !1,\n        o = null,\n        d = {\n      text: !0,\n      search: !0,\n      url: !0,\n      tel: !0,\n      email: !0,\n      password: !0,\n      number: !0,\n      date: !0,\n      month: !0,\n      week: !0,\n      time: !0,\n      datetime: !0,\n      \"datetime-local\": !0\n    };\n\n    function i(e) {\n      return !!(e && e !== document && \"HTML\" !== e.nodeName && \"BODY\" !== e.nodeName && \"classList\" in e && \"contains\" in e.classList);\n    }\n\n    function s(e) {\n      e.classList.contains(\"focus-visible\") || (e.classList.add(\"focus-visible\"), e.setAttribute(\"data-focus-visible-added\", \"\"));\n    }\n\n    function u(e) {\n      t = !1;\n    }\n\n    function a() {\n      document.addEventListener(\"mousemove\", c), document.addEventListener(\"mousedown\", c), document.addEventListener(\"mouseup\", c), document.addEventListener(\"pointermove\", c), document.addEventListener(\"pointerdown\", c), document.addEventListener(\"pointerup\", c), document.addEventListener(\"touchmove\", c), document.addEventListener(\"touchstart\", c), document.addEventListener(\"touchend\", c);\n    }\n\n    function c(e) {\n      e.target.nodeName && \"html\" === e.target.nodeName.toLowerCase() || (t = !1, document.removeEventListener(\"mousemove\", c), document.removeEventListener(\"mousedown\", c), document.removeEventListener(\"mouseup\", c), document.removeEventListener(\"pointermove\", c), document.removeEventListener(\"pointerdown\", c), document.removeEventListener(\"pointerup\", c), document.removeEventListener(\"touchmove\", c), document.removeEventListener(\"touchstart\", c), document.removeEventListener(\"touchend\", c));\n    }\n\n    document.addEventListener(\"keydown\", function (n) {\n      n.metaKey || n.altKey || n.ctrlKey || (i(e.activeElement) && s(e.activeElement), t = !0);\n    }, !0), document.addEventListener(\"mousedown\", u, !0), document.addEventListener(\"pointerdown\", u, !0), document.addEventListener(\"touchstart\", u, !0), document.addEventListener(\"visibilitychange\", function (e) {\n      \"hidden\" === document.visibilityState && (n && (t = !0), a());\n    }, !0), a(), e.addEventListener(\"focus\", function (e) {\n      var n, o, u;\n      i(e.target) && (t || (n = e.target, o = n.type, \"INPUT\" === (u = n.tagName) && d[o] && !n.readOnly || \"TEXTAREA\" === u && !n.readOnly || n.isContentEditable)) && s(e.target);\n    }, !0), e.addEventListener(\"blur\", function (e) {\n      var t;\n      i(e.target) && (e.target.classList.contains(\"focus-visible\") || e.target.hasAttribute(\"data-focus-visible-added\")) && (n = !0, window.clearTimeout(o), o = window.setTimeout(function () {\n        n = !1;\n      }, 100), (t = e.target).hasAttribute(\"data-focus-visible-added\") && (t.classList.remove(\"focus-visible\"), t.removeAttribute(\"data-focus-visible-added\")));\n    }, !0), e.nodeType === Node.DOCUMENT_FRAGMENT_NODE && e.host ? e.host.setAttribute(\"data-js-focus-visible\", \"\") : e.nodeType === Node.DOCUMENT_NODE && (document.documentElement.classList.add(\"js-focus-visible\"), document.documentElement.setAttribute(\"data-js-focus-visible\", \"\"));\n  }\n\n  if (\"undefined\" != typeof window && \"undefined\" != typeof document) {\n    var t;\n    window.applyFocusVisiblePolyfill = e;\n\n    try {\n      t = new CustomEvent(\"focus-visible-polyfill-ready\");\n    } catch (e) {\n      (t = document.createEvent(\"CustomEvent\")).initCustomEvent(\"focus-visible-polyfill-ready\", !1, !1, {});\n    }\n\n    window.dispatchEvent(t);\n  }\n\n  \"undefined\" != typeof document && e(document);\n});\n\n//# sourceURL=webpack:///./node_modules/focus-visible/dist/focus-visible.min.js?");

/***/ }),

/***/ "./node_modules/focus-within/index.mjs":
/*!*********************************************!*\
  !*** ./node_modules/focus-within/index.mjs ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(__webpack_module__, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nfunction focusWithin(document, opts) {\n  const className = Object(opts).className;\n  const attr = Object(opts).attr || 'focus-within';\n  const force = Object(opts).force;\n  const lastElements = [];\n\n  try {\n    document.querySelector(':focus-within');\n\n    if (!force) {\n      return initialize;\n    }\n  } catch (ignoredError) {\n    /* do nothing and continue */\n  }\n\n  function onfocuschange() {\n    let lastElement;\n\n    while (lastElement = lastElements.pop()) {\n      if (attr) {\n        lastElement.removeAttribute(attr);\n      }\n\n      if (className) {\n        lastElement.classList.remove(className);\n      }\n    }\n\n    let activeElement = document.activeElement; // only add focus if it has not been added and is not the document element\n\n    if (!/^(#document|HTML|BODY)$/.test(Object(activeElement).nodeName)) {\n      while (activeElement && activeElement.nodeType === 1) {\n        if (attr) {\n          activeElement.setAttribute(attr, '');\n        }\n\n        if (className) {\n          activeElement.classList.add(className);\n        }\n\n        lastElements.push(activeElement);\n        activeElement = activeElement.parentNode;\n      }\n    }\n  }\n\n  function initialize() {\n    document.addEventListener('focus', onfocuschange, true);\n    document.addEventListener('blur', onfocuschange, true);\n  }\n  /**\n  * Callback wrapper for check loaded state\n  */\n\n  /* eslint-disable */\n\n\n  !function load() {\n    if (/m/.test(document.readyState)) {\n      document.removeEventListener('readystatechange', load) | initialize();\n    } else {\n      document.addEventListener('readystatechange', load);\n    }\n  }();\n  /* eslint-enable */\n\n  return initialize;\n}\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (focusWithin);\n//# sourceMappingURL=index.mjs.map\n\n\n//# sourceURL=webpack:///./node_modules/focus-within/index.mjs?");

/***/ }),

/***/ "./scripts/index.js":
/*!**************************!*\
  !*** ./scripts/index.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var focus_within__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! focus-within */ \"./node_modules/focus-within/index.mjs\");\n/* harmony import */ var _node_modules_focus_visible_dist_focus_visible_min_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../node_modules/focus-visible/dist/focus-visible.min.js */ \"./node_modules/focus-visible/dist/focus-visible.min.js\");\n/* harmony import */ var _node_modules_focus_visible_dist_focus_visible_min_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_node_modules_focus_visible_dist_focus_visible_min_js__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _utils_accessibility__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./utils/accessibility */ \"./scripts/utils/accessibility.js\");\n\n\n // ----------------------------------------------------------------------\n// Handles menu button click on mobile devices:\n// * toggles aria-expanded attribute\n// * toggles 'is-expanded' class for the toggle button\n// * toggles 'is-visible' class for the menu\n// ----------------------------------------------------------------------\n\nvar menuToggle = document.getElementById('js-menu-toggle');\nvar primaryMenu = document.getElementById('primary-menu');\n\nif (menuToggle && primaryMenu) {\n  menuToggle.addEventListener('click', function () {\n    // eslint-disable-line func-names\n    var that = this;\n    Object(_utils_accessibility__WEBPACK_IMPORTED_MODULE_2__[\"toggleAriaAttribute\"])(that);\n    that.classList.toggle('is-expanded');\n    primaryMenu.classList.toggle('is-visible');\n  });\n} // ----------------------------------------------------------------------\n// Helps with accessibility for keyboard only users.\n// ----------------------------------------------------------------------\n\n\nObject(_utils_accessibility__WEBPACK_IMPORTED_MODULE_2__[\"skipLinkFocusFix\"])(); // -------------------------------------------------------------------------------------------------\n// Focus Within lets target elements based on whether they are focused or contain a focused element,\n// following the Selectors Level 4 specification.\n// We are using it for improving keyboard navigation accessibility on sub-menus.\n// -------------------------------------------------------------------------------------------------\n\nObject(focus_within__WEBPACK_IMPORTED_MODULE_0__[\"default\"])(document, {\n  attr: false,\n  className: 'focus'\n});\n\n//# sourceURL=webpack:///./scripts/index.js?");

/***/ }),

/***/ "./scripts/utils/accessibility.js":
/*!****************************************!*\
  !*** ./scripts/utils/accessibility.js ***!
  \****************************************/
/*! exports provided: toggleAriaAttribute, skipLinkFocusFix */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"toggleAriaAttribute\", function() { return toggleAriaAttribute; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"skipLinkFocusFix\", function() { return skipLinkFocusFix; });\nfunction toggleAriaAttribute(button) {\n  var aria = button.getAttribute('aria-expanded');\n  var newAriaValue = 'true' !== aria;\n  button.setAttribute('aria-expanded', newAriaValue);\n}\n/**\n * Helps with accessibility for keyboard only users.\n * Learn more: https://git.io/vWdr2\n */\n\nfunction skipLinkFocusFix() {\n  var isIe = /(trident|msie)/i.test(navigator.userAgent);\n\n  if (isIe && document.getElementById && window.addEventListener) {\n    window.addEventListener('hashchange', function () {\n      var id = window.location.hash.substring(1);\n\n      if (!/^[A-z0-9_-]+$/.test(id)) {\n        return;\n      }\n\n      var element = document.getElementById(id);\n\n      if (element) {\n        if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {\n          element.tabIndex = -1;\n        }\n\n        element.focus();\n      }\n    }, false);\n  }\n}\n\n//# sourceURL=webpack:///./scripts/utils/accessibility.js?");

/***/ }),

/***/ 0:
/*!********************************!*\
  !*** multi ./scripts/index.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("module.exports = __webpack_require__(/*! /Users/matheuswd/ValetSites/lm/wp-content/themes/learnmore/_development/scripts/index.js */\"./scripts/index.js\");\n\n\n//# sourceURL=webpack:///multi_./scripts/index.js?");

/***/ })

/******/ });