export default function Pagination() {
  const pagination = document.querySelector('.pagination')
  const paginationSelect = document.querySelector('.pagination-select')
  const label = document.querySelector('.pagination-label')

  if (pagination) {
    label.addEventListener('click', () => {
      paginationSelect.classList.toggle('is-open')
    })
  }
}