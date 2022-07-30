$("document").ready(()=>{
    console.log("Ok")

    newItem = $("#new")
    newItem.click(()=>{
        $(".create").attr('style','display:flex')
        $(".close").click(()=>{
            $(".create").attr('style','display:none')
        })
    })
})