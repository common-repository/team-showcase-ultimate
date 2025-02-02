/*
 * jQuery MiniColors: A tiny color picker built on jQuery
 *
 * Copyright: Cory LaViska for A Beautiful Site, LLC: http://www.abeautifulsite.net/
 *
 * Contribute: https://github.com/claviska/jquery-minicolors
 *
 * @license: http://opensource.org/licenses/MIT
 *
 */
jQuery("#oxi-team-form-submit").submit(function () {
    jQuery(".oxilab-vendor-color").each(function (index, value) {
        if (jQuery(this).attr('team-pro-only') === 'yes') {
            var datavalue = jQuery(this).attr("oxivalue");
            jQuery(this).val(datavalue);
        }
    });
    jQuery(".oxilab-admin-font").each(function (index, value) {
        if (jQuery(this).attr('team-pro-only') === 'yes') {
            var datavalue = jQuery(this).attr("oxivalue");
            jQuery(this).val(datavalue);
        }
    });
});
jQuery(".oxilab-vendor-color").each(function (index, value) {
    if (jQuery(this).attr('team-pro-only') === 'yes') {
        var datavalue = jQuery(this).val();
        jQuery(this).attr("oxivalue", datavalue);
    }
});
jQuery(".oxilab-admin-font").each(function (index, value) {
    if (jQuery(this).attr('team-pro-only') === 'yes') {
        var datavalue = jQuery(this).val();
        jQuery(this).attr("oxivalue", datavalue);
    }
});


!function (i) {
    "function" == typeof define && define.amd ? define(["jquery"], i) : "object" == typeof exports ? module.exports = i(require("jquery")) : i(jQuery)
}(function ($) {
    "use strict";
    function i(i, t) {
        var o = $('<div class="minicolors" />'), s = $.minicolors.defaults, a, n, r, c, l;
        if (!i.data("minicolors-initialized")) {
            if (t = $.extend(!0, {}, s, t), o.addClass("minicolors-theme-" + t.theme).toggleClass("minicolors-with-opacity", t.opacity).toggleClass("minicolors-no-data-uris", t.dataUris !== !0), void 0 !== t.position && $.each(t.position.split(" "), function () {
                o.addClass("minicolors-position-" + this)
            }), a = "rgb" === t.format ? t.opacity ? "25" : "20" : t.keywords ? "11" : "7", i.addClass("minicolors-input").data("minicolors-initialized", !1).data("minicolors-settings", t).prop("size", a).wrap(o).after('<div class="minicolors-panel minicolors-slider-' + t.control + '"><div class="minicolors-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite"><div class="minicolors-grid-inner"></div><div class="minicolors-picker"><div></div></div></div></div>'), t.inline || (i.after('<span class="minicolors-swatch minicolors-sprite minicolors-input-swatch"><span class="minicolors-swatch-color"></span></span>'), i.next(".minicolors-input-swatch").on("click", function (t) {
                t.preventDefault(), i.focus()
            })), c = i.parent().find(".minicolors-panel"), c.on("selectstart", function () {
                return!1
            }).end(), t.swatches && 0 !== t.swatches.length)
                for (t.swatches.length > 7 && (t.swatches.length = 7), c.addClass("minicolors-with-swatches"), n = $('<ul class="minicolors-swatches"></ul>').appendTo(c), l = 0; l < t.swatches.length; ++l)
                    r = t.swatches[l], r = f(r) ? u(r, !0) : x(p(r, !0)), $('<li class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color"></span></li>').appendTo(n).data("swatch-color", t.swatches[l]).find(".minicolors-swatch-color").css({backgroundColor: y(r), opacity: r.a}), t.swatches[l] = r;
            t.inline && i.parent().addClass("minicolors-inline"), e(i, !1), i.data("minicolors-initialized", !0)
        }
    }
    function t(i) {
        var t = i.parent();
        i.removeData("minicolors-initialized").removeData("minicolors-settings").removeProp("size").removeClass("minicolors-input"), t.before(i).remove()
    }
    function o(i) {
        var t = i.parent(), o = t.find(".minicolors-panel"), a = i.data("minicolors-settings");
        !i.data("minicolors-initialized") || i.prop("disabled") || t.hasClass("minicolors-inline") || t.hasClass("minicolors-focus") || (s(), t.addClass("minicolors-focus"), o.stop(!0, !0).fadeIn(a.showSpeed, function () {
            a.show && a.show.call(i.get(0))
        }))
    }
    function s() {
        $(".minicolors-focus").each(function () {
            var i = $(this), t = i.find(".minicolors-input"), o = i.find(".minicolors-panel"), s = t.data("minicolors-settings");
            o.fadeOut(s.hideSpeed, function () {
                s.hide && s.hide.call(t.get(0)), i.removeClass("minicolors-focus")
            })
        })
    }
    function a(i, t, o) {
        var s = i.parents(".minicolors").find(".minicolors-input"), a = s.data("minicolors-settings"), r = i.find("[class$=-picker]"), e = i.offset().left, c = i.offset().top, l = Math.round(t.pageX - e), h = Math.round(t.pageY - c), d = o ? a.animationSpeed : 0, p, u, g, m;
        t.originalEvent.changedTouches && (l = t.originalEvent.changedTouches[0].pageX - e, h = t.originalEvent.changedTouches[0].pageY - c), 0 > l && (l = 0), 0 > h && (h = 0), l > i.width() && (l = i.width()), h > i.height() && (h = i.height()), i.parent().is(".minicolors-slider-wheel") && r.parent().is(".minicolors-grid") && (p = 75 - l, u = 75 - h, g = Math.sqrt(p * p + u * u), m = Math.atan2(u, p), 0 > m && (m += 2 * Math.PI), g > 75 && (g = 75, l = 75 - 75 * Math.cos(m), h = 75 - 75 * Math.sin(m)), l = Math.round(l), h = Math.round(h)), i.is(".minicolors-grid") ? r.stop(!0).animate({top: h + "px", left: l + "px"}, d, a.animationEasing, function () {
            n(s, i)
        }) : r.stop(!0).animate({top: h + "px"}, d, a.animationEasing, function () {
            n(s, i)
        })
    }
    function n(i, t) {
        function o(i, t) {
            var o, s;
            return i.length && t ? (o = i.offset().left, s = i.offset().top, {x: o - t.offset().left + i.outerWidth() / 2, y: s - t.offset().top + i.outerHeight() / 2}) : null
        }
        var s, a, n, e, l, h, d, p = i.val(), u = i.attr("data-opacity"), g = i.parent(), f = i.data("minicolors-settings"), v = g.find(".minicolors-input-swatch"), b = g.find(".minicolors-grid"), w = g.find(".minicolors-slider"), y = g.find(".minicolors-opacity-slider"), k = b.find("[class$=-picker]"), M = w.find("[class$=-picker]"), x = y.find("[class$=-picker]"), I = o(k, b), S = o(M, w), z = o(x, y);
        if (t.is(".minicolors-grid, .minicolors-slider, .minicolors-opacity-slider")) {
            switch (f.control) {
                case"wheel":
                    e = b.width() / 2 - I.x, l = b.height() / 2 - I.y, h = Math.sqrt(e * e + l * l), d = Math.atan2(l, e), 0 > d && (d += 2 * Math.PI), h > 75 && (h = 75, I.x = 69 - 75 * Math.cos(d), I.y = 69 - 75 * Math.sin(d)), a = m(h / .75, 0, 100), s = m(180 * d / Math.PI, 0, 360), n = m(100 - Math.floor(S.y * (100 / w.height())), 0, 100), p = C({h: s, s: a, b: n}), w.css("backgroundColor", C({h: s, s: a, b: 100}));
                    break;
                case"saturation":
                    s = m(parseInt(I.x * (360 / b.width()), 10), 0, 360), a = m(100 - Math.floor(S.y * (100 / w.height())), 0, 100), n = m(100 - Math.floor(I.y * (100 / b.height())), 0, 100), p = C({h: s, s: a, b: n}), w.css("backgroundColor", C({h: s, s: 100, b: n})), g.find(".minicolors-grid-inner").css("opacity", a / 100);
                    break;
                case"brightness":
                    s = m(parseInt(I.x * (360 / b.width()), 10), 0, 360), a = m(100 - Math.floor(I.y * (100 / b.height())), 0, 100), n = m(100 - Math.floor(S.y * (100 / w.height())), 0, 100), p = C({h: s, s: a, b: n}), w.css("backgroundColor", C({h: s, s: a, b: 100})), g.find(".minicolors-grid-inner").css("opacity", 1 - n / 100);
                    break;
                default:
                    s = m(360 - parseInt(S.y * (360 / w.height()), 10), 0, 360), a = m(Math.floor(I.x * (100 / b.width())), 0, 100), n = m(100 - Math.floor(I.y * (100 / b.height())), 0, 100), p = C({h: s, s: a, b: n}), b.css("backgroundColor", C({h: s, s: 100, b: 100}))
            }
            u = f.opacity ? parseFloat(1 - z.y / y.height()).toFixed(2) : 1, r(i, p, u)
        } else
            v.find("span").css({backgroundColor: p, opacity: u}), c(i, p, u)
    }
    function r(i, t, o) {
        var s, a = i.parent(), n = i.data("minicolors-settings"), r = a.find(".minicolors-input-swatch");
        n.opacity && i.attr("data-opacity", o), "rgb" === n.format ? (s = f(t) ? u(t, !0) : x(p(t, !0)), o = "" === i.attr("data-opacity") ? 1 : m(parseFloat(i.attr("data-opacity")).toFixed(2), 0, 1), (isNaN(o) || !n.opacity) && (o = 1), t = i.minicolors("rgbObject").a <= 1 && s && n.opacity ? "rgba(" + s.r + ", " + s.g + ", " + s.b + ", " + parseFloat(o) + ")" : "rgb(" + s.r + ", " + s.g + ", " + s.b + ")") : (f(t) && (t = w(t)), t = d(t, n.letterCase)), i.val(t), r.find("span").css({backgroundColor: t, opacity: o}), c(i, t, o)
    }
    function e(i, t) {
        var o, s, a, n, r, e, l, h, b, y, M = i.parent(), x = i.data("minicolors-settings"), I = M.find(".minicolors-input-swatch"), S = M.find(".minicolors-grid"), z = M.find(".minicolors-slider"), F = M.find(".minicolors-opacity-slider"), D = S.find("[class$=-picker]"), T = z.find("[class$=-picker]"), j = F.find("[class$=-picker]");
        switch (f(i.val()) ? (o = w(i.val()), r = m(parseFloat(v(i.val())).toFixed(2), 0, 1), r && i.attr("data-opacity", r)) : o = d(p(i.val(), !0), x.letterCase), o || (o = d(g(x.defaultValue, !0), x.letterCase)), s = k(o), n = x.keywords ? $.map(x.keywords.split(","), function (i) {
                return $.trim(i.toLowerCase())
            }) : [], e = "" !== i.val() && $.inArray(i.val().toLowerCase(), n) > -1 ? d(i.val()) : f(i.val()) ? u(i.val()) : o, t || i.val(e), x.opacity && (a = "" === i.attr("data-opacity") ? 1 : m(parseFloat(i.attr("data-opacity")).toFixed(2), 0, 1), isNaN(a) && (a = 1), i.attr("data-opacity", a), I.find("span").css("opacity", a), h = m(F.height() - F.height() * a, 0, F.height()), j.css("top", h + "px")), "transparent" === i.val().toLowerCase() && I.find("span").css("opacity", 0), I.find("span").css("backgroundColor", o), x.control){case"wheel":
                b = m(Math.ceil(.75 * s.s), 0, S.height() / 2), y = s.h * Math.PI / 180, l = m(75 - Math.cos(y) * b, 0, S.width()), h = m(75 - Math.sin(y) * b, 0, S.height()), D.css({top: h + "px", left: l + "px"}), h = 150 - s.b / (100 / S.height()), "" === o && (h = 0), T.css("top", h + "px"), z.css("backgroundColor", C({h: s.h, s: s.s, b: 100}));
                break;
            case"saturation":
                l = m(5 * s.h / 12, 0, 150), h = m(S.height() - Math.ceil(s.b / (100 / S.height())), 0, S.height()), D.css({top: h + "px", left: l + "px"}), h = m(z.height() - s.s * (z.height() / 100), 0, z.height()), T.css("top", h + "px"), z.css("backgroundColor", C({h: s.h, s: 100, b: s.b})), M.find(".minicolors-grid-inner").css("opacity", s.s / 100);
                break;
            case"brightness":
                l = m(5 * s.h / 12, 0, 150), h = m(S.height() - Math.ceil(s.s / (100 / S.height())), 0, S.height()), D.css({top: h + "px", left: l + "px"}), h = m(z.height() - s.b * (z.height() / 100), 0, z.height()), T.css("top", h + "px"), z.css("backgroundColor", C({h: s.h, s: s.s, b: 100})), M.find(".minicolors-grid-inner").css("opacity", 1 - s.b / 100);
                break;
            default:
                l = m(Math.ceil(s.s / (100 / S.width())), 0, S.width()), h = m(S.height() - Math.ceil(s.b / (100 / S.height())), 0, S.height()), D.css({top: h + "px", left: l + "px"}), h = m(z.height() - s.h / (360 / z.height()), 0, z.height()), T.css("top", h + "px"), S.css("backgroundColor", C({h: s.h, s: 100, b: 100}))
        }
        i.data("minicolors-initialized") && c(i, e, a)
    }
    function c(i, t, o) {
        var s = i.data("minicolors-settings"), a = i.data("minicolors-lastChange"), n, r, e;
        if (!a || a.value !== t || a.opacity !== o) {
            if (i.data("minicolors-lastChange", {value: t, opacity: o}), s.swatches && 0 !== s.swatches.length) {
                for (n = f(t)?u(t, !0):x(t), r = - 1, e = 0; e < s.swatches.length; ++e)
                    if (n.r === s.swatches[e].r && n.g === s.swatches[e].g && n.b === s.swatches[e].b && n.a === s.swatches[e].a) {
                        r = e;
                        break
                    }
                i.parent().find(".minicolors-swatches .minicolors-swatch").removeClass("selected"), -1 !== e && i.parent().find(".minicolors-swatches .minicolors-swatch").eq(e).addClass("selected")
            }
            s.change && (s.changeDelay ? (clearTimeout(i.data("minicolors-changeTimeout")), i.data("minicolors-changeTimeout", setTimeout(function () {
                s.change.call(i.get(0), t, o)
            }, s.changeDelay))) : s.change.call(i.get(0), t, o)), i.trigger("change").trigger("input")
        }
    }
    function l(i) {
        var t = p($(i).val(), !0), o = x(t), s = $(i).attr("data-opacity");
        return o ? (void 0 !== s && $.extend(o, {a: parseFloat(s)}), o) : null
    }
    function h(i, t) {
        var o = p($(i).val(), !0), s = x(o), a = $(i).attr("data-opacity");
        return s ? (void 0 === a && (a = 1), t ? "rgba(" + s.r + ", " + s.g + ", " + s.b + ", " + parseFloat(a) + ")" : "rgb(" + s.r + ", " + s.g + ", " + s.b + ")") : null
    }
    function d(i, t) {
        return"uppercase" === t ? i.toUpperCase() : i.toLowerCase()
    }
    function p(i, t) {
        return i = i.replace(/^#/g, ""), i.match(/^[A-F0-9]{3,6}/gi) ? 3 !== i.length && 6 !== i.length ? "" : (3 === i.length && t && (i = i[0] + i[0] + i[1] + i[1] + i[2] + i[2]), "#" + i) : ""
    }
    function u(i, t) {
        var o = i.replace(/[^\d,.]/g, ""), s = o.split(",");
        return s[0] = m(parseInt(s[0], 10), 0, 255), s[1] = m(parseInt(s[1], 10), 0, 255), s[2] = m(parseInt(s[2], 10), 0, 255), s[3] && (s[3] = m(parseFloat(s[3], 10), 0, 1)), t ? {r: s[0], g: s[1], b: s[2], a: s[3] ? s[3] : null} : "undefined" != typeof s[3] && s[3] <= 1 ? "rgba(" + s[0] + ", " + s[1] + ", " + s[2] + ", " + s[3] + ")" : "rgb(" + s[0] + ", " + s[1] + ", " + s[2] + ")"
    }
    function g(i, t) {
        return f(i) ? u(i) : p(i, t)
    }
    function m(i, t, o) {
        return t > i && (i = t), i > o && (i = o), i
    }
    function f(i) {
        var t = i.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
        return t && 4 === t.length ? !0 : !1
    }
    function v(i) {
        return i = i.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+(\.\d{1,2})?|\.\d{1,2})[\s+]?/i), i && 6 === i.length ? i[4] : "1"
    }
    function b(i) {
        var t = {}, o = Math.round(i.h), s = Math.round(255 * i.s / 100), a = Math.round(255 * i.b / 100);
        if (0 === s)
            t.r = t.g = t.b = a;
        else {
            var n = a, r = (255 - s) * a / 255, e = (n - r) * (o % 60) / 60;
            360 === o && (o = 0), 60 > o ? (t.r = n, t.b = r, t.g = r + e) : 120 > o ? (t.g = n, t.b = r, t.r = n - e) : 180 > o ? (t.g = n, t.r = r, t.b = r + e) : 240 > o ? (t.b = n, t.r = r, t.g = n - e) : 300 > o ? (t.b = n, t.g = r, t.r = r + e) : 360 > o ? (t.r = n, t.g = r, t.b = n - e) : (t.r = 0, t.g = 0, t.b = 0)
        }
        return{r: Math.round(t.r), g: Math.round(t.g), b: Math.round(t.b)}
    }
    function w(i) {
        return i = i.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i), i && 4 === i.length ? "#" + ("0" + parseInt(i[1], 10).toString(16)).slice(-2) + ("0" + parseInt(i[2], 10).toString(16)).slice(-2) + ("0" + parseInt(i[3], 10).toString(16)).slice(-2) : ""
    }
    function y(i) {
        var t = [i.r.toString(16), i.g.toString(16), i.b.toString(16)];
        return $.each(t, function (i, o) {
            1 === o.length && (t[i] = "0" + o)
        }), "#" + t.join("")
    }
    function C(i) {
        return y(b(i))
    }
    function k(i) {
        var t = M(x(i));
        return 0 === t.s && (t.h = 360), t
    }
    function M(i) {
        var t = {h: 0, s: 0, b: 0}, o = Math.min(i.r, i.g, i.b), s = Math.max(i.r, i.g, i.b), a = s - o;
        return t.b = s, t.s = 0 !== s ? 255 * a / s : 0, 0 !== t.s ? i.r === s ? t.h = (i.g - i.b) / a : i.g === s ? t.h = 2 + (i.b - i.r) / a : t.h = 4 + (i.r - i.g) / a : t.h = -1, t.h *= 60, t.h < 0 && (t.h += 360), t.s *= 100 / 255, t.b *= 100 / 255, t
    }
    function x(i) {
        return i = parseInt(i.indexOf("#") > -1 ? i.substring(1) : i, 16), {r: i >> 16, g: (65280 & i) >> 8, b: 255 & i}
    }
    $.minicolors = {defaults: {animationSpeed: 50, animationEasing: "swing", change: null, changeDelay: 0, control: "hue", dataUris: !0, defaultValue: "", format: "hex", hide: null, hideSpeed: 100, inline: !1, keywords: "", letterCase: "lowercase", opacity: !1, position: "bottom left", show: null, showSpeed: 100, theme: "default", swatches: []}}, $.extend($.fn, {minicolors: function (a, n) {
            switch (a) {
                case"destroy":
                    return $(this).each(function () {
                        t($(this))
                    }), $(this);
                case"hide":
                    return s(), $(this);
                case"opacity":
                    return void 0 === n ? $(this).attr("data-opacity") : ($(this).each(function () {
                        e($(this).attr("data-opacity", n))
                    }), $(this));
                case"rgbObject":
                    return l($(this), "rgbaObject" === a);
                case"rgbString":
                case"rgbaString":
                    return h($(this), "rgbaString" === a);
                case"settings":
                    return void 0 === n ? $(this).data("minicolors-settings") : ($(this).each(function () {
                        var i = $(this).data("minicolors-settings") || {};
                        t($(this)), $(this).minicolors($.extend(!0, i, n))
                    }), $(this));
                case"show":
                    return o($(this).eq(0)), $(this);
                case"value":
                    return void 0 === n ? $(this).val() : ($(this).each(function () {
                        "object" == typeof n && null !== typeof n ? (n.opacity && $(this).attr("data-opacity", m(n.opacity, 0, 1)), n.color && $(this).val(n.color)) : $(this).val(n), e($(this))
                    }), $(this));
                default:
                    return"create" !== a && (n = a), $(this).each(function () {
                        i($(this), n)
                    }), $(this)
            }
        }}), $(document).on("mousedown.minicolors touchstart.minicolors", function (i) {
        $(i.target).parents().add(i.target).hasClass("minicolors") || s()
    }).on("mousedown.minicolors touchstart.minicolors", ".minicolors-grid, .minicolors-slider, .minicolors-opacity-slider", function (i) {
        var t = $(this);
        i.preventDefault(), $(document).data("minicolors-target", t), a(t, i, !0)
    }).on("mousemove.minicolors touchmove.minicolors", function (i) {
        var t = $(document).data("minicolors-target");
        t && a(t, i)
    }).on("mouseup.minicolors touchend.minicolors", function () {
        $(this).removeData("minicolors-target")
    }).on("click.minicolors", ".minicolors-swatches li", function (i) {
        i.preventDefault();
        var t = $(this), o = t.parents(".minicolors").find(".minicolors-input"), s = t.data("swatch-color");
        r(o, s, v(s)), e(o)
    }).on("mousedown.minicolors touchstart.minicolors", ".minicolors-input-swatch", function (i) {
        var t = $(this).parent().find(".minicolors-input");
        i.preventDefault(), o(t)
    }).on("focus.minicolors", ".minicolors-input", function () {
        var i = $(this);
        i.data("minicolors-initialized") && o(i)
    }).on("blur.minicolors", ".minicolors-input", function () {
        var i = $(this), t = i.data("minicolors-settings"), o, s, a, n, r;
        i.data("minicolors-initialized") && (o = t.keywords ? $.map(t.keywords.split(","), function (i) {
            return $.trim(i.toLowerCase())
        }) : [], "" !== i.val() && $.inArray(i.val().toLowerCase(), o) > -1 ? r = i.val() : (f(i.val()) ? a = u(i.val(), !0) : (s = p(i.val(), !0), a = s ? x(s) : null), r = null === a ? t.defaultValue : "rgb" === t.format ? u(t.opacity ? "rgba(" + a.r + "," + a.g + "," + a.b + "," + i.attr("data-opacity") + ")" : "rgb(" + a.r + "," + a.g + "," + a.b + ")") : y(a)), n = t.opacity ? i.attr("data-opacity") : 1, "transparent" === r.toLowerCase() && (n = 0), i.closest(".minicolors").find(".minicolors-input-swatch > span").css("opacity", n), i.val(r), "" === i.val() && i.val(g(t.defaultValue, !0)), i.val(d(i.val(), t.letterCase)))
    }).on("keydown.minicolors", ".minicolors-input", function (i) {
        var t = $(this);
        if (t.data("minicolors-initialized"))
            switch (i.keyCode) {
                case 9:
                    s();
                    break;
                case 13:
                case 27:
                    s(), t.blur()
            }
    }).on("keyup.minicolors", ".minicolors-input", function () {
        var i = $(this);
        i.data("minicolors-initialized") && e(i, !0)
    }).on("paste.minicolors", ".minicolors-input", function () {
        var i = $(this);
        i.data("minicolors-initialized") && setTimeout(function () {
            e(i, !0)
        }, 1)
    })
});
jQuery('.oxilab-vendor-color').each(function () {
    jQuery(this).minicolors({
        control: jQuery(this).attr('data-control') || 'hue',
        defaultValue: jQuery(this).attr('data-defaultValue') || '',
        format: jQuery(this).attr('data-format') || 'hex',
        keywords: jQuery(this).attr('data-keywords') || 'transparent' || 'initial' || 'inherit',
        inline: jQuery(this).attr('data-inline') === 'true',
        letterCase: jQuery(this).attr('data-letterCase') || 'lowercase',
        opacity: jQuery(this).attr('data-opacity'),
        position: jQuery(this).attr('data-position') || 'bottom left',
        swatches: jQuery(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
        change: function (value, opacity) {
            if (!value)
                return;
            if (opacity)
                value += ', ' + opacity;
            if (typeof console === 'object') {
                console.log(value);
            }
        },
        theme: 'bootstrap'
    });
});


