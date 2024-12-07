const accordContent = document.querySelectorAll(".accord-content");

accordContent.forEach((item,index)=>{
    let header1 = item.querySelector("header1");
    header1.addEventListener("click", ()=>{
        item.classList.toggle("is-open");

        let description = item.querySelector(".accord-content-description");
        if(item.classList.contains("is-open")){
            // Scrollheight property return the height of
            // an element including padding
            description.style.height=`${description.scrollHeight}px`; 
            item.querySelector("i").classList.replace("fa-plus","fa-minus");
        }else{
            description.style.height = "0px";
            item.querySelector("i").classList.replace("fa-minus","fa-plus");
        }
        // function to pass the index number of clicked header1
        removeOpenedContent(index); 
    })
})

function removeOpenedContent(index){
    accordContent.forEach((item2,index2)=>{
        if(index != index2){
            item2.classList.remove("is-open");
            let descrip = item2.querySelector(".accord-content-description");
            descrip.style.height="0px";
            item2.querySelector("i").classList.replace("fa-minus","fa-plus");
        }
    })
}