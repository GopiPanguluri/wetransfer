"use strict";

function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}

function _defineProperty(t, e, i) {
    return e in t ? Object.defineProperty(t, e, {
        value: i,
        enumerable: !0,
        configurable: !0,
        writable: !0
    }) : t[e] = i, t
}
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
    return typeof t
} : function(t) {
    return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
};
! function(t, e) {
    "object" === ("undefined" == typeof module ? "undefined" : _typeof(module)) && "object" === _typeof(module.exports) ? module.exports = t.document ? e(t, !0) : function(t) {
        if (!t.document) throw new Error("jQuery requires a window with a document");
        return e(t)
    } : e(t)
}("undefined" != typeof window ? window : void 0, function(t, e) {
    function i(t) {
        var e = !!t && "length" in t && t.length,
            i = st.type(t);
        return "function" !== i && !st.isWindow(t) && ("array" === i || 0 === e || "number" == typeof e && e > 0 && e - 1 in t)
    }

    function n(t, e, i) {
        if (st.isFunction(e)) return st.grep(t, function(t, n) {
            return !!e.call(t, n, t) !== i
        });
        if (e.nodeType) return st.grep(t, function(t) {
            return t === e !== i
        });
        if ("string" == typeof e) {
            if (gt.test(e)) return st.filter(e, t, i);
            e = st.filter(e, t)
        }
        return st.grep(t, function(t) {
            return J.call(e, t) > -1 !== i
        })
    }

    function o(t, e) {
        for (;
            (t = t[e]) && 1 !== t.nodeType;);
        return t
    }

    function s(t) {
        var e = {};
        return st.each(t.match(wt) || [], function(t, i) {
            e[i] = !0
        }), e
    }

    function r() {
        Y.removeEventListener("DOMContentLoaded", r), t.removeEventListener("load", r), st.ready()
    }

    function a() {
        this.expando = st.expando + a.uid++
    }

    function l(t, e, i) {
        var n;
        if (void 0 === i && 1 === t.nodeType)
            if (n = "data-" + e.replace(Dt, "-$&").toLowerCase(), i = t.getAttribute(n), "string" == typeof i) {
                try {
                    i = "true" === i || "false" !== i && ("null" === i ? null : +i + "" === i ? +i : Ft.test(i) ? st.parseJSON(i) : i)
                } catch (o) {}
                Tt.set(t, e, i)
            } else i = void 0;
        return i
    }

    function u(t, e, i, n) {
        var o, s = 1,
            r = 20,
            a = n ? function() {
                return n.cur()
            } : function() {
                return st.css(t, e, "")
            },
            l = a(),
            u = i && i[3] || (st.cssNumber[e] ? "" : "px"),
            c = (st.cssNumber[e] || "px" !== u && +l) && Et.exec(st.css(t, e));
        if (c && c[3] !== u) {
            u = u || c[3], i = i || [], c = +l || 1;
            do s = s || ".5", c /= s, st.style(t, e, c + u); while (s !== (s = a() / l) && 1 !== s && --r)
        }
        return i && (c = +c || +l || 0, o = i[1] ? c + (i[1] + 1) * i[2] : +i[2], n && (n.unit = u, n.start = c, n.end = o)), o
    }

    function c(t, e) {
        var i = "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e || "*") : "undefined" != typeof t.querySelectorAll ? t.querySelectorAll(e || "*") : [];
        return void 0 === e || e && st.nodeName(t, e) ? st.merge([t], i) : i
    }

    function h(t, e) {
        for (var i = 0, n = t.length; i < n; i++) $t.set(t[i], "globalEval", !e || $t.get(e[i], "globalEval"))
    }

    function d(t, e, i, n, o) {
        for (var s, r, a, l, u, d, f = e.createDocumentFragment(), p = [], g = 0, m = t.length; g < m; g++)
            if (s = t[g], s || 0 === s)
                if ("object" === st.type(s)) st.merge(p, s.nodeType ? [s] : s);
                else if (Nt.test(s)) {
            for (r = r || f.appendChild(e.createElement("div")), a = (Mt.exec(s) || ["", ""])[1].toLowerCase(), l = Ot[a] || Ot._default, r.innerHTML = l[1] + st.htmlPrefilter(s) + l[2], d = l[0]; d--;) r = r.lastChild;
            st.merge(p, r.childNodes), r = f.firstChild, r.textContent = ""
        } else p.push(e.createTextNode(s));
        for (f.textContent = "", g = 0; s = p[g++];)
            if (n && st.inArray(s, n) > -1) o && o.push(s);
            else if (u = st.contains(s.ownerDocument, s), r = c(f.appendChild(s), "script"), u && h(r), i)
            for (d = 0; s = r[d++];) It.test(s.type || "") && i.push(s);
        return f
    }

    function f() {
        return !0
    }

    function p() {
        return !1
    }

    function g() {
        try {
            return Y.activeElement
        } catch (t) {}
    }

    function m(t, e, i, n, o, s) {
        var r, a;
        if ("object" === ("undefined" == typeof e ? "undefined" : _typeof(e))) {
            "string" != typeof i && (n = n || i, i = void 0);
            for (a in e) m(t, a, i, n, e[a], s);
            return t
        }
        if (null == n && null == o ? (o = i, n = i = void 0) : null == o && ("string" == typeof i ? (o = n, n = void 0) : (o = n, n = i, i = void 0)), o === !1) o = p;
        else if (!o) return t;
        return 1 === s && (r = o, o = function(t) {
            return st().off(t), r.apply(this, arguments)
        }, o.guid = r.guid || (r.guid = st.guid++)), t.each(function() {
            st.event.add(this, e, o, n, i)
        })
    }

    function v(t, e) {
        return st.nodeName(t, "table") && st.nodeName(11 !== e.nodeType ? e : e.firstChild, "tr") ? t.getElementsByTagName("tbody")[0] || t.appendChild(t.ownerDocument.createElement("tbody")) : t
    }

    function y(t) {
        return t.type = (null !== t.getAttribute("type")) + "/" + t.type, t
    }

    function _(t) {
        var e = Wt.exec(t.type);
        return e ? t.type = e[1] : t.removeAttribute("type"), t
    }

    function b(t, e) {
        var i, n, o, s, r, a, l, u;
        if (1 === e.nodeType) {
            if ($t.hasData(t) && (s = $t.access(t), r = $t.set(e, s), u = s.events)) {
                delete r.handle, r.events = {};
                for (o in u)
                    for (i = 0, n = u[o].length; i < n; i++) st.event.add(e, o, u[o][i])
            }
            Tt.hasData(t) && (a = Tt.access(t), l = st.extend({}, a), Tt.set(e, l))
        }
    }

    function w(t, e) {
        var i = e.nodeName.toLowerCase();
        "input" === i && Pt.test(t.type) ? e.checked = t.checked : "input" !== i && "textarea" !== i || (e.defaultValue = t.defaultValue)
    }

    function C(t, e, i, n) {
        e = Z.apply([], e);
        var o, s, r, a, l, u, h = 0,
            f = t.length,
            p = f - 1,
            g = e[0],
            m = st.isFunction(g);
        if (m || f > 1 && "string" == typeof g && !nt.checkClone && Bt.test(g)) return t.each(function(o) {
            var s = t.eq(o);
            m && (e[0] = g.call(this, o, s.html())), C(s, e, i, n)
        });
        if (f && (o = d(e, t[0].ownerDocument, !1, t, n), s = o.firstChild, 1 === o.childNodes.length && (o = s), s || n)) {
            for (r = st.map(c(o, "script"), y), a = r.length; h < f; h++) l = o, h !== p && (l = st.clone(l, !0, !0), a && st.merge(r, c(l, "script"))), i.call(t[h], l, h);
            if (a)
                for (u = r[r.length - 1].ownerDocument, st.map(r, _), h = 0; h < a; h++) l = r[h], It.test(l.type || "") && !$t.access(l, "globalEval") && st.contains(u, l) && (l.src ? st._evalUrl && st._evalUrl(l.src) : st.globalEval(l.textContent.replace(Ut, "")))
        }
        return t
    }

    function x(t, e, i) {
        for (var n, o = e ? st.filter(e, t) : t, s = 0; null != (n = o[s]); s++) i || 1 !== n.nodeType || st.cleanData(c(n)), n.parentNode && (i && st.contains(n.ownerDocument, n) && h(c(n, "script")), n.parentNode.removeChild(n));
        return t
    }

    function k(t, e) {
        var i = st(e.createElement(t)).appendTo(e.body),
            n = st.css(i[0], "display");
        return i.detach(), n
    }

    function $(t) {
        var e = Y,
            i = Kt[t];
        return i || (i = k(t, e), "none" !== i && i || (Gt = (Gt || st("<iframe frameborder='0' width='0' height='0'/>")).appendTo(e.documentElement), e = Gt[0].contentDocument, e.write(), e.close(), i = k(t, e), Gt.detach()), Kt[t] = i), i
    }

    function T(t, e, i) {
        var n, o, s, r, a = t.style;
        return i = i || Qt(t), r = i ? i.getPropertyValue(e) || i[e] : void 0, "" !== r && void 0 !== r || st.contains(t.ownerDocument, t) || (r = st.style(t, e)), i && !nt.pixelMarginRight() && Yt.test(r) && Vt.test(e) && (n = a.width, o = a.minWidth, s = a.maxWidth, a.minWidth = a.maxWidth = a.width = r, r = i.width, a.width = n, a.minWidth = o, a.maxWidth = s), void 0 !== r ? r + "" : r
    }

    function F(t, e) {
        return {
            get: function() {
                return t() ? void delete this.get : (this.get = e).apply(this, arguments)
            }
        }
    }

    function D(t) {
        if (t in ne) return t;
        for (var e = t[0].toUpperCase() + t.slice(1), i = ie.length; i--;)
            if (t = ie[i] + e, t in ne) return t
    }

    function S(t, e, i) {
        var n = Et.exec(e);
        return n ? Math.max(0, n[2] - (i || 0)) + (n[3] || "px") : e
    }

    function E(t, e, i, n, o) {
        for (var s = i === (n ? "border" : "content") ? 4 : "width" === e ? 1 : 0, r = 0; s < 4; s += 2) "margin" === i && (r += st.css(t, i + zt[s], !0, o)), n ? ("content" === i && (r -= st.css(t, "padding" + zt[s], !0, o)), "margin" !== i && (r -= st.css(t, "border" + zt[s] + "Width", !0, o))) : (r += st.css(t, "padding" + zt[s], !0, o), "padding" !== i && (r += st.css(t, "border" + zt[s] + "Width", !0, o)));
        return r
    }

    function z(t, e, i) {
        var n = !0,
            o = "width" === e ? t.offsetWidth : t.offsetHeight,
            s = Qt(t),
            r = "border-box" === st.css(t, "boxSizing", !1, s);
        if (o <= 0 || null == o) {
            if (o = T(t, e, s), (o < 0 || null == o) && (o = t.style[e]), Yt.test(o)) return o;
            n = r && (nt.boxSizingReliable() || o === t.style[e]), o = parseFloat(o) || 0
        }
        return o + E(t, e, i || (r ? "border" : "content"), n, s) + "px"
    }

    function A(t, e) {
        for (var i, n, o, s = [], r = 0, a = t.length; r < a; r++) n = t[r], n.style && (s[r] = $t.get(n, "olddisplay"), i = n.style.display, e ? (s[r] || "none" !== i || (n.style.display = ""), "" === n.style.display && At(n) && (s[r] = $t.access(n, "olddisplay", $(n.nodeName)))) : (o = At(n), "none" === i && o || $t.set(n, "olddisplay", o ? i : st.css(n, "display"))));
        for (r = 0; r < a; r++) n = t[r], n.style && (e && "none" !== n.style.display && "" !== n.style.display || (n.style.display = e ? s[r] || "" : "none"));
        return t
    }

    function P(t, e, i, n, o) {
        return new P.prototype.init(t, e, i, n, o)
    }

    function M() {
        return t.setTimeout(function() {
            oe = void 0
        }), oe = st.now()
    }

    function I(t, e) {
        var i, n = 0,
            o = {
                height: t
            };
        for (e = e ? 1 : 0; n < 4; n += 2 - e) i = zt[n], o["margin" + i] = o["padding" + i] = t;
        return e && (o.opacity = o.width = t), o
    }

    function O(t, e, i) {
        for (var n, o = (j.tweeners[e] || []).concat(j.tweeners["*"]), s = 0, r = o.length; s < r; s++)
            if (n = o[s].call(i, e, t)) return n
    }

    function N(t, e, i) {
        var n, o, s, r, a, l, u, c, h = this,
            d = {},
            f = t.style,
            p = t.nodeType && At(t),
            g = $t.get(t, "fxshow");
        i.queue || (a = st._queueHooks(t, "fx"), null == a.unqueued && (a.unqueued = 0, l = a.empty.fire, a.empty.fire = function() {
            a.unqueued || l()
        }), a.unqueued++, h.always(function() {
            h.always(function() {
                a.unqueued--, st.queue(t, "fx").length || a.empty.fire()
            })
        })), 1 === t.nodeType && ("height" in e || "width" in e) && (i.overflow = [f.overflow, f.overflowX, f.overflowY], u = st.css(t, "display"), c = "none" === u ? $t.get(t, "olddisplay") || $(t.nodeName) : u, "inline" === c && "none" === st.css(t, "float") && (f.display = "inline-block")), i.overflow && (f.overflow = "hidden", h.always(function() {
            f.overflow = i.overflow[0], f.overflowX = i.overflow[1], f.overflowY = i.overflow[2]
        }));
        for (n in e)
            if (o = e[n], re.exec(o)) {
                if (delete e[n], s = s || "toggle" === o, o === (p ? "hide" : "show")) {
                    if ("show" !== o || !g || void 0 === g[n]) continue;
                    p = !0
                }
                d[n] = g && g[n] || st.style(t, n)
            } else u = void 0;
        if (st.isEmptyObject(d)) "inline" === ("none" === u ? $(t.nodeName) : u) && (f.display = u);
        else {
            g ? "hidden" in g && (p = g.hidden) : g = $t.access(t, "fxshow", {}), s && (g.hidden = !p), p ? st(t).show() : h.done(function() {
                st(t).hide()
            }), h.done(function() {
                var e;
                $t.remove(t, "fxshow");
                for (e in d) st.style(t, e, d[e])
            });
            for (n in d) r = O(p ? g[n] : 0, n, h), n in g || (g[n] = r.start, p && (r.end = r.start, r.start = "width" === n || "height" === n ? 1 : 0))
        }
    }

    function L(t, e) {
        var i, n, o, s, r;
        for (i in t)
            if (n = st.camelCase(i), o = e[n], s = t[i], st.isArray(s) && (o = s[1], s = t[i] = s[0]), i !== n && (t[n] = s, delete t[i]), r = st.cssHooks[n], r && "expand" in r) {
                s = r.expand(s), delete t[n];
                for (i in s) i in t || (t[i] = s[i], e[i] = o)
            } else e[n] = o
    }

    function j(t, e, i) {
        var n, o, s = 0,
            r = j.prefilters.length,
            a = st.Deferred().always(function() {
                delete l.elem
            }),
            l = function() {
                if (o) return !1;
                for (var e = oe || M(), i = Math.max(0, u.startTime + u.duration - e), n = i / u.duration || 0, s = 1 - n, r = 0, l = u.tweens.length; r < l; r++) u.tweens[r].run(s);
                return a.notifyWith(t, [u, s, i]), s < 1 && l ? i : (a.resolveWith(t, [u]), !1)
            },
            u = a.promise({
                elem: t,
                props: st.extend({}, e),
                opts: st.extend(!0, {
                    specialEasing: {},
                    easing: st.easing._default
                }, i),
                originalProperties: e,
                originalOptions: i,
                startTime: oe || M(),
                duration: i.duration,
                tweens: [],
                createTween: function(e, i) {
                    var n = st.Tween(t, u.opts, e, i, u.opts.specialEasing[e] || u.opts.easing);
                    return u.tweens.push(n), n
                },
                stop: function(e) {
                    var i = 0,
                        n = e ? u.tweens.length : 0;
                    if (o) return this;
                    for (o = !0; i < n; i++) u.tweens[i].run(1);
                    return e ? (a.notifyWith(t, [u, 1, 0]), a.resolveWith(t, [u, e])) : a.rejectWith(t, [u, e]), this
                }
            }),
            c = u.props;
        for (L(c, u.opts.specialEasing); s < r; s++)
            if (n = j.prefilters[s].call(u, t, c, u.opts)) return st.isFunction(n.stop) && (st._queueHooks(u.elem, u.opts.queue).stop = st.proxy(n.stop, n)), n;
        return st.map(c, O, u), st.isFunction(u.opts.start) && u.opts.start.call(t, u), st.fx.timer(st.extend(l, {
            elem: t,
            anim: u,
            queue: u.opts.queue
        })), u.progress(u.opts.progress).done(u.opts.done, u.opts.complete).fail(u.opts.fail).always(u.opts.always)
    }

    function q(t) {
        return t.getAttribute && t.getAttribute("class") || ""
    }

    function R(t) {
        return function(e, i) {
            "string" != typeof e && (i = e, e = "*");
            var n, o = 0,
                s = e.toLowerCase().match(wt) || [];
            if (st.isFunction(i))
                for (; n = s[o++];) "+" === n[0] ? (n = n.slice(1) || "*", (t[n] = t[n] || []).unshift(i)) : (t[n] = t[n] || []).push(i)
        }
    }

    function H(t, e, i, n) {
        function o(a) {
            var l;
            return s[a] = !0, st.each(t[a] || [], function(t, a) {
                var u = a(e, i, n);
                return "string" != typeof u || r || s[u] ? r ? !(l = u) : void 0 : (e.dataTypes.unshift(u), o(u), !1)
            }), l
        }
        var s = {},
            r = t === Te;
        return o(e.dataTypes[0]) || !s["*"] && o("*")
    }

    function B(t, e) {
        var i, n, o = st.ajaxSettings.flatOptions || {};
        for (i in e) void 0 !== e[i] && ((o[i] ? t : n || (n = {}))[i] = e[i]);
        return n && st.extend(!0, t, n), t
    }

    function W(t, e, i) {
        for (var n, o, s, r, a = t.contents, l = t.dataTypes;
            "*" === l[0];) l.shift(), void 0 === n && (n = t.mimeType || e.getResponseHeader("Content-Type"));
        if (n)
            for (o in a)
                if (a[o] && a[o].test(n)) {
                    l.unshift(o);
                    break
                }
        if (l[0] in i) s = l[0];
        else {
            for (o in i) {
                if (!l[0] || t.converters[o + " " + l[0]]) {
                    s = o;
                    break
                }
                r || (r = o)
            }
            s = s || r
        }
        if (s) return s !== l[0] && l.unshift(s), i[s]
    }

    function U(t, e, i, n) {
        var o, s, r, a, l, u = {},
            c = t.dataTypes.slice();
        if (c[1])
            for (r in t.converters) u[r.toLowerCase()] = t.converters[r];
        for (s = c.shift(); s;)
            if (t.responseFields[s] && (i[t.responseFields[s]] = e), !l && n && t.dataFilter && (e = t.dataFilter(e, t.dataType)), l = s, s = c.shift())
                if ("*" === s) s = l;
                else if ("*" !== l && l !== s) {
            if (r = u[l + " " + s] || u["* " + s], !r)
                for (o in u)
                    if (a = o.split(" "), a[1] === s && (r = u[l + " " + a[0]] || u["* " + a[0]])) {
                        r === !0 ? r = u[o] : u[o] !== !0 && (s = a[0], c.unshift(a[1]));
                        break
                    }
            if (r !== !0)
                if (r && t["throws"]) e = r(e);
                else try {
                    e = r(e)
                } catch (h) {
                    return {
                        state: "parsererror",
                        error: r ? h : "No conversion from " + l + " to " + s
                    }
                }
        }
        return {
            state: "success",
            data: e
        }
    }

    function G(t, e, i, n) {
        var o;
        if (st.isArray(e)) st.each(e, function(e, o) {
            i || Ee.test(t) ? n(t, o) : G(t + "[" + ("object" === ("undefined" == typeof o ? "undefined" : _typeof(o)) && null != o ? e : "") + "]", o, i, n)
        });
        else if (i || "object" !== st.type(e)) n(t, e);
        else
            for (o in e) G(t + "[" + o + "]", e[o], i, n)
    }

    function K(t) {
        return st.isWindow(t) ? t : 9 === t.nodeType && t.defaultView
    }
    var V = [],
        Y = t.document,
        Q = V.slice,
        Z = V.concat,
        X = V.push,
        J = V.indexOf,
        tt = {},
        et = tt.toString,
        it = tt.hasOwnProperty,
        nt = {},
        ot = "2.2.4",
        st = function Re(t, e) {
            return new Re.fn.init(t, e)
        },
        rt = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
        at = /^-ms-/,
        lt = /-([\da-z])/gi,
        ut = function(t, e) {
            return e.toUpperCase()
        };
    st.fn = st.prototype = {
        jquery: ot,
        constructor: st,
        selector: "",
        length: 0,
        toArray: function() {
            return Q.call(this)
        },
        get: function(t) {
            return null != t ? t < 0 ? this[t + this.length] : this[t] : Q.call(this)
        },
        pushStack: function(t) {
            var e = st.merge(this.constructor(), t);
            return e.prevObject = this, e.context = this.context, e
        },
        each: function(t) {
            return st.each(this, t)
        },
        map: function(t) {
            return this.pushStack(st.map(this, function(e, i) {
                return t.call(e, i, e)
            }))
        },
        slice: function() {
            return this.pushStack(Q.apply(this, arguments))
        },
        first: function() {
            return this.eq(0)
        },
        last: function() {
            return this.eq(-1)
        },
        eq: function(t) {
            var e = this.length,
                i = +t + (t < 0 ? e : 0);
            return this.pushStack(i >= 0 && i < e ? [this[i]] : [])
        },
        end: function() {
            return this.prevObject || this.constructor()
        },
        push: X,
        sort: V.sort,
        splice: V.splice
    }, st.extend = st.fn.extend = function() {
        var t, e, i, n, o, s, r = arguments[0] || {},
            a = 1,
            l = arguments.length,
            u = !1;
        for ("boolean" == typeof r && (u = r, r = arguments[a] || {}, a++), "object" === ("undefined" == typeof r ? "undefined" : _typeof(r)) || st.isFunction(r) || (r = {}), a === l && (r = this, a--); a < l; a++)
            if (null != (t = arguments[a]))
                for (e in t) i = r[e], n = t[e], r !== n && (u && n && (st.isPlainObject(n) || (o = st.isArray(n))) ? (o ? (o = !1, s = i && st.isArray(i) ? i : []) : s = i && st.isPlainObject(i) ? i : {}, r[e] = st.extend(u, s, n)) : void 0 !== n && (r[e] = n));
        return r
    }, st.extend({
        expando: "jQuery" + (ot + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function(t) {
            throw new Error(t)
        },
        noop: function() {},
        isFunction: function(t) {
            return "function" === st.type(t)
        },
        isArray: Array.isArray,
        isWindow: function(t) {
            return null != t && t === t.window
        },
        isNumeric: function(t) {
            var e = t && t.toString();
            return !st.isArray(t) && e - parseFloat(e) + 1 >= 0
        },
        isPlainObject: function(t) {
            var e;
            if ("object" !== st.type(t) || t.nodeType || st.isWindow(t)) return !1;
            if (t.constructor && !it.call(t, "constructor") && !it.call(t.constructor.prototype || {}, "isPrototypeOf")) return !1;
            for (e in t);
            return void 0 === e || it.call(t, e)
        },
        isEmptyObject: function(t) {
            var e;
            for (e in t) return !1;
            return !0
        },
        type: function(t) {
            return null == t ? t + "" : "object" === ("undefined" == typeof t ? "undefined" : _typeof(t)) || "function" == typeof t ? tt[et.call(t)] || "object" : "undefined" == typeof t ? "undefined" : _typeof(t)
        },
        globalEval: function(t) {
            var e, i = eval;
            t = st.trim(t), t && (1 === t.indexOf("use strict") ? (e = Y.createElement("script"), e.text = t, Y.head.appendChild(e).parentNode.removeChild(e)) : i(t))
        },
        camelCase: function(t) {
            return t.replace(at, "ms-").replace(lt, ut)
        },
        nodeName: function(t, e) {
            return t.nodeName && t.nodeName.toLowerCase() === e.toLowerCase()
        },
        each: function(t, e) {
            var n, o = 0;
            if (i(t))
                for (n = t.length; o < n && e.call(t[o], o, t[o]) !== !1; o++);
            else
                for (o in t)
                    if (e.call(t[o], o, t[o]) === !1) break; return t
        },
        trim: function(t) {
            return null == t ? "" : (t + "").replace(rt, "")
        },
        makeArray: function(t, e) {
            var n = e || [];
            return null != t && (i(Object(t)) ? st.merge(n, "string" == typeof t ? [t] : t) : X.call(n, t)), n
        },
        inArray: function(t, e, i) {
            return null == e ? -1 : J.call(e, t, i)
        },
        merge: function(t, e) {
            for (var i = +e.length, n = 0, o = t.length; n < i; n++) t[o++] = e[n];
            return t.length = o, t
        },
        grep: function(t, e, i) {
            for (var n, o = [], s = 0, r = t.length, a = !i; s < r; s++) n = !e(t[s], s), n !== a && o.push(t[s]);
            return o
        },
        map: function(t, e, n) {
            var o, s, r = 0,
                a = [];
            if (i(t))
                for (o = t.length; r < o; r++) s = e(t[r], r, n), null != s && a.push(s);
            else
                for (r in t) s = e(t[r], r, n), null != s && a.push(s);
            return Z.apply([], a)
        },
        guid: 1,
        proxy: function He(t, e) {
            var i, n, He;
            if ("string" == typeof e && (i = t[e], e = t, t = i), st.isFunction(t)) return n = Q.call(arguments, 2), He = function() {
                return t.apply(e || this, n.concat(Q.call(arguments)))
            }, He.guid = t.guid = t.guid || st.guid++, He
        },
        now: Date.now,
        support: nt
    }), "function" == typeof Symbol && (st.fn[Symbol.iterator] = V[Symbol.iterator]), st.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(t, e) {
        tt["[object " + e + "]"] = e.toLowerCase()
    });
    var ct = function(t) {
        function e(t, e, i, n) {
            var o, s, r, a, l, u, h, f, p = e && e.ownerDocument,
                g = e ? e.nodeType : 9;
            if (i = i || [], "string" != typeof t || !t || 1 !== g && 9 !== g && 11 !== g) return i;
            if (!n && ((e ? e.ownerDocument || e : q) !== A && z(e), e = e || A, M)) {
                if (11 !== g && (u = vt.exec(t)))
                    if (o = u[1]) {
                        if (9 === g) {
                            if (!(r = e.getElementById(o))) return i;
                            if (r.id === o) return i.push(r), i
                        } else if (p && (r = p.getElementById(o)) && L(e, r) && r.id === o) return i.push(r), i
                    } else {
                        if (u[2]) return X.apply(i, e.getElementsByTagName(t)), i;
                        if ((o = u[3]) && w.getElementsByClassName && e.getElementsByClassName) return X.apply(i, e.getElementsByClassName(o)), i
                    }
                if (w.qsa && !U[t + " "] && (!I || !I.test(t))) {
                    if (1 !== g) p = e, f = t;
                    else if ("object" !== e.nodeName.toLowerCase()) {
                        for ((a = e.getAttribute("id")) ? a = a.replace(_t, "\\$&") : e.setAttribute("id", a = j), h = $(t), s = h.length, l = dt.test(a) ? "#" + a : "[id='" + a + "']"; s--;) h[s] = l + " " + d(h[s]);
                        f = h.join(","), p = yt.test(t) && c(e.parentNode) || e
                    }
                    if (f) try {
                        return X.apply(i, p.querySelectorAll(f)), i
                    } catch (m) {} finally {
                        a === j && e.removeAttribute("id")
                    }
                }
            }
            return F(t.replace(at, "$1"), e, i, n)
        }

        function i() {
            function t(i, n) {
                return e.push(i + " ") > C.cacheLength && delete t[e.shift()], t[i + " "] = n
            }
            var e = [];
            return t
        }

        function n(t) {
            return t[j] = !0, t
        }

        function o(t) {
            var e = A.createElement("div");
            try {
                return !!t(e)
            } catch (i) {
                return !1
            } finally {
                e.parentNode && e.parentNode.removeChild(e), e = null
            }
        }

        function s(t, e) {
            for (var i = t.split("|"), n = i.length; n--;) C.attrHandle[i[n]] = e
        }

        function r(t, e) {
            var i = e && t,
                n = i && 1 === t.nodeType && 1 === e.nodeType && (~e.sourceIndex || K) - (~t.sourceIndex || K);
            if (n) return n;
            if (i)
                for (; i = i.nextSibling;)
                    if (i === e) return -1;
            return t ? 1 : -1
        }

        function a(t) {
            return function(e) {
                var i = e.nodeName.toLowerCase();
                return "input" === i && e.type === t
            }
        }

        function l(t) {
            return function(e) {
                var i = e.nodeName.toLowerCase();
                return ("input" === i || "button" === i) && e.type === t
            }
        }

        function u(t) {
            return n(function(e) {
                return e = +e, n(function(i, n) {
                    for (var o, s = t([], i.length, e), r = s.length; r--;) i[o = s[r]] && (i[o] = !(n[o] = i[o]))
                })
            })
        }

        function c(t) {
            return t && "undefined" != typeof t.getElementsByTagName && t
        }

        function h() {}

        function d(t) {
            for (var e = 0, i = t.length, n = ""; e < i; e++) n += t[e].value;
            return n
        }

        function f(t, e, i) {
            var n = e.dir,
                o = i && "parentNode" === n,
                s = H++;
            return e.first ? function(e, i, s) {
                for (; e = e[n];)
                    if (1 === e.nodeType || o) return t(e, i, s)
            } : function(e, i, r) {
                var a, l, u, c = [R, s];
                if (r) {
                    for (; e = e[n];)
                        if ((1 === e.nodeType || o) && t(e, i, r)) return !0
                } else
                    for (; e = e[n];)
                        if (1 === e.nodeType || o) {
                            if (u = e[j] || (e[j] = {}), l = u[e.uniqueID] || (u[e.uniqueID] = {}), (a = l[n]) && a[0] === R && a[1] === s) return c[2] = a[2];
                            if (l[n] = c, c[2] = t(e, i, r)) return !0
                        }
            }
        }

        function p(t) {
            return t.length > 1 ? function(e, i, n) {
                for (var o = t.length; o--;)
                    if (!t[o](e, i, n)) return !1;
                return !0
            } : t[0]
        }

        function g(t, i, n) {
            for (var o = 0, s = i.length; o < s; o++) e(t, i[o], n);
            return n
        }

        function m(t, e, i, n, o) {
            for (var s, r = [], a = 0, l = t.length, u = null != e; a < l; a++)(s = t[a]) && (i && !i(s, n, o) || (r.push(s), u && e.push(a)));
            return r
        }

        function v(t, e, i, o, s, r) {
            return o && !o[j] && (o = v(o)), s && !s[j] && (s = v(s, r)), n(function(n, r, a, l) {
                var u, c, h, d = [],
                    f = [],
                    p = r.length,
                    v = n || g(e || "*", a.nodeType ? [a] : a, []),
                    y = !t || !n && e ? v : m(v, d, t, a, l),
                    _ = i ? s || (n ? t : p || o) ? [] : r : y;
                if (i && i(y, _, a, l), o)
                    for (u = m(_, f), o(u, [], a, l), c = u.length; c--;)(h = u[c]) && (_[f[c]] = !(y[f[c]] = h));
                if (n) {
                    if (s || t) {
                        if (s) {
                            for (u = [], c = _.length; c--;)(h = _[c]) && u.push(y[c] = h);
                            s(null, _ = [], u, l)
                        }
                        for (c = _.length; c--;)(h = _[c]) && (u = s ? tt(n, h) : d[c]) > -1 && (n[u] = !(r[u] = h))
                    }
                } else _ = m(_ === r ? _.splice(p, _.length) : _), s ? s(null, r, _, l) : X.apply(r, _)
            })
        }

        function y(t) {
            for (var e, i, n, o = t.length, s = C.relative[t[0].type], r = s || C.relative[" "], a = s ? 1 : 0, l = f(function(t) {
                    return t === e
                }, r, !0), u = f(function(t) {
                    return tt(e, t) > -1
                }, r, !0), c = [function(t, i, n) {
                    var o = !s && (n || i !== D) || ((e = i).nodeType ? l(t, i, n) : u(t, i, n));
                    return e = null, o
                }]; a < o; a++)
                if (i = C.relative[t[a].type]) c = [f(p(c), i)];
                else {
                    if (i = C.filter[t[a].type].apply(null, t[a].matches), i[j]) {
                        for (n = ++a; n < o && !C.relative[t[n].type]; n++);
                        return v(a > 1 && p(c), a > 1 && d(t.slice(0, a - 1).concat({
                            value: " " === t[a - 2].type ? "*" : ""
                        })).replace(at, "$1"), i, a < n && y(t.slice(a, n)), n < o && y(t = t.slice(n)), n < o && d(t))
                    }
                    c.push(i)
                }
            return p(c)
        }

        function _(t, i) {
            var o = i.length > 0,
                s = t.length > 0,
                r = function(n, r, a, l, u) {
                    var c, h, d, f = 0,
                        p = "0",
                        g = n && [],
                        v = [],
                        y = D,
                        _ = n || s && C.find.TAG("*", u),
                        b = R += null == y ? 1 : Math.random() || .1,
                        w = _.length;
                    for (u && (D = r === A || r || u); p !== w && null != (c = _[p]); p++) {
                        if (s && c) {
                            for (h = 0, r || c.ownerDocument === A || (z(c), a = !M); d = t[h++];)
                                if (d(c, r || A, a)) {
                                    l.push(c);
                                    break
                                }
                            u && (R = b)
                        }
                        o && ((c = !d && c) && f--, n && g.push(c))
                    }
                    if (f += p, o && p !== f) {
                        for (h = 0; d = i[h++];) d(g, v, r, a);
                        if (n) {
                            if (f > 0)
                                for (; p--;) g[p] || v[p] || (v[p] = Q.call(l));
                            v = m(v)
                        }
                        X.apply(l, v), u && !n && v.length > 0 && f + i.length > 1 && e.uniqueSort(l)
                    }
                    return u && (R = b, D = y), g
                };
            return o ? n(r) : r
        }
        var b, w, C, x, k, $, T, F, D, S, E, z, A, P, M, I, O, N, L, j = "sizzle" + 1 * new Date,
            q = t.document,
            R = 0,
            H = 0,
            B = i(),
            W = i(),
            U = i(),
            G = function(t, e) {
                return t === e && (E = !0), 0
            },
            K = 1 << 31,
            V = {}.hasOwnProperty,
            Y = [],
            Q = Y.pop,
            Z = Y.push,
            X = Y.push,
            J = Y.slice,
            tt = function(t, e) {
                for (var i = 0, n = t.length; i < n; i++)
                    if (t[i] === e) return i;
                return -1
            },
            et = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            it = "[\\x20\\t\\r\\n\\f]",
            nt = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
            ot = "\\[" + it + "*(" + nt + ")(?:" + it + "*([*^$|!~]?=)" + it + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + nt + "))|)" + it + "*\\]",
            st = ":(" + nt + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + ot + ")*)|.*)\\)|)",
            rt = new RegExp(it + "+", "g"),
            at = new RegExp("^" + it + "+|((?:^|[^\\\\])(?:\\\\.)*)" + it + "+$", "g"),
            lt = new RegExp("^" + it + "*," + it + "*"),
            ut = new RegExp("^" + it + "*([>+~]|" + it + ")" + it + "*"),
            ct = new RegExp("=" + it + "*([^\\]'\"]*?)" + it + "*\\]", "g"),
            ht = new RegExp(st),
            dt = new RegExp("^" + nt + "$"),
            ft = {
                ID: new RegExp("^#(" + nt + ")"),
                CLASS: new RegExp("^\\.(" + nt + ")"),
                TAG: new RegExp("^(" + nt + "|[*])"),
                ATTR: new RegExp("^" + ot),
                PSEUDO: new RegExp("^" + st),
                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + it + "*(even|odd|(([+-]|)(\\d*)n|)" + it + "*(?:([+-]|)" + it + "*(\\d+)|))" + it + "*\\)|)", "i"),
                bool: new RegExp("^(?:" + et + ")$", "i"),
                needsContext: new RegExp("^" + it + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + it + "*((?:-\\d)?\\d*)" + it + "*\\)|)(?=[^-]|$)", "i")
            },
            pt = /^(?:input|select|textarea|button)$/i,
            gt = /^h\d$/i,
            mt = /^[^{]+\{\s*\[native \w/,
            vt = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            yt = /[+~]/,
            _t = /'|\\/g,
            bt = new RegExp("\\\\([\\da-f]{1,6}" + it + "?|(" + it + ")|.)", "ig"),
            wt = function(t, e, i) {
                var n = "0x" + e - 65536;
                return n !== n || i ? e : n < 0 ? String.fromCharCode(n + 65536) : String.fromCharCode(n >> 10 | 55296, 1023 & n | 56320)
            },
            Ct = function() {
                z()
            };
        try {
            X.apply(Y = J.call(q.childNodes), q.childNodes), Y[q.childNodes.length].nodeType
        } catch (xt) {
            X = {
                apply: Y.length ? function(t, e) {
                    Z.apply(t, J.call(e))
                } : function(t, e) {
                    for (var i = t.length, n = 0; t[i++] = e[n++];);
                    t.length = i - 1
                }
            }
        }
        w = e.support = {}, k = e.isXML = function(t) {
            var e = t && (t.ownerDocument || t).documentElement;
            return !!e && "HTML" !== e.nodeName
        }, z = e.setDocument = function(t) {
            var e, i, n = t ? t.ownerDocument || t : q;
            return n !== A && 9 === n.nodeType && n.documentElement ? (A = n, P = A.documentElement, M = !k(A), (i = A.defaultView) && i.top !== i && (i.addEventListener ? i.addEventListener("unload", Ct, !1) : i.attachEvent && i.attachEvent("onunload", Ct)), w.attributes = o(function(t) {
                return t.className = "i", !t.getAttribute("className")
            }), w.getElementsByTagName = o(function(t) {
                return t.appendChild(A.createComment("")), !t.getElementsByTagName("*").length
            }), w.getElementsByClassName = mt.test(A.getElementsByClassName), w.getById = o(function(t) {
                return P.appendChild(t).id = j, !A.getElementsByName || !A.getElementsByName(j).length
            }), w.getById ? (C.find.ID = function(t, e) {
                if ("undefined" != typeof e.getElementById && M) {
                    var i = e.getElementById(t);
                    return i ? [i] : []
                }
            }, C.filter.ID = function(t) {
                var e = t.replace(bt, wt);
                return function(t) {
                    return t.getAttribute("id") === e
                }
            }) : (delete C.find.ID, C.filter.ID = function(t) {
                var e = t.replace(bt, wt);
                return function(t) {
                    var i = "undefined" != typeof t.getAttributeNode && t.getAttributeNode("id");
                    return i && i.value === e
                }
            }), C.find.TAG = w.getElementsByTagName ? function(t, e) {
                return "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t) : w.qsa ? e.querySelectorAll(t) : void 0
            } : function(t, e) {
                var i, n = [],
                    o = 0,
                    s = e.getElementsByTagName(t);
                if ("*" === t) {
                    for (; i = s[o++];) 1 === i.nodeType && n.push(i);
                    return n
                }
                return s
            }, C.find.CLASS = w.getElementsByClassName && function(t, e) {
                if ("undefined" != typeof e.getElementsByClassName && M) return e.getElementsByClassName(t)
            }, O = [], I = [], (w.qsa = mt.test(A.querySelectorAll)) && (o(function(t) {
                P.appendChild(t).innerHTML = "<a id='" + j + "'></a><select id='" + j + "-\r\\' msallowcapture=''><option selected=''></option></select>", t.querySelectorAll("[msallowcapture^='']").length && I.push("[*^$]=" + it + "*(?:''|\"\")"), t.querySelectorAll("[selected]").length || I.push("\\[" + it + "*(?:value|" + et + ")"), t.querySelectorAll("[id~=" + j + "-]").length || I.push("~="), t.querySelectorAll(":checked").length || I.push(":checked"), t.querySelectorAll("a#" + j + "+*").length || I.push(".#.+[+~]")
            }), o(function(t) {
                var e = A.createElement("input");
                e.setAttribute("type", "hidden"), t.appendChild(e).setAttribute("name", "D"), t.querySelectorAll("[name=d]").length && I.push("name" + it + "*[*^$|!~]?="), t.querySelectorAll(":enabled").length || I.push(":enabled", ":disabled"), t.querySelectorAll("*,:x"), I.push(",.*:")
            })), (w.matchesSelector = mt.test(N = P.matches || P.webkitMatchesSelector || P.mozMatchesSelector || P.oMatchesSelector || P.msMatchesSelector)) && o(function(t) {
                w.disconnectedMatch = N.call(t, "div"), N.call(t, "[s!='']:x"), O.push("!=", st)
            }), I = I.length && new RegExp(I.join("|")), O = O.length && new RegExp(O.join("|")), e = mt.test(P.compareDocumentPosition), L = e || mt.test(P.contains) ? function(t, e) {
                var i = 9 === t.nodeType ? t.documentElement : t,
                    n = e && e.parentNode;
                return t === n || !(!n || 1 !== n.nodeType || !(i.contains ? i.contains(n) : t.compareDocumentPosition && 16 & t.compareDocumentPosition(n)))
            } : function(t, e) {
                if (e)
                    for (; e = e.parentNode;)
                        if (e === t) return !0;
                return !1
            }, G = e ? function(t, e) {
                if (t === e) return E = !0, 0;
                var i = !t.compareDocumentPosition - !e.compareDocumentPosition;
                return i ? i : (i = (t.ownerDocument || t) === (e.ownerDocument || e) ? t.compareDocumentPosition(e) : 1, 1 & i || !w.sortDetached && e.compareDocumentPosition(t) === i ? t === A || t.ownerDocument === q && L(q, t) ? -1 : e === A || e.ownerDocument === q && L(q, e) ? 1 : S ? tt(S, t) - tt(S, e) : 0 : 4 & i ? -1 : 1)
            } : function(t, e) {
                if (t === e) return E = !0, 0;
                var i, n = 0,
                    o = t.parentNode,
                    s = e.parentNode,
                    a = [t],
                    l = [e];
                if (!o || !s) return t === A ? -1 : e === A ? 1 : o ? -1 : s ? 1 : S ? tt(S, t) - tt(S, e) : 0;
                if (o === s) return r(t, e);
                for (i = t; i = i.parentNode;) a.unshift(i);
                for (i = e; i = i.parentNode;) l.unshift(i);
                for (; a[n] === l[n];) n++;
                return n ? r(a[n], l[n]) : a[n] === q ? -1 : l[n] === q ? 1 : 0
            }, A) : A
        }, e.matches = function(t, i) {
            return e(t, null, null, i)
        }, e.matchesSelector = function(t, i) {
            if ((t.ownerDocument || t) !== A && z(t), i = i.replace(ct, "='$1']"), w.matchesSelector && M && !U[i + " "] && (!O || !O.test(i)) && (!I || !I.test(i))) try {
                var n = N.call(t, i);
                if (n || w.disconnectedMatch || t.document && 11 !== t.document.nodeType) return n
            } catch (o) {}
            return e(i, A, null, [t]).length > 0
        }, e.contains = function(t, e) {
            return (t.ownerDocument || t) !== A && z(t), L(t, e)
        }, e.attr = function(t, e) {
            (t.ownerDocument || t) !== A && z(t);
            var i = C.attrHandle[e.toLowerCase()],
                n = i && V.call(C.attrHandle, e.toLowerCase()) ? i(t, e, !M) : void 0;
            return void 0 !== n ? n : w.attributes || !M ? t.getAttribute(e) : (n = t.getAttributeNode(e)) && n.specified ? n.value : null
        }, e.error = function(t) {
            throw new Error("Syntax error, unrecognized expression: " + t)
        }, e.uniqueSort = function(t) {
            var e, i = [],
                n = 0,
                o = 0;
            if (E = !w.detectDuplicates, S = !w.sortStable && t.slice(0), t.sort(G), E) {
                for (; e = t[o++];) e === t[o] && (n = i.push(o));
                for (; n--;) t.splice(i[n], 1)
            }
            return S = null, t
        }, x = e.getText = function(t) {
            var e, i = "",
                n = 0,
                o = t.nodeType;
            if (o) {
                if (1 === o || 9 === o || 11 === o) {
                    if ("string" == typeof t.textContent) return t.textContent;
                    for (t = t.firstChild; t; t = t.nextSibling) i += x(t)
                } else if (3 === o || 4 === o) return t.nodeValue
            } else
                for (; e = t[n++];) i += x(e);
            return i
        }, C = e.selectors = {
            cacheLength: 50,
            createPseudo: n,
            match: ft,
            attrHandle: {},
            find: {},
            relative: {
                ">": {
                    dir: "parentNode",
                    first: !0
                },
                " ": {
                    dir: "parentNode"
                },
                "+": {
                    dir: "previousSibling",
                    first: !0
                },
                "~": {
                    dir: "previousSibling"
                }
            },
            preFilter: {
                ATTR: function(t) {
                    return t[1] = t[1].replace(bt, wt), t[3] = (t[3] || t[4] || t[5] || "").replace(bt, wt), "~=" === t[2] && (t[3] = " " + t[3] + " "), t.slice(0, 4)
                },
                CHILD: function(t) {
                    return t[1] = t[1].toLowerCase(), "nth" === t[1].slice(0, 3) ? (t[3] || e.error(t[0]), t[4] = +(t[4] ? t[5] + (t[6] || 1) : 2 * ("even" === t[3] || "odd" === t[3])), t[5] = +(t[7] + t[8] || "odd" === t[3])) : t[3] && e.error(t[0]), t
                },
                PSEUDO: function(t) {
                    var e, i = !t[6] && t[2];
                    return ft.CHILD.test(t[0]) ? null : (t[3] ? t[2] = t[4] || t[5] || "" : i && ht.test(i) && (e = $(i, !0)) && (e = i.indexOf(")", i.length - e) - i.length) && (t[0] = t[0].slice(0, e), t[2] = i.slice(0, e)), t.slice(0, 3))
                }
            },
            filter: {
                TAG: function(t) {
                    var e = t.replace(bt, wt).toLowerCase();
                    return "*" === t ? function() {
                        return !0
                    } : function(t) {
                        return t.nodeName && t.nodeName.toLowerCase() === e
                    }
                },
                CLASS: function(t) {
                    var e = B[t + " "];
                    return e || (e = new RegExp("(^|" + it + ")" + t + "(" + it + "|$)")) && B(t, function(t) {
                        return e.test("string" == typeof t.className && t.className || "undefined" != typeof t.getAttribute && t.getAttribute("class") || "")
                    })
                },
                ATTR: function(t, i, n) {
                    return function(o) {
                        var s = e.attr(o, t);
                        return null == s ? "!=" === i : !i || (s += "", "=" === i ? s === n : "!=" === i ? s !== n : "^=" === i ? n && 0 === s.indexOf(n) : "*=" === i ? n && s.indexOf(n) > -1 : "$=" === i ? n && s.slice(-n.length) === n : "~=" === i ? (" " + s.replace(rt, " ") + " ").indexOf(n) > -1 : "|=" === i && (s === n || s.slice(0, n.length + 1) === n + "-"))
                    }
                },
                CHILD: function(t, e, i, n, o) {
                    var s = "nth" !== t.slice(0, 3),
                        r = "last" !== t.slice(-4),
                        a = "of-type" === e;
                    return 1 === n && 0 === o ? function(t) {
                        return !!t.parentNode
                    } : function(e, i, l) {
                        var u, c, h, d, f, p, g = s !== r ? "nextSibling" : "previousSibling",
                            m = e.parentNode,
                            v = a && e.nodeName.toLowerCase(),
                            y = !l && !a,
                            _ = !1;
                        if (m) {
                            if (s) {
                                for (; g;) {
                                    for (d = e; d = d[g];)
                                        if (a ? d.nodeName.toLowerCase() === v : 1 === d.nodeType) return !1;
                                    p = g = "only" === t && !p && "nextSibling"
                                }
                                return !0
                            }
                            if (p = [r ? m.firstChild : m.lastChild], r && y) {
                                for (d = m, h = d[j] || (d[j] = {}), c = h[d.uniqueID] || (h[d.uniqueID] = {}), u = c[t] || [], f = u[0] === R && u[1], _ = f && u[2], d = f && m.childNodes[f]; d = ++f && d && d[g] || (_ = f = 0) || p.pop();)
                                    if (1 === d.nodeType && ++_ && d === e) {
                                        c[t] = [R, f, _];
                                        break
                                    }
                            } else if (y && (d = e, h = d[j] || (d[j] = {}), c = h[d.uniqueID] || (h[d.uniqueID] = {}), u = c[t] || [], f = u[0] === R && u[1], _ = f), _ === !1)
                                for (;
                                    (d = ++f && d && d[g] || (_ = f = 0) || p.pop()) && ((a ? d.nodeName.toLowerCase() !== v : 1 !== d.nodeType) || !++_ || (y && (h = d[j] || (d[j] = {}), c = h[d.uniqueID] || (h[d.uniqueID] = {}), c[t] = [R, _]), d !== e)););
                            return _ -= o, _ === n || _ % n === 0 && _ / n >= 0
                        }
                    }
                },
                PSEUDO: function(t, i) {
                    var o, s = C.pseudos[t] || C.setFilters[t.toLowerCase()] || e.error("unsupported pseudo: " + t);
                    return s[j] ? s(i) : s.length > 1 ? (o = [t, t, "", i], C.setFilters.hasOwnProperty(t.toLowerCase()) ? n(function(t, e) {
                        for (var n, o = s(t, i), r = o.length; r--;) n = tt(t, o[r]), t[n] = !(e[n] = o[r])
                    }) : function(t) {
                        return s(t, 0, o)
                    }) : s
                }
            },
            pseudos: {
                not: n(function(t) {
                    var e = [],
                        i = [],
                        o = T(t.replace(at, "$1"));
                    return o[j] ? n(function(t, e, i, n) {
                        for (var s, r = o(t, null, n, []), a = t.length; a--;)(s = r[a]) && (t[a] = !(e[a] = s))
                    }) : function(t, n, s) {
                        return e[0] = t, o(e, null, s, i), e[0] = null, !i.pop()
                    }
                }),
                has: n(function(t) {
                    return function(i) {
                        return e(t, i).length > 0
                    }
                }),
                contains: n(function(t) {
                    return t = t.replace(bt, wt),
                        function(e) {
                            return (e.textContent || e.innerText || x(e)).indexOf(t) > -1
                        }
                }),
                lang: n(function(t) {
                    return dt.test(t || "") || e.error("unsupported lang: " + t), t = t.replace(bt, wt).toLowerCase(),
                        function(e) {
                            var i;
                            do
                                if (i = M ? e.lang : e.getAttribute("xml:lang") || e.getAttribute("lang")) return i = i.toLowerCase(), i === t || 0 === i.indexOf(t + "-");
                            while ((e = e.parentNode) && 1 === e.nodeType);
                            return !1
                        }
                }),
                target: function(e) {
                    var i = t.location && t.location.hash;
                    return i && i.slice(1) === e.id
                },
                root: function(t) {
                    return t === P
                },
                focus: function(t) {
                    return t === A.activeElement && (!A.hasFocus || A.hasFocus()) && !!(t.type || t.href || ~t.tabIndex)
                },
                enabled: function(t) {
                    return t.disabled === !1
                },
                disabled: function(t) {
                    return t.disabled === !0
                },
                checked: function(t) {
                    var e = t.nodeName.toLowerCase();
                    return "input" === e && !!t.checked || "option" === e && !!t.selected
                },
                selected: function(t) {
                    return t.parentNode && t.parentNode.selectedIndex, t.selected === !0
                },
                empty: function(t) {
                    for (t = t.firstChild; t; t = t.nextSibling)
                        if (t.nodeType < 6) return !1;
                    return !0
                },
                parent: function(t) {
                    return !C.pseudos.empty(t)
                },
                header: function(t) {
                    return gt.test(t.nodeName)
                },
                input: function(t) {
                    return pt.test(t.nodeName)
                },
                button: function(t) {
                    var e = t.nodeName.toLowerCase();
                    return "input" === e && "button" === t.type || "button" === e
                },
                text: function(t) {
                    var e;
                    return "input" === t.nodeName.toLowerCase() && "text" === t.type && (null == (e = t.getAttribute("type")) || "text" === e.toLowerCase())
                },
                first: u(function() {
                    return [0]
                }),
                last: u(function(t, e) {
                    return [e - 1]
                }),
                eq: u(function(t, e, i) {
                    return [i < 0 ? i + e : i]
                }),
                even: u(function(t, e) {
                    for (var i = 0; i < e; i += 2) t.push(i);
                    return t
                }),
                odd: u(function(t, e) {
                    for (var i = 1; i < e; i += 2) t.push(i);
                    return t
                }),
                lt: u(function(t, e, i) {
                    for (var n = i < 0 ? i + e : i; --n >= 0;) t.push(n);
                    return t
                }),
                gt: u(function(t, e, i) {
                    for (var n = i < 0 ? i + e : i; ++n < e;) t.push(n);
                    return t
                })
            }
        }, C.pseudos.nth = C.pseudos.eq;
        for (b in {
                radio: !0,
                checkbox: !0,
                file: !0,
                password: !0,
                image: !0
            }) C.pseudos[b] = a(b);
        for (b in {
                submit: !0,
                reset: !0
            }) C.pseudos[b] = l(b);
        return h.prototype = C.filters = C.pseudos, C.setFilters = new h, $ = e.tokenize = function(t, i) {
            var n, o, s, r, a, l, u, c = W[t + " "];
            if (c) return i ? 0 : c.slice(0);
            for (a = t, l = [], u = C.preFilter; a;) {
                n && !(o = lt.exec(a)) || (o && (a = a.slice(o[0].length) || a), l.push(s = [])), n = !1, (o = ut.exec(a)) && (n = o.shift(), s.push({
                    value: n,
                    type: o[0].replace(at, " ")
                }), a = a.slice(n.length));
                for (r in C.filter) !(o = ft[r].exec(a)) || u[r] && !(o = u[r](o)) || (n = o.shift(), s.push({
                    value: n,
                    type: r,
                    matches: o
                }), a = a.slice(n.length));
                if (!n) break
            }
            return i ? a.length : a ? e.error(t) : W(t, l).slice(0)
        }, T = e.compile = function(t, e) {
            var i, n = [],
                o = [],
                s = U[t + " "];
            if (!s) {
                for (e || (e = $(t)), i = e.length; i--;) s = y(e[i]), s[j] ? n.push(s) : o.push(s);
                s = U(t, _(o, n)), s.selector = t
            }
            return s
        }, F = e.select = function(t, e, i, n) {
            var o, s, r, a, l, u = "function" == typeof t && t,
                h = !n && $(t = u.selector || t);
            if (i = i || [], 1 === h.length) {
                if (s = h[0] = h[0].slice(0), s.length > 2 && "ID" === (r = s[0]).type && w.getById && 9 === e.nodeType && M && C.relative[s[1].type]) {
                    if (e = (C.find.ID(r.matches[0].replace(bt, wt), e) || [])[0], !e) return i;
                    u && (e = e.parentNode), t = t.slice(s.shift().value.length)
                }
                for (o = ft.needsContext.test(t) ? 0 : s.length; o-- && (r = s[o], !C.relative[a = r.type]);)
                    if ((l = C.find[a]) && (n = l(r.matches[0].replace(bt, wt), yt.test(s[0].type) && c(e.parentNode) || e))) {
                        if (s.splice(o, 1), t = n.length && d(s), !t) return X.apply(i, n), i;
                        break
                    }
            }
            return (u || T(t, h))(n, e, !M, i, !e || yt.test(t) && c(e.parentNode) || e), i
        }, w.sortStable = j.split("").sort(G).join("") === j, w.detectDuplicates = !!E, z(), w.sortDetached = o(function(t) {
            return 1 & t.compareDocumentPosition(A.createElement("div"))
        }), o(function(t) {
            return t.innerHTML = "<a href='#'></a>", "#" === t.firstChild.getAttribute("href")
        }) || s("type|href|height|width", function(t, e, i) {
            if (!i) return t.getAttribute(e, "type" === e.toLowerCase() ? 1 : 2)
        }), w.attributes && o(function(t) {
            return t.innerHTML = "<input/>", t.firstChild.setAttribute("value", ""), "" === t.firstChild.getAttribute("value")
        }) || s("value", function(t, e, i) {
            if (!i && "input" === t.nodeName.toLowerCase()) return t.defaultValue
        }), o(function(t) {
            return null == t.getAttribute("disabled")
        }) || s(et, function(t, e, i) {
            var n;
            if (!i) return t[e] === !0 ? e.toLowerCase() : (n = t.getAttributeNode(e)) && n.specified ? n.value : null
        }), e
    }(t);
    st.find = ct, st.expr = ct.selectors, st.expr[":"] = st.expr.pseudos, st.uniqueSort = st.unique = ct.uniqueSort, st.text = ct.getText, st.isXMLDoc = ct.isXML, st.contains = ct.contains;
    var ht = function(t, e, i) {
            for (var n = [], o = void 0 !== i;
                (t = t[e]) && 9 !== t.nodeType;)
                if (1 === t.nodeType) {
                    if (o && st(t).is(i)) break;
                    n.push(t)
                }
            return n
        },
        dt = function(t, e) {
            for (var i = []; t; t = t.nextSibling) 1 === t.nodeType && t !== e && i.push(t);
            return i
        },
        ft = st.expr.match.needsContext,
        pt = /^<([\w-]+)\s*\/?>(?:<\/\1>|)$/,
        gt = /^.[^:#\[\.,]*$/;
    st.filter = function(t, e, i) {
        var n = e[0];
        return i && (t = ":not(" + t + ")"), 1 === e.length && 1 === n.nodeType ? st.find.matchesSelector(n, t) ? [n] : [] : st.find.matches(t, st.grep(e, function(t) {
            return 1 === t.nodeType
        }))
    }, st.fn.extend({
        find: function(t) {
            var e, i = this.length,
                n = [],
                o = this;
            if ("string" != typeof t) return this.pushStack(st(t).filter(function() {
                for (e = 0; e < i; e++)
                    if (st.contains(o[e], this)) return !0
            }));
            for (e = 0; e < i; e++) st.find(t, o[e], n);
            return n = this.pushStack(i > 1 ? st.unique(n) : n), n.selector = this.selector ? this.selector + " " + t : t, n
        },
        filter: function(t) {
            return this.pushStack(n(this, t || [], !1))
        },
        not: function(t) {
            return this.pushStack(n(this, t || [], !0))
        },
        is: function(t) {
            return !!n(this, "string" == typeof t && ft.test(t) ? st(t) : t || [], !1).length
        }
    });
    var mt, vt = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,
        yt = st.fn.init = function(t, e, i) {
            var n, o;
            if (!t) return this;
            if (i = i || mt, "string" == typeof t) {
                if (n = "<" === t[0] && ">" === t[t.length - 1] && t.length >= 3 ? [null, t, null] : vt.exec(t), !n || !n[1] && e) return !e || e.jquery ? (e || i).find(t) : this.constructor(e).find(t);
                if (n[1]) {
                    if (e = e instanceof st ? e[0] : e, st.merge(this, st.parseHTML(n[1], e && e.nodeType ? e.ownerDocument || e : Y, !0)), pt.test(n[1]) && st.isPlainObject(e))
                        for (n in e) st.isFunction(this[n]) ? this[n](e[n]) : this.attr(n, e[n]);
                    return this
                }
                return o = Y.getElementById(n[2]), o && o.parentNode && (this.length = 1, this[0] = o), this.context = Y, this.selector = t, this
            }
            return t.nodeType ? (this.context = this[0] = t, this.length = 1, this) : st.isFunction(t) ? void 0 !== i.ready ? i.ready(t) : t(st) : (void 0 !== t.selector && (this.selector = t.selector, this.context = t.context), st.makeArray(t, this))
        };
    yt.prototype = st.fn, mt = st(Y);
    var _t = /^(?:parents|prev(?:Until|All))/,
        bt = {
            children: !0,
            contents: !0,
            next: !0,
            prev: !0
        };
    st.fn.extend({
        has: function(t) {
            var e = st(t, this),
                i = e.length;
            return this.filter(function() {
                for (var t = 0; t < i; t++)
                    if (st.contains(this, e[t])) return !0
            })
        },
        closest: function(t, e) {
            for (var i, n = 0, o = this.length, s = [], r = ft.test(t) || "string" != typeof t ? st(t, e || this.context) : 0; n < o; n++)
                for (i = this[n]; i && i !== e; i = i.parentNode)
                    if (i.nodeType < 11 && (r ? r.index(i) > -1 : 1 === i.nodeType && st.find.matchesSelector(i, t))) {
                        s.push(i);
                        break
                    }
            return this.pushStack(s.length > 1 ? st.uniqueSort(s) : s)
        },
        index: function(t) {
            return t ? "string" == typeof t ? J.call(st(t), this[0]) : J.call(this, t.jquery ? t[0] : t) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        },
        add: function(t, e) {
            return this.pushStack(st.uniqueSort(st.merge(this.get(), st(t, e))))
        },
        addBack: function(t) {
            return this.add(null == t ? this.prevObject : this.prevObject.filter(t))
        }
    }), st.each({
        parent: function Be(t) {
            var Be = t.parentNode;
            return Be && 11 !== Be.nodeType ? Be : null
        },
        parents: function(t) {
            return ht(t, "parentNode")
        },
        parentsUntil: function(t, e, i) {
            return ht(t, "parentNode", i)
        },
        next: function(t) {
            return o(t, "nextSibling")
        },
        prev: function(t) {
            return o(t, "previousSibling")
        },
        nextAll: function(t) {
            return ht(t, "nextSibling")
        },
        prevAll: function(t) {
            return ht(t, "previousSibling")
        },
        nextUntil: function(t, e, i) {
            return ht(t, "nextSibling", i)
        },
        prevUntil: function(t, e, i) {
            return ht(t, "previousSibling", i)
        },
        siblings: function(t) {
            return dt((t.parentNode || {}).firstChild, t)
        },
        children: function(t) {
            return dt(t.firstChild)
        },
        contents: function(t) {
            return t.contentDocument || st.merge([], t.childNodes)
        }
    }, function(t, e) {
        st.fn[t] = function(i, n) {
            var o = st.map(this, e, i);
            return "Until" !== t.slice(-5) && (n = i), n && "string" == typeof n && (o = st.filter(n, o)), this.length > 1 && (bt[t] || st.uniqueSort(o), _t.test(t) && o.reverse()), this.pushStack(o)
        }
    });
    var wt = /\S+/g;
    st.Callbacks = function(t) {
        t = "string" == typeof t ? s(t) : st.extend({}, t);
        var e, i, n, o, r = [],
            a = [],
            l = -1,
            u = function() {
                for (o = t.once, n = e = !0; a.length; l = -1)
                    for (i = a.shift(); ++l < r.length;) r[l].apply(i[0], i[1]) === !1 && t.stopOnFalse && (l = r.length, i = !1);
                t.memory || (i = !1), e = !1, o && (r = i ? [] : "")
            },
            c = {
                add: function() {
                    return r && (i && !e && (l = r.length - 1, a.push(i)), function n(e) {
                        st.each(e, function(e, i) {
                            st.isFunction(i) ? t.unique && c.has(i) || r.push(i) : i && i.length && "string" !== st.type(i) && n(i)
                        })
                    }(arguments), i && !e && u()), this
                },
                remove: function() {
                    return st.each(arguments, function(t, e) {
                        for (var i;
                            (i = st.inArray(e, r, i)) > -1;) r.splice(i, 1), i <= l && l--
                    }), this
                },
                has: function(t) {
                    return t ? st.inArray(t, r) > -1 : r.length > 0
                },
                empty: function() {
                    return r && (r = []), this
                },
                disable: function() {
                    return o = a = [], r = i = "", this
                },
                disabled: function() {
                    return !r
                },
                lock: function() {
                    return o = a = [], i || (r = i = ""), this
                },
                locked: function() {
                    return !!o
                },
                fireWith: function(t, i) {
                    return o || (i = i || [], i = [t, i.slice ? i.slice() : i], a.push(i), e || u()), this
                },
                fire: function() {
                    return c.fireWith(this, arguments), this
                },
                fired: function() {
                    return !!n
                }
            };
        return c
    }, st.extend({
        Deferred: function(t) {
            var e = [
                    ["resolve", "done", st.Callbacks("once memory"), "resolved"],
                    ["reject", "fail", st.Callbacks("once memory"), "rejected"],
                    ["notify", "progress", st.Callbacks("memory")]
                ],
                i = "pending",
                n = {
                    state: function() {
                        return i
                    },
                    always: function() {
                        return o.done(arguments).fail(arguments), this
                    },
                    then: function() {
                        var t = arguments;
                        return st.Deferred(function(i) {
                            st.each(e, function(e, s) {
                                var r = st.isFunction(t[e]) && t[e];
                                o[s[1]](function() {
                                    var t = r && r.apply(this, arguments);
                                    t && st.isFunction(t.promise) ? t.promise().progress(i.notify).done(i.resolve).fail(i.reject) : i[s[0] + "With"](this === n ? i.promise() : this, r ? [t] : arguments)
                                })
                            }), t = null
                        }).promise()
                    },
                    promise: function(t) {
                        return null != t ? st.extend(t, n) : n
                    }
                },
                o = {};
            return n.pipe = n.then, st.each(e, function(t, s) {
                var r = s[2],
                    a = s[3];
                n[s[1]] = r.add, a && r.add(function() {
                    i = a
                }, e[1 ^ t][2].disable, e[2][2].lock), o[s[0]] = function() {
                    return o[s[0] + "With"](this === o ? n : this, arguments), this
                }, o[s[0] + "With"] = r.fireWith
            }), n.promise(o), t && t.call(o, o), o
        },
        when: function(t) {
            var e, i, n, o = 0,
                s = Q.call(arguments),
                r = s.length,
                a = 1 !== r || t && st.isFunction(t.promise) ? r : 0,
                l = 1 === a ? t : st.Deferred(),
                u = function(t, i, n) {
                    return function(o) {
                        i[t] = this, n[t] = arguments.length > 1 ? Q.call(arguments) : o, n === e ? l.notifyWith(i, n) : --a || l.resolveWith(i, n)
                    }
                };
            if (r > 1)
                for (e = new Array(r), i = new Array(r), n = new Array(r); o < r; o++) s[o] && st.isFunction(s[o].promise) ? s[o].promise().progress(u(o, i, e)).done(u(o, n, s)).fail(l.reject) : --a;
            return a || l.resolveWith(n, s), l.promise()
        }
    });
    var Ct;
    st.fn.ready = function(t) {
        return st.ready.promise().done(t), this
    }, st.extend({
        isReady: !1,
        readyWait: 1,
        holdReady: function(t) {
            t ? st.readyWait++ : st.ready(!0)
        },
        ready: function(t) {
            (t === !0 ? --st.readyWait : st.isReady) || (st.isReady = !0, t !== !0 && --st.readyWait > 0 || (Ct.resolveWith(Y, [st]), st.fn.triggerHandler && (st(Y).triggerHandler("ready"), st(Y).off("ready"))))
        }
    }), st.ready.promise = function(e) {
        return Ct || (Ct = st.Deferred(), "complete" === Y.readyState || "loading" !== Y.readyState && !Y.documentElement.doScroll ? t.setTimeout(st.ready) : (Y.addEventListener("DOMContentLoaded", r), t.addEventListener("load", r))), Ct.promise(e)
    }, st.ready.promise();
    var xt = function We(t, e, i, n, o, s, r) {
            var a = 0,
                l = t.length,
                u = null == i;
            if ("object" === st.type(i)) {
                o = !0;
                for (a in i) We(t, e, a, i[a], !0, s, r)
            } else if (void 0 !== n && (o = !0, st.isFunction(n) || (r = !0), u && (r ? (e.call(t, n), e = null) : (u = e, e = function(t, e, i) {
                    return u.call(st(t), i)
                })), e))
                for (; a < l; a++) e(t[a], i, r ? n : n.call(t[a], a, e(t[a], i)));
            return o ? t : u ? e.call(t) : l ? e(t[0], i) : s
        },
        kt = function(t) {
            return 1 === t.nodeType || 9 === t.nodeType || !+t.nodeType
        };
    a.uid = 1, a.prototype = {
        register: function(t, e) {
            var i = e || {};
            return t.nodeType ? t[this.expando] = i : Object.defineProperty(t, this.expando, {
                value: i,
                writable: !0,
                configurable: !0
            }), t[this.expando]
        },
        cache: function(t) {
            if (!kt(t)) return {};
            var e = t[this.expando];
            return e || (e = {}, kt(t) && (t.nodeType ? t[this.expando] = e : Object.defineProperty(t, this.expando, {
                value: e,
                configurable: !0
            }))), e
        },
        set: function(t, e, i) {
            var n, o = this.cache(t);
            if ("string" == typeof e) o[e] = i;
            else
                for (n in e) o[n] = e[n];
            return o
        },
        get: function(t, e) {
            return void 0 === e ? this.cache(t) : t[this.expando] && t[this.expando][e]
        },
        access: function(t, e, i) {
            var n;
            return void 0 === e || e && "string" == typeof e && void 0 === i ? (n = this.get(t, e), void 0 !== n ? n : this.get(t, st.camelCase(e))) : (this.set(t, e, i), void 0 !== i ? i : e)
        },
        remove: function(t, e) {
            var i, n, o, s = t[this.expando];
            if (void 0 !== s) {
                if (void 0 === e) this.register(t);
                else {
                    st.isArray(e) ? n = e.concat(e.map(st.camelCase)) : (o = st.camelCase(e), e in s ? n = [e, o] : (n = o, n = n in s ? [n] : n.match(wt) || [])), i = n.length;
                    for (; i--;) delete s[n[i]]
                }(void 0 === e || st.isEmptyObject(s)) && (t.nodeType ? t[this.expando] = void 0 : delete t[this.expando])
            }
        },
        hasData: function(t) {
            var e = t[this.expando];
            return void 0 !== e && !st.isEmptyObject(e)
        }
    };
    var $t = new a,
        Tt = new a,
        Ft = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        Dt = /[A-Z]/g;
    st.extend({
        hasData: function(t) {
            return Tt.hasData(t) || $t.hasData(t)
        },
        data: function(t, e, i) {
            return Tt.access(t, e, i)
        },
        removeData: function(t, e) {
            Tt.remove(t, e)
        },
        _data: function(t, e, i) {
            return $t.access(t, e, i)
        },
        _removeData: function(t, e) {
            $t.remove(t, e)
        }
    }), st.fn.extend({
        data: function Ue(t, e) {
            var i, n, Ue, o = this[0],
                s = o && o.attributes;
            if (void 0 === t) {
                if (this.length && (Ue = Tt.get(o), 1 === o.nodeType && !$t.get(o, "hasDataAttrs"))) {
                    for (i = s.length; i--;) s[i] && (n = s[i].name, 0 === n.indexOf("data-") && (n = st.camelCase(n.slice(5)), l(o, n, Ue[n])));
                    $t.set(o, "hasDataAttrs", !0)
                }
                return Ue
            }
            return "object" === ("undefined" == typeof t ? "undefined" : _typeof(t)) ? this.each(function() {
                Tt.set(this, t)
            }) : xt(this, function(e) {
                var i, n;
                if (o && void 0 === e) {
                    if (i = Tt.get(o, t) || Tt.get(o, t.replace(Dt, "-$&").toLowerCase()), void 0 !== i) return i;
                    if (n = st.camelCase(t), i = Tt.get(o, n), void 0 !== i) return i;
                    if (i = l(o, n, void 0), void 0 !== i) return i
                } else n = st.camelCase(t), this.each(function() {
                    var i = Tt.get(this, n);
                    Tt.set(this, n, e), t.indexOf("-") > -1 && void 0 !== i && Tt.set(this, t, e)
                })
            }, null, e, arguments.length > 1, null, !0)
        },
        removeData: function(t) {
            return this.each(function() {
                Tt.remove(this, t)
            })
        }
    }), st.extend({
        queue: function Ge(t, e, i) {
            var Ge;
            if (t) return e = (e || "fx") + "queue", Ge = $t.get(t, e), i && (!Ge || st.isArray(i) ? Ge = $t.access(t, e, st.makeArray(i)) : Ge.push(i)), Ge || []
        },
        dequeue: function(t, e) {
            e = e || "fx";
            var i = st.queue(t, e),
                n = i.length,
                o = i.shift(),
                s = st._queueHooks(t, e),
                r = function() {
                    st.dequeue(t, e)
                };
            "inprogress" === o && (o = i.shift(), n--), o && ("fx" === e && i.unshift("inprogress"), delete s.stop, o.call(t, r, s)), !n && s && s.empty.fire()
        },
        _queueHooks: function(t, e) {
            var i = e + "queueHooks";
            return $t.get(t, i) || $t.access(t, i, {
                empty: st.Callbacks("once memory").add(function() {
                    $t.remove(t, [e + "queue", i])
                })
            })
        }
    }), st.fn.extend({
        queue: function(t, e) {
            var i = 2;
            return "string" != typeof t && (e = t, t = "fx", i--), arguments.length < i ? st.queue(this[0], t) : void 0 === e ? this : this.each(function() {
                var i = st.queue(this, t, e);
                st._queueHooks(this, t), "fx" === t && "inprogress" !== i[0] && st.dequeue(this, t)
            })
        },
        dequeue: function(t) {
            return this.each(function() {
                st.dequeue(this, t)
            })
        },
        clearQueue: function(t) {
            return this.queue(t || "fx", [])
        },
        promise: function(t, e) {
            var i, n = 1,
                o = st.Deferred(),
                s = this,
                r = this.length,
                a = function() {
                    --n || o.resolveWith(s, [s])
                };
            for ("string" != typeof t && (e = t, t = void 0), t = t || "fx"; r--;) i = $t.get(s[r], t + "queueHooks"), i && i.empty && (n++, i.empty.add(a));
            return a(), o.promise(e)
        }
    });
    var St = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        Et = new RegExp("^(?:([+-])=|)(" + St + ")([a-z%]*)$", "i"),
        zt = ["Top", "Right", "Bottom", "Left"],
        At = function(t, e) {
            return t = e || t, "none" === st.css(t, "display") || !st.contains(t.ownerDocument, t)
        },
        Pt = /^(?:checkbox|radio)$/i,
        Mt = /<([\w:-]+)/,
        It = /^$|\/(?:java|ecma)script/i,
        Ot = {
            option: [1, "<select multiple='multiple'>", "</select>"],
            thead: [1, "<table>", "</table>"],
            col: [2, "<table><colgroup>", "</colgroup></table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
            _default: [0, "", ""]
        };
    Ot.optgroup = Ot.option, Ot.tbody = Ot.tfoot = Ot.colgroup = Ot.caption = Ot.thead, Ot.th = Ot.td;
    var Nt = /<|&#?\w+;/;
    ! function() {
        var t = Y.createDocumentFragment(),
            e = t.appendChild(Y.createElement("div")),
            i = Y.createElement("input");
        i.setAttribute("type", "radio"), i.setAttribute("checked", "checked"), i.setAttribute("name", "t"), e.appendChild(i), nt.checkClone = e.cloneNode(!0).cloneNode(!0).lastChild.checked, e.innerHTML = "<textarea>x</textarea>", nt.noCloneChecked = !!e.cloneNode(!0).lastChild.defaultValue
    }();
    var Lt = /^key/,
        jt = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
        qt = /^([^.]*)(?:\.(.+)|)/;
    st.event = {
        global: {},
        add: function(t, e, i, n, o) {
            var s, r, a, l, u, c, h, d, f, p, g, m = $t.get(t);
            if (m)
                for (i.handler && (s = i, i = s.handler, o = s.selector), i.guid || (i.guid = st.guid++), (l = m.events) || (l = m.events = {}), (r = m.handle) || (r = m.handle = function(e) {
                        return "undefined" != typeof st && st.event.triggered !== e.type ? st.event.dispatch.apply(t, arguments) : void 0
                    }), e = (e || "").match(wt) || [""], u = e.length; u--;) a = qt.exec(e[u]) || [], f = g = a[1], p = (a[2] || "").split(".").sort(), f && (h = st.event.special[f] || {}, f = (o ? h.delegateType : h.bindType) || f, h = st.event.special[f] || {}, c = st.extend({
                    type: f,
                    origType: g,
                    data: n,
                    handler: i,
                    guid: i.guid,
                    selector: o,
                    needsContext: o && st.expr.match.needsContext.test(o),
                    namespace: p.join(".")
                }, s), (d = l[f]) || (d = l[f] = [], d.delegateCount = 0, h.setup && h.setup.call(t, n, p, r) !== !1 || t.addEventListener && t.addEventListener(f, r)), h.add && (h.add.call(t, c), c.handler.guid || (c.handler.guid = i.guid)), o ? d.splice(d.delegateCount++, 0, c) : d.push(c), st.event.global[f] = !0)
        },
        remove: function(t, e, i, n, o) {
            var s, r, a, l, u, c, h, d, f, p, g, m = $t.hasData(t) && $t.get(t);
            if (m && (l = m.events)) {
                for (e = (e || "").match(wt) || [""], u = e.length; u--;)
                    if (a = qt.exec(e[u]) || [], f = g = a[1], p = (a[2] || "").split(".").sort(), f) {
                        for (h = st.event.special[f] || {}, f = (n ? h.delegateType : h.bindType) || f, d = l[f] || [], a = a[2] && new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)"), r = s = d.length; s--;) c = d[s], !o && g !== c.origType || i && i.guid !== c.guid || a && !a.test(c.namespace) || n && n !== c.selector && ("**" !== n || !c.selector) || (d.splice(s, 1), c.selector && d.delegateCount--, h.remove && h.remove.call(t, c));
                        r && !d.length && (h.teardown && h.teardown.call(t, p, m.handle) !== !1 || st.removeEvent(t, f, m.handle), delete l[f])
                    } else
                        for (f in l) st.event.remove(t, f + e[u], i, n, !0);
                st.isEmptyObject(l) && $t.remove(t, "handle events")
            }
        },
        dispatch: function(t) {
            t = st.event.fix(t);
            var e, i, n, o, s, r = [],
                a = Q.call(arguments),
                l = ($t.get(this, "events") || {})[t.type] || [],
                u = st.event.special[t.type] || {};
            if (a[0] = t, t.delegateTarget = this, !u.preDispatch || u.preDispatch.call(this, t) !== !1) {
                for (r = st.event.handlers.call(this, t, l), e = 0;
                    (o = r[e++]) && !t.isPropagationStopped();)
                    for (t.currentTarget = o.elem, i = 0;
                        (s = o.handlers[i++]) && !t.isImmediatePropagationStopped();) t.rnamespace && !t.rnamespace.test(s.namespace) || (t.handleObj = s, t.data = s.data, n = ((st.event.special[s.origType] || {}).handle || s.handler).apply(o.elem, a), void 0 !== n && (t.result = n) === !1 && (t.preventDefault(), t.stopPropagation()));
                return u.postDispatch && u.postDispatch.call(this, t), t.result
            }
        },
        handlers: function(t, e) {
            var i, n, o, s, r = [],
                a = e.delegateCount,
                l = t.target;
            if (a && l.nodeType && ("click" !== t.type || isNaN(t.button) || t.button < 1))
                for (; l !== this; l = l.parentNode || this)
                    if (1 === l.nodeType && (l.disabled !== !0 || "click" !== t.type)) {
                        for (n = [], i = 0; i < a; i++) s = e[i], o = s.selector + " ", void 0 === n[o] && (n[o] = s.needsContext ? st(o, this).index(l) > -1 : st.find(o, this, null, [l]).length), n[o] && n.push(s);
                        n.length && r.push({
                            elem: l,
                            handlers: n
                        })
                    }
            return a < e.length && r.push({
                elem: this,
                handlers: e.slice(a)
            }), r
        },
        props: "altKey bubbles cancelable ctrlKey currentTarget detail eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
        fixHooks: {},
        keyHooks: {
            props: "char charCode key keyCode".split(" "),
            filter: function(t, e) {
                return null == t.which && (t.which = null != e.charCode ? e.charCode : e.keyCode), t
            }
        },
        mouseHooks: {
            props: "button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
            filter: function(t, e) {
                var i, n, o, s = e.button;
                return null == t.pageX && null != e.clientX && (i = t.target.ownerDocument || Y, n = i.documentElement, o = i.body, t.pageX = e.clientX + (n && n.scrollLeft || o && o.scrollLeft || 0) - (n && n.clientLeft || o && o.clientLeft || 0), t.pageY = e.clientY + (n && n.scrollTop || o && o.scrollTop || 0) - (n && n.clientTop || o && o.clientTop || 0)), t.which || void 0 === s || (t.which = 1 & s ? 1 : 2 & s ? 3 : 4 & s ? 2 : 0), t
            }
        },
        fix: function(t) {
            if (t[st.expando]) return t;
            var e, i, n, o = t.type,
                s = t,
                r = this.fixHooks[o];
            for (r || (this.fixHooks[o] = r = jt.test(o) ? this.mouseHooks : Lt.test(o) ? this.keyHooks : {}), n = r.props ? this.props.concat(r.props) : this.props, t = new st.Event(s), e = n.length; e--;) i = n[e], t[i] = s[i];
            return t.target || (t.target = Y), 3 === t.target.nodeType && (t.target = t.target.parentNode), r.filter ? r.filter(t, s) : t
        },
        special: {
            load: {
                noBubble: !0
            },
            focus: {
                trigger: function() {
                    if (this !== g() && this.focus) return this.focus(), !1
                },
                delegateType: "focusin"
            },
            blur: {
                trigger: function() {
                    if (this === g() && this.blur) return this.blur(), !1
                },
                delegateType: "focusout"
            },
            click: {
                trigger: function() {
                    if ("checkbox" === this.type && this.click && st.nodeName(this, "input")) return this.click(), !1
                },
                _default: function(t) {
                    return st.nodeName(t.target, "a")
                }
            },
            beforeunload: {
                postDispatch: function(t) {
                    void 0 !== t.result && t.originalEvent && (t.originalEvent.returnValue = t.result)
                }
            }
        }
    }, st.removeEvent = function(t, e, i) {
        t.removeEventListener && t.removeEventListener(e, i)
    }, st.Event = function(t, e) {
        return this instanceof st.Event ? (t && t.type ? (this.originalEvent = t, this.type = t.type, this.isDefaultPrevented = t.defaultPrevented || void 0 === t.defaultPrevented && t.returnValue === !1 ? f : p) : this.type = t, e && st.extend(this, e), this.timeStamp = t && t.timeStamp || st.now(), void(this[st.expando] = !0)) : new st.Event(t, e)
    }, st.Event.prototype = {
        constructor: st.Event,
        isDefaultPrevented: p,
        isPropagationStopped: p,
        isImmediatePropagationStopped: p,
        isSimulated: !1,
        preventDefault: function() {
            var t = this.originalEvent;
            this.isDefaultPrevented = f, t && !this.isSimulated && t.preventDefault()
        },
        stopPropagation: function() {
            var t = this.originalEvent;
            this.isPropagationStopped = f, t && !this.isSimulated && t.stopPropagation()
        },
        stopImmediatePropagation: function() {
            var t = this.originalEvent;
            this.isImmediatePropagationStopped = f, t && !this.isSimulated && t.stopImmediatePropagation(), this.stopPropagation()
        }
    }, st.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function(t, e) {
        st.event.special[t] = {
            delegateType: e,
            bindType: e,
            handle: function(t) {
                var i, n = this,
                    o = t.relatedTarget,
                    s = t.handleObj;
                return o && (o === n || st.contains(n, o)) || (t.type = s.origType, i = s.handler.apply(this, arguments), t.type = e), i
            }
        }
    }), st.fn.extend({
        on: function(t, e, i, n) {
            return m(this, t, e, i, n)
        },
        one: function(t, e, i, n) {
            return m(this, t, e, i, n, 1)
        },
        off: function(t, e, i) {
            var n, o;
            if (t && t.preventDefault && t.handleObj) return n = t.handleObj, st(t.delegateTarget).off(n.namespace ? n.origType + "." + n.namespace : n.origType, n.selector, n.handler), this;
            if ("object" === ("undefined" == typeof t ? "undefined" : _typeof(t))) {
                for (o in t) this.off(o, e, t[o]);
                return this
            }
            return e !== !1 && "function" != typeof e || (i = e, e = void 0), i === !1 && (i = p), this.each(function() {
                st.event.remove(this, t, i, e)
            })
        }
    });
    var Rt = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:-]+)[^>]*)\/>/gi,
        Ht = /<script|<style|<link/i,
        Bt = /checked\s*(?:[^=]|=\s*.checked.)/i,
        Wt = /^true\/(.*)/,
        Ut = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;
    st.extend({
        htmlPrefilter: function(t) {
            return t.replace(Rt, "<$1></$2>")
        },
        clone: function Ke(t, e, i) {
            var n, o, s, r, Ke = t.cloneNode(!0),
                a = st.contains(t.ownerDocument, t);
            if (!(nt.noCloneChecked || 1 !== t.nodeType && 11 !== t.nodeType || st.isXMLDoc(t)))
                for (r = c(Ke), s = c(t), n = 0, o = s.length; n < o; n++) w(s[n], r[n]);
            if (e)
                if (i)
                    for (s = s || c(t), r = r || c(Ke), n = 0, o = s.length; n < o; n++) b(s[n], r[n]);
                else b(t, Ke);
            return r = c(Ke, "script"), r.length > 0 && h(r, !a && c(t, "script")), Ke
        },
        cleanData: function(t) {
            for (var e, i, n, o = st.event.special, s = 0; void 0 !== (i = t[s]); s++)
                if (kt(i)) {
                    if (e = i[$t.expando]) {
                        if (e.events)
                            for (n in e.events) o[n] ? st.event.remove(i, n) : st.removeEvent(i, n, e.handle);
                        i[$t.expando] = void 0
                    }
                    i[Tt.expando] && (i[Tt.expando] = void 0)
                }
        }
    }), st.fn.extend({
        domManip: C,
        detach: function(t) {
            return x(this, t, !0)
        },
        remove: function(t) {
            return x(this, t)
        },
        text: function(t) {
            return xt(this, function(t) {
                return void 0 === t ? st.text(this) : this.empty().each(function() {
                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = t)
                })
            }, null, t, arguments.length)
        },
        append: function() {
            return C(this, arguments, function(t) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var e = v(this, t);
                    e.appendChild(t)
                }
            })
        },
        prepend: function() {
            return C(this, arguments, function(t) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var e = v(this, t);
                    e.insertBefore(t, e.firstChild)
                }
            })
        },
        before: function() {
            return C(this, arguments, function(t) {
                this.parentNode && this.parentNode.insertBefore(t, this)
            })
        },
        after: function() {
            return C(this, arguments, function(t) {
                this.parentNode && this.parentNode.insertBefore(t, this.nextSibling)
            })
        },
        empty: function() {
            for (var t, e = 0; null != (t = this[e]); e++) 1 === t.nodeType && (st.cleanData(c(t, !1)), t.textContent = "");
            return this
        },
        clone: function(t, e) {
            return t = null != t && t, e = null == e ? t : e, this.map(function() {
                return st.clone(this, t, e)
            })
        },
        html: function(t) {
            return xt(this, function(t) {
                var e = this[0] || {},
                    i = 0,
                    n = this.length;
                if (void 0 === t && 1 === e.nodeType) return e.innerHTML;
                if ("string" == typeof t && !Ht.test(t) && !Ot[(Mt.exec(t) || ["", ""])[1].toLowerCase()]) {
                    t = st.htmlPrefilter(t);
                    try {
                        for (; i < n; i++) e = this[i] || {}, 1 === e.nodeType && (st.cleanData(c(e, !1)), e.innerHTML = t);
                        e = 0
                    } catch (o) {}
                }
                e && this.empty().append(t)
            }, null, t, arguments.length)
        },
        replaceWith: function() {
            var t = [];
            return C(this, arguments, function(e) {
                var i = this.parentNode;
                st.inArray(this, t) < 0 && (st.cleanData(c(this)), i && i.replaceChild(e, this))
            }, t)
        }
    }), st.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function(t, e) {
        st.fn[t] = function(t) {
            for (var i, n = [], o = st(t), s = o.length - 1, r = 0; r <= s; r++) i = r === s ? this : this.clone(!0), st(o[r])[e](i), X.apply(n, i.get());
            return this.pushStack(n)
        }
    });
    var Gt, Kt = {
            HTML: "block",
            BODY: "block"
        },
        Vt = /^margin/,
        Yt = new RegExp("^(" + St + ")(?!px)[a-z%]+$", "i"),
        Qt = function(e) {
            var i = e.ownerDocument.defaultView;
            return i && i.opener || (i = t), i.getComputedStyle(e)
        },
        Zt = function(t, e, i, n) {
            var o, s, r = {};
            for (s in e) r[s] = t.style[s], t.style[s] = e[s];
            o = i.apply(t, n || []);
            for (s in e) t.style[s] = r[s];
            return o
        },
        Xt = Y.documentElement;
    ! function() {
        function e() {
            a.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%", a.innerHTML = "", Xt.appendChild(r);
            var e = t.getComputedStyle(a);
            i = "1%" !== e.top, s = "2px" === e.marginLeft, n = "4px" === e.width, a.style.marginRight = "50%", o = "4px" === e.marginRight, Xt.removeChild(r)
        }
        var i, n, o, s, r = Y.createElement("div"),
            a = Y.createElement("div");
        a.style && (a.style.backgroundClip = "content-box", a.cloneNode(!0).style.backgroundClip = "", nt.clearCloneStyle = "content-box" === a.style.backgroundClip, r.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute", r.appendChild(a), st.extend(nt, {
            pixelPosition: function() {
                return e(), i
            },
            boxSizingReliable: function() {
                return null == n && e(), n
            },
            pixelMarginRight: function() {
                return null == n && e(), o
            },
            reliableMarginLeft: function() {
                return null == n && e(), s
            },
            reliableMarginRight: function() {
                var e, i = a.appendChild(Y.createElement("div"));
                return i.style.cssText = a.style.cssText = "-webkit-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", i.style.marginRight = i.style.width = "0", a.style.width = "1px", Xt.appendChild(r), e = !parseFloat(t.getComputedStyle(i).marginRight), Xt.removeChild(r), a.removeChild(i), e
            }
        }))
    }();
    var Jt = /^(none|table(?!-c[ea]).+)/,
        te = {
            position: "absolute",
            visibility: "hidden",
            display: "block"
        },
        ee = {
            letterSpacing: "0",
            fontWeight: "400"
        },
        ie = ["Webkit", "O", "Moz", "ms"],
        ne = Y.createElement("div").style;
    st.extend({
        cssHooks: {
            opacity: {
                get: function(t, e) {
                    if (e) {
                        var i = T(t, "opacity");
                        return "" === i ? "1" : i
                    }
                }
            }
        },
        cssNumber: {
            animationIterationCount: !0,
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {
            "float": "cssFloat"
        },
        style: function Ve(t, e, i, n) {
            if (t && 3 !== t.nodeType && 8 !== t.nodeType && t.style) {
                var o, s, r, a = st.camelCase(e),
                    Ve = t.style;
                return e = st.cssProps[a] || (st.cssProps[a] = D(a) || a), r = st.cssHooks[e] || st.cssHooks[a], void 0 === i ? r && "get" in r && void 0 !== (o = r.get(t, !1, n)) ? o : Ve[e] : (s = "undefined" == typeof i ? "undefined" : _typeof(i), "string" === s && (o = Et.exec(i)) && o[1] && (i = u(t, e, o), s = "number"), null != i && i === i && ("number" === s && (i += o && o[3] || (st.cssNumber[a] ? "" : "px")), nt.clearCloneStyle || "" !== i || 0 !== e.indexOf("background") || (Ve[e] = "inherit"), r && "set" in r && void 0 === (i = r.set(t, i, n)) || (Ve[e] = i)), void 0)
            }
        },
        css: function(t, e, i, n) {
            var o, s, r, a = st.camelCase(e);
            return e = st.cssProps[a] || (st.cssProps[a] = D(a) || a), r = st.cssHooks[e] || st.cssHooks[a], r && "get" in r && (o = r.get(t, !0, i)), void 0 === o && (o = T(t, e, n)), "normal" === o && e in ee && (o = ee[e]), "" === i || i ? (s = parseFloat(o), i === !0 || isFinite(s) ? s || 0 : o) : o
        }
    }), st.each(["height", "width"], function(t, e) {
        st.cssHooks[e] = {
            get: function(t, i, n) {
                if (i) return Jt.test(st.css(t, "display")) && 0 === t.offsetWidth ? Zt(t, te, function() {
                    return z(t, e, n)
                }) : z(t, e, n)
            },
            set: function(t, i, n) {
                var o, s = n && Qt(t),
                    r = n && E(t, e, n, "border-box" === st.css(t, "boxSizing", !1, s), s);
                return r && (o = Et.exec(i)) && "px" !== (o[3] || "px") && (t.style[e] = i, i = st.css(t, e)), S(t, i, r)
            }
        }
    }), st.cssHooks.marginLeft = F(nt.reliableMarginLeft, function(t, e) {
        if (e) return (parseFloat(T(t, "marginLeft")) || t.getBoundingClientRect().left - Zt(t, {
            marginLeft: 0
        }, function() {
            return t.getBoundingClientRect().left
        })) + "px"
    }), st.cssHooks.marginRight = F(nt.reliableMarginRight, function(t, e) {
        if (e) return Zt(t, {
            display: "inline-block"
        }, T, [t, "marginRight"])
    }), st.each({
        margin: "",
        padding: "",
        border: "Width"
    }, function(t, e) {
        st.cssHooks[t + e] = {
            expand: function(i) {
                for (var n = 0, o = {}, s = "string" == typeof i ? i.split(" ") : [i]; n < 4; n++) o[t + zt[n] + e] = s[n] || s[n - 2] || s[0];
                return o
            }
        }, Vt.test(t) || (st.cssHooks[t + e].set = S)
    }), st.fn.extend({
        css: function(t, e) {
            return xt(this, function(t, e, i) {
                var n, o, s = {},
                    r = 0;
                if (st.isArray(e)) {
                    for (n = Qt(t), o = e.length; r < o; r++) s[e[r]] = st.css(t, e[r], !1, n);
                    return s
                }
                return void 0 !== i ? st.style(t, e, i) : st.css(t, e)
            }, t, e, arguments.length > 1)
        },
        show: function() {
            return A(this, !0)
        },
        hide: function() {
            return A(this)
        },
        toggle: function(t) {
            return "boolean" == typeof t ? t ? this.show() : this.hide() : this.each(function() {
                At(this) ? st(this).show() : st(this).hide()
            })
        }
    }), st.Tween = P, P.prototype = {
        constructor: P,
        init: function(t, e, i, n, o, s) {
            this.elem = t, this.prop = i, this.easing = o || st.easing._default, this.options = e, this.start = this.now = this.cur(), this.end = n, this.unit = s || (st.cssNumber[i] ? "" : "px")
        },
        cur: function() {
            var t = P.propHooks[this.prop];
            return t && t.get ? t.get(this) : P.propHooks._default.get(this)
        },
        run: function(t) {
            var e, i = P.propHooks[this.prop];
            return this.options.duration ? this.pos = e = st.easing[this.easing](t, this.options.duration * t, 0, 1, this.options.duration) : this.pos = e = t, this.now = (this.end - this.start) * e + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), i && i.set ? i.set(this) : P.propHooks._default.set(this), this
        }
    }, P.prototype.init.prototype = P.prototype, P.propHooks = {
        _default: {
            get: function(t) {
                var e;
                return 1 !== t.elem.nodeType || null != t.elem[t.prop] && null == t.elem.style[t.prop] ? t.elem[t.prop] : (e = st.css(t.elem, t.prop, ""), e && "auto" !== e ? e : 0)
            },
            set: function(t) {
                st.fx.step[t.prop] ? st.fx.step[t.prop](t) : 1 !== t.elem.nodeType || null == t.elem.style[st.cssProps[t.prop]] && !st.cssHooks[t.prop] ? t.elem[t.prop] = t.now : st.style(t.elem, t.prop, t.now + t.unit)
            }
        }
    }, P.propHooks.scrollTop = P.propHooks.scrollLeft = {
        set: function(t) {
            t.elem.nodeType && t.elem.parentNode && (t.elem[t.prop] = t.now)
        }
    }, st.easing = {
        linear: function(t) {
            return t
        },
        swing: function(t) {
            return .5 - Math.cos(t * Math.PI) / 2
        },
        _default: "swing"
    }, st.fx = P.prototype.init, st.fx.step = {};
    var oe, se, re = /^(?:toggle|show|hide)$/,
        ae = /queueHooks$/;
    st.Animation = st.extend(j, {
            tweeners: {
                "*": [function(t, e) {
                    var i = this.createTween(t, e);
                    return u(i.elem, t, Et.exec(e), i), i
                }]
            },
            tweener: function(t, e) {
                st.isFunction(t) ? (e = t, t = ["*"]) : t = t.match(wt);
                for (var i, n = 0, o = t.length; n < o; n++) i = t[n], j.tweeners[i] = j.tweeners[i] || [], j.tweeners[i].unshift(e)
            },
            prefilters: [N],
            prefilter: function(t, e) {
                e ? j.prefilters.unshift(t) : j.prefilters.push(t)
            }
        }), st.speed = function(t, e, i) {
            var n = t && "object" === ("undefined" == typeof t ? "undefined" : _typeof(t)) ? st.extend({}, t) : {
                complete: i || !i && e || st.isFunction(t) && t,
                duration: t,
                easing: i && e || e && !st.isFunction(e) && e
            };
            return n.duration = st.fx.off ? 0 : "number" == typeof n.duration ? n.duration : n.duration in st.fx.speeds ? st.fx.speeds[n.duration] : st.fx.speeds._default,
                null != n.queue && n.queue !== !0 || (n.queue = "fx"), n.old = n.complete, n.complete = function() {
                    st.isFunction(n.old) && n.old.call(this), n.queue && st.dequeue(this, n.queue)
                }, n
        }, st.fn.extend({
            fadeTo: function(t, e, i, n) {
                return this.filter(At).css("opacity", 0).show().end().animate({
                    opacity: e
                }, t, i, n)
            },
            animate: function(t, e, i, n) {
                var o = st.isEmptyObject(t),
                    s = st.speed(e, i, n),
                    r = function() {
                        var e = j(this, st.extend({}, t), s);
                        (o || $t.get(this, "finish")) && e.stop(!0)
                    };
                return r.finish = r, o || s.queue === !1 ? this.each(r) : this.queue(s.queue, r)
            },
            stop: function(t, e, i) {
                var n = function(t) {
                    var e = t.stop;
                    delete t.stop, e(i)
                };
                return "string" != typeof t && (i = e, e = t, t = void 0), e && t !== !1 && this.queue(t || "fx", []), this.each(function() {
                    var e = !0,
                        o = null != t && t + "queueHooks",
                        s = st.timers,
                        r = $t.get(this);
                    if (o) r[o] && r[o].stop && n(r[o]);
                    else
                        for (o in r) r[o] && r[o].stop && ae.test(o) && n(r[o]);
                    for (o = s.length; o--;) s[o].elem !== this || null != t && s[o].queue !== t || (s[o].anim.stop(i), e = !1, s.splice(o, 1));
                    !e && i || st.dequeue(this, t)
                })
            },
            finish: function(t) {
                return t !== !1 && (t = t || "fx"), this.each(function() {
                    var e, i = $t.get(this),
                        n = i[t + "queue"],
                        o = i[t + "queueHooks"],
                        s = st.timers,
                        r = n ? n.length : 0;
                    for (i.finish = !0, st.queue(this, t, []), o && o.stop && o.stop.call(this, !0), e = s.length; e--;) s[e].elem === this && s[e].queue === t && (s[e].anim.stop(!0), s.splice(e, 1));
                    for (e = 0; e < r; e++) n[e] && n[e].finish && n[e].finish.call(this);
                    delete i.finish
                })
            }
        }), st.each(["toggle", "show", "hide"], function(t, e) {
            var i = st.fn[e];
            st.fn[e] = function(t, n, o) {
                return null == t || "boolean" == typeof t ? i.apply(this, arguments) : this.animate(I(e, !0), t, n, o)
            }
        }), st.each({
            slideDown: I("show"),
            slideUp: I("hide"),
            slideToggle: I("toggle"),
            fadeIn: {
                opacity: "show"
            },
            fadeOut: {
                opacity: "hide"
            },
            fadeToggle: {
                opacity: "toggle"
            }
        }, function(t, e) {
            st.fn[t] = function(t, i, n) {
                return this.animate(e, t, i, n)
            }
        }), st.timers = [], st.fx.tick = function() {
            var t, e = 0,
                i = st.timers;
            for (oe = st.now(); e < i.length; e++) t = i[e], t() || i[e] !== t || i.splice(e--, 1);
            i.length || st.fx.stop(), oe = void 0
        }, st.fx.timer = function(t) {
            st.timers.push(t), t() ? st.fx.start() : st.timers.pop()
        }, st.fx.interval = 13, st.fx.start = function() {
            se || (se = t.setInterval(st.fx.tick, st.fx.interval))
        }, st.fx.stop = function() {
            t.clearInterval(se), se = null
        }, st.fx.speeds = {
            slow: 600,
            fast: 200,
            _default: 400
        }, st.fn.delay = function(e, i) {
            return e = st.fx ? st.fx.speeds[e] || e : e, i = i || "fx", this.queue(i, function(i, n) {
                var o = t.setTimeout(i, e);
                n.stop = function() {
                    t.clearTimeout(o)
                }
            })
        },
        function() {
            var t = Y.createElement("input"),
                e = Y.createElement("select"),
                i = e.appendChild(Y.createElement("option"));
            t.type = "checkbox", nt.checkOn = "" !== t.value, nt.optSelected = i.selected, e.disabled = !0, nt.optDisabled = !i.disabled, t = Y.createElement("input"), t.value = "t", t.type = "radio", nt.radioValue = "t" === t.value
        }();
    var le, ue = st.expr.attrHandle;
    st.fn.extend({
        attr: function(t, e) {
            return xt(this, st.attr, t, e, arguments.length > 1)
        },
        removeAttr: function(t) {
            return this.each(function() {
                st.removeAttr(this, t)
            })
        }
    }), st.extend({
        attr: function(t, e, i) {
            var n, o, s = t.nodeType;
            if (3 !== s && 8 !== s && 2 !== s) return "undefined" == typeof t.getAttribute ? st.prop(t, e, i) : (1 === s && st.isXMLDoc(t) || (e = e.toLowerCase(), o = st.attrHooks[e] || (st.expr.match.bool.test(e) ? le : void 0)), void 0 !== i ? null === i ? void st.removeAttr(t, e) : o && "set" in o && void 0 !== (n = o.set(t, i, e)) ? n : (t.setAttribute(e, i + ""), i) : o && "get" in o && null !== (n = o.get(t, e)) ? n : (n = st.find.attr(t, e), null == n ? void 0 : n))
        },
        attrHooks: {
            type: {
                set: function(t, e) {
                    if (!nt.radioValue && "radio" === e && st.nodeName(t, "input")) {
                        var i = t.value;
                        return t.setAttribute("type", e), i && (t.value = i), e
                    }
                }
            }
        },
        removeAttr: function(t, e) {
            var i, n, o = 0,
                s = e && e.match(wt);
            if (s && 1 === t.nodeType)
                for (; i = s[o++];) n = st.propFix[i] || i, st.expr.match.bool.test(i) && (t[n] = !1), t.removeAttribute(i)
        }
    }), le = {
        set: function(t, e, i) {
            return e === !1 ? st.removeAttr(t, i) : t.setAttribute(i, i), i
        }
    }, st.each(st.expr.match.bool.source.match(/\w+/g), function(t, e) {
        var i = ue[e] || st.find.attr;
        ue[e] = function(t, e, n) {
            var o, s;
            return n || (s = ue[e], ue[e] = o, o = null != i(t, e, n) ? e.toLowerCase() : null, ue[e] = s), o
        }
    });
    var ce = /^(?:input|select|textarea|button)$/i,
        he = /^(?:a|area)$/i;
    st.fn.extend({
        prop: function(t, e) {
            return xt(this, st.prop, t, e, arguments.length > 1)
        },
        removeProp: function(t) {
            return this.each(function() {
                delete this[st.propFix[t] || t]
            })
        }
    }), st.extend({
        prop: function(t, e, i) {
            var n, o, s = t.nodeType;
            if (3 !== s && 8 !== s && 2 !== s) return 1 === s && st.isXMLDoc(t) || (e = st.propFix[e] || e, o = st.propHooks[e]), void 0 !== i ? o && "set" in o && void 0 !== (n = o.set(t, i, e)) ? n : t[e] = i : o && "get" in o && null !== (n = o.get(t, e)) ? n : t[e]
        },
        propHooks: {
            tabIndex: {
                get: function(t) {
                    var e = st.find.attr(t, "tabindex");
                    return e ? parseInt(e, 10) : ce.test(t.nodeName) || he.test(t.nodeName) && t.href ? 0 : -1
                }
            }
        },
        propFix: {
            "for": "htmlFor",
            "class": "className"
        }
    }), nt.optSelected || (st.propHooks.selected = {
        get: function(t) {
            var e = t.parentNode;
            return e && e.parentNode && e.parentNode.selectedIndex, null
        },
        set: function(t) {
            var e = t.parentNode;
            e && (e.selectedIndex, e.parentNode && e.parentNode.selectedIndex)
        }
    }), st.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
        st.propFix[this.toLowerCase()] = this
    });
    var de = /[\t\r\n\f]/g;
    st.fn.extend({
        addClass: function(t) {
            var e, i, n, o, s, r, a, l = 0;
            if (st.isFunction(t)) return this.each(function(e) {
                st(this).addClass(t.call(this, e, q(this)))
            });
            if ("string" == typeof t && t)
                for (e = t.match(wt) || []; i = this[l++];)
                    if (o = q(i), n = 1 === i.nodeType && (" " + o + " ").replace(de, " ")) {
                        for (r = 0; s = e[r++];) n.indexOf(" " + s + " ") < 0 && (n += s + " ");
                        a = st.trim(n), o !== a && i.setAttribute("class", a)
                    }
            return this
        },
        removeClass: function(t) {
            var e, i, n, o, s, r, a, l = 0;
            if (st.isFunction(t)) return this.each(function(e) {
                st(this).removeClass(t.call(this, e, q(this)))
            });
            if (!arguments.length) return this.attr("class", "");
            if ("string" == typeof t && t)
                for (e = t.match(wt) || []; i = this[l++];)
                    if (o = q(i), n = 1 === i.nodeType && (" " + o + " ").replace(de, " ")) {
                        for (r = 0; s = e[r++];)
                            for (; n.indexOf(" " + s + " ") > -1;) n = n.replace(" " + s + " ", " ");
                        a = st.trim(n), o !== a && i.setAttribute("class", a)
                    }
            return this
        },
        toggleClass: function(t, e) {
            var i = "undefined" == typeof t ? "undefined" : _typeof(t);
            return "boolean" == typeof e && "string" === i ? e ? this.addClass(t) : this.removeClass(t) : st.isFunction(t) ? this.each(function(i) {
                st(this).toggleClass(t.call(this, i, q(this), e), e)
            }) : this.each(function() {
                var e, n, o, s;
                if ("string" === i)
                    for (n = 0, o = st(this), s = t.match(wt) || []; e = s[n++];) o.hasClass(e) ? o.removeClass(e) : o.addClass(e);
                else void 0 !== t && "boolean" !== i || (e = q(this), e && $t.set(this, "__className__", e), this.setAttribute && this.setAttribute("class", e || t === !1 ? "" : $t.get(this, "__className__") || ""))
            })
        },
        hasClass: function(t) {
            var e, i, n = 0;
            for (e = " " + t + " "; i = this[n++];)
                if (1 === i.nodeType && (" " + q(i) + " ").replace(de, " ").indexOf(e) > -1) return !0;
            return !1
        }
    });
    var fe = /\r/g,
        pe = /[\x20\t\r\n\f]+/g;
    st.fn.extend({
        val: function(t) {
            var e, i, n, o = this[0]; {
                if (arguments.length) return n = st.isFunction(t), this.each(function(i) {
                    var o;
                    1 === this.nodeType && (o = n ? t.call(this, i, st(this).val()) : t, null == o ? o = "" : "number" == typeof o ? o += "" : st.isArray(o) && (o = st.map(o, function(t) {
                        return null == t ? "" : t + ""
                    })), e = st.valHooks[this.type] || st.valHooks[this.nodeName.toLowerCase()], e && "set" in e && void 0 !== e.set(this, o, "value") || (this.value = o))
                });
                if (o) return e = st.valHooks[o.type] || st.valHooks[o.nodeName.toLowerCase()], e && "get" in e && void 0 !== (i = e.get(o, "value")) ? i : (i = o.value, "string" == typeof i ? i.replace(fe, "") : null == i ? "" : i)
            }
        }
    }), st.extend({
        valHooks: {
            option: {
                get: function(t) {
                    var e = st.find.attr(t, "value");
                    return null != e ? e : st.trim(st.text(t)).replace(pe, " ")
                }
            },
            select: {
                get: function(t) {
                    for (var e, i, n = t.options, o = t.selectedIndex, s = "select-one" === t.type || o < 0, r = s ? null : [], a = s ? o + 1 : n.length, l = o < 0 ? a : s ? o : 0; l < a; l++)
                        if (i = n[l], (i.selected || l === o) && (nt.optDisabled ? !i.disabled : null === i.getAttribute("disabled")) && (!i.parentNode.disabled || !st.nodeName(i.parentNode, "optgroup"))) {
                            if (e = st(i).val(), s) return e;
                            r.push(e)
                        }
                    return r
                },
                set: function(t, e) {
                    for (var i, n, o = t.options, s = st.makeArray(e), r = o.length; r--;) n = o[r], (n.selected = st.inArray(st.valHooks.option.get(n), s) > -1) && (i = !0);
                    return i || (t.selectedIndex = -1), s
                }
            }
        }
    }), st.each(["radio", "checkbox"], function() {
        st.valHooks[this] = {
            set: function(t, e) {
                if (st.isArray(e)) return t.checked = st.inArray(st(t).val(), e) > -1
            }
        }, nt.checkOn || (st.valHooks[this].get = function(t) {
            return null === t.getAttribute("value") ? "on" : t.value
        })
    });
    var ge = /^(?:focusinfocus|focusoutblur)$/;
    st.extend(st.event, {
        trigger: function(e, i, n, o) {
            var s, r, a, l, u, c, h, d = [n || Y],
                f = it.call(e, "type") ? e.type : e,
                p = it.call(e, "namespace") ? e.namespace.split(".") : [];
            if (r = a = n = n || Y, 3 !== n.nodeType && 8 !== n.nodeType && !ge.test(f + st.event.triggered) && (f.indexOf(".") > -1 && (p = f.split("."), f = p.shift(), p.sort()), u = f.indexOf(":") < 0 && "on" + f, e = e[st.expando] ? e : new st.Event(f, "object" === ("undefined" == typeof e ? "undefined" : _typeof(e)) && e), e.isTrigger = o ? 2 : 3, e.namespace = p.join("."), e.rnamespace = e.namespace ? new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, e.result = void 0, e.target || (e.target = n), i = null == i ? [e] : st.makeArray(i, [e]), h = st.event.special[f] || {}, o || !h.trigger || h.trigger.apply(n, i) !== !1)) {
                if (!o && !h.noBubble && !st.isWindow(n)) {
                    for (l = h.delegateType || f, ge.test(l + f) || (r = r.parentNode); r; r = r.parentNode) d.push(r), a = r;
                    a === (n.ownerDocument || Y) && d.push(a.defaultView || a.parentWindow || t)
                }
                for (s = 0;
                    (r = d[s++]) && !e.isPropagationStopped();) e.type = s > 1 ? l : h.bindType || f, c = ($t.get(r, "events") || {})[e.type] && $t.get(r, "handle"), c && c.apply(r, i), c = u && r[u], c && c.apply && kt(r) && (e.result = c.apply(r, i), e.result === !1 && e.preventDefault());
                return e.type = f, o || e.isDefaultPrevented() || h._default && h._default.apply(d.pop(), i) !== !1 || !kt(n) || u && st.isFunction(n[f]) && !st.isWindow(n) && (a = n[u], a && (n[u] = null), st.event.triggered = f, n[f](), st.event.triggered = void 0, a && (n[u] = a)), e.result
            }
        },
        simulate: function(t, e, i) {
            var n = st.extend(new st.Event, i, {
                type: t,
                isSimulated: !0
            });
            st.event.trigger(n, null, e)
        }
    }), st.fn.extend({
        trigger: function(t, e) {
            return this.each(function() {
                st.event.trigger(t, e, this)
            })
        },
        triggerHandler: function(t, e) {
            var i = this[0];
            if (i) return st.event.trigger(t, e, i, !0)
        }
    }), st.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function(t, e) {
        st.fn[e] = function(t, i) {
            return arguments.length > 0 ? this.on(e, null, t, i) : this.trigger(e)
        }
    }), st.fn.extend({
        hover: function(t, e) {
            return this.mouseenter(t).mouseleave(e || t)
        }
    }), nt.focusin = "onfocusin" in t, nt.focusin || st.each({
        focus: "focusin",
        blur: "focusout"
    }, function(t, e) {
        var i = function(t) {
            st.event.simulate(e, t.target, st.event.fix(t))
        };
        st.event.special[e] = {
            setup: function() {
                var n = this.ownerDocument || this,
                    o = $t.access(n, e);
                o || n.addEventListener(t, i, !0), $t.access(n, e, (o || 0) + 1)
            },
            teardown: function() {
                var n = this.ownerDocument || this,
                    o = $t.access(n, e) - 1;
                o ? $t.access(n, e, o) : (n.removeEventListener(t, i, !0), $t.remove(n, e))
            }
        }
    });
    var me = t.location,
        ve = st.now(),
        ye = /\?/;
    st.parseJSON = function(t) {
        return JSON.parse(t + "")
    }, st.parseXML = function(e) {
        var i;
        if (!e || "string" != typeof e) return null;
        try {
            i = (new t.DOMParser).parseFromString(e, "text/xml")
        } catch (n) {
            i = void 0
        }
        return i && !i.getElementsByTagName("parsererror").length || st.error("Invalid XML: " + e), i
    };
    var _e = /#.*$/,
        be = /([?&])_=[^&]*/,
        we = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        Ce = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
        xe = /^(?:GET|HEAD)$/,
        ke = /^\/\//,
        $e = {},
        Te = {},
        Fe = "*/".concat("*"),
        De = Y.createElement("a");
    De.href = me.href, st.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: me.href,
            type: "GET",
            isLocal: Ce.test(me.protocol),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": Fe,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {
                xml: /\bxml\b/,
                html: /\bhtml/,
                json: /\bjson\b/
            },
            responseFields: {
                xml: "responseXML",
                text: "responseText",
                json: "responseJSON"
            },
            converters: {
                "* text": String,
                "text html": !0,
                "text json": st.parseJSON,
                "text xml": st.parseXML
            },
            flatOptions: {
                url: !0,
                context: !0
            }
        },
        ajaxSetup: function(t, e) {
            return e ? B(B(t, st.ajaxSettings), e) : B(st.ajaxSettings, t)
        },
        ajaxPrefilter: R($e),
        ajaxTransport: R(Te),
        ajax: function(e, i) {
            function n(e, i, n, a) {
                var u, h, y, _, w, x = i;
                2 !== b && (b = 2, l && t.clearTimeout(l), o = void 0, r = a || "", C.readyState = e > 0 ? 4 : 0, u = e >= 200 && e < 300 || 304 === e, n && (_ = W(d, C, n)), _ = U(d, _, C, u), u ? (d.ifModified && (w = C.getResponseHeader("Last-Modified"), w && (st.lastModified[s] = w), w = C.getResponseHeader("etag"), w && (st.etag[s] = w)), 204 === e || "HEAD" === d.type ? x = "nocontent" : 304 === e ? x = "notmodified" : (x = _.state, h = _.data, y = _.error, u = !y)) : (y = x, !e && x || (x = "error", e < 0 && (e = 0))), C.status = e, C.statusText = (i || x) + "", u ? g.resolveWith(f, [h, x, C]) : g.rejectWith(f, [C, x, y]), C.statusCode(v), v = void 0, c && p.trigger(u ? "ajaxSuccess" : "ajaxError", [C, d, u ? h : y]), m.fireWith(f, [C, x]), c && (p.trigger("ajaxComplete", [C, d]), --st.active || st.event.trigger("ajaxStop")))
            }
            "object" === ("undefined" == typeof e ? "undefined" : _typeof(e)) && (i = e, e = void 0), i = i || {};
            var o, s, r, a, l, u, c, h, d = st.ajaxSetup({}, i),
                f = d.context || d,
                p = d.context && (f.nodeType || f.jquery) ? st(f) : st.event,
                g = st.Deferred(),
                m = st.Callbacks("once memory"),
                v = d.statusCode || {},
                y = {},
                _ = {},
                b = 0,
                w = "canceled",
                C = {
                    readyState: 0,
                    getResponseHeader: function(t) {
                        var e;
                        if (2 === b) {
                            if (!a)
                                for (a = {}; e = we.exec(r);) a[e[1].toLowerCase()] = e[2];
                            e = a[t.toLowerCase()]
                        }
                        return null == e ? null : e
                    },
                    getAllResponseHeaders: function() {
                        return 2 === b ? r : null
                    },
                    setRequestHeader: function(t, e) {
                        var i = t.toLowerCase();
                        return b || (t = _[i] = _[i] || t, y[t] = e), this
                    },
                    overrideMimeType: function(t) {
                        return b || (d.mimeType = t), this
                    },
                    statusCode: function(t) {
                        var e;
                        if (t)
                            if (b < 2)
                                for (e in t) v[e] = [v[e], t[e]];
                            else C.always(t[C.status]);
                        return this
                    },
                    abort: function(t) {
                        var e = t || w;
                        return o && o.abort(e), n(0, e), this
                    }
                };
            if (g.promise(C).complete = m.add, C.success = C.done, C.error = C.fail, d.url = ((e || d.url || me.href) + "").replace(_e, "").replace(ke, me.protocol + "//"), d.type = i.method || i.type || d.method || d.type, d.dataTypes = st.trim(d.dataType || "*").toLowerCase().match(wt) || [""], null == d.crossDomain) {
                u = Y.createElement("a");
                try {
                    u.href = d.url, u.href = u.href, d.crossDomain = De.protocol + "//" + De.host != u.protocol + "//" + u.host
                } catch (x) {
                    d.crossDomain = !0
                }
            }
            if (d.data && d.processData && "string" != typeof d.data && (d.data = st.param(d.data, d.traditional)), H($e, d, i, C), 2 === b) return C;
            c = st.event && d.global, c && 0 === st.active++ && st.event.trigger("ajaxStart"), d.type = d.type.toUpperCase(), d.hasContent = !xe.test(d.type), s = d.url, d.hasContent || (d.data && (s = d.url += (ye.test(s) ? "&" : "?") + d.data, delete d.data), d.cache === !1 && (d.url = be.test(s) ? s.replace(be, "$1_=" + ve++) : s + (ye.test(s) ? "&" : "?") + "_=" + ve++)), d.ifModified && (st.lastModified[s] && C.setRequestHeader("If-Modified-Since", st.lastModified[s]), st.etag[s] && C.setRequestHeader("If-None-Match", st.etag[s])), (d.data && d.hasContent && d.contentType !== !1 || i.contentType) && C.setRequestHeader("Content-Type", d.contentType), C.setRequestHeader("Accept", d.dataTypes[0] && d.accepts[d.dataTypes[0]] ? d.accepts[d.dataTypes[0]] + ("*" !== d.dataTypes[0] ? ", " + Fe + "; q=0.01" : "") : d.accepts["*"]);
            for (h in d.headers) C.setRequestHeader(h, d.headers[h]);
            if (d.beforeSend && (d.beforeSend.call(f, C, d) === !1 || 2 === b)) return C.abort();
            w = "abort";
            for (h in {
                    success: 1,
                    error: 1,
                    complete: 1
                }) C[h](d[h]);
            if (o = H(Te, d, i, C)) {
                if (C.readyState = 1, c && p.trigger("ajaxSend", [C, d]), 2 === b) return C;
                d.async && d.timeout > 0 && (l = t.setTimeout(function() {
                    C.abort("timeout")
                }, d.timeout));
                try {
                    b = 1, o.send(y, n)
                } catch (x) {
                    if (!(b < 2)) throw x;
                    n(-1, x)
                }
            } else n(-1, "No Transport");
            return C
        },
        getJSON: function(t, e, i) {
            return st.get(t, e, i, "json")
        },
        getScript: function(t, e) {
            return st.get(t, void 0, e, "script")
        }
    }), st.each(["get", "post"], function(t, e) {
        st[e] = function(t, i, n, o) {
            return st.isFunction(i) && (o = o || n, n = i, i = void 0), st.ajax(st.extend({
                url: t,
                type: e,
                dataType: o,
                data: i,
                success: n
            }, st.isPlainObject(t) && t))
        }
    }), st._evalUrl = function(t) {
        return st.ajax({
            url: t,
            type: "GET",
            dataType: "script",
            async: !1,
            global: !1,
            "throws": !0
        })
    }, st.fn.extend({
        wrapAll: function(t) {
            var e;
            return st.isFunction(t) ? this.each(function(e) {
                st(this).wrapAll(t.call(this, e))
            }) : (this[0] && (e = st(t, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && e.insertBefore(this[0]), e.map(function() {
                for (var t = this; t.firstElementChild;) t = t.firstElementChild;
                return t
            }).append(this)), this)
        },
        wrapInner: function(t) {
            return st.isFunction(t) ? this.each(function(e) {
                st(this).wrapInner(t.call(this, e))
            }) : this.each(function() {
                var e = st(this),
                    i = e.contents();
                i.length ? i.wrapAll(t) : e.append(t)
            })
        },
        wrap: function(t) {
            var e = st.isFunction(t);
            return this.each(function(i) {
                st(this).wrapAll(e ? t.call(this, i) : t)
            })
        },
        unwrap: function() {
            return this.parent().each(function() {
                st.nodeName(this, "body") || st(this).replaceWith(this.childNodes)
            }).end()
        }
    }), st.expr.filters.hidden = function(t) {
        return !st.expr.filters.visible(t)
    }, st.expr.filters.visible = function(t) {
        return t.offsetWidth > 0 || t.offsetHeight > 0 || t.getClientRects().length > 0
    };
    var Se = /%20/g,
        Ee = /\[\]$/,
        ze = /\r?\n/g,
        Ae = /^(?:submit|button|image|reset|file)$/i,
        Pe = /^(?:input|select|textarea|keygen)/i;
    st.param = function(t, e) {
        var i, n = [],
            o = function(t, e) {
                e = st.isFunction(e) ? e() : null == e ? "" : e, n[n.length] = encodeURIComponent(t) + "=" + encodeURIComponent(e)
            };
        if (void 0 === e && (e = st.ajaxSettings && st.ajaxSettings.traditional), st.isArray(t) || t.jquery && !st.isPlainObject(t)) st.each(t, function() {
            o(this.name, this.value)
        });
        else
            for (i in t) G(i, t[i], e, o);
        return n.join("&").replace(Se, "+")
    }, st.fn.extend({
        serialize: function() {
            return st.param(this.serializeArray())
        },
        serializeArray: function() {
            return this.map(function() {
                var t = st.prop(this, "elements");
                return t ? st.makeArray(t) : this
            }).filter(function() {
                var t = this.type;
                return this.name && !st(this).is(":disabled") && Pe.test(this.nodeName) && !Ae.test(t) && (this.checked || !Pt.test(t))
            }).map(function(t, e) {
                var i = st(this).val();
                return null == i ? null : st.isArray(i) ? st.map(i, function(t) {
                    return {
                        name: e.name,
                        value: t.replace(ze, "\r\n")
                    }
                }) : {
                    name: e.name,
                    value: i.replace(ze, "\r\n")
                }
            }).get()
        }
    }), st.ajaxSettings.xhr = function() {
        try {
            return new t.XMLHttpRequest
        } catch (e) {}
    };
    var Me = {
            0: 200,
            1223: 204
        },
        Ie = st.ajaxSettings.xhr();
    nt.cors = !!Ie && "withCredentials" in Ie, nt.ajax = Ie = !!Ie, st.ajaxTransport(function(e) {
        var i, n;
        if (nt.cors || Ie && !e.crossDomain) return {
            send: function(o, s) {
                var r, a = e.xhr();
                if (a.open(e.type, e.url, e.async, e.username, e.password), e.xhrFields)
                    for (r in e.xhrFields) a[r] = e.xhrFields[r];
                e.mimeType && a.overrideMimeType && a.overrideMimeType(e.mimeType), e.crossDomain || o["X-Requested-With"] || (o["X-Requested-With"] = "XMLHttpRequest");
                for (r in o) a.setRequestHeader(r, o[r]);
                i = function(t) {
                    return function() {
                        i && (i = n = a.onload = a.onerror = a.onabort = a.onreadystatechange = null, "abort" === t ? a.abort() : "error" === t ? "number" != typeof a.status ? s(0, "error") : s(a.status, a.statusText) : s(Me[a.status] || a.status, a.statusText, "text" !== (a.responseType || "text") || "string" != typeof a.responseText ? {
                            binary: a.response
                        } : {
                            text: a.responseText
                        }, a.getAllResponseHeaders()))
                    }
                }, a.onload = i(), n = a.onerror = i("error"), void 0 !== a.onabort ? a.onabort = n : a.onreadystatechange = function() {
                    4 === a.readyState && t.setTimeout(function() {
                        i && n()
                    })
                }, i = i("abort");
                try {
                    a.send(e.hasContent && e.data || null)
                } catch (l) {
                    if (i) throw l
                }
            },
            abort: function() {
                i && i()
            }
        }
    }), st.ajaxSetup({
        accepts: {
            script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
        },
        contents: {
            script: /\b(?:java|ecma)script\b/
        },
        converters: {
            "text script": function(t) {
                return st.globalEval(t), t
            }
        }
    }), st.ajaxPrefilter("script", function(t) {
        void 0 === t.cache && (t.cache = !1), t.crossDomain && (t.type = "GET")
    }), st.ajaxTransport("script", function(t) {
        if (t.crossDomain) {
            var e, i;
            return {
                send: function(n, o) {
                    e = st("<script>").prop({
                        charset: t.scriptCharset,
                        src: t.url
                    }).on("load error", i = function(t) {
                        e.remove(), i = null, t && o("error" === t.type ? 404 : 200, t.type)
                    }), Y.head.appendChild(e[0])
                },
                abort: function() {
                    i && i()
                }
            }
        }
    });
    var Oe = [],
        Ne = /(=)\?(?=&|$)|\?\?/;
    st.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function() {
            var t = Oe.pop() || st.expando + "_" + ve++;
            return this[t] = !0, t
        }
    }), st.ajaxPrefilter("json jsonp", function(e, i, n) {
        var o, s, r, a = e.jsonp !== !1 && (Ne.test(e.url) ? "url" : "string" == typeof e.data && 0 === (e.contentType || "").indexOf("application/x-www-form-urlencoded") && Ne.test(e.data) && "data");
        if (a || "jsonp" === e.dataTypes[0]) return o = e.jsonpCallback = st.isFunction(e.jsonpCallback) ? e.jsonpCallback() : e.jsonpCallback, a ? e[a] = e[a].replace(Ne, "$1" + o) : e.jsonp !== !1 && (e.url += (ye.test(e.url) ? "&" : "?") + e.jsonp + "=" + o), e.converters["script json"] = function() {
            return r || st.error(o + " was not called"), r[0]
        }, e.dataTypes[0] = "json", s = t[o], t[o] = function() {
            r = arguments
        }, n.always(function() {
            void 0 === s ? st(t).removeProp(o) : t[o] = s, e[o] && (e.jsonpCallback = i.jsonpCallback, Oe.push(o)), r && st.isFunction(s) && s(r[0]), r = s = void 0
        }), "script"
    }), st.parseHTML = function(t, e, i) {
        if (!t || "string" != typeof t) return null;
        "boolean" == typeof e && (i = e, e = !1), e = e || Y;
        var n = pt.exec(t),
            o = !i && [];
        return n ? [e.createElement(n[1])] : (n = d([t], e, o), o && o.length && st(o).remove(), st.merge([], n.childNodes))
    };
    var Le = st.fn.load;
    st.fn.load = function(t, e, i) {
        if ("string" != typeof t && Le) return Le.apply(this, arguments);
        var n, o, s, r = this,
            a = t.indexOf(" ");
        return a > -1 && (n = st.trim(t.slice(a)), t = t.slice(0, a)), st.isFunction(e) ? (i = e, e = void 0) : e && "object" === ("undefined" == typeof e ? "undefined" : _typeof(e)) && (o = "POST"), r.length > 0 && st.ajax({
            url: t,
            type: o || "GET",
            dataType: "html",
            data: e
        }).done(function(t) {
            s = arguments, r.html(n ? st("<div>").append(st.parseHTML(t)).find(n) : t)
        }).always(i && function(t, e) {
            r.each(function() {
                i.apply(this, s || [t.responseText, e, t])
            })
        }), this
    }, st.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(t, e) {
        st.fn[e] = function(t) {
            return this.on(e, t)
        }
    }), st.expr.filters.animated = function(t) {
        return st.grep(st.timers, function(e) {
            return t === e.elem
        }).length
    }, st.offset = {
        setOffset: function(t, e, i) {
            var n, o, s, r, a, l, u, c = st.css(t, "position"),
                h = st(t),
                d = {};
            "static" === c && (t.style.position = "relative"), a = h.offset(), s = st.css(t, "top"), l = st.css(t, "left"), u = ("absolute" === c || "fixed" === c) && (s + l).indexOf("auto") > -1, u ? (n = h.position(), r = n.top, o = n.left) : (r = parseFloat(s) || 0, o = parseFloat(l) || 0), st.isFunction(e) && (e = e.call(t, i, st.extend({}, a))), null != e.top && (d.top = e.top - a.top + r), null != e.left && (d.left = e.left - a.left + o), "using" in e ? e.using.call(t, d) : h.css(d)
        }
    }, st.fn.extend({
        offset: function(t) {
            if (arguments.length) return void 0 === t ? this : this.each(function(e) {
                st.offset.setOffset(this, t, e)
            });
            var e, i, n = this[0],
                o = {
                    top: 0,
                    left: 0
                },
                s = n && n.ownerDocument;
            if (s) return e = s.documentElement, st.contains(e, n) ? (o = n.getBoundingClientRect(), i = K(s), {
                top: o.top + i.pageYOffset - e.clientTop,
                left: o.left + i.pageXOffset - e.clientLeft
            }) : o
        },
        position: function() {
            if (this[0]) {
                var t, e, i = this[0],
                    n = {
                        top: 0,
                        left: 0
                    };
                return "fixed" === st.css(i, "position") ? e = i.getBoundingClientRect() : (t = this.offsetParent(), e = this.offset(), st.nodeName(t[0], "html") || (n = t.offset()), n.top += st.css(t[0], "borderTopWidth", !0), n.left += st.css(t[0], "borderLeftWidth", !0)), {
                    top: e.top - n.top - st.css(i, "marginTop", !0),
                    left: e.left - n.left - st.css(i, "marginLeft", !0)
                }
            }
        },
        offsetParent: function() {
            return this.map(function() {
                for (var t = this.offsetParent; t && "static" === st.css(t, "position");) t = t.offsetParent;
                return t || Xt
            })
        }
    }), st.each({
        scrollLeft: "pageXOffset",
        scrollTop: "pageYOffset"
    }, function(t, e) {
        var i = "pageYOffset" === e;
        st.fn[t] = function(n) {
            return xt(this, function(t, n, o) {
                var s = K(t);
                return void 0 === o ? s ? s[e] : t[n] : void(s ? s.scrollTo(i ? s.pageXOffset : o, i ? o : s.pageYOffset) : t[n] = o)
            }, t, n, arguments.length)
        }
    }), st.each(["top", "left"], function(t, e) {
        st.cssHooks[e] = F(nt.pixelPosition, function(t, i) {
            if (i) return i = T(t, e), Yt.test(i) ? st(t).position()[e] + "px" : i
        })
    }), st.each({
        Height: "height",
        Width: "width"
    }, function(t, e) {
        st.each({
            padding: "inner" + t,
            content: e,
            "": "outer" + t
        }, function(i, n) {
            st.fn[n] = function(n, o) {
                var s = arguments.length && (i || "boolean" != typeof n),
                    r = i || (n === !0 || o === !0 ? "margin" : "border");
                return xt(this, function(e, i, n) {
                    var o;
                    return st.isWindow(e) ? e.document.documentElement["client" + t] : 9 === e.nodeType ? (o = e.documentElement, Math.max(e.body["scroll" + t], o["scroll" + t], e.body["offset" + t], o["offset" + t], o["client" + t])) : void 0 === n ? st.css(e, i, r) : st.style(e, i, n, r)
                }, e, s ? n : void 0, s, null)
            }
        })
    }), st.fn.extend({
        bind: function(t, e, i) {
            return this.on(t, null, e, i)
        },
        unbind: function(t, e) {
            return this.off(t, null, e)
        },
        delegate: function(t, e, i, n) {
            return this.on(e, t, i, n)
        },
        undelegate: function(t, e, i) {
            return 1 === arguments.length ? this.off(t, "**") : this.off(e, t || "**", i)
        },
        size: function() {
            return this.length
        }
    }), st.fn.andSelf = st.fn.addBack, "function" == typeof define && define.amd && define("jquery", [], function() {
        return st
    });
    var je = t.jQuery,
        qe = t.$;
    return st.noConflict = function(e) {
        return t.$ === st && (t.$ = qe), e && t.jQuery === st && (t.jQuery = je), st
    }, e || (t.jQuery = t.$ = st), st
});
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
    return typeof t
} : function(t) {
    return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
};
! function(t) {
    function e(t) {
        if (void 0 === Function.prototype.name) {
            var e = /function\s([^(]{1,})\(/,
                i = e.exec(t.toString());
            return i && i.length > 1 ? i[1].trim() : ""
        }
        return void 0 === t.prototype ? t.constructor.name : t.prototype.constructor.name
    }

    function i(t) {
        return "true" === t || "false" !== t && (isNaN(1 * t) ? t : parseFloat(t))
    }

    function n(t) {
        return t.replace(/([a-z])([A-Z])/g, "$1-$2").toLowerCase()
    }
    var o = "6.3.1",
        s = {
            version: o,
            _plugins: {},
            _uuids: [],
            rtl: function() {
                return "rtl" === t("html").attr("dir")
            },
            plugin: function(t, i) {
                var o = i || e(t),
                    s = n(o);
                this._plugins[s] = this[o] = t
            },
            registerPlugin: function(t, i) {
                var o = i ? n(i) : e(t.constructor).toLowerCase();
                t.uuid = this.GetYoDigits(6, o), t.$element.attr("data-" + o) || t.$element.attr("data-" + o, t.uuid), t.$element.data("zfPlugin") || t.$element.data("zfPlugin", t), t.$element.trigger("init.zf." + o), this._uuids.push(t.uuid)
            },
            unregisterPlugin: function(t) {
                var i = n(e(t.$element.data("zfPlugin").constructor));
                this._uuids.splice(this._uuids.indexOf(t.uuid), 1), t.$element.removeAttr("data-" + i).removeData("zfPlugin").trigger("destroyed.zf." + i);
                for (var o in t) t[o] = null
            },
            reInit: function(e) {
                var i = e instanceof t;
                try {
                    if (i) e.each(function() {
                        t(this).data("zfPlugin")._init()
                    });
                    else {
                        var o = "undefined" == typeof e ? "undefined" : _typeof(e),
                            s = this,
                            r = {
                                object: function(e) {
                                    e.forEach(function(e) {
                                        e = n(e), t("[data-" + e + "]").foundation("_init")
                                    })
                                },
                                string: function() {
                                    e = n(e), t("[data-" + e + "]").foundation("_init")
                                },
                                undefined: function() {
                                    this.object(Object.keys(s._plugins))
                                }
                            };
                        r[o](e)
                    }
                } catch (a) {
                    console.error(a)
                } finally {
                    return e
                }
            },
            GetYoDigits: function(t, e) {
                return t = t || 6, Math.round(Math.pow(36, t + 1) - Math.random() * Math.pow(36, t)).toString(36).slice(1) + (e ? "-" + e : "")
            },
            reflow: function(e, n) {
                "undefined" == typeof n ? n = Object.keys(this._plugins) : "string" == typeof n && (n = [n]);
                var o = this;
                t.each(n, function(n, s) {
                    var r = o._plugins[s],
                        a = t(e).find("[data-" + s + "]").addBack("[data-" + s + "]");
                    a.each(function() {
                        var e = t(this),
                            n = {};
                        if (e.data("zfPlugin")) return void console.warn("Tried to initialize " + s + " on an element that already has a Foundation plugin.");
                        if (e.attr("data-options")) {
                            e.attr("data-options").split(";").forEach(function(t, e) {
                                var o = t.split(":").map(function(t) {
                                    return t.trim()
                                });
                                o[0] && (n[o[0]] = i(o[1]))
                            })
                        }
                        try {
                            e.data("zfPlugin", new r(t(this), n))
                        } catch (o) {
                            console.error(o)
                        } finally {
                            return
                        }
                    })
                })
            },
            getFnName: e,
            transitionend: function(t) {
                var e, i = {
                        transition: "transitionend",
                        WebkitTransition: "webkitTransitionEnd",
                        MozTransition: "transitionend",
                        OTransition: "otransitionend"
                    },
                    n = document.createElement("div");
                for (var o in i) "undefined" != typeof n.style[o] && (e = i[o]);
                return e ? e : (e = setTimeout(function() {
                    t.triggerHandler("transitionend", [t])
                }, 1), "transitionend")
            }
        };
    s.util = {
        throttle: function(t, e) {
            var i = null;
            return function() {
                var n = this,
                    o = arguments;
                null === i && (i = setTimeout(function() {
                    t.apply(n, o), i = null
                }, e))
            }
        }
    };
    var r = function(i) {
        var n = "undefined" == typeof i ? "undefined" : _typeof(i),
            o = t("meta.foundation-mq"),
            r = t(".no-js");
        if (o.length || t('<meta class="foundation-mq">').appendTo(document.head), r.length && r.removeClass("no-js"), "undefined" === n) s.MediaQuery._init(), s.reflow(this);
        else {
            if ("string" !== n) throw new TypeError("We're sorry, " + n + " is not a valid parameter. You must use a string representing the method you wish to invoke.");
            var a = Array.prototype.slice.call(arguments, 1),
                l = this.data("zfPlugin");
            if (void 0 === l || void 0 === l[i]) throw new ReferenceError("We're sorry, '" + i + "' is not an available method for " + (l ? e(l) : "this element") + ".");
            1 === this.length ? l[i].apply(l, a) : this.each(function(e, n) {
                l[i].apply(t(n).data("zfPlugin"), a)
            })
        }
        return this
    };
    window.Foundation = s, t.fn.foundation = r,
        function() {
            Date.now && window.Date.now || (window.Date.now = Date.now = function() {
                return (new Date).getTime()
            });
            for (var t = ["webkit", "moz"], e = 0; e < t.length && !window.requestAnimationFrame; ++e) {
                var i = t[e];
                window.requestAnimationFrame = window[i + "RequestAnimationFrame"], window.cancelAnimationFrame = window[i + "CancelAnimationFrame"] || window[i + "CancelRequestAnimationFrame"]
            }
            if (/iP(ad|hone|od).*OS 6/.test(window.navigator.userAgent) || !window.requestAnimationFrame || !window.cancelAnimationFrame) {
                var n = 0;
                window.requestAnimationFrame = function(t) {
                    var e = Date.now(),
                        i = Math.max(n + 16, e);
                    return setTimeout(function() {
                        t(n = i)
                    }, i - e)
                }, window.cancelAnimationFrame = clearTimeout
            }
            window.performance && window.performance.now || (window.performance = {
                start: Date.now(),
                now: function() {
                    return Date.now() - this.start
                }
            })
        }(), Function.prototype.bind || (Function.prototype.bind = function(t) {
            if ("function" != typeof this) throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");
            var e = Array.prototype.slice.call(arguments, 1),
                i = this,
                n = function() {},
                o = function() {
                    return i.apply(this instanceof n ? this : t, e.concat(Array.prototype.slice.call(arguments)))
                };
            return this.prototype && (n.prototype = this.prototype), o.prototype = new n, o
        })
}(jQuery), ! function(t) {
    function e(t, e, n, o) {
        var s, r, a, l, u = i(t);
        if (e) {
            var c = i(e);
            r = u.offset.top + u.height <= c.height + c.offset.top, s = u.offset.top >= c.offset.top, a = u.offset.left >= c.offset.left, l = u.offset.left + u.width <= c.width + c.offset.left
        } else r = u.offset.top + u.height <= u.windowDims.height + u.windowDims.offset.top, s = u.offset.top >= u.windowDims.offset.top, a = u.offset.left >= u.windowDims.offset.left, l = u.offset.left + u.width <= u.windowDims.width;
        var h = [r, s, a, l];
        return n ? a === l == !0 : o ? s === r == !0 : h.indexOf(!1) === -1
    }

    function i(t, e) {
        if (t = t.length ? t[0] : t, t === window || t === document) throw new Error("I'm sorry, Dave. I'm afraid I can't do that.");
        var i = t.getBoundingClientRect(),
            n = t.parentNode.getBoundingClientRect(),
            o = document.body.getBoundingClientRect(),
            s = window.pageYOffset,
            r = window.pageXOffset;
        return {
            width: i.width,
            height: i.height,
            offset: {
                top: i.top + s,
                left: i.left + r
            },
            parentDims: {
                width: n.width,
                height: n.height,
                offset: {
                    top: n.top + s,
                    left: n.left + r
                }
            },
            windowDims: {
                width: o.width,
                height: o.height,
                offset: {
                    top: s,
                    left: r
                }
            }
        }
    }

    function n(t, e, n, o, s, r) {
        var a = i(t),
            l = e ? i(e) : null;
        switch (n) {
            case "top":
                return {
                    left: Foundation.rtl() ? l.offset.left - a.width + l.width : l.offset.left,
                    top: l.offset.top - (a.height + o)
                };
            case "left":
                return {
                    left: l.offset.left - (a.width + s),
                    top: l.offset.top
                };
            case "right":
                return {
                    left: l.offset.left + l.width + s,
                    top: l.offset.top
                };
            case "center top":
                return {
                    left: l.offset.left + l.width / 2 - a.width / 2,
                    top: l.offset.top - (a.height + o)
                };
            case "center bottom":
                return {
                    left: r ? s : l.offset.left + l.width / 2 - a.width / 2,
                    top: l.offset.top + l.height + o
                };
            case "center left":
                return {
                    left: l.offset.left - (a.width + s),
                    top: l.offset.top + l.height / 2 - a.height / 2
                };
            case "center right":
                return {
                    left: l.offset.left + l.width + s + 1,
                    top: l.offset.top + l.height / 2 - a.height / 2
                };
            case "center":
                return {
                    left: a.windowDims.offset.left + a.windowDims.width / 2 - a.width / 2,
                    top: a.windowDims.offset.top + a.windowDims.height / 2 - a.height / 2
                };
            case "reveal":
                return {
                    left: (a.windowDims.width - a.width) / 2,
                    top: a.windowDims.offset.top + o
                };
            case "reveal full":
                return {
                    left: a.windowDims.offset.left,
                    top: a.windowDims.offset.top
                };
            case "left bottom":
                return {
                    left: l.offset.left,
                    top: l.offset.top + l.height + o
                };
            case "right bottom":
                return {
                    left: l.offset.left + l.width + s - a.width,
                    top: l.offset.top + l.height + o
                };
            default:
                return {
                    left: Foundation.rtl() ? l.offset.left - a.width + l.width : l.offset.left + s,
                    top: l.offset.top + l.height + o
                }
        }
    }
    Foundation.Box = {
        ImNotTouchingYou: e,
        GetDimensions: i,
        GetOffsets: n
    }
}(jQuery), ! function(t) {
    function e(t) {
        var e = {};
        for (var i in t) e[t[i]] = t[i];
        return e
    }
    var i = {
            9: "TAB",
            13: "ENTER",
            27: "ESCAPE",
            32: "SPACE",
            37: "ARROW_LEFT",
            38: "ARROW_UP",
            39: "ARROW_RIGHT",
            40: "ARROW_DOWN"
        },
        n = {},
        o = {
            keys: e(i),
            parseKey: function(t) {
                var e = i[t.which || t.keyCode] || String.fromCharCode(t.which).toUpperCase();
                return e = e.replace(/\W+/, ""), t.shiftKey && (e = "SHIFT_" + e), t.ctrlKey && (e = "CTRL_" + e), t.altKey && (e = "ALT_" + e), e = e.replace(/_$/, "")
            },
            handleKey: function(e, i, o) {
                var s, r, a, l = n[i],
                    u = this.parseKey(e);
                if (!l) return console.warn("Component not defined!");
                if (s = "undefined" == typeof l.ltr ? l : Foundation.rtl() ? t.extend({}, l.ltr, l.rtl) : t.extend({}, l.rtl, l.ltr), r = s[u], a = o[r], a && "function" == typeof a) {
                    var c = a.apply();
                    (o.handled || "function" == typeof o.handled) && o.handled(c)
                } else(o.unhandled || "function" == typeof o.unhandled) && o.unhandled()
            },
            findFocusable: function(e) {
                return !!e && e.find("a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, *[tabindex], *[contenteditable]").filter(function() {
                    return !(!t(this).is(":visible") || t(this).attr("tabindex") < 0)
                })
            },
            register: function(t, e) {
                n[t] = e
            },
            trapFocus: function(t) {
                var e = Foundation.Keyboard.findFocusable(t),
                    i = e.eq(0),
                    n = e.eq(-1);
                t.on("keydown.zf.trapfocus", function(t) {
                    t.target === n[0] && "TAB" === Foundation.Keyboard.parseKey(t) ? (t.preventDefault(), i.focus()) : t.target === i[0] && "SHIFT_TAB" === Foundation.Keyboard.parseKey(t) && (t.preventDefault(), n.focus())
                })
            },
            releaseFocus: function(t) {
                t.off("keydown.zf.trapfocus")
            }
        };
    Foundation.Keyboard = o
}(jQuery);
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
    return typeof t
} : function(t) {
    return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
};
! function(t) {
    function e(t) {
        var e = {};
        return "string" != typeof t ? e : (t = t.trim().slice(1, -1)) ? e = t.split("&").reduce(function(t, e) {
            var i = e.replace(/\+/g, " ").split("="),
                n = i[0],
                o = i[1];
            return n = decodeURIComponent(n), o = void 0 === o ? null : decodeURIComponent(o), t.hasOwnProperty(n) ? Array.isArray(t[n]) ? t[n].push(o) : t[n] = [t[n], o] : t[n] = o, t
        }, {}) : e
    }
    var i = {
        queries: [],
        current: "",
        _init: function() {
            var i, n = this,
                o = t(".foundation-mq").css("font-family");
            i = e(o);
            for (var s in i) i.hasOwnProperty(s) && n.queries.push({
                name: s,
                value: "only screen and (min-width: " + i[s] + ")"
            });
            this.current = this._getCurrentSize(), this._watcher()
        },
        atLeast: function(t) {
            var e = this.get(t);
            return !!e && window.matchMedia(e).matches
        },
        is: function(t) {
            return t = t.trim().split(" "), t.length > 1 && "only" === t[1] ? t[0] === this._getCurrentSize() : this.atLeast(t[0])
        },
        get: function(t) {
            for (var e in this.queries)
                if (this.queries.hasOwnProperty(e)) {
                    var i = this.queries[e];
                    if (t === i.name) return i.value
                }
            return null
        },
        _getCurrentSize: function() {
            for (var t, e = 0; e < this.queries.length; e++) {
                var i = this.queries[e];
                window.matchMedia(i.value).matches && (t = i)
            }
            return "object" === ("undefined" == typeof t ? "undefined" : _typeof(t)) ? t.name : t
        },
        _watcher: function() {
            var e = this;
            t(window).on("resize.zf.mediaquery", function() {
                var i = e._getCurrentSize(),
                    n = e.current;
                i !== n && (e.current = i, t(window).trigger("changed.zf.mediaquery", [i, n]))
            })
        }
    };
    Foundation.MediaQuery = i, window.matchMedia || (window.matchMedia = function() {
        var t = window.styleMedia || window.media;
        if (!t) {
            var e = document.createElement("style"),
                i = document.getElementsByTagName("script")[0],
                n = null;
            e.type = "text/css", e.id = "matchmediajs-test", i && i.parentNode && i.parentNode.insertBefore(e, i), n = "getComputedStyle" in window && window.getComputedStyle(e, null) || e.currentStyle, t = {
                matchMedium: function(t) {
                    var i = "@media " + t + "{ #matchmediajs-test { width: 1px; } }";
                    return e.styleSheet ? e.styleSheet.cssText = i : e.textContent = i, "1px" === n.width
                }
            }
        }
        return function(e) {
            return {
                matches: t.matchMedium(e || "all"),
                media: e || "all"
            }
        }
    }()), Foundation.MediaQuery = i
}(jQuery), ! function(t) {
    function e(t, e, i) {
        function n(a) {
            r || (r = a), s = a - r, i.apply(e), s < t ? o = window.requestAnimationFrame(n, e) : (window.cancelAnimationFrame(o), e.trigger("finished.zf.animate", [e]).triggerHandler("finished.zf.animate", [e]))
        }
        var o, s, r = null;
        return 0 === t ? (i.apply(e), void e.trigger("finished.zf.animate", [e]).triggerHandler("finished.zf.animate", [e])) : void(o = window.requestAnimationFrame(n))
    }

    function i(e, i, s, r) {
        function a() {
            e || i.hide(), l(), r && r.apply(i)
        }

        function l() {
            i[0].style.transitionDuration = 0, i.removeClass(u + " " + c + " " + s)
        }
        if (i = t(i).eq(0), i.length) {
            var u = e ? n[0] : n[1],
                c = e ? o[0] : o[1];
            l(), i.addClass(s).css("transition", "none"), requestAnimationFrame(function() {
                i.addClass(u), e && i.show()
            }), requestAnimationFrame(function() {
                i[0].offsetWidth, i.css("transition", "").addClass(c)
            }), i.one(Foundation.transitionend(i), a)
        }
    }
    var n = ["mui-enter", "mui-leave"],
        o = ["mui-enter-active", "mui-leave-active"],
        s = {
            animateIn: function(t, e, n) {
                i(!0, t, e, n)
            },
            animateOut: function(t, e, n) {
                i(!1, t, e, n)
            }
        };
    Foundation.Move = e, Foundation.Motion = s
}(jQuery), ! function(t) {
    var e = {
        Feather: function(e) {
            var i = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "zf";
            e.attr("role", "menubar");
            var n = e.find("li").attr({
                    role: "menuitem"
                }),
                o = "is-" + i + "-submenu",
                s = o + "-item",
                r = "is-" + i + "-submenu-parent";
            n.each(function() {
                var e = t(this),
                    n = e.children("ul");
                n.length && (e.addClass(r).attr({
                    "aria-haspopup": !0,
                    "aria-label": e.children("a:first").text()
                }), "drilldown" === i && e.attr({
                    "aria-expanded": !1
                }), n.addClass("submenu " + o).attr({
                    "data-submenu": "",
                    role: "menu"
                }), "drilldown" === i && n.attr({
                    "aria-hidden": !0
                })), e.parent("[data-submenu]").length && e.addClass("is-submenu-item " + s)
            })
        },
        Burn: function(t, e) {
            var i = "is-" + e + "-submenu",
                n = i + "-item",
                o = "is-" + e + "-submenu-parent";
            t.find(">li, .menu, .menu > li").removeClass(i + " " + n + " " + o + " is-submenu-item submenu is-active").removeAttr("data-submenu").css("display", "")
        }
    };
    Foundation.Nest = e
}(jQuery), ! function(t) {
    function e(t, e, i) {
        var n, o, s = this,
            r = e.duration,
            a = Object.keys(t.data())[0] || "timer",
            l = -1;
        this.isPaused = !1, this.restart = function() {
            l = -1, clearTimeout(o), this.start()
        }, this.start = function() {
            this.isPaused = !1, clearTimeout(o), l = l <= 0 ? r : l, t.data("paused", !1), n = Date.now(), o = setTimeout(function() {
                e.infinite && s.restart(), i && "function" == typeof i && i()
            }, l), t.trigger("timerstart.zf." + a)
        }, this.pause = function() {
            this.isPaused = !0, clearTimeout(o), t.data("paused", !0);
            var e = Date.now();
            l -= e - n, t.trigger("timerpaused.zf." + a)
        }
    }

    function i(e, i) {
        function n() {
            o--, 0 === o && i()
        }
        var o = e.length;
        0 === o && i(), e.each(function() {
            if (this.complete || 4 === this.readyState || "complete" === this.readyState) n();
            else {
                var e = t(this).attr("src");
                t(this).attr("src", e + (e.indexOf("?") >= 0 ? "&" : "?") + (new Date).getTime()), t(this).one("load", function() {
                    n()
                })
            }
        })
    }
    Foundation.Timer = e, Foundation.onImagesLoaded = i
}(jQuery),
function(t) {
    function e() {
        this.removeEventListener("touchmove", i), this.removeEventListener("touchend", e), u = !1
    }

    function i(i) {
        if (t.spotSwipe.preventDefault && i.preventDefault(), u) {
            var n, o = i.touches[0].pageX,
                r = (i.touches[0].pageY, s - o);
            l = (new Date).getTime() - a, Math.abs(r) >= t.spotSwipe.moveThreshold && l <= t.spotSwipe.timeThreshold && (n = r > 0 ? "left" : "right"), n && (i.preventDefault(), e.call(this), t(this).trigger("swipe", n).trigger("swipe" + n))
        }
    }

    function n(t) {
        1 == t.touches.length && (s = t.touches[0].pageX, r = t.touches[0].pageY, u = !0, a = (new Date).getTime(), this.addEventListener("touchmove", i, !1), this.addEventListener("touchend", e, !1))
    }

    function o() {
        this.addEventListener && this.addEventListener("touchstart", n, !1)
    }
    t.spotSwipe = {
        version: "1.0.0",
        enabled: "ontouchstart" in document.documentElement,
        preventDefault: !1,
        moveThreshold: 75,
        timeThreshold: 200
    };
    var s, r, a, l, u = !1;
    t.event.special.swipe = {
        setup: o
    }, t.each(["left", "up", "down", "right"], function() {
        t.event.special["swipe" + this] = {
            setup: function() {
                t(this).on("swipe", t.noop)
            }
        }
    })
}(jQuery), ! function(t) {
    t.fn.addTouch = function() {
        this.each(function(i, n) {
            t(n).bind("touchstart touchmove touchend touchcancel", function() {
                e(event)
            })
        });
        var e = function(t) {
            var e, i = t.changedTouches,
                n = i[0],
                o = {
                    touchstart: "mousedown",
                    touchmove: "mousemove",
                    touchend: "mouseup"
                },
                s = o[t.type];
            "MouseEvent" in window && "function" == typeof window.MouseEvent ? e = new window.MouseEvent(s, {
                bubbles: !0,
                cancelable: !0,
                screenX: n.screenX,
                screenY: n.screenY,
                clientX: n.clientX,
                clientY: n.clientY
            }) : (e = document.createEvent("MouseEvent"), e.initMouseEvent(s, !0, !0, window, 1, n.screenX, n.screenY, n.clientX, n.clientY, !1, !1, !1, !1, 0, null)), n.target.dispatchEvent(e)
        }
    }
}(jQuery);
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
    return typeof t
} : function(t) {
    return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
};
! function(t) {
    function e() {
        s(), n(), o(), i()
    }

    function i(e) {
        var i = t("[data-yeti-box]"),
            n = ["dropdown", "tooltip", "reveal"];
        if (e && ("string" == typeof e ? n.push(e) : "object" === ("undefined" == typeof e ? "undefined" : _typeof(e)) && "string" == typeof e[0] ? n.concat(e) : console.error("Plugin names must be strings")), i.length) {
            var o = n.map(function(t) {
                return "closeme.zf." + t
            }).join(" ");
            t(window).off(o).on(o, function(e, i) {
                var n = e.namespace.split(".")[0],
                    o = t("[data-" + n + "]").not('[data-yeti-box="' + i + '"]');
                o.each(function() {
                    var e = t(this);
                    e.triggerHandler("close.zf.trigger", [e])
                })
            })
        }
    }

    function n(e) {
        var i = void 0,
            n = t("[data-resize]");
        n.length && t(window).off("resize.zf.trigger").on("resize.zf.trigger", function(o) {
            i && clearTimeout(i), i = setTimeout(function() {
                r || n.each(function() {
                    t(this).triggerHandler("resizeme.zf.trigger")
                }), n.attr("data-events", "resize")
            }, e || 10)
        })
    }

    function o(e) {
        var i = void 0,
            n = t("[data-scroll]");
        n.length && t(window).off("scroll.zf.trigger").on("scroll.zf.trigger", function(o) {
            i && clearTimeout(i), i = setTimeout(function() {
                r || n.each(function() {
                    t(this).triggerHandler("scrollme.zf.trigger")
                }), n.attr("data-events", "scroll")
            }, e || 10)
        })
    }

    function s() {
        if (!r) return !1;
        var e = document.querySelectorAll("[data-resize], [data-scroll], [data-mutate]"),
            i = function(e) {
                var i = t(e[0].target);
                switch (e[0].type) {
                    case "attributes":
                        "scroll" === i.attr("data-events") && "data-events" === e[0].attributeName && i.triggerHandler("scrollme.zf.trigger", [i, window.pageYOffset]), "resize" === i.attr("data-events") && "data-events" === e[0].attributeName && i.triggerHandler("resizeme.zf.trigger", [i]), "style" === e[0].attributeName && (i.closest("[data-mutate]").attr("data-events", "mutate"), i.closest("[data-mutate]").triggerHandler("mutateme.zf.trigger", [i.closest("[data-mutate]")]));
                        break;
                    case "childList":
                        i.closest("[data-mutate]").attr("data-events", "mutate"), i.closest("[data-mutate]").triggerHandler("mutateme.zf.trigger", [i.closest("[data-mutate]")]);
                        break;
                    default:
                        return !1
                }
            };
        if (e.length)
            for (var n = 0; n <= e.length - 1; n++) {
                var o = new r(i);
                o.observe(e[n], {
                    attributes: !0,
                    childList: !0,
                    characterData: !1,
                    subtree: !0,
                    attributeFilter: ["data-events", "style"]
                })
            }
    }
    var r = function() {
            for (var t = ["WebKit", "Moz", "O", "Ms", ""], e = 0; e < t.length; e++)
                if (t[e] + "MutationObserver" in window) return window[t[e] + "MutationObserver"];
            return !1
        }(),
        a = function(e, i) {
            e.data(i).split(" ").forEach(function(n) {
                t("#" + n)["close" === i ? "trigger" : "triggerHandler"](i + ".zf.trigger", [e])
            })
        };
    t(document).on("click.zf.trigger", "[data-open]", function() {
        a(t(this), "open")
    }), t(document).on("click.zf.trigger", "[data-close]", function() {
        var e = t(this).data("close");
        e ? a(t(this), "close") : t(this).trigger("close.zf.trigger")
    }), t(document).on("click.zf.trigger", "[data-toggle]", function() {
        var e = t(this).data("toggle");
        e ? a(t(this), "toggle") : t(this).trigger("toggle.zf.trigger")
    }), t(document).on("close.zf.trigger", "[data-closable]", function(e) {
        e.stopPropagation();
        var i = t(this).data("closable");
        "" !== i ? Foundation.Motion.animateOut(t(this), i, function() {
            t(this).trigger("closed.zf")
        }) : t(this).fadeOut().trigger("closed.zf")
    }), t(document).on("focus.zf.trigger blur.zf.trigger", "[data-toggle-focus]", function() {
        var e = t(this).data("toggle-focus");
        t("#" + e).triggerHandler("toggle.zf.trigger", [t(this)])
    }), t(window).on("load", function() {
        e()
    }), Foundation.IHearYou = e
}(jQuery);
var _createClass = function() {
    function t(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(e, i, n) {
        return i && t(e.prototype, i), n && t(e, n), e
    }
}();
! function(t) {
    var e = function() {
        function e(i) {
            var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            _classCallCheck(this, e), this.$element = i, this.options = t.extend({}, e.defaults, this.$element.data(), n), this._init(), Foundation.registerPlugin(this, "Abide")
        }
        return _createClass(e, [{
            key: "_init",
            value: function() {
                this.$inputs = this.$element.find("input, textarea, select"), this._events()
            }
        }, {
            key: "_events",
            value: function() {
                var e = this;
                this.$element.off(".abide").on("reset.zf.abide", function() {
                    e.resetForm()
                }).on("submit.zf.abide", function() {
                    return e.validateForm()
                }), "fieldChange" === this.options.validateOn && this.$inputs.off("change.zf.abide").on("change.zf.abide", function(i) {
                    e.validateInput(t(i.target))
                }), this.options.liveValidate && this.$inputs.off("input.zf.abide").on("input.zf.abide", function(i) {
                    e.validateInput(t(i.target))
                }), this.options.validateOnBlur && this.$inputs.off("blur.zf.abide").on("blur.zf.abide", function(i) {
                    e.validateInput(t(i.target))
                })
            }
        }, {
            key: "_reflow",
            value: function() {
                this._init()
            }
        }, {
            key: "requiredCheck",
            value: function(t) {
                if (!t.attr("required")) return !0;
                var e = !0;
                switch (t[0].type) {
                    case "checkbox":
                        e = t[0].checked;
                        break;
                    case "select":
                    case "select-one":
                    case "select-multiple":
                        var i = t.find("option:selected");
                        i.length && i.val() || (e = !1);
                        break;
                    default:
                        t.val() && t.val().length || (e = !1)
                }
                return e
            }
        }, {
            key: "findFormError",
            value: function(t) {
                var e = t[0].id,
                    i = t.siblings(this.options.formErrorSelector);
                return i.length || (i = t.parent().find(this.options.formErrorSelector)), i = i.add(this.$element.find('[data-form-error-for="' + e + '"]'))
            }
        }, {
            key: "findLabel",
            value: function(t) {
                var e = t[0].id,
                    i = this.$element.find('label[for="' + e + '"]');
                return i.length ? i : t.closest("label")
            }
        }, {
            key: "findRadioLabels",
            value: function(e) {
                var i = this,
                    n = e.map(function(e, n) {
                        var o = n.id,
                            s = i.$element.find('label[for="' + o + '"]');
                        return s.length || (s = t(n).closest("label")), s[0]
                    });
                return t(n)
            }
        }, {
            key: "addErrorClasses",
            value: function(t) {
                var e = this.findLabel(t),
                    i = this.findFormError(t);
                e.length && e.addClass(this.options.labelErrorClass), i.length && i.addClass(this.options.formErrorClass), t.addClass(this.options.inputErrorClass).attr("data-invalid", "")
            }
        }, {
            key: "removeRadioErrorClasses",
            value: function(t) {
                var e = this.$element.find(':radio[name="' + t + '"]'),
                    i = this.findRadioLabels(e),
                    n = this.findFormError(e);
                i.length && i.removeClass(this.options.labelErrorClass), n.length && n.removeClass(this.options.formErrorClass), e.removeClass(this.options.inputErrorClass).removeAttr("data-invalid")
            }
        }, {
            key: "removeErrorClasses",
            value: function(t) {
                if ("radio" == t[0].type) return this.removeRadioErrorClasses(t.attr("name"));
                var e = this.findLabel(t),
                    i = this.findFormError(t);
                e.length && e.removeClass(this.options.labelErrorClass), i.length && i.removeClass(this.options.formErrorClass), t.removeClass(this.options.inputErrorClass).removeAttr("data-invalid")
            }
        }, {
            key: "validateInput",
            value: function(e) {
                var i = this.requiredCheck(e),
                    n = !1,
                    o = !0,
                    s = e.attr("data-validator"),
                    r = !0;
                if (e.is("[data-abide-ignore]") || e.is('[type="hidden"]') || e.is("[disabled]")) return !0;
                switch (e[0].type) {
                    case "radio":
                        n = this.validateRadio(e.attr("name"));
                        break;
                    case "checkbox":
                        n = i;
                        break;
                    case "select":
                    case "select-one":
                    case "select-multiple":
                        n = i;
                        break;
                    default:
                        n = this.validateText(e)
                }
                s && (o = this.matchValidation(e, s, e.attr("required"))), e.attr("data-equalto") && (r = this.options.validators.equalTo(e));
                var a = [i, n, o, r].indexOf(!1) === -1,
                    l = (a ? "valid" : "invalid") + ".zf.abide";
                if (a) {
                    var u = this.$element.find('[data-equalto="' + e.attr("id") + '"]');
                    if (u.length) {
                        var c = this;
                        u.each(function() {
                            t(this).val() && c.validateInput(t(this))
                        })
                    }
                }
                return this[a ? "removeErrorClasses" : "addErrorClasses"](e), e.trigger(l, [e]), a
            }
        }, {
            key: "validateForm",
            value: function() {
                var e = [],
                    i = this;
                this.$inputs.each(function() {
                    e.push(i.validateInput(t(this)))
                });
                var n = e.indexOf(!1) === -1;
                return this.$element.find("[data-abide-error]").css("display", n ? "none" : "block"), this.$element.trigger((n ? "formvalid" : "forminvalid") + ".zf.abide", [this.$element]), n
            }
        }, {
            key: "validateText",
            value: function(t, e) {
                e = e || t.attr("pattern") || t.attr("type");
                var i = t.val(),
                    n = !1;
                return i.length ? n = this.options.patterns.hasOwnProperty(e) ? this.options.patterns[e].test(i) : e === t.attr("type") || new RegExp(e).test(i) : t.prop("required") || (n = !0), n
            }
        }, {
            key: "validateRadio",
            value: function(e) {
                var i = this.$element.find(':radio[name="' + e + '"]'),
                    n = !1,
                    o = !1;
                return i.each(function(e, i) {
                    t(i).attr("required") && (o = !0)
                }), o || (n = !0), n || i.each(function(e, i) {
                    t(i).prop("checked") && (n = !0)
                }), n
            }
        }, {
            key: "matchValidation",
            value: function(t, e, i) {
                var n = this;
                i = !!i;
                var o = e.split(" ").map(function(e) {
                    return n.options.validators[e](t, i, t.parent())
                });
                return o.indexOf(!1) === -1
            }
        }, {
            key: "resetForm",
            value: function() {
                var e = this.$element,
                    i = this.options;
                t("." + i.labelErrorClass, e).not("small").removeClass(i.labelErrorClass), t("." + i.inputErrorClass, e).not("small").removeClass(i.inputErrorClass), t(i.formErrorSelector + "." + i.formErrorClass).removeClass(i.formErrorClass), e.find("[data-abide-error]").css("display", "none"), t(":input", e).not(":button, :submit, :reset, :hidden, :radio, :checkbox, [data-abide-ignore]").val("").removeAttr("data-invalid"), t(":input:radio", e).not("[data-abide-ignore]").prop("checked", !1).removeAttr("data-invalid"), t(":input:checkbox", e).not("[data-abide-ignore]").prop("checked", !1).removeAttr("data-invalid"), e.trigger("formreset.zf.abide", [e])
            }
        }, {
            key: "destroy",
            value: function() {
                var e = this;
                this.$element.off(".abide").find("[data-abide-error]").css("display", "none"), this.$inputs.off(".abide").each(function() {
                    e.removeErrorClasses(t(this))
                }), Foundation.unregisterPlugin(this)
            }
        }]), e
    }();
    e.defaults = {
        validateOn: "fieldChange",
        labelErrorClass: "is-invalid-label",
        inputErrorClass: "is-invalid-input",
        formErrorSelector: ".form-error",
        formErrorClass: "is-visible",
        liveValidate: !1,
        validateOnBlur: !1,
        patterns: {
            alpha: /^[a-zA-Z]+$/,
            alpha_numeric: /^[a-zA-Z0-9]+$/,
            integer: /^[-+]?\d+$/,
            number: /^[-+]?\d*(?:[\.\,]\d+)?$/,
            card: /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/,
            cvv: /^([0-9]){3,4}$/,
            email: /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$/,
            url: /^(https?|ftp|file|ssh):\/\/(((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/,
            domain: /^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,8}$/,
            datetime: /^([0-2][0-9]{3})\-([0-1][0-9])\-([0-3][0-9])T([0-5][0-9])\:([0-5][0-9])\:([0-5][0-9])(Z|([\-\+]([0-1][0-9])\:00))$/,
            date: /(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))$/,
            time: /^(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}$/,
            dateISO: /^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/,
            month_day_year: /^(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.]\d{4}$/,
            day_month_year: /^(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.]\d{4}$/,
            color: /^#?([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/
        },
        validators: {
            equalTo: function(e, i, n) {
                return t("#" + e.attr("data-equalto")).val() === e.val()
            }
        }
    }, Foundation.plugin(e, "Abide")
}(jQuery);
var _createClass = function() {
    function t(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(e, i, n) {
        return i && t(e.prototype, i), n && t(e, n), e
    }
}();
! function(t) {
    var e = function() {
        function e(i, n) {
            _classCallCheck(this, e), this.$element = i, this.options = t.extend({}, e.defaults, this.$element.data(), n), this._init(), Foundation.registerPlugin(this, "Accordion"), Foundation.Keyboard.register("Accordion", {
                ENTER: "toggle",
                SPACE: "toggle",
                ARROW_DOWN: "next",
                ARROW_UP: "previous"
            })
        }
        return _createClass(e, [{
            key: "_init",
            value: function() {
                var e = this;
                this.$element.attr("role", "tablist"), this.$tabs = this.$element.children("[data-accordion-item]"), this.$tabs.each(function(e, i) {
                    var n = t(i),
                        o = n.children("[data-tab-content]"),
                        s = o[0].id || Foundation.GetYoDigits(6, "accordion"),
                        r = i.id || s + "-label";
                    n.find("a:first").attr({
                        "aria-controls": s,
                        role: "tab",
                        id: r,
                        "aria-expanded": !1,
                        "aria-selected": !1
                    }), o.attr({
                        role: "tabpanel",
                        "aria-labelledby": r,
                        "aria-hidden": !0,
                        id: s
                    })
                });
                var i = this.$element.find(".is-active").children("[data-tab-content]");
                this.firstTimeInit = !0, i.length && (this.down(i, this.firstTimeInit), this.firstTimeInit = !1), this._checkDeepLink = function() {
                    var i = window.location.hash;
                    if (i.length) {
                        var n = e.$element.find('[href$="' + i + '"]'),
                            o = t(i);
                        if (n.length && o) {
                            if (n.parent("[data-accordion-item]").hasClass("is-active") || (e.down(o, e.firstTimeInit), e.firstTimeInit = !1), e.options.deepLinkSmudge) {
                                var s = e;
                                t(window).load(function() {
                                    var e = s.$element.offset();
                                    t("html, body").animate({
                                        scrollTop: e.top
                                    }, s.options.deepLinkSmudgeDelay)
                                })
                            }
                            e.$element.trigger("deeplink.zf.accordion", [n, o])
                        }
                    }
                }, this.options.deepLink && this._checkDeepLink(), this._events()
            }
        }, {
            key: "_events",
            value: function() {
                var e = this;
                this.$tabs.each(function() {
                    var i = t(this),
                        n = i.children("[data-tab-content]");
                    n.length && i.children("a").off("click.zf.accordion keydown.zf.accordion").on("click.zf.accordion", function(t) {
                        t.preventDefault(), e.toggle(n)
                    }).on("keydown.zf.accordion", function(t) {
                        Foundation.Keyboard.handleKey(t, "Accordion", {
                            toggle: function() {
                                e.toggle(n)
                            },
                            next: function() {
                                var t = i.next().find("a").focus();
                                e.options.multiExpand || t.trigger("click.zf.accordion")
                            },
                            previous: function() {
                                var t = i.prev().find("a").focus();
                                e.options.multiExpand || t.trigger("click.zf.accordion")
                            },
                            handled: function() {
                                t.preventDefault(), t.stopPropagation()
                            }
                        })
                    })
                }), this.options.deepLink && t(window).on("popstate", this._checkDeepLink)
            }
        }, {
            key: "toggle",
            value: function(t) {
                if (t.parent().hasClass("is-active") ? this.up(t) : this.down(t), this.options.deepLink) {
                    var e = t.prev("a").attr("href");
                    this.options.updateHistory ? history.pushState({}, "", e) : history.replaceState({}, "", e)
                }
            }
        }, {
            key: "down",
            value: function(e, i) {
                var n = this;
                if (e.attr("aria-hidden", !1).parent("[data-tab-content]").addBack().parent().addClass("is-active"), !this.options.multiExpand && !i) {
                    var o = this.$element.children(".is-active").children("[data-tab-content]");
                    o.length && this.up(o.not(e))
                }
                e.slideDown(this.options.slideSpeed, function() {
                    n.$element.trigger("down.zf.accordion", [e])
                }), t("#" + e.attr("aria-labelledby")).attr({
                    "aria-expanded": !0,
                    "aria-selected": !0
                })
            }
        }, {
            key: "up",
            value: function(e) {
                var i = e.parent().siblings(),
                    n = this;
                (this.options.allowAllClosed || i.hasClass("is-active")) && e.parent().hasClass("is-active") && (e.slideUp(n.options.slideSpeed, function() {
                    n.$element.trigger("up.zf.accordion", [e])
                }), e.attr("aria-hidden", !0).parent().removeClass("is-active"), t("#" + e.attr("aria-labelledby")).attr({
                    "aria-expanded": !1,
                    "aria-selected": !1
                }))
            }
        }, {
            key: "destroy",
            value: function() {
                this.$element.find("[data-tab-content]").stop(!0).slideUp(0).css("display", ""), this.$element.find("a").off(".zf.accordion"), this.options.deepLink && t(window).off("popstate", this._checkDeepLink), Foundation.unregisterPlugin(this)
            }
        }]), e
    }();
    e.defaults = {
        slideSpeed: 250,
        multiExpand: !1,
        allowAllClosed: !1,
        deepLink: !1,
        deepLinkSmudge: !1,
        deepLinkSmudgeDelay: 300,
        updateHistory: !1
    }, Foundation.plugin(e, "Accordion")
}(jQuery);
var _createClass = function() {
    function t(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(e, i, n) {
        return i && t(e.prototype, i), n && t(e, n), e
    }
}();
! function(t) {
    var e = function() {
        function e(i, n) {
            _classCallCheck(this, e), this.$element = i, this.options = t.extend({}, e.defaults, this.$element.data(), n), Foundation.Nest.Feather(this.$element, "dropdown"), this._init(), Foundation.registerPlugin(this, "DropdownMenu"), Foundation.Keyboard.register("DropdownMenu", {
                ENTER: "open",
                SPACE: "open",
                ARROW_RIGHT: "next",
                ARROW_UP: "up",
                ARROW_DOWN: "down",
                ARROW_LEFT: "previous",
                ESCAPE: "close"
            })
        }
        return _createClass(e, [{
            key: "_init",
            value: function() {
                var t = this.$element.find("li.is-dropdown-submenu-parent");
                this.$element.children(".is-dropdown-submenu-parent").children(".is-dropdown-submenu").addClass("first-sub"), this.$menuItems = this.$element.find('[role="menuitem"]'), this.$tabs = this.$element.children('[role="menuitem"]'), this.$tabs.find("ul.is-dropdown-submenu").addClass(this.options.verticalClass), this.$element.hasClass(this.options.rightClass) || "right" === this.options.alignment || Foundation.rtl() || this.$element.parents(".top-bar-right").is("*") ? (this.options.alignment = "right", t.addClass("opens-left")) : t.addClass("opens-right"), this.changed = !1, this._events()
            }
        }, {
            key: "_isVertical",
            value: function() {
                return "block" === this.$tabs.css("display")
            }
        }, {
            key: "_events",
            value: function() {
                var e = this,
                    i = "ontouchstart" in window || "undefined" != typeof window.ontouchstart,
                    n = "is-dropdown-submenu-parent",
                    o = function(o) {
                        var s = t(o.target).parentsUntil("ul", "." + n),
                            r = s.hasClass(n),
                            a = "true" === s.attr("data-is-click"),
                            l = s.children(".is-dropdown-submenu");
                        if (r)
                            if (a) {
                                if (!e.options.closeOnClick || !e.options.clickOpen && !i || e.options.forceFollow && i) return;
                                o.stopImmediatePropagation(), o.preventDefault(), e._hide(s)
                            } else o.preventDefault(), o.stopImmediatePropagation(), e._show(l), s.add(s.parentsUntil(e.$element, "." + n)).attr("data-is-click", !0)
                    };
                (this.options.clickOpen || i) && this.$menuItems.on("click.zf.dropdownmenu touchstart.zf.dropdownmenu", o), e.options.closeOnClickInside && this.$menuItems.on("click.zf.dropdownmenu", function(i) {
                    var o = t(this),
                        s = o.hasClass(n);
                    s || e._hide()
                }), this.options.disableHover || this.$menuItems.on("mouseenter.zf.dropdownmenu", function(i) {
                    var o = t(this),
                        s = o.hasClass(n);
                    s && (clearTimeout(o.data("_delay")), o.data("_delay", setTimeout(function() {
                        e._show(o.children(".is-dropdown-submenu"))
                    }, e.options.hoverDelay)))
                }).on("mouseleave.zf.dropdownmenu", function(i) {
                    var o = t(this),
                        s = o.hasClass(n);
                    if (s && e.options.autoclose) {
                        if ("true" === o.attr("data-is-click") && e.options.clickOpen) return !1;
                        clearTimeout(o.data("_delay")), o.data("_delay", setTimeout(function() {
                            e._hide(o)
                        }, e.options.closingTime))
                    }
                }), this.$menuItems.on("keydown.zf.dropdownmenu", function(i) {
                    var n, o, s = t(i.target).parentsUntil("ul", '[role="menuitem"]'),
                        r = e.$tabs.index(s) > -1,
                        a = r ? e.$tabs : s.siblings("li").add(s);
                    a.each(function(e) {
                        if (t(this).is(s)) return n = a.eq(e - 1), void(o = a.eq(e + 1))
                    });
                    var l = function() {
                            s.is(":last-child") || (o.children("a:first").focus(), i.preventDefault())
                        },
                        u = function() {
                            n.children("a:first").focus(), i.preventDefault()
                        },
                        c = function() {
                            var t = s.children("ul.is-dropdown-submenu");
                            t.length && (e._show(t), s.find("li > a:first").focus(), i.preventDefault())
                        },
                        h = function() {
                            var t = s.parent("ul").parent("li");
                            t.children("a:first").focus(), e._hide(t), i.preventDefault()
                        },
                        d = {
                            open: c,
                            close: function() {
                                e._hide(e.$element), e.$menuItems.find("a:first").focus(), i.preventDefault()
                            },
                            handled: function() {
                                i.stopImmediatePropagation()
                            }
                        };
                    r ? e._isVertical() ? Foundation.rtl() ? t.extend(d, {
                        down: l,
                        up: u,
                        next: h,
                        previous: c
                    }) : t.extend(d, {
                        down: l,
                        up: u,
                        next: c,
                        previous: h
                    }) : Foundation.rtl() ? t.extend(d, {
                        next: u,
                        previous: l,
                        down: c,
                        up: h
                    }) : t.extend(d, {
                        next: l,
                        previous: u,
                        down: c,
                        up: h
                    }) : Foundation.rtl() ? t.extend(d, {
                        next: h,
                        previous: c,
                        down: l,
                        up: u
                    }) : t.extend(d, {
                        next: c,
                        previous: h,
                        down: l,
                        up: u
                    }), Foundation.Keyboard.handleKey(i, "DropdownMenu", d)
                })
            }
        }, {
            key: "_addBodyHandler",
            value: function() {
                var e = t(document.body),
                    i = this;
                e.off("mouseup.zf.dropdownmenu touchend.zf.dropdownmenu").on("mouseup.zf.dropdownmenu touchend.zf.dropdownmenu", function(t) {
                    var n = i.$element.find(t.target);
                    n.length || (i._hide(), e.off("mouseup.zf.dropdownmenu touchend.zf.dropdownmenu"))
                })
            }
        }, {
            key: "_show",
            value: function(e) {
                var i = this.$tabs.index(this.$tabs.filter(function(i, n) {
                        return t(n).find(e).length > 0
                    })),
                    n = e.parent("li.is-dropdown-submenu-parent").siblings("li.is-dropdown-submenu-parent");
                this._hide(n, i), e.css("visibility", "hidden").addClass("js-dropdown-active").parent("li.is-dropdown-submenu-parent").addClass("is-active");
                var o = Foundation.Box.ImNotTouchingYou(e, null, !0);
                if (!o) {
                    var s = "left" === this.options.alignment ? "-right" : "-left",
                        r = e.parent(".is-dropdown-submenu-parent");
                    r.removeClass("opens" + s).addClass("opens-" + this.options.alignment), o = Foundation.Box.ImNotTouchingYou(e, null, !0), o || r.removeClass("opens-" + this.options.alignment).addClass("opens-inner"), this.changed = !0
                }
                e.css("visibility", ""), this.options.closeOnClick && this._addBodyHandler(), this.$element.trigger("show.zf.dropdownmenu", [e])
            }
        }, {
            key: "_hide",
            value: function(t, e) {
                var i;
                i = t && t.length ? t : void 0 !== e ? this.$tabs.not(function(t, i) {
                    return t === e
                }) : this.$element;
                var n = i.hasClass("is-active") || i.find(".is-active").length > 0;
                if (n) {
                    if (i.find("li.is-active").add(i).attr({
                            "data-is-click": !1
                        }).removeClass("is-active"), i.find("ul.js-dropdown-active").removeClass("js-dropdown-active"), this.changed || i.find("opens-inner").length) {
                        var o = "left" === this.options.alignment ? "right" : "left";
                        i.find("li.is-dropdown-submenu-parent").add(i).removeClass("opens-inner opens-" + this.options.alignment).addClass("opens-" + o), this.changed = !1
                    }
                    this.$element.trigger("hide.zf.dropdownmenu", [i])
                }
            }
        }, {
            key: "destroy",
            value: function() {
                this.$menuItems.off(".zf.dropdownmenu").removeAttr("data-is-click").removeClass("is-right-arrow is-left-arrow is-down-arrow opens-right opens-left opens-inner"), t(document.body).off(".zf.dropdownmenu"), Foundation.Nest.Burn(this.$element, "dropdown"), Foundation.unregisterPlugin(this)
            }
        }]), e
    }();
    e.defaults = {
        disableHover: !1,
        autoclose: !0,
        hoverDelay: 50,
        clickOpen: !1,
        closingTime: 500,
        alignment: "left",
        closeOnClick: !0,
        closeOnClickInside: !0,
        verticalClass: "vertical",
        rightClass: "align-right",
        forceFollow: !0
    }, Foundation.plugin(e, "DropdownMenu")
}(jQuery);
var _createClass = function() {
    function t(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(e, i, n) {
        return i && t(e.prototype, i), n && t(e, n), e
    }
}();
! function(t) {
    var e = function() {
        function e(i, n) {
            _classCallCheck(this, e), this.$element = i, this.options = t.extend({}, e.defaults, this.$element.data(), n), this._init(), Foundation.registerPlugin(this, "Equalizer")
        }
        return _createClass(e, [{
            key: "_init",
            value: function() {
                var e = this.$element.attr("data-equalizer") || "",
                    i = this.$element.find('[data-equalizer-watch="' + e + '"]');
                this.$watched = i.length ? i : this.$element.find("[data-equalizer-watch]"), this.$element.attr("data-resize", e || Foundation.GetYoDigits(6, "eq")), this.$element.attr("data-mutate", e || Foundation.GetYoDigits(6, "eq")), this.hasNested = this.$element.find("[data-equalizer]").length > 0, this.isNested = this.$element.parentsUntil(document.body, "[data-equalizer]").length > 0, this.isOn = !1, this._bindHandler = {
                    onResizeMeBound: this._onResizeMe.bind(this),
                    onPostEqualizedBound: this._onPostEqualized.bind(this)
                };
                var n, o = this.$element.find("img");
                this.options.equalizeOn ? (n = this._checkMQ(), t(window).on("changed.zf.mediaquery", this._checkMQ.bind(this))) : this._events(), (void 0 !== n && n === !1 || void 0 === n) && (o.length ? Foundation.onImagesLoaded(o, this._reflow.bind(this)) : this._reflow())
            }
        }, {
            key: "_pauseEvents",
            value: function() {
                this.isOn = !1, this.$element.off({
                    ".zf.equalizer": this._bindHandler.onPostEqualizedBound,
                    "resizeme.zf.trigger": this._bindHandler.onResizeMeBound,
                    "mutateme.zf.trigger": this._bindHandler.onResizeMeBound
                })
            }
        }, {
            key: "_onResizeMe",
            value: function(t) {
                this._reflow()
            }
        }, {
            key: "_onPostEqualized",
            value: function(t) {
                t.target !== this.$element[0] && this._reflow()
            }
        }, {
            key: "_events",
            value: function() {
                this._pauseEvents(), this.hasNested ? this.$element.on("postequalized.zf.equalizer", this._bindHandler.onPostEqualizedBound) : (this.$element.on("resizeme.zf.trigger", this._bindHandler.onResizeMeBound), this.$element.on("mutateme.zf.trigger", this._bindHandler.onResizeMeBound)), this.isOn = !0
            }
        }, {
            key: "_checkMQ",
            value: function() {
                var t = !Foundation.MediaQuery.is(this.options.equalizeOn);
                return t ? this.isOn && (this._pauseEvents(), this.$watched.css("height", "auto")) : this.isOn || this._events(), t
            }
        }, {
            key: "_killswitch",
            value: function() {}
        }, {
            key: "_reflow",
            value: function() {
                return !this.options.equalizeOnStack && this._isStacked() ? (this.$watched.css("height", "auto"), !1) : void(this.options.equalizeByRow ? this.getHeightsByRow(this.applyHeightByRow.bind(this)) : this.getHeights(this.applyHeight.bind(this)));
            }
        }, {
            key: "_isStacked",
            value: function() {
                return !this.$watched[0] || !this.$watched[1] || this.$watched[0].getBoundingClientRect().top !== this.$watched[1].getBoundingClientRect().top
            }
        }, {
            key: "getHeights",
            value: function(t) {
                for (var e = [], i = 0, n = this.$watched.length; i < n; i++) this.$watched[i].style.height = "auto", e.push(this.$watched[i].offsetHeight);
                t(e)
            }
        }, {
            key: "getHeightsByRow",
            value: function(e) {
                var i = this.$watched.length ? this.$watched.first().offset().top : 0,
                    n = [],
                    o = 0;
                n[o] = [];
                for (var s = 0, r = this.$watched.length; s < r; s++) {
                    this.$watched[s].style.height = "auto";
                    var a = t(this.$watched[s]).offset().top;
                    a != i && (o++, n[o] = [], i = a), n[o].push([this.$watched[s], this.$watched[s].offsetHeight])
                }
                for (var l = 0, u = n.length; l < u; l++) {
                    var c = t(n[l]).map(function() {
                            return this[1]
                        }).get(),
                        h = Math.max.apply(null, c);
                    n[l].push(h)
                }
                e(n)
            }
        }, {
            key: "applyHeight",
            value: function(t) {
                var e = Math.max.apply(null, t);
                this.$element.trigger("preequalized.zf.equalizer"), this.$watched.css("height", e), this.$element.trigger("postequalized.zf.equalizer")
            }
        }, {
            key: "applyHeightByRow",
            value: function(e) {
                this.$element.trigger("preequalized.zf.equalizer");
                for (var i = 0, n = e.length; i < n; i++) {
                    var o = e[i].length,
                        s = e[i][o - 1];
                    if (o <= 2) t(e[i][0][0]).css({
                        height: "auto"
                    });
                    else {
                        this.$element.trigger("preequalizedrow.zf.equalizer");
                        for (var r = 0, a = o - 1; r < a; r++) t(e[i][r][0]).css({
                            height: s
                        });
                        this.$element.trigger("postequalizedrow.zf.equalizer")
                    }
                }
                this.$element.trigger("postequalized.zf.equalizer")
            }
        }, {
            key: "destroy",
            value: function() {
                this._pauseEvents(), this.$watched.css("height", "auto"), Foundation.unregisterPlugin(this)
            }
        }]), e
    }();
    e.defaults = {
        equalizeOnStack: !1,
        equalizeByRow: !1,
        equalizeOn: ""
    }, Foundation.plugin(e, "Equalizer")
}(jQuery);
var _createClass = function() {
    function t(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(e, i, n) {
        return i && t(e.prototype, i), n && t(e, n), e
    }
}();
! function(t) {
    var e = function() {
        function e(i, n) {
            _classCallCheck(this, e), this.$element = i, this.options = t.extend({}, e.defaults, this.$element.data(), n), this.$lastTrigger = t(), this.$triggers = t(), this._init(), this._events(), Foundation.registerPlugin(this, "OffCanvas"), Foundation.Keyboard.register("OffCanvas", {
                ESCAPE: "close"
            })
        }
        return _createClass(e, [{
            key: "_init",
            value: function() {
                var e = this.$element.attr("id");
                if (this.$element.attr("aria-hidden", "true"), this.$element.addClass("is-transition-" + this.options.transition), this.$triggers = t(document).find('[data-open="' + e + '"], [data-close="' + e + '"], [data-toggle="' + e + '"]').attr("aria-expanded", "false").attr("aria-controls", e), this.options.contentOverlay === !0) {
                    var i = document.createElement("div"),
                        n = "fixed" === t(this.$element).css("position") ? "is-overlay-fixed" : "is-overlay-absolute";
                    i.setAttribute("class", "js-off-canvas-overlay " + n), this.$overlay = t(i), "is-overlay-fixed" === n ? t("body").append(this.$overlay) : this.$element.siblings("[data-off-canvas-content]").append(this.$overlay)
                }
                this.options.isRevealed = this.options.isRevealed || new RegExp(this.options.revealClass, "g").test(this.$element[0].className), this.options.isRevealed === !0 && (this.options.revealOn = this.options.revealOn || this.$element[0].className.match(/(reveal-for-medium|reveal-for-large)/g)[0].split("-")[2], this._setMQChecker()), !this.options.transitionTime == !0 && (this.options.transitionTime = 1e3 * parseFloat(window.getComputedStyle(t("[data-off-canvas]")[0]).transitionDuration))
            }
        }, {
            key: "_events",
            value: function() {
                if (this.$element.off(".zf.trigger .zf.offcanvas").on({
                        "open.zf.trigger": this.open.bind(this),
                        "close.zf.trigger": this.close.bind(this),
                        "toggle.zf.trigger": this.toggle.bind(this),
                        "keydown.zf.offcanvas": this._handleKeyboard.bind(this)
                    }), this.options.closeOnClick === !0) {
                    var e = this.options.contentOverlay ? this.$overlay : t("[data-off-canvas-content]");
                    e.on({
                        "click.zf.offcanvas": this.close.bind(this)
                    })
                }
            }
        }, {
            key: "_setMQChecker",
            value: function() {
                var e = this;
                t(window).on("changed.zf.mediaquery", function() {
                    Foundation.MediaQuery.atLeast(e.options.revealOn) ? e.reveal(!0) : e.reveal(!1)
                }).one("load.zf.offcanvas", function() {
                    Foundation.MediaQuery.atLeast(e.options.revealOn) && e.reveal(!0)
                })
            }
        }, {
            key: "reveal",
            value: function(t) {
                var e = this.$element.find("[data-close]");
                t ? (this.close(), this.isRevealed = !0, this.$element.attr("aria-hidden", "false"), this.$element.off("open.zf.trigger toggle.zf.trigger"), e.length && e.hide()) : (this.isRevealed = !1, this.$element.attr("aria-hidden", "true"), this.$element.off("open.zf.trigger toggle.zf.trigger").on({
                    "open.zf.trigger": this.open.bind(this),
                    "toggle.zf.trigger": this.toggle.bind(this)
                }), e.length && e.show())
            }
        }, {
            key: "_stopScrolling",
            value: function(t) {
                return !1
            }
        }, {
            key: "_recordScrollable",
            value: function(t) {
                var e = this;
                e.scrollHeight !== e.clientHeight && (0 === e.scrollTop && (e.scrollTop = 1), e.scrollTop === e.scrollHeight - e.clientHeight && (e.scrollTop = e.scrollHeight - e.clientHeight - 1)), e.allowUp = e.scrollTop > 0, e.allowDown = e.scrollTop < e.scrollHeight - e.clientHeight, e.lastY = t.originalEvent.pageY
            }
        }, {
            key: "_stopScrollPropagation",
            value: function(t) {
                var e = this,
                    i = t.pageY < e.lastY,
                    n = !i;
                e.lastY = t.pageY, i && e.allowUp || n && e.allowDown ? t.stopPropagation() : t.preventDefault()
            }
        }, {
            key: "open",
            value: function(e, i) {
                if (!this.$element.hasClass("is-open") && !this.isRevealed) {
                    var n = this;
                    i && (this.$lastTrigger = i), "top" === this.options.forceTo ? window.scrollTo(0, 0) : "bottom" === this.options.forceTo && window.scrollTo(0, document.body.scrollHeight), n.$element.addClass("is-open"), this.$triggers.attr("aria-expanded", "true"), this.$element.attr("aria-hidden", "false").trigger("opened.zf.offcanvas"), this.options.contentScroll === !1 && (t("body").addClass("is-off-canvas-open").on("touchmove", this._stopScrolling), this.$element.on("touchstart", this._recordScrollable), this.$element.on("touchmove", this._stopScrollPropagation)), this.options.contentOverlay === !0 && this.$overlay.addClass("is-visible"), this.options.closeOnClick === !0 && this.options.contentOverlay === !0 && this.$overlay.addClass("is-closable"), this.options.autoFocus === !0 && this.$element.one(Foundation.transitionend(this.$element), function() {
                        var t = n.$element.find("[data-autofocus]");
                        t.length ? t.eq(0).focus() : n.$element.find("a, button").eq(0).focus()
                    }), this.options.trapFocus === !0 && (this.$element.siblings("[data-off-canvas-content]").attr("tabindex", "-1"), Foundation.Keyboard.trapFocus(this.$element))
                }
            }
        }, {
            key: "close",
            value: function(e) {
                if (this.$element.hasClass("is-open") && !this.isRevealed) {
                    var i = this;
                    i.$element.removeClass("is-open"), this.$element.attr("aria-hidden", "true").trigger("closed.zf.offcanvas"), this.options.contentScroll === !1 && (t("body").removeClass("is-off-canvas-open").off("touchmove", this._stopScrolling), this.$element.off("touchstart", this._recordScrollable), this.$element.off("touchmove", this._stopScrollPropagation)), this.options.contentOverlay === !0 && this.$overlay.removeClass("is-visible"), this.options.closeOnClick === !0 && this.options.contentOverlay === !0 && this.$overlay.removeClass("is-closable"), this.$triggers.attr("aria-expanded", "false"), this.options.trapFocus === !0 && (this.$element.siblings("[data-off-canvas-content]").removeAttr("tabindex"), Foundation.Keyboard.releaseFocus(this.$element))
                }
            }
        }, {
            key: "toggle",
            value: function(t, e) {
                this.$element.hasClass("is-open") ? this.close(t, e) : this.open(t, e)
            }
        }, {
            key: "_handleKeyboard",
            value: function(t) {
                var e = this;
                Foundation.Keyboard.handleKey(t, "OffCanvas", {
                    close: function() {
                        return e.close(), e.$lastTrigger.focus(), !0
                    },
                    handled: function() {
                        t.stopPropagation(), t.preventDefault()
                    }
                })
            }
        }, {
            key: "destroy",
            value: function() {
                this.close(), this.$element.off(".zf.trigger .zf.offcanvas"), this.$overlay.off(".zf.offcanvas"), Foundation.unregisterPlugin(this)
            }
        }]), e
    }();
    e.defaults = {
        closeOnClick: !0,
        contentOverlay: !0,
        contentScroll: !0,
        transitionTime: 0,
        transition: "push",
        forceTo: null,
        isRevealed: !1,
        revealOn: null,
        autoFocus: !0,
        revealClass: "reveal-for-",
        trapFocus: !1
    }, Foundation.plugin(e, "OffCanvas")
}(jQuery);
var _createClass = function() {
    function t(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(e, i, n) {
        return i && t(e.prototype, i), n && t(e, n), e
    }
}();
! function(t) {
    var e = function() {
        function e(i, n) {
            _classCallCheck(this, e), this.$element = i, this.options = t.extend({}, e.defaults, this.$element.data(), n), this._init(), Foundation.registerPlugin(this, "Orbit"), Foundation.Keyboard.register("Orbit", {
                ltr: {
                    ARROW_RIGHT: "next",
                    ARROW_LEFT: "previous"
                },
                rtl: {
                    ARROW_LEFT: "next",
                    ARROW_RIGHT: "previous"
                }
            })
        }
        return _createClass(e, [{
            key: "_init",
            value: function() {
                this._reset(), this.$wrapper = this.$element.find("." + this.options.containerClass), this.$slides = this.$element.find("." + this.options.slideClass);
                var t = this.$element.find("img"),
                    e = this.$slides.filter(".is-active"),
                    i = this.$element[0].id || Foundation.GetYoDigits(6, "orbit");
                this.$element.attr({
                    "data-resize": i,
                    id: i
                }), e.length || this.$slides.eq(0).addClass("is-active"), this.options.useMUI || this.$slides.addClass("no-motionui"), t.length ? Foundation.onImagesLoaded(t, this._prepareForOrbit.bind(this)) : this._prepareForOrbit(), this.options.bullets && this._loadBullets(), this._events(), this.options.autoPlay && this.$slides.length > 1 && this.geoSync(), this.options.accessible && this.$wrapper.attr("tabindex", 0)
            }
        }, {
            key: "_loadBullets",
            value: function() {
                this.$bullets = this.$element.find("." + this.options.boxOfBullets).find("button")
            }
        }, {
            key: "geoSync",
            value: function() {
                var t = this;
                this.timer = new Foundation.Timer(this.$element, {
                    duration: this.options.timerDelay,
                    infinite: !1
                }, function() {
                    t.changeSlide(!0)
                }), this.timer.start()
            }
        }, {
            key: "_prepareForOrbit",
            value: function() {
                this._setWrapperHeight()
            }
        }, {
            key: "_setWrapperHeight",
            value: function(e) {
                var i, n = 0,
                    o = 0,
                    s = this;
                this.$slides.each(function() {
                    i = this.getBoundingClientRect().height, t(this).attr("data-slide", o), s.$slides.filter(".is-active")[0] !== s.$slides.eq(o)[0] && t(this).css({
                        position: "relative",
                        display: "none"
                    }), n = i > n ? i : n, o++
                }), o === this.$slides.length && (this.$wrapper.css({
                    height: n
                }), e && e(n))
            }
        }, {
            key: "_setSlideHeight",
            value: function(e) {
                this.$slides.each(function() {
                    t(this).css("max-height", e)
                })
            }
        }, {
            key: "_events",
            value: function() {
                var e = this;
                if (this.$element.off(".resizeme.zf.trigger").on({
                        "resizeme.zf.trigger": this._prepareForOrbit.bind(this)
                    }), this.$slides.length > 1) {
                    if (this.options.swipe && this.$slides.off("swipeleft.zf.orbit swiperight.zf.orbit").on("swipeleft.zf.orbit", function(t) {
                            t.preventDefault(), e.changeSlide(!0)
                        }).on("swiperight.zf.orbit", function(t) {
                            t.preventDefault(), e.changeSlide(!1)
                        }), this.options.autoPlay && (this.$slides.on("click.zf.orbit", function() {
                            e.$element.data("clickedOn", !e.$element.data("clickedOn")), e.timer[e.$element.data("clickedOn") ? "pause" : "start"]()
                        }), this.options.pauseOnHover && this.$element.on("mouseenter.zf.orbit", function() {
                            e.timer.pause()
                        }).on("mouseleave.zf.orbit", function() {
                            e.$element.data("clickedOn") || e.timer.start()
                        })), this.options.navButtons) {
                        var i = this.$element.find("." + this.options.nextClass + ", ." + this.options.prevClass);
                        i.attr("tabindex", 0).on("click.zf.orbit touchend.zf.orbit", function(i) {
                            i.preventDefault(), e.changeSlide(t(this).hasClass(e.options.nextClass))
                        })
                    }
                    this.options.bullets && this.$bullets.on("click.zf.orbit touchend.zf.orbit", function() {
                        if (/is-active/g.test(this.className)) return !1;
                        var i = t(this).data("slide"),
                            n = i > e.$slides.filter(".is-active").data("slide"),
                            o = e.$slides.eq(i);
                        e.changeSlide(n, o, i)
                    }), this.options.accessible && this.$wrapper.add(this.$bullets).on("keydown.zf.orbit", function(i) {
                        Foundation.Keyboard.handleKey(i, "Orbit", {
                            next: function() {
                                e.changeSlide(!0)
                            },
                            previous: function() {
                                e.changeSlide(!1)
                            },
                            handled: function() {
                                t(i.target).is(e.$bullets) && e.$bullets.filter(".is-active").focus()
                            }
                        })
                    })
                }
            }
        }, {
            key: "_reset",
            value: function() {
                "undefined" != typeof this.$slides && this.$slides.length > 1 && (this.$element.off(".zf.orbit").find("*").off(".zf.orbit"), this.options.autoPlay && this.timer.restart(), this.$slides.each(function(e) {
                    t(e).removeClass("is-active is-active is-in").removeAttr("aria-live").hide()
                }), this.$slides.first().addClass("is-active").show(), this.$element.trigger("slidechange.zf.orbit", [this.$slides.first()]), this.options.bullets && this._updateBullets(0))
            }
        }, {
            key: "changeSlide",
            value: function(t, e, i) {
                if (this.$slides) {
                    var n = this.$slides.filter(".is-active").eq(0);
                    if (/mui/g.test(n[0].className)) return !1;
                    var o, s = this.$slides.first(),
                        r = this.$slides.last(),
                        a = t ? "Right" : "Left",
                        l = t ? "Left" : "Right",
                        u = this;
                    o = e ? e : t ? this.options.infiniteWrap ? n.next("." + this.options.slideClass).length ? n.next("." + this.options.slideClass) : s : n.next("." + this.options.slideClass) : this.options.infiniteWrap ? n.prev("." + this.options.slideClass).length ? n.prev("." + this.options.slideClass) : r : n.prev("." + this.options.slideClass), o.length && (this.$element.trigger("beforeslidechange.zf.orbit", [n, o]), this.options.bullets && (i = i || this.$slides.index(o), this._updateBullets(i)), this.options.useMUI && !this.$element.is(":hidden") ? (Foundation.Motion.animateIn(o.addClass("is-active").css({
                        position: "absolute",
                        top: 0
                    }), this.options["animInFrom" + a], function() {
                        o.css({
                            position: "relative",
                            display: "block"
                        }).attr("aria-live", "polite")
                    }), Foundation.Motion.animateOut(n.removeClass("is-active"), this.options["animOutTo" + l], function() {
                        n.removeAttr("aria-live"), u.options.autoPlay && !u.timer.isPaused && u.timer.restart()
                    })) : (n.removeClass("is-active is-in").removeAttr("aria-live").hide(), o.addClass("is-active is-in").attr("aria-live", "polite").show(), this.options.autoPlay && !this.timer.isPaused && this.timer.restart()), this.$element.trigger("slidechange.zf.orbit", [o]))
                }
            }
        }, {
            key: "_updateBullets",
            value: function(t) {
                var e = this.$element.find("." + this.options.boxOfBullets).find(".is-active").removeClass("is-active").blur(),
                    i = e.find("span:last").detach();
                this.$bullets.eq(t).addClass("is-active").append(i)
            }
        }, {
            key: "destroy",
            value: function() {
                this.$element.off(".zf.orbit").find("*").off(".zf.orbit").end().hide(), Foundation.unregisterPlugin(this)
            }
        }]), e
    }();
    e.defaults = {
        bullets: !0,
        navButtons: !0,
        animInFromRight: "slide-in-right",
        animOutToRight: "slide-out-right",
        animInFromLeft: "slide-in-left",
        animOutToLeft: "slide-out-left",
        autoPlay: !0,
        timerDelay: 5e3,
        infiniteWrap: !0,
        swipe: !0,
        pauseOnHover: !0,
        accessible: !0,
        containerClass: "orbit-container",
        slideClass: "orbit-slide",
        boxOfBullets: "orbit-bullets",
        nextClass: "orbit-next",
        prevClass: "orbit-previous",
        useMUI: !0
    }, Foundation.plugin(e, "Orbit")
}(jQuery);
var _createClass = function() {
    function t(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(e, i, n) {
        return i && t(e.prototype, i), n && t(e, n), e
    }
}();
! function(t) {
    var e = function() {
        function e(i, n) {
            _classCallCheck(this, e), this.$element = t(i), this.rules = this.$element.data("responsive-menu"), this.currentMq = null, this.currentPlugin = null, this._init(), this._events(), Foundation.registerPlugin(this, "ResponsiveMenu")
        }
        return _createClass(e, [{
            key: "_init",
            value: function() {
                if ("string" == typeof this.rules) {
                    for (var e = {}, n = this.rules.split(" "), o = 0; o < n.length; o++) {
                        var s = n[o].split("-"),
                            r = s.length > 1 ? s[0] : "small",
                            a = s.length > 1 ? s[1] : s[0];
                        null !== i[a] && (e[r] = i[a])
                    }
                    this.rules = e
                }
                t.isEmptyObject(this.rules) || this._checkMediaQueries(), this.$element.attr("data-mutate", this.$element.attr("data-mutate") || Foundation.GetYoDigits(6, "responsive-menu"))
            }
        }, {
            key: "_events",
            value: function() {
                var e = this;
                t(window).on("changed.zf.mediaquery", function() {
                    e._checkMediaQueries()
                })
            }
        }, {
            key: "_checkMediaQueries",
            value: function() {
                var e, n = this;
                t.each(this.rules, function(t) {
                    Foundation.MediaQuery.atLeast(t) && (e = t)
                }), e && (this.currentPlugin instanceof this.rules[e].plugin || (t.each(i, function(t, e) {
                    n.$element.removeClass(e.cssClass)
                }), this.$element.addClass(this.rules[e].cssClass), this.currentPlugin && this.currentPlugin.destroy(), this.currentPlugin = new this.rules[e].plugin(this.$element, {})))
            }
        }, {
            key: "destroy",
            value: function() {
                this.currentPlugin.destroy(), t(window).off(".zf.ResponsiveMenu"), Foundation.unregisterPlugin(this)
            }
        }]), e
    }();
    e.defaults = {};
    var i = {
        dropdown: {
            cssClass: "dropdown",
            plugin: Foundation._plugins["dropdown-menu"] || null
        },
        drilldown: {
            cssClass: "drilldown",
            plugin: Foundation._plugins.drilldown || null
        },
        accordion: {
            cssClass: "accordion-menu",
            plugin: Foundation._plugins["accordion-menu"] || null
        }
    };
    Foundation.plugin(e, "ResponsiveMenu")
}(jQuery);
var _createClass = function() {
    function t(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(e, i, n) {
        return i && t(e.prototype, i), n && t(e, n), e
    }
}();
! function(t) {
    var e = function() {
        function e(i, n) {
            _classCallCheck(this, e), this.$element = t(i), this.options = t.extend({}, e.defaults, this.$element.data(), n), this._init(), this._events(), Foundation.registerPlugin(this, "ResponsiveToggle")
        }
        return _createClass(e, [{
            key: "_init",
            value: function() {
                var e = this.$element.data("responsive-toggle");
                if (e || console.error("Your tab bar needs an ID of a Menu as the value of data-tab-bar."), this.$targetMenu = t("#" + e), this.$toggler = this.$element.find("[data-toggle]").filter(function() {
                        var i = t(this).data("toggle");
                        return i === e || "" === i
                    }), this.options = t.extend({}, this.options, this.$targetMenu.data()), this.options.animate) {
                    var i = this.options.animate.split(" ");
                    this.animationIn = i[0], this.animationOut = i[1] || null
                }
                this._update()
            }
        }, {
            key: "_events",
            value: function() {
                this._updateMqHandler = this._update.bind(this), t(window).on("changed.zf.mediaquery", this._updateMqHandler), this.$toggler.on("click.zf.responsiveToggle", this.toggleMenu.bind(this))
            }
        }, {
            key: "_update",
            value: function() {
                Foundation.MediaQuery.atLeast(this.options.hideFor) ? (this.$element.hide(), this.$targetMenu.show()) : (this.$element.show(), this.$targetMenu.hide())
            }
        }, {
            key: "toggleMenu",
            value: function() {
                var t = this;
                Foundation.MediaQuery.atLeast(this.options.hideFor) || (this.options.animate ? this.$targetMenu.is(":hidden") ? Foundation.Motion.animateIn(this.$targetMenu, this.animationIn, function() {
                    t.$element.trigger("toggled.zf.responsiveToggle"), t.$targetMenu.find("[data-mutate]").triggerHandler("mutateme.zf.trigger")
                }) : Foundation.Motion.animateOut(this.$targetMenu, this.animationOut, function() {
                    t.$element.trigger("toggled.zf.responsiveToggle")
                }) : (this.$targetMenu.toggle(0), this.$targetMenu.find("[data-mutate]").trigger("mutateme.zf.trigger"), this.$element.trigger("toggled.zf.responsiveToggle")))
            }
        }, {
            key: "destroy",
            value: function() {
                this.$element.off(".zf.responsiveToggle"), this.$toggler.off(".zf.responsiveToggle"), t(window).off("changed.zf.mediaquery", this._updateMqHandler), Foundation.unregisterPlugin(this)
            }
        }]), e
    }();
    e.defaults = {
        hideFor: "medium",
        animate: !1
    }, Foundation.plugin(e, "ResponsiveToggle")
}(jQuery);
var _createClass = function() {
    function t(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(e, i, n) {
        return i && t(e.prototype, i), n && t(e, n), e
    }
}();
! function(t) {
    function e() {
        return /iP(ad|hone|od).*OS/.test(window.navigator.userAgent)
    }

    function i() {
        return /Android/.test(window.navigator.userAgent)
    }

    function n() {
        return e() || i()
    }
    var o = function() {
        function e(i, n) {
            _classCallCheck(this, e), this.$element = i, this.options = t.extend({}, e.defaults, this.$element.data(), n), this._init(), Foundation.registerPlugin(this, "Reveal"), Foundation.Keyboard.register("Reveal", {
                ENTER: "open",
                SPACE: "open",
                ESCAPE: "close"
            })
        }
        return _createClass(e, [{
            key: "_init",
            value: function() {
                this.id = this.$element.attr("id"), this.isActive = !1, this.cached = {
                    mq: Foundation.MediaQuery.current
                }, this.isMobile = n(), this.$anchor = t(t('[data-open="' + this.id + '"]').length ? '[data-open="' + this.id + '"]' : '[data-toggle="' + this.id + '"]'), this.$anchor.attr({
                    "aria-controls": this.id,
                    "aria-haspopup": !0,
                    tabindex: 0
                }), (this.options.fullScreen || this.$element.hasClass("full")) && (this.options.fullScreen = !0, this.options.overlay = !1), this.options.overlay && !this.$overlay && (this.$overlay = this._makeOverlay(this.id)), this.$element.attr({
                    role: "dialog",
                    "aria-hidden": !0,
                    "data-yeti-box": this.id,
                    "data-resize": this.id
                }), this.$overlay ? this.$element.detach().appendTo(this.$overlay) : (this.$element.detach().appendTo(t(this.options.appendTo)), this.$element.addClass("without-overlay")), this._events(), this.options.deepLink && window.location.hash === "#" + this.id && t(window).one("load.zf.reveal", this.open.bind(this))
            }
        }, {
            key: "_makeOverlay",
            value: function() {
                return t("<div></div>").addClass("reveal-overlay").appendTo(this.options.appendTo)
            }
        }, {
            key: "_updatePosition",
            value: function() {
                var e, i, n = this.$element.outerWidth(),
                    o = t(window).width(),
                    s = this.$element.outerHeight(),
                    r = t(window).height();
                e = "auto" === this.options.hOffset ? parseInt((o - n) / 2, 10) : parseInt(this.options.hOffset, 10), i = "auto" === this.options.vOffset ? s > r ? parseInt(Math.min(100, r / 10), 10) : parseInt((r - s) / 4, 10) : parseInt(this.options.vOffset, 10), this.$element.css({
                    top: i + "px"
                }), this.$overlay && "auto" === this.options.hOffset || (this.$element.css({
                    left: e + "px"
                }), this.$element.css({
                    margin: "0px"
                }))
            }
        }, {
            key: "_events",
            value: function() {
                var e = this,
                    i = this;
                this.$element.on({
                    "open.zf.trigger": this.open.bind(this),
                    "close.zf.trigger": function(n, o) {
                        if (n.target === i.$element[0] || t(n.target).parents("[data-closable]")[0] === o) return e.close.apply(e)
                    },
                    "toggle.zf.trigger": this.toggle.bind(this),
                    "resizeme.zf.trigger": function() {
                        i._updatePosition()
                    }
                }), this.$anchor.length && this.$anchor.on("keydown.zf.reveal", function(t) {
                    13 !== t.which && 32 !== t.which || (t.stopPropagation(), t.preventDefault(), i.open())
                }), this.options.closeOnClick && this.options.overlay && this.$overlay.off(".zf.reveal").on("click.zf.reveal", function(e) {
                    e.target !== i.$element[0] && !t.contains(i.$element[0], e.target) && t.contains(document, e.target) && i.close()
                }), this.options.deepLink && t(window).on("popstate.zf.reveal:" + this.id, this._handleState.bind(this))
            }
        }, {
            key: "_handleState",
            value: function(t) {
                window.location.hash !== "#" + this.id || this.isActive ? this.close() : this.open()
            }
        }, {
            key: "open",
            value: function() {
                function e() {
                    o.isMobile ? (o.originalScrollPos || (o.originalScrollPos = window.pageYOffset), t("html, body").addClass("is-reveal-open")) : t("body").addClass("is-reveal-open")
                }
                var i = this;
                if (this.options.deepLink) {
                    var n = "#" + this.id;
                    window.history.pushState ? window.history.pushState(null, null, n) : window.location.hash = n
                }
                this.isActive = !0, this.$element.css({
                    visibility: "hidden"
                }).show().scrollTop(0), this.options.overlay && this.$overlay.css({
                    visibility: "hidden"
                }).show(), this._updatePosition(), this.$element.hide().css({
                    visibility: ""
                }), this.$overlay && (this.$overlay.css({
                    visibility: ""
                }).hide(), this.$element.hasClass("fast") ? this.$overlay.addClass("fast") : this.$element.hasClass("slow") && this.$overlay.addClass("slow")), this.options.multipleOpened || this.$element.trigger("closeme.zf.reveal", this.id);
                var o = this;
                if (this.options.animationIn) {
                    var s = function() {
                        o.$element.attr({
                            "aria-hidden": !1,
                            tabindex: -1
                        }).focus(), e(), Foundation.Keyboard.trapFocus(o.$element)
                    };
                    this.options.overlay && Foundation.Motion.animateIn(this.$overlay, "fade-in"), Foundation.Motion.animateIn(this.$element, this.options.animationIn, function() {
                        i.$element && (i.focusableElements = Foundation.Keyboard.findFocusable(i.$element), s())
                    })
                } else this.options.overlay && this.$overlay.show(0), this.$element.show(this.options.showDelay);
                this.$element.attr({
                    "aria-hidden": !1,
                    tabindex: -1
                }).focus(), Foundation.Keyboard.trapFocus(this.$element), this.$element.trigger("open.zf.reveal"), e(), setTimeout(function() {
                    i._extraHandlers()
                }, 0)
            }
        }, {
            key: "_extraHandlers",
            value: function() {
                var e = this;
                this.$element && (this.focusableElements = Foundation.Keyboard.findFocusable(this.$element), this.options.overlay || !this.options.closeOnClick || this.options.fullScreen || t("body").on("click.zf.reveal", function(i) {
                    i.target !== e.$element[0] && !t.contains(e.$element[0], i.target) && t.contains(document, i.target) && e.close()
                }), this.options.closeOnEsc && t(window).on("keydown.zf.reveal", function(t) {
                    Foundation.Keyboard.handleKey(t, "Reveal", {
                        close: function() {
                            e.options.closeOnEsc && (e.close(), e.$anchor.focus())
                        }
                    })
                }), this.$element.on("keydown.zf.reveal", function(i) {
                    var n = t(this);
                    Foundation.Keyboard.handleKey(i, "Reveal", {
                        open: function() {
                            e.$element.find(":focus").is(e.$element.find("[data-close]")) ? setTimeout(function() {
                                e.$anchor.focus()
                            }, 1) : n.is(e.focusableElements) && e.open()
                        },
                        close: function() {
                            e.options.closeOnEsc && (e.close(), e.$anchor.focus())
                        },
                        handled: function(t) {
                            t && i.preventDefault()
                        }
                    })
                }))
            }
        }, {
            key: "close",
            value: function() {
                function e() {
                    i.isMobile ? (0 === t(".reveal:visible").length && t("html, body").removeClass("is-reveal-open"), i.originalScrollPos && (t("body").scrollTop(i.originalScrollPos), i.originalScrollPos = null)) : 0 === t(".reveal:visible").length && t("body").removeClass("is-reveal-open"), Foundation.Keyboard.releaseFocus(i.$element), i.$element.attr("aria-hidden", !0), i.$element.trigger("closed.zf.reveal")
                }
                if (!this.isActive || !this.$element.is(":visible")) return !1;
                var i = this;
                this.options.animationOut ? (this.options.overlay ? Foundation.Motion.animateOut(this.$overlay, "fade-out", e) : e(), Foundation.Motion.animateOut(this.$element, this.options.animationOut)) : (this.$element.hide(this.options.hideDelay), this.options.overlay ? this.$overlay.hide(0, e) : e()), this.options.closeOnEsc && t(window).off("keydown.zf.reveal"), !this.options.overlay && this.options.closeOnClick && t("body").off("click.zf.reveal"), this.$element.off("keydown.zf.reveal"), this.options.resetOnClose && this.$element.html(this.$element.html()), this.isActive = !1, i.options.deepLink && (window.history.replaceState ? window.history.replaceState("", document.title, window.location.href.replace("#" + this.id, "")) : window.location.hash = "")
            }
        }, {
            key: "toggle",
            value: function() {
                this.isActive ? this.close() : this.open()
            }
        }, {
            key: "destroy",
            value: function() {
                this.options.overlay && (this.$element.appendTo(t(this.options.appendTo)), this.$overlay.hide().off().remove()), this.$element.hide().off(), this.$anchor.off(".zf"), t(window).off(".zf.reveal:" + this.id), Foundation.unregisterPlugin(this)
            }
        }]), e
    }();
    o.defaults = {
        animationIn: "",
        animationOut: "",
        showDelay: 0,
        hideDelay: 0,
        closeOnClick: !0,
        closeOnEsc: !0,
        multipleOpened: !1,
        vOffset: "auto",
        hOffset: "auto",
        fullScreen: !1,
        btmOffsetPct: 10,
        overlay: !0,
        resetOnClose: !1,
        deepLink: !1,
        appendTo: "body"
    }, Foundation.plugin(o, "Reveal")
}(jQuery);
var _createClass = function() {
    function t(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(e, i, n) {
        return i && t(e.prototype, i), n && t(e, n), e
    }
}();
! function(t) {
    function e(t) {
        return parseInt(window.getComputedStyle(document.body, null).fontSize, 10) * t
    }
    var i = function() {
        function i(e, n) {
            _classCallCheck(this, i), this.$element = e, this.options = t.extend({}, i.defaults, this.$element.data(), n), this._init(), Foundation.registerPlugin(this, "Sticky")
        }
        return _createClass(i, [{
            key: "_init",
            value: function() {
                var e = this.$element.parent("[data-sticky-container]"),
                    i = this.$element[0].id || Foundation.GetYoDigits(6, "sticky"),
                    n = this;
                e.length || (this.wasWrapped = !0), this.$container = e.length ? e : t(this.options.container).wrapInner(this.$element), this.$container.addClass(this.options.containerClass), this.$element.addClass(this.options.stickyClass).attr({
                    "data-resize": i,
                    "data-mutate": i
                }), "" !== this.options.anchor && t("#" + n.options.anchor).attr({
                    "data-mutate": i
                }), this.scrollCount = this.options.checkEvery, this.isStuck = !1, t(window).one("load.zf.sticky", function() {
                    n.containerHeight = "none" == n.$element.css("display") ? 0 : n.$element[0].getBoundingClientRect().height, n.$container.css("height", n.containerHeight), n.elemHeight = n.containerHeight, "" !== n.options.anchor ? n.$anchor = t("#" + n.options.anchor) : n._parsePoints(), n._setSizes(function() {
                        var t = window.pageYOffset;
                        n._calc(!1, t), n.isStuck || n._removeSticky(!(t >= n.topPoint))
                    }), n._events(i.split("-").reverse().join("-"))
                })
            }
        }, {
            key: "_parsePoints",
            value: function() {
                for (var e = "" == this.options.topAnchor ? 1 : this.options.topAnchor, i = "" == this.options.btmAnchor ? document.documentElement.scrollHeight : this.options.btmAnchor, n = [e, i], o = {}, s = 0, r = n.length; s < r && n[s]; s++) {
                    var a;
                    if ("number" == typeof n[s]) a = n[s];
                    else {
                        var l = n[s].split(":"),
                            u = t("#" + l[0]);
                        a = u.offset().top, l[1] && "bottom" === l[1].toLowerCase() && (a += u[0].getBoundingClientRect().height)
                    }
                    o[s] = a
                }
                this.points = o
            }
        }, {
            key: "_events",
            value: function(e) {
                var i = this,
                    n = this.scrollListener = "scroll.zf." + e;
                this.isOn || (this.canStick && (this.isOn = !0, t(window).off(n).on(n, function(t) {
                    0 === i.scrollCount ? (i.scrollCount = i.options.checkEvery, i._setSizes(function() {
                        i._calc(!1, window.pageYOffset)
                    })) : (i.scrollCount--, i._calc(!1, window.pageYOffset))
                })), this.$element.off("resizeme.zf.trigger").on("resizeme.zf.trigger", function(t, n) {
                    i._eventsHandler(e)
                }), this.$element.on("mutateme.zf.trigger", function(t, n) {
                    i._eventsHandler(e)
                }), this.$anchor && this.$anchor.on("mutateme.zf.trigger", function(t, n) {
                    i._eventsHandler(e)
                }))
            }
        }, {
            key: "_eventsHandler",
            value: function(t) {
                var e = this,
                    i = this.scrollListener = "scroll.zf." + t;
                e._setSizes(function() {
                    e._calc(!1), e.canStick ? e.isOn || e._events(t) : e.isOn && e._pauseListeners(i)
                })
            }
        }, {
            key: "_pauseListeners",
            value: function(e) {
                this.isOn = !1, t(window).off(e), this.$element.trigger("pause.zf.sticky")
            }
        }, {
            key: "_calc",
            value: function(t, e) {
                return t && this._setSizes(), this.canStick ? (e || (e = window.pageYOffset), void(e >= this.topPoint ? e <= this.bottomPoint ? this.isStuck || this._setSticky() : this.isStuck && this._removeSticky(!1) : this.isStuck && this._removeSticky(!0))) : (this.isStuck && this._removeSticky(!0), !1)
            }
        }, {
            key: "_setSticky",
            value: function() {
                var t = this,
                    e = this.options.stickTo,
                    i = "top" === e ? "marginTop" : "marginBottom",
                    n = "top" === e ? "bottom" : "top",
                    o = {};
                o[i] = this.options[i] + "em", o[e] = 0, o[n] = "auto", this.isStuck = !0, this.$element.removeClass("is-anchored is-at-" + n).addClass("is-stuck is-at-" + e).css(o).trigger("sticky.zf.stuckto:" + e), this.$element.on("transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd", function() {
                    t._setSizes()
                })
            }
        }, {
            key: "_removeSticky",
            value: function(t) {
                var e = this.options.stickTo,
                    i = "top" === e,
                    n = {},
                    o = (this.points ? this.points[1] - this.points[0] : this.anchorHeight) - this.elemHeight,
                    s = i ? "marginTop" : "marginBottom",
                    r = t ? "top" : "bottom";
                n[s] = 0, n.bottom = "auto", t ? n.top = 0 : n.top = o, this.isStuck = !1, this.$element.removeClass("is-stuck is-at-" + e).addClass("is-anchored is-at-" + r).css(n).trigger("sticky.zf.unstuckfrom:" + r)
            }
        }, {
            key: "_setSizes",
            value: function(t) {
                this.canStick = Foundation.MediaQuery.is(this.options.stickyOn), this.canStick || t && "function" == typeof t && t();
                var e = this.$container[0].getBoundingClientRect().width,
                    i = window.getComputedStyle(this.$container[0]),
                    n = parseInt(i["padding-left"], 10),
                    o = parseInt(i["padding-right"], 10);
                this.$anchor && this.$anchor.length ? this.anchorHeight = this.$anchor[0].getBoundingClientRect().height : this._parsePoints(), this.$element.css({
                    "max-width": e - n - o + "px"
                });
                var s = this.$element[0].getBoundingClientRect().height || this.containerHeight;
                if ("none" == this.$element.css("display") && (s = 0), this.containerHeight = s, this.$container.css({
                        height: s
                    }), this.elemHeight = s, !this.isStuck && this.$element.hasClass("is-at-bottom")) {
                    var r = (this.points ? this.points[1] - this.$container.offset().top : this.anchorHeight) - this.elemHeight;
                    this.$element.css("top", r)
                }
                this._setBreakPoints(s, function() {
                    t && "function" == typeof t && t()
                })
            }
        }, {
            key: "_setBreakPoints",
            value: function(t, i) {
                if (!this.canStick) {
                    if (!i || "function" != typeof i) return !1;
                    i()
                }
                var n = e(this.options.marginTop),
                    o = e(this.options.marginBottom),
                    s = this.points ? this.points[0] : this.$anchor.offset().top,
                    r = this.points ? this.points[1] : s + this.anchorHeight,
                    a = window.innerHeight;
                "top" === this.options.stickTo ? (s -= n, r -= t + n) : "bottom" === this.options.stickTo && (s -= a - (t + o), r -= a - o), this.topPoint = s, this.bottomPoint = r, i && "function" == typeof i && i()
            }
        }, {
            key: "destroy",
            value: function() {
                this._removeSticky(!0), this.$element.removeClass(this.options.stickyClass + " is-anchored is-at-top").css({
                    height: "",
                    top: "",
                    bottom: "",
                    "max-width": ""
                }).off("resizeme.zf.trigger").off("mutateme.zf.trigger"), this.$anchor && this.$anchor.length && this.$anchor.off("change.zf.sticky"), t(window).off(this.scrollListener), this.wasWrapped ? this.$element.unwrap() : this.$container.removeClass(this.options.containerClass).css({
                    height: ""
                }), Foundation.unregisterPlugin(this)
            }
        }]), i
    }();
    i.defaults = {
        container: "<div data-sticky-container></div>",
        stickTo: "top",
        anchor: "",
        topAnchor: "",
        btmAnchor: "",
        marginTop: 1,
        marginBottom: 1,
        stickyOn: "medium",
        stickyClass: "sticky",
        containerClass: "sticky-container",
        checkEvery: -1
    }, Foundation.plugin(i, "Sticky");
}(jQuery);
var _createClass = function() {
    function t(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(e, i, n) {
        return i && t(e.prototype, i), n && t(e, n), e
    }
}();
! function(t) {
    var e = function() {
        function e(i, n) {
            _classCallCheck(this, e), this.$element = i, this.options = t.extend({}, e.defaults, this.$element.data(), n), this.isActive = !1, this.isClick = !1, this._init(), Foundation.registerPlugin(this, "Tooltip")
        }
        return _createClass(e, [{
            key: "_init",
            value: function() {
                var e = this.$element.attr("aria-describedby") || Foundation.GetYoDigits(6, "tooltip");
                this.options.positionClass = this.options.positionClass || this._getPositionClass(this.$element), this.options.tipText = this.options.tipText || this.$element.attr("title"), this.template = this.options.template ? t(this.options.template) : this._buildTemplate(e), this.options.allowHtml ? this.template.appendTo(document.body).html(this.options.tipText).hide() : this.template.appendTo(document.body).text(this.options.tipText).hide(), this.$element.attr({
                    title: "",
                    "aria-describedby": e,
                    "data-yeti-box": e,
                    "data-toggle": e,
                    "data-resize": e
                }).addClass(this.options.triggerClass), this.usedPositions = [], this.counter = 4, this.classChanged = !1, this._events()
            }
        }, {
            key: "_getPositionClass",
            value: function(t) {
                if (!t) return "";
                var e = t[0].className.match(/\b(top|left|right)\b/g);
                return e = e ? e[0] : ""
            }
        }, {
            key: "_buildTemplate",
            value: function(e) {
                var i = (this.options.tooltipClass + " " + this.options.positionClass + " " + this.options.templateClasses).trim(),
                    n = t("<div></div>").addClass(i).attr({
                        role: "tooltip",
                        "aria-hidden": !0,
                        "data-is-active": !1,
                        "data-is-focus": !1,
                        id: e
                    });
                return n
            }
        }, {
            key: "_reposition",
            value: function(t) {
                this.usedPositions.push(t ? t : "bottom"), !t && this.usedPositions.indexOf("top") < 0 ? this.template.addClass("top") : "top" === t && this.usedPositions.indexOf("bottom") < 0 ? this.template.removeClass(t) : "left" === t && this.usedPositions.indexOf("right") < 0 ? this.template.removeClass(t).addClass("right") : "right" === t && this.usedPositions.indexOf("left") < 0 ? this.template.removeClass(t).addClass("left") : !t && this.usedPositions.indexOf("top") > -1 && this.usedPositions.indexOf("left") < 0 ? this.template.addClass("left") : "top" === t && this.usedPositions.indexOf("bottom") > -1 && this.usedPositions.indexOf("left") < 0 ? this.template.removeClass(t).addClass("left") : "left" === t && this.usedPositions.indexOf("right") > -1 && this.usedPositions.indexOf("bottom") < 0 ? this.template.removeClass(t) : "right" === t && this.usedPositions.indexOf("left") > -1 && this.usedPositions.indexOf("bottom") < 0 ? this.template.removeClass(t) : this.template.removeClass(t), this.classChanged = !0, this.counter--
            }
        }, {
            key: "_setPosition",
            value: function() {
                var t = this._getPositionClass(this.template),
                    e = Foundation.Box.GetDimensions(this.template),
                    i = Foundation.Box.GetDimensions(this.$element),
                    n = "left" === t ? "left" : "right" === t ? "left" : "top",
                    o = "top" === n ? "height" : "width";
                "height" === o ? this.options.vOffset : this.options.hOffset;
                if (e.width >= e.windowDims.width || !this.counter && !Foundation.Box.ImNotTouchingYou(this.template)) return this.template.offset(Foundation.Box.GetOffsets(this.template, this.$element, "center bottom", this.options.vOffset, this.options.hOffset, !0)).css({
                    width: i.windowDims.width - 2 * this.options.hOffset,
                    height: "auto"
                }), !1;
                for (this.template.offset(Foundation.Box.GetOffsets(this.template, this.$element, "center " + (t || "bottom"), this.options.vOffset, this.options.hOffset)); !Foundation.Box.ImNotTouchingYou(this.template) && this.counter;) this._reposition(t), this._setPosition()
            }
        }, {
            key: "show",
            value: function() {
                if ("all" !== this.options.showOn && !Foundation.MediaQuery.is(this.options.showOn)) return !1;
                var t = this;
                this.template.css("visibility", "hidden").show(), this._setPosition(), this.$element.trigger("closeme.zf.tooltip", this.template.attr("id")), this.template.attr({
                    "data-is-active": !0,
                    "aria-hidden": !1
                }), t.isActive = !0, this.template.stop().hide().css("visibility", "").fadeIn(this.options.fadeInDuration, function() {}), this.$element.trigger("show.zf.tooltip")
            }
        }, {
            key: "hide",
            value: function() {
                var t = this;
                this.template.stop().attr({
                    "aria-hidden": !0,
                    "data-is-active": !1
                }).fadeOut(this.options.fadeOutDuration, function() {
                    t.isActive = !1, t.isClick = !1, t.classChanged && (t.template.removeClass(t._getPositionClass(t.template)).addClass(t.options.positionClass), t.usedPositions = [], t.counter = 4, t.classChanged = !1)
                }), this.$element.trigger("hide.zf.tooltip")
            }
        }, {
            key: "_events",
            value: function() {
                var t = this,
                    e = (this.template, !1);
                this.options.disableHover || this.$element.on("mouseenter.zf.tooltip", function(e) {
                    t.isActive || (t.timeout = setTimeout(function() {
                        t.show()
                    }, t.options.hoverDelay))
                }).on("mouseleave.zf.tooltip", function(i) {
                    clearTimeout(t.timeout), (!e || t.isClick && !t.options.clickOpen) && t.hide()
                }), this.options.clickOpen ? this.$element.on("mousedown.zf.tooltip", function(e) {
                    e.stopImmediatePropagation(), t.isClick || (t.isClick = !0, !t.options.disableHover && t.$element.attr("tabindex") || t.isActive || t.show())
                }) : this.$element.on("mousedown.zf.tooltip", function(e) {
                    e.stopImmediatePropagation(), t.isClick = !0
                }), this.options.disableForTouch || this.$element.on("tap.zf.tooltip touchend.zf.tooltip", function(e) {
                    t.isActive ? t.hide() : t.show()
                }), this.$element.on({
                    "close.zf.trigger": this.hide.bind(this)
                }), this.$element.on("focus.zf.tooltip", function(i) {
                    return e = !0, t.isClick ? (t.options.clickOpen || (e = !1), !1) : void t.show()
                }).on("focusout.zf.tooltip", function(i) {
                    e = !1, t.isClick = !1, t.hide()
                }).on("resizeme.zf.trigger", function() {
                    t.isActive && t._setPosition()
                })
            }
        }, {
            key: "toggle",
            value: function() {
                this.isActive ? this.hide() : this.show()
            }
        }, {
            key: "destroy",
            value: function() {
                this.$element.attr("title", this.template.text()).off(".zf.trigger .zf.tooltip").removeClass("has-tip top right left").removeAttr("aria-describedby aria-haspopup data-disable-hover data-resize data-toggle data-tooltip data-yeti-box"), this.template.remove(), Foundation.unregisterPlugin(this)
            }
        }]), e
    }();
    e.defaults = {
        disableForTouch: !1,
        hoverDelay: 200,
        fadeInDuration: 150,
        fadeOutDuration: 150,
        disableHover: !1,
        templateClasses: "",
        tooltipClass: "tooltip",
        triggerClass: "has-tip",
        showOn: "small",
        template: "",
        tipText: "",
        touchCloseText: "Tap to close.",
        clickOpen: !0,
        positionClass: "",
        vOffset: 10,
        hOffset: 12,
        allowHtml: !1
    }, Foundation.plugin(e, "Tooltip")
}(jQuery),
function() {
    var t, e, i, n, o, s = function(t, e) {
            return function() {
                return t.apply(e, arguments)
            }
        },
        r = {}.hasOwnProperty,
        a = function(t, e) {
            function i() {
                this.constructor = t
            }
            for (var n in e) r.call(e, n) && (t[n] = e[n]);
            return i.prototype = e.prototype, t.prototype = new i, t.__super__ = e.prototype, t
        };
    n = function() {
        function t() {
            this.options_index = 0, this.parsed = []
        }
        return t.prototype.add_node = function(t) {
            return "OPTGROUP" === t.nodeName.toUpperCase() ? this.add_group(t) : this.add_option(t)
        }, t.prototype.add_group = function(t) {
            var e, i, n, o, s, r;
            for (e = this.parsed.length, this.parsed.push({
                    array_index: e,
                    group: !0,
                    label: this.escapeExpression(t.label),
                    title: t.title ? t.title : void 0,
                    children: 0,
                    disabled: t.disabled,
                    classes: t.className
                }), s = t.childNodes, r = [], n = 0, o = s.length; n < o; n++) i = s[n], r.push(this.add_option(i, e, t.disabled));
            return r
        }, t.prototype.add_option = function(t, e, i) {
            if ("OPTION" === t.nodeName.toUpperCase()) return "" !== t.text ? (null != e && (this.parsed[e].children += 1), this.parsed.push({
                array_index: this.parsed.length,
                options_index: this.options_index,
                value: t.value,
                text: t.text,
                html: t.innerHTML,
                title: t.title ? t.title : void 0,
                selected: t.selected,
                disabled: i === !0 ? i : t.disabled,
                group_array_index: e,
                group_label: null != e ? this.parsed[e].label : null,
                classes: t.className,
                style: t.style.cssText
            })) : this.parsed.push({
                array_index: this.parsed.length,
                options_index: this.options_index,
                empty: !0
            }), this.options_index += 1
        }, t.prototype.escapeExpression = function(t) {
            var e, i;
            return null == t || t === !1 ? "" : /[\&\<\>\"\'\`]/.test(t) ? (e = {
                "<": "&lt;",
                ">": "&gt;",
                '"': "&quot;",
                "'": "&#x27;",
                "`": "&#x60;"
            }, i = /&(?!\w+;)|[\<\>\"\'\`]/g, t.replace(i, function(t) {
                return e[t] || "&amp;"
            })) : t
        }, t
    }(), n.select_to_array = function(t) {
        var e, i, o, s, r;
        for (i = new n, r = t.childNodes, o = 0, s = r.length; o < s; o++) e = r[o], i.add_node(e);
        return i.parsed
    }, e = function() {
        function t(e, i) {
            this.form_field = e, this.options = null != i ? i : {}, this.label_click_handler = s(this.label_click_handler, this), t.browser_is_supported() && (this.is_multiple = this.form_field.multiple, this.set_default_text(), this.set_default_values(), this.setup(), this.set_up_html(), this.register_observers(), this.on_ready())
        }
        return t.prototype.set_default_values = function() {
            var t = this;
            return this.click_test_action = function(e) {
                return t.test_active_click(e)
            }, this.activate_action = function(e) {
                return t.activate_field(e)
            }, this.active_field = !1, this.mouse_on_container = !1, this.results_showing = !1, this.result_highlighted = null, this.is_rtl = this.options.rtl || /\bchosen-rtl\b/.test(this.form_field.className), this.allow_single_deselect = null != this.options.allow_single_deselect && null != this.form_field.options[0] && "" === this.form_field.options[0].text && this.options.allow_single_deselect, this.disable_search_threshold = this.options.disable_search_threshold || 0, this.disable_search = this.options.disable_search || !1, this.enable_split_word_search = null == this.options.enable_split_word_search || this.options.enable_split_word_search, this.group_search = null == this.options.group_search || this.options.group_search, this.search_contains = this.options.search_contains || !1, this.single_backstroke_delete = null == this.options.single_backstroke_delete || this.options.single_backstroke_delete, this.max_selected_options = this.options.max_selected_options || 1 / 0, this.inherit_select_classes = this.options.inherit_select_classes || !1, this.display_selected_options = null == this.options.display_selected_options || this.options.display_selected_options, this.display_disabled_options = null == this.options.display_disabled_options || this.options.display_disabled_options, this.include_group_label_in_selected = this.options.include_group_label_in_selected || !1, this.max_shown_results = this.options.max_shown_results || Number.POSITIVE_INFINITY, this.case_sensitive_search = this.options.case_sensitive_search || !1, this.hide_results_on_select = null == this.options.hide_results_on_select || this.options.hide_results_on_select
        }, t.prototype.set_default_text = function() {
            return this.form_field.getAttribute("data-placeholder") ? this.default_text = this.form_field.getAttribute("data-placeholder") : this.is_multiple ? this.default_text = this.options.placeholder_text_multiple || this.options.placeholder_text || t.default_multiple_text : this.default_text = this.options.placeholder_text_single || this.options.placeholder_text || t.default_single_text, this.default_text = this.escape_html(this.default_text), this.results_none_found = this.form_field.getAttribute("data-no_results_text") || this.options.no_results_text || t.default_no_result_text
        }, t.prototype.choice_label = function(t) {
            return this.include_group_label_in_selected && null != t.group_label ? "<b class='group-name'>" + t.group_label + "</b>" + t.html : t.html
        }, t.prototype.mouse_enter = function() {
            return this.mouse_on_container = !0
        }, t.prototype.mouse_leave = function() {
            return this.mouse_on_container = !1
        }, t.prototype.input_focus = function(t) {
            var e = this;
            if (this.is_multiple) {
                if (!this.active_field) return setTimeout(function() {
                    return e.container_mousedown()
                }, 50)
            } else if (!this.active_field) return this.activate_field()
        }, t.prototype.input_blur = function(t) {
            var e = this;
            if (!this.mouse_on_container) return this.active_field = !1, setTimeout(function() {
                return e.blur_test()
            }, 100)
        }, t.prototype.label_click_handler = function(t) {
            return this.is_multiple ? this.container_mousedown(t) : this.activate_field()
        }, t.prototype.results_option_build = function(t) {
            var e, i, n, o, s, r, a;
            for (e = "", o = 0, a = this.results_data, s = 0, r = a.length; s < r && (i = a[s], n = "", n = i.group ? this.result_add_group(i) : this.result_add_option(i), "" !== n && (o++, e += n), (null != t ? t.first : void 0) && (i.selected && this.is_multiple ? this.choice_build(i) : i.selected && !this.is_multiple && this.single_set_selected_text(this.choice_label(i))), !(o >= this.max_shown_results)); s++);
            return e
        }, t.prototype.result_add_option = function(t) {
            var e, i;
            return t.search_match && this.include_option_in_results(t) ? (e = [], t.disabled || t.selected && this.is_multiple || e.push("active-result"), !t.disabled || t.selected && this.is_multiple || e.push("disabled-result"), t.selected && e.push("result-selected"), null != t.group_array_index && e.push("group-option"), "" !== t.classes && e.push(t.classes), i = document.createElement("li"), i.className = e.join(" "), i.style.cssText = t.style, i.setAttribute("data-option-array-index", t.array_index), i.innerHTML = t.search_text, t.title && (i.title = t.title), this.outerHTML(i)) : ""
        }, t.prototype.result_add_group = function(t) {
            var e, i;
            return (t.search_match || t.group_match) && t.active_options > 0 ? (e = [], e.push("group-result"), t.classes && e.push(t.classes), i = document.createElement("li"), i.className = e.join(" "), i.innerHTML = t.search_text, t.title && (i.title = t.title), this.outerHTML(i)) : ""
        }, t.prototype.results_update_field = function() {
            if (this.set_default_text(), this.is_multiple || this.results_reset_cleanup(), this.result_clear_highlight(), this.results_build(), this.results_showing) return this.winnow_results()
        }, t.prototype.reset_single_select_options = function() {
            var t, e, i, n, o;
            for (n = this.results_data, o = [], e = 0, i = n.length; e < i; e++) t = n[e], t.selected ? o.push(t.selected = !1) : o.push(void 0);
            return o
        }, t.prototype.results_toggle = function() {
            return this.results_showing ? this.results_hide() : this.results_show()
        }, t.prototype.results_search = function(t) {
            return this.results_showing ? this.winnow_results() : this.results_show()
        }, t.prototype.winnow_results = function() {
            var t, e, i, n, o, s, r, a, l, u, c, h;
            for (this.no_results_clear(), o = 0, r = this.get_search_text(), t = r.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&"), n = this.get_search_regex(t), e = this.get_highlight_regex(t), h = this.results_data, u = 0, c = h.length; u < c; u++) i = h[u], i.search_match = !1, s = null, this.include_option_in_results(i) && (i.group && (i.group_match = !1, i.active_options = 0), null != i.group_array_index && this.results_data[i.group_array_index] && (s = this.results_data[i.group_array_index], 0 === s.active_options && s.search_match && (o += 1), s.active_options += 1), i.search_text = i.group ? i.label : i.html, i.group && !this.group_search || (i.search_match = this.search_string_match(i.search_text, n), i.search_match && !i.group && (o += 1), i.search_match ? (r.length && (a = i.search_text.search(e), l = i.search_text.substr(0, a + r.length) + "</em>" + i.search_text.substr(a + r.length), i.search_text = l.substr(0, a) + "<em>" + l.substr(a)), null != s && (s.group_match = !0)) : null != i.group_array_index && this.results_data[i.group_array_index].search_match && (i.search_match = !0)));
            return this.result_clear_highlight(), o < 1 && r.length ? (this.update_results_content(""), this.no_results(r)) : (this.update_results_content(this.results_option_build()), this.winnow_results_set_highlight())
        }, t.prototype.get_search_regex = function(t) {
            var e, i;
            return e = this.search_contains ? "" : "^", i = this.case_sensitive_search ? "" : "i", new RegExp(e + t, i)
        }, t.prototype.get_highlight_regex = function(t) {
            var e, i;
            return e = this.search_contains ? "" : "\\b", i = this.case_sensitive_search ? "" : "i", new RegExp(e + t, i)
        }, t.prototype.search_string_match = function(t, e) {
            var i, n, o, s;
            if (e.test(t)) return !0;
            if (this.enable_split_word_search && (t.indexOf(" ") >= 0 || 0 === t.indexOf("[")) && (n = t.replace(/\[|\]/g, "").split(" "), n.length))
                for (o = 0, s = n.length; o < s; o++)
                    if (i = n[o], e.test(i)) return !0
        }, t.prototype.choices_count = function() {
            var t, e, i, n;
            if (null != this.selected_option_count) return this.selected_option_count;
            for (this.selected_option_count = 0, n = this.form_field.options, e = 0, i = n.length; e < i; e++) t = n[e], t.selected && (this.selected_option_count += 1);
            return this.selected_option_count
        }, t.prototype.choices_click = function(t) {
            if (t.preventDefault(), this.activate_field(), !this.results_showing && !this.is_disabled) return this.results_show()
        }, t.prototype.keydown_checker = function(t) {
            var e, i;
            switch (e = null != (i = t.which) ? i : t.keyCode, this.search_field_scale(), 8 !== e && this.pending_backstroke && this.clear_backstroke(), e) {
                case 8:
                    this.backstroke_length = this.get_search_field_value().length;
                    break;
                case 9:
                    this.results_showing && !this.is_multiple && this.result_select(t), this.mouse_on_container = !1;
                    break;
                case 13:
                    this.results_showing && t.preventDefault();
                    break;
                case 27:
                    this.results_showing && t.preventDefault();
                    break;
                case 32:
                    this.disable_search && t.preventDefault();
                    break;
                case 38:
                    t.preventDefault(), this.keyup_arrow();
                    break;
                case 40:
                    t.preventDefault(), this.keydown_arrow()
            }
        }, t.prototype.keyup_checker = function(t) {
            var e, i;
            switch (e = null != (i = t.which) ? i : t.keyCode, this.search_field_scale(), e) {
                case 8:
                    this.is_multiple && this.backstroke_length < 1 && this.choices_count() > 0 ? this.keydown_backstroke() : this.pending_backstroke || (this.result_clear_highlight(), this.results_search());
                    break;
                case 13:
                    t.preventDefault(), this.results_showing && this.result_select(t);
                    break;
                case 27:
                    this.results_showing && this.results_hide();
                    break;
                case 9:
                case 16:
                case 17:
                case 18:
                case 38:
                case 40:
                case 91:
                    break;
                default:
                    this.results_search()
            }
        }, t.prototype.clipboard_event_checker = function(t) {
            var e = this;
            if (!this.is_disabled) return setTimeout(function() {
                return e.results_search()
            }, 50)
        }, t.prototype.container_width = function() {
            return null != this.options.width ? this.options.width : "" + this.form_field.offsetWidth + "px"
        }, t.prototype.include_option_in_results = function(t) {
            return !(this.is_multiple && !this.display_selected_options && t.selected) && (!(!this.display_disabled_options && t.disabled) && !t.empty)
        }, t.prototype.search_results_touchstart = function(t) {
            return this.touch_started = !0, this.search_results_mouseover(t)
        }, t.prototype.search_results_touchmove = function(t) {
            return this.touch_started = !1, this.search_results_mouseout(t)
        }, t.prototype.search_results_touchend = function(t) {
            if (this.touch_started) return this.search_results_mouseup(t)
        }, t.prototype.outerHTML = function(t) {
            var e;
            return t.outerHTML ? t.outerHTML : (e = document.createElement("div"), e.appendChild(t), e.innerHTML)
        }, t.prototype.get_single_html = function() {
            return '<a class="chosen-single chosen-default">\n  <span>' + this.default_text + '</span>\n  <div><b></b></div>\n</a>\n<div class="chosen-drop">\n  <div class="chosen-search">\n    <input class="chosen-search-input" type="text" autocomplete="off" />\n  </div>\n  <ul class="chosen-results"></ul>\n</div>'
        }, t.prototype.get_multi_html = function() {
            return '<ul class="chosen-choices">\n  <li class="search-field">\n    <input class="chosen-search-input" type="text" autocomplete="off" value="' + this.default_text + '" />\n  </li>\n</ul>\n<div class="chosen-drop">\n  <ul class="chosen-results"></ul>\n</div>'
        }, t.prototype.get_no_results_html = function(t) {
            return '<li class="no-results">\n  ' + this.results_none_found + " <span>" + t + "</span>\n</li>"
        }, t.browser_is_supported = function() {
            return "Microsoft Internet Explorer" === window.navigator.appName ? document.documentMode >= 8 : !(/iP(od|hone)/i.test(window.navigator.userAgent) || /IEMobile/i.test(window.navigator.userAgent) || /Windows Phone/i.test(window.navigator.userAgent) || /BlackBerry/i.test(window.navigator.userAgent) || /BB10/i.test(window.navigator.userAgent) || /Android.*Mobile/i.test(window.navigator.userAgent))
        }, t.default_multiple_text = "Select Some Options", t.default_single_text = "Select an Option", t.default_no_result_text = "No results match", t
    }(), t = jQuery, t.fn.extend({
        chosen: function(n) {
            return e.browser_is_supported() ? this.each(function(e) {
                var o, s;
                return o = t(this), s = o.data("chosen"), "destroy" === n ? void(s instanceof i && s.destroy()) : void(s instanceof i || o.data("chosen", new i(this, n)))
            }) : this
        }
    }), i = function(e) {
        function i() {
            return o = i.__super__.constructor.apply(this, arguments)
        }
        return a(i, e), i.prototype.setup = function() {
            return this.form_field_jq = t(this.form_field), this.current_selectedIndex = this.form_field.selectedIndex
        }, i.prototype.set_up_html = function() {
            var e, i;
            return e = ["chosen-container"], e.push("chosen-container-" + (this.is_multiple ? "multi" : "single")), this.inherit_select_classes && this.form_field.className && e.push(this.form_field.className), this.is_rtl && e.push("chosen-rtl"), i = {
                "class": e.join(" "),
                title: this.form_field.title
            }, this.form_field.id.length && (i.id = this.form_field.id.replace(/[^\w]/g, "_") + "_chosen"), this.container = t("<div />", i), this.container.width(this.container_width()), this.is_multiple ? this.container.html(this.get_multi_html()) : this.container.html(this.get_single_html()), this.form_field_jq.hide().after(this.container), this.dropdown = this.container.find("div.chosen-drop").first(), this.search_field = this.container.find("input").first(), this.search_results = this.container.find("ul.chosen-results").first(), this.search_field_scale(), this.search_no_results = this.container.find("li.no-results").first(), this.is_multiple ? (this.search_choices = this.container.find("ul.chosen-choices").first(), this.search_container = this.container.find("li.search-field").first()) : (this.search_container = this.container.find("div.chosen-search").first(), this.selected_item = this.container.find(".chosen-single").first()), this.results_build(), this.set_tab_index(), this.set_label_behavior()
        }, i.prototype.on_ready = function() {
            return this.form_field_jq.trigger("chosen:ready", {
                chosen: this
            })
        }, i.prototype.register_observers = function() {
            var t = this;
            return this.container.bind("touchstart.chosen", function(e) {
                t.container_mousedown(e)
            }), this.container.bind("touchend.chosen", function(e) {
                t.container_mouseup(e)
            }), this.container.bind("mousedown.chosen", function(e) {
                t.container_mousedown(e)
            }), this.container.bind("mouseup.chosen", function(e) {
                t.container_mouseup(e)
            }), this.container.bind("mouseenter.chosen", function(e) {
                t.mouse_enter(e)
            }), this.container.bind("mouseleave.chosen", function(e) {
                t.mouse_leave(e)
            }), this.search_results.bind("mouseup.chosen", function(e) {
                t.search_results_mouseup(e)
            }), this.search_results.bind("mouseover.chosen", function(e) {
                t.search_results_mouseover(e)
            }), this.search_results.bind("mouseout.chosen", function(e) {
                t.search_results_mouseout(e)
            }), this.search_results.bind("mousewheel.chosen DOMMouseScroll.chosen", function(e) {
                t.search_results_mousewheel(e)
            }), this.search_results.bind("touchstart.chosen", function(e) {
                t.search_results_touchstart(e)
            }), this.search_results.bind("touchmove.chosen", function(e) {
                t.search_results_touchmove(e)
            }), this.search_results.bind("touchend.chosen", function(e) {
                t.search_results_touchend(e)
            }), this.form_field_jq.bind("chosen:updated.chosen", function(e) {
                t.results_update_field(e)
            }), this.form_field_jq.bind("chosen:activate.chosen", function(e) {
                t.activate_field(e)
            }), this.form_field_jq.bind("chosen:open.chosen", function(e) {
                t.container_mousedown(e)
            }), this.form_field_jq.bind("chosen:close.chosen", function(e) {
                t.close_field(e)
            }), this.search_field.bind("blur.chosen", function(e) {
                t.input_blur(e)
            }), this.search_field.bind("keyup.chosen", function(e) {
                t.keyup_checker(e)
            }), this.search_field.bind("keydown.chosen", function(e) {
                t.keydown_checker(e)
            }), this.search_field.bind("focus.chosen", function(e) {
                t.input_focus(e)
            }), this.search_field.bind("cut.chosen", function(e) {
                t.clipboard_event_checker(e)
            }), this.search_field.bind("paste.chosen", function(e) {
                t.clipboard_event_checker(e)
            }), this.is_multiple ? this.search_choices.bind("click.chosen", function(e) {
                t.choices_click(e)
            }) : this.container.bind("click.chosen", function(t) {
                t.preventDefault()
            })
        }, i.prototype.destroy = function() {
            return t(this.container[0].ownerDocument).unbind("click.chosen", this.click_test_action), this.form_field_label.length > 0 && this.form_field_label.unbind("click.chosen"), this.search_field[0].tabIndex && (this.form_field_jq[0].tabIndex = this.search_field[0].tabIndex), this.container.remove(), this.form_field_jq.removeData("chosen"), this.form_field_jq.show()
        }, i.prototype.search_field_disabled = function() {
            return this.is_disabled = this.form_field.disabled || this.form_field_jq.parents("fieldset").is(":disabled"), this.container.toggleClass("chosen-disabled", this.is_disabled), this.search_field[0].disabled = this.is_disabled, this.is_multiple || this.selected_item.unbind("focus.chosen", this.activate_field), this.is_disabled ? this.close_field() : this.is_multiple ? void 0 : this.selected_item.bind("focus.chosen", this.activate_field)
        }, i.prototype.container_mousedown = function(e) {
            var i;
            if (!this.is_disabled) return !e || "mousedown" !== (i = e.type) && "touchstart" !== i || this.results_showing || e.preventDefault(), null != e && t(e.target).hasClass("search-choice-close") ? void 0 : (this.active_field ? this.is_multiple || !e || t(e.target)[0] !== this.selected_item[0] && !t(e.target).parents("a.chosen-single").length || (e.preventDefault(), this.results_toggle()) : (this.is_multiple && this.search_field.val(""), t(this.container[0].ownerDocument).bind("click.chosen", this.click_test_action), this.results_show()), this.activate_field())
        }, i.prototype.container_mouseup = function(t) {
            if ("ABBR" === t.target.nodeName && !this.is_disabled) return this.results_reset(t)
        }, i.prototype.search_results_mousewheel = function(t) {
            var e;
            if (t.originalEvent && (e = t.originalEvent.deltaY || -t.originalEvent.wheelDelta || t.originalEvent.detail), null != e) return t.preventDefault(), "DOMMouseScroll" === t.type && (e = 40 * e), this.search_results.scrollTop(e + this.search_results.scrollTop())
        }, i.prototype.blur_test = function(t) {
            if (!this.active_field && this.container.hasClass("chosen-container-active")) return this.close_field()
        }, i.prototype.close_field = function() {
            return t(this.container[0].ownerDocument).unbind("click.chosen", this.click_test_action), this.active_field = !1, this.results_hide(), this.container.removeClass("chosen-container-active"), this.clear_backstroke(), this.show_search_field_default(), this.search_field_scale(), this.search_field.blur()
        }, i.prototype.activate_field = function() {
            if (!this.is_disabled) return this.container.addClass("chosen-container-active"), this.active_field = !0, this.search_field.val(this.search_field.val()), this.search_field.focus()
        }, i.prototype.test_active_click = function(e) {
            var i;
            return i = t(e.target).closest(".chosen-container"), i.length && this.container[0] === i[0] ? this.active_field = !0 : this.close_field()
        }, i.prototype.results_build = function() {
            return this.parsing = !0, this.selected_option_count = null, this.results_data = n.select_to_array(this.form_field), this.is_multiple ? this.search_choices.find("li.search-choice").remove() : this.is_multiple || (this.single_set_selected_text(), this.disable_search || this.form_field.options.length <= this.disable_search_threshold ? (this.search_field[0].readOnly = !0, this.container.addClass("chosen-container-single-nosearch")) : (this.search_field[0].readOnly = !1, this.container.removeClass("chosen-container-single-nosearch"))), this.update_results_content(this.results_option_build({
                first: !0
            })), this.search_field_disabled(), this.show_search_field_default(), this.search_field_scale(), this.parsing = !1
        }, i.prototype.result_do_highlight = function(t) {
            var e, i, n, o, s;
            if (t.length) {
                if (this.result_clear_highlight(), this.result_highlight = t, this.result_highlight.addClass("highlighted"), n = parseInt(this.search_results.css("maxHeight"), 10), s = this.search_results.scrollTop(), o = n + s, i = this.result_highlight.position().top + this.search_results.scrollTop(), e = i + this.result_highlight.outerHeight(), e >= o) return this.search_results.scrollTop(e - n > 0 ? e - n : 0);
                if (i < s) return this.search_results.scrollTop(i)
            }
        }, i.prototype.result_clear_highlight = function() {
            return this.result_highlight && this.result_highlight.removeClass("highlighted"), this.result_highlight = null
        }, i.prototype.results_show = function() {
            return this.is_multiple && this.max_selected_options <= this.choices_count() ? (this.form_field_jq.trigger("chosen:maxselected", {
                chosen: this
            }), !1) : (this.container.addClass("chosen-with-drop"), this.results_showing = !0, this.search_field.focus(), this.search_field.val(this.get_search_field_value()), this.winnow_results(), this.form_field_jq.trigger("chosen:showing_dropdown", {
                chosen: this
            }))
        }, i.prototype.update_results_content = function(t) {
            return this.search_results.html(t)
        }, i.prototype.results_hide = function() {
            return this.results_showing && (this.result_clear_highlight(), this.container.removeClass("chosen-with-drop"), this.form_field_jq.trigger("chosen:hiding_dropdown", {
                chosen: this
            })), this.results_showing = !1
        }, i.prototype.set_tab_index = function(t) {
            var e;
            if (this.form_field.tabIndex) return e = this.form_field.tabIndex, this.form_field.tabIndex = -1, this.search_field[0].tabIndex = e
        }, i.prototype.set_label_behavior = function() {
            if (this.form_field_label = this.form_field_jq.parents("label"), !this.form_field_label.length && this.form_field.id.length && (this.form_field_label = t("label[for='" + this.form_field.id + "']")), this.form_field_label.length > 0) return this.form_field_label.bind("click.chosen", this.label_click_handler)
        }, i.prototype.show_search_field_default = function() {
            return this.is_multiple && this.choices_count() < 1 && !this.active_field ? (this.search_field.val(this.default_text), this.search_field.addClass("default")) : (this.search_field.val(""), this.search_field.removeClass("default"))
        }, i.prototype.search_results_mouseup = function(e) {
            var i;
            if (i = t(e.target).hasClass("active-result") ? t(e.target) : t(e.target).parents(".active-result").first(), i.length) return this.result_highlight = i, this.result_select(e), this.search_field.focus()
        }, i.prototype.search_results_mouseover = function(e) {
            var i;
            if (i = t(e.target).hasClass("active-result") ? t(e.target) : t(e.target).parents(".active-result").first()) return this.result_do_highlight(i)
        }, i.prototype.search_results_mouseout = function(e) {
            if (t(e.target).hasClass("active-result")) return this.result_clear_highlight()
        }, i.prototype.choice_build = function(e) {
            var i, n, o = this;
            return i = t("<li />", {
                "class": "search-choice"
            }).html("<span>" + this.choice_label(e) + "</span>"), e.disabled ? i.addClass("search-choice-disabled") : (n = t("<a />", {
                "class": "search-choice-close",
                "data-option-array-index": e.array_index
            }), n.bind("click.chosen", function(t) {
                return o.choice_destroy_link_click(t)
            }), i.append(n)), this.search_container.before(i)
        }, i.prototype.choice_destroy_link_click = function(e) {
            if (e.preventDefault(), e.stopPropagation(), !this.is_disabled) return this.choice_destroy(t(e.target))
        }, i.prototype.choice_destroy = function(t) {
            if (this.result_deselect(t[0].getAttribute("data-option-array-index"))) return this.active_field ? this.search_field.focus() : this.show_search_field_default(), this.is_multiple && this.choices_count() > 0 && this.get_search_field_value().length < 1 && this.results_hide(), t.parents("li").first().remove(), this.search_field_scale()
        }, i.prototype.results_reset = function() {
            if (this.reset_single_select_options(), this.form_field.options[0].selected = !0, this.single_set_selected_text(), this.show_search_field_default(), this.results_reset_cleanup(), this.trigger_form_field_change(), this.active_field) return this.results_hide()
        }, i.prototype.results_reset_cleanup = function() {
            return this.current_selectedIndex = this.form_field.selectedIndex, this.selected_item.find("abbr").remove()
        }, i.prototype.result_select = function(t) {
            var e, i;
            if (this.result_highlight) return e = this.result_highlight, this.result_clear_highlight(), this.is_multiple && this.max_selected_options <= this.choices_count() ? (this.form_field_jq.trigger("chosen:maxselected", {
                chosen: this
            }), !1) : (this.is_multiple ? e.removeClass("active-result") : this.reset_single_select_options(), e.addClass("result-selected"), i = this.results_data[e[0].getAttribute("data-option-array-index")], i.selected = !0, this.form_field.options[i.options_index].selected = !0, this.selected_option_count = null, this.is_multiple ? this.choice_build(i) : this.single_set_selected_text(this.choice_label(i)), this.is_multiple && (!this.hide_results_on_select || t.metaKey || t.ctrlKey) || (this.results_hide(), this.show_search_field_default()), (this.is_multiple || this.form_field.selectedIndex !== this.current_selectedIndex) && this.trigger_form_field_change({
                selected: this.form_field.options[i.options_index].value
            }), this.current_selectedIndex = this.form_field.selectedIndex, t.preventDefault(), this.search_field_scale())
        }, i.prototype.single_set_selected_text = function(t) {
            return null == t && (t = this.default_text), t === this.default_text ? this.selected_item.addClass("chosen-default") : (this.single_deselect_control_build(), this.selected_item.removeClass("chosen-default")), this.selected_item.find("span").html(t)
        }, i.prototype.result_deselect = function(t) {
            var e;
            return e = this.results_data[t], !this.form_field.options[e.options_index].disabled && (e.selected = !1, this.form_field.options[e.options_index].selected = !1, this.selected_option_count = null, this.result_clear_highlight(), this.results_showing && this.winnow_results(), this.trigger_form_field_change({
                deselected: this.form_field.options[e.options_index].value
            }), this.search_field_scale(), !0)
        }, i.prototype.single_deselect_control_build = function() {
            if (this.allow_single_deselect) return this.selected_item.find("abbr").length || this.selected_item.find("span").first().after('<abbr class="search-choice-close"></abbr>'), this.selected_item.addClass("chosen-single-with-deselect")
        }, i.prototype.get_search_field_value = function() {
            return this.search_field.val()
        }, i.prototype.get_search_text = function() {
            return this.escape_html(t.trim(this.get_search_field_value()))
        }, i.prototype.escape_html = function(e) {
            return t("<div/>").text(e).html()
        }, i.prototype.winnow_results_set_highlight = function() {
            var t, e;
            if (e = this.is_multiple ? [] : this.search_results.find(".result-selected.active-result"), t = e.length ? e.first() : this.search_results.find(".active-result").first(), null != t) return this.result_do_highlight(t)
        }, i.prototype.no_results = function(t) {
            var e;
            return e = this.get_no_results_html(t), this.search_results.append(e), this.form_field_jq.trigger("chosen:no_results", {
                chosen: this
            })
        }, i.prototype.no_results_clear = function() {
            return this.search_results.find(".no-results").remove()
        }, i.prototype.keydown_arrow = function() {
            var t;
            return this.results_showing && this.result_highlight ? (t = this.result_highlight.nextAll("li.active-result").first()) ? this.result_do_highlight(t) : void 0 : this.results_show()
        }, i.prototype.keyup_arrow = function() {
            var t;
            return this.results_showing || this.is_multiple ? this.result_highlight ? (t = this.result_highlight.prevAll("li.active-result"), t.length ? this.result_do_highlight(t.first()) : (this.choices_count() > 0 && this.results_hide(), this.result_clear_highlight())) : void 0 : this.results_show()
        }, i.prototype.keydown_backstroke = function() {
            var t;
            return this.pending_backstroke ? (this.choice_destroy(this.pending_backstroke.find("a").first()), this.clear_backstroke()) : (t = this.search_container.siblings("li.search-choice").last(), t.length && !t.hasClass("search-choice-disabled") ? (this.pending_backstroke = t, this.single_backstroke_delete ? this.keydown_backstroke() : this.pending_backstroke.addClass("search-choice-focus")) : void 0)
        }, i.prototype.clear_backstroke = function() {
            return this.pending_backstroke && this.pending_backstroke.removeClass("search-choice-focus"), this.pending_backstroke = null
        }, i.prototype.search_field_scale = function() {
            var e, i, n, o, s, r, a, l;
            if (this.is_multiple) {
                for (o = {
                        position: "absolute",
                        left: "-1000px",
                        top: "-1000px",
                        display: "none",
                        whiteSpace: "pre"
                    }, s = ["fontSize", "fontStyle", "fontWeight", "fontFamily", "lineHeight", "textTransform", "letterSpacing"], a = 0, l = s.length; a < l; a++) n = s[a], o[n] = this.search_field.css(n);
                return i = t("<div />").css(o), i.text(this.get_search_field_value()), t("body").append(i), r = i.width() + 25, i.remove(), e = this.container.outerWidth(), r = Math.min(e - 10, r), this.search_field.width(r)
            }
        }, i.prototype.trigger_form_field_change = function(t) {
            return this.form_field_jq.trigger("input", t), this.form_field_jq.trigger("change", t)
        }, i
    }(e)
}.call(void 0);
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
    return typeof t
} : function(t) {
    return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
};
! function(t) {
    "function" == typeof define && define.amd ? define(["jquery"], function(e) {
        t(e, window, document)
    }) : "object" === ("undefined" == typeof module ? "undefined" : _typeof(module)) && module.exports ? module.exports = t(require("jquery"), window, document) : t(jQuery, window, document)
}(function(t, e, i, n) {
    function o(e, i) {
        this.telInput = t(e), this.options = t.extend({}, a, i), this.ns = "." + s + r++, this.isGoodBrowser = Boolean(e.setSelectionRange), this.hadInitialPlaceholder = Boolean(t(e).attr("placeholder"))
    }
    var s = "intlTelInput",
        r = 1,
        a = {
            allowDropdown: !0,
            autoHideDialCode: !0,
            autoPlaceholder: "polite",
            customPlaceholder: null,
            dropdownContainer: "",
            excludeCountries: [],
            formatOnDisplay: !0,
            geoIpLookup: null,
            initialCountry: "",
            nationalMode: !0,
            onlyCountries: [],
            placeholderNumberType: "MOBILE",
            preferredCountries: ["us", "gb"],
            separateDialCode: !1,
            utilsScript: ""
        },
        l = {
            UP: 38,
            DOWN: 40,
            ENTER: 13,
            ESC: 27,
            PLUS: 43,
            A: 65,
            Z: 90,
            SPACE: 32,
            TAB: 9
        },
        u = ["800", "822", "833", "844", "855", "866", "877", "880", "881", "882", "883", "884", "885", "886", "887", "888", "889"];
    t(e).on("load", function() {
        t.fn[s].windowLoaded = !0
    }), o.prototype = {
        _init: function() {
            return this.options.nationalMode && (this.options.autoHideDialCode = !1), this.options.separateDialCode && (this.options.autoHideDialCode = this.options.nationalMode = !1), this.isMobile = /Android.+Mobile|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent), this.isMobile && (t("body").addClass("iti-mobile"), this.options.dropdownContainer || (this.options.dropdownContainer = "body")), this.autoCountryDeferred = new t.Deferred, this.utilsScriptDeferred = new t.Deferred, this.selectedCountryData = {}, this._processCountryData(), this._generateMarkup(), this._setInitialState(), this._initListeners(), this._initRequests(), [this.autoCountryDeferred, this.utilsScriptDeferred]
        },
        _processCountryData: function() {
            this._processAllCountries(), this._processCountryCodes(), this._processPreferredCountries()
        },
        _addCountryCode: function(t, e, i) {
            e in this.countryCodes || (this.countryCodes[e] = []);
            var n = i || 0;
            this.countryCodes[e][n] = t
        },
        _processAllCountries: function() {
            if (this.options.onlyCountries.length) {
                var t = this.options.onlyCountries.map(function(t) {
                    return t.toLowerCase()
                });
                this.countries = c.filter(function(e) {
                    return t.indexOf(e.iso2) > -1
                })
            } else if (this.options.excludeCountries.length) {
                var e = this.options.excludeCountries.map(function(t) {
                    return t.toLowerCase()
                });
                this.countries = c.filter(function(t) {
                    return e.indexOf(t.iso2) === -1
                })
            } else this.countries = c
        },
        _processCountryCodes: function() {
            this.countryCodes = {};
            for (var t = 0; t < this.countries.length; t++) {
                var e = this.countries[t];
                if (this._addCountryCode(e.iso2, e.dialCode, e.priority), e.areaCodes)
                    for (var i = 0; i < e.areaCodes.length; i++) this._addCountryCode(e.iso2, e.dialCode + e.areaCodes[i])
            }
        },
        _processPreferredCountries: function() {
            this.preferredCountries = [];
            for (var t = 0; t < this.options.preferredCountries.length; t++) {
                var e = this.options.preferredCountries[t].toLowerCase(),
                    i = this._getCountryData(e, !1, !0);
                i && this.preferredCountries.push(i)
            }
        },
        _generateMarkup: function() {
            this.telInput.attr("autocomplete", "off");
            var e = "intl-tel-input";
            this.options.allowDropdown && (e += " allow-dropdown"), this.options.separateDialCode && (e += " separate-dial-code"), this.telInput.wrap(t("<div>", {
                "class": e
            })), this.flagsContainer = t("<div>", {
                "class": "flag-container"
            }).insertBefore(this.telInput);
            var i = t("<div>", {
                "class": "selected-flag"
            });
            i.appendTo(this.flagsContainer), this.selectedFlagInner = t("<div>", {
                "class": "iti-flag"
            }).appendTo(i), this.options.separateDialCode && (this.selectedDialCode = t("<div>", {
                "class": "selected-dial-code"
            }).appendTo(i)), this.options.allowDropdown ? (i.attr("tabindex", "0"), t("<div>", {
                "class": "iti-arrow"
            }).appendTo(i), this.countryList = t("<ul>", {
                "class": "country-list hide"
            }), this.preferredCountries.length && (this._appendListItems(this.preferredCountries, "preferred"), t("<li>", {
                "class": "divider"
            }).appendTo(this.countryList)), this._appendListItems(this.countries, ""), this.countryListItems = this.countryList.children(".country"), this.options.dropdownContainer ? this.dropdown = t("<div>", {
                "class": "intl-tel-input iti-container"
            }).append(this.countryList) : this.countryList.appendTo(this.flagsContainer)) : this.countryListItems = t()
        },
        _appendListItems: function(t, e) {
            for (var i = "", n = 0; n < t.length; n++) {
                var o = t[n];
                i += "<li class='country " + e + "' data-dial-code='" + o.dialCode + "' data-country-code='" + o.iso2 + "'>", i += "<div class='flag-box'><div class='iti-flag " + o.iso2 + "'></div></div>", i += "<span class='country-name'>" + o.name + "</span>", i += "<span class='dial-code'>+" + o.dialCode + "</span>", i += "</li>"
            }
            this.countryList.append(i)
        },
        _setInitialState: function() {
            var t = this.telInput.val();
            this._getDialCode(t) && (!this._isRegionlessNanp(t) || this.options.nationalMode && !this.options.initialCountry) ? this._updateFlagFromNumber(t) : "auto" !== this.options.initialCountry && (this.options.initialCountry ? this._setFlag(this.options.initialCountry.toLowerCase()) : (this.defaultCountry = this.preferredCountries.length ? this.preferredCountries[0].iso2 : this.countries[0].iso2, t || this._setFlag(this.defaultCountry)), t || this.options.nationalMode || this.options.autoHideDialCode || this.options.separateDialCode || this.telInput.val("+" + this.selectedCountryData.dialCode)), t && this._updateValFromNumber(t)
        },
        _initListeners: function() {
            this._initKeyListeners(), this.options.autoHideDialCode && this._initFocusListeners(), this.options.allowDropdown && this._initDropdownListeners()
        },
        _initDropdownListeners: function() {
            var t = this,
                e = this.telInput.closest("label");
            e.length && e.on("click" + this.ns, function(e) {
                t.countryList.hasClass("hide") ? t.telInput.focus() : e.preventDefault()
            });
            var i = this.selectedFlagInner.parent();
            i.on("click" + this.ns, function(e) {
                !t.countryList.hasClass("hide") || t.telInput.prop("disabled") || t.telInput.prop("readonly") || t._showDropdown()
            }), this.flagsContainer.on("keydown" + t.ns, function(e) {
                var i = t.countryList.hasClass("hide");
                !i || e.which != l.UP && e.which != l.DOWN && e.which != l.SPACE && e.which != l.ENTER || (e.preventDefault(), e.stopPropagation(), t._showDropdown()), e.which == l.TAB && t._closeDropdown()
            })
        },
        _initRequests: function() {
            var i = this;
            this.options.utilsScript ? t.fn[s].windowLoaded ? t.fn[s].loadUtils(this.options.utilsScript, this.utilsScriptDeferred) : t(e).on("load", function() {
                t.fn[s].loadUtils(i.options.utilsScript, i.utilsScriptDeferred)
            }) : this.utilsScriptDeferred.resolve(), "auto" === this.options.initialCountry ? this._loadAutoCountry() : this.autoCountryDeferred.resolve()
        },
        _loadAutoCountry: function() {
            t.fn[s].autoCountry ? this.handleAutoCountry() : t.fn[s].startedLoadingAutoCountry || (t.fn[s].startedLoadingAutoCountry = !0, "function" == typeof this.options.geoIpLookup && this.options.geoIpLookup(function(e) {
                t.fn[s].autoCountry = e.toLowerCase(), setTimeout(function() {
                    t(".intl-tel-input input").intlTelInput("handleAutoCountry")
                })
            }))
        },
        _initKeyListeners: function() {
            var t = this;
            this.telInput.on("keyup" + this.ns, function() {
                t._updateFlagFromNumber(t.telInput.val()) && t._triggerCountryChange()
            }), this.telInput.on("cut" + this.ns + " paste" + this.ns, function() {
                setTimeout(function() {
                    t._updateFlagFromNumber(t.telInput.val()) && t._triggerCountryChange()
                })
            })
        },
        _cap: function(t) {
            var e = this.telInput.attr("maxlength");
            return e && t.length > e ? t.substr(0, e) : t
        },
        _initFocusListeners: function() {
            var e = this;
            this.telInput.on("mousedown" + this.ns, function(t) {
                e.telInput.is(":focus") || e.telInput.val() || (t.preventDefault(), e.telInput.focus())
            }), this.telInput.on("focus" + this.ns, function(t) {
                e.telInput.val() || e.telInput.prop("readonly") || !e.selectedCountryData.dialCode || (e.telInput.val("+" + e.selectedCountryData.dialCode), e.telInput.one("keypress.plus" + e.ns, function(t) {
                    t.which == l.PLUS && e.telInput.val("")
                }), setTimeout(function() {
                    var t = e.telInput[0];
                    if (e.isGoodBrowser) {
                        var i = e.telInput.val().length;
                        t.setSelectionRange(i, i)
                    }
                }))
            });
            var i = this.telInput.prop("form");
            i && t(i).on("submit" + this.ns, function() {
                e._removeEmptyDialCode()
            }), this.telInput.on("blur" + this.ns, function() {
                e._removeEmptyDialCode()
            })
        },
        _removeEmptyDialCode: function() {
            var t = this.telInput.val(),
                e = "+" == t.charAt(0);
            if (e) {
                var i = this._getNumeric(t);
                i && this.selectedCountryData.dialCode != i || this.telInput.val("")
            }
            this.telInput.off("keypress.plus" + this.ns)
        },
        _getNumeric: function(t) {
            return t.replace(/\D/g, "")
        },
        _showDropdown: function() {
            this._setDropdownPosition();
            var t = this.countryList.children(".active");
            t.length && (this._highlightListItem(t), this._scrollTo(t)), this._bindDropdownListeners(), this.selectedFlagInner.children(".iti-arrow").addClass("up"), this.telInput.trigger("open:countrydropdown")
        },
        _setDropdownPosition: function() {
            var i = this;
            if (this.options.dropdownContainer && this.dropdown.appendTo(this.options.dropdownContainer), this.dropdownHeight = this.countryList.removeClass("hide").outerHeight(), !this.isMobile) {
                var n = this.telInput.offset(),
                    o = n.top,
                    s = t(e).scrollTop(),
                    r = o + this.telInput.outerHeight() + this.dropdownHeight < s + t(e).height(),
                    a = o - this.dropdownHeight > s;
                if (this.countryList.toggleClass("dropup", !r && a), this.options.dropdownContainer) {
                    var l = !r && a ? 0 : this.telInput.innerHeight();
                    this.dropdown.css({
                        top: o + l,
                        left: n.left
                    }), t(e).on("scroll" + this.ns, function() {
                        i._closeDropdown()
                    })
                }
            }
        },
        _bindDropdownListeners: function() {
            var e = this;
            this.countryList.on("mouseover" + this.ns, ".country", function(i) {
                e._highlightListItem(t(this))
            }), this.countryList.on("click" + this.ns, ".country", function(i) {
                e._selectListItem(t(this))
            });
            var n = !0;
            t("html").on("click" + this.ns, function(t) {
                n || e._closeDropdown(), n = !1
            });
            var o = "",
                s = null;
            t(i).on("keydown" + this.ns, function(t) {
                t.preventDefault(), t.which == l.UP || t.which == l.DOWN ? e._handleUpDownKey(t.which) : t.which == l.ENTER ? e._handleEnterKey() : t.which == l.ESC ? e._closeDropdown() : (t.which >= l.A && t.which <= l.Z || t.which == l.SPACE) && (s && clearTimeout(s), o += String.fromCharCode(t.which), e._searchForCountry(o), s = setTimeout(function() {
                    o = ""
                }, 1e3))
            })
        },
        _handleUpDownKey: function(t) {
            var e = this.countryList.children(".highlight").first(),
                i = t == l.UP ? e.prev() : e.next();
            i.length && (i.hasClass("divider") && (i = t == l.UP ? i.prev() : i.next()), this._highlightListItem(i), this._scrollTo(i))
        },
        _handleEnterKey: function() {
            var t = this.countryList.children(".highlight").first();
            t.length && this._selectListItem(t)
        },
        _searchForCountry: function(t) {
            for (var e = 0; e < this.countries.length; e++)
                if (this._startsWith(this.countries[e].name, t)) {
                    var i = this.countryList.children("[data-country-code=" + this.countries[e].iso2 + "]").not(".preferred");
                    this._highlightListItem(i), this._scrollTo(i, !0);
                    break
                }
        },
        _startsWith: function(t, e) {
            return t.substr(0, e.length).toUpperCase() == e
        },
        _updateValFromNumber: function(t) {
            if (this.options.formatOnDisplay && e.intlTelInputUtils && this.selectedCountryData) {
                var i = this.options.separateDialCode || !this.options.nationalMode && "+" == t.charAt(0) ? intlTelInputUtils.numberFormat.INTERNATIONAL : intlTelInputUtils.numberFormat.NATIONAL;
                t = intlTelInputUtils.formatNumber(t, this.selectedCountryData.iso2, i)
            }
            t = this._beforeSetNumber(t), this.telInput.val(t)
        },
        _updateFlagFromNumber: function(e) {
            e && this.options.nationalMode && "1" == this.selectedCountryData.dialCode && "+" != e.charAt(0) && ("1" != e.charAt(0) && (e = "1" + e), e = "+" + e);
            var i = this._getDialCode(e),
                n = null,
                o = this._getNumeric(e);
            if (i) {
                var s = this.countryCodes[this._getNumeric(i)],
                    r = t.inArray(this.selectedCountryData.iso2, s) > -1,
                    a = "+1" == i && o.length >= 4,
                    l = "1" == this.selectedCountryData.dialCode;
                if ((!l || !this._isRegionlessNanp(o)) && (!r || a))
                    for (var u = 0; u < s.length; u++)
                        if (s[u]) {
                            n = s[u];
                            break
                        }
            } else "+" == e.charAt(0) && o.length ? n = "" : e && "+" != e || (n = this.defaultCountry);
            return null !== n && this._setFlag(n)
        },
        _isRegionlessNanp: function(e) {
            var i = this._getNumeric(e);
            if ("1" == i.charAt(0)) {
                var n = i.substr(1, 3);
                return t.inArray(n, u) > -1
            }
            return !1
        },
        _highlightListItem: function(t) {
            this.countryListItems.removeClass("highlight"), t.addClass("highlight")
        },
        _getCountryData: function(t, e, i) {
            for (var n = e ? c : this.countries, o = 0; o < n.length; o++)
                if (n[o].iso2 == t) return n[o];
            if (i) return null;
            throw new Error("No country data for '" + t + "'")
        },
        _setFlag: function(t) {
            var e = this.selectedCountryData.iso2 ? this.selectedCountryData : {};
            this.selectedCountryData = t ? this._getCountryData(t, !1, !1) : {}, this.selectedCountryData.iso2 && (this.defaultCountry = this.selectedCountryData.iso2), this.selectedFlagInner.attr("class", "iti-flag " + t);
            var i = t ? this.selectedCountryData.name + ": +" + this.selectedCountryData.dialCode : "Unknown";
            if (this.selectedFlagInner.parent().attr("title", i), this.options.separateDialCode) {
                var n = this.selectedCountryData.dialCode ? "+" + this.selectedCountryData.dialCode : "",
                    o = this.telInput.parent();
                e.dialCode && o.removeClass("iti-sdc-" + (e.dialCode.length + 1)), n && o.addClass("iti-sdc-" + n.length), this.selectedDialCode.text(n)
            }
            return this._updatePlaceholder(), this.countryListItems.removeClass("active"), t && this.countryListItems.find(".iti-flag." + t).first().closest(".country").addClass("active"), e.iso2 !== t
        },
        _updatePlaceholder: function() {
            var t = "aggressive" === this.options.autoPlaceholder || !this.hadInitialPlaceholder && (this.options.autoPlaceholder === !0 || "polite" === this.options.autoPlaceholder);
            if (e.intlTelInputUtils && t) {
                var i = intlTelInputUtils.numberType[this.options.placeholderNumberType],
                    n = this.selectedCountryData.iso2 ? intlTelInputUtils.getExampleNumber(this.selectedCountryData.iso2, this.options.nationalMode, i) : "";
                n = this._beforeSetNumber(n), "function" == typeof this.options.customPlaceholder && (n = this.options.customPlaceholder(n, this.selectedCountryData)), this.telInput.attr("placeholder", n)
            }
        },
        _selectListItem: function(t) {
            var e = this._setFlag(t.attr("data-country-code"));
            if (this._closeDropdown(), this._updateDialCode(t.attr("data-dial-code"), !0), this.telInput.focus(), this.isGoodBrowser) {
                var i = this.telInput.val().length;
                this.telInput[0].setSelectionRange(i, i)
            }
            e && this._triggerCountryChange()
        },
        _closeDropdown: function() {
            this.countryList.addClass("hide"), this.selectedFlagInner.children(".iti-arrow").removeClass("up"), t(i).off(this.ns), t("html").off(this.ns), this.countryList.off(this.ns), this.options.dropdownContainer && (this.isMobile || t(e).off("scroll" + this.ns), this.dropdown.detach()), this.telInput.trigger("close:countrydropdown")
        },
        _scrollTo: function(t, e) {
            var i = this.countryList,
                n = i.height(),
                o = i.offset().top,
                s = o + n,
                r = t.outerHeight(),
                a = t.offset().top,
                l = a + r,
                u = a - o + i.scrollTop(),
                c = n / 2 - r / 2;
            if (a < o) e && (u -= c), i.scrollTop(u);
            else if (l > s) {
                e && (u += c);
                var h = n - r;
                i.scrollTop(u - h)
            }
        },
        _updateDialCode: function(t, e) {
            var i, n = this.telInput.val();
            if (t = "+" + t, "+" == n.charAt(0)) {
                var o = this._getDialCode(n);
                i = o ? n.replace(o, t) : t
            } else {
                if (this.options.nationalMode || this.options.separateDialCode) return;
                if (n) i = t + n;
                else {
                    if (!e && this.options.autoHideDialCode) return;
                    i = t
                }
            }
            this.telInput.val(i)
        },
        _getDialCode: function(e) {
            var i = "";
            if ("+" == e.charAt(0))
                for (var n = "", o = 0; o < e.length; o++) {
                    var s = e.charAt(o);
                    if (t.isNumeric(s) && (n += s, this.countryCodes[n] && (i = e.substr(0, o + 1)), 4 == n.length)) break
                }
            return i
        },
        _getFullNumber: function() {
            var e, i = t.trim(this.telInput.val()),
                n = this.selectedCountryData.dialCode,
                o = this._getNumeric(i),
                s = "1" == o.charAt(0) ? o : "1" + o;
            return e = this.options.separateDialCode ? "+" + n : "+" != i.charAt(0) && "1" != i.charAt(0) && n && "1" == n.charAt(0) && 4 == n.length && n != s.substr(0, 4) ? n.substr(1) : "", e + i
        },
        _beforeSetNumber: function(t) {
            if (this.options.separateDialCode) {
                var e = this._getDialCode(t);
                if (e) {
                    null !== this.selectedCountryData.areaCodes && (e = "+" + this.selectedCountryData.dialCode);
                    var i = " " === t[e.length] || "-" === t[e.length] ? e.length + 1 : e.length;
                    t = t.substr(i)
                }
            }
            return this._cap(t)
        },
        _triggerCountryChange: function() {
            this.telInput.trigger("countrychange", this.selectedCountryData)
        },
        handleAutoCountry: function() {
            "auto" === this.options.initialCountry && (this.defaultCountry = t.fn[s].autoCountry, this.telInput.val() || this.setCountry(this.defaultCountry), this.autoCountryDeferred.resolve())
        },
        handleUtils: function() {
            e.intlTelInputUtils && (this.telInput.val() && this._updateValFromNumber(this.telInput.val()), this._updatePlaceholder()), this.utilsScriptDeferred.resolve()
        },
        destroy: function() {
            if (this.allowDropdown && (this._closeDropdown(), this.selectedFlagInner.parent().off(this.ns), this.telInput.closest("label").off(this.ns)), this.options.autoHideDialCode) {
                var e = this.telInput.prop("form");
                e && t(e).off(this.ns)
            }
            this.telInput.off(this.ns);
            var i = this.telInput.parent();
            i.before(this.telInput).remove()
        },
        getExtension: function() {
            return e.intlTelInputUtils ? intlTelInputUtils.getExtension(this._getFullNumber(), this.selectedCountryData.iso2) : ""
        },
        getNumber: function(t) {
            return e.intlTelInputUtils ? intlTelInputUtils.formatNumber(this._getFullNumber(), this.selectedCountryData.iso2, t) : ""
        },
        getNumberType: function() {
            return e.intlTelInputUtils ? intlTelInputUtils.getNumberType(this._getFullNumber(), this.selectedCountryData.iso2) : -99
        },
        getSelectedCountryData: function() {
            return this.selectedCountryData
        },
        getValidationError: function() {
            return e.intlTelInputUtils ? intlTelInputUtils.getValidationError(this._getFullNumber(), this.selectedCountryData.iso2) : -99
        },
        isValidNumber: function() {
            var i = t.trim(this._getFullNumber()),
                n = this.options.nationalMode ? this.selectedCountryData.iso2 : "";
            return e.intlTelInputUtils ? intlTelInputUtils.isValidNumber(i, n) : null
        },
        setCountry: function(t) {
            t = t.toLowerCase(), this.selectedFlagInner.hasClass(t) || (this._setFlag(t), this._updateDialCode(this.selectedCountryData.dialCode, !1), this._triggerCountryChange())
        },
        setNumber: function(t) {
            var e = this._updateFlagFromNumber(t);
            this._updateValFromNumber(t), e && this._triggerCountryChange()
        }
    }, t.fn[s] = function(e) {
        var i = arguments;
        if (e === n || "object" === ("undefined" == typeof e ? "undefined" : _typeof(e))) {
            var r = [];
            return this.each(function() {
                if (!t.data(this, "plugin_" + s)) {
                    var i = new o(this, e),
                        n = i._init();
                    r.push(n[0]), r.push(n[1]), t.data(this, "plugin_" + s, i)
                }
            }), t.when.apply(null, r)
        }
        if ("string" == typeof e && "_" !== e[0]) {
            var a;
            return this.each(function() {
                var n = t.data(this, "plugin_" + s);
                n instanceof o && "function" == typeof n[e] && (a = n[e].apply(n, Array.prototype.slice.call(i, 1))), "destroy" === e && t.data(this, "plugin_" + s, null)
            }), a !== n ? a : this
        }
    }, t.fn[s].getCountryData = function() {
        return c
    }, t.fn[s].loadUtils = function(e, i) {
        t.fn[s].loadedUtilsScript ? i && i.resolve() : (t.fn[s].loadedUtilsScript = !0, t.ajax({
            type: "GET",
            url: e,
            complete: function() {
                t(".intl-tel-input input").intlTelInput("handleUtils")
            },
            dataType: "script",
            cache: !0
        }))
    }, t.fn[s].defaults = a, t.fn[s].version = "11.1.6";
    for (var c = [
            ["Afghanistan (‫افغانستان‬‎)", "af", "93"],
            ["Albania (Shqipëri)", "al", "355"],
            ["Algeria (‫الجزائر‬‎)", "dz", "213"],
            ["American Samoa", "as", "1684"],
            ["Andorra", "ad", "376"],
            ["Angola", "ao", "244"],
            ["Anguilla", "ai", "1264"],
            ["Antigua and Barbuda", "ag", "1268"],
            ["Argentina", "ar", "54"],
            ["Armenia (Հայաստան)", "am", "374"],
            ["Aruba", "aw", "297"],
            ["Australia", "au", "61", 0],
            ["Austria (Österreich)", "at", "43"],
            ["Azerbaijan (Azərbaycan)", "az", "994"],
            ["Bahamas", "bs", "1242"],
            ["Bahrain (‫البحرين‬‎)", "bh", "973"],
            ["Bangladesh (বাংলাদেশ)", "bd", "880"],
            ["Barbados", "bb", "1246"],
            ["Belarus (Беларусь)", "by", "375"],
            ["Belgium (België)", "be", "32"],
            ["Belize", "bz", "501"],
            ["Benin (Bénin)", "bj", "229"],
            ["Bermuda", "bm", "1441"],
            ["Bhutan (འབྲུག)", "bt", "975"],
            ["Bolivia", "bo", "591"],
            ["Bosnia and Herzegovina (Босна и Херцеговина)", "ba", "387"],
            ["Botswana", "bw", "267"],
            ["Brazil (Brasil)", "br", "55"],
            ["British Indian Ocean Territory", "io", "246"],
            ["British Virgin Islands", "vg", "1284"],
            ["Brunei", "bn", "673"],
            ["Bulgaria (България)", "bg", "359"],
            ["Burkina Faso", "bf", "226"],
            ["Burundi (Uburundi)", "bi", "257"],
            ["Cambodia (កម្ពុជា)", "kh", "855"],
            ["Cameroon (Cameroun)", "cm", "237"],
            ["Canada", "ca", "1", 1, ["204", "226", "236", "249", "250", "289", "306", "343", "365", "387", "403", "416", "418", "431", "437", "438", "450", "506", "514", "519", "548", "579", "581", "587", "604", "613", "639", "647", "672", "705", "709", "742", "778", "780", "782", "807", "819", "825", "867", "873", "902", "905"]],
            ["Cape Verde (Kabu Verdi)", "cv", "238"],
            ["Caribbean Netherlands", "bq", "599", 1],
            ["Cayman Islands", "ky", "1345"],
            ["Central African Republic (République centrafricaine)", "cf", "236"],
            ["Chad (Tchad)", "td", "235"],
            ["Chile", "cl", "56"],
            ["China (中国)", "cn", "86"],
            ["Christmas Island", "cx", "61", 2],
            ["Cocos (Keeling) Islands", "cc", "61", 1],
            ["Colombia", "co", "57"],
            ["Comoros (‫جزر القمر‬‎)", "km", "269"],
            ["Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)", "cd", "243"],
            ["Congo (Republic) (Congo-Brazzaville)", "cg", "242"],
            ["Cook Islands", "ck", "682"],
            ["Costa Rica", "cr", "506"],
            ["Côte d’Ivoire", "ci", "225"],
            ["Croatia (Hrvatska)", "hr", "385"],
            ["Cuba", "cu", "53"],
            ["Curaçao", "cw", "599", 0],
            ["Cyprus (Κύπρος)", "cy", "357"],
            ["Czech Republic (Česká republika)", "cz", "420"],
            ["Denmark (Danmark)", "dk", "45"],
            ["Djibouti", "dj", "253"],
            ["Dominica", "dm", "1767"],
            ["Dominican Republic (República Dominicana)", "do", "1", 2, ["809", "829", "849"]],
            ["Ecuador", "ec", "593"],
            ["Egypt (‫مصر‬‎)", "eg", "20"],
            ["El Salvador", "sv", "503"],
            ["Equatorial Guinea (Guinea Ecuatorial)", "gq", "240"],
            ["Eritrea", "er", "291"],
            ["Estonia (Eesti)", "ee", "372"],
            ["Ethiopia", "et", "251"],
            ["Falkland Islands (Islas Malvinas)", "fk", "500"],
            ["Faroe Islands (Føroyar)", "fo", "298"],
            ["Fiji", "fj", "679"],
            ["Finland (Suomi)", "fi", "358", 0],
            ["France", "fr", "33"],
            ["French Guiana (Guyane française)", "gf", "594"],
            ["French Polynesia (Polynésie française)", "pf", "689"],
            ["Gabon", "ga", "241"],
            ["Gambia", "gm", "220"],
            ["Georgia (საქართველო)", "ge", "995"],
            ["Germany (Deutschland)", "de", "49"],
            ["Ghana (Gaana)", "gh", "233"],
            ["Gibraltar", "gi", "350"],
            ["Greece (Ελλάδα)", "gr", "30"],
            ["Greenland (Kalaallit Nunaat)", "gl", "299"],
            ["Grenada", "gd", "1473"],
            ["Guadeloupe", "gp", "590", 0],
            ["Guam", "gu", "1671"],
            ["Guatemala", "gt", "502"],
            ["Guernsey", "gg", "44", 1],
            ["Guinea (Guinée)", "gn", "224"],
            ["Guinea-Bissau (Guiné Bissau)", "gw", "245"],
            ["Guyana", "gy", "592"],
            ["Haiti", "ht", "509"],
            ["Honduras", "hn", "504"],
            ["Hong Kong (香港)", "hk", "852"],
            ["Hungary (Magyarország)", "hu", "36"],
            ["Iceland (Ísland)", "is", "354"],
            ["India (भारत)", "in", "91"],
            ["Indonesia", "id", "62"],
            ["Iran (‫ایران‬‎)", "ir", "98"],
            ["Iraq (‫العراق‬‎)", "iq", "964"],
            ["Ireland", "ie", "353"],
            ["Isle of Man", "im", "44", 2],
            ["Israel (‫ישראל‬‎)", "il", "972"],
            ["Italy (Italia)", "it", "39", 0],
            ["Jamaica", "jm", "1876"],
            ["Japan (日本)", "jp", "81"],
            ["Jersey", "je", "44", 3],
            ["Jordan (‫الأردن‬‎)", "jo", "962"],
            ["Kazakhstan (Казахстан)", "kz", "7", 1],
            ["Kenya", "ke", "254"],
            ["Kiribati", "ki", "686"],
            ["Kosovo", "xk", "383"],
            ["Kuwait (‫الكويت‬‎)", "kw", "965"],
            ["Kyrgyzstan (Кыргызстан)", "kg", "996"],
            ["Laos (ລາວ)", "la", "856"],
            ["Latvia (Latvija)", "lv", "371"],
            ["Lebanon (‫لبنان‬‎)", "lb", "961"],
            ["Lesotho", "ls", "266"],
            ["Liberia", "lr", "231"],
            ["Libya (‫ليبيا‬‎)", "ly", "218"],
            ["Liechtenstein", "li", "423"],
            ["Lithuania (Lietuva)", "lt", "370"],
            ["Luxembourg", "lu", "352"],
            ["Macau (澳門)", "mo", "853"],
            ["Macedonia (FYROM) (Македонија)", "mk", "389"],
            ["Madagascar (Madagasikara)", "mg", "261"],
            ["Malawi", "mw", "265"],
            ["Malaysia", "my", "60"],
            ["Maldives", "mv", "960"],
            ["Mali", "ml", "223"],
            ["Malta", "mt", "356"],
            ["Marshall Islands", "mh", "692"],
            ["Martinique", "mq", "596"],
            ["Mauritania (‫موريتانيا‬‎)", "mr", "222"],
            ["Mauritius (Moris)", "mu", "230"],
            ["Mayotte", "yt", "262", 1],
            ["Mexico (México)", "mx", "52"],
            ["Micronesia", "fm", "691"],
            ["Moldova (Republica Moldova)", "md", "373"],
            ["Monaco", "mc", "377"],
            ["Mongolia (Монгол)", "mn", "976"],
            ["Montenegro (Crna Gora)", "me", "382"],
            ["Montserrat", "ms", "1664"],
            ["Morocco (‫المغرب‬‎)", "ma", "212", 0],
            ["Mozambique (Moçambique)", "mz", "258"],
            ["Myanmar (Burma) (မြန်မာ)", "mm", "95"],
            ["Namibia (Namibië)", "na", "264"],
            ["Nauru", "nr", "674"],
            ["Nepal (नेपाल)", "np", "977"],
            ["Netherlands (Nederland)", "nl", "31"],
            ["New Caledonia (Nouvelle-Calédonie)", "nc", "687"],
            ["New Zealand", "nz", "64"],
            ["Nicaragua", "ni", "505"],
            ["Niger (Nijar)", "ne", "227"],
            ["Nigeria", "ng", "234"],
            ["Niue", "nu", "683"],
            ["Norfolk Island", "nf", "672"],
            ["North Korea (조선 민주주의 인민 공화국)", "kp", "850"],
            ["Northern Mariana Islands", "mp", "1670"],
            ["Norway (Norge)", "no", "47", 0],
            ["Oman (‫عُمان‬‎)", "om", "968"],
            ["Pakistan (‫پاکستان‬‎)", "pk", "92"],
            ["Palau", "pw", "680"],
            ["Palestine (‫فلسطين‬‎)", "ps", "970"],
            ["Panama (Panamá)", "pa", "507"],
            ["Papua New Guinea", "pg", "675"],
            ["Paraguay", "py", "595"],
            ["Peru (Perú)", "pe", "51"],
            ["Philippines", "ph", "63"],
            ["Poland (Polska)", "pl", "48"],
            ["Portugal", "pt", "351"],
            ["Puerto Rico", "pr", "1", 3, ["787", "939"]],
            ["Qatar (‫قطر‬‎)", "qa", "974"],
            ["Réunion (La Réunion)", "re", "262", 0],
            ["Romania (România)", "ro", "40"],
            ["Russia (Россия)", "ru", "7", 0],
            ["Rwanda", "rw", "250"],
            ["Saint Barthélemy", "bl", "590", 1],
            ["Saint Helena", "sh", "290"],
            ["Saint Kitts and Nevis", "kn", "1869"],
            ["Saint Lucia", "lc", "1758"],
            ["Saint Martin (Saint-Martin (partie française))", "mf", "590", 2],
            ["Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)", "pm", "508"],
            ["Saint Vincent and the Grenadines", "vc", "1784"],
            ["Samoa", "ws", "685"],
            ["San Marino", "sm", "378"],
            ["São Tomé and Príncipe (São Tomé e Príncipe)", "st", "239"],
            ["Saudi Arabia (‫المملكة العربية السعودية‬‎)", "sa", "966"],
            ["Senegal (Sénégal)", "sn", "221"],
            ["Serbia (Србија)", "rs", "381"],
            ["Seychelles", "sc", "248"],
            ["Sierra Leone", "sl", "232"],
            ["Singapore", "sg", "65"],
            ["Sint Maarten", "sx", "1721"],
            ["Slovakia (Slovensko)", "sk", "421"],
            ["Slovenia (Slovenija)", "si", "386"],
            ["Solomon Islands", "sb", "677"],
            ["Somalia (Soomaaliya)", "so", "252"],
            ["South Africa", "za", "27"],
            ["South Korea (대한민국)", "kr", "82"],
            ["South Sudan (‫جنوب السودان‬‎)", "ss", "211"],
            ["Spain (España)", "es", "34"],
            ["Sri Lanka (ශ්‍රී ලංකාව)", "lk", "94"],
            ["Sudan (‫السودان‬‎)", "sd", "249"],
            ["Suriname", "sr", "597"],
            ["Svalbard and Jan Mayen", "sj", "47", 1],
            ["Swaziland", "sz", "268"],
            ["Sweden (Sverige)", "se", "46"],
            ["Switzerland (Schweiz)", "ch", "41"],
            ["Syria (‫سوريا‬‎)", "sy", "963"],
            ["Taiwan (台灣)", "tw", "886"],
            ["Tajikistan", "tj", "992"],
            ["Tanzania", "tz", "255"],
            ["Thailand (ไทย)", "th", "66"],
            ["Timor-Leste", "tl", "670"],
            ["Togo", "tg", "228"],
            ["Tokelau", "tk", "690"],
            ["Tonga", "to", "676"],
            ["Trinidad and Tobago", "tt", "1868"],
            ["Tunisia (‫تونس‬‎)", "tn", "216"],
            ["Turkey (Türkiye)", "tr", "90"],
            ["Turkmenistan", "tm", "993"],
            ["Turks and Caicos Islands", "tc", "1649"],
            ["Tuvalu", "tv", "688"],
            ["U.S. Virgin Islands", "vi", "1340"],
            ["Uganda", "ug", "256"],
            ["Ukraine (Україна)", "ua", "380"],
            ["United Arab Emirates (‫الإمارات العربية المتحدة‬‎)", "ae", "971"],
            ["United Kingdom", "gb", "44", 0],
            ["United States", "us", "1", 0],
            ["Uruguay", "uy", "598"],
            ["Uzbekistan (Oʻzbekiston)", "uz", "998"],
            ["Vanuatu", "vu", "678"],
            ["Vatican City (Città del Vaticano)", "va", "39", 1],
            ["Venezuela", "ve", "58"],
            ["Vietnam (Việt Nam)", "vn", "84"],
            ["Wallis and Futuna (Wallis-et-Futuna)", "wf", "681"],
            ["Western Sahara (‫الصحراء الغربية‬‎)", "eh", "212", 1],
            ["Yemen (‫اليمن‬‎)", "ye", "967"],
            ["Zambia", "zm", "260"],
            ["Zimbabwe", "zw", "263"],
            ["Åland Islands", "ax", "358", 1]
        ], h = 0; h < c.length; h++) {
        var d = c[h];
        c[h] = {
            name: d[0],
            iso2: d[1],
            dialCode: d[2],
            priority: d[3] || 0,
            areaCodes: d[4] || null
        }
    }
});
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
    return typeof t
} : function(t) {
    return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
};
! function(t) {
    if ("function" == typeof define && define.amd) define(["jquery"], t);
    else if ("object" === ("undefined" == typeof module ? "undefined" : _typeof(module)) && module.exports) {
        var e = require("jquery");
        t(e), module.exports = e
    } else t(jQuery)
}(function(t) {
    function e(t) {
        this.init(t)
    }
    e.prototype = {
        value: 0,
        size: 100,
        startAngle: -Math.PI,
        thickness: "auto",
        fill: {
            gradient: ["#3aeabb", "#fdd250"]
        },
        emptyFill: "rgba(0, 0, 0, .1)",
        animation: {
            duration: 1200,
            easing: "circleProgressEasing"
        },
        animationStartValue: 0,
        reverse: !1,
        lineCap: "butt",
        insertMode: "prepend",
        constructor: e,
        el: null,
        canvas: null,
        ctx: null,
        radius: 0,
        arcFill: null,
        lastFrameValue: 0,
        init: function(e) {
            t.extend(this, e), this.radius = this.size / 2, this.initWidget(), this.initFill(), this.draw(), this.el.trigger("circle-inited")
        },
        initWidget: function() {
            this.canvas || (this.canvas = t("<canvas>")["prepend" == this.insertMode ? "prependTo" : "appendTo"](this.el)[0]);
            var e = this.canvas;
            if (e.width = this.size, e.height = this.size, this.ctx = e.getContext("2d"), window.devicePixelRatio > 1) {
                var i = window.devicePixelRatio;
                e.style.width = e.style.height = this.size + "px", e.width = e.height = this.size * i, this.ctx.scale(i, i)
            }
        },
        initFill: function() {
            function e() {
                var e = t("<canvas>")[0];
                e.width = i.size, e.height = i.size, e.getContext("2d").drawImage(f, 0, 0, s, s), i.arcFill = i.ctx.createPattern(e, "no-repeat"), i.drawFrame(i.lastFrameValue)
            }
            var i = this,
                n = this.fill,
                o = this.ctx,
                s = this.size;
            if (!n) throw Error("The fill is not specified!");
            if ("string" == typeof n && (n = {
                    color: n
                }), n.color && (this.arcFill = n.color), n.gradient) {
                var r = n.gradient;
                if (1 == r.length) this.arcFill = r[0];
                else if (r.length > 1) {
                    for (var a = n.gradientAngle || 0, l = n.gradientDirection || [s / 2 * (1 - Math.cos(a)), s / 2 * (1 + Math.sin(a)), s / 2 * (1 + Math.cos(a)), s / 2 * (1 - Math.sin(a))], u = o.createLinearGradient.apply(o, l), c = 0; c < r.length; c++) {
                        var h = r[c],
                            d = c / (r.length - 1);
                        t.isArray(h) && (d = h[1], h = h[0]), u.addColorStop(d, h)
                    }
                    this.arcFill = u
                }
            }
            if (n.image) {
                var f;
                n.image instanceof Image ? f = n.image : (f = new Image, f.src = n.image), f.complete ? e() : f.onload = e
            }
        },
        draw: function() {
            this.animation ? this.drawAnimated(this.value) : this.drawFrame(this.value)
        },
        drawFrame: function(t) {
            this.lastFrameValue = t, this.ctx.clearRect(0, 0, this.size, this.size), this.drawEmptyArc(t), this.drawArc(t)
        },
        drawArc: function(t) {
            if (0 !== t) {
                var e = this.ctx,
                    i = this.radius,
                    n = this.getThickness(),
                    o = this.startAngle;
                e.save(), e.beginPath(), this.reverse ? e.arc(i, i, i - n / 2, o - 2 * Math.PI * t, o) : e.arc(i, i, i - n / 2, o, o + 2 * Math.PI * t), e.lineWidth = n, e.lineCap = this.lineCap, e.strokeStyle = this.arcFill, e.stroke(), e.restore()
            }
        },
        drawEmptyArc: function(t) {
            var e = this.ctx,
                i = this.radius,
                n = this.getThickness(),
                o = this.startAngle;
            t < 1 && (e.save(), e.beginPath(), t <= 0 ? e.arc(i, i, i - n / 2, 0, 2 * Math.PI) : this.reverse ? e.arc(i, i, i - n / 2, o, o - 2 * Math.PI * t) : e.arc(i, i, i - n / 2, o + 2 * Math.PI * t, o), e.lineWidth = n, e.strokeStyle = this.emptyFill, e.stroke(),
                e.restore())
        },
        drawAnimated: function(e) {
            var i = this,
                n = this.el,
                o = t(this.canvas);
            o.stop(!0, !1), n.trigger("circle-animation-start"), o.css({
                animationProgress: 0
            }).animate({
                animationProgress: 1
            }, t.extend({}, this.animation, {
                step: function(t) {
                    var o = i.animationStartValue * (1 - t) + e * t;
                    i.drawFrame(o), n.trigger("circle-animation-progress", [t, o])
                }
            })).promise().always(function() {
                n.trigger("circle-animation-end")
            })
        },
        getThickness: function() {
            return t.isNumeric(this.thickness) ? this.thickness : this.size / 14
        },
        getValue: function() {
            return this.value
        },
        setValue: function(t) {
            this.animation && (this.animationStartValue = this.lastFrameValue), this.value = t, this.draw()
        }
    }, t.circleProgress = {
        defaults: e.prototype
    }, t.easing.circleProgressEasing = function(t) {
        return t < .5 ? (t = 2 * t, .5 * t * t * t) : (t = 2 - 2 * t, 1 - .5 * t * t * t)
    }, t.fn.circleProgress = function(i, n) {
        var o = "circle-progress",
            s = this.data(o);
        if ("widget" == i) {
            if (!s) throw Error('Calling "widget" method on not initialized instance is forbidden');
            return s.canvas
        }
        if ("value" == i) {
            if (!s) throw Error('Calling "value" method on not initialized instance is forbidden');
            if ("undefined" == typeof n) return s.getValue();
            var r = arguments[1];
            return this.each(function() {
                t(this).data(o).setValue(r)
            })
        }
        return this.each(function() {
            var n = t(this),
                s = n.data(o),
                r = t.isPlainObject(i) ? i : {};
            if (s) s.init(r);
            else {
                var a = t.extend({}, n.data());
                "string" == typeof a.fill && (a.fill = JSON.parse(a.fill)), "string" == typeof a.animation && (a.animation = JSON.parse(a.animation)), r = t.extend(a, r), r.el = n, s = new e(r), n.data(o, s)
            }
        })
    }
});
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
    return typeof t
} : function(t) {
    return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
};
! function(t, e) {
    "object" === ("undefined" == typeof exports ? "undefined" : _typeof(exports)) && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.SignaturePad = e()
}(this, function() {
    function t(t, e, i) {
        this.x = t, this.y = e, this.time = i || (new Date).getTime()
    }

    function e(t, e, i, n) {
        this.startPoint = t, this.control1 = e, this.control2 = i, this.endPoint = n
    }

    function i(t, e, i) {
        var n, o, s, r = null,
            a = 0;
        i || (i = {});
        var l = function() {
            a = i.leading === !1 ? 0 : Date.now(), r = null, s = t.apply(n, o), r || (n = o = null)
        };
        return function() {
            var u = Date.now();
            a || i.leading !== !1 || (a = u);
            var c = e - (u - a);
            return n = this, o = arguments, c <= 0 || c > e ? (r && (clearTimeout(r), r = null), a = u, s = t.apply(n, o), r || (n = o = null)) : r || i.trailing === !1 || (r = setTimeout(l, c)), s
        }
    }

    function n(t, e) {
        var o = this,
            s = e || {};
        this.velocityFilterWeight = s.velocityFilterWeight || .7, this.minWidth = s.minWidth || .5, this.maxWidth = s.maxWidth || 2.5, this.throttle = "throttle" in s ? s.throttle : 16, this.minDistance = s.minDistance || 5, this.throttle ? this._strokeMoveUpdate = i(n.prototype._strokeUpdate, this.throttle) : this._strokeMoveUpdate = n.prototype._strokeUpdate, this.dotSize = s.dotSize || function() {
            return (this.minWidth + this.maxWidth) / 2
        }, this.penColor = s.penColor || "black", this.backgroundColor = s.backgroundColor || "rgba(0,0,0,0)", this.onBegin = s.onBegin, this.onEnd = s.onEnd, this._canvas = t, this._ctx = t.getContext("2d"), this.clear(), this._handleMouseDown = function(t) {
            1 === t.which && (o._mouseButtonDown = !0, o._strokeBegin(t))
        }, this._handleMouseMove = function(t) {
            o._mouseButtonDown && o._strokeMoveUpdate(t)
        }, this._handleMouseUp = function(t) {
            1 === t.which && o._mouseButtonDown && (o._mouseButtonDown = !1, o._strokeEnd(t))
        }, this._handleTouchStart = function(t) {
            if (1 === t.targetTouches.length) {
                var e = t.changedTouches[0];
                o._strokeBegin(e)
            }
        }, this._handleTouchMove = function(t) {
            t.preventDefault();
            var e = t.targetTouches[0];
            o._strokeMoveUpdate(e)
        }, this._handleTouchEnd = function(t) {
            var e = t.target === o._canvas;
            e && (t.preventDefault(), o._strokeEnd(t))
        }, this.on()
    }
    return t.prototype.velocityFrom = function(t) {
        return this.time !== t.time ? this.distanceTo(t) / (this.time - t.time) : 1
    }, t.prototype.distanceTo = function(t) {
        return Math.sqrt(Math.pow(this.x - t.x, 2) + Math.pow(this.y - t.y, 2))
    }, t.prototype.equals = function(t) {
        return this.x === t.x && this.y === t.y && this.time === t.time
    }, e.prototype.length = function() {
        for (var t = 10, e = 0, i = void 0, n = void 0, o = 0; o <= t; o += 1) {
            var s = o / t,
                r = this._point(s, this.startPoint.x, this.control1.x, this.control2.x, this.endPoint.x),
                a = this._point(s, this.startPoint.y, this.control1.y, this.control2.y, this.endPoint.y);
            if (o > 0) {
                var l = r - i,
                    u = a - n;
                e += Math.sqrt(l * l + u * u)
            }
            i = r, n = a
        }
        return e
    }, e.prototype._point = function(t, e, i, n, o) {
        return e * (1 - t) * (1 - t) * (1 - t) + 3 * i * (1 - t) * (1 - t) * t + 3 * n * (1 - t) * t * t + o * t * t * t
    }, n.prototype.clear = function() {
        var t = this._ctx,
            e = this._canvas;
        t.fillStyle = this.backgroundColor, t.clearRect(0, 0, e.width, e.height), t.fillRect(0, 0, e.width, e.height), this._data = [], this._reset(), this._isEmpty = !0
    }, n.prototype.fromDataURL = function(t) {
        var e = this,
            i = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
            n = new Image,
            o = i.ratio || window.devicePixelRatio || 1,
            s = i.width || this._canvas.width / o,
            r = i.height || this._canvas.height / o;
        this._reset(), n.src = t, n.onload = function() {
            e._ctx.drawImage(n, 0, 0, s, r)
        }, this._isEmpty = !1
    }, n.prototype.toDataURL = function(t) {
        var e;
        switch (t) {
            case "image/svg+xml":
                return this._toSVG();
            default:
                for (var i = arguments.length, n = Array(i > 1 ? i - 1 : 0), o = 1; o < i; o++) n[o - 1] = arguments[o];
                return (e = this._canvas).toDataURL.apply(e, [t].concat(n))
        }
    }, n.prototype.on = function() {
        this._handleMouseEvents(), this._handleTouchEvents()
    }, n.prototype.off = function() {
        this._canvas.removeEventListener("mousedown", this._handleMouseDown), this._canvas.removeEventListener("mousemove", this._handleMouseMove), document.removeEventListener("mouseup", this._handleMouseUp), this._canvas.removeEventListener("touchstart", this._handleTouchStart), this._canvas.removeEventListener("touchmove", this._handleTouchMove), this._canvas.removeEventListener("touchend", this._handleTouchEnd)
    }, n.prototype.isEmpty = function() {
        return this._isEmpty
    }, n.prototype._strokeBegin = function(t) {
        this._data.push([]), this._reset(), this._strokeUpdate(t), "function" == typeof this.onBegin && this.onBegin(t)
    }, n.prototype._strokeUpdate = function(t) {
        var e = t.clientX,
            i = t.clientY,
            n = this._createPoint(e, i),
            o = this._data[this._data.length - 1],
            s = o && o[o.length - 1],
            r = s && n.distanceTo(s) < this.minDistance;
        if (!s || !r) {
            var a = this._addPoint(n),
                l = a.curve,
                u = a.widths;
            l && u && this._drawCurve(l, u.start, u.end), this._data[this._data.length - 1].push({
                x: n.x,
                y: n.y,
                time: n.time,
                color: this.penColor
            })
        }
    }, n.prototype._strokeEnd = function(t) {
        var e = this.points.length > 2,
            i = this.points[0];
        if (!e && i && this._drawDot(i), i) {
            var n = this._data[this._data.length - 1],
                o = n[n.length - 1];
            i.equals(o) || n.push({
                x: i.x,
                y: i.y,
                time: i.time,
                color: this.penColor
            })
        }
        "function" == typeof this.onEnd && this.onEnd(t)
    }, n.prototype._handleMouseEvents = function() {
        this._mouseButtonDown = !1, this._canvas.addEventListener("mousedown", this._handleMouseDown), this._canvas.addEventListener("mousemove", this._handleMouseMove), document.addEventListener("mouseup", this._handleMouseUp)
    }, n.prototype._handleTouchEvents = function() {
        this._canvas.style.msTouchAction = "none", this._canvas.style.touchAction = "none", this._canvas.addEventListener("touchstart", this._handleTouchStart), this._canvas.addEventListener("touchmove", this._handleTouchMove), this._canvas.addEventListener("touchend", this._handleTouchEnd)
    }, n.prototype._reset = function() {
        this.points = [], this._lastVelocity = 0, this._lastWidth = (this.minWidth + this.maxWidth) / 2, this._ctx.fillStyle = this.penColor
    }, n.prototype._createPoint = function(e, i, n) {
        var o = this._canvas.getBoundingClientRect();
        return new t(e - o.left, i - o.top, n || (new Date).getTime())
    }, n.prototype._addPoint = function(t) {
        var i = this.points,
            n = void 0;
        if (i.push(t), i.length > 2) {
            3 === i.length && i.unshift(i[0]), n = this._calculateCurveControlPoints(i[0], i[1], i[2]);
            var o = n.c2;
            n = this._calculateCurveControlPoints(i[1], i[2], i[3]);
            var s = n.c1,
                r = new e(i[1], o, s, i[2]),
                a = this._calculateCurveWidths(r);
            return i.shift(), {
                curve: r,
                widths: a
            }
        }
        return {}
    }, n.prototype._calculateCurveControlPoints = function(e, i, n) {
        var o = e.x - i.x,
            s = e.y - i.y,
            r = i.x - n.x,
            a = i.y - n.y,
            l = {
                x: (e.x + i.x) / 2,
                y: (e.y + i.y) / 2
            },
            u = {
                x: (i.x + n.x) / 2,
                y: (i.y + n.y) / 2
            },
            c = Math.sqrt(o * o + s * s),
            h = Math.sqrt(r * r + a * a),
            d = l.x - u.x,
            f = l.y - u.y,
            p = h / (c + h),
            g = {
                x: u.x + d * p,
                y: u.y + f * p
            },
            m = i.x - g.x,
            v = i.y - g.y;
        return {
            c1: new t(l.x + m, l.y + v),
            c2: new t(u.x + m, u.y + v)
        }
    }, n.prototype._calculateCurveWidths = function(t) {
        var e = t.startPoint,
            i = t.endPoint,
            n = {
                start: null,
                end: null
            },
            o = this.velocityFilterWeight * i.velocityFrom(e) + (1 - this.velocityFilterWeight) * this._lastVelocity,
            s = this._strokeWidth(o);
        return n.start = this._lastWidth, n.end = s, this._lastVelocity = o, this._lastWidth = s, n
    }, n.prototype._strokeWidth = function(t) {
        return Math.max(this.maxWidth / (t + 1), this.minWidth)
    }, n.prototype._drawPoint = function(t, e, i) {
        var n = this._ctx;
        n.moveTo(t, e), n.arc(t, e, i, 0, 2 * Math.PI, !1), this._isEmpty = !1
    }, n.prototype._drawCurve = function(t, e, i) {
        var n = this._ctx,
            o = i - e,
            s = Math.floor(t.length());
        n.beginPath();
        for (var r = 0; r < s; r += 1) {
            var a = r / s,
                l = a * a,
                u = l * a,
                c = 1 - a,
                h = c * c,
                d = h * c,
                f = d * t.startPoint.x;
            f += 3 * h * a * t.control1.x, f += 3 * c * l * t.control2.x, f += u * t.endPoint.x;
            var p = d * t.startPoint.y;
            p += 3 * h * a * t.control1.y, p += 3 * c * l * t.control2.y, p += u * t.endPoint.y;
            var g = e + u * o;
            this._drawPoint(f, p, g)
        }
        n.closePath(), n.fill()
    }, n.prototype._drawDot = function(t) {
        var e = this._ctx,
            i = "function" == typeof this.dotSize ? this.dotSize() : this.dotSize;
        e.beginPath(), this._drawPoint(t.x, t.y, i), e.closePath(), e.fill()
    }, n.prototype._fromData = function(e, i, n) {
        for (var o = 0; o < e.length; o += 1) {
            var s = e[o];
            if (s.length > 1)
                for (var r = 0; r < s.length; r += 1) {
                    var a = s[r],
                        l = new t(a.x, a.y, a.time),
                        u = a.color;
                    if (0 === r) this._reset(), this._addPoint(l);
                    else if (r !== s.length - 1) {
                        var c = this._addPoint(l),
                            h = c.curve,
                            d = c.widths;
                        h && d && i(h, d, u)
                    }
                } else {
                    this._reset();
                    var f = s[0];
                    n(f)
                }
        }
    }, n.prototype._toSVG = function() {
        var t = this,
            e = this._data,
            i = this._canvas,
            n = Math.max(window.devicePixelRatio || 1, 1),
            o = 0,
            s = 0,
            r = i.width / n,
            a = i.height / n,
            l = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        l.setAttributeNS(null, "width", i.width), l.setAttributeNS(null, "height", i.height), this._fromData(e, function(t, e, i) {
            var n = document.createElement("path");
            if (!(isNaN(t.control1.x) || isNaN(t.control1.y) || isNaN(t.control2.x) || isNaN(t.control2.y))) {
                var o = "M " + t.startPoint.x.toFixed(3) + "," + t.startPoint.y.toFixed(3) + " " + ("C " + t.control1.x.toFixed(3) + "," + t.control1.y.toFixed(3) + " ") + (t.control2.x.toFixed(3) + "," + t.control2.y.toFixed(3) + " ") + (t.endPoint.x.toFixed(3) + "," + t.endPoint.y.toFixed(3));
                n.setAttribute("d", o), n.setAttribute("stroke-width", (2.25 * e.end).toFixed(3)), n.setAttribute("stroke", i), n.setAttribute("fill", "none"), n.setAttribute("stroke-linecap", "round"), l.appendChild(n)
            }
        }, function(e) {
            var i = document.createElement("circle"),
                n = "function" == typeof t.dotSize ? t.dotSize() : t.dotSize;
            i.setAttribute("r", n), i.setAttribute("cx", e.x), i.setAttribute("cy", e.y), i.setAttribute("fill", e.color), l.appendChild(i)
        });
        var u = "data:image/svg+xml;base64,",
            c = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"' + (' viewBox="' + o + " " + s + " " + r + " " + a + '"') + (' width="' + r + '"') + (' height="' + a + '"') + ">",
            h = l.innerHTML;
        if (void 0 === h) {
            var d = document.createElement("dummy"),
                f = l.childNodes;
            d.innerHTML = "";
            for (var p = 0; p < f.length; p += 1) d.appendChild(f[p].cloneNode(!0));
            h = d.innerHTML
        }
        var g = "</svg>",
            m = c + h + g;
        return u + btoa(m)
    }, n.prototype.fromData = function(t) {
        var e = this;
        this.clear(), this._fromData(t, function(t, i) {
            return e._drawCurve(t, i.start, i.end)
        }, function(t) {
            return e._drawDot(t)
        }), this._data = t
    }, n.prototype.toData = function() {
        return this._data
    }, n
});
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
    return typeof t
} : function(t) {
    return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
};
! function(t, e, i) {
    "function" == typeof define && define.amd ? define(["jquery"], t) : "object" === ("undefined" == typeof exports ? "undefined" : _typeof(exports)) ? module.exports = t(require("jquery")) : t(e || i)
}(function(t) {
    var e = function(e, i, n) {
        var o = {
            invalid: [],
            getCaret: function() {
                try {
                    var t, i = 0,
                        n = e.get(0),
                        s = document.selection,
                        r = n.selectionStart;
                    return s && navigator.appVersion.indexOf("MSIE 10") === -1 ? (t = s.createRange(), t.moveStart("character", -o.val().length), i = t.text.length) : (r || "0" === r) && (i = r), i
                } catch (a) {}
            },
            setCaret: function(t) {
                try {
                    if (e.is(":focus")) {
                        var i, n = e.get(0);
                        n.setSelectionRange ? n.setSelectionRange(t, t) : (i = n.createTextRange(), i.collapse(!0), i.moveEnd("character", t), i.moveStart("character", t), i.select())
                    }
                } catch (o) {}
            },
            events: function() {
                e.on("keydown.mask", function(t) {
                    e.data("mask-keycode", t.keyCode || t.which), e.data("mask-previus-value", e.val()), e.data("mask-previus-caret-pos", o.getCaret()), o.maskDigitPosMapOld = o.maskDigitPosMap
                }).on(t.jMaskGlobals.useInput ? "input.mask" : "keyup.mask", o.behaviour).on("paste.mask drop.mask", function() {
                    setTimeout(function() {
                        e.keydown().keyup()
                    }, 100)
                }).on("change.mask", function() {
                    e.data("changed", !0)
                }).on("blur.mask", function() {
                    a === o.val() || e.data("changed") || e.trigger("change"), e.data("changed", !1)
                }).on("blur.mask", function() {
                    a = o.val()
                }).on("focus.mask", function(e) {
                    n.selectOnFocus === !0 && t(e.target).select()
                }).on("focusout.mask", function() {
                    n.clearIfNotMatch && !s.test(o.val()) && o.val("")
                })
            },
            getRegexMask: function() {
                for (var t, e, n, o, s, a, l = [], u = 0; u < i.length; u++) t = r.translation[i.charAt(u)], t ? (e = t.pattern.toString().replace(/.{1}$|^.{1}/g, ""), n = t.optional, o = t.recursive, o ? (l.push(i.charAt(u)), s = {
                    digit: i.charAt(u),
                    pattern: e
                }) : l.push(n || o ? e + "?" : e)) : l.push(i.charAt(u).replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&"));
                return a = l.join(""), s && (a = a.replace(new RegExp("(" + s.digit + "(.*" + s.digit + ")?)"), "($1)?").replace(new RegExp(s.digit, "g"), s.pattern)), new RegExp(a)
            },
            destroyEvents: function() {
                e.off(["input", "keydown", "keyup", "paste", "drop", "blur", "focusout", ""].join(".mask "))
            },
            val: function(t) {
                var i, n = e.is("input"),
                    o = n ? "val" : "text";
                return arguments.length > 0 ? (e[o]() !== t && e[o](t), i = e) : i = e[o](), i
            },
            calculateCaretPosition: function() {
                var t = e.data("mask-previus-value") || "",
                    i = o.getMasked(),
                    n = o.getCaret();
                if (t !== i) {
                    var s = e.data("mask-previus-caret-pos") || 0,
                        r = i.length,
                        a = t.length,
                        l = 0,
                        u = 0,
                        c = 0,
                        h = 0,
                        d = 0;
                    for (d = n; d < r && o.maskDigitPosMap[d]; d++) u++;
                    for (d = n - 1; d >= 0 && o.maskDigitPosMap[d]; d--) l++;
                    for (d = n - 1; d >= 0; d--) o.maskDigitPosMap[d] && c++;
                    for (d = s - 1; d >= 0; d--) o.maskDigitPosMapOld[d] && h++;
                    if (n > a) n = 10 * r;
                    else if (s >= n && s !== a) {
                        if (!o.maskDigitPosMapOld[n]) {
                            var f = n;
                            n -= h - c, n -= l, o.maskDigitPosMap[n] && (n = f)
                        }
                    } else n > s && (n += c - h, n += u)
                }
                return n
            },
            behaviour: function(i) {
                i = i || window.event, o.invalid = [];
                var n = e.data("mask-keycode");
                if (t.inArray(n, r.byPassKeys) === -1) {
                    var s = o.getMasked(),
                        a = o.getCaret();
                    return setTimeout(function() {
                        o.setCaret(o.calculateCaretPosition())
                    }, t.jMaskGlobals.keyStrokeCompensation), o.val(s), o.setCaret(a), o.callbacks(i)
                }
            },
            getMasked: function(t, e) {
                var s, a, l = [],
                    u = void 0 === e ? o.val() : e + "",
                    c = 0,
                    h = i.length,
                    d = 0,
                    f = u.length,
                    p = 1,
                    g = "push",
                    m = -1,
                    v = 0,
                    y = [];
                n.reverse ? (g = "unshift", p = -1, s = 0, c = h - 1, d = f - 1, a = function() {
                    return c > -1 && d > -1
                }) : (s = h - 1, a = function() {
                    return c < h && d < f
                });
                for (var _; a();) {
                    var b = i.charAt(c),
                        w = u.charAt(d),
                        C = r.translation[b];
                    C ? (w.match(C.pattern) ? (l[g](w), C.recursive && (m === -1 ? m = c : c === s && c !== m && (c = m - p), s === m && (c -= p)), c += p) : w === _ ? (v--, _ = void 0) : C.optional ? (c += p, d -= p) : C.fallback ? (l[g](C.fallback), c += p, d -= p) : o.invalid.push({
                        p: d,
                        v: w,
                        e: C.pattern
                    }), d += p) : (t || l[g](b), w === b ? (y.push(d), d += p) : (_ = b, y.push(d + v), v++), c += p)
                }
                var x = i.charAt(s);
                h !== f + 1 || r.translation[x] || l.push(x);
                var k = l.join("");
                return o.mapMaskdigitPositions(k, y, f), k
            },
            mapMaskdigitPositions: function(t, e, i) {
                var s = n.reverse ? t.length - i : 0;
                o.maskDigitPosMap = {};
                for (var r = 0; r < e.length; r++) o.maskDigitPosMap[e[r] + s] = 1
            },
            callbacks: function(t) {
                var s = o.val(),
                    r = s !== a,
                    l = [s, t, e, n],
                    u = function(t, e, i) {
                        "function" == typeof n[t] && e && n[t].apply(this, i)
                    };
                u("onChange", r === !0, l), u("onKeyPress", r === !0, l), u("onComplete", s.length === i.length, l), u("onInvalid", o.invalid.length > 0, [s, t, e, o.invalid, n])
            }
        };
        e = t(e);
        var s, r = this,
            a = o.val();
        i = "function" == typeof i ? i(o.val(), void 0, e, n) : i, r.mask = i, r.options = n, r.remove = function() {
            var t = o.getCaret();
            return r.options.placeholder && e.removeAttr("placeholder"), e.data("mask-maxlength") && e.removeAttr("maxlength"), o.destroyEvents(), o.val(r.getCleanVal()), o.setCaret(t), e
        }, r.getCleanVal = function() {
            return o.getMasked(!0)
        }, r.getMaskedVal = function(t) {
            return o.getMasked(!1, t)
        }, r.init = function(a) {
            if (a = a || !1, n = n || {}, r.clearIfNotMatch = t.jMaskGlobals.clearIfNotMatch, r.byPassKeys = t.jMaskGlobals.byPassKeys, r.translation = t.extend({}, t.jMaskGlobals.translation, n.translation), r = t.extend(!0, {}, r, n), s = o.getRegexMask(), a) o.events(), o.val(o.getMasked());
            else {
                n.placeholder && e.attr("placeholder", n.placeholder), e.data("mask") && e.attr("autocomplete", "off");
                for (var l = 0, u = !0; l < i.length; l++) {
                    var c = r.translation[i.charAt(l)];
                    if (c && c.recursive) {
                        u = !1;
                        break
                    }
                }
                u && e.attr("maxlength", i.length).data("mask-maxlength", !0), o.destroyEvents(), o.events();
                var h = o.getCaret();
                o.val(o.getMasked()), o.setCaret(h)
            }
        }, r.init(!e.is("input"))
    };
    t.maskWatchers = {};
    var i = function() {
            var i = t(this),
                o = {},
                s = "data-mask-",
                r = i.attr("data-mask");
            if (i.attr(s + "reverse") && (o.reverse = !0), i.attr(s + "clearifnotmatch") && (o.clearIfNotMatch = !0), "true" === i.attr(s + "selectonfocus") && (o.selectOnFocus = !0), n(i, r, o)) return i.data("mask", new e(this, r, o))
        },
        n = function(e, i, n) {
            n = n || {};
            var o = t(e).data("mask"),
                s = JSON.stringify,
                r = t(e).val() || t(e).text();
            try {
                return "function" == typeof i && (i = i(r)), "object" !== ("undefined" == typeof o ? "undefined" : _typeof(o)) || s(o.options) !== s(n) || o.mask !== i
            } catch (a) {}
        },
        o = function(t) {
            var e, i = document.createElement("div");
            return t = "on" + t, e = t in i, e || (i.setAttribute(t, "return;"), e = "function" == typeof i[t]), i = null, e
        };
    t.fn.mask = function(i, o) {
        o = o || {};
        var s = this.selector,
            r = t.jMaskGlobals,
            a = r.watchInterval,
            l = o.watchInputs || r.watchInputs,
            u = function() {
                if (n(this, i, o)) return t(this).data("mask", new e(this, i, o))
            };
        return t(this).each(u), s && "" !== s && l && (clearInterval(t.maskWatchers[s]), t.maskWatchers[s] = setInterval(function() {
            t(document).find(s).each(u)
        }, a)), this
    }, t.fn.masked = function(t) {
        return this.data("mask").getMaskedVal(t)
    }, t.fn.unmask = function() {
        return clearInterval(t.maskWatchers[this.selector]), delete t.maskWatchers[this.selector], this.each(function() {
            var e = t(this).data("mask");
            e && e.remove().removeData("mask")
        })
    }, t.fn.cleanVal = function() {
        return this.data("mask").getCleanVal()
    }, t.applyDataMask = function(e) {
        e = e || t.jMaskGlobals.maskElements;
        var n = e instanceof t ? e : t(e);
        n.filter(t.jMaskGlobals.dataMaskAttr).each(i)
    };
    var s = {
        maskElements: "input,td,span,div",
        dataMaskAttr: "*[data-mask]",
        dataMask: !0,
        watchInterval: 300,
        watchInputs: !0,
        keyStrokeCompensation: 10,
        useInput: !/Chrome\/[2-4][0-9]|SamsungBrowser/.test(window.navigator.userAgent) && o("input"),
        watchDataMask: !1,
        byPassKeys: [9, 16, 17, 18, 36, 37, 38, 39, 40, 91],
        translation: {
            0: {
                pattern: /\d/
            },
            9: {
                pattern: /\d/,
                optional: !0
            },
            "#": {
                pattern: /\d/,
                recursive: !0
            },
            A: {
                pattern: /[a-zA-Z0-9]/
            },
            S: {
                pattern: /[a-zA-Z]/
            }
        }
    };
    t.jMaskGlobals = t.jMaskGlobals || {}, s = t.jMaskGlobals = t.extend(!0, {}, s, t.jMaskGlobals), s.dataMask && t.applyDataMask(), setInterval(function() {
        t.jMaskGlobals.watchDataMask && t.applyDataMask()
    }, s.watchInterval)
}, window.jQuery, window.Zepto), String.prototype.replaceAll = function(t, e) {
    var i = this;
    return i.split(t).join(e)
}, $(document).foundation(), Foundation.Abide.defaults.patterns.password = /^(.){6,}$/, Foundation.Abide.defaults.patterns.name = /^[a-zA-Z\-\s]+$/, Foundation.Abide.defaults.patterns.zipcode = /^[0-9a-zA-Z\-\s]+$/, Foundation.Abide.defaults.patterns.card_expiry_date = /^(0[1-9]|1[0-2]) *\/ *([0-9]{2}|)$/, Foundation.Abide.defaults.validators.user_testimonial_answers = function(t, e, i) {
    var n = $(t).val(),
        o = $(t).siblings(".form-error");
    return "" == n ? (o.html("You are answer is required"), !1) : 0 != n || (o.html(o.data("secondary-validation")), !1)
};
var adjustTestimonialRevealTitle = function() {
    var t = $(".reveal.testimonial .reveal-header").height(),
        e = $(".reveal.testimonial .video-container");
    $(window).width() > 1024 ? e.css("margin-top", -t) : e.css("margin-top", 0)
};
$(function() {
    function t(t, e, i, n) {
        if (t.length) {
            var s;
            o = t.data("progress"), t.circleProgress((s = {
                value: o / 100,
                animation: !0,
                thickness: e,
                fill: n,
                size: i,
                lineCap: "round"
            }, _defineProperty(s, "animation", {
                duration: 1500
            }), _defineProperty(s, "emptyFill", "#f4f5f5"), _defineProperty(s, "startAngle", -Math.PI / 2), s)).on("circle-animation-progress", function(t, e) {
                $(this).find(".progress-value").html(Math.round(o * e) + "<i>%</i>")
            })
        }
    }

    function e(t) {
        var e = new RegExp("^4");
        return null != t.match(e) ? "visa" : (e = new RegExp("^5[1-5]"), null != t.match(e) ? "mastercard" : (e = new RegExp("^3[47]"), null != t.match(e) ? "amex" : (e = new RegExp("^(6011|622(12[6-9]|1[3-9][0-9]|[2-8][0-9]{2}|9[0-1][0-9]|92[0-5]|64[4-9])|65)"), null != t.match(e) ? "discover" : "")))
    }
    var i, n, o, s, r, a, l, u, c = $(".site-search-overlay");
    if (Function("/*@cc_on return document.documentMode===10@*/")() && (document.documentElement.className += " ie10"), $(".mobile-sidebar-nav .accordion-title").click(function() {
            $(this).find("i").toggleClass("fa-caret-up", "fa-caret-down")
        }), $(".video-transcript-container .expand-transcript").click(function() {
            var t = $(this).text();
            return $(this).text("Expand View" == t ? "Collapse View" : "Expand View"), $(".video-transcript").toggleClass("is-expanded"), !1
        }), $(".video-transcript-container .read-more").click(function() {
            $(".expand-transcript").click()
        }), $(".chosen-select").chosen({
            disable_search: !0
        }), $(".chosen-select-with-search").chosen(), $(".search-button").click(function(t) {
            $("body").addClass("no-scroll"), $(".search-buttons-container").addClass("active"), c.fadeIn("fast"), $("input#global-site-search").focus(), t.preventDefault()
        }), $(".search-close").click(function(t) {
            $("body").removeClass("no-scroll"), $(".search-buttons-container").removeClass("active"), c.fadeOut("fast"), t.preventDefault()
        }), $('a[data-open], a[href="#"]').click(function(t) {
            t.preventDefault()
        }), i = $(".circle-progress"), t(i, 4, 100, {
            color: "#1DC45C"
        }), n = $(".level-circle-progress"), t(n, 8, 160, {
            color: "#1DC45C"
        }), $(".file-upload-via-link").click(function(t) {
            $(this).siblings('input[type="file"].file-upload-hidden').click(), t.preventDefault()
        }), $('input#same-address-swtich[type="checkbox"]').click(function() {
            $(".address-form-container.shipping").toggleClass("hide")
        }), r = document.getElementById("signature-pad")) {
        var h = function() {
            r.width = r.parentNode.offsetWidth, r.height = r.parentNode.offsetHeight, s.clear()
        };
        s = new SignaturePad(r, {
            backgroundColor: "rgba(255, 255, 255, 0)",
            penColor: "rgb(0, 0, 0)"
        }), $("#btn-clear-signature").click(function(t) {
            s.clear(), t.preventDefault()
        }), $("#btn-save-signature").click(function(t) {
            s.isEmpty() ? ($(".callout").addClass("is-visible"), t.preventDefault()) : ($(".callout").removeClass("is-visible"), $("#signature-image").val(s.toDataURL()))
        }), window.addEventListener("resize", h), h()
    }
    $(".card-form-field #card-number").bind("change keyup input", function() {
        u = $(this).val(), a = e(u), l = $(".supported-cards"), l.addClass("is-active").find(".card-" + a).addClass("is-current-card"), "" == u && (l.removeClass("is-active"), l.children().removeClass("is-current-card"))
    }), $(".card-form-field #card-number, .card-form-field #card-exp-date, .card-form-field #card-cvv-number").on("paste", function(t) {
        t.originalEvent.clipboardData.getData("Text").match(/[^\d]/) && t.preventDefault()
    }), $(".card-form-field #card-number, .card-form-field #card-exp-date, .card-form-field #card-cvv-number").on("input", function() {
        this.value = this.value.replace(/[^\d\.\/-\s]/g, "")
    }), $("#card-exp-date").mask("00 / 00"), $("#card-number").mask("0000 0000 0000 0000"), $("#hidden-card-number").mask("xxxx xxxx xxxx 0000"), $("#phone-number").intlTelInput({
        initialCountry: "auto",
        geoIpLookup: function(t) {
            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(e) {
                var i = e && e.country ? e.country : "";
                t(i)
            })
        }
    }), $(".dim-the-lights-button a").click(function() {
        $(this).toggleClass("active");
        var t = $(this).find("span.state").text();
        $(this).find("span.state").text("on" == t ? "off" : "on");
        var e = $("#video-dim-lights"),
            i = $(".video-container");
        $(this).hasClass("active") ? (e.fadeIn(), i.addClass("is-dim-lights-active")) : e.fadeOut(function() {
            i.removeClass("is-dim-lights-active")
        })
    }), $("#open-module-audio").click(function() {
        $(".audio-container").slideToggle("fast")
    }), $(".payment-options input[type=radio]").on("click", function() {
        $(".payment-options li").removeClass("active"), $(this).parent().parent().addClass("active")
    }), $(".auto-focus").focus();
    var d = function() {
        window._wq = window._wq || [], _wq.push({
            id: "_all",
            onReady: function(t) {
                var e, i, n = $(".testimonial-container .testimonial-video-container .video-container"),
                    o = $(".testimonial-container .video-container .wistia_responsive_wrapper");
                1.7777777777777777 != t.aspect() && (n.addClass("non-standard"), e = $(".testimonial-container .video-container").height(), i = e * t.aspect(), o.width(i), o.css("margin-left", -i / 2))
            }
        })
    };
    d(), $(window).resize(function() {
        adjustTestimonialRevealTitle(), d()
    })
});
var adjustTestimonialRevealTitle = function() {
    var t = $(".reveal.testimonial .reveal-header").height(),
        e = $(".reveal.testimonial .video-container");
    $(window).width() > 1024 ? e.css("margin-top", -t) : e.css("margin-top", 0)
};
$(window).load(function() {
    $(".page-loader").fadeOut("slow")
});