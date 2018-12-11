! function(e, t, n) {
    "use strict"; 
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
                width: 200,
                height: 250,
                x: -105,
                y: -105
            }).to(t, .1, {
                width: 340,
                height: 474,
                x: -137
            }).to(t, .5, {
                height: 480,
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
                height: 480,
                borderWidth: 0
            }).to(t, .5, {
                height: 474,
                borderRadius: "50%",
                borderWidth: 1
            }).to(t, .1, {
                height: 300,
                width: 300,
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
            }, 1e3) 
        }), e(window).on("resize", function() {
           
        }), c() , e(".home_ourprocess").each(function() {
            _()
        }), e(".home_recent-work").each(function() {
            C(this)
        }) 
    })
}(window.jQuery, window.interact, window.ScrollMagic);




// CUSTOME TAB CIRCLE 
// ( function( $ ) {
// "use strict";
      $( function() {
        $( '.uix-tabs' ).each( function( id ) {
            var $this             = $( this ),
                $li               = $this.find( 'ul > li' ),
                liWidth           = $li.first().outerWidth(),
                liHeight          = $li.first().outerHeight(),
                liNum             = $li.length,
                $contentbox       = $this.find( '.uix-tabs__content' ),
                ulWidth           = $this.data( 'width' ),
                fullwidth         = $this.data( 'fullwidth' ),
                rotation          = $this.data( 'rotation' ),
                rotationRadius    = $this.data( 'rotation-radius' ),
                rotationWapperDeg = $this.data( 'rotation-wrapper-angle' ),
                rotationDisplay   = $this.data( 'rotation-display' ),
                
                tabBoxID          = id,
                isNumeric         = /^[-+]?(\d+|\d+\.\d*|\d*\.\d+)$/;
            
            if( typeof fullwidth != typeof undefined && fullwidth == 1 ) {
                $li.css( 'width', ( 100 / liNum ) + '%' );
            }
            if( typeof rotation === typeof undefined ) {
                rotation = false;
            }
            if( typeof rotationWapperDeg === typeof undefined ) {
                rotationWapperDeg = 0;
            }
            if( typeof rotationDisplay === typeof undefined ) {
                rotationDisplay = 5;
            }
            
            $li.each( function( index ) {
                index = index + 1;
                $( this ).attr( 'href', 'javascript:' );
                $( this ).attr( 'data-tab', tabBoxID + '-tabs-show' + index );
            });
            $( $contentbox ).each( function( index ) {
                index = index + 1;
                $( this ).attr( 'id', tabBoxID + '-tabs-show' + index );
            });
            
            
            // Tab Rotation Effect
            if ( rotation ) {
        
                $this.find( '.uix-tabs__nav' ).css( {
                    'width'      : rotationRadius * 2 + 'px'
                } );
        
                $this.find( 'ul' ).css( {
                    'width'     : rotationRadius * 2 + 'px',
                    'height'    : rotationRadius * 2 + 'px',
                    'transform' : 'rotate('+parseFloat(rotationWapperDeg)+'deg)'
                } );

                //Layout components in a circle layout
                var angle           = 0,
                    step            = 2 * Math.PI / rotationDisplay,
                    transitionDelay = 0,
                    pad             = $this.find( 'ul' ).width();


                $this.find( 'ul > li' ).each( function() { //Can'nt use arrow function here!!!
                    // 'this' works differently with arrow fucntions
                    var el          = $( this ),
                        x           = rotationRadius * Math.cos(angle) - liWidth / 2,
                        y           = rotationRadius * Math.sin(angle) - liHeight / 2;

                    el.css({
                        'transform'        : 'translate('+parseFloat( x )+'px,'+parseFloat( pad/2 + y )+'px)',
                        'transition-delay' : transitionDelay + "s"
                    })
                    .find( '> a' )
                    .css({
                        'transform'        : 'rotate('+parseFloat(-rotationWapperDeg)+'deg)'
                    });

                    angle += step;
                    transitionDelay += 0.15;
                    
                    //Click on the rotation effect
                    //----------------------- begin ----------------------
                    el.on( 'click', function( e ) {
                        
                        var increase   = Math.PI * 2 / rotationDisplay,
                            n          = $( this ).index(),
                            endAngle   = n % rotationDisplay * increase; 


                        ( function turn() {
                            if (Math.abs(endAngle - angle) > 1 / 8) {
                                var sign = endAngle > angle ? 1 : -1;
                                angle = angle + sign / 8;
                                setTimeout(turn, 20);
                            } else {
                                angle = endAngle;
                            }
                        
                            $this.find( 'ul > li' ).each( function( index ) {
                                var x2           = Math.cos( - Math.PI / 2 + index * increase - angle) * rotationRadius - liWidth / 2,
                                    y2           = Math.sin( - Math.PI / 2 + index * increase - angle) * rotationRadius + liHeight;
                            
                                $( this ).css({
                                    'transform'        : 'translate('+parseFloat( x2 )+'px,'+parseFloat( y2 )+'px)',
                                    'transition'       : 'none',
                                    'transition-delay' : 0
                                })
                                .find( '> a' )
                                .css({
                                    'transform'        : 'rotate('+parseFloat(-rotationWapperDeg)+'deg)'
                                });

                            });

                                                         
                        })();   
                        
                    });
                    //----------------------- end ----------------------
                });
            }
            
            
            // Tab Sliding Effext
            // if ( $this.find( 'ul li:first .uix-tabs__marker' ).length == 0 ) {
            //  $this.find( 'ul li:first' ).prepend( '<div class="uix-tabs__marker"></div>' );
            // }
            
            // Tab Fade Effect
            $this.on( 'click', 'li', function( e ) {
                
                var tabID = $( this ).attr( 'data-tab' ),
                    index = parseFloat( $( this ).index() - 1 ); 
                
                
                $this.find( 'li' ).removeClass( 'active' );
                $this.find( '.uix-tabs__content' ).removeClass( 'active' );
        
                $( this ).addClass( 'active' );
                $( '#' + tabID ).addClass( 'active' );
                

                //sliding marker
                var translateX = $( this ).index() * 100,
                    liHeight   = $this.find( 'ul li:first' ).outerHeight(),
                    translateY = $( this ).index() * liHeight;
                
                if ( $( window ).width() <= 768 ) {
                    $this.find( '.uix-tabs__marker' ).css({
                        'transform'          : 'translateY( '+translateY+'px )' 
                    }); 
                } else {
                    $this.find( '.uix-tabs__marker' ).css({
                        'transform'          : 'translateX( '+translateX+'% )'  
                    }); 
                }
                
                return false;
            });
            
            // Init
            $this.find( 'ul > li.active' ).trigger( 'click' );
            
            //Active current tab
            var url    = window.location.href,
                locArr,
                loc, 
                curTab;
            
            if ( url.indexOf( '#' ) >= 0 ) {
                
                locArr = url.split( '#' );
                loc    = locArr[1];
                curTab = $( '.uix-tabs' ).find( 'ul > li:eq('+loc+')' );
                curTab.trigger( 'click' );  
            }
        });
    } );
// } ) ( jQuery );