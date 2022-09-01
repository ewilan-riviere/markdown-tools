type Mode = 'light' | 'dark'
interface ModeElement {
  label: string
  key: string
}

const colorMode = () => ({
  mode: 'light' as Mode,
  list: [
    {
      label: 'Light',
      key: 'light',
    }, {
      label: 'Dark',
      key: 'dark',
    },
  ] as ModeElement[],
  key: 'color-scheme',

  init() {
    this.setMode()
  },
  switchMode(mode: Mode) {
    const body = document.documentElement
    this.list.forEach((element) => {
      body.classList.remove(element.key)
    })
    body.classList.add(mode)

    localStorage.setItem(this.key, mode)
    this.setMode(mode)
  },
  setMode(mode?: Mode) {
    const currentMode = localStorage.getItem(this.key)
    if (currentMode)
      this.mode = currentMode as Mode

    if (mode === 'light')
      this.mode = 'light'
  },
})

export default colorMode
