<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <!-- <img src="Views/images/icons/tick.svg" alt="" class="icon"> -->
    <!-- <img src="Views/images/icons/cross.svg" onclick="closeModal()" class="cross"/> -->
    <i class="fa-solid fa-xmark cross" onclick="closeModal()"></i>
    <!-- <i class="fa-regular fa-xmark-large" onclick="closeModal()" class="cross"></i> -->

    <p class="title">This is the Title</p>
    <p class="msg">This is a modal! and the message</p>
</div>

</div>

<script>
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

function openModal(title, msg) {
    let myModal = document.getElementById("myModal");
    myModal.style.display = "block";
    myModal.querySelector('.title').innerHTML = title;
    myModal.querySelector('.msg').innerHTML = msg;
    
}
</script>