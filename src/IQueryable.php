<?php

	namespace Inlm\Model;

	use LeanMapper\Entity;
	use Inlm\QueryObject\IQuery;


	interface IQueryable
	{
		/**
		 * @return Entity[]
		 */
		public function find(IQuery $query);


		/**
		 * @return Entity
		 */
		public function findOne(IQuery $query);


		/**
		 * @return int
		 */
		public function findCount(IQuery $query);
	}