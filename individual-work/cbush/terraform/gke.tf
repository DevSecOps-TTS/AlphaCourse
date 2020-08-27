variable "gke_username" {
    default     = ""
    description = "gke_username"
}

variable "gke_password"  {
    default     = ""
    description = "gke_password"
}

variable "gke_node_count"  {
    default     = 2
    description = "number of gke nodes"
}

# CLUSTER

resource "google_container_cluster" "primary" {
    name                        = "${var.project_id}-gke" 
    location                    = var.region
    remove_default_node_pool    = true
    initial_node_count           = 1
    network                     = google_compute_network.vpc.name
    subnetwork                  = google_compute_subnetwork.subnet.name
    master_auth {
        username                = var.gke_username
        password                = var.gke_password
        client_certificate_config {
            issue_client_certificate = false
        }
    }
}