/////////////////////////////////////////////////////////////////////////////////////////
// "settings" module scripts

; (function ($) {
  'use strict'
  $(function () {
    /////////////////////////////////////////////////////////////////////////////////////////
    // hide non top menu related settings
    if ($('.air__menuTop').length) {
      $('.hideIfMenuTop').css({
        pointerEvents: 'none',
        opacity: 0.4,
      })
    }

    /////////////////////////////////////////////////////////////////////////////////////////
    // toggle
    $('.air__sidebar__actionToggle').on('click', function () {
      $('body').toggleClass('air__sidebar--toggled')
    })

    /////////////////////////////////////////////////////////////////////////////////////////
    // toggle theme
    $('.air__sidebar__actionToggleTheme').on('click', function () {
      var theme = document.querySelector('html').getAttribute('data-kit-theme')
      if (theme === 'dark') {
        document.querySelector('html').setAttribute('data-kit-theme', 'default')
        $('body').removeClass('air__menu--gray air__menu--dark air__menu--blue air__menu--white')
        $('body').addClass('air__menu--gray')
      }
      if (theme === 'default') {
        document.querySelector('html').setAttribute('data-kit-theme', 'dark')
        $('body').removeClass('air__menu--gray air__menu--dark air__menu--blue air__menu--white')
      }
    })

    /////////////////////////////////////////////////////////////////////////////////////////
    // app name
    function updateName(name) {
      window.localStorage.setItem('appName', name)
      if ($('.air__menuLeft').length) {
        $('.air__menuLeft__logo__name').html(name)
      }
      if ($('.air__menuTop').length) {
        $('.air__menuTop__logo__name').html(name)
      }
      if ($('.air__footer').length) {
        $('.air__footer__logo__name').html(name)
      }
      if ($('.air__footerDark').length) {
        $('.air__footerDark__logo__name').html(name)
      }
      if ($('.air__topbarDark').length) {
        $('.air__topbarDark__logo__name').html(name)
      }
      if ($('.air__auth__logo').length) {
        $('.air__auth__logo__name').html(name)
      }
    }
    $('#appName').on('keyup', function (e) {
      var value = e.target.value
      updateName(value)
    })
    var appName = window.localStorage.getItem('appName')
    if (appName) {
      updateName(appName)
      $('#appName').val(appName)
    }

    /////////////////////////////////////////////////////////////////////////////////////////
    // app description
    function updateDescr(descr) {
      window.localStorage.setItem('appDescr', descr)
      if ($('.air__menuLeft').length) {
        $('.air__menuLeft__logo__descr').html(descr)
      }
      if ($('.air__menuTop').length) {
        $('.air__menuTop__logo__descr').html(descr)
      }
      if ($('.air__footer').length) {
        $('.air__footer__logo__descr').html(descr)
      }
      if ($('.air__footerDark').length) {
        $('.air__footerDark__logo__descr').html(descr)
      }
      if ($('.air__topbarDark').length) {
        $('.air__topbarDark__logo__descr').html(descr)
      }
      if ($('.air__auth__logo').length) {
        $('.air__auth__logo__descr').html(descr)
      }
    }
    $('#appDescr').on('keyup', function (e) {
      var value = e.target.value
      updateDescr(value)
    })
    var appDescr = window.localStorage.getItem('appDescr')
    if (appDescr) {
      updateDescr(appDescr)
      $('#appDescr').val(appDescr)
    }

    /////////////////////////////////////////////////////////////////////////////////////////
    // set primary color
    function setPrimaryColor(color) {
      function setColor(_color) {
        window.localStorage.setItem('kit.primary', _color)
        var tag = '<style />'
        var css = `:root { --kit-color-primary: ${_color};}`
        $(tag)
          .attr('id', 'primaryColor')
          .text(css)
          .prependTo('body')
      }
      var style = $('#primaryColor')
      style ? (style.remove(), setColor(color)) : setColor(color)
    }
    var color = window.localStorage.getItem('kit.primary')
    if (color) {
      $('#colorPicker').val(color)
      setPrimaryColor(color)
      $('#resetColor')
        .parent()
        .removeClass('reset')
    }
    $('#colorPicker').on('change', function () {
      var value = $(this).val()
      setPrimaryColor(value)
      $('#resetColor')
        .parent()
        .removeClass('reset')
    })
    $('#resetColor').on('click', function () {
      window.localStorage.removeItem('kit.primary')
      $('#primaryColor').remove()
      $('#resetColor')
        .parent()
        .addClass('reset')
    })

    /////////////////////////////////////////////////////////////////////////////////////////
    // switch

    $('.air__sidebar__switch input').on('change', function () {
      var el = $(this)
      var checked = el.is(':checked')
      var to = el.attr('to')
      var setting = el.attr('setting')
      if (checked) {
        $(to).addClass(setting)
      } else {
        $(to).removeClass(setting)
      }
    })

    $('.air__sidebar__switch input').each(function () {
      var el = $(this)
      var to = el.attr('to')
      var setting = el.attr('setting')
      if ($(to).hasClass(setting)) {
        el.attr('checked', true)
      }
    })

    /////////////////////////////////////////////////////////////////////////////////////////
    // colors

    $('.air__sidebar__select__item').on('click', function () {
      var el = $(this)
      var parent = el.parent()
      var to = parent.attr('to')
      var setting = el.attr('setting')
      var items = parent.find('> div')
      var classList = ''
      items.each(function () {
        var setting = $(this).attr('setting')
        if (setting) {
          classList = classList + ' ' + setting
        }
      })
      items.removeClass('air__sidebar__select__item--active')
      el.addClass('air__sidebar__select__item--active')
      $(to).removeClass(classList)
      $(to).addClass(setting)
    })

    $('.air__sidebar__select__item').each(function () {
      var el = $(this)
      var parent = el.parent()
      var to = parent.attr('to')
      var setting = el.attr('setting')
      var items = parent.find('> div')
      if ($(to).hasClass(setting)) {
        items.removeClass('air__sidebar__select__item--active')
        el.addClass('air__sidebar__select__item--active')
      }
    })

    /////////////////////////////////////////////////////////////////////////////////////////
    // type

    $('.air__sidebar__type__items input').on('change', function () {
      var el = $(this)
      var checked = el.is(':checked')
      var to = el.attr('to')
      var setting = el.attr('setting')
      $('body').removeClass('air__menu--compact air__menu--flyout air__menu--nomenu')
      if (checked) {
        $(to).addClass(setting)
      } else {
        $(to).removeClass(setting)
      }
    })

    $('.air__sidebar__type__items input').each(function () {
      var el = $(this)
      var to = el.attr('to')
      var setting = el.attr('setting')
      if ($(to).hasClass(setting)) {
        el.attr('checked', true)
      }
    })
  })
})(jQuery)
