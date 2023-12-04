const multi_option_wrapper = document.getElementsByClassName("multi_option_wrapper");

for(let i = 0; i < multi_option_wrapper.length; i++){
    const main_checkbox = multi_option_wrapper[i].getElementsByClassName("main_checkbox_input")[0];
    const child_checkboxs = multi_option_wrapper[i].getElementsByClassName("child_checkbox_wrapper")[0];
    main_checkbox.addEventListener("change", function(){
        if(main_checkbox.checked){
            child_checkboxs.style.maxWidth = '100%';
        }else{
            child_checkboxs.style.maxWidth = '0px';
            const inners = child_checkboxs.getElementsByClassName("checkbox");
            for(let j = 0; j < inners.length; j++){
                inners[j].checked = false;
            }
            const child_input = child_checkboxs.getElementsByClassName("child_input");
            for(let j = 0; j < child_input.length; j++){
                child_input[j].value = "";
            }
        }
    })
}