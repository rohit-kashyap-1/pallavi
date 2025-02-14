
$(".menu-toggle").click(function(){
    $(".menu").css("display","flex")
})
$(".cross").click(function(){
    $(".menu").css("display","none")
})

$(document).on('keypress',"input[type='tel']",function(evt){
    if (evt.which < 48 || evt.which > 57 || $(this).val().length>=10)
    {
        evt.preventDefault();
    }
})
$("#form").submit(function(e){
    e.preventDefault();
    var form_data = new FormData(this);
    s = $(this);
    $.ajax({
        url:'email/email.php',
        method:'POST',
        cache: false,
        contentType: false,
        processData: false,
        data:form_data,
        success:function(result){
        console.log(result);
        try{
            result = JSON.parse(result);
            if(result.type==true){
                $(".form_errors").html('')
                s.html(result.html)
            }else{
                $('.form_errors').html(`<p class='text-danger'>${result.msg}</p>
                `);
            }
        }catch(error){
        $('.form_errors').html(`<p class='text-danger'>${result.msg}</p>`);    
        }
        }
    })
})
//.review-slider

$('.logo-slider').slick({
    dots: true,
    infinite: false,
    speed: 300,
    autoplay:true,
    autoplaySpeed:2000,
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite:true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $(document).ready(function() {
	$('.gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		// image: {
		// 	tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		// 	titleSrc: function(item) {
		// 		return item.el.attr('title') + ' by Marsel Van Oosten';
		// 	}
		// }
	});
});


$(".mobile-trigger button").click(function(){
   if($(".menu").is(":visible")){
    $(".menu").css("display","none")
   }else{
    $(".menu").css("display","flex")
   }
})

$(document).on('submit','.contact',function(e){
  e.preventDefault();
  form = $(this);
  var form_data = new FormData(this);
  text = submit_start(form,'Submitting...')
  $.ajax({
          url:'ajax.php',
          method:'POST',
          cache: false,
          contentType: false,
          processData: false,
          data:form_data,
          beforeSubmit :function(){
          },
          success:function(result){
          console.log(result)
          result = JSON.parse(result)
          if(result.type==true){
                  window.location.href = 'thank-you?md='+result.id
                  console.log('thank-you?md='+result.id)
                  submit_stop(form,text);
                  
              }else{
                  submit_stop(form,text);
                  form.find('.form_error').html(`<p class='text-danger' style='margin:10px 0'>${result.msg}</p>`)
              }
          }
      })
  })
  function submit_start(form,text){
    button = form.find("button[type='submit']")
    prev_text = button.html();
    text = (text!='')?text:button.html();
    button.prop('disabled',true);
    button.html(`${text} <span class="spinner-grow spinner-grow-sm"></span>`)
    return prev_text
}
function submit_stop(form,text){
    button = form.find("button[type='submit']")
    button.html(text);
    button.prop('disabled',false);
}