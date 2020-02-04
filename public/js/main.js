const articles = document.getElementById('articles');

if(articles){
    articles.addEventListener('click',e=>{
        if(e.target.className === 'btn btn-danger delete-article'){
            if(confirm("你要刪除這筆資料嗎?")){
                const id=e.target.getAttribute('data-id');
                fetch(`/article/delete/${id}`,{
                    method: 'DELETE'
                }).then(res=>window.location.reload());
            }
        }
    })
}