<template>
  <form class="py-4" @submit.prevent="emitSubmit">
    <div class="mb-2">
      <label
        for="user_email"
        class="text-gray-700 block text-sm font-bold capitalize"
      >
        email
      </label>
      <input
        id="user_email"
        v-model="item.email"
        :class="[
          'mt-1 w-full px-3 py-2 border rounded',
          violations?.email ? 'border-red-500' : 'border-gray-300',
        ]"
        type="text"
        placeholder=""
      />
      <div
        v-if="violations?.email"
        class="bg-red-100 rounded py-4 px-4 my-2 text-red-700 text-sm"
      >
        {{ violations.email }}
      </div>
    </div>
    <div class="mb-2">
      <label
        for="user_roles"
        class="text-gray-700 block text-sm font-bold capitalize"
      >
        roles
      </label>
      <input
        id="user_roles"
        v-model="item.roles"
        :class="[
          'mt-1 w-full px-3 py-2 border rounded',
          violations?.roles ? 'border-red-500' : 'border-gray-300',
        ]"
        type="text"
        placeholder=""
      />
      <div
        v-if="violations?.roles"
        class="bg-red-100 rounded py-4 px-4 my-2 text-red-700 text-sm"
      >
        {{ violations.roles }}
      </div>
    </div>
    <div class="mb-2">
      <label
        for="user_password"
        class="text-gray-700 block text-sm font-bold capitalize"
      >
        password
      </label>
      <input
        id="user_password"
        v-model="item.password"
        :class="[
          'mt-1 w-full px-3 py-2 border rounded',
          violations?.password ? 'border-red-500' : 'border-gray-300',
        ]"
        type="text"
        placeholder=""
      />
      <div
        v-if="violations?.password"
        class="bg-red-100 rounded py-4 px-4 my-2 text-red-700 text-sm"
      >
        {{ violations.password }}
      </div>
    </div>
    <div class="mb-2">
      <label
        for="user_firstname"
        class="text-gray-700 block text-sm font-bold capitalize"
      >
        firstname
      </label>
      <input
        id="user_firstname"
        v-model="item.firstname"
        :class="[
          'mt-1 w-full px-3 py-2 border rounded',
          violations?.firstname ? 'border-red-500' : 'border-gray-300',
        ]"
        type="text"
        placeholder=""
      />
      <div
        v-if="violations?.firstname"
        class="bg-red-100 rounded py-4 px-4 my-2 text-red-700 text-sm"
      >
        {{ violations.firstname }}
      </div>
    </div>
    <div class="mb-2">
      <label
        for="user_lastname"
        class="text-gray-700 block text-sm font-bold capitalize"
      >
        lastname
      </label>
      <input
        id="user_lastname"
        v-model="item.lastname"
        :class="[
          'mt-1 w-full px-3 py-2 border rounded',
          violations?.lastname ? 'border-red-500' : 'border-gray-300',
        ]"
        type="text"
        placeholder=""
      />
      <div
        v-if="violations?.lastname"
        class="bg-red-100 rounded py-4 px-4 my-2 text-red-700 text-sm"
      >
        {{ violations.lastname }}
      </div>
    </div>
    <div class="mb-2">
      <label
        for="user_verified"
        class="text-gray-700 block text-sm font-bold capitalize"
      >
        verified
      </label>
      <input
        id="user_verified"
        v-model="item.verified"
        :class="[
          'mt-1 w-full px-3 py-2 border rounded',
          violations?.verified ? 'border-red-500' : 'border-gray-300',
        ]"
        type="checkbox"
        placeholder=""
      />
      <div
        v-if="violations?.verified"
        class="bg-red-100 rounded py-4 px-4 my-2 text-red-700 text-sm"
      >
        {{ violations.verified }}
      </div>
    </div>
    <div class="mb-2">
      <label
        for="user_lastResetSentAt"
        class="text-gray-700 block text-sm font-bold capitalize"
      >
        lastResetSentAt
      </label>
      <input
        id="user_lastResetSentAt"
        v-model="item.lastResetSentAt"
        :class="[
          'mt-1 w-full px-3 py-2 border rounded',
          violations?.lastResetSentAt ? 'border-red-500' : 'border-gray-300',
        ]"
        type="date"
        placeholder=""
      />
      <div
        v-if="violations?.lastResetSentAt"
        class="bg-red-100 rounded py-4 px-4 my-2 text-red-700 text-sm"
      >
        {{ violations.lastResetSentAt }}
      </div>
    </div>
    <div class="mb-2">
      <label
        for="user_lastVerificationSentAt"
        class="text-gray-700 block text-sm font-bold capitalize"
      >
        lastVerificationSentAt
      </label>
      <input
        id="user_lastVerificationSentAt"
        v-model="item.lastVerificationSentAt"
        :class="[
          'mt-1 w-full px-3 py-2 border rounded',
          violations?.lastVerificationSentAt ? 'border-red-500' : 'border-gray-300',
        ]"
        type="date"
        placeholder=""
      />
      <div
        v-if="violations?.lastVerificationSentAt"
        class="bg-red-100 rounded py-4 px-4 my-2 text-red-700 text-sm"
      >
        {{ violations.lastVerificationSentAt }}
      </div>
    </div>
    <div class="mb-2">
      <label
        for="user_created"
        class="text-gray-700 block text-sm font-bold capitalize"
      >
        created
      </label>
      <input
        id="user_created"
        v-model="item.created"
        :class="[
          'mt-1 w-full px-3 py-2 border rounded',
          violations?.created ? 'border-red-500' : 'border-gray-300',
        ]"
        type="date"
        placeholder=""
      />
      <div
        v-if="violations?.created"
        class="bg-red-100 rounded py-4 px-4 my-2 text-red-700 text-sm"
      >
        {{ violations.created }}
      </div>
    </div>
    <div class="mb-2">
      <label
        for="user_updated"
        class="text-gray-700 block text-sm font-bold capitalize"
      >
        updated
      </label>
      <input
        id="user_updated"
        v-model="item.updated"
        :class="[
          'mt-1 w-full px-3 py-2 border rounded',
          violations?.updated ? 'border-red-500' : 'border-gray-300',
        ]"
        type="date"
        placeholder=""
      />
      <div
        v-if="violations?.updated"
        class="bg-red-100 rounded py-4 px-4 my-2 text-red-700 text-sm"
      >
        {{ violations.updated }}
      </div>
    </div>
    <div class="mb-2">
      <label
        for="user_userIdentifier"
        class="text-gray-700 block text-sm font-bold capitalize"
      >
        userIdentifier
      </label>
      <input
        id="user_userIdentifier"
        v-model="item.userIdentifier"
        :class="[
          'mt-1 w-full px-3 py-2 border rounded',
          violations?.userIdentifier ? 'border-red-500' : 'border-gray-300',
        ]"
        type="text"
        placeholder=""
      />
      <div
        v-if="violations?.userIdentifier"
        class="bg-red-100 rounded py-4 px-4 my-2 text-red-700 text-sm"
      >
        {{ violations.userIdentifier }}
      </div>
    </div>

    <button
      type="submit"
      class="px-6 py-2 bg-green-500 text-white font-medium rounded shadow-md hover:bg-green-600"
    >
      Submit
    </button>
  </form>
</template>

<script lang="ts" setup>
import { toRef, ref, type Ref } from "vue";
import { formatDateInput } from "@/utils/date";
import type { User } from "@/types/user";
import type { SubmissionErrors } from "@/types/error";

const props = defineProps<{
  values?: User;
  errors?: SubmissionErrors;
}>();

const emit = defineEmits<{
  (e: "submit", item: User): void;
}>();

const violations = toRef(props, "errors");

let item: Ref<User> = ref({});

if (props.values) {
  item.value = {
    ...props.values,
    publicationDate: formatDateInput(props.values.publicationDate),
    publicationDate: formatDateInput(props.values.publicationDate),
    publicationDate: formatDateInput(props.values.publicationDate),
    publicationDate: formatDateInput(props.values.publicationDate),
  };
}

function emitSubmit() {
  emit("submit", item.value);
}
</script>
