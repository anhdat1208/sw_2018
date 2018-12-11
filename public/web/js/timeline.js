! function(e, t, n) {
    "use strict";

    function i() {
        var t = e(window).height();
        e(".error_pages").css("height", t)
    }

    function r() {
        if (screen.width > 1024) {
            var t = e(".effect").attr("data");
            e(".effect").attr("data-parallax", t)
        } else e(".effect").removeAttr("data-parallax"), e(".effect").removeAttr("style")
    }

    function c() {
        e(".recent-work_content .client_name").click(function() {
            e(".recent-work_content .client_details").css({
                opacity: "0",
                visibility: "hidden",
                "margin-top": "-50px"
            }), e(".recent-work_content .client_details").css("visibility", "hidden"), e(".recent-work_content .client_name").removeClass("active"), e(this).addClass("active"), e(this).siblings(".client_details").css({
                opacity: "1",
                visibility: "visible",
                "margin-top": "-190px"
            })
        })
    }

    function w() {
        if (!S) var t = e("[data-anchor-scroll] a").each(function() {
            var i = e(this),
                o = i.attr("href"),
                a = e(o);
            a.length > 0 ? (e(this).click(function(e) {
                e.stopPropagation(), e.preventDefault(), TweenMax.to("html, body", 1, {
                    scrollTop: a.offset().top - (P + 40)
                })
            }), new n.Scene({
                duration: a.parent()[0].offsetHeight,
                triggerHook: .85,
                triggerElement: a[0]
            }).on("enter", function() {
                t.removeClass("current"), i.addClass("current")
            }).on("leave", function() {
                i.removeClass("current")
            }).addTo(E)) : e(this).click(function(e) {
                e.stopPropagation(), e.preventDefault()
            })
        })
    }
  
    function C() {
        function n(t) {
            var n = new TimelineMax;
            n.to(t, 0, {
                width: 106,
                height: 106,
                x: -53,
                y: -53,
                borderWidth: 0,
                background: "transparent",
                padding: 0
            }).to(t, .4, {
                width: 350,
                height: 350,
                x: -175,
                y: -175
            }).to(t, .1, {
                width: 474,
                height: 474,
                x: -237
            }).to(t, .5, {
                height: 662,
                borderRadius: 0,
                borderWidth: 0,
                background: "#fff",
                boxShadow: "13px 13px 40px rgba(25, 25, 25, 0.1)"
            }).duration(.5).eventCallback("onComplete", function() {
                e(t).addClass("expands"), c = !1
            })
        }

        function i(t) {
            var n = new TimelineMax;
            e(t).removeClass("expanded"), n.to(t, 0, {
                height: 662,
                borderWidth: 0
            }).to(t, .5, {
                height: 474,
                borderRadius: "50%",
                borderWidth: 1
            }).to(t, .1, {
                height: 350,
                width: 350,
                x: -175
            }).to(t, .4, {
                width: 22,
                height: 22,
                x: -11,
                y: -11,
                background: "transparent"
            }).duration(.3).eventCallback("onComplete", function() {
                e(t).removeClass("expands").attr("style", ""), c = !1
            })
        }

        function o(t) {
            var o = s ? e(s).find(".time-inner") : e(t),
                a = e(".timeline .time-inner.expands");
            o[0] !== a[0] && (i(a), n(o.addClass("expands")))
        }

        function a(t) {
            var n = e(".timeline"),
                i = t.dx > 0 ? "right" : "left",
                a = t.x0,
                c = t.pageX,
                u = 0;
            l || (e(n).add(t.target).addClass("ondrag"), l = !0), "left" === i ? (u = a - c, f = d - u) : (u = c - a, f = d + u), e(n).css({
                marginLeft: f + "px"
            }), n.find("li").each(function() {
                var e = this.offX,
                    t = "left" === i ? e - u : e + u;
                t >= 200 && t <= 300 && s !== this && (s = this, clearTimeout(r), r = setTimeout(function() {
                    o()
                }, 300))
            })
        }
        if (!S) {
            var r = setTimeout(function() {}),
                s = null,
                c = !1,
                l = !1,
                d = 0,
                f = 0;
            t(".time-inner").draggable({
                onmove: a,
                onend: function(t) {
                    setTimeout(function() {
                        f = 0, d = Number(getComputedStyle(e(".timeline")[0]).marginLeft.replace("px", "")), e(".timeline").add(t.target).removeClass("ondrag").find("li").each(function() {
                            this.offX = this.offsetLeft + d
                        }), l = !1
                    }, 50)
                }
            });
            var u = Number(getComputedStyle(e(".home_recent-work .wrapper")[0]).marginLeft.replace("px", ""));
            u && e(".home_recent-work .timeline").css({
                paddingLeft: u + "px"
            }), e(".timeline li").each(function(t) {
                this.offX = this.offsetLeft;
                var n = e(this),
                    i = n.find(".time-item").offset().left - 174;
                n.find(".time-inner").click(function(t) {
                    l || e(this).hasClass("expands") || (c = !0, d = u + 80 - i, e(".home_recent-work .timeline").css({
                        marginLeft: d + "px"
                    }), e(".timeline li").each(function() {
                        this.offX = this.offsetLeft + d
                    }), s = null, o(e(this)))
                })
            }), e(".timeline li:first-child .time-inner").click()
        }
    }  

    function x() {
        T(), e(window).on("resize", function() {
            T()
        })
    }

  
    function M() {
        k(), e(window).on("resize", function() {
            k()
        })
    }
    var S = window.innerWidth <= 720,
        H = window.innerWidth <= 768,
        L = !1,
        W = 0,
        A = !1,
        E = new n.Controller,
        P = 72,
        D = window.innerHeight,
        X = P / window.innerHeight;
    e(document).ready(function() {
        e(window).load(function() {
            setTimeout(function() {
                e("body").addClass("loaded")
            }, 1e3), l()
        }), e(window).on("resize", function() {
            r(), i()
        }), o(), a(), r(), s(), c(), d(), u(), h(), i(), f(), M(), g(), m(), v(), w(), x(), e(".home_ourprocess").each(function() {
            _()
        }), e(".home_recent-work").each(function() {
            C(this)
        }), e(".about_us").each(function() {
            b()
        })
    })
}(window.jQuery, window.interact, window.ScrollMagic);