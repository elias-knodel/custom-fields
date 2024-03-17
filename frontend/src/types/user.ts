import type { Item } from "./item";

export interface User extends Item {
  email?: string;
  roles?: string;
  password?: string;
  firstname?: string;
  lastname?: string;
  verified?: boolean;
  lastResetSentAt?: string;
  lastVerificationSentAt?: string;
  created?: string;
  updated?: string;
  userIdentifier?: string;
}
