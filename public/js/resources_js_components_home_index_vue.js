"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_home_index_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/home/index.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/home/index.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: 'index',
  data: function data() {
    return {
      showError: false,
      errMsg: null,
      Employee: []
    };
  },
  computed: {
    fullName: function fullName() {
      return this.Employee.firstname + ' ' + this.Employee.lastname;
    },
    email: function email() {
      return this.Employee.user;
    }
  },
  watch: {
    SearchList: function SearchList() {
      this.getEmployee();
    }
  },
  created: function created() {
    this.getEmployee();
  },
  methods: {
    getEmployee: function getEmployee() {
      var _this = this;

      axios.get('/sanctum/csrf-cookie').then(function (res) {
        axios.get('/api/employee/profile/' + _this.$route.params.eid).then(function (res) {
          _this.Employee = res.data.data;
        })["catch"](function (err) {
          _this.showError = true, _this.errMsg = err;
        });
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/components/home/index.vue":
/*!************************************************!*\
  !*** ./resources/js/components/home/index.vue ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _index_vue_vue_type_template_id_bb0681a6_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.vue?vue&type=template&id=bb0681a6&scoped=true& */ "./resources/js/components/home/index.vue?vue&type=template&id=bb0681a6&scoped=true&");
/* harmony import */ var _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index.vue?vue&type=script&lang=js& */ "./resources/js/components/home/index.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _index_vue_vue_type_template_id_bb0681a6_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _index_vue_vue_type_template_id_bb0681a6_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "bb0681a6",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/home/index.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/home/index.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./resources/js/components/home/index.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./index.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/home/index.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/home/index.vue?vue&type=template&id=bb0681a6&scoped=true&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/components/home/index.vue?vue&type=template&id=bb0681a6&scoped=true& ***!
  \*******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_bb0681a6_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_bb0681a6_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_bb0681a6_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./index.vue?vue&type=template&id=bb0681a6&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/home/index.vue?vue&type=template&id=bb0681a6&scoped=true&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/home/index.vue?vue&type=template&id=bb0681a6&scoped=true&":
/*!**********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/home/index.vue?vue&type=template&id=bb0681a6&scoped=true& ***!
  \**********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "content-wrapper" }, [
    _c("div", { staticClass: "container-full" }, [
      _c("div", { staticClass: "content-header" }, [
        _c("div", { staticClass: "d-flex align-items-center" }, [
          _c("div", { staticClass: "mr-auto" }, [
            _c("h3", { staticClass: "page-title" }, [_vm._v("Profile")]),
            _vm._v(" "),
            _vm.Employee.eid
              ? _c(
                  "div",
                  { staticClass: "d-inline-block align-items-center" },
                  [
                    _c("nav", [
                      _c("ol", { staticClass: "breadcrumb" }, [
                        _vm._m(0),
                        _vm._v(" "),
                        _c(
                          "li",
                          {
                            staticClass: "breadcrumb-item",
                            attrs: { "aria-current": "page" },
                          },
                          [_vm._v(_vm._s(_vm.Employee.eid))]
                        ),
                        _vm._v(" "),
                        _c(
                          "li",
                          {
                            staticClass: "breadcrumb-item active",
                            attrs: { "aria-current": "page" },
                          },
                          [_vm._v("Profile")]
                        ),
                      ]),
                    ]),
                  ]
                )
              : _vm._e(),
          ]),
        ]),
      ]),
      _vm._v(" "),
      _c("section", { staticClass: "content" }, [
        _c("div", { staticClass: "row" }, [
          _c("div", { staticClass: "col-12 col-lg-5 col-xl-4" }, [
            _c(
              "div",
              {
                staticClass: "box box-inverse bg-img",
                staticStyle: {
                  "background-image":
                    "url(dashboard/images/gallery/full/1.jpg)",
                },
                attrs: { "data-overlay": "2" },
              },
              [
                _c("div", { staticClass: "box-body text-center pb-50" }, [
                  _vm._m(1),
                  _vm._v(" "),
                  _c("h4", { staticClass: "mt-2 mb-0" }, [
                    _c(
                      "a",
                      {
                        directives: [
                          {
                            name: "show",
                            rawName: "v-show",
                            value: _vm.Employee.firstname,
                            expression: "Employee.firstname",
                          },
                        ],
                        staticClass: "hover-primary text-white",
                        attrs: { href: "#" },
                      },
                      [_vm._v(_vm._s(_vm.fullName))]
                    ),
                  ]),
                  _vm._v(" "),
                  _c("span", [
                    _c("i", { staticClass: "fa fa-map-marker w-20" }),
                    _vm._v(" " + _vm._s(_vm.Employee.country)),
                  ]),
                ]),
              ]
            ),
            _vm._v(" "),
            _c("div", { staticClass: "box" }, [
              _c("div", { staticClass: "box-body box-profile" }, [
                _c("div", { staticClass: "row" }, [
                  _c("div", { staticClass: "col-12" }, [
                    _c("div", [
                      _c(
                        "p",
                        {
                          directives: [
                            {
                              name: "show",
                              rawName: "v-show",
                              value: _vm.Employee.user,
                              expression: "Employee.user",
                            },
                          ],
                        },
                        [
                          _vm._v("Email :"),
                          _c("span", { staticClass: "text-gray pl-10" }, [
                            _vm._v(_vm._s(_vm.Employee.email) + " "),
                          ]),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "p",
                        {
                          directives: [
                            {
                              name: "show",
                              rawName: "v-show",
                              value: _vm.Employee.middlename,
                              expression: "Employee.middlename",
                            },
                          ],
                        },
                        [
                          _vm._v("Other names :"),
                          _c("span", { staticClass: "text-gray pl-10" }, [
                            _vm._v(_vm._s(_vm.Employee.middlename) + " "),
                          ]),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "p",
                        {
                          directives: [
                            {
                              name: "show",
                              rawName: "v-show",
                              value: _vm.Employee.dob,
                              expression: "Employee.dob",
                            },
                          ],
                        },
                        [
                          _vm._v("Date of birth :"),
                          _c("span", { staticClass: "text-gray pl-10" }, [
                            _vm._v(_vm._s(_vm.Employee.dob) + " "),
                          ]),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "p",
                        {
                          directives: [
                            {
                              name: "show",
                              rawName: "v-show",
                              value: _vm.Employee.date_hired,
                              expression: "Employee.date_hired",
                            },
                          ],
                        },
                        [
                          _vm._v("Date Hired :"),
                          _c("span", { staticClass: "text-gray pl-10" }, [
                            _vm._v(_vm._s(_vm.Employee.date_hired) + " "),
                          ]),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "p",
                        {
                          directives: [
                            {
                              name: "show",
                              rawName: "v-show",
                              value: _vm.Employee.address,
                              expression: "Employee.address",
                            },
                          ],
                        },
                        [
                          _vm._v("Address :"),
                          _c("span", { staticClass: "text-gray pl-10" }, [
                            _vm._v(
                              "\n                                " +
                                _vm._s(_vm.Employee.address) +
                                " \n                              "
                            ),
                          ]),
                        ]
                      ),
                    ]),
                  ]),
                ]),
              ]),
            ]),
          ]),
          _vm._v(" "),
          _vm.Employee.email != "admin@admin.com"
            ? _c("div", { staticClass: "col-12 col-lg-7 col-xl-8" }, [
                _c(
                  "div",
                  {
                    directives: [
                      {
                        name: "show",
                        rawName: "v-show",
                        value: _vm.showError,
                        expression: "showError",
                      },
                    ],
                    class: {
                      "mt-10 alert alert-danger text-center alert-dismissable":
                        _vm.showError,
                    },
                  },
                  [
                    _c(
                      "button",
                      {
                        staticClass: "close",
                        attrs: {
                          type: "button",
                          "data-dismiss": "alert",
                          "aria-hidden": "true",
                        },
                      },
                      [_vm._v("×")]
                    ),
                    _vm._v(" "),
                    _c("b", [_vm._v(_vm._s(_vm.errMsg))]),
                  ]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "nav-tabs-custom box-profile" }, [
                  _vm._m(2),
                  _vm._v(" "),
                  _c("div", { staticClass: "tab-content" }, [
                    _c(
                      "div",
                      {
                        staticClass: "tab-pane d-block",
                        attrs: { id: "settings" },
                      },
                      [
                        _c("div", { staticClass: "box p-15" }, [
                          _c("div", { staticClass: "row" }, [
                            _c("div", { staticClass: "col-12" }, [
                              _c("div", [
                                _c(
                                  "p",
                                  {
                                    directives: [
                                      {
                                        name: "show",
                                        rawName: "v-show",
                                        value: _vm.Employee.eid,
                                        expression: "Employee.eid",
                                      },
                                    ],
                                    staticStyle: { "font-weight": "bold" },
                                  },
                                  [_vm._v("Employee ID :")]
                                ),
                                _c("p", { staticClass: "text-gray pl-20" }, [
                                  _vm._v(_vm._s(_vm.Employee.eid) + " "),
                                ]),
                                _vm._v(" "),
                                _c("p"),
                                _vm._v(" "),
                                _c(
                                  "p",
                                  {
                                    directives: [
                                      {
                                        name: "show",
                                        rawName: "v-show",
                                        value: _vm.Employee.country,
                                        expression: "Employee.country",
                                      },
                                    ],
                                    staticStyle: { "font-weight": "bold" },
                                  },
                                  [_vm._v("Country :")]
                                ),
                                _c("p", { staticClass: "text-gray pl-20" }, [
                                  _vm._v(_vm._s(_vm.Employee.country) + " "),
                                ]),
                                _vm._v(" "),
                                _c("p"),
                                _vm._v(" "),
                                _c(
                                  "p",
                                  {
                                    directives: [
                                      {
                                        name: "show",
                                        rawName: "v-show",
                                        value: _vm.Employee.department,
                                        expression: "Employee.department",
                                      },
                                    ],
                                    staticStyle: { "font-weight": "bold" },
                                  },
                                  [_vm._v("Department :")]
                                ),
                                _c("p", { staticClass: "text-gray pl-20" }, [
                                  _vm._v(_vm._s(_vm.Employee.department) + " "),
                                ]),
                                _vm._v(" "),
                                _c("p"),
                                _vm._v(" "),
                                _c(
                                  "p",
                                  {
                                    directives: [
                                      {
                                        name: "show",
                                        rawName: "v-show",
                                        value: _vm.Employee.state,
                                        expression: "Employee.state",
                                      },
                                    ],
                                    staticStyle: { "font-weight": "bold" },
                                  },
                                  [_vm._v("State :")]
                                ),
                                _c("p", { staticClass: "text-gray pl-20" }, [
                                  _vm._v(_vm._s(_vm.Employee.state) + " "),
                                ]),
                                _vm._v(" "),
                                _c("p"),
                                _vm._v(" "),
                                _c(
                                  "p",
                                  {
                                    directives: [
                                      {
                                        name: "show",
                                        rawName: "v-show",
                                        value: _vm.Employee.city,
                                        expression: "Employee.city",
                                      },
                                    ],
                                    staticStyle: { "font-weight": "bold" },
                                  },
                                  [_vm._v("City :")]
                                ),
                                _c("p", { staticClass: "text-gray pl-20" }, [
                                  _vm._v(_vm._s(_vm.Employee.city) + " "),
                                ]),
                                _vm._v(" "),
                                _c("p"),
                                _vm._v(" "),
                                _c(
                                  "p",
                                  {
                                    directives: [
                                      {
                                        name: "show",
                                        rawName: "v-show",
                                        value: _vm.Employee.experience,
                                        expression: "Employee.experience",
                                      },
                                    ],
                                    staticStyle: { "font-weight": "bold" },
                                  },
                                  [_vm._v("Experience :")]
                                ),
                                _c("p", { staticClass: "text-gray pl-20" }, [
                                  _vm._v(_vm._s(_vm.Employee.experience) + " "),
                                ]),
                                _vm._v(" "),
                                _c("p"),
                                _vm._v(" "),
                                _c(
                                  "p",
                                  {
                                    directives: [
                                      {
                                        name: "show",
                                        rawName: "v-show",
                                        value: _vm.Employee.zipcode,
                                        expression: "Employee.zipcode",
                                      },
                                    ],
                                    staticStyle: { "font-weight": "bold" },
                                  },
                                  [_vm._v("zipcode :")]
                                ),
                                _c("p", { staticClass: "text-gray pl-20" }, [
                                  _vm._v(_vm._s(_vm.Employee.zipcode) + " "),
                                ]),
                                _vm._v(" "),
                                _c("p"),
                                _vm._v(" "),
                                _c("div", { staticClass: "form-group row" }, [
                                  _c(
                                    "div",
                                    { staticClass: "ml-auto col-sm-10" },
                                    [
                                      _c(
                                        "router-link",
                                        {
                                          staticClass:
                                            "btn btn-rounded btn-success",
                                          attrs: {
                                            to: {
                                              name: "userEdit",
                                              params: {
                                                user: _vm.Employee.eid,
                                              },
                                            },
                                          },
                                        },
                                        [_vm._v("Complete Your Application")]
                                      ),
                                    ],
                                    1
                                  ),
                                ]),
                              ]),
                            ]),
                          ]),
                        ]),
                      ]
                    ),
                  ]),
                ]),
              ])
            : _vm._e(),
        ]),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("li", { staticClass: "breadcrumb-item" }, [
      _c("a", { attrs: { href: "#" } }, [
        _c("i", { staticClass: "mdi mdi-home-outline" }),
      ]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("a", { attrs: { href: "#" } }, [
      _c("img", {
        staticClass: "avatar avatar-xxl avatar-bordered",
        attrs: { src: "/dashboard/images/avatar/5.jpg", alt: "" },
      }),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("ul", { staticClass: "nav nav-tabs" }, [
      _c("li", [
        _c("a", { attrs: { href: "#settings", "data-toggle": "tab" } }, [
          _vm._v("My Details"),
        ]),
      ]),
    ])
  },
]
render._withStripped = true



/***/ })

}]);