var user = {
  ajaxLoader: $('.ajax-loading'),
  getUserAsHTML: function() {
    user.enableLoading(true)
    $.ajax({
      url: 'http://local.ci4-training.co/userApi/getuser'
    }).done(function(data) {
      $('.table').append(data)
      user.enableLoading(false)
    })
  },
  enableLoading: function(enable) {
    if (enable) {
      user.ajaxLoader.show()
    } else {
      user.ajaxLoader.hide()
    }
  }
}

$(function() {
  $('#btnGetUser').on('click', function() {
    user.getUserAsHTML()
  })
})
