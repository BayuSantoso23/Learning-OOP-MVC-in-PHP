$(function(){
    $('.addModalButton').on('click', function(){
        $('#modalTitle').html('Add Student Data');
        $('.modal-footer button[type=submit]').html('Add Data');
    });

    $('.editModalButton').on('click', function(){
        $('#modalTitle').html('Edit Student Data');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/learn_php/MVC/public/Students/edit')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/learn_php/MVC/public/students/getEdit',
            data: {id : id},
            method: 'POST',
            dataType: 'json',
            success: function(data){
                console.log(data);
                $('#name').val(data.name);
                $('#age').val(data.age);
                $('#email').val(data.email);
                $('#job').val(data.job);
                $('#id').val(data.id);
            }
        });
    });
});
