$(function(){
    // $('.delete-button').on('click', function(e){
    $(document).on('click', '.delete-button', function (e) {

        //aタグのリンクの機能の無効化
        e.preventDefault();

         //クリックされたタスクのidを取得

<<<<<<< HEAD
         let id = $(this).data('hoge');
=======
         let id = $(this).data('hoge')
>>>>>>> ed115ec8a75632d381a0372705b5b3f725c127b1
         


         //ajax処理を開始
        
            $.ajax({
                url: 'http://localhost/TodoApp/delete.php',
                type: 'GET',
                dataType: 'json',
                data: {
                    'id': id
                }
            }).done((data) => {
                //成功した時、街灯のタスクを画面から削除
<<<<<<< HEAD
                $('#'+id+'').remove();
=======
                $('#'+data+'').remove();
>>>>>>> ed115ec8a75632d381a0372705b5b3f725c127b1
            }).fail((error) => {
                alert('失敗した');
            })


            


    })

    $('#add-button').on('click', function(e){

        e.preventDefault();

        //画面に入力された文字を取得
        let text = $('#input-task').val();

        console.log(text);

        $.ajax({
            url: 'http://localhost/TodoApp/create.php',
            type: 'POST',
            dataType: 'json',
            data:{
                //ここに送信したい値を記述
                task: text
            }
        }).done((data)=>{
            //tbodyのなかに、新しいタスク用にtrタグを作成する
            $('tbody').prepend(
<<<<<<< HEAD
                `<tr id="task-${data['id']}">` +
                `<td>${data['name']}</td>` +
                `<td>${data['due_date']}</td>` +
                `<td>` +
                `<a class="text-success" href="edit.php?id=${data['id']}">EDIT</a>` +
                `</td>` +
                `<td>` +
                `<a class="text-danger delete-button" data-id=${data['id']} href="delete.php?id=${data['id']}">DELETE</a>` +
                `</td>` +
                `</tr>`
=======
                `<tr>
                <td>${data['name']}</td>
                <td>${data['due_date']}</td>
                <td>
                    <a class="text-success" href="edit.php?id=${data['id']}">EDIT</a>
                </td>
                <td>
                    <a class="delete-button text-danger" data-hoge="${data['id']}" href="delete.php?id=${data['id']}">DELETE</a>
                </td>
                </tr>`
>>>>>>> ed115ec8a75632d381a0372705b5b3f725c127b1
            );
        }).fail(()=>{
            
        })
    
    })
})