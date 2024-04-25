$(document).ready(function () {

    ; (function (window, $, undefined) {
        "use strict";

        $.fn.rotate = function (degrees, options) {

            var ses_version = '240401-1733';
            var settings = $.extend({}, $.fn.rotate.defaults, options),
                endDeg = 0;

            degrees = degrees || $.fn.rotate.degrees;

            return this.each(function (i, el) {
                if ($(el).is(':animated')) { $(el).stop(); }

                endDeg = (el.deg || endDeg) + degrees;
                settings.step = function (now) {
                    $(el).css('transform', 'rotate(' + now + 'deg)');
                };
                $(el).animate({ deg: endDeg }, settings);
            });

        };

        $.fn.rotate.degrees = 360;

        $.fn.rotate.defaults = {
            duration: 1000,
            easing: 'swing',
            complete: function () { }
        };


    })(window, jQuery);


    const wheel = {
        SpinInterval: 100,
        allowbet: true,
        SlowWheel: function () {
            this.openBets();
            jQuery('.wheel_body').rotate(360,
                {
                    duration: 60000, //fduration, //60000
                    easing: 'linear',
                    complete: function () {
                    }
                }
            ).removeClass('bet_lose').removeClass('bet_win');
        },
        init: function () {
            let time = Number(jQuery('.game_board').data("fgleft"));
            let timeFull = Number(jQuery('.game_board').data("spintime"));
            let i = 0;
            let finalOffset = 440;
            let step = finalOffset / time;
            let timeCaption = document.querySelector('h2');
            
           

            if (wheel.run2 == 1 ) {
              // timeCaption.innerText = timeFull;
              // time = timeFull;
              timeCaption.innerText = wheel.time_left;
              time = wheel.time_left;
            } else
            {
              timeCaption.innerText = time;
            }
            let run2 = 1;
            wheel.SlowWheel();
            var countdown = setInterval(() => {
                timeCaption.innerText = time - i;
                if (i++ == time) {
                    clearInterval(countdown);
                    jQuery('.item').hide();
                    wheel.start();
                } else {
                   
                };
            }, 1000);
        },

        start: function () {
            var self = wheel;
            jQuery('.spingoing').removeClass('hidden');
            jQuery('.bc_active').removeClass('bc_active');
            jQuery('.set_bet').addClass('bet_off');
            self.openBets(false);
            self.spin();
        },

        spin: function () {
            var self = wheel;
            let move = {};
            move.select = window.userbet.active;
            move.size = window.userbet.bet;
            move.atype = 1;
            var move_send = JSON.stringify(move);
            var request = {
                'option': 'com_ajax',
                'module': 'wheel',
                'format': 'json',
                'data': move_send
            };
            jQuery.ajax({
                type: 'POST',
                data: request,
            })
                .done(function (response) {
                    if (response.success && response.data) {
                        let res = JSON.parse(response.data);
                        winner = res.w;
                        let wd = res.wd;
                        window.wd = wd;
                        wheel.lastwinner = winner;
                        wheel.run2 = 1;
                        wheel.time_left = res.time_left - 5;//-7
                        self.Finish(winner);
                    }
                    if (response.success && !response.data) {
                        //console.log("ждем ответа");
                        function recWinData() {
                          self.spin();
                        } setTimeout(recWinData, 1000);
                    }
                    if (!response.success && response.message) {
                        alert(response.message);
                    }
                })
                .fail(function () {
                    alert('Ошибка');
                });

        },

        Finish: function (winner = null) {
            if (winner) {
                jQuery("div").remove( ".user_info_block");
                var win_sectors = jQuery('.c_' + winner);
                if (win_sectors.length > 1) {
                    let ws_index = this.getRandomInt(0, win_sectors.length);
                    var win_sector = win_sectors[ws_index];
                }
                else {
                    var win_sector = jQuery('.c_gold');
                }
                jQuery(win_sector).addClass('win_sector');
                this.setEndPosition();
            }
        },

        setEndPosition: function () {
            win_angle = this.getSectorAngle();
            delta = 90 - win_angle;
            end_angle = (delta > 90) ? 180 - delta : delta;
            wheel.stop(end_angle);
        },

        stop: function (degrees) {
            angle = this.getWheelAngle();
            zero = 0;
            let tar = 360 - angle + degrees + zero;
            jQuery('.wheel_body').rotate(720 + +tar,
                {
                    startpos: angle,
                    duration: 3000,
                    easing: 'easeOutCirc',
                    complete: function () {
                        jQuery('.spingoing').addClass('hidden');
                        wheel.showResult();
                        setTimeout(() => {
                            wheel.showResult(false);
                            jQuery('.item').show();
                            wheel.init();
                        }, 2000);
                    }
                }
            );

        },

        showResult: function (show = true) {
            if (show) {
                jQuery('.spinresult').removeClass('hidden');
                jQuery('.spr_' + wheel.lastwinner).removeClass('hidden');
                jQuery('.wheel_body').addClass('finished');

                if (window.userbet.active) {
                    if (winner == window.userbet.active) {
                        this.betScore()
                        this.rewardEffect();
                        jQuery('.wheel_body').addClass('bet_win');
                    }
                    else {
                        this.betScore(false);
                        this.restoreScreen();
                        jQuery('.wheel_body').addClass('bet_lose');
                    }
                }

                if (window.userbet.set) {
                    window.userbet.active = '';
                    window.userbet.set = false;
                }

                var wd = window.wd;
                const stats = wd.stats;
                const last_n = wd.last_n;
                const lcs = jQuery('.lc');

                for (key in stats) {
                    jQuery('.wd_' + key).html(stats[key]);
                }

                jQuery(lcs).each(function (index) {

                    jQuery(this).removeClass(function (index, className) {
                        return (className.match(/(^|\s)lc_\S+/g) || []).join(' ');
                    });
                    jQuery(this).addClass('lc_' + last_n[index]);
                });



            }
            else {
                jQuery('.spinresult').addClass('hidden');
                jQuery('.spr_' + wheel.lastwinner).addClass('hidden');
                jQuery('.wheel_body').removeClass('finished');
                jQuery('.win_sector').removeClass('win_sector');

            }
        },

        rewardEffect: function () {
            var wincolor = window.userbet.active;
            jQuery('.na').hide(200);
            var x_block = jQuery('.bcf');
            let x = Number(x_block.html());
            x_block.css('position', 'relative');
            jQuery(x_block).animate({
                opacity: 0,
                fontSize: "50px",
                top: "-=105"
            }, 500, function () {
                jQuery('.bs_bet_value').css('position', 'relative');
                jQuery('.bs_bet_value').animate({
                    opacity: 0,
                    fontSize: "10px",
                    top: "-=105"
                }, 500, function () {
                    let cur_value = Number(jQuery('.bal_value').html());
                    let multi = window.userbet.multies[wincolor];
                    let won_value = multi * window.userbet.bet;

                    let new_value = (cur_value + +won_value);
                    jQuery('.bal_value').addClass('risebalance');

                    var interval = setInterval(function () {
                        jQuery('.bal_value').text(cur_value.toFixed(8));
                        if (cur_value >= new_value) {
                            jQuery('.bal_value').text(new_value.toFixed(8));
                            clearInterval(interval);
                            jQuery('.bal_value').removeClass('risebalance');
                        }
                        cur_value = cur_value + cur_value * 0.02;
                    }, 50);

                });

                jQuery('.bfh_s ').hide(200);

            });

            this.restoreScreen();

        },

        restoreScreen: function () {
            setTimeout(() => {
                jQuery('.bal_value').html(window.userbet.balance.toFixed(8));
                jQuery('.bet_status, .bet_screen').toggleClass('hidden');
                jQuery(".bcf").removeClass(function (index, className) {
                    return (className.match(/(^|\s)bcs\S+/g) || []).join(' ');
                });
                jQuery('.na, .bfh_s').show();
                jQuery('.bs_bet_value').css('position', 'inherit').css('top', '0px').css('opacity', '1').css('font-size', '20px');
                jQuery('.bcf').css('position', 'inherit').css('top', '0px').css('opacity', '1').css('font-size', '26px');
            }, 1010);
        },

        getWheelAngle: function () {
            let wheel_body = jQuery('.wheel_body').get(0);
            var st = window.getComputedStyle(wheel_body, null);
            var tr = st.getPropertyValue("-webkit-transform") ||
                st.getPropertyValue("-moz-transform") ||
                st.getPropertyValue("-ms-transform") ||
                st.getPropertyValue("-o-transform") ||
                st.getPropertyValue("transform") ||
                "FAIL";
            var values = tr.split('(')[1].split(')')[0].split(',');
            var a = values[0];
            var b = values[1];
            var c = values[2];
            var d = values[3];
            var scale = Math.sqrt(a * a + b * b);
            var sin = b / scale;
            var angle = Math.round(Math.atan2(b, a) * (180 / Math.PI));
            var r_angle = (angle < 0) ? r_angle = 360 + angle : angle;
            return r_angle;
        },

        getSectorAngle: function () {
            let winner = jQuery('.win_sector');
            let ind = jQuery('.wheel_body .win_sector').index();
            let winner_angle = (ind > 0) ? (ind * 9 - 3.5) : 0;
            return winner_angle;
        },

        getRandomInt: function (min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min) + min);
        },

        openBets(open = true) {
            if (open) {
                wheel.allowbet = true;
                jQuery('.bet_screen').removeClass('banned');
            }
            else {
                wheel.allowbet = true;
                jQuery('.bet_screen').addClass('banned');
            }
        },

        betScore(win = true) {
            let userbalance = window.userbet.balance;
            let bet = window.userbet.bet;
            let newbalance = (win) ? userbalance + +bet : userbalance - bet;
            window.userbet.balance = newbalance;
        }

    }

    setColorTokens();

    window.userbet = {
        color: '',
        bet: '',
        multies: {
            blue: 2,
            green: 3,
            violet: 5,
            gold: 34,
            red: 1
        },
        balance: '',
        active: false,
        set: false,
    };

    var scanActiveUser ={

      updInterval: 2000,
      init: function(){
          var self = scanActiveUser;
          sau = setInterval(self.requestData, self.updInterval);
      },
      requestData: function(){
        let move = {};
        if (!wheel.lastactionuser) {
          move.last_user = 0} else {
            move.last_user = wheel.lastactionuser
          };
        move.atype = 3;
        var move_send = JSON.stringify(move);
        var request = {
            'option': 'com_ajax',
            'module': 'wheel',
            'format': 'json',
            'data': move_send
        };
        jQuery.ajax({
            type: 'POST',
            data: request,
        })
            .done(function (response) {
                if (response.success && response.data) {
                    let res = JSON.parse(response.data);
                    let nau = res.new_user;
                    wheel.lastactionuser = res.last_user;

                    nau.forEach(nauADD);

                    function nauADD(naulistitem) {
                      jQuery('<div>')
                       .attr('class','user_info_block')
                       .append (
                         jQuery('<div>')
                         .attr ('class', 'user_info_newuser')
                         .html (naulistitem['uname'])
                       )
                       .append (
                         jQuery('<div>')
                         .attr ('class', 'user_info_bet')
                         .html (naulistitem['bet'])
                       )
                       .append (
                         jQuery('<div>')
                         .attr ('class', 'user_info_price')
                         .html (naulistitem['betprice'])
                       ).appendTo('.user_info');
                    };
                }
                if (response.success && !response.data) {
                    //console.log("нет новыйх пользователей");
                }
                if (!response.success && response.message) {
                    //alert(response.message);
                }
            })
            .fail(function () {
                alert('Ошибка');
            });
     }

    };


    let balance = Number(jQuery('.bal_value').html());
    window.userbet.balance = balance;
    wheel.init();
    scanActiveUser.init();



    function ableToBet(bet_size = 0) {
        let userbalance = window.userbet.balance;
        if (userbalance < bet_size) {
            alert('Недостаточно средств на балансе');
        }
        else if (!wheel.allowbet) {
            return false;
        }
        else if (window.userbet.active) {
            alert('Ставка уже сделана');
        }
        else {
            return true;
        }
    }

    function setColorTokens() {
        let butons = jQuery('.bet_color_selector').find('[class*="_"]');
        jQuery(butons).each(function (index) {
            let string = jQuery(this).attr('class');
            let regex = /(?<=_)[^\]]+/gm;
            let toclass = string.match(regex);
            jQuery(this).data('tok', toclass[0]);
        });
    }

    function InsertBet(value) {
        if (value.match(/[^0-9\.]/g)) { value = value.replace(/[^0-9\.]/g, ''); }
        if (value > window.userbet.balance) {
            value = window.userbet.balance;
        }
        let clear = Number(value).toFixed(8)
        jQuery(".sum_value").val(clear);
    }

    jQuery('body').on('click', '.bcs', function () {
        if (ableToBet()) {
            jQuery('.bcs').removeClass('bc_active');
            jQuery(this).addClass('bc_active');
            jQuery('.set_bet').removeClass('bet_off');
        }
    });

    jQuery('body').on('click', '.quik_bet', function () {
        var input = jQuery(".sum_value");
        if (jQuery(this).html() != "max") {
            let quick_bet_val = Number(jQuery(this).data("val"));
            let current_bet_val = Number(jQuery(".sum_value").val());
            let sum = quick_bet_val + current_bet_val;
            InsertBet(sum.toFixed(8));
        }
        else {
            jQuery(input).val(window.userbet.balance.toFixed(8));
        }
    });

    jQuery('.sum_value').on('input change', function () {
        let value = jQuery(this).val();
        InsertBet(value);
    });

    jQuery('.bf_i').on('click', function () {
        Swal.fire({
            customClass: {
                popup: 'sw_fields'
            },
            backdrop: 'rgba(0,0,0,0.7)',
            title: 'Колесо',
            icon: 'info',
            html: '<div class="sw_divider"></div>' +
                'Каждые 60 секунд Колесо вращается.<br><br>' +
                'Выпавший цвет увеличивает вашу ставку<br>в X раз.<br><br>' +
                '</div>' +
                '<div class="more_help">Полные правила</div>'
        })
    });

    jQuery('.reset_to_min').on('click', function () {
        let default_min = jQuery('.sum_value').attr('default');
        jQuery('.sum_value').val(default_min);

    });

    jQuery('body').on('click', '.set_bet', function () {
        bet_size = Number(jQuery('.sum_value').val());
        if (ableToBet(bet_size)) {
            if (jQuery(this).hasClass('bet_off')) {
                if (!jQuery('.bc_active').length) {
                    alert('Выберите цвет');
                }
            }
            else {
                let gobet = jQuery('.bet_color_selector').find('.bc_active').data('tok');
                window.userbet.active = gobet;
                window.userbet.bet = bet_size;
                window.userbet.set = true;
                console.log("bet:",gobet,bet_size);

                let betdata = {};
                betdata.bet = gobet;
                betdata.betprice = bet_size;
                betdata.atype = 2;
                var betdata_send = JSON.stringify(betdata);
                var request = {
                    'option': 'com_ajax',
                    'module': 'wheel',
                    'format': 'json',
                    'data': betdata_send
                };
                jQuery.ajax({
                    type: 'POST',
                    data: request,
                    success: function(data){ if (data !== null ) {console.log("success-bet:",data);}},
                    error: function(data){ if (data !== null ) {console.log("error-bet:",data);}},
                });


                jQuery('.bs_bet_value').html(bet_size.toFixed(8) + ' ' + jQuery('.bac_currency').html()).css('opacity', '1').css('font-size', '20px');
				let bf_class = 'bct_active bcs_' + gobet;
                jQuery('.bcf').addClass(bf_class).html('x ' + window.userbet.multies[gobet]);
                jQuery('.bet_status').toggleClass('hidden');
                jQuery('.bet_screen').toggleClass('hidden');

            }

        }

    });

})
