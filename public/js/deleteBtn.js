    let deleteBtn = document.getElementById('deleteBtn');

    window.addEventListener
        ('DOMContentLoaded', () =>{
                const overlay = document.querySelector
                ('#overlay-delete')
                const deleteBtn = document.querySelector
                ('#deleteBtn')

                deleteBtn.addEventListener ('click', () =>{
                overlay.classList.remove('hidden')
                })
                overlay.addEventListener ('click', () =>{
                overlay.classList.add('hidden')
                })
        })
