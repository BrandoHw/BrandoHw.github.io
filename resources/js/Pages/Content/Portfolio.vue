
<template>
<v-app data-app>
  <v-main>
        <div class="content-wrapper">
            <div class="content">
        
                <v-expansion-panels
                   v-for="(project, index) in projects" 
                   :key="project.id"
                   :value=0
                >
                    <v-expansion-panel>
                        <v-expansion-panel-header color="darkred">
                            {{project.title}}
                        </v-expansion-panel-header>
                        <v-expansion-panel-content>
                            <div class=row>
                                <div class="col-md-6 col-12">
                                    <div class="project-subtitle-1">{{project.subtitle1}}</div>
                                    <div class="project-subtitle-2">{{project.subtitle2}}</div>
                                    <div class="project-description">
                                        <ul>
                                            <li v-for="item in project.list" :key="item.description">
                                                {{ item.description }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="project-tech"> 
                                        <div class="technologies-title">Technologies</div>
                                        <ul>
                                             <li v-for="item in project.tech" :key="item.name">
                                                {{ item.name }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">

                                    <v-dialog
                                    v-model="dialog[index]"
                                    width="80%"
                                    :fullscreen="$vuetify.breakpoint.xsOnly">
                                    >
                                        <template v-slot:activator="{ on, attrs }">
                                  
                                            <v-carousel height="auto">
                                                <v-carousel-item
                                                    v-for="c in image_slides[project.id]"
                                                    :key="c"
                                                    :src="c"
                                                    v-bind="attrs"
                                                    v-on="on"
                                                >
                                                </v-carousel-item>
                                            </v-carousel>
                                        </template>
                                
                                        <v-card>
                                        <!-- <v-card-title class="text-h5 grey lighten-2">
                                            Privacy Policy
                                        </v-card-title>
                                 -->
                                           <v-carousel height="auto">
                                                <v-carousel-item
                                                    v-for="c in image_slides[project.id]"
                                                    :key="c"
                                                    :src="c"
                                                >
                                                </v-carousel-item>
                                            </v-carousel>
                                
                                        <!-- <v-divider></v-divider> -->
                                
                                        <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-btn
                                            color="primary"
                                            text
                                            @click="dialog[index] = false;"
                                            >
                                            Close
                                            </v-btn>
                                        </v-card-actions>
                                        </v-card>
                                    </v-dialog>
                                </div>
                            </div>
                         </v-expansion-panel-content>
                    </v-expansion-panel>
                </v-expansion-panels>
            </div>
        </div>
     
    </v-main>
</v-app>

</template>

<script>
import Layout from '@/Pages/Layout/Layout';
export default {
    layout: Layout,
    props: [
        'carousel_images'
    ],
    methods: {
        testFunction: function (index) {
            console.log(this.dialog);
            console.log(this.dialog[index]);
            this.dialog[index] = false;
            console.log(this.dialog[index]);
        }
    },
    data(){
     return{
        image_slides: this.carousel_images,
        dialog: {},
        projects: [
            { 
                id: 'wecare',
                title: "WeCare - St. John's Home / KLIA",
                subtitle1: "",
                subtitle2: "WeCare is an IoT platform utilizing bluetooth beacons to track and manage personnel within a business premises.",
                list: [
                    {description: 'Monitors and displays the location of personnel on 2D mapping software'},
                    {description: 'Policy-based alert and notification generation for various criteria including geofencing, attendance, fall detection, and battery life'},
                    {description: 'Hosted on the cloud with AWS services'},
                    {description: "Deployed for use in St. John's Home for Elderly Persons and Kuala Lumpur International Airport 2"},
                ],
                tech: [
                    {name: 'PHP'},
                    {name: 'Laravel'},
                    {name: 'Javascript'},
                    {name: 'Leaflet'},
                    {name: 'AWS'},
                ]
            },
            { 
                id: 'boingtech',
                title: 'Smart Factory - BoingTech',
                subtitle1: "",
                subtitle2: "This Smart Factory is an IoT integrated factory monitoring platform for use in BoingTech manufacturing facilities.",
                list: [
                    {description: `Collects and visualizes data from various monitoring devices 
                    including humidity, temperature, air pressure, electricity usage, die production and multiple other parameters`},
                    {description: `Attendance module integrated with a Face-Recognition System to track factory employee attendance, and log
                    attendance based metrics such as hours-worked, days late, total overtime`},
                    {description: `MySQL database hosted in IBMCloud, with app deployment on local rack server`},
                ],
                  tech: [
                    {name: 'PHP'},
                    {name: 'Laravel'},
                    {name: 'Javascript'},
                    {name: 'IBMCloud'},
                ]
            },
             { 
                id: 'mediceram',
                title: 'Manufacture monitoring software - Mediceram',
                subtitle1: "",
                subtitle2: "This Smart Factory is an IoT integrated factory monitoring platform for use in BoingTech manufacturing facilities",
                list: [
                    {description: `Collects and visualizes data from various monitoring devices 
                    including humidity, temperature, air pressure, electricity usage, die production and multiple other parameters`},
                    {description: `Attendance module integrated with a Face-Recognition System to track factory employee attendance, and log
                    attendance based metrics such as hours-worked, days late, total overtime`},
                    {description: `MySQL database hosted in IBMCloud, with app deployment on local rack server`},
                ],
                  tech: [
                    {name: 'PHP'},
                    {name: 'Laravel'},
                    {name: 'Javascript'},
                    {name: 'Vue'},
                    {name: 'InertiaJS'},
                    {name: 'IBMCloud'},
                ]
            },
        ],
     }
    },
    mounted(){
    }
}
</script>