document.addEventListener('DOMContentLoaded', () => {

    const mask = (dataValue, options) => {
      const elements = document.querySelectorAll(`[data-mask="${dataValue}"]`)
      if (!elements) return
  
      elements.forEach(el => {
        IMask(el, options)
      })
    }
  
    mask('phone', {
      mask: '+{7}(000)000-00-00'
    })
  })