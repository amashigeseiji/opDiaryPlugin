<?php use_helper('opDiary') ?>

<?php if (count($diaryList)): ?>
<?php
$list = array();
foreach ($diaryList as $diary)
{
  $list[] = sprintf('[%s] %s',
              op_diary_format_date($diary->getCreatedAt(), 'XShortDate'),
              link_to($diary->getTitleAndCount(false), 'diary_show', $diary)
            );
}
$moreInfo = array();
$moreInfo[] = link_to(__('More'), 'diary/listMember?id='.$memberId);
$options = array(
  'title'  => __('Recently Posted Diaries'),
  'border' => true,
  'moreInfo' => $moreInfo,
);
include_list_box('memberDiaryList', $list, $options);
?>
<?php endif; ?>