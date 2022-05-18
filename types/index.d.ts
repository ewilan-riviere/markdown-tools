declare module '@nuxt/schema' {
  interface PublicRuntimeConfig {
    baseURL: string
    googleSiteVerificationToken: string
  }
  interface PrivateRuntimeConfig {}
}

export {}
