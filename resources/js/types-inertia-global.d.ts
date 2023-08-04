declare module 'vue' {
  interface ComponentCustomProperties {
    $route: <T extends App.Route.Name>(name: T, params?: T extends keyof App.Route.Params ? App.Route.Params[T] : never) => string;
    $isRoute: (name: App.Route.Name) => boolean;
    $currentRoute: () => App.Route.Link | undefined;
    $to: <T extends App.Route.Name>(route: App.Route.RouteConfig<T>) => string;
    // @ts-ignore
    $page: Inertia.Page
    sessions: { agent: { is_desktop: boolean; browser: string; platform: string; }, ip_address: string; is_current_device: boolean; last_active: string; }[];
  }
  export interface GlobalComponents {
    IHead: typeof import('@inertiajs/vue3').Head,
    ILink: typeof import('@inertiajs/vue3').Link,
  }
}

export {};
    