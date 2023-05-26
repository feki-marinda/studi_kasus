$("#formValidation").validate({
    rules:{
        nama_produk:{
            minlength:2
        },
        harga_produk:{
            
        },
        merk_produk:{
    
        }
    },
    messages: {
        nama_produk:{
            required: "Please enter your product name",
            minlength: "Name at least 2 character"
        },
        harga_produk:{
            required: "Please enter price",
        },
        merk_produk:"Please enter brand",
        
      },
    
        submitHandler: function(form) {
          form.submit();
        }
       });