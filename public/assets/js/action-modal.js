/**
 *  Delete Function
 *
 */

function deleteData(id, route) {
    let container = document.querySelector('#deleteButtonContainer')
    let strAvailableData = `
        <a
            href="`+route+`/`+id+`/delete"
            class="btn btn-danger"
        >
            Delete
        </a>
    `
    return container.innerHTML = strAvailableData
}
