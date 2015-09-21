/*
 * jQuery blockUI plugin
 * Version 2.45 (13-SEP-2012)
 * @requires jQuery v1.2.3 or later
 *
 * Examples at: http://malsup.com/jquery/block/
 * Copyright (c) 2007-2012 M. Alsup
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * Thanks to Amir-Hossein Sobhi for some excellent contributions!
 */
(function () {
    function a(j) {
        j.fn._fadeIn = j.fn.fadeIn;
        var d = j.noop || function () {
            };
        var n = /MSIE/.test(navigator.userAgent);
        var f = /MSIE 6.0/.test(navigator.userAgent);
        var k = document.documentMode || 0;
        var g = j.isFunction(document.createElement("div").style.setExpression);
        j.blockUI = function (r) {
            e(window, r)
        };
        j.unblockUI = function (r) {
            i(window, r)
        };
        j.growlUI = function (v, t, u, r) {
            var s = j('<div class="growlUI"></div>');
            if (v) {
                s.append("<h1>" + v + "</h1>")
            }
            if (t) {
                s.append("<h2>" + t + "</h2>")
            }
            if (u === undefined) {
                u = 3000
            }
            j.blockUI({
                message: s,
                fadeIn: 700,
                fadeOut: 1000,
                centerY: false,
                timeout: u,
                showOverlay: false,
                onUnblock: r,
                css: j.blockUI.defaults.growlCSS
            })
        };
        j.fn.block = function (s) {
            var r = j.extend({}, j.blockUI.defaults, s || {});
            this.each(function () {
                var t = j(this);
                if (r.ignoreIfBlocked && t.data("blockUI.isBlocked")) {
                    return
                }
                t.unblock({fadeOut: 0})
            });
            return this.each(function () {
                if (j.css(this, "position") == "static") {
                    this.style.position = "relative"
                }
                this.style.zoom = 1;
                e(this, s)
            })
        };
        j.fn.unblock = function (r) {
            return this.each(function () {
                i(this, r)
            })
        };
        j.blockUI.version = 2.42;
        j.blockUI.defaults = {
            message: "<h1>Please wait...</h1>",
            title: null,
            draggable: true,
            theme: false,
            css: {
                padding: 0,
                margin: 0,
                width: "30%",
                top: "40%",
                left: "35%",
                textAlign: "center",
                color: "#000",
                border: "3px solid #aaa",
                backgroundColor: "#fff"
            },
            themedCSS: {width: "30%", top: "40%", left: "35%"},
            overlayCSS: {backgroundColor: "#000", opacity: 0.6},
            growlCSS: {
                width: "350px",
                top: "10px",
                left: "",
                right: "10px",
                border: "none",
                padding: "5px",
                opacity: 0.6,
                cursor: "default",
                color: "#fff",
                backgroundColor: "#000",
                "-webkit-border-radius": "10px",
                "-moz-border-radius": "10px",
                "border-radius": "10px"
            },
            iframeSrc: /^https/i.test(window.location.href || "") ? "javascript:false" : "about:blank",
            forceIframe: false,
            baseZ: 1000,
            centerX: true,
            centerY: true,
            allowBodyStretch: true,
            bindEvents: true,
            constrainTabKey: true,
            fadeIn: 200,
            fadeOut: 400,
            timeout: 0,
            showOverlay: true,
            focusInput: true,
            onBlock: null,
            onUnblock: null,
            quirksmodeOffsetHack: 4,
            blockMsgClass: "blockMsg",
            ignoreIfBlocked: false
        };
        var c = null;
        var h = [];

        function e(v, H) {
            var E, P;
            var C = (v == window);
            var y = (H && H.message !== undefined ? H.message : undefined);
            H = j.extend({}, j.blockUI.defaults, H || {});
            if (H.ignoreIfBlocked && j(v).data("blockUI.isBlocked")) {
                return
            }
            H.overlayCSS = j.extend({}, j.blockUI.defaults.overlayCSS, H.overlayCSS || {});
            E = j.extend({}, j.blockUI.defaults.css, H.css || {});
            P = j.extend({}, j.blockUI.defaults.themedCSS, H.themedCSS || {});
            y = y === undefined ? H.message : y;
            if (C && c) {
                i(window, {fadeOut: 0})
            }
            if (y && typeof y != "string" && (y.parentNode || y.jquery)) {
                var K = y.jquery ? y[0] : y;
                var R = {};
                j(v).data("blockUI.history", R);
                R.el = K;
                R.parent = K.parentNode;
                R.display = K.style.display;
                R.position = K.style.position;
                if (R.parent) {
                    R.parent.removeChild(K)
                }
            }
            j(v).data("blockUI.onUnblock", H.onUnblock);
            var D = H.baseZ;
            var O = (n || H.forceIframe) ? j('<iframe class="blockUI" style="z-index:' + (D++) + ';display:none;border:none;margin:0;padding:0;position:absolute;width:100%;height:100%;top:0;left:0" src="' + H.iframeSrc + '"></iframe>') : j('<div class="blockUI" style="display:none"></div>');
            var N = H.theme ? j('<div class="blockUI blockOverlay ui-widget-overlay" style="z-index:' + (D++) + ';display:none"></div>') : j('<div class="blockUI blockOverlay" style="z-index:' + (D++) + ';display:none;border:none;margin:0;padding:0;width:100%;height:100%;top:0;left:0"></div>');
            var M, I;
            if (H.theme && C) {
                I = '<div class="blockUI ' + H.blockMsgClass + ' blockPage ui-dialog ui-widget ui-corner-all" style="z-index:' + (D + 10) + ';display:none;position:fixed">';
                if (H.title) {
                    I += '<div class="ui-widget-header ui-dialog-titlebar ui-corner-all blockTitle">' + (H.title || "&nbsp;") + "</div>"
                }
                I += '<div class="ui-widget-content ui-dialog-content"></div>';
                I += "</div>"
            } else {
                if (H.theme) {
                    I = '<div class="blockUI ' + H.blockMsgClass + ' blockElement ui-dialog ui-widget ui-corner-all" style="z-index:' + (D + 10) + ';display:none;position:absolute">';
                    if (H.title) {
                        I += '<div class="ui-widget-header ui-dialog-titlebar ui-corner-all blockTitle">' + (H.title || "&nbsp;") + "</div>"
                    }
                    I += '<div class="ui-widget-content ui-dialog-content"></div>';
                    I += "</div>"
                } else {
                    if (C) {
                        I = '<div class="blockUI ' + H.blockMsgClass + ' blockPage" style="z-index:' + (D + 10) + ';display:none;position:fixed"></div>'
                    } else {
                        I = '<div class="blockUI ' + H.blockMsgClass + ' blockElement" style="z-index:' + (D + 10) + ';display:none;position:absolute"></div>'
                    }
                }
            }
            M = j(I);
            if (y) {
                if (H.theme) {
                    M.css(P);
                    M.addClass("ui-widget-content")
                } else {
                    M.css(E)
                }
            }
            N.css(H.overlayCSS);
            N.css("position", C ? "fixed" : "absolute");
            if (n || H.forceIframe) {
                O.css("opacity", 0)
            }
            var B = [O, N, M], Q = C ? j("body") : j(v);
            j.each(B, function () {
                this.appendTo(Q)
            });
            if (H.theme && H.draggable && j.fn.draggable) {
                M.draggable({handle: ".ui-dialog-titlebar", cancel: "li"})
            }
            var x = g && (!j.boxModel || j("object,embed", C ? null : v).length > 0);
            if (f || x) {
                if (C && H.allowBodyStretch && j.boxModel) {
                    j("html,body").css("height", "100%")
                }
                if ((f || !j.boxModel) && !C) {
                    var G = o(v, "borderTopWidth"), L = o(v, "borderLeftWidth");
                    var A = G ? "(0 - " + G + ")" : 0;
                    var F = L ? "(0 - " + L + ")" : 0
                }
                j.each(B, function (t, U) {
                    var z = U[0].style;
                    z.position = "absolute";
                    if (t < 2) {
                        C ? z.setExpression("height", "Math.max(document.body.scrollHeight, document.body.offsetHeight) - (jQuery.boxModel?0:" + H.quirksmodeOffsetHack + ') + "px"') : z.setExpression("height", 'this.parentNode.offsetHeight + "px"');
                        C ? z.setExpression("width", 'jQuery.boxModel && document.documentElement.clientWidth || document.body.clientWidth + "px"') : z.setExpression("width", 'this.parentNode.offsetWidth + "px"');
                        if (F) {
                            z.setExpression("left", F)
                        }
                        if (A) {
                            z.setExpression("top", A)
                        }
                    } else {
                        if (H.centerY) {
                            if (C) {
                                z.setExpression("top", '(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (blah = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"')
                            }
                            z.marginTop = 0
                        } else {
                            if (!H.centerY && C) {
                                var S = (H.css && H.css.top) ? parseInt(H.css.top, 10) : 0;
                                var T = "((document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + " + S + ') + "px"';
                                z.setExpression("top", T)
                            }
                        }
                    }
                })
            }
            if (y) {
                if (H.theme) {
                    M.find(".ui-widget-content").append(y)
                } else {
                    M.append(y)
                }
                if (y.jquery || y.nodeType) {
                    j(y).show()
                }
            }
            if ((n || H.forceIframe) && H.showOverlay) {
                O.show()
            }
            if (H.fadeIn) {
                var J = H.onBlock ? H.onBlock : d;
                var u = (H.showOverlay && !y) ? J : d;
                var r = y ? J : d;
                if (H.showOverlay) {
                    N._fadeIn(H.fadeIn, u)
                }
                if (y) {
                    M._fadeIn(H.fadeIn, r)
                }
            } else {
                if (H.showOverlay) {
                    N.show()
                }
                if (y) {
                    M.show()
                }
                if (H.onBlock) {
                    H.onBlock()
                }
            }
            m(1, v, H);
            if (C) {
                c = M[0];
                h = j(":input:enabled:visible", c);
                if (H.focusInput) {
                    setTimeout(q, 20)
                }
            } else {
                b(M[0], H.centerX, H.centerY)
            }
            if (H.timeout) {
                var w = setTimeout(function () {
                    C ? j.unblockUI(H) : j(v).unblock(H)
                }, H.timeout);
                j(v).data("blockUI.timeout", w)
            }
        }

        function i(u, v) {
            var t = (u == window);
            var s = j(u);
            var w = s.data("blockUI.history");
            var x = s.data("blockUI.timeout");
            if (x) {
                clearTimeout(x);
                s.removeData("blockUI.timeout")
            }
            v = j.extend({}, j.blockUI.defaults, v || {});
            m(0, u, v);
            if (v.onUnblock === null) {
                v.onUnblock = s.data("blockUI.onUnblock");
                s.removeData("blockUI.onUnblock")
            }
            var r;
            if (t) {
                r = j("body").children().filter(".blockUI").add("body > .blockUI")
            } else {
                r = s.find(">.blockUI")
            }
            if (t) {
                c = h = null
            }
            if (v.fadeOut) {
                r.fadeOut(v.fadeOut);
                setTimeout(function () {
                    l(r, w, v, u)
                }, v.fadeOut)
            } else {
                l(r, w, v, u)
            }
        }

        function l(r, u, t, s) {
            r.each(function (v, w) {
                if (this.parentNode) {
                    this.parentNode.removeChild(this)
                }
            });
            if (u && u.el) {
                u.el.style.display = u.display;
                u.el.style.position = u.position;
                if (u.parent) {
                    u.parent.appendChild(u.el)
                }
                j(s).removeData("blockUI.history")
            }
            if (typeof t.onUnblock == "function") {
                t.onUnblock(s, t)
            }
        }

        function m(r, v, w) {
            var u = v == window, t = j(v);
            if (!r && (u && !c || !u && !t.data("blockUI.isBlocked"))) {
                return
            }
            t.data("blockUI.isBlocked", r);
            if (!w.bindEvents || (r && !w.showOverlay)) {
                return
            }
            var s = "mousedown mouseup keydown keypress";
            r ? j(document).bind(s, w, p) : j(document).unbind(s, p)
        }

        function p(v) {
            if (v.keyCode && v.keyCode == 9) {
                if (c && v.data.constrainTabKey) {
                    var t = h;
                    var s = !v.shiftKey && v.target === t[t.length - 1];
                    var r = v.shiftKey && v.target === t[0];
                    if (s || r) {
                        setTimeout(function () {
                            q(r)
                        }, 10);
                        return false
                    }
                }
            }
            var u = v.data;
            if (j(v.target).parents("div." + u.blockMsgClass).length > 0) {
                return true
            }
            return j(v.target).parents().children().filter("div.blockUI").length === 0
        }

        function q(r) {
            if (!h) {
                return
            }
            var s = h[r === true ? h.length - 1 : 0];
            if (s) {
                s.focus()
            }
        }

        function b(z, r, B) {
            var A = z.parentNode, w = z.style;
            var u = ((A.offsetWidth - z.offsetWidth) / 2) - o(A, "borderLeftWidth");
            var v = ((A.offsetHeight - z.offsetHeight) / 2) - o(A, "borderTopWidth");
            if (r) {
                w.left = u > 0 ? (u + "px") : "0"
            }
            if (B) {
                w.top = v > 0 ? (v + "px") : "0"
            }
        }

        function o(r, s) {
            return parseInt(j.css(r, s), 10) || 0
        }
    }

    if (typeof define === "function" && define.amd && define.amd.jQuery) {
        define(["jquery"], a)
    } else {
        a(jQuery)
    }
})();