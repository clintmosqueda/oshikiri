export default function Table() {
  const contextWrap = document.querySelectorAll('.context-wrap')
  if (contextWrap) {
    const tables = document.querySelectorAll('table')

    tables.forEach((table) => {
      let tableWrapper = document.createElement('div')
      tableWrapper.classList.add('context-wrap-table')
      let tableInner = document.createElement('div')
      tableInner.classList.add('context-wrap-table-inner')
      table.parentNode.insertBefore(tableInner, table);
      tableInner.appendChild(table)

      tableInner.parentNode.insertBefore(tableWrapper, tableInner)
      tableWrapper.appendChild(tableInner)
    })
  }



}