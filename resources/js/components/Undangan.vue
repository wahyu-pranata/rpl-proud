<template>
    <div class="w-full">
        <h1 class="font-semibold text-4xl mb-2 tracking-widest">Undangan</h1>
        <div class="flex flex-row">
            <div class="w-1/2 mr-12">
                <h2 class="font-semibold text-gray-600 text-2xl my-4 tracking-widest">Inti</h2>
                <div id="IntiList" class="mb-4" v-for="invitation in intiInvitations">
                    <div class="max-w-lg mt-1" v-if="invitation.event_division.name != 'Organisasi'">
                        <div class="border-2 rounded-lg p-6 'border-gray-400' mb-6 h-32" :class="addBorderClass(invitation.status)">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="font-bold text-gray-700">{{ invitation.namaPosisi }}</h3>
                                    <div class="flex items-center space-x-2 mt-2">
                                        <div class="w-12 h-12 bg-blue-700 rounded-full"></div>
                                        <div>
                                            <div class=" inline-flex">
                                                <p class="font-semibold text-gray-900 mr-2">{{ invitation.user.name }}</p>
                                                <p class="text-gray-500">{{ invitation.status  }}</p>
                                            </div>
                                            <p class="text-sm text-gray-500">{{ invitation.user.student_details.nim }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <CreateInvitation
                                    :division="invitation.event_division"
                                    :eventName="eventName" :eventId="eventId" :eventDescription="eventDescription"
                                    :roleName="invitation.role.name"
                                    openButtonClass="border-2 font-semibold text-blue-950 border-blue-950 px-4 py-1 rounded-lg hover:bg-blue-950 hover:text-white">
                                        Ubah
                                    </CreateInvitation>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inti yang belum diinvite -->
                <!-- Ketua -->
                <div class="max-w-lg mt-1" v-if="!invitationKetua">
                    <div class="border-2 rounded-lg p-6 'border-gray-400' mb-6 h-32">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="font-bold text-gray-700">Ketua</h3>
                                <p class="text-sm text-gray-500 mt-2">Undang mahasiswa untuk bergabung</p>
                            </div>
                            <div>
                                <CreateInvitation
                                :division="intiDivision"
                                :eventName="eventName" :eventId="eventId" :eventDescription="eventDescription"
                                roleName="panitia_ketua"
                                openButtonClass="border-2 font-semibold text-blue-950 border-blue-950 px-4 py-1 rounded-lg hover:bg-blue-950 hover:text-white">
                                    Undang
                                </CreateInvitation>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wakil Ketua -->
                <div class="max-w-lg mt-1" v-if="!invitationWakilKetua">
                    <div class="border-2 rounded-lg p-6 'border-gray-400' mb-6 h-32">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="font-bold text-gray-700">Wakil Ketua</h3>
                                <p class="text-sm text-gray-500 mt-2">Undang mahasiswa untuk bergabung</p>
                            </div>
                            <div>
                                <CreateInvitation
                                :division="intiDivision"
                                :eventName="eventName" :eventId="eventId" :eventDescription="eventDescription"
                                roleName="panitia_wakil_ketua"
                                openButtonClass="border-2 font-semibold text-blue-950 border-blue-950 px-4 py-1 rounded-lg hover:bg-blue-950 hover:text-white">
                                    Undang
                                </CreateInvitation>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bendahara -->
                <div class="max-w-lg mt-1" v-if="!invitationBendahara">
                    <div class="border-2 rounded-lg p-6 'border-gray-400' mb-6 h-32">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="font-bold text-gray-700">Bendahara</h3>
                                <p class="text-sm text-gray-500 mt-2">Undang mahasiswa untuk bergabung</p>
                            </div>
                            <div>
                                <CreateInvitation
                                :division="intiDivision"
                                :eventName="eventName" :eventId="eventId" :eventDescription="eventDescription"
                                roleName="panitia_bendahara"
                                openButtonClass="border-2 font-semibold text-blue-950 border-blue-950 px-4 py-1 rounded-lg hover:bg-blue-950 hover:text-white">
                                    Undang
                                </CreateInvitation>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sekretaris -->
                <div class="max-w-lg mt-1" v-if="!invitationSekretaris">
                    <div class="border-2 rounded-lg p-6 'border-gray-400' mb-6 h-32">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="font-bold text-gray-700">Sekretaris</h3>
                                <p class="text-sm text-gray-500 mt-2">Undang mahasiswa untuk bergabung</p>
                            </div>
                            <div>
                                <CreateInvitation
                                :division="intiDivision"
                                :eventName="eventName" :eventId="eventId" :eventDescription="eventDescription"
                                roleName="panitia_sekretaris"
                                openButtonClass="border-2 font-semibold text-blue-950 border-blue-950 px-4 py-1 rounded-lg hover:bg-blue-950 hover:text-white">
                                    Undang
                                </CreateInvitation>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Koordinator Sie -->
            <div class="w-1/2">
                <h2 class="font-semibold text-gray-600 text-2xl my-4 tracking-widest">Koordinator</h2>
                <div id="CoordList" class="mb-4" v-for="invitation in coordinatorInvitations">
                    <div class="max-w-lg mt-1" v-if="invitation.event_division.name != 'Organisasi' && invitation.event_division.name != 'Inti'">
                        <div class="border-2 rounded-lg p-6 'border-gray-400' mb-6 h-32" :class="addBorderClass(invitation.status)">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="font-bold text-gray-700">Koordinator {{ invitation.event_division.name }}</h3>
                                    <div class="flex items-center space-x-2 mt-2">
                                        <div class="w-12 h-12 bg-blue-700 rounded-full"></div>
                                        <div>
                                            <div class=" inline-flex">
                                                <p class="font-semibold text-gray-900 mr-2">{{ invitation.user.name }}</p>
                                                <p class="text-gray-500">{{ invitation.status  }}</p>
                                            </div>
                                            <p class="text-sm text-gray-500">{{ invitation.user.student_details.nim }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <CreateInvitation
                                    :division="invitation.event_division"
                                    :eventName="eventName" :eventId="eventId" :eventDescription="eventDescription"
                                    roleName="panitia_koordinator_divisi"
                                    openButtonClass="border-2 font-semibold text-blue-950 border-blue-950 px-4 py-1 rounded-lg hover:bg-blue-950 hover:text-white">
                                        Ubah
                                    </CreateInvitation>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-lg mt-1" v-for="division in uninvitedCoordinatorDivisions"
                v-show="division.name != 'Organisasi' && division.name != 'Inti'">
                    <div class="border-2 rounded-lg p-6 'border-gray-400' mb-6 h-32">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="font-bold text-gray-700">Koordinator {{ division.name }}</h3>
                                <p class="text-sm text-gray-500 mt-2">Undang mahasiswa untuk bergabung</p>
                            </div>
                            <div>
                                <CreateInvitation
                                :division="division"
                                :eventName="eventName" :eventId="eventId" :eventDescription="eventDescription"
                                roleName="panitia_koordinator_divisi"
                                openButtonClass="border-2 font-semibold text-blue-950 border-blue-950 px-4 py-1 rounded-lg hover:bg-blue-950 hover:text-white">
                                    Undang
                                </CreateInvitation>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, watch } from 'vue'

const props = defineProps(['invitations', 'eventDivisions', 'eventName', 'eventDescription', 'eventId'])

const intiInvitations = ref([])
const intiDivision = ref({})

const coordinatorInvitations = ref([])
const uninvitedCoordinatorDivisions = ref([])


let invitationKetua
let invitationWakilKetua
let invitationBendahara
let invitationSekretaris

if (props.invitations) {
    for (const invitation of props.invitations) {
        if (invitation.role.name == 'panitia_ketua') {
            invitation.namaPosisi = "Ketua"
            invitationKetua = invitation
            intiInvitations.value.push(invitation)
            continue
        }

        if (invitation.role.name == 'panitia_wakil_ketua') {
            invitation.namaPosisi = "Wakil Ketua"
            invitationWakilKetua = invitation
            intiInvitations.value.push(invitation)
            continue
        }

        if (invitation.role.name == 'panitia_bendahara') {
            invitation.namaPosisi = "Bendahara"
            invitationBendahara = invitation
            intiInvitations.value.push(invitation)
            continue
        }

        if (invitation.role.name == 'panitia_sekretaris') {
            invitation.namaPosisi = "Sekretaris"
            invitationSekretaris = invitation
            intiInvitations.value.push(invitation)
            continue
        }

        coordinatorInvitations.value.push(invitation)
    }

    for (const division of props.eventDivisions) {
        if (division.name == "Inti") {
            intiDivision.value = division
            continue
        }

        let invited = false
        for (const invitation of coordinatorInvitations.value) {
            if (invitation.event_division.id == division.id) {
                invited = true
                break
            }
        }

        if (invited) {
            continue
        } else {
            uninvitedCoordinatorDivisions.value.push(division)
            invited = false
        }
    }
}


const addBorderClass = (status) => {
    switch (status) {
        case 'diterima':
            return 'border-blue-500'
        case 'ditolak':
            return 'border-red-500'
        default:
            break
    }
}

</script>
