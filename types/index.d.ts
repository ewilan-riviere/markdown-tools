declare module '@nuxt/schema' {
  interface PublicRuntimeConfig {
    baseURL: string
    googleSiteVerificationToken: string
  }
  interface PrivateRuntimeConfig {}
}

export type ConverterType = 'html' | 'markdown'

export {}
