<script type="text/javascript">
    let chatBox = document.getElementById('chat-box');
    $("#chat-container").animate({scrollTop:($("#chat-container")[0].scrollHeight)}, 2500);
</script>
<script type="text/javascript">
    $('#chat-form').on('submit',function(e){
        e.preventDefault();
        var message = $('input[type=text]').val();
        $.ajax({
            url: "{{ route('storeMessage') }}",
            dataType: 'json', 
            type:'POST',
            data:{
                '_token' : $('meta[name="csrf-token"]').attr('content'),
                message:message
            },
            success:function(data){
                // console.log(data)
                // console.log(data.date)
                $('input[type=text]').val('');
                $('#chat-box').append(
                    '<div class="media w-50 ml-auto mb-3">'+
                        '<div class="media-body">'+
                            '<div class="bg-primary rounded py-2 px-3 mb-2">'+
                                '<p class="text-small mb-0 text-white">'+data.message+'</p>'+
                            '</div>'+   
                            '<p class="small text-muted">' +data.time +' | ' + data.date + '</p>'+
                        '</div>'+
                    '</div>'
                );
            }
        });
    });
</script>
{{-- script for response --}}
<script>
    function responses(){
        
    }
</script>