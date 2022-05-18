import { ModuleOptions } from '@nuxt/schema'

const tailwindcss: Partial<ModuleOptions> = {
  exposeConfig: true,
}

const modules: ModuleOptions = {
  tailwindcss: tailwindcss,
}

export default modules
