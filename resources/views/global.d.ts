import { Alpine as AlpineType } from 'alpinejs'

declare global {
  var Alpine: AlpineType
}
interface Window {
  Alpine: AlpineType
}

/**
 * From https://bobbyhadz.com/blog/typescript-make-types-global
 */
declare global {}

export {}
