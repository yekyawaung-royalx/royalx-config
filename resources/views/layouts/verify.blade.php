<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>


<input type="hidden" id="url" value="{{ url('') }}">
<input type="" id="id" value="{{ $id }}">
<input type="" id="token" value="{{  $token }}">


 <script src="{{ asset('backend/js/jquery.js') }}"></script>
 <script type="text/javascript">
     $(document).ready(function(){
        var url              = $("#url").val();
        var id              = $("#id").val();
        var token    = $("#token").val();

        var verify_data = function(){
                $.ajax({
                    url: url+'/admin/verified',
                    type: 'POST',
                    data: {
                        'id':id,
                         '_token':token
                    },
                    success: function(data){
                        
                    }
                });
            }

           verify_data();
     });
 </script>
</body>
</html>