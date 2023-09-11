<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace GPBMetadata\Proto\Clarifai\Api;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Proto\Clarifai\Api\Status\Status::initOnce();
        \GPBMetadata\Proto\Clarifai\Api\Status\StatusCode::initOnce();
        \GPBMetadata\Proto\Clarifai\Api\Utils\Extensions::initOnce();
        \GPBMetadata\Proto\Clarifai\Api\Utils\Matrix::initOnce();
        \GPBMetadata\Proto\Clarifai\Auth\Util\Extension::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
ā¬
"proto/clarifai/api/resources.protoclarifai.api+proto/clarifai/api/status/status_code.proto)proto/clarifai/api/utils/extensions.proto%proto/clarifai/api/utils/matrix.proto(proto/clarifai/auth/util/extension.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.proto"

Annotation

id (	
input_id (	 
data (2.clarifai.api.Data0
annotation_info (2.google.protobuf.Struct
user_id (	
model_version_id (	"
embed_model_version_id (	B+
status (2.clarifai.api.status.Status.

created_at (2.google.protobuf.Timestamp/
modified_at	 (2.google.protobuf.Timestamp
trusted
 (B
input_level (/
consensus_info (2.google.protobuf.Struct
task_id (	
workflow_version_id (	JJJJJ"
App

id (	
name (	
default_language (	
default_workflow_id (	0
default_workflow (2.clarifai.api.Workflow
user_id (	.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp
legal_consent_status ()
metadata (2.google.protobuf.Struct
description (	
	sample_ms (,

visibility (2.clarifai.api.Visibility
data_tier_id (	

is_starred (

star_count (
notes (	"
image (2.clarifai.api.ImageJ
JJ"
AppQuery
name (	"
Collaborator

id (	
app (2.clarifai.api.App 
user (2.clarifai.api.User
scopes (	
	endpoints (	.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp.

deleted_at (2.google.protobuf.Timestamp"©
Collaboration
app (2.clarifai.api.App%
	app_owner (2.clarifai.api.User
scopes (	
	endpoints (	.

created_at (2.google.protobuf.Timestamp"
Audio
url (	
base64 (
allow_duplicate_url (\'
hosted (2.clarifai.api.HostedURL+

audio_info (2.clarifai.api.AudioInfo"b
	AudioInfo
audio_format (	
sample_rate (
duration_seconds (
bit_rate ("w
Track

id (	 
data (2.clarifai.api.Data)
	time_info (2.clarifai.api.TimeInfo
quality (J"h
Cluster

id (	
count (
score (
hits (2.clarifai.api.Hit

projection ("M
Color
raw_hex (	
w3c (2.clarifai.api.W3C
value (Bµ" 
W3C
hex (	
name (	"/
UserAppIDSet
user_id (	
app_id (	"J
PatchAction

op (	!
merge_conflict_resolution (	
path (	"Ż
Concept

id (	
name (	
value (BÕµ  ?µ.

created_at (2.google.protobuf.Timestamp
language (	
app_id (	

definition (	
vocab_id (	,

visibility	 (2.clarifai.api.Visibility
user_id
 (	1
keypoint_info (2.clarifai.api.KeypointInfo2

extra_info (2.clarifai.api.ConceptExtraInfo"T
KeypointInfo
keypoint_names (	,
skeleton (2.clarifai.api.KeypointEdge"&
KeypointEdge

k1 (

k2 ("\'
ConceptExtraInfo
is_rankable ("¤
ConceptCount

id (	
name (	:
concept_type_count (2.clarifai.api.ConceptTypeCount>
detail_concept_count (2 .clarifai.api.DetailConceptCount"B
ConceptTypeCount
positive (Bµ
negative (Bµ"ß
DetailConceptCount1
	processed (2.clarifai.api.ConceptTypeCount2

to_process (2.clarifai.api.ConceptTypeCount.
errors (2.clarifai.api.ConceptTypeCount2

processing (2.clarifai.api.ConceptTypeCount"C
ConceptQuery
name (	
language (	
workflow_id (	"Ł
ConceptRelation

id (	.
subject_concept (2.clarifai.api.Concept-
object_concept (2.clarifai.api.Concept
	predicate (	
knowledge_graph_id (	,

visibility (2.clarifai.api.Visibility"y
KnowledgeGraph

id (	
name (	
description (	
examples_app_id (	
sampled_examples_app_id (	"D
ConceptMappingJob
knowledge_graph_id (	
concept_ids (	"?
ConceptLanguage

id (	
name (	

definition (	"ś
Data"
image (2.clarifai.api.Image"
video (2.clarifai.api.Video\'
concepts (2.clarifai.api.Concept)
metadata (2.google.protobuf.Struct
geo (2.clarifai.api.Geo#
colors (2.clarifai.api.Color\'
clusters (2.clarifai.api.Cluster+

embeddings	 (2.clarifai.api.Embedding%
regions (2.clarifai.api.Region#
frames (2.clarifai.api.Frame 
text (2.clarifai.api.Text"
audio (2.clarifai.api.Audio#
tracks (2.clarifai.api.Track0
time_segments (2.clarifai.api.TimeSegment
hits (2.clarifai.api.Hit%
heatmaps (2.clarifai.api.ImageJJ
"
Region

id (	-
region_info (2.clarifai.api.RegionInfo 
data (2.clarifai.api.Data
value (
track_id (	"®

RegionInfo/
bounding_box (2.clarifai.api.BoundingBox 
mask (2.clarifai.api.Mask&
polygon (2.clarifai.api.Polygon"
point (2.clarifai.api.Point 
span (2.clarifai.api.Span"
token (2.clarifai.api.Token/
keypoint_locations	 (2.clarifai.api.PointJJ"o
BoundingBox
top_row (Bµ
left_col (Bµ

bottom_row (Bµ
	right_col (Bµ"4
	FrameInfo
index (Bµ
time (Bµ"b
Frame+

frame_info (2.clarifai.api.FrameInfo 
data (2.clarifai.api.Data

id (	"0
Mask"
image (2.clarifai.api.ImageJ".
Polygon#
points (2.clarifai.api.Point"¶
Point
row (Bµ
col (Bµ	
z (2

visibility (2.clarifai.api.Point.Visibility"H

Visibility
NOT_SET 
VISIBLE
NOT_VISIBLE
NOT_PRESENT"J
Span

char_start (Bµ
char_end (Bµ
raw_text (	"K
Token

char_start (Bµ
char_end (Bµ
raw_text (	"7
	Embedding
vector (B
num_dimensions (";
GeoPoint
	longitude (Bµ
latitude (Bµ"-
GeoLimit
type (	
value (Bµ":
GeoBoxedPoint)
	geo_point (2.clarifai.api.GeoPoint"
Geo)
	geo_point (2.clarifai.api.GeoPoint)
	geo_limit (2.clarifai.api.GeoLimit,
geo_box (2.clarifai.api.GeoBoxedPoint"
Image
url (	
base64 (
allow_duplicate_url (\'
hosted (2.clarifai.api.HostedURL+

image_info (2.clarifai.api.ImageInfoJ"N
	ImageInfo
width (
height (
format (	

color_mode (	"O
	HostedURL
prefix (	
suffix (	
sizes (	
crossorigin (	"Ž
Input

id (	 
data (2.clarifai.api.Data.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp+
status (2.clarifai.api.status.Status
dataset_ids (	J"1

InputBatch#
inputs (2.clarifai.api.Input"Ś

InputCount
	processed (Bµ

to_process (Bµ
errors (Bµ

processing (Bµ
	reindexed (Bµ

to_reindex (Bµ
reindex_errors (Bµ

reindexing (Bµ"¾
Dataset

id (	.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp
app_id (	
user_id (	
description (	)
metadata (2.google.protobuf.Struct,

visibility	 (2.clarifai.api.VisibilityA
default_annotation_filter (2.clarifai.api.AnnotationFilterK
default_processing_info (2*.clarifai.api.DatasetVersionProcessingInfo
notes (	-
version (2.clarifai.api.DatasetVersion

is_starred (

star_count (5
bookmark_origin (2.clarifai.api.BookmarkOriginJJ
"Ų
AnnotationFilter

id (	.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp
user_id (	
app_id (	*
saved_search (2.clarifai.api.SearchJJ"b
DatasetInput.

created_at (2.google.protobuf.Timestamp"
input (2.clarifai.api.Input"®
DatasetVersion

id (	.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp
app_id (	
user_id (	

dataset_id (	H
annotation_filter_config (2$.clarifai.api.AnnotationFilterConfigH @
model_predict_config (2 .clarifai.api.ModelPredictConfigH +
status (2.clarifai.api.status.Status
description
 (	C
processing_info (2*.clarifai.api.DatasetVersionProcessingInfo:
metrics (2).clarifai.api.DatasetVersion.MetricsEntry;
export_info (2&.clarifai.api.DatasetVersionExportInfo)
metadata (2.google.protobuf.Struct,

visibility (2.clarifai.api.Visibility
embed_model_version_ids (	S
MetricsEntry
key (	2
value (2#.clarifai.api.DatasetVersionMetrics:8B
data_configJJ	
J"p
AnnotationFilterConfig9
annotation_filter (2.clarifai.api.AnnotationFilter
ignore_empty_inputs ("8
ModelPredictConfig"
model (2.clarifai.api.Model"Ć
DatasetVersionMetrics2
inputs_count (2.google.protobuf.UInt64Value<
unlabeled_inputs_count (2.google.protobuf.UInt64Value@
inputs_with_metadata_count (2.google.protobuf.UInt64Value;
inputs_with_geo_count	 (2.google.protobuf.UInt64Value3
regions_count (2.google.protobuf.UInt64Value-
region_location_matrix (2.MatrixUint64:
bounding_boxes_count (2.google.protobuf.UInt64Value4
polygons_count (2.google.protobuf.UInt64Value2
points_count (2.google.protobuf.UInt64Value1
masks_count (2.google.protobuf.UInt64Value9
region_inputs_count< (2.google.protobuf.UInt64Value9
region_frames_count= (2.google.protobuf.UInt64Value2
frames_count (2.google.protobuf.UInt64Value8
frame_inputs_countF (2.google.protobuf.UInt64Value6
embeddings_count( (2.google.protobuf.UInt64Value?
positive_input_tags_count2 (2.google.protobuf.UInt64Value@
positive_region_tags_count3 (2.google.protobuf.UInt64Value?
positive_frame_tags_count4 (2.google.protobuf.UInt64ValueJJJJJ"Ź
DatasetVersionMetricsGroup
parent_path (	:
type (2,.clarifai.api.DatasetVersionMetricsGroupType%
value (2.google.protobuf.Value4
metrics (2#.clarifai.api.DatasetVersionMetrics"Š
DatasetVersionExportInfoB
clarifai_data_protobuf (2".clarifai.api.DatasetVersionExport>
clarifai_data_json (2".clarifai.api.DatasetVersionExport0
coco (2".clarifai.api.DatasetVersionExport"“
DatasetVersionExport8
format (2(.clarifai.api.DatasetVersionExportFormat+
status (2.clarifai.api.status.Status
url (	
size (
include_embeddings ("f
DatasetVersionProcessingInfoF
frame_interpolation_info (2$.clarifai.api.FrameInterpolationInfo"+
FrameInterpolationInfo
	sample_ms ("n
WorkflowResultsSimilarity(
probe_input (2.clarifai.api.Input\'
pool_results (2.clarifai.api.Hit"ō
Key

id (	
type (	
description (	
scopes (	
	endpoints (	
apps (2.clarifai.api.App.

created_at (2.google.protobuf.Timestamp.

expires_at (2.google.protobuf.Timestamp
authorized_idp_ids	 (	"
Model

id (	
name (	B.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp
app_id (	Bµ1
output_info (2.clarifai.api.OutputInfoB1
model_version (2.clarifai.api.ModelVersion
display_name (	B
user_id	 (	1
default_eval_info (2.clarifai.api.EvalInfo
model_type_id (	
task (	,

visibility (2.clarifai.api.Visibility
description (	)
metadata (2.google.protobuf.Struct(
presets (2.google.protobuf.Struct
notes (	
toolkits (	Bµ
	use_cases (	Bµ
	languages (	Bµ3
languages_full (2.clarifai.api.FullTagBµ
check_consents  (	Bµ

is_starred (

star_count (8
workflow_recommended (2.google.protobuf.BoolValue5
bookmark_origin! (2.clarifai.api.BookmarkOriginJ	J
JJJJJ"t
ModelReference

id (	
model_id (	
url (	
name (	)
metadata (2.google.protobuf.Struct"
ModelVersionInputExample

id (	
model_id (	
model_version_id (	 
data (2.clarifai.api.Data
name (	
description (	"Ō

OutputInfo 
data (2.clarifai.api.Data1
output_config (2.clarifai.api.OutputConfig
message (	+

fields_map (2.google.protobuf.Struct\'
params (2.google.protobuf.StructJJ"
	InputInfo+

fields_map (2.google.protobuf.Struct\'
params (2.google.protobuf.Struct-
base_embed_model (2.clarifai.api.Model"\\
	TrainInfo\'
params (2.google.protobuf.Struct&
dataset (2.clarifai.api.Dataset"3
EvalInfo\'
params (2.google.protobuf.Struct"5

ImportInfo\'
params (2.google.protobuf.Struct"ć
OutputConfig\'
concepts_mutually_exclusive (B
existing_model_id (	B
language (	
hyper_parameters (	B
max_concepts (Bµ
	min_value (Bµ.
select_concepts (2.clarifai.api.Concept
training_timeout	 (
	sample_ms
 (-
hyper_params (2.google.protobuf.Struct"
embed_model_version_id (	B)
!fail_on_missing_positive_examples (3
model_metadata (2.google.protobuf.StructBJJJJ"Ņ
	ModelType

id (	
title (	
description (	
input_fields (	
output_fields (	
	trainable (
	creatable	 (
internal_only
 (7
model_type_fields (2.clarifai.api.ModelTypeField"
requires_sequential_frames (;
expected_input_layers (2.clarifai.api.ModelLayerInfo<
expected_output_layers (2.clarifai.api.ModelLayerInfo5
evaluation_type (2.clarifai.api.EvaluationTypeJJJJJ"
ModelLayerInfo
data_field_name (	(
shapes (2.clarifai.api.LayerShape
description (	
requires_label_filename ("D
TritonCondaEnvInfo
conda_pack_url (	
conda_yaml_url (	"l

LayerShape
dims (
max_dims ()
	data_type (2.clarifai.api.DataType
description (	"
ModelTypeField
path (	C

field_type (2/.clarifai.api.ModelTypeField.ModelTypeFieldType-
default_value (2.google.protobuf.Value
description (	
placeholder (	B
model_type_enum_options (2!.clarifai.api.ModelTypeEnumOption
internal_only (
required (?
model_type_range_info	 (2 .clarifai.api.ModelTypeRangeInfo"¤
ModelTypeFieldType!
INVALID_MODEL_TYPE_FIELD_TYPE 
BOOLEAN

STRING

NUMBER
ARRAY_OF_CONCEPTS$
 ARRAY_OF_CONCEPTS_WITH_THRESHOLD	
RANGE
ENUM
COLLABORATORS	
JSON

ARRAY_OF_NUMBERS
WORKFLOW_EMBED_MODELS
ARRAY_OF_STRINGS
RECURSIVE_ENUM
PYTHON_CODE

DATASET_ID
DATASET_VERSION_ID
ARRAY_OF_MODEL_CONCEPTS
DATASET
DATASET_VERSION""<
ModelTypeRangeInfo
min (
max (
step ("Ō
ModelTypeEnumOption

id (	7
aliases (2&.clarifai.api.ModelTypeEnumOptionAlias
description (	7
model_type_fields (2.clarifai.api.ModelTypeField
internal_only (
recommended ("C
ModelTypeEnumOptionAlias
id_int (
wildcard_string (	"7

ModelQuery
name (	
model_type_id (	J"ü
ModelVersion

id (	.

created_at (2.google.protobuf.Timestamp+
status (2.clarifai.api.status.Status
active_concept_count (*
metrics (2.clarifai.api.EvalMetrics
total_input_count (D
pretrained_model_config (2#.clarifai.api.PretrainedModelConfig0
completed_at
 (2.google.protobuf.Timestamp
description (	,

visibility (2.clarifai.api.Visibility
app_id (	
user_id (	/
modified_at (2.google.protobuf.Timestamp)
metadata (2.google.protobuf.Struct
license (	-
output_info (2.clarifai.api.OutputInfo+

input_info (2.clarifai.api.InputInfo+

train_info (2.clarifai.api.TrainInfo-
import_info (2.clarifai.api.ImportInfo
	train_log (	J	
J"”
PretrainedModelConfig1
input_fields_map (2.google.protobuf.Struct2
output_fields_map (2.google.protobuf.Struct
model_zip_url (	JJ">

TrainStats0

loss_curve (2.clarifai.api.LossCurveEntry"B
LossCurveEntry
epoch (
global_step (
cost ("]

LabelCount
concept_name (	B
count (&
concept (2.clarifai.api.Concept"L
LabelDistribution7
positive_label_counts (2.clarifai.api.LabelCount"B
CooccurrenceMatrixEntry
row (	
col (	
count ("`
CooccurrenceMatrix5
matrix (2%.clarifai.api.CooccurrenceMatrixEntry
concept_ids (	"Æ
ConfusionMatrixEntry
	predicted (	
actual (	
value (Bµ0
predicted_concept (2.clarifai.api.Concept-
actual_concept (2.clarifai.api.Concept"Z
ConfusionMatrix2
matrix (2".clarifai.api.ConfusionMatrixEntry
concept_ids (	"t
ROC
fpr (Bµ
tpr (Bµ

thresholds (Bµ
fpr_per_image (
fpr_per_object ("_
PrecisionRecallCurve
recall (Bµ
	precision (Bµ

thresholds (Bµ"ź
BinaryMetrics
num_pos (Bµ
num_neg (Bµ
num_tot (Bµ
roc_auc (Bµ
f1 (Bµ&
concept (2.clarifai.api.Concept$
	roc_curve (2.clarifai.api.ROCB
precision_recall_curve (2".clarifai.api.PrecisionRecallCurve
avg_precision	 (
	area_name
 (	
area_min (
area_max (
iou ("
TrackerMetrics
mot_mota (
mot_num_switches (

morse_frag (
avg_precision (
aiid (	
unique_switch_rate ("Ł
EvalTestSetEntry"
input (2.clarifai.api.Input1
predicted_concepts (2.clarifai.api.Concept4
ground_truth_concepts (2.clarifai.api.Concept,

annotation (2.clarifai.api.AnnotationJJ"Ķ
LOPQEvalResult	
k (#
recall_vs_brute_force (Bµ(
kendall_tau_vs_brute_force (Bµ(
most_frequent_code_percent (Bµ
	lopq_ndcg (Bµ
brute_force_ndcg (Bµ"
MetricsSummary
top1_accuracy (B
top5_accuracy (B
macro_avg_roc_auc (Bµ
macro_std_roc_auc (Bµ 
macro_avg_f1_score (Bµ 
macro_std_f1_score (Bµ!
macro_avg_precision (Bµ
macro_avg_recall (Bµ!
mean_avg_precision_iou_50
 ($
mean_avg_precision_iou_range (2
lopq_metrics	 (2.clarifai.api.LOPQEvalResult"Ō
EvalMetrics+
status (2.clarifai.api.status.Status
user_id (	
app_id (	

id
 (	"
model (2.clarifai.api.Model3
ground_truth_dataset (2.clarifai.api.Dataset-
summary (2.clarifai.api.MetricsSummary7
confusion_matrix (2.clarifai.api.ConfusionMatrix=
cooccurrence_matrix (2 .clarifai.api.CooccurrenceMatrix5
label_counts (2.clarifai.api.LabelDistribution3
binary_metrics (2.clarifai.api.BinaryMetrics0
test_set (2.clarifai.api.EvalTestSetEntry4
metrics_by_area (2.clarifai.api.BinaryMetrics5
metrics_by_class	 (2.clarifai.api.BinaryMetrics5
tracker_metrics (2.clarifai.api.TrackerMetrics)
	eval_info (2.clarifai.api.EvalInfo"·
FieldsValue
confusion_matrix (
cooccurrence_matrix (
label_counts (
binary_metrics (
test_set (
metrics_by_area (
metrics_by_class ("Ū
Output

id (	+
status (2.clarifai.api.status.Status.

created_at (2.google.protobuf.Timestamp"
model (2.clarifai.api.Model"
input (2.clarifai.api.Input 
data (2.clarifai.api.Data"4
	ScopeDeps
scope (	
depending_scopes (	":
EndpointDeps
endpoint (	
depending_scopes (	"
Hit
score (Bµ"
input (2.clarifai.api.Input,

annotation (2.clarifai.api.Annotation
user_id (	
app_id (	"#
HitCount
estimated_total ("
And"
input (2.clarifai.api.Input$
output (2.clarifai.api.Output
negate (,

annotation (2.clarifai.api.Annotation"
Query#
ands (2.clarifai.api.AndB
language (	%
filters (2.clarifai.api.Filter!
ranks (2.clarifai.api.Rank"Ö
Search"
query (2.clarifai.api.Query

id (	
application_id (	
name (	)
as_of (2.google.protobuf.Timestamp
git_hash (	.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp
	algorithm	 (	
save
 (
	min_value (,

visibility (2.clarifai.api.Visibility+
metric (2.clarifai.api.Search.Metric"I
Metric
METRIC_NOT_SET 
EUCLIDEAN_DISTANCE
COSINE_DISTANCE"¤
Filter
negate (,

annotation (2.clarifai.api.Annotation"
input (2.clarifai.api.Input8
last_updated_time_range (2.clarifai.api.TimeRange"i
	TimeRange.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp"D
Rank
negate (,

annotation (2.clarifai.api.Annotation"
AnnotationSearchMetrics*
ground_truth (2.clarifai.api.Search,
search_to_eval (2.clarifai.api.Search*
metrics (2.clarifai.api.EvalMetrics 
data (2.clarifai.api.Data
active_concept_count (,

visibility (2.clarifai.api.Visibility"
Text
raw (	
url (	
allow_duplicate_url (\'
hosted (2.clarifai.api.HostedURL)
	text_info (2.clarifai.api.TextInfo"0
TextInfo

char_count (
encoding (	"ü
User

id (	
primary_email (	B

first_name (	
	last_name (	
company_name (	
	job_title (	
job_role (	
	bill_type (	B.

created_at (2.google.protobuf.Timestamp9
date_gdpr_consent (2.google.protobuf.TimestampB8
date_tos_consent	 (2.google.protobuf.TimestampB>
date_marketing_consent
 (2.google.protobuf.TimestampB8
date_pii_consent (2.google.protobuf.TimestampB-
metadata (2.google.protobuf.StructB7
email_addresses (2.clarifai.api.EmailAddressB#
two_factor_auth_enabled (B
teams_count (B

is_starred (

star_count (,

visibility (2.clarifai.api.Visibility-
user_detail (2.clarifai.api.UserDetailJJ"Ń

UserDetail
primary_email (	
	bill_type (	5
date_gdpr_consent (2.google.protobuf.Timestamp4
date_tos_consent (2.google.protobuf.Timestamp:
date_marketing_consent (2.google.protobuf.Timestamp4
date_pii_consent (2.google.protobuf.Timestamp)
metadata (2.google.protobuf.Struct3
email_addresses (2.clarifai.api.EmailAddress
two_factor_auth_enabled	 (
teams_count
 (
country (	
state (	J	"R
EmailAddress
email (	Bµ
primary (Bµ
verified (Bµ"
Password
	plaintext (	"
PasswordViolations
minimum_length (
maximum_length (
upper_case_needed (
lower_case_needed (
numeric_needed (
non_alphanumeric_needed (
password_reuse (
exclude_names (
exclude_email	 (
no_confusing_letters
 (
no_simple_passwords (
no_common_vocabs (
no_overlap_with_old (
password_lifespan ("®
Video
url (	
base64 (
allow_duplicate_url (
thumbnail_url (	\'
hosted (2.clarifai.api.HostedURL+

video_info (2.clarifai.api.VideoInfo"
	VideoInfo
width (
height (
fps (
video_format (	
bit_rate (
frame_count (
duration_seconds ("
Workflow

id (	
app_id (	.

created_at (2.google.protobuf.Timestamp)
nodes (2.clarifai.api.WorkflowNode)
metadata (2.google.protobuf.Struct,

visibility (2.clarifai.api.Visibility
user_id (	/
modified_at (2.google.protobuf.Timestamp.
version	 (2.clarifai.api.WorkflowVersion

is_starred
 (

star_count (
description (	
notes (	
	use_cases (	Bµ
check_consents (	Bµ5
bookmark_origin (2.clarifai.api.BookmarkOrigin"Ž
WorkflowVersion

id (	
workflow_id (	.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp,

visibility (2.clarifai.api.Visibility)
nodes (2.clarifai.api.WorkflowNode)
metadata (2.google.protobuf.Struct
app_id (	
user_id	 (	
description
 (	
license (	"½
WorkflowNode

id (	"
model (2.clarifai.api.Model,
node_inputs (2.clarifai.api.NodeInput
suppress_output (6
output_info_override (2.clarifai.api.OutputInfo"
	NodeInput
node_id (	"
WorkflowResult

id (	+
status (2.clarifai.api.status.Status.

created_at (2.google.protobuf.Timestamp"
model (2.clarifai.api.Model"
input (2.clarifai.api.Input%
outputs (2.clarifai.api.Output
suppress_output ("
WorkflowState

id (	"Ų
AppDuplication

id (	

new_app_id (	
new_app_name (	+
status (2.clarifai.api.status.Status.

created_at (2.google.protobuf.Timestamp4
last_modified_at (2.google.protobuf.Timestamp3
filter (2#.clarifai.api.AppDuplicationFilters
existing_app_id (	/
progress	 (2.clarifai.api.AppCopyProgress"/
AppCopyProgress
field (	
value ("
AppDuplicationFilters
copy_inputs (
copy_concepts (
copy_annotations (
copy_models (
copy_workflows ("ś

LabelOrder

id (	
name (	+
status (2.clarifai.api.status.Status
auto_release (
allow_empty_tag (8
desired_fulfill_time (2.google.protobuf.Timestamp9
estimate_fulfill_time (2.google.protobuf.Timestamp 
task (2.clarifai.api.Task.

created_at	 (2.google.protobuf.Timestamp/
modified_at
 (2.google.protobuf.Timestamp"»
Task

id (	.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp)
type (2.clarifai.api.Task.TaskType
description (	(
worker (2.clarifai.api.TaskWorker
concept_ids (	B3
input_source (2.clarifai.api.TaskInputSource
	sample_ms	 (3
ai_assistant
 (2.clarifai.api.TaskAIAssistant(
review (2.clarifai.api.TaskReview+
status (2.clarifai.api.status.Status
name (	:
ai_assist_params (2 .clarifai.api.AiAssistParameters,

visibility (2.clarifai.api.Visibility
app_id (	
user_id (	
label_order_id (	+
concepts (2.clarifai.api.TaskConcept#
delete_previous_annotations ("l
TaskType
TYPE_NOT_SET 
CONCEPTS_CLASSIFICATION
BOUNDING_BOX_DETECTION
POLYGON_DETECTION"`
AiAssistParameters
min_threshold (
max_threshold (
concept_relation_ids (	"

TaskWorker=
strategy (2+.clarifai.api.TaskWorker.TaskWorkerStrategy
user_ids (	B!
users (2.clarifai.api.User#
models (2.clarifai.api.Model)
	workflows (2.clarifai.api.WorkflowT
partitioned_strategy_info (2/.clarifai.api.TaskWorkerPartitionedStrategyInfoH "R
TaskWorkerStrategy
WORKER_STRATEGY_NOT_SET 
PARTITIONED
FULL"B
strategy_info"©
!TaskWorkerPartitionedStrategyInfo[
type (2M.clarifai.api.TaskWorkerPartitionedStrategyInfo.TaskWorkerPartitionedStrategy
workers_per_input ((
weights (2.google.protobuf.Struct"b
TaskWorkerPartitionedStrategy\'
#PARTITIONED_WORKER_STRATEGY_NOT_SET 

EVENLY
WEIGHTED"Ć
TaskInputSource?
type (21.clarifai.api.TaskInputSource.TaskInputSourceType

id (	"c
TaskInputSourceType
INPUT_SOURCE_TYPE_NOT_SET 

ALL_INPUTS
SAVED_SEARCH
DATASET"

TaskReview=
strategy (2+.clarifai.api.TaskReview.TaskReviewStrategy
user_ids (	B!
users (2.clarifai.api.UserJ
manual_strategy_info (2*.clarifai.api.TaskReviewManualStrategyInfoH P
consensus_strategy_info (2-.clarifai.api.TaskReviewConsensusStrategyInfoH "[
TaskReviewStrategy 
TASK_REVIEW_STRATEGY_NOT_SET 
NONE

MANUAL
	CONSENSUSB
strategy_info"9
TaskReviewManualStrategyInfo
sample_percentage ("C
TaskReviewConsensusStrategyInfo
approval_threshold (J"&
TaskAIAssistant
workflow_id (	"¼
TaskStatusCountPerUser
user_id (	
pending (Bµ
awaiting_review (Bµ
success (Bµ
review_denied (Bµ\'
awaiting_consensus_review (Bµ"f
ThresholdRange
is_lower_inclusive (
is_upper_inclusive (
lower (
upper ("­
TaskConceptAutoAnnotationConfig
annotation_data_types (5
threshold_range (2.clarifai.api.ThresholdRange4
status_code (2.clarifai.api.status.StatusCode"
TaskConcept&
concept (2.clarifai.api.ConceptM
auto_annotation_config (2-.clarifai.api.TaskConceptAutoAnnotationConfig"
	Collector

id (	
description (	.

created_at (2.google.protobuf.Timestamp
pre_queue_workflow_id (	
post_queue_workflow_id (	7
collector_source (2.clarifai.api.CollectorSource+
status (2.clarifai.api.status.Status"t
CollectorSourcea
\'api_post_model_outputs_collector_source (20.clarifai.api.APIPostModelOutputsCollectorSource"±
"APIPostModelOutputsCollectorSource
model_user_id (	
model_app_id (	
model_id (	
model_version_id (	
post_inputs_key_id (	
caller_user_id (	"R
	StatValue(
time (2.google.protobuf.Timestamp
value (
tags (	"¦
StatValueAggregateResult?
stat_value_aggregates (2 .clarifai.api.StatValueAggregateI
stat_value_aggregate_query (2%.clarifai.api.StatValueAggregateQuery"t
StatValueAggregate(
time (2.google.protobuf.Timestamp
aggregate_value (
count (
tags (	"
StatValueAggregateQuery
tags (	

tag_groups (	;
stat_value_agg_type (2.clarifai.api.StatValueAggType9
stat_time_agg_type (2.clarifai.api.StatTimeAggType.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp"ļ
DatasetInputsSearchAddJob

id (	.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp+
status (2.clarifai.api.status.Status

dataset_id (	$
search (2.clarifai.api.Search"O
PCAProjectionComparator
distance_threshold (
model_version_id (	"K
DuplicateAnnotationsResults
duplicate_cfid (	
unique_count ("

Visibility3
gettable (2!.clarifai.api.Visibility.Gettable"D
Gettable
UNKNOWN_VISIBILITY 
PRIVATE

ORG

PUBLIC2"X
TrendingMetric
user_id (	
app_id (	
	object_id (	

view_count ("#
FullTag
name (	

id (	"f
TimeSegment

id (	 
data (2.clarifai.api.Data)
	time_info (2.clarifai.api.TimeInfo"D
TimeInfo

num_frames (

begin_time (
end_time ("!
DatasetStar

dataset_id (	"

ModuleStar
	module_id (	"
Module

id (	
description (	.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp,

visibility (2.clarifai.api.Visibility)
metadata (2.google.protobuf.Struct
user_id	 (	
app_id
 (	3
module_version (2.clarifai.api.ModuleVersion

is_starred (

star_count (5
bookmark_origin (2.clarifai.api.BookmarkOriginJ"¾
ModuleVersion

id (	
	module_id (	
app_id (	
user_id (	
description (	
notes (	.

created_at (2.google.protobuf.Timestamp/
modified_at	 (2.google.protobuf.Timestamp
git_commit_url
 (	9

module_nav (2%.clarifai.api.ModuleVersion.ModuleNav
approved (,

visibility (2.clarifai.api.Visibility)
metadata (2.google.protobuf.StructE
ModuleSubNav
title (	
	query_key (	
query_value (	]
	ModuleNav
title (	A
module_sub_navs (2(.clarifai.api.ModuleVersion.ModuleSubNavJ"­
InstalledModuleVersion

id (	3
module_version (2.clarifai.api.ModuleVersion
app_id (	
user_id (	.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp

deploy_url (	,

visibility (2.clarifai.api.Visibility
key_id	 (	"·
BulkOperation

id (	+
	input_ids (2.clarifai.api.InputIDsH &
search
 (2.clarifai.api.SearchH (
dataset (2.clarifai.api.DatasetH *
	operation (2.clarifai.api.Operation
app_id (	+
status (2.clarifai.api.status.Status(
progress (2.clarifai.api.Progress

created_by (	.

created_at (2.google.protobuf.Timestamp4
last_modified_at	 (2.google.protobuf.TimestampB
input_source"
InputIDs
	input_ids (	"8
Progress
	processed (
last_processed_id (	"
	Operation1
add_concepts (2.clarifai.api.AddConceptsH 7
delete_concepts (2.clarifai.api.DeleteConceptsH 1
add_metadata (2.clarifai.api.AddMetadataH 7
delete_metadata (2.clarifai.api.DeleteMetadataH 3
overwrite_geo (2.clarifai.api.OverwriteGeoH -

delete_geo (2.clarifai.api.DeleteGeoH >
delete_from_dataset (2.clarifai.api.DeleteFromDatasetH 4
add_to_dataset (2.clarifai.api.AddToDatasetH >
split_into_datasets	 (2.clarifai.api.SplitIntoDatasetsH B
	operation"6
AddConcepts\'
concepts (2.clarifai.api.Concept"K
DeleteConcepts\'
concepts (2.clarifai.api.Concept
user_ids (	"8
AddMetadata)
metadata (2.google.protobuf.Struct";
DeleteMetadata)
metadata (2.google.protobuf.Struct".
OverwriteGeo
geo (2.clarifai.api.Geo"
	DeleteGeo""
AddToDataset

dataset_id (	"\'
DeleteFromDataset

dataset_id (	"Ė
SplitIntoDatasets2
dataset_splits (2.clarifai.api.DatasetSplitB
method (22.clarifai.api.SplitIntoDatasets.DatasetSplitMethod">
DatasetSplitMethod
NOT_SET 
RANDOM_PERCENTAGE_SPLIT"[
DatasetSplit&
dataset (2.clarifai.api.Dataset

percentage (H B
method_info"ū
InputsAddJob

id (	
call_back_url (	
app_pat (	4
progress (2".clarifai.api.InputsAddJobProgress.

created_at (2.google.protobuf.Timestamp/
modified_at	 (2.google.protobuf.Timestamp:
extraction_jobs
 (2!.clarifai.api.InputsExtractionJob%
uploads (2.clarifai.api.Upload+
status (2.clarifai.api.status.StatusJJJ"u
InputsAddJobProgress
pending_count (
in_progress_count (
success_count (
failed_count ("
Upload

id (	.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp.

expires_at (2.google.protobuf.Timestamp+
status (2.clarifai.api.status.Status
content_name (	
content_length (
content_url (	"K
UploadContentPart
range_start (
part_number (
data ("l
CustomCodeOperatorRequest#
inputs (2.clarifai.api.Input*
metadataź (2.google.protobuf.Struct"Č
InputsExtractionJob+
status (2.clarifai.api.status.Status

id (	
url (	;
progress (2).clarifai.api.InputsExtractionJobProgress.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.TimestampM
input_id_conflict_resolution (2\'.clarifai.api.InputIDConflictResolution"
InputsExtractionJobProgress
audio_inputs_count (
image_inputs_count (
video_inputs_count (
text_inputs_count (
pending_archives_count ("
in_progress_archives_count ( 
completed_archives_count (
failed_archives_count	 (J"¦
InputsDataSource
inputs_add_job_id (	(
url (2.clarifai.api.DataSourceURLM
input_id_conflict_resolution (2\'.clarifai.api.InputIDConflictResolution"V
DataSourceURL
url (	8
credentials (2#.clarifai.api.DataSourceCredentials"§
DataSourceCredentials*
s3_creds (2.clarifai.api.AWSCredsH 
	gcp_creds (H 8
azure_blob_creds (2.clarifai.api.AzureBlobCredsH B
credentialsJ"K
AWSCreds
region (	

id (	
secret (	
token (	J";
AzureBlobCreds
account_name (	
account_key (	"Æ
InputsUpload
inputs_add_job_id (	
app_pat (	$
upload (2.clarifai.api.UploadM
input_id_conflict_resolution (2\'.clarifai.api.InputIDConflictResolution"Ī
BookmarkOrigin

id (	
app_id (	
user_id (	@
resource_type (2).clarifai.api.BookmarkOrigin.BookmarkType"M
BookmarkType
unknown 	
model
workflow
dataset

module"Ö
Runner

id (	
description (	.

created_at (2.google.protobuf.Timestamp/
modified_at (2.google.protobuf.Timestamp)
metadata (2.google.protobuf.Struct
user_id (	
labels (	*ł
DatasetVersionMetricsGroupType.
*DATASET_VERSION_METRICS_GROUP_TYPE_NOT_SET 

INPUT_TYPE

CONCEPT_ID

CONCEPTS_COUNT
BOUNDING_BOXES_COUNT
POLYGONS_COUNT
POINTS_COUNT
MASKS_COUNT
PIXELS_COUNT
ASPECT_RATIO*
DatasetVersionExportFormat)
%DATASET_VERSION_EXPORT_FORMAT_NOT_SET 
CLARIFAI_DATA_PROTOBUF
CLARIFAI_DATA_JSON
COCO*H
ExpirationAction
EXPIRATION_ACTION_NOT_SET 	
DELAY

EXPIRY*M
LicenseScope
LICENSE_SCOPE_NOT_SET 
PREDICT	
TRAIN

SEARCH*P
DataType
	UNDEFINED 

STRING	
UINT8	
INT32	
INT64
FP32*
ValueComparator
CONCEPT_THRESHOLD_NOT_SET 
GREATER_THAN
GREATER_THAN_OR_EQUAL
	LESS_THAN
LESS_THAN_OR_EQUAL	
EQUAL*q
EvaluationType
	Undefined 
Classification
	Detection
Segmentation

Clustering
Tracker*f
APIEventType
API_EVENT_TYPE_NOT_SET 
ON_PREM_PREDICT
ON_PREM_TRAIN
ON_PREM_SEARCH*<
UsageIntervalType	
undef 
day	
month
year*}
AnnotationDataType 
ANNOTATION_DATA_TYPE_NOT_SET 
TAG
BOUNDING_BOX
POLYGON	
POINT
SPAN
MASK *
RoleType
TEAM 
ORG*$
StatValueAggType
SUM 
AVG*`
StatTimeAggType
NO_TIME_AGG 
YEAR	
MONTH
WEEK
DAY
HOUR

MINUTE*b
ValidationErrorType!
VALIDATION_ERROR_TYPE_NOT_SET 

RESTRICTED
DATABASE

FORMAT*[
InputIDConflictResolution(
$INPUT_ID_CONFLICT_RESOLUTION_NOT_SET 
SKIP

SUFFIXBY
com.clarifai.grpc.apiPZ7github.com/Clarifai/clarifai-go-grpc/proto/clarifai/api¢CAIPbproto3'
        , true);

        static::$is_initialized = true;
    }
}

