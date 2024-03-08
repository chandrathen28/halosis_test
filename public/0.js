webpackJsonp([0],{

/***/ 37:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(62)
}
var normalizeComponent = __webpack_require__(0)
/* script */
var __vue_script__ = __webpack_require__(64)
/* template */
var __vue_template__ = __webpack_require__(65)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/index/home.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-d666195a", Component.options)
  } else {
    hotAPI.reload("data-v-d666195a", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 62:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(63);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(2)("adcfa40a", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../node_modules/css-loader/index.js!../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-d666195a\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./home.vue", function() {
     var newContent = require("!!../../../../../node_modules/css-loader/index.js!../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-d666195a\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./home.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 63:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(1)(false);
// imports


// module
exports.push([module.i, "\n.carousel-inner > .item > img,\n.carousel-inner > .item > a > img {\n    margin: auto;\n}\n#myCarousel {\n\tmargin-top: -20px;\n}\n\n\n", ""]);

// exports


/***/ }),

/***/ 64:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
	data: function (_data) {
		function data() {
			return _data.apply(this, arguments);
		}

		data.toString = function () {
			return _data.toString();
		};

		return data;
	}(function () {
		return {
			storageURL: data.getStorageURL()
		};
	}),

	computed: {
		categories: function categories() {
			return data.getCategories();
		}
	}
});

/***/ }),

/***/ 65:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c(
      "div",
      {
        staticClass: "carousel slide",
        attrs: { id: "myCarousel", "data-ride": "carousel" }
      },
      [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "carousel-inner", attrs: { role: "listbox" } },
          [
            _c("div", { staticClass: "item active" }, [
              _c("img", {
                staticStyle: { "max-height": "350px" },
                attrs: { src: _vm.storageURL + "images/slide/slide1.png" }
              })
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "item" }, [
              _c("img", {
                staticStyle: { "max-height": "350px" },
                attrs: { src: _vm.storageURL + "images/slide/slide2.png" }
              })
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "item" }, [
              _c("img", {
                staticStyle: { "max-height": "350px" },
                attrs: { src: _vm.storageURL + "images/slide/slide3.png" }
              })
            ])
          ]
        ),
        _vm._v(" "),
        _vm._m(1),
        _vm._v(" "),
        _vm._m(2)
      ]
    ),
    _vm._v(" "),
    _c(
      "div",
      { staticStyle: { "text-align": "left" } },
      _vm._l(_vm.categories, function(category, index) {
        return _c(
          "category-card",
          {
            key: category.id,
            attrs: {
              name: category.category_name,
              src: _vm.storageURL + category.category_image,
              id: category.id
            }
          },
          [
            _vm._v(
              "\n\t\t\t" + _vm._s(category.category_description) + "\n\t\t"
            )
          ]
        )
      }),
      1
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("ol", { staticClass: "carousel-indicators" }, [
      _c("li", {
        staticClass: "active",
        attrs: { "data-target": "#myCarousel", "data-slide-to": "0" }
      }),
      _vm._v(" "),
      _c("li", {
        attrs: { "data-target": "#myCarousel", "data-slide-to": "1" }
      }),
      _vm._v(" "),
      _c("li", {
        attrs: { "data-target": "#myCarousel", "data-slide-to": "2" }
      })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      {
        staticClass: "left carousel-control",
        attrs: { href: "#myCarousel", "data-slide": "prev" }
      },
      [
        _c("span", { staticClass: "glyphicon glyphicon-chevron-left" }),
        _vm._v(" "),
        _c("span", { staticClass: "sr-only" }, [_vm._v("Previous")])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      {
        staticClass: "right carousel-control",
        attrs: { href: "#myCarousel", "data-slide": "next" }
      },
      [
        _c("span", { staticClass: "glyphicon glyphicon-chevron-right" }),
        _vm._v(" "),
        _c("span", { staticClass: "sr-only" }, [_vm._v("Next")])
      ]
    )
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-d666195a", module.exports)
  }
}

/***/ })

});