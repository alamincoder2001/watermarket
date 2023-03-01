!(function (root, factory) {
    "object" == typeof exports && "object" == typeof module
        ? (module.exports = factory())
        : "function" == typeof define && define.amd
        ? define([], factory)
        : "object" == typeof exports
        ? (exports.VueGoogleCharts = factory())
        : (root.VueGoogleCharts = factory());
})(this, function () {
    return (function (modules) {
        function __webpack_require__(moduleId) {
            if (installedModules[moduleId])
                return installedModules[moduleId].exports;
            var module = (installedModules[moduleId] = {
                i: moduleId,
                l: !1,
                exports: {},
            });
            return (
                modules[moduleId].call(
                    module.exports,
                    module,
                    module.exports,
                    __webpack_require__
                ),
                (module.l = !0),
                module.exports
            );
        }
        var installedModules = {};
        return (
            (__webpack_require__.m = modules),
            (__webpack_require__.c = installedModules),
            (__webpack_require__.i = function (value) {
                return value;
            }),
            (__webpack_require__.d = function (exports, name, getter) {
                __webpack_require__.o(exports, name) ||
                    Object.defineProperty(exports, name, {
                        configurable: !1,
                        enumerable: !0,
                        get: getter,
                    });
            }),
            (__webpack_require__.n = function (module) {
                var getter =
                    module && module.__esModule
                        ? function () {
                              return module.default;
                          }
                        : function () {
                              return module;
                          };
                return __webpack_require__.d(getter, "a", getter), getter;
            }),
            (__webpack_require__.o = function (object, property) {
                return Object.prototype.hasOwnProperty.call(object, property);
            }),
            (__webpack_require__.p = ""),
            __webpack_require__((__webpack_require__.s = 4))
        );
    })([
        function (module, __webpack_exports__, __webpack_require__) {
            "use strict";
            function getChartsLoader() {
                return window.google && window.google.charts
                    ? Promise.resolve(window.google.charts)
                    : (chartsLoaderPromise ||
                          (chartsLoaderPromise = new Promise(function (
                              resolve
                          ) {
                              var script = document.createElement("script");
                              (script.type = "text/javascript"),
                                  (script.onload = function () {
                                      return resolve(window.google.charts);
                                  }),
                                  (script.src = chartsScriptUrl),
                                  document.body.appendChild(script);
                          })),
                      chartsLoaderPromise);
            }
            function loadGoogleCharts() {
                var version =
                        arguments.length > 0 && void 0 !== arguments[0]
                            ? arguments[0]
                            : "current",
                    settings =
                        arguments.length > 1 && void 0 !== arguments[1]
                            ? arguments[1]
                            : {};
                return getChartsLoader().then(function (loader) {
                    if (
                        "object" !==
                        (void 0 === settings ? "undefined" : _typeof(settings))
                    )
                        throw new Error(
                            "Google Charts loader: settings must be an object"
                        );
                    var settingsKey =
                        version +
                        "_" +
                        JSON.stringify(settings, Object.keys(settings).sort());
                    if (loadedPackages.has(settingsKey))
                        return loadedPackages.get(settingsKey);
                    var loaderPromise = new Promise(function (resolve) {
                        loader.load(version, settings),
                            loader.setOnLoadCallback(function () {
                                return resolve(window.google);
                            });
                    });
                    return (
                        loadedPackages.set(settingsKey, loaderPromise),
                        loaderPromise
                    );
                });
            }
            __webpack_exports__.a = loadGoogleCharts;
            var _typeof =
                    "function" == typeof Symbol &&
                    "symbol" == typeof Symbol.iterator
                        ? function (obj) {
                              return typeof obj;
                          }
                        : function (obj) {
                              return obj &&
                                  "function" == typeof Symbol &&
                                  obj.constructor === Symbol &&
                                  obj !== Symbol.prototype
                                  ? "symbol"
                                  : typeof obj;
                          },
                chartsScriptUrl = "https://www.gstatic.com/charts/loader.js",
                chartsLoaderPromise = null,
                loadedPackages = new Map();
        },
        function (module, exports) {
            var g,
                _typeof =
                    "function" == typeof Symbol &&
                    "symbol" == typeof Symbol.iterator
                        ? function (obj) {
                              return typeof obj;
                          }
                        : function (obj) {
                              return obj &&
                                  "function" == typeof Symbol &&
                                  obj.constructor === Symbol &&
                                  obj !== Symbol.prototype
                                  ? "symbol"
                                  : typeof obj;
                          };
            g = (function () {
                return this;
            })();
            try {
                g = g || Function("return this")() || (0, eval)("this");
            } catch (e) {
                "object" ===
                    ("undefined" == typeof window
                        ? "undefined"
                        : _typeof(window)) && (g = window);
            }
            module.exports = g;
        },
        function (module, exports, __webpack_require__) {
            var Component = __webpack_require__(6)(
                __webpack_require__(5),
                __webpack_require__(7),
                null,
                null
            );
            module.exports = Component.exports;
        },
        function (module, exports) {
            module.exports = function (func, wait, immediate) {
                function later() {
                    var last = Date.now() - timestamp;
                    last < wait && last >= 0
                        ? (timeout = setTimeout(later, wait - last))
                        : ((timeout = null),
                          immediate ||
                              ((result = func.apply(context, args)),
                              (context = args = null)));
                }
                var timeout, args, context, timestamp, result;
                null == wait && (wait = 100);
                var debounced = function () {
                    (context = this),
                        (args = arguments),
                        (timestamp = Date.now());
                    var callNow = immediate && !timeout;
                    return (
                        timeout || (timeout = setTimeout(later, wait)),
                        callNow &&
                            ((result = func.apply(context, args)),
                            (context = args = null)),
                        result
                    );
                };
                return (
                    (debounced.clear = function () {
                        timeout && (clearTimeout(timeout), (timeout = null));
                    }),
                    (debounced.flush = function () {
                        timeout &&
                            ((result = func.apply(context, args)),
                            (context = args = null),
                            clearTimeout(timeout),
                            (timeout = null));
                    }),
                    debounced
                );
            };
        },
        function (module, __webpack_exports__, __webpack_require__) {
            "use strict";
            Object.defineProperty(__webpack_exports__, "__esModule", {
                value: !0,
            }),
                function (global) {
                    function install(Vue) {
                        Vue.component(
                            "GChart",
                            __WEBPACK_IMPORTED_MODULE_1__components_GChart_vue___default.a
                        );
                    }
                    __webpack_exports__.install = install;
                    var __WEBPACK_IMPORTED_MODULE_0__lib_google_charts_loader__ =
                            __webpack_require__(0),
                        __WEBPACK_IMPORTED_MODULE_1__components_GChart_vue__ =
                            __webpack_require__(2),
                        __WEBPACK_IMPORTED_MODULE_1__components_GChart_vue___default =
                            __webpack_require__.n(
                                __WEBPACK_IMPORTED_MODULE_1__components_GChart_vue__
                            );
                    __webpack_require__.d(
                        __webpack_exports__,
                        "loadGoogleCharts",
                        function () {
                            return __WEBPACK_IMPORTED_MODULE_0__lib_google_charts_loader__.a;
                        }
                    ),
                        __webpack_require__.d(
                            __webpack_exports__,
                            "GChart",
                            function () {
                                return __WEBPACK_IMPORTED_MODULE_1__components_GChart_vue___default.a;
                            }
                        );
                    var plugin = { version: "0.3.2", install: install };
                    __webpack_exports__.default = plugin;
                    var GlobalVue = null;
                    "undefined" != typeof window
                        ? (GlobalVue = window.Vue)
                        : void 0 !== global && (GlobalVue = global.Vue),
                        GlobalVue && GlobalVue.use(plugin);
                }.call(__webpack_exports__, __webpack_require__(1));
        },
        function (module, __webpack_exports__, __webpack_require__) {
            "use strict";
            Object.defineProperty(__webpack_exports__, "__esModule", {
                value: !0,
            });
            var __WEBPACK_IMPORTED_MODULE_0__lib_google_charts_loader__ =
                    __webpack_require__(0),
                __WEBPACK_IMPORTED_MODULE_1_debounce__ = __webpack_require__(3),
                __WEBPACK_IMPORTED_MODULE_1_debounce___default =
                    __webpack_require__.n(
                        __WEBPACK_IMPORTED_MODULE_1_debounce__
                    ),
                _slicedToArray = (function () {
                    function sliceIterator(arr, i) {
                        var _arr = [],
                            _n = !0,
                            _d = !1,
                            _e = void 0;
                        try {
                            for (
                                var _s, _i = arr[Symbol.iterator]();
                                !(_n = (_s = _i.next()).done) &&
                                (_arr.push(_s.value), !i || _arr.length !== i);
                                _n = !0
                            );
                        } catch (err) {
                            (_d = !0), (_e = err);
                        } finally {
                            try {
                                !_n && _i.return && _i.return();
                            } finally {
                                if (_d) throw _e;
                            }
                        }
                        return _arr;
                    }
                    return function (arr, i) {
                        if (Array.isArray(arr)) return arr;
                        if (Symbol.iterator in Object(arr))
                            return sliceIterator(arr, i);
                        throw new TypeError(
                            "Invalid attempt to destructure non-iterable instance"
                        );
                    };
                })(),
                _typeof =
                    "function" == typeof Symbol &&
                    "symbol" == typeof Symbol.iterator
                        ? function (obj) {
                              return typeof obj;
                          }
                        : function (obj) {
                              return obj &&
                                  "function" == typeof Symbol &&
                                  obj.constructor === Symbol &&
                                  obj !== Symbol.prototype
                                  ? "symbol"
                                  : typeof obj;
                          },
                chartsLib = null;
            __webpack_exports__.default = {
                name: "GChart",
                props: {
                    type: { type: String },
                    data: {
                        type: [Array, Object],
                        default: function () {
                            return [];
                        },
                    },
                    options: {
                        type: Object,
                        default: function () {
                            return {};
                        },
                    },
                    version: { type: String, default: "current" },
                    settings: {
                        type: Object,
                        default: function () {
                            return { packages: ["corechart", "table"] };
                        },
                    },
                    events: { type: Object },
                    createChart: { type: Function },
                    resizeDebounce: { type: Number, default: 200 },
                },
                data: function () {
                    return { chartObject: null };
                },
                watch: {
                    data: {
                        deep: !0,
                        handler: function () {
                            this.drawChart();
                        },
                    },
                    options: {
                        deep: !0,
                        handler: function () {
                            this.drawChart();
                        },
                    },
                    type: function (value) {
                        this.createChartObject(), this.drawChart();
                    },
                },
                mounted: function () {
                    var _this = this;
                    __webpack_require__
                        .i(
                            __WEBPACK_IMPORTED_MODULE_0__lib_google_charts_loader__.a
                        )(this.version, this.settings)
                        .then(function (api) {
                            chartsLib = api;
                            var chart = _this.createChartObject();
                            _this.$emit("ready", chart, api), _this.drawChart();
                        }),
                        this.resizeDebounce > 0 &&
                            window.addEventListener(
                                "resize",
                                __WEBPACK_IMPORTED_MODULE_1_debounce___default()(
                                    this.drawChart,
                                    this.resizeDebounce
                                )
                            );
                },
                beforeDestroy: function () {
                    this.chartObject && this.chartObject.clearChart();
                },
                methods: {
                    drawChart: function () {
                        if (chartsLib && this.chartObject) {
                            var data = this.getValidChartData();
                            data && this.chartObject.draw(data, this.options);
                        }
                    },
                    getValidChartData: function () {
                        return this.data instanceof
                            chartsLib.visualization.DataTable
                            ? this.data
                            : this.data instanceof
                              chartsLib.visualization.DataView
                            ? this.data
                            : Array.isArray(this.data)
                            ? chartsLib.visualization.arrayToDataTable(
                                  this.data
                              )
                            : null !== this.data &&
                              "object" === _typeof(this.data)
                            ? new chartsLib.visualization.DataTable(this.data)
                            : null;
                    },
                    createChartObject: function () {
                        var createChart = function (el, google, type) {
                                if (!type)
                                    throw new Error(
                                        "please, provide chart type property"
                                    );
                                return new google.visualization[type](el);
                            },
                            fn = this.createChart || createChart;
                        return (
                            (this.chartObject = fn(
                                this.$refs.chart,
                                chartsLib,
                                this.type
                            )),
                            this.attachListeners(),
                            this.chartObject
                        );
                    },
                    attachListeners: function () {
                        var _this2 = this;
                        this.events &&
                            Object.entries(this.events).forEach(function (
                                _ref
                            ) {
                                var _ref2 = _slicedToArray(_ref, 2),
                                    event = _ref2[0],
                                    listener = _ref2[1];
                                chartsLib.visualization.events.addListener(
                                    _this2.chartObject,
                                    event,
                                    listener
                                );
                            });
                    },
                },
            };
        },
        function (module, exports) {
            module.exports = function (
                rawScriptExports,
                compiledTemplate,
                scopeId,
                cssModules
            ) {
                var esModule,
                    scriptExports = (rawScriptExports = rawScriptExports || {}),
                    type = typeof rawScriptExports.default;
                ("object" !== type && "function" !== type) ||
                    ((esModule = rawScriptExports),
                    (scriptExports = rawScriptExports.default));
                var options =
                    "function" == typeof scriptExports
                        ? scriptExports.options
                        : scriptExports;
                if (
                    (compiledTemplate &&
                        ((options.render = compiledTemplate.render),
                        (options.staticRenderFns =
                            compiledTemplate.staticRenderFns)),
                    scopeId && (options._scopeId = scopeId),
                    cssModules)
                ) {
                    var computed = options.computed || (options.computed = {});
                    Object.keys(cssModules).forEach(function (key) {
                        var module = cssModules[key];
                        computed[key] = function () {
                            return module;
                        };
                    });
                }
                return {
                    esModule: esModule,
                    exports: scriptExports,
                    options: options,
                };
            };
        },
        function (module, exports) {
            module.exports = {
                render: function () {
                    var _vm = this,
                        _h = _vm.$createElement;
                    return (_vm._self._c || _h)("div", { ref: "chart" });
                },
                staticRenderFns: [],
            };
        },
    ]);
});
